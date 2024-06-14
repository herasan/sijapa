<?php
defined('BASEPATH') or exit('No direct script acces allowed');
class M_tabellapor extends CI_Model
{
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('lapor_tbl');
        $this->db->order_by('id_lapor', 'desc');
        return $this->db->get()->result();

    }

    public function tambah($data)

    {
        $this->db->insert('lapor_tbl', $data);
    }

    public function detail($id_lapor)
    {
        $this->db->select('*');
        $this->db->from('lapor_tbl');
        $this->db->where('id_lapor', $id_lapor);
        return $this->db->get()->row(); 
    }
    public function edit($data)
    {
        $this->db->where('id_lapor', $data['id_lapor']);
        $this->db->update('lapor_tbl', $data);
    }

    public function hapus($data)
    {
        $this->db->where('id_lapor', $data['id_lapor']);
        $this->db->delete('lapor_tbl', $data);
    }
}

/* End of file M_tabellapor.php */
