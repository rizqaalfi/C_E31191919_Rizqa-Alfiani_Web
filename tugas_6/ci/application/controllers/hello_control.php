<?php
class Hello_control extends CI_Controller
{
  public function index()
  {
    // memuat hello model
    $this->load->model('hello');

    //pengambilan object dari hello
    $x = $this->hello;

    //ambil data dari model
    $ambil = $x->txt;

    //membuat data yg akan dikirim ke view
    $data['text'] = $ambil;

    //memanggil file view
    $this->load->view('view', $data);
  }
}
