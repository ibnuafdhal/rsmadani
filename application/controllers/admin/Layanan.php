<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
  public function __construct() {
    parent::__construct();

    if (empty($this->session->role_id)) {
      redirect('admin/auth');
    }

    $this->load->model('md_layanan', 'ml');
  }

  public function index() {
    if (!empty($this->input->post())) {
      $this->_add();
    }
    $data['title'] = 'Layanan';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['layanan'] = $this->ml->get();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('admin/layanan/index', $data);
    $this->load->view('admin/templates/footer');
  }

  public function _add() {
    if (empty($_FILES['gambar']['name'])) {
      $data = [
        'nlayanan' => $this->input->post('nlayanan'),
        'dlayanan' => $this->input->post('dlayanan')
      ];
    } else {
      $config['upload_path'] = './assets/img/layanan';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size'] = 500;
      $config['encrypt_name'] = TRUE;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('gambar')) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'. $this->upload->display_errors().'</div>');
        redirect('admin/layanan');
      } else {
        $this->upload->data();
        $data = [
          'gambar' => $this->upload->data('file_name'),
          'nlayanan' => $this->input->post('nlayanan'),
          'dlayanan' => $this->input->post('dlayanan')
        ];
      }
    }

    $this->ml->add($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Layanan Telah Ditambahkan</div>');
    redirect('admin/layanan');
  }

  public function edit($id = null) {
    if ($id === null) {
      echo "Please provide an id";

      if (empty($this->input->post())) {
        echo "<br />Tidak ada data yang dikirim";
      } else {
        $this->_edit();
      }
    } else {
      $data['title'] = 'Edit Layanan';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $layanan = $this->ml->get_id($id);
      $data['l'] = $layanan[0];


      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar', $data);
      $this->load->view('admin/templates/topbar', $data);
      $this->load->view('admin/layanan/edit', $data);
      $this->load->view('admin/templates/footer');
    }
  }

  public function _edit() {
    $i = $this->input;
    $id = $i->post('id');

    if (empty($_FILES['gambar']['name'])) {
      $data = [
        'nlayanan' => $i->post('nlayanan'),
        'dlayanan' => $i->post('dlayanan'),
        'modified_at' => date('Y-m-d h:m:s')
      ];
    } else {
      $config['upload_path'] = './assets/img/layanan';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size'] = 500;
      $config['encrypt_name'] = TRUE;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('gambar')) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'. $this->upload->display_errors().'</div>');
        redirect('admin/layanan/edit/'.$id);
      } else {
        $check = $this->ml->get_id($id);
        $existing = $check[0]->gambar;
        $path = './assets/img/layanan/';
        unlink($path.$existing);

        $this->upload->data();
        $data = [
          'nlayanan' => $i->post('nlayanan'),
          'gambar' => $this->upload->data('file_name'),
          'dlayanan' => $i->post('dlayanan'),
          'modified_at' => date('Y-m-d h:m:s')
        ];
      }
    }

    $edit = $this->ml->edit($data,
      $id);

    if ($edit > 0) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil diubah!</div>');
      redirect('admin/layanan');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data gagal diubah! kesalahan tidak diketahui</div>');
      redirect('admin/layanan/edit/'. $id);
    }

  }

  public function delete($id = null){
    if($id === null){
      redirect('admin/layanan');
    }else{
      $delete = $this->ml->delete($id);
      if($delete > 0){
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil dihapus!</div>');
      redirect('admin/layanan');
      }else{
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data gagal dihapus!</div>');
        redirect('admin/layanan');
      }
    }
  }
}