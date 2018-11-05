<?php 

namespace App\admin\Library;

if(!isset($_SESSION)){
	session_start();
}


use App\Connection;
use PDOException;
use PDO;

class Library extends Connection
{

	public function set($data = array())
	{
		if(array_key_exists('code', $data)){
			$this->code = $data['code'];
		}
		if(array_key_exists('title', $data)){
			$this->title = $data['title'];
		}
		if(array_key_exists('author', $data)){
			$this->author = $data['author'];
		}
		if(array_key_exists('quantity', $data)){
			$this->quantity = $data['quantity'];
		}
		if(array_key_exists('rack', $data)){
			$this->rack = $data['rack'];
		}
		if(array_key_exists('row', $data)){
			$this->row = $data['row'];
		}
		if(array_key_exists('type', $data)){
			$this->type = $data['type'];
 		}
 		if(array_key_exists('class', $data)){
 			$this->class = $data['class'];
 		}
 		if(array_key_exists('description', $data)){
 			$this->description = $data['description'];
 		}
 		if(array_key_exists('unique_id', $data)){
 			$this->unique_id = $data['unique_id'];
 		}

 		return $this;
	}

	public function insert()
	{

		try {

			$stmt = $this->con->prepare("insert into library(code, title, author, quantity, rack, row, type, class, description, status, unique_id) values(:code, :title, :author, :quantity, :rack, :row, :type, :class, :description, :status, :unique_id) ");
			$stmt->bindValue(':code', $this->code, PDO::PARAM_STR);
			$stmt->bindValue(':title', $this->title, PDO::PARAM_STR);
			$stmt->bindValue(':author', $this->author, PDO::PARAM_STR);
			$stmt->bindValue(':quantity', $this->quantity, PDO::PARAM_STR);
			$stmt->bindValue(':rack', $this->rack, PDO::PARAM_STR);
			$stmt->bindValue(':row', $this->row, PDO::PARAM_STR);
			$stmt->bindValue(':type', $this->type, PDO::PARAM_STR);
			$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':description', $this->description, PDO::PARAM_STR);
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['success'] = "Data inserted successfully";
				echo "<script>window.location='allbook.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// select all book 
	public function selectAll()
	{
		try {
			
			$stmt = $this->con->prepare("select * from library where status=:status ");
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				return $stmt->fetchAll(PDO::FETCH_ASSOC);
			}


		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// edit book 
	public function editBook($id)
	{
		try {

			$stmt = $this->con->prepare("select * from library where unique_id=:id and status=:status ");
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				return $stmt->fetch(PDO::FETCH_ASSOC);
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// updated book
	public function update()
	{
		try {

			$stmt = $this->con->prepare("update library set 
				code = :code,
				title = :title,
				author = :author,
				quantity = :quantity,
				rack = :rack,
				row = :row,
				type = :type,
				class = :class,
				description = :description,
				updated_at = NOW()
				where  unique_id = :id
				");
			$stmt->bindValue(':code', $this->code, PDO::PARAM_STR);
			$stmt->bindValue(':title', $this->title, PDO::PARAM_STR);
			$stmt->bindValue(':author', $this->author, PDO::PARAM_STR);
			$stmt->bindValue(':quantity', $this->quantity, PDO::PARAM_STR);
			$stmt->bindValue(':rack', $this->rack, PDO::PARAM_STR);
			$stmt->bindValue(':row', $this->row, PDO::PARAM_STR);
			$stmt->bindValue(':type', $this->type, PDO::PARAM_STR);
			$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':description', $this->description, PDO::PARAM_STR);
			$stmt->bindValue(':id', $this->unique_id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['update'] = "Data updated successfully.";
				echo "<script>window.location='allbook.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// delete book from database...
	public function deleteBook($id)
	{
		try {

			$stmt = $this->con->prepare("update library set status=:status,deleted_at=NOW() where unique_id=:id ");
			$stmt->bindValue(':status', 2, PDO::PARAM_STR);
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['error'] = "Data Deleted Successful.";
				echo "<script>window.location='allbook.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// select all student id from student_data table...
	public function selectAllStudentId()
	{
		try {

			$stmt = $this->con->prepare("select student_id from student_data where status=:status ");
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				return $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}
	// select all book title from database...
	public function selectAllBookName()
	{
		try {

			$stmt = $this->con->prepare("select * from library where status=:status ");
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				return $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	public function insertBook($data = array())
	{
		try {

			$stmt = $this->con->prepare("insert into borrowbook(student_id, issue_date, title, quantity, return_date, fine, status, unique_id, created_at ) values(:student_id, :issue_date, :title, :quantity, :return_date, :fine, :status, :unique_id, NOW()) ");
			$stmt->bindValue(':student_id', $data['student_id'], PDO::PARAM_STR);
			$stmt->bindValue(':issue_date', $data['issue_date'], PDO::PARAM_STR);
			$stmt->bindValue(':title', $data['title'], PDO::PARAM_STR);
			$stmt->bindValue(':quantity', $data['quantity'], PDO::PARAM_STR);
			$stmt->bindValue(':return_date', $data['return_date'], PDO::PARAM_STR);
			$stmt->bindValue(':fine', $data['fine'], PDO::PARAM_STR);
			$stmt->bindValue(':status', 'Borrowed', PDO::PARAM_STR);
			$stmt->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['success'] = "Book Issue information insert success.";
				echo "<script>window.location='borrowBook.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// select all borrow book 
	public function borrowBookList($data = array())
	{
		try {
			
			$stmt = $this->con->prepare("select * from borrowbook where student_id=:student_id or title=:title or issue_date=:issue_date or return_date=:return_date or status=:status");
			$stmt->bindValue(':student_id', $data['student_id'], PDO::PARAM_STR);
			$stmt->bindValue(':title', $data['title'], PDO::PARAM_STR);
			$stmt->bindValue(':issue_date', $data['issue_date'], PDO::PARAM_STR);
			$stmt->bindValue(':return_date', $data['return_date'], PDO::PARAM_STR);


			//$stmt = $this->con->prepare("select * from borrowbook where status=:status ");
			$stmt->bindValue(':status', $data['status'], PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				return $stmt->fetchAll(PDO::FETCH_ASSOC);
			}


		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// select borrow student data for update
	public function selectBorrowStudent($id)
	{
		try {

			$stmt = $this->con->prepare("select * from borrowbook where unique_id=:id ");
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			// $stmt->bindValue(':status', 'Borrowed', PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);


			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// update borrow book student data...
	public function updateIssueBook($data = array())
	{
		try {

			$stmt = $this->con->prepare("update borrowbook set 
				student_id = :student_id,
				title = :title,
				issue_date = :issue_date,
				return_date = :return_date,
				quantity = :quantity,
				fine = :fine,
				status = :status,
				updated_at = NOW()
				where unique_id = :unique_id
				");
			$stmt->bindValue(':student_id', $_POST['student_id'], PDO::PARAM_STR);
			$stmt->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
			$stmt->bindValue(':issue_date', $_POST['issue_date'], PDO::PARAM_STR);
			$stmt->bindValue(':return_date', $_POST['return_date'], PDO::PARAM_STR);
			$stmt->bindValue(':quantity', $_POST['quantity'], PDO::PARAM_STR);
			$stmt->bindValue(':fine', $_POST['fine'], PDO::PARAM_STR);
			$stmt->bindValue(':status', $_POST['status'], PDO::PARAM_STR);
			$stmt->bindValue(':unique_id', $_POST['unique_id'], PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['success'] = "Data Updated Successful.";
				echo "<script>window.location='issuebooksearch.php'</script>";
			}
			
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// for testing purpose
	public function deleteIssueBook(){
		try {

			$stmt = $this->con->prepare("delete * from borrowbook where unique_id=:unique_id and status=:status ");
			$stmt->bindValue(':unique_id', $id, PDO::PARAM_STR);
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->bindValue(':deleted_at', NOW(), PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['error'] = "Data Deleted Successful !!!";
				echo "<script>window.location='view/admin/promotion/index.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}
	

}
