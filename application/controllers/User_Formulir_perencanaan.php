<?php
defined('BASEPATH') or exit('No direct script acces allowed');
class User_Formulir_perencanaan extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'SIJAPA',
            'title2' => 'Formulir Usulan Perencanaan Jaringan Prasarana',
            'isi' => 'v_formulirrencana'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}


/* End of file User_Formulir_perencanaan.php */
