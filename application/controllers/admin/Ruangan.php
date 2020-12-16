<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ruangan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('md_ruangan', 'mr');
  }

  public function index()
  {
    if (!empty($this->input->post())) {
      $this->db->insert('ruangan', ['ktruangan' => $this->input->post('ktruangan')]);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil ditambah!</div>');
      redirect('admin/ruangan');
    }

    $data['title'] = 'Ruangan';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['ruangan'] = $this->mr->get();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('admin/ruangan/index', $data);
    $this->load->view('admin/templates/footer');
  }

  public function detail($id)
  {
    if (!$id) {
      redirect('admin/ruangan');
    }

    if (!empty($this->input->get('check'))) {
      $this->db->update('dtl_ruangan', ['is_active' => 1], ['id' => $this->input->get('check')]);
      redirect('admin/ruangan/detail/' . $id);
    }
    if (!empty($this->input->get('uncheck'))) {
      $this->db->update('dtl_ruangan', ['is_active' => 0], ['id' => $this->input->get('uncheck')]);
      redirect('admin/ruangan/detail/' . $id);
    }

    if (!empty($this->input->post())) {
      $this->db->insert('dtl_ruangan', [
        'nama' => $this->input->post('nama'),
        'id_kategori' => $this->input->post('ktruangan'),
        'is_active' => $this->input->post('is_active') == 'on' ? 1 : 0,
      ]);
      redirect('admin/ruangan/detail/' . $id);
    }

    $data['title'] = 'Detail Ruangan';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['dtl_ruangan'] = $this->mr->get_dtl($id);

    $data['ruangan'] = $this->mr->get_id($id)[0];

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('admin/ruangan/detail', $data);
    $this->load->view('admin/templates/footer');
  }

  public function edit($id = null)
  {
    if ($id === null) {
      echo "Please provide an id";

      if (empty($this->input->post())) {
        echo "<br />Tidak ada data yang dikirim";
      } else {
        $this->_edit();
      }
    } else {
      $data['title'] = 'Edit Ruangan';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $ruangan = $this->mr->get_id($id);
      $data['r'] = $ruangan[0];


      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar', $data);
      $this->load->view('admin/templates/topbar', $data);
      $this->load->view('admin/ruangan/edit', $data);
      $this->load->view('admin/templates/footer');
    }
  }

  public function _edit()
  {
    $i = $this->input;
    $id = $i->post('id');

    $data = [
      'ktruangan' => $i->post('ktruangan'),
      'modified_at' => date('Y-m-d h:m:s')
    ];

    $edit = $this->mr->edit($data, $id);

    if ($edit > 0) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil diubah!</div>');
      redirect('admin/ruangan');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data gagal diubah! kesalahan tidak diketahui</div>');
      redirect('admin/ruangan/edit/' . $id);
    }
  }

  public function delete($id = null)
  {
    if ($id === null) {
      redirect('admin/ruangan');
    } else {
      $delete = $this->mr->delete($id);
      if ($delete > 0) {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil dihapus!</div>');
        redirect('admin/ruangan');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data gagal dihapus!</div>');
        redirect('admin/ruangan');
      }
    }
  }
}