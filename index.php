<link rel="stylesheet" href="style.css">

<?php

// include "Car.php";

// include "Tire.php";

include "Train.php";
// $car1 = new Car("Audi", 189083);
// $car2 = new Car("Opel", 170943);


// $tire1 = new Tire(17, "Ziemas", "Slikti");
// $tire2 = new Tire(19, "Vasaras", "Labi");

// $car1 = new Car("Audi", 189083);
// echo Car::$describe;
// Car::$makenoise();

$train = new Train("Vi", 1000, 2209357);
echo $train->brand, " ";
echo $train->trackGauge;

 ?>