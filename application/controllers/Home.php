<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('md_artikel', 'artikel');
    $this->load->model('md_layanan', 'layanan');
    $this->load->model('md_dokter', 'dokter');
    $this->load->model('md_ruangan', 'ruangan');
    $this->load->model('md_pengaturan', 'mp');
  }

  public function index()
  {
    $data['title'] = 'Selamat datang di Website Rumah Sakit Madani';

    $data['tentang'] = $this->mp->get();

    $data['artikel'] = $this->artikel->home_artikel();

    $data['total_artikel'] = $this->artikel->get();

    $data['layanan'] = $this->layanan->home_layanan();

    $data['dokter'] = $this->dokter->home_dokter();

    $data['total_dokter'] = $this->dokter->get();

    $data['ruangan'] = $this->ruangan->home_ruangan();

    $data['ruangan_aktif'] = count($this->db->get_where('dtl_ruangan', ['is_active' => 1])->result());
    $data['ruangan_terpakai'] = count($this->db->get_where('dtl_ruangan', ['is_active' => 0])->result());

    $data['situs'] = $this->db->get_where('situs', ['id' => 1])->row_array();

    $this->load->view('public/layout/header', $data);
    $this->load->view('public/layout/navbar', $data);
    $this->load->view('public/index', $data);
    $this->load->view('public/layout/footer');
  }
}