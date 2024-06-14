<?php

defined('BASEPATH') or exit('No direct script acces allowed');
class Login extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->user_login->login($email, $password);
        };

        $data = array(
            'title' => 'Login'
        );

        $this->load->view('v_login', $data, FALSE);
    }

    public function logout()
    {
        $this->user_login->logout();
    }
}


/* End of file Login.php */
