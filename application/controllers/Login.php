<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
        $this->load->model('User_model'); 
        $this->load->model('Codemaster_model'); 
        
        } 

        
 
    public 
 
    function index() 
    {         
        $data['marketings'] = $this->Marketing_model->get_all();
        $data['type'] = $this->Codemaster_model->get_Codemaster("type = 'MRK'");
        $this->load->view('template/head'); 
        $this->load->view('template/core_plugins'); 
        $this->load->view('login', $data); 
	} 
	

	function insert() 
	{ 
		$this->load->helper('string');
		if( $this->input->post('id', TRUE) == null){
			$data = array( 
				'nama' => $this->input->post('nama', TRUE), 
				'ktp' => $this->input->post('ktp', TRUE) , 
				'alamat' => $this->input->post('alamat', TRUE) , 
				'hp' => $this->input->post('hp', TRUE) , 
				'email' => $this->input->post('email', TRUE) , 
				'fb' => $this->input->post('fb', TRUE) , 
				'ig' => $this->input->post('ig', TRUE) , 
				'referalcode' => $this->input->post('referalcode', TRUE) , 
				'type' => $this->input->post('type', TRUE)  , 
				'status' => 1, 
				'code' => random_string('alnum',6)
			); 
            $id = $this->Marketing_model->insert($data); 
            
            $data = array( 
				'username' => $this->input->post('username', TRUE) , 
				'password' => $this->input->post('password', TRUE) , 
				'id_marketing' => $id 
			); 
            $this->User_model->insert($data); 
            
		}else{
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
            
            $data = array( 
				'password' => $this->input->post('password', TRUE) , 
				'id_marketing' => $id 
			); 
            $this->User_model->update($this->input->post('username', TRUE), $data); 
            
		}
		header('Content-Type: application/json');
		// echo json_encode($add_undangan);
		redirect('Login');

	} 
	public function read($id){
		header('Content-Type: application/json');
		echo json_encode($this->Marketing_model->get_by_id($id));
    }
    

    public function cek(){
        $pass = $this->input->post('password', TRUE);
        $username = $this->input->post('username', TRUE);
        $data = $this->User_model->get_by_id($username);
        if($data != null && ($data->password == $pass)){
            redirect('Marketing_controller');
            $_SESSION['username'] = $username;
        }else{
            redirect('Login');
        }
	}

	function delete($id) 
	{ 
		$this->Marketing_model->delete($id); 
		header('Content-Type: application/json');
		echo json_encode('success');
	} 


}

 