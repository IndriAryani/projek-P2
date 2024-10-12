<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class event_model extends CI_Model {

	public function getEvent()
	{
        return $this->db->get('pendaftaran')->result_array(); 
	}
}