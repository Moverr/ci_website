<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {
 
	public function index()
	{
		
		$page = "aboutus";
		$this->load->model('DashboardModel');
		$data['list'] = $this->DashboardModel->getPage($page);  		
		$this->load->view('public/aboutus',["data"=>$data]); 
    }
    
    
 
    
}
