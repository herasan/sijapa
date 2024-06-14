<?php
defined('BASEPATH') or exit('No direct script acces allowed');
class M_user_tabelrencana extends CI_Model
{
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('usul_tbl');
        $this->db->order_by('id_usul', 'DESC');
        return $this->db->get()->result();

    }

    public function tambah($data)

    {
        $this->db->insert('usul_tbl', $data);
    }
}


/* End of file M_user_tabelrencana.php */