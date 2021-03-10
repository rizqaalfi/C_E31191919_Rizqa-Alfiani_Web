<?php

abstract class item
{
  protected $ukuran;
  protected $warna;
  protected $nama;
}
class topi extends item
{

  public $model;
  public $tahun_tren;
  public $toko;

  function umum()
  {
    echo $this->ukuran = "L" . "<br>";
    echo $this->warna = "putih" . "<br>";
    echo $this->nama = "topi pantai" . "<br>";
  }
}
class celana extends item
{
  public $jenis;
  public $merk;
  public $kain;

  function umum()
  {
    echo $this->ukuran = "XL" . "<br>";
    echo $this->warna = "Hijau" . "<br>";
    echo $this->nama = "Jeans" . "<br>";
  }
}
class baju extends item
{
  public $bahan;
  public $butik;
  public $perancang;

  function umum()
  {
    echo $this->ukuran = "M" . "<br>";
    echo $this->warna = "Hitam" . "<br>";
    echo $this->nama = "koko" . "<br>";
  }
}

//test
$obj1 = new baju();

//set
$obj1->bahan = "katun";

echo $obj1->umum();
echo $obj1->bahan;
