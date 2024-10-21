<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambah_pelomba extends CI_Controller {
    public function index()
    {
        $data ['jns_lomba'] = $this->db->get('jns_lomba')->result_array();

        $this->load->view('templete/header');
		$this->load->view('templete/menu');
		$this->load->view('tambah_pelomba', $data);
		$this->load->view('templete/footer');
    }
    public function tambah()
    {
        $data=
		[
			"id_lomba" => $this->input->post('nama_lomba', true),
			"nama_pendaftar" => $this->input->post('nama_pendaftar', true),
			"kelas" => $this->input->post('kelas', true),
			"no_hp" => $this->input->post('no_hp', true),
            "tgl_daftar" => $this->input->post('tgl_daftar', true)
		];
        $this->db->insert('pendaftaran',$data);
        redirect('admin');
    }
}