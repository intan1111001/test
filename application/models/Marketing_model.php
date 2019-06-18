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
 
    function get_all($filter = "") 
        { 
            $this->db->select("m.*, c.description");
            $this->db->from("marketing m");
            $this->db->join("codemaster c", "c.code = m.type and c.type='MRK'");
            if($filter != ""){
                $this->db->where($filter);
            }
            $query = $this->db->get();
            $hasil = $query->result();
            return $hasil;
        } 

    // get data by id 
 
    function get_by_id($id) 
        { 
        $this->db->where($this->id, $id); 
        return $this->db->get($this->table)->row(); 
        } 

    function get_by_code($filter) 
        { 
        $this->db->select("m.*, c.description, u.*");
        $this->db->from("marketing m");
        $this->db->join("codemaster c", "c.code = m.type and c.type='MRK'");
        $this->db->join("user u", "u.id_marketing = m.id ", 'left');
        $this->db->where($filter);
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
        } 

        // function get_by_referalcode($id) 
        // { 
        // $this->db->select("m.*, c.description");
        // $this->db->from("marketing m");
        // $this->db->join("codemaster c", "c.code = m.type and c.type='MRK'");
        // $this->db->where("m.referalcode = '$id'");
        // $query = $this->db->get();
        // $hasil = $query->result_array();
        // return $hasil;
        // } 

    // function getprofile($id){
    //     $this->db->select("m.*, c.description");
    //     $this->db->where("m.id = '$id'");
    //     $this->db->from("marketing m");
    //     $this->db->join("codemaster c", "c.code = m.type and c.type='MRK'");
    //     $query = $this->db->get();
    //     $hasil = $query->result_array();
    //     return $hasil;
    // }
 
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