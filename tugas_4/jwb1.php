<?php

abstract class mobilLengkap
{
  protected $TV;


  public function nontonTV()
  {
    return $this->TV;
  }
}
class MobilBMW extends mobilLengkap
{
  public function nontonTV()
  {
    return "Tv dihidupkan, Tv Mencari Chanel, Tv
    Menampilkan gambar";
  }
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
echo $obj1->nontonTV() . "<br>";

$obj2 = new MobilBMWberaksi();
echo $obj2->nontonTV();
