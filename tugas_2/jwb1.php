<?php
class laptop
{
  public $pemilik;
  public $merk;

  function hidupkan_laptop()
  {
    return "Hidupkan Laptop " . $this->merk . " punya " . $this->pemilik;
  }
  function matikan_laptop()
  {
    return "Matikan Laptop " . $this->merk . " punya " . $this->pemilik;
  }
  function restrat_laptop()
  {
    return "Matikan Laptop " . $this->merk . " punya " . $this->pemilik . "<br>" .
      "Hidupkan Laptop " . $this->merk . " punya " . $this->pemilik;
  }
}

$A = new laptop();
$B = new laptop();
$C = new laptop();

$A->merk = "Asus";
$B->merk = "Acer";
$C->merk = "Lenovo";

$A->pemilik = "A";
$B->pemilik = "B";
$C->pemilik = "C";

echo $A->hidupkan_laptop() . "<br><br>" .
  $B->matikan_laptop() . "<br><br>" .
  $C->restrat_laptop();
