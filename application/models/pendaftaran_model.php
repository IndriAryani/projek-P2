<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pendaftaran_model extends CI_Model {

	public function getPendaftaran()
	{	
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->join('jns_lomba','jns_lomba.id_jns = pendaftaran.id_lomba');
        return $this->db->get()->result_array(); 
	}
	public function getPendaftaranById($id){
		
		return $this->db->get_where('pendaftaran', ['id' => $id])->row_array();
	}
}