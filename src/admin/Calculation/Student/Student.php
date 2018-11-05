<?php 

namespace App\Admin\Calculation\Student;

if(!isset($_SESSION)){
	session_start();
}

use App\Connection;
use PDO;
use PDOException;

class Student extends Connection
{

	public $due = 0;
	public $description = 0;
	public $payment = 0;
	public $total = 0;

	public function set($data = array()){

		if(array_key_exists('class', $data)){
			$this->class = $data['class'];
		}
		if(array_key_exists('student_id', $data)){
			$this->student_id = $data['student_id'];
		}
		if(array_key_exists('unique_id', $data)){
			$this->unique_id = $data['unique_id'];
		}
		if(array_key_exists('submit_date', $data)){
			$this->submit_date = $data['submit_date'];
		}
		if(array_key_exists('salary', $data)){
			$this->salary = $data['salary'];
		}
		if(array_key_exists('admission', $data)){
			$this->admission = $data['admission'];
		}
		if(array_key_exists('fine', $data)){
			$this->fine  = $data['fine'];
		}
		if(array_key_exists('sessionfee', $data)){
			$this->sessionfee = $data['sessionfee'];
 		}
 		if(array_key_exists('exam', $data)){
 			$this->exam = $data['exam'];
 		}
 		if(array_key_exists('contact_letter', $data)){
 			$this->contact_letter = $data['contact_letter'];
 		}
 		if(array_key_exists('security', $data)){
 			$this->security = $data['security'];
 		}
 		if(array_key_exists('current', $data)){
 			$this->current  = $data['current'];
 		}
 		if(array_key_exists('yearly', $data)){
 			$this->yearly = $data['yearly'];
 		}
 		if(array_key_exists('software', $data)){
 			$this->software = $data['software'];
 		}
 		if(array_key_exists('other', $data)){
 			$this->other = $data['other'];
 		}
 		if(array_key_exists('regexam', $data)){
 			$this->regexam = $data['regexam'];
 		}
 		if(array_key_exists('testimonial', $data)){
 			$this->testimonial = $data['testimonial'];
 		}
 		if(array_key_exists('science_security', $data)){
 			$this->science_security = $data['science_security'];
 		}
 		if(array_key_exists('center', $data)){
 			$this->center  = $data['center'];
 		}
 		if(array_key_exists('practical', $data)){
 			$this->practical  = $data['practical'];
 		}
 		if(array_key_exists('number_certificate', $data)){
 			$this->number_certificate = $data['number_certificate'];
 		}
 		if(array_key_exists('scout', $data)){
 			$this->scout = $data['scout'];
 		}
 		if(array_key_exists('bus', $data)){
 			$this->bus = $data['bus'];
 		}
 		if(array_key_exists('clearance', $data)){
 			$this->clearance = $data['clearance'];
 		}
 		if(array_key_exists('development', $data)){
 			$this->development = $data['development'];
 		}
 		if(array_key_exists('poorfund', $data)){
 			$this->poorfund = $data['poorfund'];
 		}
 		if(array_key_exists('re_ceremoni', $data)){
 			$this->re_ceremoni = $data['re_ceremoni'];
 		}
 		if(array_key_exists('red_cricent', $data)){
 			$this->red_cricent = $data['red_cricent'];
 		}




		if(array_key_exists('description', $data)){
			$this->description = $data['description'];
		}
		if(array_key_exists('total', $data)){
			$this->total = $data['total'];
		}
		if(array_key_exists('payment', $data)){
			$this->payment = $data['payment'];
		}
		if(array_key_exists('status2', $data)){
			$this->status2 = $data['status2'];
		}
		if(array_key_exists('method', $data)){
			$this->method = $data['method'];
		}

		return $this;
	}

