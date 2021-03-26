<?php

class Tugas_model extends CI_Model
{

  public function prodi()
  {

    $data_prodi = [
      ['no' => '1', 'prodi' => 'MIF', 'keterangan' => 'Manajemen Informatika'],
      ['no' => '2', 'prodi' => 'TIF', 'keterangan' => 'Teknik Informatika'],
      ['no' => '3', 'prodi' => 'TKK', 'keterangan' => 'Teknik Komputer']
    ];

    return $data_prodi;
  }

  public function angkatan()
  {
    $data_angkatan = [
      ['no' => '1', 'tahun' => '2016'],
      ['no' => '2', 'tahun' => '2017'],
      ['no' => '3', 'tahun' => '2018']
    ];

    return $data_angkatan;
  }
}
