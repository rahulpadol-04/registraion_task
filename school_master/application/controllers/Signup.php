<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
public function index()
	{
		//Form Validation
		$this->form_validation->set_rules('firstname','First Name','required|alpha');
		$this->form_validation->set_rules('lastname','Last Name','required|alpha');
		$this->form_validation->set_rules('emailid','Email Id','required|valid_email|is_unique[users.EMAIL_ID]');
		$this->form_validation->set_rules('password','Password','required|min_length[6]');
		$this->form_validation->set_rules('confirmpassword','Confirm Password','required|min_length[6]|matches[password]');
		$this->form_validation->set_message('is_unique', 'This email is already exists.');

		if($this->form_validation->run())
		{
			//Getting Post Values
			// print_r($_POST);die;
			$fname=$this->input->post('firstname');
			$lname=$this->input->post('lastname');
			$emailid=$this->input->post('emailid');
			$password=$this->input->post('password');
			$this->load->model('Signup_Model');

			$this->Signup_Model->index($fname,$lname,$emailid,$password);
			$this->load->view('signin');
		} else {

			$this->load->view('signup');
		}
	}
}