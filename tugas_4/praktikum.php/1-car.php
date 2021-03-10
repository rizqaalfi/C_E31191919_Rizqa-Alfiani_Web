<?php

/**
 * contoh penerapan Inheritance
 */
class car1
{

  private $model;
  public function setModel($model)
  {
    $this->model = $model;
  }

  public function hello()
  {
    return "beep! I am a <i>" . $this->model . "<i><br>";
  }
}

class sportcar1 extends car1
{
}

$sportCar1 = new sportcar1();

$sportCar1->setModel("Mercedes Benz");
echo $sportCar1->hello();
