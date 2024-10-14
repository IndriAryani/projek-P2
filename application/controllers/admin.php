<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->model('pendaftaran_model');
		$data['pendaftaran'] = $this->pendaftaran_model->getEvent();
		
		$this->load->view('templete/header');
		$this->load->view('admin', $data);
		$this->load->view('templete/footer');
	}
    public function hapus($id){
		$this->db->delete('pendaftaran', ['id'=> $id]);
		redirect('admin');
	}
	public function edit($id){
		$this->load->model('pendaftaran_model');
		$data['edit'] = $this->pendaftaran_model->getPendaftaranById($id);
		

		$this->load->view('templete/header');
		$this->load->view('edit_event', $data);
		$this->load->view('templete/footer');
	}
	public function update(){
		$data=
		[
			"nama" => $this->input->post('nama', true),
			"id_alamat" => $this->input->post('alamat', true),
			"no_telp" => $this->input->post('no_telp', true)

		];
		$this->db->where('nis', $this->input->post('nis'));
		$this->db->update('siswa', $data);
		redirect('admin');
	}
}