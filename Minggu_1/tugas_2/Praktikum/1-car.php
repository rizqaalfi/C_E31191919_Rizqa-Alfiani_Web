<?php

//penggunaan $this

class car
{
  //properties
  public $comp;
  public $color = 'beige';
  public $hasSunRoof = true;

  //method
  public function hello()
  {
    return "Beep I am a <i>" . $this->comp . "<i>, and I am <i>" . $this->color;
  }
}

//create object
$bmw = new car();
$mercedes = new car();

//set value
$bmw->color = "blue";
$bmw->comp = 'BMW';
$mercedes->comp = "Mercedes Benz";

echo $bmw->hello();
