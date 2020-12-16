<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if (empty($this->session->role_id)) {
      redirect('admin/auth');
    }

    $this->load->model('md_dokter', 'md');
  }

  public function index()
  {
    $data['title'] = 'Jadwal Dokter';
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
      $this->load->view('admin/dokter/index', $data);
      $this->load->view('admin/templates/footer');
    } else {
      if (empty($_FILES["gambar"]["name"])) {
        $data = [
          'ndokter' => $this->input->post('ndokter'),
          'bdokter' => $this->input->post('bdokter'),
          'hari' => $this->input->post('hari'),
          'jammasuk' => $this->input->post('jammasuk'),
          'jampulang' => $this->input->post('jampulang'),
        ];
      } else {
        $config['upload_path'] = './assets/img/dokter';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 500;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
          redirect('admin/dokter');
        } else {
          $this->upload->data();
          $data = [
            'gambar' => $this->upload->data('file_name'),
            'ndokter' => $this->input->post('ndokter'),
            'bdokter' => $this->input->post('bdokter'),
            'hari' => $this->input->post('hari'),
            'jammasuk' => $this->input->post('jammasuk'),
            'jampulang' => $this->input->post('jampulang'),
            'created_at' => date('Y-m-d h:m:s')
          ];
        }
      }

      $this->db->insert('dokter', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Dokter Telah Ditambahkan</div>');
      redirect('admin/dokter');
    }
  }

  public function edit($id = null)
  {
    if ($id === null) {
      echo "Please provide an id";
      if (empty($this->input->post())) {
        echo "<br />Tidak ada data yang dikirim";
        redirect('admin/dokter');
      } else {
        $this->_edit();
      }
    } else {
      $data['title'] = 'Edit Dokter';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $dokter = $this->md->get_id($id);
      $data['d'] = $dokter[0];


      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar', $data);
      $this->load->view('admin/templates/topbar', $data);
      $this->load->view('admin/dokter/edit', $data);
      $this->load->view('admin/templates/footer');
    }
  }

  public function _edit()
  {
    $i = $this->input;
    $id = $i->post('id');

    // jika tidak upload gambar
    if (empty($_FILES['gambar']['name'])) {

      // jika jam masuk lebih besar dari jam pulang
      if (strtotime($i->post('jammasuk')) > strtotime($i->post('jampulang'))) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Jam Masuk tidak boleh lebih dari Jam Pulang!</div>');
        redirect('admin/dokter/edit/' . $id);
      }
      $data = [
        'ndokter' => $i->post('ndokter'),
        'bdokter' => $i->post('bdokter'),
        'hari' => $i->post('hari'),
        'jammasuk' => $i->post('jammasuk'),
        'jampulang' => $i->post('jampulang'),
        'modified_at' => date('Y-m-d h:m:s')
      ];
    } else {
      // config gambar dokter
      $config['upload_path'] = './assets/img/dokter';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size'] = 300;
      $config['encrypt_name'] = TRUE;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('gambar')) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
        redirect('admin/dokter/edit/' . $id);
      } else {
        $check = $this->md->get_id($id);
        $existing = $check[0]->gambar;
        $path = './assets/img/dokter/';
        unlink($path . $existing);

        $this->upload->data();
        $data = [
          'ndokter' => $i->post('ndokter'),
          'gambar' => $this->upload->data('file_name'),
          'bdokter' => $i->post('bdokter'),
          'hari' => $i->post('hari'),
          'jammasuk' => $i->post('jammasuk'),
          'jampulang' => $i->post('jampulang'),
          'modified_at' => date('Y-m-d h:m:s')
        ];
      }
    }

    // edit data dengan model
    $edit = $this->md->edit($data, $id);

    if ($edit > 0) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil diubah!</div>');
      redirect('admin/dokter');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data gagal diubah! kesalahan tidak diketahui</div>');
      redirect('admin/dokter/edit/' . $id);
    }
  }

  public function delete($id = null)
  {
    if ($id === null) {
      redirect('admin/dokter');
    } else {
      $delete = $this->md->delete($id);
      if ($delete > 0) {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil dihapus!</div>');
        redirect('admin/dokter');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data gagal dihapus!</div>');
        redirect('admin/dokter');
      }
    }
  }

  public function profil($page = 1)
  {
    $data['title'] = 'Profile Dokter';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['dokter'] = $this->md->get_profil_dokter($page);
    $total_pages = count($this->db->get('dokter')->result()) / 4;
    $data['total_pages'] = ceil($total_pages);

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('admin/dokter/profile', $data);
    $this->load->view('admin/templates/footer');
  }

  public function filterdokter()
  {
    $data['title'] = 'Profil Dokter';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $ndokter = $this->input->get('ndokter');
    $bdokter = $this->input->get('bdokter');
    $data['dokter'] = $this->db->query("select * from dokter where bdokter like '%$bdokter%' and ndokter like '%$ndokter%'")->result();
    $total_pages = count($this->db->get('dokter')->result()) / 4;
    $data['total_pages'] = ceil($total_pages);
    $data['filter'] = true;

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('admin/dokter/profile', $data);
    $this->load->view('admin/templates/footer');
  }
}
