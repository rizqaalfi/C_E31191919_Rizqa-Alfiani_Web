<?php

abstract class item
{
  public $ukuran;
  public $warna;
  public $nama;
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
$obj2 = new celana();
$obj3 = new topi();

echo $obj1->ukuran = 50;
