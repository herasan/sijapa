<?php
defined('BASEPATH') or exit('No direct script acces allowed');
class M_tabelrencana extends CI_Model
{
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('usul_tbl');
        $this->db->order_by('id_usul', 'desc');
        return $this->db->get()->result();

    }

    public function tambah($data)

    {
        $this->db->insert('usul_tbl', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_usul', $data['id_usul']);
        $this->db->update('usul_tbl', $data);
    }

    public function hapus($data)
    {
        $this->db->where('id_usul', $data['id_usul']);
        $this->db->delete('usul_tbl', $data);
    }
}

/* End of file M_tabelrencana.php */
