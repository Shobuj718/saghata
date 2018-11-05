<?php 

namespace App\admin\Subject;

if(!isset($_SESSION)){
	session_start();
}

use App\Connection;
use PDOException;
use PDO;

class Subject extends Connection 
{

	public function set($data = array()){
		if(array_key_exists('subject', $data)){
			$this->subject = $data['subject'];
		}
		if(array_key_exists('department', $data)){
			$this->department = $data['department'];
		}
		if(array_key_exists('subcode', $data)){
			$this->subcode = $data['subcode'];
		}
		if(array_key_exists('unique_id', $data)){
			$this->unique_id = $data['unique_id'];
		}
		return $this;
	}

	public function store(){
		try {

			$stmt = $this->con->prepare("insert into subject(subject, department, subcode, status, unique_id, created_at ) 
				values(:subject, :department, :subcode, :status, :unique_id, NOW() ) ");

			$stmt->bindValue(':subject', $this->subject, PDO::PARAM_STR);
			$stmt->bindValue(':department', $this->department, PDO::PARAM_STR);
			$stmt->bindValue(':subcode', $this->subcode, PDO::PARAM_STR);
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);

			$result = $stmt->execute();
			if($result){
				$_SESSION['addsub'] = "Subject Added Successfully ";
				header("location:allnewsub.php");
			}

			
		} catch (PDOException $e) {
			echo "Error : ".$e->getMessage(). "<br />";
			die();
		}
	}

	//select all subject for show marksheet markadd page
	public function selectAllSub(){
		try {
			$stmt = $this->con->prepare("select * from subject where status = 1 ");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);

		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//edit subject 
	public function editsubject($id){
		try {

			$stmt = $this->con->prepare("select * from subject where unique_id = :id");
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);

		} catch (PDOException $e) {
			echo "Error : ".$e->getMessage(). "<br />";
			die();
		}
	}

	//update subject 
	public function update(){
		try {
			$stmt = $this->con->prepare("update subject set subject=:subject, department=:department, subcode=:subcode, updated_at= NOW() where unique_id=:id ");
			$stmt->bindValue(':subject', $this->subject, PDO::PARAM_STR);
			$stmt->bindValue(':department', $this->department, PDO::PARAM_STR);
			$stmt->bindValue(':subcode', $this->subcode, PDO::PARAM_STR);
			$stmt->bindValue(':id', $this->unique_id, PDO::PARAM_STR);
			// $stmt->bindValue(':update', NOW(), PDO::PARAM_STR);
			
			$stmt->execute();
			if($stmt){
				$_SESSION['updatesub'] = "Subject Updated Successfully ";
				header("location:allnewsub.php");
			}
		} catch (PDOException $e) {
			echo "Error : ".$e->getMessage()."<br />";
			die();
		}
	}

	//delete subject
	public function tmpDeleteSubject($id){ 
		try {
			$stmt = $this->con->prepare("update subject set status = :status, deleted_at = NOW() where unique_id = :id ");
			$stmt->bindValue(':status', 2, PDO::PARAM_STR);
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['deletesub'] = "Subject Deleted Successfully !!!";
				header("location:allnewsub.php");
				//echo "<script>window.loaction='allnewsub.php'</script>";
			}
		} catch (PDOException $e) {
			echo "Error : ".$e->getMessage()."<br />";
			die();
		}
	}

	//select all deleted subject...
	public function selecttmpDelete(){
		try {
			
			$stmt = $this->con->prepare("select * from subject where status = 2 ");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);

		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//restore deleted data...
	public function restoreSubject($id){
		try {

			$stmt = $this->con->prepare("update subject set status = :status where unique_id = :id ");
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['restoresubject'] = "Subject Restored Successfully ";
				header("location:allDeleteSubject.php");
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//parmanent delete subject...
	public function paramanentDelete($id){
		try {

			$stmt = $this->con->prepare("delete from subject where unique_id = :id ");
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['deletesubject'] = "Subject Parmanently Deleted !!!";
				header("location:allDeleteSubject.php");
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//select all section from database...
	public function selectAllStudent(){
		try {

			$stmt = $this->con->prepare("select * from student_fee where status = 1 ");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}



}