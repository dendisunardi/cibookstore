<?php

/**
* 
*/
class Books extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Books/M_Books");
		$this->load->module([
			"Authors",
			"Publishers",
			"Genres"
		]);
		// $this->load->model("M_Books");
	}

	public function index() {
        $data = new stdClass();
        $data->title = "Books";
        $this->template->call_admin_template($data);
    }

	function display_books()
	{
		$data['page_header'] = "All Books";
		$data['description'] = "display all books collection";
		$data['content_view'] = 'Books/books_display_v';
		$this->template->call_admin_template($data);
	}

	function addBook()
	{
		$data['authors'] = $this->create_authors_select();
		$data['page_header'] = "Add a Book";
		$data['description'] = "Add a book to the system";
		$data['content_view'] = 'Books/add_book_v';
		$this->template->call_admin_template($data);
	}

	function create_authors_select()
	{
		$this->load->model('Authors/M_Authors');

		$authors = $this->M_Authors->get_active_authors();

		if(count($authors)){
			foreach($author as $key->$value){
				$option .="<option value='{$value->author_id}'>{$value->author_lastname} {$value->author_firstname}</option>";
			}
		}

		return $option;
	}


	// function create_publishers_select()
	// {
	// 	$publisher = $this->M_Publisher->get_active_publisher();

	// 	if(count($publisher)){
	// 		foreach($publisher as $key->$value){
	// 			$option .="<option value='{$value->publisher_id}'>{$value->publisher_name}</option>";
	// 		}
	// 	}

	// 	return $option;
	// }


	// function create_genres_select()
	// {
	// 	$this->load->model('Genres/M_Genres');

	// 	$genres = $this->M_Genres->get_active_genres();

	// 	if(count($genres)){
	// 		foreach($genres as $key->$value){
	// 			$option .="<option value='{$value->book_genreid}'>{$value->book_genre}</option>";
	// 		}
	// 	}

	// 	return $option;
	// }


	// function post_book()
	// {

	// }
}