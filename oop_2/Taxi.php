<?php

require_once __DIR__ . "/Car.php";

class Taxi extends Car
{
    private $passenger;

    public function __construct($name, $number, $color)
    {
        parent::__construct($name, $number, $color);
        $this->passenger = 0;
    }

    public function setPassenger($passenger)
    {
        $this->$passenger = $passenger;
    }

    public function getPassenger()
    {
        return $this->passenger;
    }

    public function pickUp($number)
    {
        $this->passenger = $this->passenger + $number;
        return strval($number) . "人乗車しました" . PHP_EOL;
    }

    public function lower($number)
    {
        if ($this->passenger - $number >= 0) {
            $this->passenger = $this->passenger - $number;
            return strval($number) . "人降車しました" . PHP_EOL;
        } else {
            return strval($number) . "人は降車できません" . PHP_EOL;
        }
    }

    public function count()
    {
        return "乗車人数:" . $this->passenger . "人" . PHP_EOL;
    }

    public function information()
    {
        return parent::information() . $this->count();
    }
}
