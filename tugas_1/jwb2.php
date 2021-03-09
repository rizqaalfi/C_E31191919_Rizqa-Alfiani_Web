<?php


class kendaraan
{
  public $jenis_kendaraan;
  public $jumlah_roda;
  public $merk;
  public $bahan_bakar;
  public $harga = 0;
  public $tahun_pembuatan = 0;

  function subsidi($bahan_bakar, $tahun_pembuatan)
  {
    if ($bahan_bakar == "premium" && $tahun_pembuatan < 2005) {
      return "ya";
    } else {
      return "tidak";
    }
  }

  function hargaSecond($tahun_pembuatan, $harga)
  {
    if ($tahun_pembuatan > 2010) {
      return $harga - ($harga * (20 / 100));
    } elseif ($tahun_pembuatan > 2005 && $tahun_pembuatan < 2010) {
      return $harga - ($harga * (30 / 100));
    } elseif ($tahun_pembuatan < 2005) {
      return $harga - ($harga * (40 / 100));
    }
  }
}

//object
$bmw = new kendaraan();
$merchedes = new kendaraan();

//set bmw
$bmw->bahan_bakar = "premium";
$bmw->tahun_pembuatan = 2000;

//set menchedes
$merchedes->tahun_pembuatan = 2007;
$merchedes->harga = 10000000;

//get and testing method
echo $bmw->subsidi($bmw->bahan_bakar, $bmw->tahun_pembuatan) . "<br>";
echo $merchedes->hargaSecond($merchedes->tahun_pembuatan, $merchedes->harga);
