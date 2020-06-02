<?php

require_once ('classes/Car.php');

function debug ($data) {
    echo "<pre>" . print_r($data, 1) , "</pre>";
}
Car::getCount();

$car1 = new Car('black', 'volvo');

Car::getCount();

echo $car1->getCarInfo();

echo Car::testCar();


