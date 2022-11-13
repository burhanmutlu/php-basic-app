<?php require_once '../../../Models/database.php' ?>
<?php require_once '../../../Models/customer.php' ?>


<?php

if (isset($_POST['userid'])){
  $userid = $_POST['userid'];
  $c = new Customer();
  $sql  = 'select * from customers where CustomerId ='.$userid;
  $result = $conn->query($sql);
  while ($satir = $result->fetch_assoc()){
    $custID = $satir["CustomerId"];
    $c->setName($satir["Name"]);
    $c->setTel($satir["Tel"]);
    $c->setEmail($satir["Email"]);
    $c->setAddress($satir["Address"]);
    $c->setAddress2($satir["Address2"]);
    $c->setCity($satir["City"]);
    $c->setDistrict($satir["District"]);
  }
}

?>

<form action="" method="GET" id="guncelleformu" onsubmit="return false;" > 
        <div class="col-sm-12 mx-auto my-0 "  >
            <div class="mb-0">
            <input type="text" value='<?php echo $custID; ?>' name="txt_Id" style="display: none;">
                <label>Müşteri Adı</label>
                <input type="text" value='<?php echo $c->getName()?>' name="txt_Name" class="form-control" aria-required="true" required>
            </div>
            
            <div class="mb-0">
                <label>Telefon</label>
                <input type="text" value='<?php echo $c->getTel()?>' name="txt_Tel" class="form-control" aria-required="true" required>
            </div>

            <div class="mb-0">   
                <label>E-Posta</label>
                <input type="email" value='<?php echo $c->getEmail()?>' id="txt_Email" name="txt_Email" class="form-control">    
            </div>

            <div class="mb-0">   
                <label>Adres</label>
                <input type="text" value='<?php echo $c->getAddress()?>'  name="txt_Address" class="form-control" >   
            </div>

            <div class="mb-0">   
                <label>Adres 2</label>
                <input type="text" value='<?php echo $c->getAddress2()?>' name="txt_Address2" class="form-control" >
            </div>

            <div class="mb-0">   
                <label>İl</label>
                <input type="text" value='<?php echo $c->getCity()?>' name="txt_City" class="form-control">
            </div>

            <div class="mb-2">   
                <label>İlçe</label>
                <input type="text" value='<?php echo $c->getDistrict()?>' name="txt_District" class="form-control" >
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="submit" onclick="updateCustomer();" class="btn btn-primary">Kaydet</button>
        </div>
</form>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function updateCustomer(){ 
        var result = $("#guncelleformu").serialize();
        $.ajax({
            type: "GET",
            data : result,
            url: "/tunelyazilim/Views/page/Settings/updateCustomer.php",
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
