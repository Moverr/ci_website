<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whatwedo extends CI_Controller {
 
	public function index()
	{
		$page = "whatwedo";
		$this->load->model('DashboardModel');
		$data['list'] = $this->DashboardModel->getPage($page);  		
		$this->load->view('public/whatwedo',["data"=>$data]);

		 
    }
    
    
	 
    
}
