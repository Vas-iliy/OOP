<?php

require_once ('classes/Car.php');

function debug ($data) {
    echo "<pre>" . print_r($data, 1) , "</pre>";
}

$car1 = new Car();
$car1->color = 'black';
$car1->brand = 'Volvo';
$car1->speed = 200;
/*$car1->year = 2018;
debug($car1);*/

$car2 = new Car();
$car2->color = 'white';
$car2->brand = 'bmw';
/*$car2->year = 2017;
debug($car2);*/

echo "<h3>О моем авто</h3>
Бренд{$car1->brand}<br>
Цвет{$car1->color}<br>
Кол-во колес{$car1->wheels}<br>
Скорость{$car1->speed} <br>";


