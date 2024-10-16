<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{
		$this->load->view('templete/header');
		$this->load->view('login');
		$this->load->view('templete/footer');
	}
    public function verifikasi()
    {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);

        $user = $this->db->where('user',['username' => $username])->row();

        if($user){
            if(password_verify($password, $user['password'])) {
                $data = ['username' => $user['username']];

                $this->session->set_userdata($data);
                redirect('beranda');
            }else{
                $this->session->set_flashdata('message','<h2>Password Salah!</h2>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message','<h2>Username Salah!  </h2>');
                redirect('login');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message','<h2>Berhasil Logout</h2>');
        redirect('login');
    }
}