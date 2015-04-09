<?php

class Car {
    private $speed = 0;

    public function speedUp() {
        $this->speed += 10;
    }

    public function speedDown() {
        $this->speed -= 10;
    }

    public function getSpeed() {
        return $this->speed;
    }
}