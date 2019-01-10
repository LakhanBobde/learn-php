<?php
   class Dog{               // create a class
  var $eye ="Blue";           //Some properties of class dog
  var $nose = "white";
  var $fur = "black";

  function showAll(){         // methode call
   echo $this->eye;
   echo $this->nose;
    echo $this->fur; 
     }
   }

   $pitbull = new Dog();    //Instantiate the class/create object and call is pitbull
    $pitbull->showAll();
?>