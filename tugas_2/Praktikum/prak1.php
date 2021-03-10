<?php
class car
{
  public $comp;
  public $color = 'beige';
  public $hasSunRoof = true;

  public function hello()
  {
    return "Beep I am a <i>" . $this->comp . "<i>, and I am <i>" . $this->color;
  }
}

$bmw = new car();
$mercedes = new car();

//set value
$bmw->color = "blue";
$bmw->comp = 'BMW';
$mercedes->comp = "Mercedes Benz";

echo $bmw->hello();
