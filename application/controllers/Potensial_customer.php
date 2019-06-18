<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Potensial_customer extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }

    public $add_undangan = array();
	function __construct() 
        { 
        parent::__construct(); 
        
        } 

        
 
    public 
 
    function index() 
    {         
        
        $this->load->view('template/head'); 
        $this->load->view('template/core_plugins'); 
        $this->load->view('Marketing_view', $data); 
	} 
	
	public function read($id){
		header('Content-Type: application/json');
		echo json_encode($this->Marketing_model->get_by_id($id));
	}

	function delete($id) 
	{           
		$this->Marketing_model->delete($id); 
		header('Content-Type: application/json');
		echo json_encode('success');
	} 

	public function read_code($id){
		header('Content-Type: application/json');
		echo json_encode($this->Marketing_model->get_by_code("m.referalcode = '$id'"));
    }

}

 