<?php 
class User_model extends CI_Model 
 
    { 
    public $table = 'user'; 
 
    public $id = 'username'; 
 
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
        // return $this->db->get("laporan");
        } 

    // get data by id 
 
    function get_by_id($id) 
        { 
        $this->db->select("m.*, u.*");
        $this->db->from("marketing m");
        $this->db->join("user u", "u.id_marketing = m.id ");
        $this->db->where("u.username", $id); 
        return $this->db->get($this->table)->row(); 
        } 
 
    // insert data 
 
    function insert($data) 
        { 
        $this->db->insert($this->table, $data); 
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