<?php
defined('BASEPATH') or exit('No direct script acces allowed');
class User_Data extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'dataRencana Detail Tata Ruang (RDTR) Kecamatan Kaliwungu',
            'isi' => 'v_data'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}

/* End of file User_Data.php */
