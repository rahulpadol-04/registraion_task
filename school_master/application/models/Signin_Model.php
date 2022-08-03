<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Signin_Model extends CI_Model{
	public function index($email,$password){
		$data=array(

			'EMAIL_ID'=>$email,
			'PASSWORD'=>md5($password)
		);

		$query=$this->db->where($data);
		$login=$this->db->get('users');
		// echo $this->db->last_query();die;
 		if($login!=NULL){
		return $login->row();
 		}  
	}
}