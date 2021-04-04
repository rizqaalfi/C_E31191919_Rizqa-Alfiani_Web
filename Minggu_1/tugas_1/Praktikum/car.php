<?php

/**
 * pembuatan class, properties dan object
 */
class car
{

  //properties
  public $comp;
  public $color = 'beige';
  public $hasSunRoof = true;

  //method
  public function hello()
  {
    return "beep";
  }
}

//object
$bmw = new car();
$mercedes = new car();

//get values
echo $bmw->color . "<br>";
echo $mercedes->color . "<hr>";

//set values
$bmw->color = 'blue';
$bmw->comp = "BMW";
$mercedes->comp = "Merchedes Benz";

//get values
echo $bmw->color . "<br>";
echo $mercedes->color . "<br>";
echo $bmw->comp . "<br>";
echo $mercedes->comp . "<br>";

//method get a beep
echo $bmw->hello();
echo $mercedes->hello();
