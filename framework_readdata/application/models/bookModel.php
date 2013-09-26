<?php

class bookModel extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function get_books(){
		$q = $this->db->get('book');
		if ($q->num_rows>0){
			foreach($q->result()as $row){
				$data[]=$row;
			}
		return $data;
		}
	}
	
	function get_book($isbn=''){
		$sql= "SELECT * FROM book WHERE isbn = ?";
		$l = $this->db->query($sql, array($isbn));
			if($l->num_rows>0){
				foreach($l->result()as $detail){
					$details[]=$detail;
				}
				return $details;
			}
	}
	
	
}
?>