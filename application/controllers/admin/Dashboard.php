<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->_cek_sesi();
  }

  public function _cek_sesi()
  {
    $role_id = $this->session->role_id;
    $role_id === null ? redirect('admin/auth') : '';
  }

  public function index()
  {
    $data['title'] = 'Dashboard';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('admin/templates/footer');
  }
}