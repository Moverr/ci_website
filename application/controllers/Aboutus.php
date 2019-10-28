<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {
 
	public function index()
	{
		$this->load->view('public/aboutus');
    }
    
    
	 public function edit(){
		$categoryid = $this->input->post('category');
		$topic = $this->input->post('topic');
		$details = $this->input->post('details');
		
	 }
    
}
