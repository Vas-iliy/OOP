<?php

require_once ('classes/Car.php');

function debug ($data) {
    echo "<pre>" . print_r($data, 1) , "</pre>";
}

$car1 = new Car();
$car1->color = 'black';
$car1->brand = 'Volvo';
$car1->speed = 200;

echo $car1->getCarInfo();


