<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Logout extends CI_Controller
{
  public function hapus()
  {
    $this->session->sess_destroy();
    redirect('Login/index');
  }
}
