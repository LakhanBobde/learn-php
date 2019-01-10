<?php

class Car{
 Static $wheels =4;
 var $hood =1;
 function movewheels(){
 car::$wheels =10;
 } 
}

$bmw = new Car();
Car::movewheels();
echo Car::$wheels;
    ?>