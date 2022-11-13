<?php include '../Models/database.php'; ?>
<?php include '../Models/customer.php'; ?>
<?php include '../Views/partials/header.php'; ?>
<?php 

    $c = new Customer();

    if(isset($_GET)) {
        $c->setName($_GET['txt_Name']);
        $c->setTel($_GET['txt_Tel']);
        $c->setEmail($_GET['txt_Email']);
        $c->setAddress($_GET['txt_Address']);
        $c->setAddress2($_GET['txt_Address2']);
        $c->setCity($_GET['txt_City']);
        $c->setDistrict($_GET['txt_District']);
        $sql = "INSERT INTO `customers` (`Name`, `Tel`, `Email`, `Address`, `City`, `District`, `Address2`) VALUES ('$c->name', '$c->tel', '$c->email', '$c->address', '$c->city', '$c->district', '$c->address2')";
    }

    echo "<br>";
    if ($conn->query($sql) === TRUE) 
    {
        echo '
            <div class="alert alert-secondary" role="alert">
                Müşteri Başarılı Bir Şekilde Eklendi.
                3 Sn İçinde Otomatik Olarak Yönlendirilmezseniz 
                <a href="/tunelyazilim/musteriler" class="alert-link">buraya</a> tıklayınız.
            </div>
        ';
    }
    else 
    { 
        echo "<p>Hata: " . $sql . "<br>" . $conn->error . "</p><br>";
    }  


    header("refresh:3; url= http://$servername/tunelyazilim/musteriler");
    die();
    
?>