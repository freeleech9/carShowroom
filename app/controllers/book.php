<?php
Class Book extends Controller 
{
	function index()
	{
 	 	
 	 	$data['page_title'] = "Book";

 	 	
 	 		$book = $this->loadModel("booking");
 	 		$book->book($_POST);
 	 	
		$this->view("garage/book",$data);
	}

}