<?php
class Kode extends CI_Controller
{
  public function hello($var)
  {
    if (isset($var)) {
      switch (strtolower($var)) {
        case 'php':
          $this->load->view('phpview');
          break;
        case 'phyton':
          $this->load->view('phytonview');
          break;
        case 'cpp':
          $this->load->view('cppview');
          break;
        case 'java':
          $this->load->view('javaview');
          break;
        default:
          echo 'Input URI salah';
      }
    } else {
      echo 'input URI salah';
    }
  }
}
