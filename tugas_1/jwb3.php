<?php
class mahasiswa
{
  public $nama;
  public $nim;
  public $tempat_lahir;
  public $tempat_tinggal;
  public $tahun_lahir;
  public $prodi;
  public $angkatan;

  public function matkul_web($prodi)
  {
    if ($prodi == "MIF") {
      return "Senin";
    } elseif ($prodi == "TIF") {
      return "Rabu";
    } elseif ($prodi == "TKK") {
      return "jum'at";
    }
  }

  public function PKL($tempat_tinggal, $nim)
  {
    if ($tempat_tinggal == "jember") {
      if ($nim < 31191919) {
        return "bondowoso";
      } else {
        return "situbondo";
      }
    } else {
      if ($nim < 31191919) {
        return "jombang";
      } else {
        return "surabaya";
      }
    }
  }

  public function sidang($angkatan)
  {
    if ($angkatan < 2018) {
      return "ya";
    } else {
      return "tidak";
    }
  }
}

//object
$rizqa = new mahasiswa();
$maya = new mahasiswa();
