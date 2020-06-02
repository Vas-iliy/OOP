<?php

require_once ('classes/Car.php');

function debug ($data) {
    echo "<pre>" . print_r($data, 1) , "</pre>";
}

$car1 = new Car('black', 'volvo');

echo $car1->getCarInfo();


