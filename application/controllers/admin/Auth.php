<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  public function index()
  {
    $role_id = $this->session->role_id;
    empty($role_id) === false ? redirect('admin/dashboard') : null;

    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Login page';
      $this->load->view('admin/templates/auth_header', $data);
      $this->load->view('admin/auth/login');
      $this->load->view('admin/templates/auth_footer');
    } else {
      //validasinya sukses
      $this->_login();
    }
  }

  private function _login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->db->get_where('user', ['email' => $email])->row_array();

    //jika usernya ada
    if ($user) {
      //jika usernya aktif
      if ($user['is_active'] == 1) {
        //cek password
        if (sha1($password) == $user['password']) {
          $data = [
            'email' => $user['email'],
            'role_id' => $user['role_id'],
          ];
          $this->session->set_userdata($data);

          if ($user['role_id'] == 1) {
            redirect('admin/dashboard');
          } else {
            redirect('user');
          }
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Wrong password</div>');
          redirect('admin/auth');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			This email is not active yet</div>');
        redirect('admin/auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Email not registered yet</div>');
      redirect('admin/auth');
    }
  }

  public function registration()
  {

    $this->form_validation->set_rules('name', 'Name', 'required|trim');

    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
      'is_unique' => 'This email has already registered!'
    ]);

    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
      'matches' => 'Password not match!',
      'min_length' => 'Password too short!'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

    if ($this->form_validation->run() == false) {

      $data['title'] = 'WPU User Registration';
      $this->load->view('admin/templates/auth_header', $data);
      $this->load->view('auth/registration');
      $this->load->view('admin/templates/auth_footer');
    } else {
      $data = [
        'name' => htmlspecialchars($this->input->post('name', true)),
        //xhtmlspecialchars($this->input->post('name', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        //htmlspecialchars($this->input->post('email', true)),
        'image' => 'default.jpg',
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'role_id' => 2,
        'is_active' => 1,
        'date_created' => time()

      ];

      $this->db->insert('user', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Your account has been created.Please Login</div>');
      redirect('admin/auth');
    }
  }

  public function logout()
  {
    /* $this->session->unset_userdata('email');
    $this->session->unset_userdata('role_id');*/

    $this->session->sess_destroy();

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		You have been logout</div>');
    redirect('admin/auth');
  }
}