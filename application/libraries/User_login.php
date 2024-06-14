<?php defined('BASEPATH') or exit('No direct script acces allowed');

class User_login
{
    protected $ci;


    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('m_login');
    }


    public function login($email, $password)

    {

        $cek = $this->ci->m_login->login($email, $password);
        if ($cek) {
            $email = $cek->email;
            $nama_user = $cek->nm_pengguna;

            $this->ci->session->set_userdata('email', $email);
            $this->ci->session->set_userdata('nm_pengguna', $nama_user);

            redirect('admin');
        } else {
            $this->ci->session->set_flashdata('pesan', 'Email Atau Password Salah!');
            redirect('login');
        }
    }

   public function cek_login()
   {
        if ($this->ci->session->userdata('email')==""){
            $this->ci->session->set_flashdata('pesan', 'Anda Belum Login !');
    redirect('login');
}

   }


    public function logout()
    {
        $this->ci->session->unset_userdata('email');
        $this->ci->session->unset_userdata('nm_pengguna');
        $this->ci->session->set_flashdata('pesan', 'Logout Sukses !');
        redirect('login');
    }
}




?>
