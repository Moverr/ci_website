<?php
 
class DashboardModel extends CI_Model
{
	#Constructor to set some default values at class load
	public function __construct()
    {
		parent::__construct();
		$this->load->model('_query_reader');

	 
	}
	
	 
	function getPage($page)
	{ 
		return $this->_query_reader->get_row_as_array('get_page_by_name', array('page'=>$page )); 
	 }
	 
	  
	 function save($details)
	 {
		 #print_r($schoolDetails); exit();
		 $isAdded = false;
		 $required = array('page', 'title', 'body');
		 
		$this->_query_reader->add_data('insert_new_update_page', array('title'=>$details['title'], 'body'=>$details['body'], 'page'=>$details['page']));
			

		 return array('boolean'=>$isAdded, 'msg'=>"saved");

	 }
	 
	 

	 

	
	
	
	
}


?>