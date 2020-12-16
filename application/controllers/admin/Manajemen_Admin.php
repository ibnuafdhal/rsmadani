<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Manajemen_Admin extends CI_Controller
{
    public function __construct() {
      parent::__construct();
      $this->load->model('md_admin', 'ma');
    }
    
    private function _cek_sesi(){
      $role_id = $this->session->role_id;
      $role_id === null? redirect('auth') : '';
    }

    public function index()
    {
      $this->_cek_sesi();
        $data['title'] = 'Kelola Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['admin'] = $this->ma->get();
        
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/admin/index', $data);
        $this->load->view('admin/templates/footer');
    }
}