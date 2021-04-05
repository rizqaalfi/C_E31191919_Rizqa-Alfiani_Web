<?php

class Mahasiswa_model extends CI_Model
{

  public function get_data()
  {
    $data_mahasiswa = [
      ["no" => "1", "nama" => 'Kim Jefry', 'prodi' => 'MIF'],
      ["no" => "1", "nama" => 'Budi Sudarsono', 'prodi' => 'TIF']
    ];
    return $data_mahasiswa;
  }
}
