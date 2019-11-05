<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {
 
	public function index()
	{
		$this->load->model('DashboardModel');
		$data['list'] = $this->DashboardModel->getPage($page);  		
		$this->load->view('public/contactus');
    }
    
    
	 
    
}
