<?php

defined('BASEPATH') or exit('No direct script access allowed');


class ProfileDokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('md_dokter', 'md');
    }

    public function index()
    {
        $data['title'] = 'Profile Dokter | Rumah Sakit Madani';

        $data['dokter'] = $this->md->get();

        $this->load->view('public/layout/header', $data);
        $this->load->view('public/layout/navbar', $data);
        $this->load->view('public/dokter/profile', $data);
        $this->load->view('public/layout/footer');
    }
}