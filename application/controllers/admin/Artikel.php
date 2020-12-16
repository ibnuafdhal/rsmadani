<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
  public function __construct() {
    parent::__construct();

    $this->load->model('md_artikel', 'ma');
  }

  public function index() {
    $data['title'] = 'Artikel';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['artikel'] = $this->ma->get();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('admin/artikel/index', $data);
    $this->load->view('admin/templates/footer');
  }

  public function add() {
    if (!empty($this->input->post())) {
      $this->_add();
    }
    $data['title'] = 'Tambah Artikel';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['artikel'] = $this->ma->get();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('admin/artikel/add', $data);
    $this->load->view('admin/templates/footer');
  }

  public function _add() {
    if (empty($_FILES["gambar"]["name"])) {
      $this->ma->add([
        "arjudul" => $this->input->post("arjudul"),
        "arkonten" => $this->input->post("arkonten"),
        "artanggal" => date("Y-m-d")
      ]);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil ditambah!</div>');
      redirect("artikel");
    } else {
      $config['upload_path'] = './assets/img/artikel';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size'] = 500;
      $config['encrypt_name'] = TRUE;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('gambar')) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'. $this->upload->display_errors().'</div>');
        redirect('admin/artikel');
      } else {
        $this->upload->data();
        $this->ma->add([
          'arjudul' => $this->input->post('arjudul'),
          'gambar' => $this->upload->data('file_name'),
          'artanggal' => date("Y-m-d"),
          'arkonten' => $this->input->post('arkonten')
        ]);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil ditambah!</div>');
        redirect("artikel");
      }
    }
  }

  public function detail($id) {
    if ($id === null) {
      redirect('admin/artikel');
    }

    $data['title'] = 'Artikel';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['artikel'] = $this->ma->get_id($id)[0];

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('admin/artikel/detail', $data);
    $this->load->view('admin/templates/footer');
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
      $data['title'] = 'Edit Artikel';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $artikel = $this->ma->get_id($id);
      $data['a'] = $artikel[0];


      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar', $data);
      $this->load->view('admin/templates/topbar', $data);
      $this->load->view('admin/artikel/edit', $data);
      $this->load->view('admin/templates/footer');
    }
  }

  public function _edit() {
    $i = $this->input;
    $id = $i->post('id');

    if (empty($_FILES['gambar']['name'])) {
      $data = [
        'arjudul' => $i->post('arjudul'),
        'artanggal' => $i->post('artanggal'),
        'arkonten' => $i->post('arkonten'),
        'modified_at' => date('Y-m-d h:m:s')
      ];
    } else {
      $config['upload_path'] = './assets/img/artikel';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size'] = 500;
      $config['encrypt_name'] = TRUE;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('gambar')) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'. $this->upload->display_errors().'</div>');
        redirect('admin/artikel/edit/'.$id);
      } else {
        $check = $this->ma->get_id($id);
        $existing = $check[0]->gambar;
        $path = './assets/img/artikel/';
        unlink($path.$existing);

        $this->upload->data();
        $data = [
          'arjudul' => $i->post('arjudul'),
          'gambar' => $this->upload->data('file_name'),
          'artanggal' => $i->post('artanggal'),
          'arkonten' => $i->post('arkonten'),
          'modified_at' => date('Y-m-d h:m:s')
        ];
      }
    }

    $edit = $this->ma->edit($data,
      $id);

    if ($edit > 0) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil diubah!</div>');
      redirect('admin/artikel');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data gagal diubah! kesalahan tidak diketahui</div>');
      redirect('admin/artikel/edit/'. $id);
    }

  }

  public function delete($id = null){
    if($id === null){
      redirect('admin/artikel');
    }else{
      $delete = $this->ma->delete($id);
      if($delete > 0){
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil dihapus!</div>');
      redirect('admin/artikel');
      }else{
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data gagal dihapus!</div>');
        redirect('admin/artikel');
      }
    }
  }
}