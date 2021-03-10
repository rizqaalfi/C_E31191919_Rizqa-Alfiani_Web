<?php

/**
 * contoh penerapan private pada properti
 */

class car2
{
  private $model;
  public function setModel($model)
  {
    $this->model = $model;
  }
}

class sportcar2 extends car2
{
  public function hello()
  {
    return "beep! I am a <i>" . $this->model . "<i><br>";
  }
}

$sportCar2 = new sportcar2();
$sportCar2->setModel("Mercedes Benz");
