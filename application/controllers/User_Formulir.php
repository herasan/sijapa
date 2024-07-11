<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Formulir extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'SIJAPA',
            'title2' => 'Formulir',
            'isi' => 'v_formulir'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function Baru()
    {
        $data = array(
            'title' => 'SIJAPA',
            'title2' => 'Formulir Pelaporan Kerusakan Jaringan Prasarana',
            'isi' => 'v_formulirlapor'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function Perencanaan()
    {
        $data = array(
            'title' => 'SIJAPA',
            'title2' => 'Formulir Usulan Perencanaan Jaringan Prasarana',
            'isi' => 'v_formulirrencana'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}

/* End of file: User_Formulir.php */
