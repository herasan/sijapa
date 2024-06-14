<?php
defined('BASEPATH') or exit('No direct script acces allowed');
class Admin extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Sistem Informasi Jaringan Prasarana',
            'title2' => 'Dashboard',
            'isi' => 'admin/v_home'
        );

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function peta()
    {
        $data = array(
            'title' => 'Sistem Informasi Jaringan Prasarana',
            'title2' => 'Peta Rencana Detail Tata Ruang (RDTR) Kecamatan Kaliwungu',
            'isi' => 'admin/v_peta'
        );

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function viewbasemap ()
    {
        $data = array(
            'title' => 'Sistem Informasi Jaringan Prasarana',
            'title2' => 'Peta Rencana Detail Tata Ruang (RDTR) Kecamatan Kaliwungu',
            'isi' => 'admin/v_basemap'
        );

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function marker ()
    {
        $data = array(
            'title' => 'Sistem Informasi Jaringan Prasarana',
            'title2' => 'Peta Rencana Detail Tata Ruang (RDTR) Kecamatan Kaliwungu',
            'isi' => 'admin/v_marker'
        );

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function getcoordinate ()
    {
        $data = array(
            'title' => 'Sistem Informasi Jaringan Prasarana',
            'title2' => 'Peta Rencana Detail Tata Ruang (RDTR) Kecamatan Kaliwungu',
            'isi' => 'admin/v_getcoordinate'
        );

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function rute ()
    {
        $data = array(
            'title' => 'Sistem Informasi Jaringan Prasarana',
            'title2' => 'Routing',
            'isi' => 'admin/v_rute'
        );

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function rute2 ()
    {
        $data = array(
            'title' => 'Sistem Informasi Jaringan Prasarana',
            'title2' => 'Routing',
            'isi' => 'admin/v_rute2'
        );

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    //Deklarasi Model m_pemetaan
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pemetaan', 'm_pemetaan'); // Memuat model dengan alias 'm_pemetaan'
    }
    
    public function pemetaan ()
    {
        $data = array(
            'title'     => 'Sistem Informasi Jaringan Prasarana',
            'title2'    => 'Pemetaan Lokasi',
            'isi'       => 'admin/v_pemetaan',
            'lokasi'    => $this->m_pemetaan->allData(),
        );

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

}

/* End of file Admin.php */
