<?php 

namespace App\Admin\Sms;

if(!isset($_SESSTION)){
	session_start();
}

use App\Connection;
use PDOException;
use PDO;

class Sms extends Connection
{
	 

	public function set($data = array())
	{
		
		if(array_key_exists('to', $data)){
			$this->to = $data['to'];
		}
		if(array_key_exists('message', $data)){
			$this->message = $data['message'];
		}
		if(array_key_exists('token', $data)){
			$this->token = $data['token'];
		}

		return $this;
	}

	// date_default_timezone_set("Asia/Dhaka");
  //$created_at  = date('Y-m-d h:i:a');
 //echo $created_at;
	// insert all information about sms 
	public function othersms($created_at)
	{
		try {

			$stmt = $this->con->prepare("insert into othersms(message, allnumber, year, month, day, created_at )

				VALUES(:message, :allnumber,  :year, :month, :day, :created_at )");

			$stmt->bindValue(':message', $this->message, PDO::PARAM_STR);
			$stmt->bindValue(':allnumber', $this->to, PDO::PARAM_STR);
			$stmt->bindValue(':year', date('Y'), PDO::PARAM_STR);
			$stmt->bindValue(':month', date('m'), PDO::PARAM_STR);
			$stmt->bindValue(':day', date('d'), PDO::PARAM_STR);
			$stmt->bindValue(':created_at', $created_at, PDO::PARAM_STR);
			$stmt->execute();

			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}


	// insert all information about sms 
	public function insert($name, $class, $section, $department, $class_roll, $student_id, $message, $mobile, $father_phone, $attend, $attend_time, $attend_date, $year, $person )
	{
		try {

			$stmt = $this->con->prepare("INSERT INTO sendsms(name, class, section, department, class_roll, student_id, message, mobile, father_phone, attend, attend_time, attend_date, year, person) VALUES( :name, :class, :section, :department, :class_roll, :student_id, :message, :mobile, :father_phone, :attend, :attend_time, :attend_date, :year, :person)" );

			$stmt->bindValue(':name', $name, PDO::PARAM_STR);
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':section', $section, PDO::PARAM_STR);
			$stmt->bindValue(':department', $department, PDO::PARAM_STR);
			$stmt->bindValue(':class_roll', $class_roll, PDO::PARAM_STR);
			$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
			$stmt->bindValue(':message', $message, PDO::PARAM_STR);
			$stmt->bindValue(':mobile', $mobile, PDO::PARAM_STR);
			$stmt->bindValue(':father_phone', $father_phone, PDO::PARAM_STR);
			$stmt->bindValue(':attend', $attend, PDO::PARAM_STR);
			$stmt->bindValue(':attend_time', $attend_time, PDO::PARAM_STR);
			$stmt->bindValue(':attend_date', $attend_date, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->bindValue(':person', $person, PDO::PARAM_STR);
			return $stmt->execute();

			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}
	// insert all information about tbl_attendance 
	public function insertTbl_Attendance($name, $class, $shift, $section, $department, $roll)
	{
		try {

			$stmt = $this->con->prepare("insert into tbl_attendance(name, class, shift, branch, department, roll, attend, att_time, insertDT) values(:name, :class, :shift, :branch, :department, :roll, :attend, NOW(), NOW() )");
            $stmt->bindValue(':name', $name, PDO::PARAM_STR);
            $stmt->bindValue(':class', $class, PDO::PARAM_STR);
            $stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
            $stmt->bindValue(':branch', $section, PDO::PARAM_STR);
            $stmt->bindValue(':department', $department, PDO::PARAM_STR);
            $stmt->bindValue(':roll', $roll, PDO::PARAM_STR);
            $stmt->bindValue(':attend', 'present', PDO::PARAM_STR);
//            $stmt->bindValue(':insertDT', $insertDate, PDO::PARAM_STR);


            $result = $stmt->execute();

			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	//$stmt = $db->prepare("insert into tbl_attendance($class, $shift, $branch, $department, $roll, $attend, att_time, insertDT) values(:class, :shift, :branch, :department, :roll, :attend, NOW(), NOW() )");



	// insert all information about sms 
	public function insertTeacherSMS($to, $message, $name, $nid, $attend, $attend_time, $attend_date, $year)
	{
		try {

			$stmt = $this->con->prepare("INSERT INTO sendsmsTeacher(name,  mobile, message, nid, attend, attend_time, attend_date, year) VALUES( :name,  :mobile, :message, :nid, :attend, :attend_time, :attend_date, :year)" );

			$stmt->bindValue(':name', $name, PDO::PARAM_STR);
			$stmt->bindValue(':mobile', $to, PDO::PARAM_STR);
			$stmt->bindValue(':message', $message, PDO::PARAM_STR);
			$stmt->bindValue(':nid', $nid, PDO::PARAM_STR);
			
			$stmt->bindValue(':attend', $attend, PDO::PARAM_STR);
			$stmt->bindValue(':attend_time', $attend_time, PDO::PARAM_STR);
			$stmt->bindValue(':attend_date', $attend_date, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			return $stmt->execute();

			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	public function sendSMSW3space()
	{
		try {

			           
			$to 	 = $this->to;//'01711571561,01926287401'
			$message = $this->message;
			//$api_key = '6a17c2c2bf2cc88d1d21802cc4a6fd4d:K2vtK9CTU6JfpByAIRsoGPMuNpipl0Jh';
			$api_key = '2d9a0e4f21dd2ce2c1a092952b4a542f:gVtCfnH5KnIGeFhQ9POLrrbf1Q5mUmAc';

			$url = "http://sms.one9.one/API/?";


			$data= array(
				'action' => 'compose',
				'username' => 'SA', //'username' => 'shathi',
				'api_key'=>"$api_key",
				'sender' => 'shathi',
				'to'=>"$to",
				'message'=>"$message",
				'unicode' =>'1'
			); // Add parameters in key value

			$ch = curl_init(); // Initialize cURL
			curl_setopt($ch, CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$smsresult = curl_exec($ch);


			if($smsresult){
				$_SESSION['smssend'] = "Sms send Successfully !!!";
				echo "<script>window.location='index.php'</script>";
				//header("location:index.php");
			}
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	public function smsBalanceCheck(){
		try {

			$url = "http://sms.one9.one/API/?action=balance&username=SA&api_key=2d9a0e4f21dd2ce2c1a092952b4a542f:gVtCfnH5KnIGeFhQ9POLrrbf1Q5mUmAc";

			$ch = curl_init($url); // Initialize cURL
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HEADER, 0);

			$result = curl_exec($ch);
			return $result;
			//$result = curl_close($ch);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();

		}
	}

	// sms send by api from greenweb sms company...
	public function send(){
		try {

						            //step 2, sendfunction//
			// $to = "01776398979,01926287401";
			// $token = "3db3084ed4462e3b337feef0c70754d5";
			// $message = "Test SMS From Using API";
						$to 	 = $this->to;
						$token 	 = $this->token;
						$message = $this->message;

			$url = "http://sms.greenweb.com.bd/api.php";


			$data= array(
			'to'=>"$to",
			'message'=>"$message",
			'token'=>"$token"
			); // Add parameters in key value
			$ch = curl_init(); // Initialize cURL
			curl_setopt($ch, CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$smsresult = curl_exec($ch);

			if($smsresult){
				$_SESSION['smssend'] = "Sms send Successfully !!!";
				//header("location:index.php");
				echo "<script>window.location='index.php'</script>";
			}

			} catch (PDOException $e) {
				echo "Error: ".$e->getMessage()."<br />";
				die();
			}
		}


	//search all teacher mobile number for send sms 
	public function allCommiteeNumber(){
		try {

			$stmt = $this->con->prepare("select mobile from commitee where status = 1 ");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}


}

