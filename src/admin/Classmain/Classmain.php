<?php 

namespace App\admin\Classmain;

if(!isset($_SESSION)){
	session_start();
}

use App\Connection;
use PDOException;
use PDO;

class Classmain extends Connection
{
	public function set($data = array()){
		if(array_key_exists('class', $data)){
			$this->class = $data['class'];
		}
		if(array_key_exists('nuname', $data)){
			$this->nuname = $data['nuname'];
		}
		if(array_key_exists('unique_id', $data)){
			$this->unique_id = $data['unique_id'];
		}
		return $this;
	}

	//insert class name to database
	public function store(){
		try {
			$stmt = $this->con->prepare("insert into class(class, nuname, status, unique_id, created_at) values(:class, :nuname, :status, :unique_id, NOW() )  ");

			$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':nuname', $this->nuname, PDO::PARAM_STR);
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['classadd'] = "Class Added Successfully ";
				header("location:allclass.php");
			}

		} catch (PDOException $e) {
			echo "Print : ".$e->getMessage(). "<br />";
		}
	}

	//select all class from database
	public function selectAllClass(){
		try {

			$stmt = $this->con->prepare("select * from class where status = 1 ");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);

		} catch (PDOException $e) {
			echo "Error : ".$e->getMessage()."<br />";
			die();
		}
	}

	//edit class 
	public function editClass($id){
		try {

			$stmt = $this->con->prepare("select * from class where unique_id = :id ");
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);

		} catch (PDOException $e) {
			echo "Error : ".$e->getMessage()."<br />";
			die();
		}
	}

	//update class
	public function updateClass(){
		try {
			
			$stmt = $this->con->prepare("update class set class=:class, nuname=:nuname, updated_at = NOW() where unique_id=:id");
			$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':nuname', $this->nuname, PDO::PARAM_STR);
			$stmt->bindValue(':id', $this->unique_id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['updateClass'] = "Data Updated Successfully ";
				header('Location:allclass.php');
			}

		} catch (PDOException $e) {
			echo "Error : ".$e->getMessage(). "<br />";
			die();
		}
	}

	public function tmpDeleteClass($id){
		try {
			
			$stmt = $this->con->prepare("update class set status = :status, deleted_at = NOW() where unique_id = :id ");
			$stmt->bindValue(':status', 2, PDO::PARAM_STR);
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['deleteClass'] = "Class Deleted Successfully !!!";
				header('Location:allclass.php');
			}

		} catch (PDOException $e) {
			echo "Error : ".$e->getMessage()."<br />";
			die();
		}
	}

	public function selecttmpDelete(){
		try {
			
			$stmt = $this->con->prepare('select * from class where status = 2 ');
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);

		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	public function restoreClass($id){
		try {
			
			$stmt = $this->con->prepare("update class set status = :status where unique_id = :id ");;
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['restoreClass'] = "Class Restored Successfully ";
				header("Location:allDeleteClass.php");
			}

		} catch (PDOException $e) {
			echo "Error : ".$e->getMessage()."<br />";
			die();
		}
	}

	//parmanently class Deleted.... from database....
	public function parmanentDeleteClass($id){
		try {
			
			$stmt = $this->con->prepare("delete from class where unique_id = :id ");
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['classDeleted'] = "Class Parmanently Deleted Successfully !!!";
				header("location:allDeleteClass.php");
			}

		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}
}