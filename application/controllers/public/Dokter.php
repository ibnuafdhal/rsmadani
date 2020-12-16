<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Dokter extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('md_dokter', 'md');
  }

  public function jadwal_dokter()
  {
    $data['title'] = 'Jadwal Dokter | Rumah Sakit Madani';

    $data['dokter'] = $this->md->get();

    $this->load->view('public/layout/header', $data);
    $this->load->view('public/layout/navbar', $data);
    $this->load->view('public/dokter/jadwal', $data);
    $this->load->view('public/layout/footer');
  }

  public function profil_dokter($page = 1)
  {
    $data['title'] = 'Profil Dokter | Rumah Sakit Madani';

    $data['dokter'] = $this->md->get_profil_dokter($page);
    $total_pages = count($this->db->get('dokter')->result()) / 4;
    $data['total_pages'] = ceil($total_pages);

    $this->load->view('public/layout/header', $data);
    $this->load->view('public/layout/navbar', $data);
    $this->load->view('public/dokter/profile', $data);
    $this->load->view('public/layout/footer');
  }

  public function filterdokter()
  {
    $data['title'] = 'Profil Dokter | Rumah Sakit Madani';

    $ndokter = $this->input->get('ndokter');
    $bdokter = $this->input->get('bdokter');
    $data['dokter'] = $this->db->query("select * from dokter where bdokter like '%$bdokter%' and ndokter like '%$ndokter%'")->result();
    $total_pages = count($this->db->get('dokter')->result()) / 4;
    $data['total_pages'] = ceil($total_pages);
    $data['filter'] = true;

    $this->load->view('public/layout/header', $data);
    $this->load->view('public/layout/navbar', $data);
    $this->load->view('public/dokter/profile', $data);
    $this->load->view('public/layout/footer');
  }

  public function profil_dokter_abjad($abjad = 'A')
  {
    $data['title'] = 'Dokter dengan index ' . $abjad . ' | Rumah Sakit Madani';

    $data['dokter'] = $this->md->get_profil_dokter_abjad($abjad);

    $this->load->view('public/layout/header', $data);
    $this->load->view('public/layout/navbar', $data);
    $this->load->view('public/dokter/profile', $data);
    $this->load->view('public/layout/footer');
  }
}