<?php

    class Car{
        public $brand;
        private $mileage;

        public function __construct($b, $m) {
            $this->brand = $b;
            $this->mileage = $m;
        }

        public function __destruct(){
        echo $this->brand, " ";
        echo "is dead at mileage ";
        echo $this->mileage, " ", "<br>";
        }
    }
;

?>
