<?php

interface car
{
  public function setModel($name);
  public function getModel();
}

class miniCar implements car
{
  private $model;

  public function setModel($name)
  {
    $this->model = $name;
  }

  public function getModel()
  {
    return $this->model;
  }
}

$miniCar1 = new miniCar();
$miniCar2 = new miniCar();
$miniCar3 = new miniCar();

$miniCar1->setModel("multi-purpose vehicle");
$miniCar2->setModel("sedan");
$miniCar3->setModel("hatchback");
