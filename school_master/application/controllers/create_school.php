<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class create_school extends CI_Controller{
	function __construct(){
		parent::__construct();
			if(!$this->session->userdata('ID'))
				redirect('signin');
		}
	public function index(){

		$this->form_validation->set_rules('school_name','School Name','required');
		$this->form_validation->set_rules('location','Location','required');

			if($this->form_validation->run()){
			 // echo "<pre>";print_r($this->session->all_userdata());die;
				$school_name=$this->input->post('school_name');
				$location=$this->input->post('location');
				$id = $this->session->userdata('ID');
			// print_r($id);die;
				$this->load->model('school_model');

				$this->school_model->index($id,$school_name,$location);
			
			} else{
				$this->load->view('create_school');	
		}
	}

	public function edit($id){

		$data['user'] = $this->school_model->getAll($id);
		$this->load->view('create_school',$data);	
		print_r($id);die;
	}
}