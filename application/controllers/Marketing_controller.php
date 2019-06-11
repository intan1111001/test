<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marketing_controller extends CI_Controller {

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
        if($this->session->userdata('type') == 4){
			$data['marketings'] = $this->Marketing_model->get_all("m.type != '4'");
			$data['type'] = $this->Codemaster_model->get_Codemaster("type = 'MRK'");
		}else{
			$data['marketings'] = $this->Marketing_model->get_all("referalcode = '".$this->session->userdata('code')."'");
		
		}
		
		if($this->session->userdata('type') == 1){
			$data['type'] = $this->Codemaster_model->get_Codemaster("type = 'MRK' and code in (2,5)");
		}else if($this->session->userdata('type') == 2){
			$data['type'] = $this->Codemaster_model->get_Codemaster("type = 'MRK' and code in (3,5)");
		}else if($this->session->userdata('type') == 3){
			$data['type'] = $this->Codemaster_model->get_Codemaster("type = 'MRK' and code = 5");
		}
        $this->load->view('template/head'); 
        $this->load->view('template/core_plugins'); 
        $this->load->view('Marketing_view', $data); 
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
				'referalcode' => $this->session->userdata('code'), 
				'code' => random_string('alnum',6),
				'type' => $this->input->post('type', TRUE)  , 
				'status' => 1
			); 
			$this->Marketing_model->insert($data); 
		}else{
			$id = $this->input->post('id', TRUE) ;
			if($this->session->userdata('type') == 4){
				$data = array( 
					'nama' => $this->input->post('nama', TRUE), 
					'ktp' => $this->input->post('ktp', TRUE) , 
					'alamat' => $this->input->post('alamat', TRUE) , 
					'hp' => $this->input->post('hp', TRUE) , 
					'email' => $this->input->post('email', TRUE) , 
					'fb' => $this->input->post('fb', TRUE) , 
					'ig' => $this->input->post('ig', TRUE) , 
					'referalcode' => $this->input->post('referalcode', TRUE), 
					'type' => $this->input->post('type', TRUE) , 
					'status' => 1
				); 
			}else{
				$data = array( 
					'nama' => $this->input->post('nama', TRUE), 
					'ktp' => $this->input->post('ktp', TRUE) , 
					'alamat' => $this->input->post('alamat', TRUE) , 
					'hp' => $this->input->post('hp', TRUE) , 
					'email' => $this->input->post('email', TRUE) , 
					'fb' => $this->input->post('fb', TRUE) , 
					'ig' => $this->input->post('ig', TRUE) , 
					'status' => 1
				); 
			}
			$this->Marketing_model->update($id , $data); 
		}
		header('Content-Type: application/json');
		// echo json_encode($add_undangan);
		redirect('Marketing_controller');

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
		echo json_encode($this->Marketing_model->get_by_referalcode($id));
    }

}

 