<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Khdokter extends CI_Controller
{
  public function __construct() {

    parent::__construct();

    if (empty($this->session->role_id)) {
      redirect('admin/auth');
    }

    $this->load->model('md_dokter', 'md');
  }

  public function index() {
    $data['title'] = 'Kehadiran Dokter';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['dokter'] = $this->md->get();

    $this->form_validation->set_rules('ndokter', 'Dokter', 'required');
    $this->form_validation->set_rules('bdokter', 'Bidang Dokter', 'required');
    $this->form_validation->set_rules('hari', 'Hari Kerja', 'required');
    $this->form_validation->set_rules('jammasuk', 'Jam Masuk', 'required');
    $this->form_validation->set_rules('jampulang', 'Jam Pulang', 'required');


    if ($this->form_validation->run() == false) {
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar', $data);
      $this->load->view('admin/templates/topbar', $data);
      $this->load->view('admin/khdokter/index', $data);
      $this->load->view('admin/templates/footer');
    } else {
      $data = [

        'ndokter' => $this->input->post('ndokter'),
        'bdokter' => $this->input->post('bdokter'),
        'hari' => $this->input->post('hari'),
        'jammasuk' => $this->input->post('jammasuk'),
        'jampulang' => $this->input->post('jampulang'),

      ];
      $this->db->insert('dokter', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Dokter Telah Ditambahkan</div>');
      redirect('admin/Dokter');
    }
  }
  
  public function check($id = null) {
    if($id===null) {
      redirect('admin/khdokter');
    }else{
      $this->md->check($id);
      redirect('admin/khdokter');
    }
  }
  public function uncheck($id = null) {
    if($id===null) {
      redirect('admin/khdokter');
    }else{
      $this->md->uncheck($id);
      redirect('admin/khdokter');
    }
  }
}