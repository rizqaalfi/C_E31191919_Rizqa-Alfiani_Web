<?php

class coba extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('template');
  }
  function index()
  {

    $this->template->views('Admin/_Template/Template');
  }
}
