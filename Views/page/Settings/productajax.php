<?php require_once '../../../Models/database.php' ?>
<?php require_once '../../../Models/product.php' ?>

<?php

if (isset($_POST['productid'])){
  $productid = $_POST['productid'];
  $p = new Product();
  $sql  = 'select * from products where ProductId ='.$productid;
  $result = $conn->query($sql);
  while ($satir = $result->fetch_assoc()){
    $prdID = $satir["ProductId"];
    $p->setName($satir["Name"]);
  }
}

?>


<form action="" method="GET" id="guncelleformuP" onsubmit="return false;">
        <div class="col-sm-12 mx-auto my-3 " > 
            <div class="mb-12">
            <input type="text" value='<?php echo $prdID; ?>' name="txt_Id" style="display: none;">
                <label>Ürün Adı</label>
                <input type="text" value="<?php echo $p->getName()?>" class="form-control" name="txt_product">
            </div>  
        </div>
        <div class="modal-footer">
            <button type="submit" onclick="updateProduct();" class="btn btn-primary">Kaydet</button>
        </div>
</form>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function updateProduct(){ 
        var result = $("#guncelleformuP").serialize();
        $.ajax({
            type: "GET",
            data : result,
            url: "/tunelyazilim/Views/page/Settings/updateProduct.php",
            success: function (x) {
                if ($.trim(x) == "bos") {
                    sweetAlert('hata', 'lütfen tüm alanları doldurun', 'error');
                } else if($.trim(x) == "ok") {
                    sweetAlert('basarili', 'güncelleme yapıldı', 'success');
                    var delayInMilliseconds = 1500;
                    setTimeout(function() {
                        location.reload()
                    }, delayInMilliseconds);
                }
             }
        });
    }
</script>