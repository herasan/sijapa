<?php
defined('BASEPATH') or exit('No direct script acces allowed');
class User_Tabel_Pelaporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user_tabellapor');
    }

    public function index()
    {
        $data = array(
            'title' => 'SIJAPA',
            'title2' => 'Tabel Data Pelaporan Kerusakan Jaringan Prasarana',
            'pelaporan' => $this->M_user_tabellapor->lists(),
            'isi' => 'v_tabellapor'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_pelapor', 'Nama Pelapor', 'required');
        $this->form_validation->set_rules('alamat_pelapor', 'Alamat Pelapor', 'required');
        $this->form_validation->set_rules('telepon_pelapor', 'Nomor Telepon Pelapor', 'required');
        $this->form_validation->set_rules('tanggal_pelaporan', 'Tanggal Pelaporan', 'required');
        $this->form_validation->set_rules('jenis_jaringan', 'Jenis Jaringan Prasarana', 'required');
        $this->form_validation->set_rules('marker_lapor', 'Marker Pelaporan', 'required');
        $this->form_validation->set_rules('detail_rusak', 'Detail Kerusakan', 'required');
        $this->form_validation->set_rules('detail_lokasi', 'Alamat Lokasi Kerusakan Jaringan Prasarana', 'required');
        $this->form_validation->set_rules('latitude', 'Koordinat Latitude', 'required');
        $this->form_validation->set_rules('longitude', 'Koordinat Longitude', 'required');


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './assets/foto_pelaporan/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 5000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
                $data = array(
                    'title'     => 'SIJAPA',
                    'title2'    => 'Tabel Data Pelaporan Kerusakan Jaringan Prasarana',
                    'error'     => $this->upload->display_errors(),
                    'isi'       => 'v_formulirlapor'
                );
                $this->load->view('layout/wrapper', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_li brary']  = 'gd2';
                $config['source_image']     = './assets/foto_pelaporan/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nm_pelapor'        => $this->input->post('nama_pelapor'),
                    'al_pelapor'        => $this->input->post('alamat_pelapor'),
                    'telpon_pelapor'    => $this->input->post('telepon_pelapor'),
                    'tanggal_lapor'     => $this->input->post('tanggal_pelaporan'),
                    'jenis_jaringan'    => $this->input->post('jenis_jaringan'),
                    'marker'            => $this->input->post('marker_lapor'),
                    'detail_kerusakan'  => $this->input->post('detail_rusak'),
                    'detail_lokasi '    => $this->input->post('detail_lokasi'),
                    'latitude'          => $this->input->post('latitude'),
                    'longitude'         => $this->input->post('longitude'),
                    'foto'              => $upload_data['uploads']['file_name']

                );
                $this->M_user_tabellapor->tambah($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');

                redirect('user_tabel_pelaporan');
            }
        }

        $data = array(
            'title'     => 'SIJAPA',
            'title2'    => 'Tabel Data Pelaporan Kerusakan Jaringan Prasarana',
            'isi'       => 'v_formulirlapor'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }
}

/* End of file User_Tabel_Pelaporan.php */
