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
    $nama = $this->input->post('nama');
    $grup = $this->input->post('grup');

    // hasil array akan dijadikan array dan menjadi values dalam table tm_user
    $data = array(
      'username' => $username,
      'password' => $password,
      'nama' => $nama,
      'grup' => $grup
    );

    //meload Mahasiswa_model dengan funsi input_data yang paramternya diambil dari array
    //tm_user merupakan nama table yang ada di database db_ci dalam localhost
    $this->Mahasiswa_model->input_data($data, 'tm_user');
    redirect('Mahasiswa/index');
  }

  public function edit($id)
  {
    $where = array('id' => $id);
    $data['user'] = $this->Mahasiswa_model->edit_data($where, 'tm_user')->result();
    $this->template->views('crud/edit_mahasiswa', $data);
  }

  public function update()
  {
    $id = $this->input->post('id');
    $username = $this->input->post('username');
    $password = $this->input->post('pass');
    $nama = $this->input->post('nama');
    $grup = $this->input->post('grup');

    $data = array(
      'username' => $username,
      'password' => $password,
      'nama' => $nama,
      'grup' => $grup
    );

    $where = array(
      'id' => $id
    );

    $this->Mahasiswa_model->update_data($where, $data, 'tm_user');
    redirect('Mahasiswa');
  }

  public function hapus($id)
  {
    $where = array('id' => $id);
    $this->Mahasiswa_model->hapus_data($where, 'tm_user');
    redirect('Mahasiswa/index');
  }

  public function Api()
  {
    $data = $this->Mahasiswa_model->getAll();
    echo json_encode($data->result_array());
  }

  public function ApiInsert()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $nama = $this->input->post('nama');
    $grup = $this->input->post('grup');

    $data = array(
      'username' => $username,
      'password' => $password,
      'nama' => $nama,
      'grup' => $grup
    );

    $this->Mahasiswa_model->input_data($data, 'tm_user');
    echo json_encode($data);
  }

  public function ApiDelete()
  {
    if ($this->input->post('username')) {
      $where = array('username' => $this->input->post('username'));
      if ($this->Mahasiswa_model->hapus_data($where, 'tm_user')) {
        $array = array('success' => true);
      } else {
        $array = array('error' => true);
      }
      echo json_encode($array);
    }
  }

  public function ApiUpdate()
  {
  }
}
