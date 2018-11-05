<?php 

namespace App\admin\Gurdian;

if(!isset($_SESSION)){
	session_start();
}

use App\Connection;
use PDOException;
use PDO;



class Gurdian extends Connection
{

	public function set($data = array()){

		if(array_key_exists('year', $data)){
			$this->year = $data['year'];
		}
		if(array_key_exists('class', $data)){
			$this->class = $data['class'];
		}
		if(array_key_exists('shift', $data)){
			$this->shift = $data['shift'];
		}
		if(array_key_exists('department', $data)){
			$this->department = $data['department'];
		}
		if(array_key_exists('branch', $data)){
			$this->branch = $data['branch'];
		}
		if(array_key_exists('class2', $data)){
			$this->class2 = $data['class2'];
		}
 		 
		return $this;
	}


	//search all gurdian number by year...
	public function searchGurdianByYear(){
		try {

			$stmt = $this->con->prepare("SELECT * FROM student_data WHERE year = :year AND person='student' AND status = 1 ");
			$stmt->bindValue(':year', $this->year, PDO::PARAM_STR);
 
		    $stmt->execute();
		    return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//search class wise gurdian number from student table...
	public function classWiseGurdian(){
		try {

			$stmt = $this->con->prepare("select father_phone from student_data where class = :class and year = :year and status = 1 ");
			$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':year', $this->year, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//search all student number from student table...
	public function allStudentNumber(){
		try {

			$stmt = $this->con->prepare("select last_Orga_phone from student_data where year=:year and status=1 ");
			//$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':year', $this->year, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	public function nineTenStudentNumber(){
		try {

			$stmt = $this->con->prepare("select father_phone from student_data where class = :class and year = :year and status = 1 ");
			$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':year', $this->year, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}



	//search shift wise gurdian  number from student table...
	public function shiftWiseGurdian(){
		try {

			$stmt = $this->con->prepare("select father_phone from student_data where class=:class and shift=:shift and year=:year and status=1 ");
			$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':shift', $this->shift,PDO::PARAM_STR);
			$stmt->bindValue(':year', $this->year, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//search department wise gurdian number from student table...
	public function deptWiseGurdian(){
		try {

			$stmt = $this->con->prepare("select father_phone from student_data where class=:class and shift=:shift and department=:department and year=:year and status=1 ");
			$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':shift', $this->shift, PDO::PARAM_STR);
			$stmt->bindValue(':department', $this->department, PDO::PARAM_STR);
			$stmt->bindValue(':year', $this->year, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//search section wise gurdian number for send sms
	public function sectionWiseGurdian(){
		try {

			$stmt = $this->con->prepare("select father_phone from student_data where class=:class and shift=:shift and year=:year and branch=:branch and status=1 ");
			$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':shift', $this->shift, PDO::PARAM_STR);
			// $stmt->bindValue(':department', $this->department, PDO::PARAM_STR);
			$stmt->bindValue(':branch', $this->branch, PDO::PARAM_STR);
			$stmt->bindValue(':year', $this->year, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//search all teacher mobile number for send sms 
	public function allTeacherNumber(){
		try {

			$stmt = $this->con->prepare("select mobile from teacher_data where status = 1 ");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//search all managing committe number...
	public function allCommiteeNumber(){
		try {

			$stmt = $this->con->prepare("select mobile from commitee where  status=1");
			//$stmt->bindValue(':year', $this->year, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetchAll(PDO::PARAM_STR);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

		//search all absent student number from student table...
	public function allAbsentStudentNumber(){
		try {

			$stmt = $this->con->prepare("select father_phone from student_data where year=:year and attend=:attend and person=:person and status=1 ");
			//$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':year', $this->year, PDO::PARAM_STR);
			$stmt->bindValue(':attend', 'absent', PDO::PARAM_STR);
			$stmt->bindValue(':person', 'student', PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}
	//search all absent teacher number from student table...
	public function allAbsentTeacherNumber(){
		try {

			$stmt = $this->con->prepare("select father_phone from student_data where year=:year and attend=:attend and person=:person and status=1 ");
			//$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':year', $this->year, PDO::PARAM_STR);
			$stmt->bindValue(':attend', 'absent', PDO::PARAM_STR);
			$stmt->bindValue(':person', 'teacher', PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}


	//search student gurdian number for class eight...
	public function classEightGurdianNumber(){
		try {

			$stmt = $this->con->prepare("select father_phone from student_data where class=:class and year=:year and status=1 ");
			$stmt->bindValue(':class',$this->class, PDO::PARAM_STR);
			$stmt->bindValue(':year', $this->year, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetchAll(PDO::PARAM_STR);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//search student number for class eight...
	public function classEightStudentNumber(){
		try {

			$stmt = $this->con->prepare("select last_Orga_phone from student_data where class=:class and year=:year and status=1 ");
			$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':year', $this->year, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//register a new user...
	public function register(){
		try {

			$stmt = $this->con->prepare("insert into login() values() ");

			$stmt->bindValue(':username', $this->username, PDO::PARAM_STR);
			$stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
			$stmt->bindValue(':password', $this->password, PDO::PARAM_STR);
			$stmt->bindValue(':mobile', $this->mobile, PDO::PARAM_STR);
			$stmt->bindValue(':type', $this->type, PDO::PARAM_STR);
			$stmt->bindValue(':expire', $this->expire, PDO::PARAM_STR);
			$stmt->execute();

			if($stmt){
				$_SESSION['msg'] = "User Login Successfully";
				echo "<script>window.location='secure_login.php'<script>";
			}

			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//login user...
	public function login(){
		try {

			$stmt = $this->con->prepare("select * from users where status = 1 ");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$existUser = $result['username'];
			$existEmail = $result['email'];

			if($username == $existUser){
				$_SESSION['user'] = "User Name Already Exist ! Choose Another...";
				echo "<script>window.location='login.php'</script>";
			}
			elseif($email == $existEmail){
				$_SESSION['email'] = "Email Already Exist ! Choose Another...";
				echo "<script>window.location='login.php'</script>";
			}
			elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$_SESSION['email'] = "Invalid Email Address ! Choose Validate Email...";
				echo "<script>window.location='login.php'</script>";
			}
			else{
				$stmt = $this->con->prepare("insert into   ");
				$stmt->bindValue();
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}


	
}