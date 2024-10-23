<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//is_logged_in();
	}
	public function index()
	{
        //mengambil data yg login
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('templete/header');
		$this->load->view('templete/menu');
		$this->load->view('profil', $data);
		$this->load->view('templete/footer');
	}
    public function editProfil()
    {
        //mengambil data yg login
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templete/header');
		$this->load->view('templete/menu');
		$this->load->view('edit_profil', $data); 
		$this->load->view('templete/footer');
    }
    public function updateProfil()
    {
        $data=
		[
			"nama" => $this->input->post('nama', true),
			"username" => $this->input->post('username', true),
			"password" => password_hash ($this->input->post('password'), PASSWORD_DEFAULT)

		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user', $data); //tabel user
		redirect('login');
    }
}