<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Artikel extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('md_artikel', 'ma');
  }

  public function index($id = null)
  {
    // if ($id != null) {
    //   $this->show($id);
    // }
    $data['title'] = 'Artikel | Rumah Sakit Madani';

    $data['artikel'] = $this->ma->get();

    $this->load->view('public/layout/header', $data);
    $this->load->view('public/layout/navbar', $data);
    $this->load->view('public/artikel/index', $data);
    $this->load->view('public/layout/footer');
  }

  public function show($id = null)
  {
    if ($id === null) {
      redirect('public/artikel');
    } else {
      $data['title'] = 'Artikel | Rumah Sakit Madani';

      $data['artikel'] = $this->db->get_where('artikel', ['id' => $id])->row_array();

      $this->load->view('public/layout/header', $data);
      $this->load->view('public/layout/navbar', $data);
      $this->load->view('public/artikel/show', $data);
      $this->load->view('public/layout/footer');
    }
  }
}