<?php 

class Hello extends CI_Controller{
  public function index(){

    //memuat model hello_model
    $this->load->model('Hello_model');

    //pengambilan object dari kelas Hello_model dan dimuat di var $model
    $model=$this->txt;

    //mengambil data dari model
    $a = $model->txt;

    //membuat data yang akan dikirim ke view
    $data['text']=$a;

    //memanggil file view
    $this->load->view('helloview', $data);
  }
}
