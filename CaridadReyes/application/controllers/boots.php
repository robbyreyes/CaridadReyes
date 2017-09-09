<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class boots extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->model('students_model','students');
		
	}
	
	
	public function index()
	{
		// echo "CI and Bootstrap";
		
		$header_data['title'] = "Star na si Van Damme Stallone";
		$data['name'] = "Jayson Cruz";
		$data['years'] = "20";
		
		
		$this->load->view('include/header',$header_data);
		$this->load->view('students/new_student', $data);
		$this->load->view('include/footer');
		
	}
	
	public function add_student(){
		
	if( $_SERVER['REQUEST_METHOD']=='POST'){
		//form was submitted
		//save the new students
		//do some stuff
	}
	else{ //display blank form
		
		$header_data['title'] = "Add New Student";
		
		$this->load->view('include/header',$header_data);
		$this->load->view('students/new_student', $data);
		$this->load->view('include/footer');	
	}
	}
}