<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pendaftaran_model extends CI_Model {

	public function getEvent()
	{
        return $this->db->get('pendaftaran')->result_array(); 
	}

	public function tambahPendaftaran()
	{
		$data =
		[
		"id_lomba" => $this->input->post('id_lomba', true),
		"nama_pendaftar" => $this->input->post('nama_pendaftar', true),
		"kelas" => $this->input->post('kelas', true),
		"no_hp" => $this->input->post('no_hp', true),
		"tgl_daftar" => $this->input->post('tgl_daftar', true)
		];

	$this->db->insert('pendaftaran', $data);
	}
	public function getPendaftaranById($id){
		
		return $this->db->get_where('pendaftaran', ['id' =>$id])->row_array();
	}
}