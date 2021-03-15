<?php

class Tgs4_control extends CI_Controller
{

  public function index()
  {


    $this->load->model('tgs4_model');

    //ambil object
    $x = $this->tgs4_model;

    //mengambil data dari model
    $y = $x->list;



    //memanggil file view
    $this->load->view('tgs4_view', $y);
  }
}
