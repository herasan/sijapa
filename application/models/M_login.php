<?php
defined('BASEPATH') or exit('No direct script acces allowed');
class M_login extends CI_Model
{
    public function login($email, $password)
    {
        $this->db->select('*');
        $this->db->from('user_tbl');
        $this->db->where(array(
            'email' => $email,
            'password' => $password,
        ));
        return $this->db->get()->row();
    }
}

/* End of file M_login.php */
