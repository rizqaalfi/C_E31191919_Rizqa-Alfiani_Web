<?php

class car
{
  public $tank;

  public function fill($float)
  {
    $this->tank += $float;
    return $this;
  }

  public function ride($float)
  {
    $miles = $float;
    $gallons = $miles;
    $this->tank -= ($gallons);

    return $this;
  }
}

$bmw = new car();


//set value
$tank = $bmw->fill(10)->ride(40)->tank;

echo "the number of gallons left in this tank" . $tank . "gal";
