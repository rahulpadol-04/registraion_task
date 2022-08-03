<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_Model extends CI_Model{
// echo "hii";die;
public function index($fname,$lname,$emailid,$password){

		$data=array(

			'FNAME'=>$fname,
			'LNAME'=>$lname,
			'EMAIL_ID'=>$emailid,
			'PASSWORD'=>md5($password)
		);

		$query=$this->db->insert('users',$data);

		if($query){

			$this->session->set_flashdata('success','Registration successfull, Now you can login.');	
			redirect('signin');
		} else {
			$this->session->set_flashdata('error','Something went wrong. Please try again.');	
			redirect('signup');	
		}
	}
}