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
            $this->db->select("p.id,p.nama, p.ktp, p.alamat, p.email, m.type, m.nama AS nama_referal, m1.nama AS nama_referal1, m2.nama AS nama_referal2, c.description, c1.description desc1, c2.description desc2");
            $this->db->from("pot_customer p");
            $this->db->join("marketing m", "m.code = p.referalcode");
            $this->db->join("marketing m1", "m1.code = m.referalcode","left");
            $this->db->join("marketing m2", "m2.code = m1.referalcode","left");
            $this->db->join("codemaster c", "c.code = m.type and c.type='MRK'");
            $this->db->join("codemaster c1", "c.code = m1.type and c.type='MRK'","left");
            $this->db->join("codemaster c2", "c.code = m2.type and c.type='MRK'","left");
            if($filter != "" && $filter != null){
                $this->db->where($filter); 
            }
            $this->db->group_by("p.id,p.nama, p.ktp, p.alamat, p.email, m.nama, m1.nama , m2.nama , c.description, c1.description, c2.description");
            $this->db->order_by("p.id", $this->order); 
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