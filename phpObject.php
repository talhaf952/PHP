<?php
class Car
{
 public $color;
 public $model;
 public $look;
 
 public function __construct($color,$model,$look)
 {
     $this->color=$color;
     $this->model=$model;
     $this->look=$look;
 }
 public function message()
 {
    return  "My car color is ". $this->color. ", model is " . $this->model . " and " . $this->look . " look." ;
 }
}
$obj1=new Car("Red", " Honda", " Good");
echo $obj1->message();

echo "\n";

$obj2 =new Car("White", "Suzuki", " New");
echo $obj2->message();

?>
