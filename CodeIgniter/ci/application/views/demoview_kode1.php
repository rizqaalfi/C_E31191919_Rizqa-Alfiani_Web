<?php 
class demoview_kode1 extends CI_Controller{
  public function index(){
    $this->load->view('headerview_kode1');
    $this->load->view('contentview_kode1');
    $this->load->view('footerview_kode1');

  }
}
