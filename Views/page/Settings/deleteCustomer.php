<?php require_once '../../../Models/database.php' ?>
<?php require_once '../../../Models/customer.php' ?>


<?php 

    $c = new Customer();

    if(isset($_GET)) {
        $ID = $_GET['txt_Id'];
        $sql = "DELETE `customers` WHERE `customers`.`CustomerId` = $ID";

        $durum = $conn->query($sql);

        if (!$durum) {
            echo "bos";
        } else {
            if ($durum) {
                echo "ok";
            }
        }  
    }   

?>

