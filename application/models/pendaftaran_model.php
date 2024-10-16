<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pendaftaran_model extends CI_Model {

	public function getPendaftaran()
	{
        return $this->db->get('pendaftaran')->result_array(); 
	}
	public function getPendaftaranById($id){
		
		return $this->db->get_where('pendaftaran', ['id' =>$id])->row_array();
	}
}