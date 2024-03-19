<?php
/**
* Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
    class Calculator {
        private $num1;
        private $num2;

        public function __construct($num1, $num2) {
            $this->num1 = $num1;
            $this->num2 = $num2;
        }

        public function tambah() {
            return $this->num1 + $this->num2;
        }

        public function kurang() {
            return $this->num1 - $this->num2;
        }

        public function bagi() {
            return $this->num1 / $this->num2;
        }

        public function kali() {
            return $this->num1 * $this->num2;
        }
    }

    $calculator = new Calculator(10, 5);
    echo "Pertambahan: " . $calculator->tambah() . "<br>";
    echo "Pengurangan: " . $calculator->kurang() . "<br>";
    echo "Pembagian: " . $calculator->bagi() . "<br>";
    echo "Perkalian: " . $calculator->kali() . "<br>";
?>