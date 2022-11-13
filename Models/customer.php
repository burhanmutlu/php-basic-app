<?php 

class Customer {
    public $name;
    public $tel;
    public $email;
    public $address;
    public $address2;
    public $city;
    public $district;

    function __construct() {
        $name = "";
        $tel = "";
        $email = "";
        $address = "";
        $address2 = "";
        $city = "";
        $district = "";
    }

    function getName() {
        return $this->name;
    }

    function setName($a) {
        $this->name = $a;
        unset($a);
    }
    function getTel() {
        return $this->tel;
    }

    function setTel($a) {
        $this->tel = $a;
        unset($a);
    }
    function getEmail() {
        return $this->email;
    }

    function setEmail($a) {
        $this->email = $a;
        unset($a);
    }
    function getAddress() {
        return $this->address;
    }

    function setAddress($a) {
        $this->address = $a;
        unset($a);
    }
    function getAddress2() {
        return $this->address2;
    }

    function setAddress2($a) {
        $this->address2 = $a;
        unset($a);
    }
    function getCity() {
        return $this->city;
    }

    function setCity($a) {
        $this->city = $a;
        unset($a);
    }
    function getDistrict() {
        return $this->district;
    }

    function setDistrict($a) {
        $this->district = $a;
        unset($a);
    }
    
}

?>