<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//is_logged_in();
	}

	public function index()
	{
		$this->load->model('pendaftaran_model');
		$data['pendaftaran'] = $this->pendaftaran_model->getPendaftaran();
		
		$this->load->view('templete/header');
		$this->load->view('templete/menu');
		$this->load->view('admin', $data);
		$this->load->view('templete/footer');
	}
    public function hapus($id){
		$this->db->delete('pendaftaran',['id'=> $id]);
		redirect('admin');
	}
	public function edit($id){
		$this->load->model('pendaftaran_model');
		// $data['jns_lomba'] = $this->db->get('jns_lomba')->result_array();
		$data['edit'] = $this->pendaftaran_model->getPendaftaranById($id);
		$this->load->model('event_model');
		$data['jns_lomba'] = $this->event_model->getEvent();

		$this->load->view('templete/header');
		$this->load->view('templete/menu');
		$this->load->view('edit_pendaftaran', $data);
		$this->load->view('templete/footer');
	}
	public function update(){
		$data=
		[
			// "id" => $this->input->post('id', true),
			"id_lomba" => $this->input->post('nama_lomba', true),
			"nama_pendaftar" => $this->input->post('nama_pendaftar', true),
			"kelas" => $this->input->post('kelas', true),
			"no_hp" => $this->input->post('no_hp', true),
			"tgl_daftar" => $this->input->post('tgl_daftar', true)

		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('pendaftaran', $data); //tabel pendaftaran
		redirect('admin');
	}
}