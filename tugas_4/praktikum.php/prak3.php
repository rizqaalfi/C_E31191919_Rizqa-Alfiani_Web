<?php

/**
 * contoh penerapan protected pada properti
 */
class car3
{
  protected $model;

  public function setModel($model)
  {
    $this->model = $model;
  }
}

class sportcar3 extends car3
{
  public function hello()
  {
    return  "beep! I am a <i>" . $this->model . "<i><br>";
  }
}
$sportCar2 = new $sportCar3();
