<?php
defined('BASEPATH') or exit('NO direct is allowed');

class Mahasiswa extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
  }

  public function profile()
  {
    echo "ini adalah medthod profil pada controller";
  }
  //percobaan 1 (berhasil)

  /* public function index()
  {
    $data['nama'] = "Kim Jefry";
    $data['prodi'] = "MIF";
    $this->load->view('mahasiswa_view2', $data);
  }*/

  //percobaan 2 (berhasil), data sudah disediakan dalam bentuk array dan ditampilkan diview

  /* public function index()
  {
    $data['mahasiswa'] = [
      ['nama' => "Kim Jefry", 'prodi' => 'MIF'],
      ['nama' => 'Ahmad Kurniawan', 'prodi' => 'TKK'],
      ['nama' => 'Budi Sudarsono', 'prodi' => 'TIF']
    ];
    $this->load->view("mahasiswa_view", $data);
  }*/

  //percobaan 3 (berhasil), mengambil datanya di model kemudian itampilkan di view

  public function index()
  {
    $data['mahasiswa'] = $this->Mahasiswa_model->get_data();
    $this->load->view('mahasiswa_view', $data);
  }
}
