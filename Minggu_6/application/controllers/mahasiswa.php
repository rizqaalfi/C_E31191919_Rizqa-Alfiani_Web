<?php
defined('BASEPATH') or exit('NO direct is allowed');

class Mahasiswa extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model'); //meload model Mahasiswa model

  }


  public function index()
  {
    $data['user'] = $this->Mahasiswa_model->getAll()->result();
    //medeklarasikan data dalam mahasiswa model ke dalam array data
    $this->template->views('crud/home_mahasiswa', $data);
    // meload views home_mahasiswa dengan template
  }

  public function tambah()
  {

    $this->template->views('crud/tambah_mahasiswa');
    // meload views home_mahasiswa dengan template
  }
  public function input()
  {
    // mengambil data yang telah di inputkan user pada view tambah_mahasiswa
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $grup = $this->input->post('grup');

    // hasil array akan dijadikan array dan menjadi values dalam table tm_user
    $data = array(
      'username' => $username,
      'password' => $password,
      'grup' => $grup
    );

    //meload Mahasiswa_model dengan funsi input_data yang paramternya diambil dari array
    $this->Mahasiswa_model->input_data($data, 'tm_user');
    redirect('Mahasiswa/index');
  }
}
