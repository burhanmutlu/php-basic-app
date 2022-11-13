<?php include '../Models/database.php'; ?>
<?php include '../Models/product.php'; ?>
<?php include '../Views/partials/header.php'; ?>
<?php 

    $p = new Product();

    if(isset($_GET)) {
        $p->setName($_GET['txt_product']);
        $sql = "INSERT INTO Products (Name) VALUES ('$p->name')";
    }

    if ($conn->query($sql) === TRUE) 
    {
        echo '
            <br><div class="alert alert-secondary" role="alert">
                Ürün Başarılı Bir Şekilde Eklendi.
                3 Sn İçinde Otomatik Olarak Yönlendirilmezseniz 
                <a href="/tunelyazilim/urunler" class="alert-link">buraya</a> tıklayınız.
            </div>
        ';
    } 
    else 
    {
        echo "<p>Hata: " . $sql . "<br>" . $conn->error . "</p><br>";
    }  


    header("refresh:3; url= http://$servername/tunelyazilim/urunler");
    die();
    
?>