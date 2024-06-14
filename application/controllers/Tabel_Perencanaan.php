<?php
defined('BASEPATH') or exit('No direct script acces allowed');
class Tabel_Perencanaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_tabelrencana');
    }
    
    public function index()
    {
        $data = array(
            'title' => 'SIJAPA',
            'title2' => 'Tabel Data Perencanaan Jaringan Prasarana',
            'perencanaan'=> $this->M_tabelrencana->lists(),
            'isi' => 'admin/v_tabelperencanaan'
        );

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_pelapor', 'Nama Pelapor', 'required');
        $this->form_validation->set_rules('alamat_pelapor', 'Alamat Pelapor', 'required');
        $this->form_validation->set_rules('telepon_pelapor', 'Nomor Telepon Pelapor', 'required');
        $this->form_validation->set_rules('tanggal_pelaporan', 'Tanggal Pelaporan', 'required');
        $this->form_validation->set_rules('jenis_jaringan', 'Jenis Jaringan Prasarana', 'required');
        $this->form_validation->set_rules('marker', 'Marker Perencanaan', 'required');
        $this->form_validation->set_rules('tujuan', 'Tujuan Perencanaan', 'required');
        $this->form_validation->set_rules('detail_lokasi', 'Alamat Lokasi Perencanaan Jaringan Prasarana', 'required');
        $this->form_validation->set_rules('latitude', 'Koordinat Latitude', 'required');
        $this->form_validation->set_rules('longitude', 'Koordinat Longitude', 'required');

        if ($this->form_validation->run() == TRUE){
            $config['upload_path']      = './assets/foto_perencanaan/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 2000;
            $this->upload->initialize($config);
            if (! $this->upload->do_upload('foto'))
                {
                    $data = array(
                        'title'     => 'SIJAPA',
                        'title2'    => 'Tabel Data Perencanaan Jaringan Prasarana',
                        'isi'       => 'v_tabelrencana'
                    );
                    $this->load->view('layout/v_wrapper', $data, FALSE);
                }
            else 
                {
                    $upload_data                = array('uploads'=> $this->upload->data());
                    $config ['image_li brary']  = 'gd2';
                    $config['source_image']     = './assets/foto_perencanaan/' .$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                $data = array(
                    'nm_usul'        => $this->input->post('nama_pelapor'),
                    'al_usul'        => $this->input->post('alamat_pelapor'), 
                    'telpon_pelapor'    => $this->input->post('telepon_pelapor'),
                    'tanggal_lapor'     => $this->input->post('tanggal_pelaporan'),
                    'jenis_jaringan'    => $this->input->post('jenis_jaringan'),
                    'marker'            => $this->input->post('marker'),
                    'tujuan'  => $this->input->post('tujuan'),
                    'detail_lokasi '    => $this->input->post('detail_lokasi'),
                    'latitude'          => $this->input->post('latitude'),
                    'longitude'         => $this->input->post('longitude'),
                    'foto'              => $upload_data['uploads']['file_name']

                );

        $this->M_tabelrencana->tambah($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');

        redirect('tabel_perencanaan');
    }
}

    $data = array(
        'title'     => 'SIJAPA',
        'title2'    => 'Tabel Data Perencanaan Jaringan Prasarana',
        'isi'       => 'admin/v_tabelperencanaan'
    );
    $this->load->view('layout/v_wrapper', $data, FALSE);
    }
    public function edit($id_usul)
    {

        $this->form_validation->set_rules('nama_pelapor', 'Nama Pelapor', 'required');
        $this->form_validation->set_rules('alamat_pelapor', 'Alamat Pelapor', 'required');
        $this->form_validation->set_rules('telepon_pelapor', 'Nomor Telepon Pelapor', 'required');
        $this->form_validation->set_rules('tanggal_pelaporan', 'Tanggal Pelaporan', 'required');
        $this->form_validation->set_rules('jenis_jaringan', 'Jenis Jaringan Prasarana', 'required');
        $this->form_validation->set_rules('marker', 'Marker Perencanaan', 'required');
        $this->form_validation->set_rules('tujuan', 'Tujuan Perencanaan', 'required');
        $this->form_validation->set_rules('detail_lokasi', 'Alamat Lokasi Perencanaan Jaringan Prasarana', 'required');
        $this->form_validation->set_rules('latitude', 'Koordinat Latitude', 'required');
        $this->form_validation->set_rules('longitude', 'Koordinat Longitude', 'required');

        if ($this->form_validation->run() == TRUE){
            $config['upload_path']      = './assets/foto_perencanaan/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 2000;
            $this->upload->initialize($config);
            if (! $this->upload->do_upload('foto'))
                {
                    $data = array(
                        'title'     => 'SIJAPA',
                        'title2'    => 'Tabel Data Perencanaan Jaringan Prasarana',
                        'isi'       => 'admin/v_tabelperencanaan'
                    );
                    $this->load->view('layout/v_wrapper', $data, FALSE);
                }
            else 
                {
                    $upload_data                = array('uploads'=> $this->upload->data());
                    $config ['image_li brary']   = 'gd2';
                    $config['source_image']     = './assets/foto_perencanaan/' .$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

        $data = array(
            'id_usul'           => $id_usul,
            'nm_pelapor'        => $this->input->post('nama_pelapor'),
            'al_pelapor'        => $this->input->post('alamat_pelapor'),
            'telpon_pelapor'    => $this->input->post('telepon_pelapor'),
            'tanggal_lapor'     => $this->input->post('tanggal_pelaporan'),
            'jenis_jaringan'    => $this->input->post('jenis_jaringan'),
            'tujuan'            => $this->input->post('tujuan'),
            'marker'            => $this->input->post('marker'),
            'detail_lokasi '    => $this->input->post('detail_lokasi'),
            'latitude'          => $this->input->post('latitude'),
            'longitude'         => $this->input->post('longitude'),
            'foto'              => $upload_data['uploads']['file_name']
        );

                $this->M_tabelrencana->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');

                redirect('tabel_perencanaan');
            }
        }
        $data = array(
            'title'     => 'SIJAPA',
            'title2'    => 'Tabel Data Perencanaan Jaringan Prasarana',
            'isi'       => 'admin/v_tabelperencanaan'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
        }

    public function hapus($id_usul)
    {
        $data = array(
            'id_usul'  => $id_usul
        );

        $this->M_tabelrencana->hapus($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!');

        redirect('tabel_perencanaan');
    }
}
    

/* End of file Tabel_Perencanaan.php */

