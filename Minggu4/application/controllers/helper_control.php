<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Helper_control extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    //helper bisa di load di file config/autoload.php
    $this->load->helper('html');
    $this->load->helper('url');
  }
  public function index()
  {
    $this->load->view('helper_view');
  }
  public function template()
  {
    $this->load->view('template');
  }
}
