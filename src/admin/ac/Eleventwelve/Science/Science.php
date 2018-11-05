<?php 

namespace App\Admin\Eleventwelve\Science;

if(!isset($_SESSION)){
	session_start();
}

use App\Connection;
use PDO;
use PDOException;

class Science extends Connection
{

	public function set($data = array()){
		if(array_key_exists('class', $data)){
			$this->class = $data['class'];
		}
		if(array_key_exists('shift', $data)){
			$this->shift = $data['shift'];
		}
		if(array_key_exists('branch', $data)){
			$this->branch = $data['branch'];
		}
	}

	public function elevenTwelveMark($class, $term, $year, $student_id){
		try {

			$stmt = $this->con->prepare("select * from eleventwelvemark where class=:class and term=:term and year=:year and student_id=:student_id and status=1 ");
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':term', $term, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	//select single student info...
	public function studentNumberSelect($student_id){
		try {

			$stmt = $this->con->prepare("select * from eleventwelvemark where student_id=:student_id and status=1 ");
			$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount() > 0){
				return $stmt->fetch(PDO::FETCH_ASSOC);
			}
			else{
				$_SESSION['eltwErr'] = "Student ID Does not match, Please try original ID !!!";
				echo "<script>window.location='view/admin/eleventwelvemarksheet/sience/editallSubMarkSearch.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	//single gpa and total mark select for compare merit position
	public function singleGpaTotal($class, $term, $year, $student_id){
		try {

			$stmt = $this->con->prepare("select gpa + totalmark from sciencemarksheet where class=:class and term=:term and year=:year and student_id=:student_id ");
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':term', $term, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount() > 0){
				return $stmt->fetch(PDO::FETCH_ASSOC);
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// other query function 
	public function elevenTwelveScience($class, $term, $department, $year, $student_id){
		try {

			$stmt = $this->con->prepare("select * from hscmarksheet where class=:class and term=:term and department=:department and year=:year and student_id=:student_id ");
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':term', $term, PDO::PARAM_STR);
			$stmt->bindValue(':department', $department, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->bindValue(':student_id', PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount() > 0){
				return $stmt->fetch(PDO::FETCH_ASSOC);
			}
			else{
				$_SESSION['etErr'] = "Value Does not match !!!";
				echo "<script>window.location='view/admin/hscmarksheet/science/meritmarksheet.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	//for commerce marksheet select all data...
	public function hscMarksheetCommerce($class, $term, $department, $year, $student_id){
		try {

			$stmt = $this->con->prepare("select * from hscmarksheet where class=:class and term=:term and department=:department and year=:year and student_id=:student_id ");
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':term', $term, PDO::PARAM_STR);
			$stmt->bindValue(':department', $department, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->bindValue(':student_id', PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount() > 0){
				return $stmt->fetch(PDO::FETCH_ASSOC);
			}
			else{
				$_SESSION['hscErr'] = "Value does not match !!!";
				echo "<script>window.location='meritmarksheet.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// delete hsc student marksheet...
	public function deleteHscmarksheet($class, $term, ){
		try {

			$stmt = $this->con->prepare("update hscmarksheet set staus=:status, deleted_at=:deleted_at where class=:class and term=:term and department=:department and year=:year and student_id=:student_id=:student_id");
			$stmt->bindValue(':status', 2, PDO::PARAM_INT);
			$stmt->bindValue(':deleted_at', NOW(), PDO::PARAM_STR);
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':term', $term, PDO::PARAM_STR);
			$stmt->bindValue(':department', $department, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount > 0){
				return $stmt->fetch(PDO::FETCH_ASSOC);
			}
			else{
				$_SESSION['hscErr'] = "Value does not match !!!";
				echo "<script>window.location='deleteStuMark.php'</script>";
			}
			
		} catch (Exception $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

}