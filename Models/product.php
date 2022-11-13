<?php 

class Product {
    public $name;

    function __construct() {
        $name = "";
    }

    function getName() {
        return $this->name;
    }

    function setName($a) {
        $this->name = $a;
        unset($a);
    }

}

?>