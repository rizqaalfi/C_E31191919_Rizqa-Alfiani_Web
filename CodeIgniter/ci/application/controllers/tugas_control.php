<?php
defined('BASEPATH') or exit('NO direct is allowed');

class Tugas_control extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Tugas_model');
  }


  public function index()
  {

    $data['program_studi'] = $this->Tugas_model->prodi();
    $this->load->view('prodi_view', $data);
  }

  public function angkatan()
  {

    $data['angkatan'] = $this->Tugas_model->angkatan();
    $this->load->view('angkatan_view', $data);
  }
}
