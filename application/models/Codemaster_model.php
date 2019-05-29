<?php 
class Codemaster_model extends CI_Model 
 
    { 
    public $table = 'codemaster'; 
 
    public $id = 'code'; 
 
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
        $this->db->where($this->id, $id); 
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
        
    //get codemaster by code and type

    function get_Codemaster($filter){
        $sql = "select code, description as des from codemaster where ". $filter;
            $query = $this->db->query($sql);
            return $query->result();
    }

   
 
    }