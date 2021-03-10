<?php

/**
 * contoh penerapan abstract
 * Abstract tidak bisa di akses, hanya memberikan properti untuk turunannya
 */

abstract class car4
{
  protected $tankVolume;


  public function setTankVolume($volume)
  {
    $this->tankVolume = $volume;
  }

  abstract public function calcNumMillesOnFullTank();
}
