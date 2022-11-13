<?php require_once '../../../Models/database.php' ?>
<?php require_once '../../../Models/product.php' ?>


<?php 

    $p = new Product();

    if(isset($_POST)) {
        $ID = $_GET['txt_Id'];

        if (!$p->name) {
            echo "bos";
        } else {
            $sql = "DELETE `products` WHERE `products`.`ProductId` = $ID";

            $durum = $conn->query($sql);
            if ($durum) {
                echo "ok";

            }
        }  
    }   

?>

