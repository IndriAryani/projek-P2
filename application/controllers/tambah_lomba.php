<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambah_lomba extends CI_Controller {
    public function index()
    {
        $this->load->view('templete/header');
		$this->load->view('templete/menu');
		$this->load->view('tambah_lomba');
		$this->load->view('templete/footer');
    }
    public function add()
    {
        $data=
		[
			"nama_lomba" => $this->input->post('nama_lomba', true),
			"penyelenggara" => $this->input->post('penyelenggara', true)
		];
        $this->db->insert('jns_lomba',$data);
        redirect('data_event');
    }
}