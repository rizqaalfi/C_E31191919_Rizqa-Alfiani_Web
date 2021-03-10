<?php

//contoh penerapan hak akses private

class car
{

  private $model;

  public function getMOdel()
  {
    return "the car model is " . $this->model;
  }
}

$mercedes = new car();

$mercedes->model = "Mercedes Benz";
echo $mercedes->getModel();
