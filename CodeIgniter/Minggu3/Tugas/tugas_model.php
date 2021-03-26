<?php

class tugas_model extends CI_Model
{

  public function prodi()
  {

    $data_prodi = [
      ['no' => '1', 'prodi' => 'MIF', 'keterangan' => 'Manajemen Informatika'],
      ['no' => '2', 'prodi' => 'TIF', 'keterangan' => 'Teknik Informatika'],
      ['no' => '3', 'prodi' => 'TKK', 'keterangan' => 'Teknik Komputer']
    ];
  }

  public function angkatan()
  {
    $data_angkatan = [
      ['no' => '1', 'tahun' => '2016'],
      ['no' => '1', 'tahun' => '2017'],
      ['no' => '1', 'tahun' => '2018']
    ];
  }
}
