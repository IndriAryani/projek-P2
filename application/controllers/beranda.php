<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
    }

    public function index()
    {
        $this->load->view('templete/header');
        $this->load->view('templete/menu');
        $this->load->view('beranda');
        $this->load->view('templete/footer');
    }
}