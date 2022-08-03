<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class school_model extends CI_Model{
// echo "hii";die;
public function index($user_id,$school_name,$location){

		$data=array(

			'USER_ID'=>$user_id,
			'SCHOOL_NAME'=>$school_name,
			'LOCATION'=>$location
		);
		$query=$this->db->insert('school_details',$data);

		if($query){

			$this->session->set_flashdata('success','School Created successfully');	
			redirect('welcome');
		} else {
			$this->session->set_flashdata('error','Something went wrong. Please try again.');	
			redirect('create_school');	
		}
	}

	public function get_count_all($id) {
		$this->db->where('USER_ID', $id);
		$this->db->where('IS_DELETED', 0);
        return $this->db->count_all('school_details');
    }
    public function get_projects($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('school_details');
 
        return $query->result();
    }
	public function getAll($id){

		$this->db->where('USER_ID', $id);
        $this->db->where('IS_DELETED', 0);
        return $this->db->get('school_details')->result();

	}

	public function getSchoolDetails($id){

		$this->db->where('ID', $id);
		
        $this->db->where('IS_DELETED', 0);
        return $this->db->get('school_details')->row();

	}

	public function update($id,$school_name,$location){

		$data=array(
			'SCHOOL_NAME'=>$school_name,
			'LOCATION'=>$location
		);
		$this->db->where('ID', $id);
        $this->db->update('school_details', $data);
        // echo $this->db->last_query();die;
        redirect('view_school');
	}

	public function delete($id){

		$data=array(
			'IS_DELETED'=>1,
		);
		$this->db->where('ID', $id);
        $this->db->update('school_details', $data);
        $this->session->set_flashdata('success','School Deleted successfully');	
        redirect('view_school');
	}
}