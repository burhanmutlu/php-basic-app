<?php $title = "Müşteri Ekle"; include '../../partials/header.php' ?>
<?php include '../../partials/navbar.php' ?>


<div style="margin-top: 60px;"></div>
<span >
    <h1 style="text-align: center;margin-top: 5%; color: black;">
        <i class="bi bi-person-plus-fill"></i><br>
            Müşteri Ekle
    </h1>
</span>

<form action="/tunelyazilim/Controllers/ContAddCustomer.php" class="add-customer" method="GET">
    <div style="margin-top: 60px;" class="row m-4 pt-1" > 
        <div class="col-sm-6 mx-auto my-3 " >

            <div class="mb-3">
                <input type="text" name="txt_Name" class="form-control" aria-required="true" placeholder="Müşteri Adı" required>
            </div>
            
            <div class="mb-3">
                <input type="text" name="txt_Tel" class="form-control" aria-required="true" placeholder="Telefon" required>
            </div>

            <div class="mb-3">   
                <input type="email" name="txt_Email" class="form-control" placeholder="E-Posta">    
            </div>

            <div class="mb-3">   
                <input type="text" name="txt_Address" class="form-control" id="inputAddress" placeholder="Adres">   
            </div>

            <div class="mb-3">   
                <input type="text" name="txt_Address2" class="form-control" id="inputAddress2" placeholder="Adres 2">
            </div>

            <div class="mb-3">   
                <input type="text" name="txt_City" class="form-control" id="inputCity" placeholder="İl">
            </div>

            <div class="mb-3">   
                <input type="text" name="txt_District" class="form-control" id="inputCity" placeholder="İlçe">
            </div>

            <button type="submit" style="float: right;" class="btn btn-dark col-sm-5 btn-class-sm">
                <b>
                    Ekle
                </b>
            </button>      
        </div>
    </div>
</form>

<?php include '../../partials/footer.php' ?>