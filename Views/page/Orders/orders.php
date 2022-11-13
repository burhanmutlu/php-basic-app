<?php $title = "Siparişler"; include '../../partials/header.php' ?>
<?php include '../../partials/navbar.php' ?>
<div style="margin-top: 60px;"></div>
<?php include '../../../Models/database.php'; ?>

<?php

$tablo = $conn->query('SELECT * FROM Orders INNER JOIN Customers ON Orders.CustomerId=Customers.CustomerId order by LogDate Asc; ');
    if($tablo->num_rows > 0) {
        echo '
        <div class="scroll">
        <table class="table table-striped table-hover" id="table-list full-table">
            <thead>
                <tr>
                    <th>Nu</th>
                    <th>Tarih</th>
                    <th>Müşteri Adı</th>
                    <th>Müşteri Tlf</th>
                    <th>Müşteri Adres</th>
                    <th>Tutar</th>
                </tr>
            </thead>
            <tbody>';
            
        while ($satir = $tablo->fetch_assoc()) {
            echo '<tr><td>' .  $satir["ordersId"] . '</td>' . 
            '<td>' .  $satir["LogDate"] . '</td>' .
            '<td>' .  $satir["Name"] . '</td>' .
            '<td><a style="color:black; text-decoration:none" href="tel:'.$satir["Tel"] . '">' .  $satir["Tel"] . '</a></td>' .
            '<td>' .  $satir["Address"] . '</td>' .
            '<td>' .  $satir["Amount"] . 
            '<td> 
                <button class="btn btn-secondary" id="'. $satir["CustomerId"]. '"
                  onClick="reply_click(this.id)" data-bs-toggle="modal" data-bs-target="#orderView" type="button">
                    Detay
                </button>' .
            '</td></tr>';

        }
        echo '</tbody></table></div>';
    } 
    else {
        echo "<h3 style='color: red; text-align: center '>Sipariş Bulunamadı</h3>";
    }

?>

<div class="modal fade" id="orderView" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sipariş Detayı</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="ciktiButon">
      <?php

        $tablo = $conn->query('SELECT * FROM Orders INNER JOIN Customers ON Orders.CustomerId=Customers.CustomerId where Ordersid=5; ');
            if($tablo->num_rows > 0) {
                
                    
                while ($satir = $tablo->fetch_assoc()) {

                }
                echo '</tbody></table></div>';
            } 
            else {
                echo "<h3 style='color: red; text-align: center '>Sipariş Bulunamadı</h3>";
            }
            

        ?>
        
        <div class="modal-footer">
            <button type="submit"  class="btn btn-primary"  >Yazdır</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>
            $('#ciktiButon').click(function(){
                $("#orderView").print();
            });
</script>

<?php include '../../partials/footer.php' ?>