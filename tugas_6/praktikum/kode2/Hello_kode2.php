<?php
class Hello_kode2 extends CI_Controller
{
  public function index()
  {
    //echo "<h2>Hello World CI!</h2>";

    $this->load->view('helloview_kode2'); //memanggil file helloview
  }
}
