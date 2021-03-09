<?php

class kalkulator
{

  private $a = 2;
  private $b = 8;
  private $c = 10;

  public function tambah()
  {
    return $this->a + $this->b + $this->c;
  }

  public function kurang()
  {
    return $this->c - $this->b;
  }

  public function bagi()
  {
    return $this->c / $this->a;
  }

  public function kali()
  {
    return $this->a * $this->b;
  }
}
//object
$hitung1 = new kalkulator();

//get
echo "Hasil penjumlahan abc : " . $hitung1->tambah() . "<br>" .
  "Hasil pembagian abc : " . $hitung1->bagi() . "<br>" .
  "Hasil perkalian abc : " . $hitung1->kali();
