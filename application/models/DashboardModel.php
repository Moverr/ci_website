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
	 
	  
	 function save($schoolDetails)
	 {
		 #print_r($schoolDetails); exit();
		 $isAdded = false;
		 $required = array('schoolname', 'schooltype__schooltypes', 'dateschoolregistered', 'schooltelephone', 'schooladdress__addressline');
		 
		 # 1. Add all provided data into the session
		 $passed = process_fields($this, $schoolDetails, $required, array("-"));
		 $msg = !empty($passed['msg'])? $passed['msg']: "";
		 # 2. Save the data into the database
		 if($passed['boolean'])
		 {
		
			$emailContactId = $this->_query_reader->add_data('add_contact_data', array('contact_type'=>'email', 'carrier_id'=>'', 'details'=>$details['schoolemailaddress'], 'parent_id'=>$schoolId, 'parent_type'=>'school'));
			
		 }
		 
		 return array('boolean'=>$isAdded, 'msg'=>$msg));

	 }
	 
	 

	 

	
	
	
	
}


?>