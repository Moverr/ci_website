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
		// $this->load->view('admin/dashboard');
		$this->showpage();
	}


	public function showdashboard(){
		if($this->uri->segment(3) != null){

		}

		$this->load->view('admin/dashboard');
	}
	 

	public function loginform(){
	
		$this->load->view('admin/login');
	}

	public function showpage(){
		// $page = $url = $this->uri->segment(3);
		$this->load->view('admin/dashboard');
		   
	}
	public function editpage(){

	}


}
