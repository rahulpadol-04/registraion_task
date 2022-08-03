<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class school_master extends CI_Controller{

	public function index(){

		echo "<pre>";print_r($this->session->all_userdata());die;
	$this->load->view('welcome',['firstname'=>$userfname]);

	}
}