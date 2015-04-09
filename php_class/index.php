<?php
require_once 'CarClass.php';
require_once 'functions.php';

$car = new Car();
echo $car->getSpeed() . br();
$car->speedUp();
$car->speedUp();
$car->speedUp();
echo $car->getSpeed() . br();
echo $car->speedDown() .br();
echo $car->getSpeed() . br();



