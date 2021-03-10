<?php

class rectangle implements shape
{
  private $width;
  private $height;

  public function __construct($width, $height)
  {
    $this->width = $width;
    $this->height = $height;
  }

  public function calcArea()
  {
    return $this->width * $this->height;
  }
}

$circ = new circle(3);
$rect = new rectangle(3, 4);

echo $circ->calcArea();
echo $rect->calcArea();
