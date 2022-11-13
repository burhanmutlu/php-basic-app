<?php $title = "Ürün Ekle"; include '../../partials/header.php' ?>
<?php include '../../partials/navbar.php' ?>

<div style="margin-top: 60px;"></div>

<span>
    <h1 style="text-align: center;margin-top: 5%; color: black;">
        <i class="bi bi-plus-circle-fill"></i><br>
            Ürün Ekle
    </h1>
</span>

<form action="/tunelyazilim/Controllers/ContAddProduct.php" method="GET">
    <div class="row m-5 pt-1" > 
        <div class="col-sm-6 mx-auto my-3 " > 
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Ürün Adı" name="txt_product">
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