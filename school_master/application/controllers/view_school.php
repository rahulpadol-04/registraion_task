<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class view_school extends CI_Controller{

	public function __construct() {
      parent::__construct(); 
      
	if(!$this->session->userdata('ID'))
		redirect('signin');
      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->library("pagination");
      $this->load->model('school_model');
 
   }
	public function index(){

	$id = $this->session->userdata('ID');
	$config["base_url"] = base_url() . "view_school";
    $config["total_rows"] = $this->school_model->get_count_all($id);
    $config["per_page"] = 20;
    $config["uri_segment"] = 2;
    /*
      start 
      add boostrap class and styles
    */
    $config['full_tag_open'] = '<ul class="pagination">';        
    $config['full_tag_close'] = '</ul>';        
    $config['first_link'] = 'First';        
    $config['last_link'] = 'Last';        
    $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';        
    $config['first_tag_close'] = '</span></li>';        
    $config['prev_link'] = '&laquo';        
    $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';        
    $config['prev_tag_close'] = '</span></li>';        
    $config['next_link'] = '&raquo';        
    $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';        
    $config['next_tag_close'] = '</span></li>';        
    $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';        
    $config['last_tag_close'] = '</span></li>';        
    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';        
    $config['cur_tag_close'] = '</a></li>';        
    $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';        
    $config['num_tag_close'] = '</span></li>';
    /*
      end 
      add boostrap class and styles
    */
    $this->pagination->initialize($config);

    $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
    $data["links"] = $this->pagination->create_links();
    $data['school'] = $this->school_model->get_projects($config["per_page"], $page);
		// $this->load->model('school_model');
		
		
		$data['user'] = $this->school_model->getAll($id);
		
		$this->load->view('view_school',$data);
	}
}