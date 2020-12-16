<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Darurat extends CI_Controller
{
  public function __construct() {
    parent::__construct();
  }
  
  public function index() {
    $data['title'] = 'Daurat | Rumah Sakit Madani';
    
    $this->load->view('public/layout/header', $data);
    $this->load->view('public/layout/navbar', $data);
    $this->load->view('public/darurat/index', $data);
    $this->load->view('public/layout/footer');
  }
  
} 