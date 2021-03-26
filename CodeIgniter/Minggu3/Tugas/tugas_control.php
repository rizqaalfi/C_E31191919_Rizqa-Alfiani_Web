<?php

class prodi extends CI_Controller
{
  public function index()
  {
    $data['prodi'] = $this->tugas_model->prodi();
    $this->load->view('prodi_view', $data);
  }
}
