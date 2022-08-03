<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
//Validating login
function __construct(){
parent::__construct();
	if(!$this->session->userdata('ID'))
		redirect('signin');
}
public function index(){
	// echo "<pre>";print_r($this->session->all_userdata());die;


$userfname=$this->session->userdata('FNAME');	
$this->load->view('welcome',['firstname'=>$userfname]);
}

}
