<?php

/** 
1. Buatlah sebuah kelas bernama ‘MobilBMW’, yang merupakan inherit dari class
‘mobiLengkap’ kemudian deklarasikan beberapa methods dari ‘mobilLengkap’ tersebut,
misalnya: ‘nontonTV’ yang isinya menampilkan Tv dihidupkan, Tv Mencari Chanel, Tv
Menampilkan gambar. Kemudian buat class ‘MobilBMWberaksi’ yang didalamnya
terdapat methods ‘nontonTv’, ‘HidupkanMobil’, ‘MatikanMobil’, ‘ubahGigi’
 */

abstract class mobilLengkap
{
  protected $TV;

  //setter
  public function setTV($tv)
  {
    $this->TV = $tv;
  }


  public function nontonTV()
  {
    echo $this->TV . " Tv dihidupkan, Tv Mencari Chanel, Tv
    Menampilkan gambar";
  }
}
class MobilBMW extends mobilLengkap
{
}

class MobilBMWberaksi extends MobilBMW
{
  public function nontonTV()
  {
    return "TV menyala";
  }
  public function HidupkanMobil()
  {
    return "mobil Hidup";
  }
  public function MatikanMobile()
  {
    return "mobil mati";
  }
  public function ubahGigi()
  {
    return "gigi berpindah";
  }
}

$obj1 = new MobilBMW();
$obj1->setTV("Toshiba");
echo $obj1->nontonTV() . "<br>";

$obj2 = new MobilBMWberaksi();
echo $obj2->nontonTV();
