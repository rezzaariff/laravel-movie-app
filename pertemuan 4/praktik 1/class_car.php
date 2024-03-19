<?php
    //hak akses: public, private, protected
    //property
    class Car {
        public $brand = 'Tesla';
        public $color;

        //method
        function getBrand() {
            return $this->brand;
        }
        function getColor() {
            return $this->color;
        }
    }
 

    //object
    $tesla = new Car();
    $supra = new Car();

    //set value / setter
    $tesla->brand = 'Tesla';
    $tesla->color = 'Yellow';
    '<br>';
    $supra->brand = 'Supra';
    $supra->color = 'Red';

    //echo
    echo $tesla->getBrand();
    echo $tesla->getColor();
    echo '<br>';
    echo $supra->getBrand();
    echo $supra->getColor();
?>