<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_Golongan extends CI_Model
{
    
    function __construct()
    {
        parent::__construct();
    }
    
    public function createGolongan(
        $kodeGolongan, 
        $namaGolongan,
        $kategori,
        $saldoNormal
    )
    {
        $data = array(
            'kode_golongan' => $kodeGolongan,
            'nama_golongan' => $namaGolongan,
            'kategori'      => $kategori,
            'saldo_normal'  => $saldoNormal
        );
        $this->db->insert('golongan', $data);
        return $this->db->insert_id();
    }
    
    public function updateGolongan(
        $id,
        $kodeGolongan, 
        $namaGolongan,
        $kategori,
        $saldoNormal
    )
    {
        $data = array(
            'kode_golongan' => $kodeGolongan,
            'nama_golongan' => $namaGolongan,
            'kategori'      => $kategori,
            'saldo_normal'  => $saldoNormal
        );
        $this->db->where('id', $id);
        $this->db->update('golongan', $data);
    }
    
    function getGolongan($id)
    {
        $data = array();
        $this->db->where('id', $id);
        $query = $this->db->get('golongan');
        if ($query->num_rows() > 0) {
            $data = $query->row_array();
        }
        $query->free_result();
        return $data;
    }
    
    function getAllGolongan($limit = 20, $offset = 0)
    {
        $data = array();
        $this->db->limit($limit, $offset);
        $query = $this->db->get('golongan');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }
    
}

?>