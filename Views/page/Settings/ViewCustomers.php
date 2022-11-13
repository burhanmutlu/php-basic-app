<?php $title = "Müşteriler"; include '../../partials/header.php' ?>
<?php include '../../partials/navbar.php' ?>

<div style="margin-top: 60px;"></div>
<?php include '../../../Models/database.php'; ?>

<?php

$tablo = $conn->query('select * from customers');
    if($tablo->num_rows > 0) {
        echo '
        <div class="scroll">
        <form action="">
        <table class="table table-striped table-hover" id="table-list full-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Müşteri Ad</th>
                    <th>Tel</th>
                    <th>Email</th>
                    <th>Adres</th>
                    <th>Adres2</th>
                    <th>İl</th>
                    <th>İlçe</th>
                </tr>
            </thead>
            <tbody>';

        while ($satir = $tablo->fetch_assoc()) {
            echo '<tr><td>' .  $satir["CustomerId"] . '</td>' . 
            '<td>' .  $satir["Name"] . '</td>' .
            '<td>' .  $satir["Tel"] . '</td>' .
            '<td>' .  $satir["Email"] . '</td>' .
            '<td>' .  $satir["Address"] . '</td>' .
            '<td>' .  $satir["Address2"] . '</td>' .
            '<td>' .  $satir["City"] . '</td>' .
            '<td>' .  $satir["District"] . '</td>' .
            '<td>
                <button class="btn btn-secondary userinfo"
                 data-id='. $satir["CustomerId"].' data-bs-toggle="modal" 
                 data-bs-target="#customerEdit" type="button">
                    Düzenle
                </button>' . 
            '<td> 
                <button class="btn btn-primary deleteuser"
                data-id='. $satir["CustomerId"].' 
                data-bs-toggle="modal" data-bs-target="#customerDelete" type="button">
                  <i class="bi bi-trash"></i>
                </button>                
            </td></tr>';
        }
        echo '</tbody></table></form></div>';
    } 
    else {
        echo "<h3 style='color: red; text-align: center '>Kullanıcı Bulunamadı</h3>";
    }

?>

<?php 
  include 'SettingModal.php' 
?>

<?php include '../../partials/footer.php' ?>