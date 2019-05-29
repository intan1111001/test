<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
        $this->load->model('Marketing_model'); 
        $this->load->model('Codemaster_model'); 
        
        } 
    public 
 
    function index() 
    {         
        $data['marketings'] = $this->Marketing_model->getprofile(1);
        $data['type'] = $this->Codemaster_model->get_Codemaster("type = 'MRK'");
        $this->load->view('template/head'); 
        $this->load->view('template/core_plugins'); 
        $this->load->view('profile', $data); 
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

    function update() 
	{ 
	
        $id = $this->input->post('id', TRUE) ;
        $data = array( 
            'nama' => $this->input->post('nama', TRUE), 
            'ktp' => $this->input->post('ktp', TRUE) , 
            'alamat' => $this->input->post('alamat', TRUE) , 
            'hp' => $this->input->post('hp', TRUE) , 
            'email' => $this->input->post('email', TRUE) , 
            'fb' => $this->input->post('fb', TRUE) , 
            'ig' => $this->input->post('ig', TRUE) , 
            'referalcode' => $this->input->post('referalcode', TRUE) , 
            'type' => $this->input->post('type', TRUE) , 
            'status' => 1
        ); 
        $this->Marketing_model->update($id , $data); 
		header('Content-Type: application/json');
		// echo json_encode($add_undangan);
		redirect('Profile');

	} 

}

 