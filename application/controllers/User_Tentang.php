<?php
defined('BASEPATH') or exit('No direct script acces allowed');
class User_Tentang extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Rencana Detail Tata Ruang (RDTR) Kecamatan Kaliwungu',
            'isi' => 'v_tentang'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}

/* End of file User_Tentang.php */
