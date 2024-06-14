<?php
defined('BASEPATH') or exit('No direct script acces allowed');
class User_Formulir_pelaporan extends CI_Controller
{
    public function index()

    {
        $data = array(
            'title' => 'SIJAPA',
            'title2' => 'Formulir Pelaporan Kerusakan Jaringan Prasarana',
            'isi' => 'v_formulirlapor'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
/* End of file User_Formulir_pelaporan.php */
