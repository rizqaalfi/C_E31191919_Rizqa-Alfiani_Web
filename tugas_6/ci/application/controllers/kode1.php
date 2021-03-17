<?php
class kode1 extends CI_Controller
{
  public function index()
  {
    $this->load->view('phpview');
  }
  public function hello_phyton()
  {
    $this->load->view('phytonview');
  }
  public function hello_cpp()
  {
    $this->load->view('cppview');
  }
  public function hello_java()
  {
    $this->load->view('javaview');
  }

  public function __remap($var)
  {
    if (isset($var)) {
      switch (strtolower($var)) {
        case 'phyton':
          $this->hello_phyton();
          break;
        case 'cpp':
          $this->hello_cpp();
          break;
        case 'phyton':
          $this->hello_java();
          break;
        default:
          $this->index();
      }
    } else {
      $this->index();
    }
  }
}
