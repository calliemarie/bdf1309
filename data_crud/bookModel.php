<?php

class bookModel 
{
	private $db;
	public function __construct($dsn, $user, $pass){
		try {
			$this->db = new PDO($dsn, $user, $pass);
		} catch (PDOExeption $e) {
			echo "Couldn't query the database.";
			var_dump($e);
		}
	}//__construct

	public function getBooks(){
		$statement = $this->db->prepare("
			SELECT ISBN, title, author, genre, howRead, review 
			FROM book
			ORDER BY title, author, genre
			LIMIT 20
		");
		
		try{
			if ($statement->execute()){
				$rows = $statement->fetchAll();
				return $rows;
			}//if execute
		}//try	
		catch (PDOExeption $e){
			echo "Couldn't query the database.";
			var_dump($e);			
			}
		return FALSE;
	}//getBooks
		

	public function getDetails($isbn){
		$statement = $this->db->prepare("
			SELECT ISBN, title, author, genre, howRead, review 
			FROM book
			WHERE ISBN= :isbn
		");
		if ($statement->execute(array(":isbn"=>$isbn))){
			$rows = $statement->fetchAll();
			return $rows;
		}//if execute
		
	}//getDetails
	
}//end class
?>