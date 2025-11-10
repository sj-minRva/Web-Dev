<?php
class Car{
    public $color;
    public $model;

    public function __construct($color = null, $model = null){
        $this->color = $color;
        $this->model = $model;
    }

    public function startEngine(){
        echo "The car is a " . $this->color . " " . $this->model . ".\n";
    }
}


$myCar2 = new Car();
$myCar2->color = "red";
$myCar2->model = "Toyota";
$myCar2->startEngine();

$myCar3 = new Car("blue", "Honda");
$myCar3->startEngine();

?>