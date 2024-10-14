<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambah_event extends CI_Controller {

	public function index()
    {
        $this->load->view('tambah_event');
    }
    public function tambah()
    {
        $this->load->model('pendaftaran_model');
        $data['pendaftaran'] = $this->pendaftaran_model->tambahPendaftaran();
        redirect('admin');
    }
}