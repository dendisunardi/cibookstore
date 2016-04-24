<?php

/**
* 
*/
class M_Books extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
    
    public function post_book(){
        $this->db->insert('Books',  $this->input->post());
        return $this->db->insert_id();
    }
    public function add_book_author($book_authors){
        $this->db->insert_batch('Book_Author',$book_authors);
    }
    public function add_book_images($book_images){
        
        $this->db->insert_batch('Book_Images',$book_images);
    }
    
    public function get_all_books(){
        $query = $this->db->get('Books');
        return $query->result();
    }

}