<?php require_once '../../../Models/database.php' ?>
<?php require_once '../../../Models/customer.php' ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script>
  
  $(document).ready(function() {
    $('.userinfo').click(function(){
      var userid = $(this).data('id');
      $.ajax({
        url: '/tunelyazilim/Views/page/Settings/ajaxfile.php',
        type: 'post',
        data: {userid: userid},
        success: function(response) {
          $('.modal-body').html(response);
        }
      });
    });
  });

</script>



<script>

  $(document).ready(function() {
    $('.productinfo').click(function(){
      var productid = $(this).data('id');
      $.ajax({
        url: '/tunelyazilim/Views/page/Settings/productajax.php',
        type: 'post',
        data: {productid: productid},
        success: function(response) {
          $('.modal-body-product').html(response);
        }
      });
    });
  });

</script>


<script>
  
  $(document).ready(function() {
    $('.deleteuser').click(function(){
      var userid = $(this).data('id');
      $.ajax({
        url: '/tunelyazilim/Views/page/Settings/ajaxdeletecust.php',
        type: 'post',
        data: {userid: userid},
        success: function(response) {
          $('.modal-body-deleteU').html(response);
        }
      });
    });
  });

</script>





<div class="modal fade" id="customerEdit"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Müşteri Bilgisi Düzenle</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="productEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ürün Bilgisi Düzenle</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body-product">
      
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="productDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Müşteriyi silmek istiyor musunuz?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body-deleteU">
      
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="customerDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ürünü silmek istiyor musunuz?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          Silinen veriler geri getirilemez!
        </p>
      </div>
      <div class="modal-footer">
        <button type="submit" onclick="deleteProduct();" class="btn btn-primary" >Sil</button>
      </div>
    </div>
  </div>
</div>