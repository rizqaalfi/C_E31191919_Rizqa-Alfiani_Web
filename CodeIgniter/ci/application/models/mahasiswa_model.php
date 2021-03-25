<?php
class Mahasiswa_model extends ci_model
{
  public function get_data()
  {
    $data_mahasiswa = [
      ["nama" => 'Kim Jefry', 'prodi' => 'MIF'],
      ["nama" => 'Budi Sudarsono', 'prodi' => 'TIF']
    ];
    return $data_mahasiswa;
  }
}
