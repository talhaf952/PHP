<?php
class Car
{
 public $color;
 public $model;
 
 public function __construct($color,$model)
 {
     $this->color=$color;
     $this->model=$model;
 }
 public function message()
 {
    return  "My car color is ". $this->color. " and model is " . $this->model ." !";
 }
}
$obj1=new Car("Red", " Honda");
echo $obj1->message();

echo "\n";

$obj2 =new Car("White", "Suzuki");
echo $obj2->message();


?>
