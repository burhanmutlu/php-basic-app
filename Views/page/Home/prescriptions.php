
<p class="fs-1 addlistInfo">Reçete</p>

<?php
  $command = "select * from Products order by Name asc ";
  $veri = $conn->query($command);   
?>

<form class="row gy-2 gx-3 align-items-center addlist" method="POST">
  
  <div class="col-5">
    <label class="visually-hidden" for="autoSizingSelect">Ürünler</label>
    <select onclick="myFunction(this)" class="form-select" id="product">
      <option selected>Ürünler...</option>
      <?php 
        while ( $tum = $veri->fetch_assoc() ) {
          echo "<option value=" . $tum['ProductId'] . ">" . $tum['Name'] . "</option>";
        }      
      ?>
    </select>
  </div>
  
  <div class="col-4">
    <input type="text" class="form-control" id="txt_kw" placeholder="ör. 250 kw" >
  </div>
      
  <div class="col-auto">
    <button type="button" onclick="btn_ListeyeEkle()" class="btn btn-secondary">
      Ekle
    </button>
  </div>
</form></br>

<?php $conn->close(); ?>