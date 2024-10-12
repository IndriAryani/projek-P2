<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$this->load->model('event_model');
		$data['pendaftaran'] = $this->event_model->getEvent();
		
		$this->load->view('templete/header');
		$this->load->view('admin', $data);
		$this->load->view('templete/footer');
	}
}