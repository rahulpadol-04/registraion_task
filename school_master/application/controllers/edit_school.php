<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class edit_school extends CI_Controller{
	
	public function __construct() {
      parent::__construct(); 
	  if(!$this->session->userdata('ID'))
		redirect('signin');
      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->library("pagination");
      $this->load->model('school_model');
 
   }
   
	public function index($id){
		$data['user'] = $this->school_model->getSchoolDetails($id);
		$this->load->view('edit_school',$data);	
		
	}

	public function edit($id=null){
		
		$this->form_validation->set_rules('school_name','School Name','required');
		$this->form_validation->set_rules('location','Location','required');

			if($this->form_validation->run()){
			
				$school_name=$this->input->post('school_name');
				$location=$this->input->post('location');
				$id = $this->input->post('ID');
				$this->school_model->update($id,$school_name,$location);	

			} else{
				$this->load->view('edit_school');	
		}
	}
	public function delete($id=null){

		$this->school_model->delete($id);

	}
}