<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $data = array(
            'title' => 'Sistem Informasi Jaringan Prasarana',
            'isi' => 'v_home'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}

/* End of file: Home.php */
