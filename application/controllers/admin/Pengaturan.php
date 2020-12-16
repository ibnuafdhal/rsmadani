<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('md_pengaturan', 'mp');
  }

  public function index()
  {
    if (!empty($this->input->post())) {
      $this->_edit();
    }
    $data['title'] = 'Pengaturan';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['pengaturan'] = $this->mp->get();
    $data['banner'] = $this->mp->get_banner();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('admin/pengaturan/index', $data);
    $this->load->view('admin/templates/footer');
  }

  public function _edit()
  {
    $site = $this->db->get('situs')->row_array();
    if (empty($_FILES['gambar']['name'])) {
      $data = [
        'tentang' => $this->input->post('tentang'),
        'isi' => $this->input->post('isi'),
        'visi' => $this->input->post('visi'),
        'misi' => $this->input->post('misi')
      ];
    } else {
      $config['upload_path'] = './assets/img/situs';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size'] = 500;
      $config['encrypt_name'] = TRUE;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('gambar')) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
        redirect('admin/pengaturan');
      } else {
        $path = "./assets/img/situs/";
        unlink($path . $site["gambar"]);

        $this->upload->data();

        $data = [
          'tentang' => $this->input->post('tentang'),
          'isi' => $this->input->post('isi'),
          'gambar' => $this->upload->data('file_name'),
          'visi' => $this->input->post('visi'),
          'misi' => $this->input->post('misi')
        ];
      }
    }

    $edit = $this->mp->edit($data, $site['id']);

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Data berhasil diubah!</div>');
    redirect('admin/pengaturan');
  }
}