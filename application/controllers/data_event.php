<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_event extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//is_logged_in();
	}

	public function index()
	{
		$this->load->model('event_model');
		$data['jns_lomba'] = $this->event_model->getEvent();
		
		$this->load->view('templete/header');
		$this->load->view('templete/menu');
		$this->load->view('data_event', $data);
		$this->load->view('templete/footer');
	}
	public function hapus($id){
		$this->db->delete('jns_lomba', ['id_jns'=> $id]);
		redirect('data_event');
	}
    public function edit($id){
		$this->load->model('event_model');
		$data['edit'] = $this->event_model->getEventById($id);
	
		$this->load->view('templete/header');
		$this->load->view('templete/menu');
		$this->load->view('edit_lomba', $data);
		$this->load->view('templete/footer');
	}
	public function update(){
		$data=
		[
			"nama_lomba" => $this->input->post('nama_lomba', true),
			"penyelenggara" => $this->input->post('penyelenggara', true)
		];
		$this->db->where('id_jns', $this->input->post('id_jns'));
		$this->db->update('jns_lomba', $data);
		redirect('data_event');
	}

}