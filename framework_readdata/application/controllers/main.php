<?php

class Main extends CI_Controller{
	function index(){
		$data['title'] = 'Bookworm';
		$data['heading'] = 'Bookworm';
		$data['query'] = $this->db->get('book');
	}
	
	function details($isnb){
		$data['title'] = 'Bookworm Details';
		$data['heading'] = 'Bookworm';
		$data['query'] = $this->db->get_where('book', array('isbn'=>$isbn));
		
		$this->load->view('detailView', $data);
	}
}

?>