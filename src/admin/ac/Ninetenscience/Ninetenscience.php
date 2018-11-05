<?php 

namespace App\Admin\Ninetenscience;

if(!isset($_SESSION)){
	session_start();
}

use App\Connection;
use PDO;
use PDOException;

class Ninetenscience extends Connection
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
		if(array_key_exists('department', $department)){
			$this->department = $data['department'];
		}
		if(array_key_exists('term', $data)){
			$this->term = $data['term'];
		}
		if(array_key_exists('year', $data)){
			$this->year = $data['year'];
		}
		if(array_key_exists('student_id', $data)){
			$this->student_id = $data['student_id'];
		}

		return $this;
	}

	//for edit student marksheet...
	public function nineTenAllMark($class, $term, $year, $student_id){
		try {

			$stmt = $this->con->prepare(" select * from sciencemarksheet where class=:class and term=:term and year=:year and student_id=:student_id and status=1 ");
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':term', $term, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount() > 0){
				return $stmt->fetch(PDO::FETCH_ASSOC);
			}else{
				$_SESSION['scienceErr'] = "Any of data does not match, please try again !!!";
				echo "<script>window.location='view/admin/ninetenmarksheet/science/editallSubMarkSearch.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}


	//all gpa select 
	 public function selectNineTenMark($class, $shift, $branch, $department, $term, $year){
	 	try {

	 		//$stmt = $this->con->prepare("select * from allmarks where status = 1 ");
	 		$stmt = $this->con->prepare("select * from sciencemarksheet where class=:class and shift=:shift and branch=:branch and department=:department and term=:term and year=:year and status=1 ");
	 		$stmt->bindValue(':class', $class, PDO::PARAM_STR);
	 		$stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
	 		$stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
	 		$stmt->bindValue(':department', $department, PDO::PARAM_STR);
	 		$stmt->bindValue(':term', $term, PDO::PARAM_STR);
	 		$stmt->bindValue(':year', $year, PDO::PARAM_STR);
	 		$stmt->execute();
	 		if($stmt->rowCount() > 0){
	 			return $stmt->fetchAll(PDO::FETCH_ASSOC);
	 		}
	 		else{
	 			$_SESSION['onefiveErr'] = "Value does not match !!!";
	 			echo "<script>window.location='meritmarksheet.php'</script>";
	 		}
	 		
	 	} catch (PDOException $e) {
	 		echo "Error: ".$e->getMessage()."<br />";
	 		die();
	 	}
	 }

	// select single student info...
	public function studentNumberSelect($student_id){
		try {

			$stmt = $this->con->prepare("select * from sciencemarksheet where student_id=:student_id and status=1 ");
			$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount() > 0){
				return $stmt->fetch(PDO::FETCH_ASSOC);
			}else{
				$_SESSION['scienceErr'] = "Student ID Does not match, Please try original ID !!!";
				echo "<script>window.location='view/admin/ninetenmarksheet/science/editallSubMarkSearch.php'</script>";
				
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	//select gpa and total number for create actual merit position...
	 public function selectSingleGpaTotal($class, $term,  $year, $student_id){
	 	try {

	 		$stmt = $this->con->prepare("select totalmark + gpa from sciencemarksheet where class=:class and term=:term and year=:year and student_id=:student_id and status=1 ");
	 		 
	 		$stmt->bindValue(':class', $class, PDO::PARAM_STR);
	 		$stmt->bindValue(':term', $term, PDO::PARAM_STR);
	 		$stmt->bindValue(':year', $year, PDO::PARAM_STR);
	 		$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
	 		$stmt->execute();

	 		return $stmt->fetch(PDO::FETCH_ASSOC);
	 		 
	 		
	 	} catch (PDOException $e) {
	 		echo "Error: ".$e->getMessage()."<br />";
	 		die();
	 	}
	 }


	//delete marksheet for nine-ten students
	public function deleteNineTenMark($class, $term, $year, $student_id){
		try {

			$stmt = $this->con->prepare('update sciencemarksheet set status=:status, deleted_at=NOW() where class=:class and term=:term and year=:year and student_id=:student_id ');
			$stmt->bindValue(':status', 2, PDO::PARAM_INT);
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':term', $term, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
			$stmt->execute();

			if($stmt){
				$_SESSION['ninetenmarkdelete'] = "Marksheet Deleted Successfully !!!";
				echo "<script>window.location='deleteStuMark.php'</script>";
			}
			else{
				$_SESSION['deleteErr'] = "Student ID or Other field value does not match !!!";
				echo "<script>window.location='deleteStuMark.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// for commerce department  all info here...


	//for edit student marksheet...
	public function nineTenAllMarkCommerce($class, $term, $year, $student_id){
		try {

			$stmt = $this->con->prepare(" select * from sciencemarksheet where class=:class and term=:term and year=:year and student_id=:student_id and status=1 ");
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':term', $term, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount() > 0){
				return $stmt->fetch(PDO::FETCH_ASSOC);
			}else{
				$_SESSION['scienceErr'] = "Any of data does not match, please try again !!!";
				echo "<script>window.location='view/admin/ninetenmarksheet/commerce/editallSubMarkSearch.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}


	//all gpa select 
	 public function selectNineTenMarkCommerce($class, $shift, $branch, $department, $term, $year){
	 	try {

	 		//$stmt = $this->con->prepare("select * from allmarks where status = 1 ");
	 		$stmt = $this->con->prepare("select * from sciencemarksheet where class=:class and shift=:shift and branch=:branch and department=:department and term=:term and year=:year and status=1 ");
	 		$stmt->bindValue(':class', $class, PDO::PARAM_STR);
	 		$stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
	 		$stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
	 		$stmt->bindValue(':department', $department, PDO::PARAM_STR);
	 		$stmt->bindValue(':term', $term, PDO::PARAM_STR);
	 		$stmt->bindValue(':year', $year, PDO::PARAM_STR);
	 		$stmt->execute();
	 		if($stmt->rowCount() > 0){
	 			return $stmt->fetchAll(PDO::FETCH_ASSOC);
	 		}
	 		else{
	 			$_SESSION['onefiveErr'] = "Value does not match !!!";
	 			echo "<script>window.location='meritmarksheet.php'</script>";
	 		}
	 		
	 	} catch (PDOException $e) {
	 		echo "Error: ".$e->getMessage()."<br />";
	 		die();
	 	}
	 }

	// select single student info...
	public function studentNumberSelectCommerce($class, $term, $year, $department, $student_id){
		try {

			$stmt = $this->con->prepare("select * from sciencemarksheet where class=:class and term=:term and year=:year and department=:department and  student_id=:student_id and status=1 ");
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':term', $term, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->bindValue(':department', $department, PDO::PARAM_STR);
			$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount() > 0){
				return $stmt->fetch(PDO::FETCH_ASSOC);
			}else{
				$_SESSION['humanitiesErr'] = "Value Does not match !!!";
				echo "<script>window.location='meritmarksheet.php'</script>";
				
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	//select gpa and total number for create actual merit position...
	 public function selectSingleGpaTotalCommerce($class, $term,  $year, $student_id){
	 	try {

	 		$stmt = $this->con->prepare("select totalmark + gpa from sciencemarksheet where class=:class and term=:term and year=:year and student_id=:student_id and status=1 ");
	 		 
	 		$stmt->bindValue(':class', $class, PDO::PARAM_STR);
	 		$stmt->bindValue(':term', $term, PDO::PARAM_STR);
	 		$stmt->bindValue(':year', $year, PDO::PARAM_STR);
	 		$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
	 		$stmt->execute();

	 		return $stmt->fetch(PDO::FETCH_ASSOC);
	 		 
	 		
	 	} catch (PDOException $e) {
	 		echo "Error: ".$e->getMessage()."<br />";
	 		die();
	 	}
	 }


	//delete marksheet for nine-ten students
	public function deleteNineTenMarkCommerce($class, $term, $year, $student_id){
		try {

			$stmt = $this->con->prepare('update sciencemarksheet set status=:status, deleted_at=NOW() where class=:class and term=:term and year=:year and student_id=:student_id ');
			$stmt->bindValue(':status', 2, PDO::PARAM_INT);
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':term', $term, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
			$stmt->execute();

			if($stmt){
				$_SESSION['ninetenmarkdelete'] = "Marksheet Deleted Successfully !!!";
				echo "<script>window.location='deleteStuMark.php'</script>";
			}
			else{
				$_SESSION['deleteErr'] = "Student ID or Other field value does not match !!!";
				echo "<script>window.location='deleteStuMark.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// for humanities department all info here...


	//for edit student marksheet...
	public function nineTenAllMarkHumanities($class, $term, $year, $student_id){
		try {

			$stmt = $this->con->prepare(" select * from sciencemarksheet where class=:class and term=:term and year=:year and student_id=:student_id and status=1 ");
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':term', $term, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount() > 0){
				return $stmt->fetch(PDO::FETCH_ASSOC);
			}else{
				$_SESSION['scienceErr'] = "Any of data does not match, please try again !!!";
				echo "<script>window.location='view/admin/ninetenmarksheet/humanities/editallSubMarkSearch.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}




	//all gpa select 
	 public function selectNineTenMarkHumanities($class, $shift, $branch, $department, $term, $year){
	 	try {

	 		//$stmt = $this->con->prepare("select * from allmarks where status = 1 ");
	 		$stmt = $this->con->prepare("select * from sciencemarksheet where class=:class and shift=:shift and branch=:branch and department=:department and term=:term and year=:year and status=1 ");
	 		$stmt->bindValue(':class', $class, PDO::PARAM_STR);
	 		$stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
	 		$stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
	 		$stmt->bindValue(':department', $department, PDO::PARAM_STR);
	 		$stmt->bindValue(':term', $term, PDO::PARAM_STR);
	 		$stmt->bindValue(':year', $year, PDO::PARAM_STR);
	 		$stmt->execute();
	 		if($stmt->rowCount() > 0){
	 			return $stmt->fetchAll(PDO::FETCH_ASSOC);
	 		}
	 		else{
	 			$_SESSION['onefiveErr'] = "Value does not match !!!";
	 			echo "<script>window.location='meritmarksheet.php'</script>";
	 		}
	 		
	 	} catch (PDOException $e) {
	 		echo "Error: ".$e->getMessage()."<br />";
	 		die();
	 	}
	 }

	// select single student info...
	public function studentNumberSelectHumanities($class, $term, $year, $department, $student_id){
		try {

			$stmt = $this->con->prepare("select * from sciencemarksheet where class=:class and term=:term and year=:year and department=:department and  student_id=:student_id and status=1 ");
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':term', $term, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->bindValue(':department', $department, PDO::PARAM_STR);
			$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount() > 0){
				return $stmt->fetch(PDO::FETCH_ASSOC);
			}else{
				$_SESSION['humanitiesErr'] = "Value Does not match !!!";
				echo "<script>window.location='meritmarksheet.php'</script>";
				
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	//select gpa and total number for create actual merit position...
	 public function selectSingleGpaTotalHumanities($class, $term,  $year, $student_id){
	 	try {

	 		$stmt = $this->con->prepare("select totalmark + gpa from sciencemarksheet where class=:class and term=:term and year=:year and student_id=:student_id and status=1 ");
	 		 
	 		$stmt->bindValue(':class', $class, PDO::PARAM_STR);
	 		$stmt->bindValue(':term', $term, PDO::PARAM_STR);
	 		$stmt->bindValue(':year', $year, PDO::PARAM_STR);
	 		$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
	 		$stmt->execute();

	 		return $stmt->fetch(PDO::FETCH_ASSOC);
	 		 
	 		
	 	} catch (PDOException $e) {
	 		echo "Error: ".$e->getMessage()."<br />";
	 		die();
	 	}
	 }


	//delete marksheet for nine-ten students
	public function deleteNineTenMarkHumanities($class, $term, $year, $student_id){
		try {

			$stmt = $this->con->prepare('update sciencemarksheet set status=:status, deleted_at=NOW() where class=:class and term=:term and year=:year and student_id=:student_id ');
			$stmt->bindValue(':status', 2, PDO::PARAM_INT);
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':term', $term, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
			$stmt->execute();

			if($stmt){
				$_SESSION['ninetenmarkdelete'] = "Marksheet Deleted Successfully !!!";
				echo "<script>window.location='deleteStuMark.php'</script>";
			}
			else{
				$_SESSION['deleteErr'] = "Student ID or Other field value does not match !!!";
				echo "<script>window.location='deleteStuMark.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}


		
}