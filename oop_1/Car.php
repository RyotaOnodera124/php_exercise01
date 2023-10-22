<?php

class Car {
    private $name;
    private $number;
    private $color;

    public function __construct($name, $number, $color) {
        $this->name = $name;
        $this->number = $number;
        $this->color = $color;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($Name) {
        $this->name = $Name;
    }

    public function getNumber() {
        return $this->number;
    }

    public function setNumber($Number) {
        $this->number = $Number;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($Color) {
        $this->color = $Color;
    }

    public function information() {
        return "車の車種:" . $this->name . PHP_EOL . "車体番号:" . $this->number . PHP_EOL .  "カラー:" . $this->color;
    }
}
