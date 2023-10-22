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

    public function setName($newName) {
        $this->name = $newName;
    }

    public function getNumber() {
        return $this->number;
    }

    public function setNumber($newNumber) {
        $this->number = $newNumber;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($newColor) {
        $this->color = $newColor;
    }

    public function information() {
        return "車の車種:" . $this->name . "\n車体番号:" . $this->number . "\nカラー:" . $this->color;
    }
}
