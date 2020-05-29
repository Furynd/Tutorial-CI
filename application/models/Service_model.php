<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model extends CI_Model
{
    private $_table = "pelayanan";

    public $idPendaftar;
    public $namaPendaftar;
    public $asalPendaftar;
    public $nomorPendaftar;
    public $jadwal;

    public function rules()
    {
        return [
            ['field' => 'namaPendaftar',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'asalPendaftar',
            'label' => 'Asal',
            'rules' => 'required'],
            
            ['field' => 'nomorPendaftar',
            'label' => 'Nomor',
            'rules' => 'required'],
            // ,
            // 'rules' => 'numeric'],

            ['field' => 'jadwal',
            'label' => 'Jadwal',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["idPendaftar" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->idPendaftar = uniqid();
        $this->namaPendaftar = $post["namaPendaftar"];
        $this->asalPendaftar = $post["asalPendaftar"];
        $this->nomorPendaftar = $post["nomorPendaftar"];
        $this->jadwal = $post["jadwal"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->idPendaftar = $post["idPendaftar"];
        $this->namaPendaftar = $post["namaPendaftar"];
        $this->asalPendaftar = $post["asalPendaftar"];
        $this->nomorPendaftar = $post["nomorPendaftar"];
        $this->jadwal = time();
        return $this->db->update($this->_table, $this, array('idPendaftar' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("idPendaftar" => $id));
    }

    public function isAvailable($time)
    {
        $this->db->where('jadwal', $time);
        $number = $this->db->count_all_results();
        if ($number < 12) return true;
        return false;
    }
}

// SELECT 
// COUNT
// (*)
// FROM Products
// WHERE
//  Price = 18;