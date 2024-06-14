<?php
defined('BASEPATH') or exit('No direct script acces allowed');
class M_Pemetaan  extends CI_Model
{
    //Mengambil data dari tabel
    public function allData()
    {
        $this->db->select('*');
        $this->db->from('lapor_tbl');
       
        return $this->db->get()->result();

    }
}
/* End of file M_pemetaan.php */
