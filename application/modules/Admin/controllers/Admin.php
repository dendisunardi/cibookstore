<?php

/**
* 
*/
class Admin extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->module([
			'Books'
		]);
	}

	function index()
	{
		$data = new stdClass();
        $data->title = "Home";
		$this->template->call_admin_template($data);
	}

	function books()
	{
		$this->books->display_books();
	}

	function addBook()
	{
		$this->books->addBook();
	}
}