<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Tabel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'SIJAPA',
            'title2' => 'Tabel Data Pelaporan',
            'isi' => 'v_tabel'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}

/* End of file: User_Tabel.php */
