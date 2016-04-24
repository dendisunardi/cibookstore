<?php

/**
* 
*/
class Genres extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function get_active_genres()
	{
		$this->db->where('book_genreactive', 1);
		$query = $this->db->get('Genres');

		return $query->result();
	}
}