<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller{

	public function index(){

	$this->form_validation->set_rules('emailid','Email id','required|valid_email');
	$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()){

			$email=$this->input->post('emailid');
			$password=$this->input->post('password');
			$this->load->model('Signin_Model');
			$validate=$this->Signin_Model->index($email,$password);
				if($validate){
					// echo "hii";die;
					// print_r($validate);die;
					$this->session->set_userdata('ID',$validate->ID);	
					$this->session->set_userdata('FNAME',$validate->FNAME);	
					// echo "<pre>";print_r($this->session->all_userdata());die;
					redirect('welcome');
				} else {
					$this->session->set_flashdata('error','Invalid login details.Please try again.');
					redirect('signin');
				}
			} else{
				$this->load->view('signin');	
		}
	}
}