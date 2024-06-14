<?php
defined('BASEPATH') or exit('No direct script acces allowed');
class User_Peta extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Peta Rencana Detail Tata Ruang (RDTR) Kecamatan Kaliwungu',
            'isi' => 'v_peta'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}

/* End of file User_Peta.php */
