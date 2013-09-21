<?php

class bookView{
	
	public function showHeader($pageTitle = '') {
		include "views/header.inc";
	}
	
	public function showFooter(){
		include "views/footer.inc";
	}
	
	public function showLatest($rows){
		include "views/latest-books.inc";
	}
	
	public function showDetail($rows){
		include "views/book-details.inc"; 
	}
}
?>