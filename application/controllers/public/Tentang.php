<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Tentang extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('md_pengaturan', 'mp');
  }

  public function index()
  {
    $data['title'] = 'Tentang Kami | Rumah Sakit Madani';

    $data['tentang'] = $this->mp->get();
    $data['isi'] = $this->mp->get();


    $this->load->view('public/layout/kepala', $data);
    $this->load->view('public/layout/nav', $data);
    $this->load->view('public/layanan/index', $data);
    $this->load->view('public/layout/kaki');
  }
}