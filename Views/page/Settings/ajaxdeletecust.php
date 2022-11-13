<?php require_once '../../../Models/database.php' ?>
<?php require_once '../../../Models/customer.php' ?>


<?php

if (isset($_GET['userid'])){
  $userid = $_GET['userid'];
  $sql  = 'select * from customers where CustomerId ='.$userid;
  $result = $conn->query($sql);
  while ($satir = $result->fetch_assoc()){
    $custID = $satir["CustomerId"];
  }
}
?>




<form action="" method="GET" id="deleteuser" onsubmit="return false;">
    <input type="text" value='<?php echo $custID; ?>' name="txt_Id" style="display: block;">
    <p>
    Silinen veriler geri getirilemez!
    </p>
    </div>
    <div class="modal-footer">
    <button type="submit" onclick="deleteCustomer();" class="btn btn-primary" >Sil</button>
    </div>
</form>


<script>
    function deleteCustomer(){ 
        var result = $("#deleteuser").serialize();
        $.ajax({
            type: "GET",
            data : result,
            url: "/tunelyazilim/Views/page/Settings/deleteCustomer.php",
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