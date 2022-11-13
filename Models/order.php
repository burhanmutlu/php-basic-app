<?php 

class Order {
    public $amount;

    function __construct() {
        $amount = 0;
    }

    function getAmount() {
        return $this->amount;
    }

    function setAmount($a) {
        $this->amount = $a;
        unset($a);
    }

}

?>