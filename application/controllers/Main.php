<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
  public function index()
  {
    $this->load->view('main/index');
  }
}

class Join extends CI_Controller
{
  public function index()
  {
    $this->load->view('main/join');
  }
}

class Buat extends CI_Controller
{

  public function index()
  {
    $this->load->view('main/buat');
  }
}

class VsCom extends CI_Controller
{
  public function index()
  {
    $this->load->view('main/vscom');
  }
}
