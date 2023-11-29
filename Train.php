<?php

Class Train{
    public $brand;
    public $trackGauge;
    private $mileage;

public function __construct($brand, $trackGauge, $mileage){
$this->brand = $brand;
$this->trackGauge = $trackGauge;
$this->mileage = $mileage;
}
}


?>