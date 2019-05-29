<?php 
class Marketing_model extends CI_Model 
 
    { 
    public $table = 'marketing'; 
 
    public $id = 'id'; 
 
    public $order = 'DESC'; 
 
    function __construct() 
        { 
        parent::__construct(); 
        } 
 
    // get all 
 
    function get_all() 
        { 
        $this->db->order_by($this->id, $this->order); 
        return $this->db->get($this->table)->result(); 
        } 

    // get data by id 
 
    function get_by_id($id) 
        { 
        $this->db->where($this->id, $id); 
        return $this->db->get($this->table)->row(); 
        } 

    function getprofile($id){
        $this->db->select("m.*, c.description");
        $this->db->where("m.id = '$id'");
        $this->db->from("marketing m");
        $this->db->join("codemaster c", "c.code = m.type and c.type='MRK'");
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
 
    // insert data 
 
    function insert($data) 
        { 
        $this->db->insert($this->table, $data); 
        return $this->db->insert_id();
        } 
 
    // update data 
 
    function update($id, $data) 
        { 
        $this->db->where($this->id, $id); 
        $this->db->update($this->table, $data); 
        } 
 
    // delete data 
 
    function delete($id) 
        { 
        $this->db->where($this->id, $id); 
        $this->db->delete($this->table); 
        } 
    }