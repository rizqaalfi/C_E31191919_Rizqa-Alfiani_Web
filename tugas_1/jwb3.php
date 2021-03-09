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

  public function waktu_berangkat($prodi)
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
    if ($angkatan <= 2018) {
      return "ya";
    } else {
      return "tidak";
    }
  }
}

//object
$mhs1 = new mahasiswa();
$mhs2 = new mahasiswa();

//set mhs1
$mhs1->nama = "Rizqa Alfiani";
$mhs1->prodi = "MIF";
$mhs1->tempat_tinggal = "jember";
$mhs1->nim = "31191919";
$mhs1->angkatan = "2019";


//set mhs2
$mhs2->nama = "Laila Majnun";
$mhs2->prodi = "TIF";
$mhs2->tempat_tinggal = "banyuwangi";
$mhs2->nim = "31191811";
$mhs2->angkatan = "2017";

//get and testing
echo "Nama : " . $mhs1->nama . "<br>" .
  "Matkul Web : " . $mhs1->waktu_berangkat($mhs1->prodi) . "<br>" .
  "Tempat PKL : " . $mhs1->PKL($mhs1->tempat_tinggal, $mhs1->nim) . "<br>" .
  "Sidang tahun ini? " . $mhs1->sidang($mhs1->angkatan) . "<br><br>";

echo "Nama : " . $mhs2->nama . "<br>" .
  "Matkul Web : " . $mhs2->waktu_berangkat($mhs2->prodi) . "<br>" .
  "Tempat PKL : " . $mhs2->PKL($mhs2->tempat_tinggal, $mhs2->nim) . "<br>" .
  "Sidang tahun ini? " . $mhs2->sidang($mhs2->angkatan);
