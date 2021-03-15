<?php

class Hello_kode3 extends CI_Controller
{
  public function index()
  {

    //memuat model hello_model
    $this->load->model('Hellomodel_kode3');

    //pengambilan object dari kelas Hello_model dan dimuat di var $model
    $model = $this->Hellomodel_kode3;

    //mengambil data dari model
    $a = $model->txt;

    //membuat data yang akan dikirim ke view
    $data['text'] = $a;

    //memanggil file view
    $this->load->view('helloview_kode3', $data);
  }
}
