<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
  public function index()
  {
    $this->load->view('main/index');
  }
  public function join()
  {
    $this->load->view('main/join');
  }

  public function buat()
  {
    $this->load->view('main/buat');
  }

  public function vscom()
  {
    $this->load->view('main/vscom');
  }
}
