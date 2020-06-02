<?php

class Car {
    public $color;
    public $wheels;
    public $speed;
    public $brand;

    public static $countCar =0;

    const TEST_CAR = 'test';
    const TEXT_CAR_SPEED = 250;

    public static function getCount () {
        echo self::$countCar;
    }

    public function __construct($color, $brand, $wheels = 4, $speed = 180 )
    {
        $this->color = $color;
        $this->brand = $brand;
        $this->wheels = $wheels;
        $this->speed = $speed;

        self::$countCar++;
    }

    public function getCarInfo () {
        return "<h3>О моем авто</h3>
            Бренд{$this->brand}<br>
            Цвет{$this->color}<br>
            Кол-во колес{$this->wheels}<br>
            Скорость{$this->speed} <br>";
    }

    public static function testCar () {
        return "<h3>О моем авто</h3>
            Тестовое название " . self::TEST_CAR . "<br>
            Скорость" . self::TEXT_CAR_SPEED . " <br>";
    }


}