	public function store(){
		try {
			$total = intval($this->salary) + intval($this->admission) + intval($this->fine) + intval($this->sessionfee) + intval($this->exam) + intval($this->contact_letter) + intval($this->security) + intval($this->current) + intval($this->yearly) + intval($this->software) + intval($this->other) + intval($this->regexam) + intval($this->testimonial) + intval($this->science_security) + intval($this->center) + intval($this->practical) + intval($this->number_certificate) + intval($this->scout) + intval($this->bus) + intval($this->clearance) + intval($this->development) + intval($this->poorfund) + intval($this->re_ceremoni) + intval($this->red_cricent);


			//$due = intval($this->total) - intval($this->payment);

			$stmt = $this->con->prepare("insert into student_fee(class, student_id, submit_date, salary, admission, fine, sessionfee, exam, contact_letter, security, current, yearly, software, other, regexam, testimonial, science_security, center, practical, number_certificate, scout, bus, clearance, development, poorfund, re_ceremoni, red_cricent,   description, total, payment, due, status2, method, unique_id, created_at) 

			 values(:class, :student_id, :submit_date, :salary, :admission, :fine, :sessionfee, :exam, :contact_letter, :security, :current, :yearly, :software, :other, :regexam, :testimonial, :science_security, :center, :practical, :number_certificate, :scout, :bus, :clearance, :development, :poorfund, :re_ceremoni, :red_cricent,   :description, :total, :payment, :due, :status2, :method, :unique_id, NOW() ) ");

			$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':student_id', $this->student_id, PDO::PARAM_STR);
			$stmt->bindValue(':submit_date', $this->submit_date, PDO::PARAM_STR);
			$stmt->bindValue(':salary', $this->salary, PDO::PARAM_STR);
			$stmt->bindValue(':admission', $this->admission, PDO::PARAM_STR);
			$stmt->bindValue(':fine', $this->fine, PDO::PARAM_STR);
			$stmt->bindValue(':sessionfee', $this->sessionfee, PDO::PARAM_STR);
			$stmt->bindValue(':exam', $this->exam, PDO::PARAM_STR);
			$stmt->bindValue(':contact_letter', $this->contact_letter, PDO::PARAM_STR);
			$stmt->bindValue(':security', $this->security, PDO::PARAM_STR);
			$stmt->bindValue(':current', $this->current, PDO::PARAM_STR);
			$stmt->bindValue(':yearly', $this->yearly, PDO::PARAM_STR);
			$stmt->bindValue(':software', $this->software, PDO::PARAM_STR);
			$stmt->bindValue(':other', $this->other, PDO::PARAM_STR);
			$stmt->bindValue(':regexam', $this->regexam, PDO::PARAM_STR);
			$stmt->bindValue(':testimonial', $this->testimonial, PDO::PARAM_STR);
			$stmt->bindValue(':science_security', $this->science_security, PDO::PARAM_STR);
			$stmt->bindValue(':center', $this->center, PDO::PARAM_STR);
			$stmt->bindValue(':practical', $this->practical, PDO::PARAM_STR);
			$stmt->bindValue(':number_certificate', $this->number_certificate, PDO::PARAM_STR);
			$stmt->bindValue(':scout', $this->scout, PDO::PARAM_STR);
			$stmt->bindValue(':bus', $this->bus, PDO::PARAM_STR);
			$stmt->bindValue(':clearance', $this->clearance, PDO::PARAM_STR);
			$stmt->bindValue(':development', $this->development, PDO::PARAM_STR);
			$stmt->bindValue(':poorfund', $this->poorfund, PDO::PARAM_STR);
			$stmt->bindValue(':re_ceremoni', $this->re_ceremoni, PDO::PARAM_STR);
			$stmt->bindValue(':red_cricent', $this->red_cricent, PDO::PARAM_STR);
			

			$stmt->bindValue(':description', $this->description, PDO::PARAM_STR);
			$stmt->bindValue(':total', $total, PDO::PARAM_STR);
			$stmt->bindValue(':payment', $total, PDO::PARAM_STR);
			$stmt->bindValue(':due', $this->due, PDO::PARAM_STR);
			$stmt->bindValue(':status2', $this->status2, PDO::PARAM_STR);
			$stmt->bindValue(':method', $this->method, PDO::PARAM_STR);
			$stmt->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['fee'] = "Student Fee Successfully done ";
				echo "<script>window.location='index.php'</script>";
			}

		} catch (Exception $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	public function selectStuNameBranch(){
		try {

			$stmt = $this->con->prepare("select student_name,branch from student_data where status = 1 ");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);

		} catch (PDOException $e) {
			echo "Error : ".$e->getMessage()."<br />";
			die();
		}
	}


