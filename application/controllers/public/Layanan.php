<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Layanan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('md_layanan', 'ml');
  }

  public function index()
  {
    $data['title'] = 'Layanan | Rumah Sakit Madani';

    $data['layanan'] = $this->ml->get();

    $this->load->view('public/layout/header', $data);
    $this->load->view('public/layout/navbar', $data);
    $this->load->view('public/layanan/index', $data);
    $this->load->view('public/layout/footer');
  }
}