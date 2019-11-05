<?php
 
class DashboardModel extends CI_Model
{
	#Constructor to set some default values at class load
	public function __construct()
    {
        parent::__construct();
	 
	}
	
	 
	function get_list($instructions=array())
	{
		$searchString = " V.status='published' ";
		$orderBy = " V.date_added DESC ";
		if(!empty($instructions['action']) && $instructions['action']== 'publish')
		{
			$searchString = " V.status IN ('saved','verified') ";
		}
		else if(!empty($instructions['action']) && $instructions['action']== 'archive')
		{
			$searchString = " V.status IN ('saved','archived') ";
		}
		else if(!empty($instructions['action']) && $instructions['action']== 'verify')
		{
			$searchString = " V.status='saved' ";
		}
		else if(!empty($instructions['action']) && $instructions['action']== 'public')
		{
			$searchString = " V.status='published' AND (DATE(V.start_date) < NOW() AND DATE(V.end_date) > NOW()) ";
			$orderBy = " V.end_date ASC ";
		}
		
		# If a search phrase is sent in the instructions
		if(!empty($instructions['searchstring']))
		{
			$searchString .= " AND ".$instructions['searchstring'];
		}
		
		# Instructions
		$count = !empty($instructions['pagecount'])? $instructions['pagecount']: NUM_OF_ROWS_PER_PAGE;
		$start = !empty($instructions['page'])? ($instructions['page']-1)*$count: 0;
		
		return $this->_query_reader->get_list('get_vacancy_list_data',array('search_query'=>$searchString, 'limit_text'=>$start.','.($count+1), 'order_by'=>$orderBy));
	}
	
	
	
	
	
}


?>