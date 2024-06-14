<?php
defined('BASEPATH') or exit('No direct script acces allowed');
class M_user_tabellapor extends CI_Model
{
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('lapor_tbl');
        $this->db->order_by('id_lapor', 'DESC');
        return $this->db->get()->result();

    }

    public function tambah($data)

    {
        $this->db->insert('lapor_tbl', $data);
    }
}


/* End of file M_user_tabellapor.php */