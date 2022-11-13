<?php $title = "Ürünler"; include '../../partials/header.php' ?>
<?php include '../../partials/navbar.php' ?>
<div style="margin-top: 60px;"></div>
<?php include '../../../Models/database.php'; ?>
<?php

$tablo = $conn->query('select * from products');
    if($tablo->num_rows > 0) {
        echo '
        <div class="scroll">
        <table class="table table-striped table-hover" id="table-list full-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Ürün Ad</th>
                </tr>
            </thead>
            <tbody>';

        while ($satir = $tablo->fetch_assoc()) {
            echo '<tr><td>' .  $satir["ProductId"] . '</td>' . 
            '<td>' .  $satir["Name"] . '</td>' .
            '<td>
                <button class="btn btn-secondary productinfo" 
                data-id='. $satir["ProductId"].' data-bs-toggle="modal" 
                data-bs-target="#productEdit" type="button">
                    Düzenle
                </button>' . 
            '<td> 
                <button class="btn btn-primary deleteProduct"
                data-id='. $satir["ProductId"].' data-bs-toggle="modal" data-bs-target="#productDelete" type="button">
                  <i class="bi bi-trash"></i>
                </button>                
            </td></tr>';
        }
        echo '</tbody></table></div>';
    } 
    else {
        echo "<h3 style='color: red; text-align: center '>Ürün Bulunamadı</h3>";
    }

?>

<?php 
    include 'SettingModal.php' 
?>

<?php include '../../partials/footer.php' ?>