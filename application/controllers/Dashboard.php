<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	 
	}

	public function login(){ 		
		$this->showpage(''); 
		 
	}


	public function home(){ 		
		$this->showpage('home'); 
		 
	}

	public function aboutus(){ 		
		$this->showpage('aboutus'); 
		 
	}
	
	public function whatwedo(){ 		
		$this->showpage('whatwedo'); 
		 
	}

	public function contactus(){ 		
		$this->showpage('contactus'); 
		 
	}

	
	
	

	public function loginform(){
	
		$this->load->view('admin/login');
	}

	public function showpage($page){
		

		$this->load->model('DashboardModel');

		$data['list'] = $this->DashboardModel->getPage($page);  
		if(strlen($page) > 0 ){
			$data['page'] = $page;

		}
		
	  
		$this->load->view('admin/dashboard',['data'=>$data]);
		   
	}
	public function save(){
 
		$this->load->model('DashboardModel');
		$this->DashboardModel->save($_POST);   
		$this->showpage($_POST['page']);
	}

	public function editpage(){

	}


}
