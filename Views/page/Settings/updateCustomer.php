<?php require_once '../../../Models/database.php' ?>
<?php require_once '../../../Models/customer.php' ?>


<?php 

    $c = new Customer();

    if(isset($_GET)) {
        $ID = $_GET['txt_Id'];
        $c->setName($_GET['txt_Name']);
        $c->setTel($_GET['txt_Tel']);
        $c->setEmail($_GET['txt_Email']);
        $c->setAddress($_GET['txt_Address']);
        $c->setAddress2($_GET['txt_Address2']);
        $c->setCity($_GET['txt_City']);
        $c->setDistrict($_GET['txt_District']);

        if (!$c->address || !$c->address2) {
            echo "bos";
        } else {
            $sql = "UPDATE `customers` SET 
        `Name` = '$c->name',
         `Tel` = '$c->tel', `Email` = '$c->email',
          `Address` = '$c->address', `City` = '$c->city', `District` = '$c->district',
           `Address2` = '$c->address2' WHERE `customers`.`CustomerId` = $ID";

            $durum = $conn->query($sql);
            if ($durum) {
                echo "ok";
            }
        }  
    }   

?>

