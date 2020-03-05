<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model extends CI_Model
{
    private $_table = "jasa";

    public $idService;
    public $nameService;
    public $hargaService;
    public $image = "default.jpg";
    public $deskripsi;

    public function rules()
    {
        return [
            ['field' => 'nameService',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'Price',
            'rules' => 'numeric'],
            
            ['field' => 'deskripsi',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["idService" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->product_id = uniqid();
        $this->name = $post["nameService"];
        $this->price = $post["harga"];
        $this->description = $post["deskripsi"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->idService = $post["idService"];
        $this->nameService = $post["nameService"];
        $this->harga = $post["harga"];
        $this->deskripsi = $post["deskripsi"];
        return $this->db->update($this->_table, $this, array('idService' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("idService" => $id));
    }
}