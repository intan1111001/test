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
        $this->load->model('Potcustomer_model'); 
        $this->load->model('Marketing_model'); 
        
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
					'keterangan' => $this->input->post('keterangan', TRUE) , 
					'createdate' => date('Y-m-d') , 
					'status' => 1
				); 
				$this->Potcustomer_model->insert($data); 
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
						'referalcode' => $this->session->userdata('code'), 
						'keterangan' => $this->input->post('keterangan', TRUE) , 
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
						'keterangan' => $this->input->post('keterangan', TRUE) , 
						'status' => 1
					); 
				}
				$this->Potcustomer_model->update($id , $data); 
			}
			header('Content-Type: application/json');
			// echo json_encode($add_undangan);
			redirect('Potensial_customer');
	
		} 


    public 
 
    function index() 
    {         
		
		if($this->session->userdata('type') == 4){
			$data['customers'] = $this->Potcustomer_model->get_all();
		}else{
			$data['customers'] = $this->Potcustomer_model->get_all("p.referalcode = '".$this->session->userdata('code')."'");
		
		}

        $this->load->view('template/head'); 
        $this->load->view('template/core_plugins'); 
        $this->load->view('potensial_customer', $data); 
	} 
	
	public function read($id){
		header('Content-Type: application/json');
		echo json_encode($this->Potcustomer_model->get_by_id($id));
	}

	function delete($id) 
	{           
		$this->Potcustomer_model->delete($id); 
		header('Content-Type: application/json');
		echo json_encode('success');
	} 

	public function read_code($id){
		header('Content-Type: application/json');
		echo json_encode($this->Potcustomer_model->get_by_code("m.referalcode = '$id'"));
    }

}

 