<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Mahasiswa extends CI_Model
{
    private $table = 'mahasiswa';

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules(){
        return [
            [
                'field' => 'Nim',
                'label' => 'Nim',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Nama',
                'label' => 'Nama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Alamat',
                'label' => 'Alamat',
                'rules' => 'trim|required'
            ]
        ];
    }

    public function getById($id){
        return $this->db->get_where($this->table, ["IDmhs" => $id])->row();
    }

    public function getAll(){
        $this->db->from($this->table);
        $this->db->order_by("IDmhs", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function save(){
        $data = array(
            "Nim" => $this->input->post('Nim'),
            "Nama" => $this->input->post('Nama'),
            "Alamat" => $this->input->post('Alamat'),
        );
        return $this->db->insert($this->table, $data);
    }

    public function update(){
        $data = array(
            "Nim" => $this->input->post('Nim'),
            "Nama" => $this->input->post('Nama'),
            "Alamat" => $this->input->post('Alamat'),
        );
        return $this->db->update($this->table, $data, array('IDmhs' => $this->input->post('IDmhs')));
    }

    //hapus data mahasiswa
    public function delete($id)
    {
        return $this->db->delete($this->table, array("IDmhs" => $id));
    }
}
