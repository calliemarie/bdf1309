<?php

class Main extends CI_Controller{

	public function index(){
		$this->home();
	}
	
	public function home(){
		$this->load->model('bookModel');
		$data['rows'] = $this->bookModel->get_books();
		$this->load->view('bookView', $data);
	}
	
	public function details(){
		$this->load->model('bookModel');
		$details['details'] = $this->bookModel->get_book($this->uri->segment(3));
		$this->load->view('detailView', $details);
	}
}

?>