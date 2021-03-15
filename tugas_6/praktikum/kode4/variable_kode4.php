<?php

class Variable_kode4 extends CI_Controller
{
  public function index()
  {
    $data = ['variabel1' => 'Data variabel ke 1', 'variabel2' => 'Data variabel ke 2'];

    $this->load->view('variable_view', $data);
  }
}
