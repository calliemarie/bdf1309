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
	
	public function createBook($isbn, $title, $author, $genre, $howRead, $review){
		$statement = $this->db->prepare("
		
			INSERT INTO book(isbn, title, author, genre, howRead, review)
			values(:isbn, :title, :author, :genre, :howRead, :review)
		");
		
		try{
			if($statement->execute(array( ':isbn'=> $isbn, ':title'=>$title,':author'=>$author, ':genre'=>$genre, ':howRead'=>$howRead, ':review'=>$review))){
				$rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
				return $rows;
				}//if
		}//try
		catch(\PDOException $e){
			echo "Addition failed";
			var_dump($e);
		}//catch
		
	}//createBook
	
	public function updateBook($isbn, $title, $author, $genre, $howRead, $review){
		$statement = $this->db->prepare("
			UPDATE book
			SET isbn = $isbn,
			title = $title,
			author = $author,
			genre = $genre,
			howRead = $howRead,
			review = $review,
			WHERE username = $user
		");
		try{
			$statement->execute();
			echo "Your book update was successful!";
		}//try
		catch(\PDOException $e){
			echo "Update failed.";
			var_dump($e);
			}//catch
	}//updateBook
	
	public function deleteBook($isbn){
		$statement =$this->db->prepare("
			DELETE FROM book
			WHERE isbn = :isbn
			");
		try{
			if($statement->execute(array(':isbn'=>$isbn))){
				echo "Book deleted from database.";
				var_dump($e);
			}//if
		}//try
		catch(\PDOException $e){
			echo "Deletion failed.";
			var_dump($e);
		}//catch
	}//deleteBook
	


	
}//end class
?>