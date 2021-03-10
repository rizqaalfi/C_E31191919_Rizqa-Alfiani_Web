<?php

class kalkulator
{

  private $a;
  private $b;
  private $c;

  //setter
  public function set($a, $b, $c)
  {
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
  }

  //hiitung
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
$hitung1->set(7, 5, 6);

//set
//tidak bisa set diluar class, karena bersifat private

//get
echo "Hasil penjumlahan abc : " . $hitung1->tambah() . "<br>" .
  "Hasil pembagian abc : " . $hitung1->bagi() . "<br>" .
  "Hasil perkalian abc : " . $hitung1->kali();
