<?php

class Car {
    public $color;
    public $wheels;
    public $speed;
    public $brand;

    public function __construct($color, $brand, $wheels = 4, $speed = 180 )
    {
        $this->color = $color;
        $this->brand = $brand;
        $this->wheels = $wheels;
        $this->speed = $speed;

    }

    public function getCarInfo () {
        return "<h3>О моем авто</h3>
            Бренд{$this->brand}<br>
            Цвет{$this->color}<br>
            Кол-во колес{$this->wheels}<br>
            Скорость{$this->speed} <br>";
    }

    public  function __destruct()
    {
        var_dump($this);
    }


}