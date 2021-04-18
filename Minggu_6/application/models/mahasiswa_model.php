<?php
class Mahasiswa_model extends ci_model
{
  public function getAll()
  {
    $this->db->select('*');
    $this->db->from('tm_user');
    $this->db->join('tm_grup', 'tm_user.grup = tm_grup.id_grup');
    $query = $this->db->get();
    return $query;

    // mengasilkan SELECT * FROM tm_user JOIN tm_grup ON tm_user.grup = tm_grup.id_grup
  }

  // input data dengan parameter $data dan $table
  function input_data($data, $table)
  {
    $this->db->insert($table, $data);
    // menghasilkan INSERT INTO $table VALUES $data
    // $table merupakan array yang diabil dari parameter -> di controller
  }
}
