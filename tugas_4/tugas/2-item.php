<?php

/** 
2. Buatlah class Topi, class Celana, Class baju yang memiliki property dan methods
berdasakan fakta misalkan topi dengan $model , celana $tipe $model dan baju $tipe
kemudian tiga class tersebut extends class item produk yang memiliki methods Ukuran,
Warna, Nama .
 */

abstract class item
{
  protected $ukuran;
  protected $warna;
  protected $nama;

  //setter
  public function setUkuran($ukuran)
  {
    return $this->ukuran = $ukuran;
  }
  public function setWarna($warna)
  {
    return $this->warna = $warna;
  }
  public function setNama($nama)
  {
    return $this->nama = $nama;
  }
}

class topi extends item
{

  public $model;
  public $tahun_tren;
  public $toko;
}
class celana extends item
{
  public $jenis;
  public $merk;
  public $kain;
}
class baju extends item
{
  public $bahan;
  public $butik;
  public $perancang;
}

//test
$obj1 = new baju();

echo "Ukuran baju = " . $obj1->setUkuran("XL") . "<br>";
echo "Warna baju = " . $obj1->setWarna("putih") . "<br>";
echo "Nama baju = " . $obj1->setNama("Rabbani") . "<br>";
echo "Bahan baju = " . $obj1->bahan = "katun" . "<br>";
