<?php

//contok penerapan hak akses public

class car
{
  public $model;
  public function getModel()
  {
    return "the car model is " . $this->model;
  }
}

$mercedes = new car();
$mercedes->model = "Mercedes Benz";
echo $mercedes->getModel();
