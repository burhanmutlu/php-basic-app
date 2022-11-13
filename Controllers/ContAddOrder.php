<?php include '../Models/database.php'; ?>
<?php include '../Views/partials/header.php'; ?>

<?php 
    if(isset($_GET)) {
        $para = '5' ;       
        $sql = "INSERT INTO `orders` (`amount`) VALUES ('$para')";
    }
?>

<?php
    echo "<br>";
    if ($conn->query($sql) === TRUE) 
    {
        echo '
            <div class="alert alert-secondary" role="alert">
                Sipariş Başarılı Bir Şekilde Eklendi.
                3 Sn İçinde Otomatik Olarak Yönlendirilmezseniz 
                <a href="/tunelyazilim/siparisler" class="alert-link">buraya</a> tıklayınız.
            </div>
        ';
    }
    else 
    { 
        echo "<p>Hata: " . $sql . "<br>" . $conn->error . "</p><br>";
    }  


    header("refresh:3; url= http://$servername/tunelyazilim/siparisler");
    die();

?>