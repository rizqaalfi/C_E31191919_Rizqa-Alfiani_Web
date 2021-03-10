<?php
class circle implements shape
{
  private $radius;

  public function __construct($radius)
  {

    $this->radius = $radius;
  }

  public function calcArea()
  {
    return $this->radius * $this->radius * pi();
  }
}
