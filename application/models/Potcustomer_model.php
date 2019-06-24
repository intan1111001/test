<?php 
class Potcustomer_model extends CI_Model 
 
    { 
    public $table = 'pot_customer'; 
 
    public $id = 'id'; 
 
    public $order = 'DESC'; 
 
    function __construct() 
        { 
        parent::__construct(); 
        } 
 
    // get all 
 
    function get_all($filter = "") 
        { 
            if($filter != "" && $filter != null){
                $this->db->where($filter); 
            }
            $this->db->order_by($this->id, $this->order); 
            return $this->db->get($this->table)->result(); 
        } 

    // get data by id 
 
    function get_by_id($id) 
        { 
        $this->db->select("*");
        $this->db->where($this->id, $id); 
        return $this->db->get($this->table)->row(); 
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