	//select all student from database...
	public function selectAllStudentFee(){
		try {

			$stmt = $this->con->prepare("select * from student_fee where status = 1 ");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}
	//select all student from database...
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

	// select student fee for edit...
	public function EditFee($id){
		try {

			$stmt = $this->con->prepare("select * from student_fee where unique_id = :unique_id and status = 1 ");
			$stmt->bindValue(':unique_id', $id, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	// update student fee...
	public function updateStudentFee(){
		try {

			$total = intval($this->salary) + intval($this->admission) + intval($this->fine) + intval($this->sessionfee) + intval($this->exam) + intval($this->contact_letter) + intval($this->security) + intval($this->current) + intval($this->yearly) + intval($this->software) + intval($this->other) + intval($this->regexam) + intval($this->testimonial) + intval($this->science_security) + intval($this->center) + intval($this->practical) + intval($this->number_certificate) + intval($this->scout) + intval($this->bus) + intval($this->clearance) + intval($this->development) + intval($this->poorfund) + intval($this->re_ceremoni) + intval($this->red_cricent);
			
		$stmt = $this->con->prepare("update student_fee set 

			class = :class,
			student_id = :student_id,
			submit_date = :submit_date , 
			salary = :salary , 
			admission = :admission , 
			fine = :fine , 
			sessionfee = :sessionfee , 
			exam = :exam , 
			contact_letter = :contact_letter , 
			security = :security , 
			current = :current , 
			yearly = :yearly , 
			software = :software , 
			other = :other,  
			regexam = :regexam , 
			testimonial = :testimonial , 
			science_security = :science_security , 
			center = :center ,
			practical = :practical , 
			number_certificate = :number_certificate , 
			scout = :scout , 
			bus = :bus , 
			clearance = :clearance , 
			development = :development , 
			poorfund = :poorfund , 
			re_ceremoni = :re_ceremoni , 
			red_cricent = :red_cricent ,   
			description = :description , 
			total = :total , 
			payment = :payment , 
			due = :due , 
			status2 = :status2 , 
			method = :method , 
			updated_at = NOW()
			where unique_id = :unique_id ");

			$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':student_id', $this->student_id, PDO::PARAM_STR);
			$stmt->bindValue(':submit_date', $this->submit_date, PDO::PARAM_STR);
			$stmt->bindValue(':salary', $this->salary, PDO::PARAM_STR);
			$stmt->bindValue(':admission', $this->admission, PDO::PARAM_STR);
			$stmt->bindValue(':fine', $this->fine, PDO::PARAM_STR);
			$stmt->bindValue(':sessionfee', $this->sessionfee, PDO::PARAM_STR);
			$stmt->bindValue(':exam', $this->exam, PDO::PARAM_STR);
			$stmt->bindValue(':contact_letter', $this->contact_letter, PDO::PARAM_STR);
			$stmt->bindValue(':security', $this->security, PDO::PARAM_STR);
			$stmt->bindValue(':current', $this->current, PDO::PARAM_STR);
			$stmt->bindValue(':yearly', $this->yearly, PDO::PARAM_STR);
			$stmt->bindValue(':software', $this->software, PDO::PARAM_STR);
			$stmt->bindValue(':other', $this->other, PDO::PARAM_STR);
			$stmt->bindValue(':regexam', $this->regexam, PDO::PARAM_STR);
			$stmt->bindValue(':testimonial', $this->testimonial, PDO::PARAM_STR);
			$stmt->bindValue(':science_security', $this->science_security, PDO::PARAM_STR);
			$stmt->bindValue(':center', $this->center, PDO::PARAM_STR);
			$stmt->bindValue(':practical', $this->practical, PDO::PARAM_STR);
			$stmt->bindValue(':number_certificate', $this->number_certificate, PDO::PARAM_STR);
			$stmt->bindValue(':scout', $this->scout, PDO::PARAM_STR);
			$stmt->bindValue(':bus', $this->bus, PDO::PARAM_STR);
			$stmt->bindValue(':clearance', $this->clearance, PDO::PARAM_STR);
			$stmt->bindValue(':development', $this->development, PDO::PARAM_STR);
			$stmt->bindValue(':poorfund', $this->poorfund, PDO::PARAM_STR);
			$stmt->bindValue(':re_ceremoni', $this->re_ceremoni, PDO::PARAM_STR);
			$stmt->bindValue(':red_cricent', $this->red_cricent, PDO::PARAM_STR);
			

			$stmt->bindValue(':description', $this->description, PDO::PARAM_STR);
			$stmt->bindValue(':total', $total, PDO::PARAM_STR);
			$stmt->bindValue(':payment', $total, PDO::PARAM_STR);
			$stmt->bindValue(':due', $this->due, PDO::PARAM_STR);
			$stmt->bindValue(':status2', $this->status2, PDO::PARAM_STR);
			$stmt->bindValue(':method', $this->method, PDO::PARAM_STR);
			$stmt->bindValue(':unique_id', $this->unique_id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['fee'] = "Student Fee Updated Successfully ";
				echo "<script>window.location='index.php'</script>";
			}

		} catch (Exception $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// delete student fee 
	public function deleteStudentFee($id){
		try {

			$stmt = $this->con->prepare("update student_fee set status = 2 where unique_id = :unique_id ");
			$stmt->bindValue(':unique_id', $id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['fee'] = "Data Deleted Successfully !!!";
				echo "<script>window.location='allstudentfee.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// select all fee
	public function selectAllFee($id){
		try {
			$stmt = $this->con->prepare("select total from student_fee where student_id = :student_id and status = 1");
			$stmt->bindValue(':student_id', $id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount() > 0){
				return $stmt->fetch(PDO::FETCH_ASSOC);
			}
			else{
				$_SESSION['totalErr'] = "Student ID does not match !!!";
				echo "<script>window.location='index.php'</script>";
			}
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// use for future...
	// restore student fee collection after deleting...
	public function restore($id){
		try {

			$stmt = $this->con->prepare("select * from student_fee where status=2 and unique_id=:id ");
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount() > 0){
				return $stmt->fetch(PDO::FETCH_ASSOC);
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// use for future action...
	public function deleteparmanently($id){
		try {

			$stmt = $this->con->prepare("delete from student_fee where status = 2 and unique_id = :id ");
			 $stmt->bindValue(':id', $id, PDO::PARAM_STR);
			 $stmt->execute();
			 if($stmt){
			 	return $stmt->fetch(PDO::FETCH_ASSOC);
			 }
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	//select students total money for class wise, year not included in db table.So befor this function execute to add year field into student_fee table

	public function totalMoneySix(){
		try {

			$stmt = $this->con->prepare("select * from student_fee where class=:class and year=:year and status=2 ");
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				return $stmt->fetch(PDO::FETCH_ASSOC);
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	public function totalStuNum(){
		try {

			$stmt = $this->con->prepare("select * from student_fee where status=1 ");
			$stmt->execute();
			if($stmt){
				return $stmt->fetch(PDO::FETCH_ASSOC);
			}
			
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	public function selectA(){
		try {

			$s
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}
	
}