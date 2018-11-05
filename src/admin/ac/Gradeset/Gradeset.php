<?php 

namespace App\Admin\Gradeset;

if(!isset($_SESSION)){
	session_start();
}

use PDOException;
use PDO;
use App\Connection;

class Gradeset extends Connection 
{
	public function set($data = array()){
		if(array_key_exists('class', $data)){
			$this->class = $data['class'];
		}
		if(array_key_exists('year', $data)){
			$this->year = $data['year'];
		}
		if(array_key_exists('student_id', $data)){
			$this->student_id = $data['student_id'];
		}
		if(array_key_exists('department', $data)){
			$this->department = $data['department'];
		}
		if(array_key_exists('section', $data)){
			$this->section = $data['data'];
		}
		if(array_key_exists('shift', $data)){
			$this->shift = $data['shift'];
		}

		return $this;
	}

	public function selectupperclass(){
		try {

			$stmt = $this->con->prepare("select * from allmarks where class=:class and year=:year and status=1 ");
			$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':year', $this->year, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetchAll(PDO::PARAM_STR);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}




	// select student gpa and total number from allmarks table...
	public function selectStuGpaNum(){
		try {

			$stmt = $this->con->prepare("select student_id,totalmark,gpa from allmarks  where class=:class and year=:year and status=1 order by student_id asc");
			$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':year', $this->year, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount() >0){
				return $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
			else{
				$_SESSION['gradeseterr'] = "Class or Year Does not match ";
				echo "<script>window.location='view/admin/gradeset/allStuGradeNum.php'</script>";
			}
			
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}
	// select student gpa and total number from allmarks table...
	public function selectStuGpaNum2($class, $year){
		try {

			$stmt = $this->con->prepare("select student_id,totalmark,gpa from allmarks  where class=:class and year=:year and status=1 order by gpa desc");
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount() >0){
				return $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
			else{
				$_SESSION['gradeseterr'] = "Class or Year Does not match ";
				echo "<script>window.location='view/admin/gradeset/allStuGradeNum.php'</script>";
			}
			
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}


	//select class eleven and twelve student gpa and total number from allmarks...
	public function selectElevenTwelveGpaNum(){
		try {

			$stmt = $this->con->prepare("select student_id, totalmark, gpa from allmarks where class=:class and year=:year and status=1 order by student_id asc ");
			$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':year', $this->year, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetch(PDO::PARAM_STR);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//select student gpa number for ascending by gpa
	public function studetnGpaAsc($student_id){
		try {

			$stmt = $this->con->prepare("select * from allmarks where student_id=:student_id and status=1 order by gpa desc ");
			$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
			$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':year', $this->year, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}
}