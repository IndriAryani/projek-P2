<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class event_model extends CI_Model {
    public function getEvent()
    {
        return $this->db->get('jns_lomba')->result_array();
    }
    public function getEventById($id)
    {
        return $this->db->get_where('jns_lomba',['id_jns' => $id])->row_array();
    }
}