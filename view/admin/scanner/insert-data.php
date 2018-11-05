


<?php 

    include_once '../../../vendor/autoload.php';

    use App\admin\student\Student;
    use App\admin\Sms\Sms;

    $sms = new Sms();
    
    $student = new Student();


if($_SERVER['REQUEST_METHOD'] == 'GET') {

		$student_id = $_GET['student_id'];
		//$student_id = strlen($student_id);


		$token      = $_GET['token'];

		if($student_id == ''){
			echo "<script>window.location='index.php'</script>";
		}

		/*elseif($strlen($_GET['student_id']) == '11'){
			$_POST['to']  = $_GET['student_id'];
			$_POST['message'] = 'hi...shobuj...';
			$_POST['token'] = $token;

			$sms->set($_POST)->send();
		}*/

		// elseif(strlen($student_id) == 11){
		// 	$to = $_GET['student_id'];
		// 	//echo $student_id;
		// 	//die();	
		// 	//$results = $student->teacherIDForSendSMS($student_id);
			
		// 	//$to 		  =  $results['mobile'];
		// 	//$name 		  = $results['teacher_name'];
		// 	//$nid 		  = $results['nid'];
			
		// 	$attend       = 'present';

		// 	date_default_timezone_set("Asia/Dhaka");
		// 	$attend_time  =  date("h:i:a");
		// 	$attend_date  = date('Y-m-d');
		// 	//$attend_date  = date('Y-M-d');
		// 	$year         = date('Y');

		

		// 	if($attend_time >= '11:00:am'  && $attend_time <= '11.59am'){
		// 		$attend_time = date('h:i');
		// 		$message = " স্কুলে উপস্থিতির সময়  ".$attend_time;
		// 	}
		// 	elseif($attend_time >= '12:00:pm' && $attend_time <= '01.00pm'){
		// 		$attend_time = date('h:i');
		// 		$message = " স্কুল পরিত্যাগের সময়  ".$attend_time;
		// 	}
		// 	elseif($attend_time >= '01:00:pm' && $attend_time <= '02:59:pm'){
		// 		$attend_time = date('h:i');
		// 		$message = " স্কুল পরিত্যাগের সময় ".$attend_time;
		// 	}
		// 	elseif($attend_time >= '03:00:pm' && $attend_time <= '11:59:pm'){
		// 		$attend_time = date('h:i');
		// 		$message = " স্কুল পরিত্যাগের সময় ".$attend_time;
		// 	}			
		// 	else{
		// 		$attend_time = date('h:i');
		// 		$message = " স্কুলে উপস্থিতির সময়  ".$attend_time;	
		// 	}

		// 	$_POST['to']  = $to;
		// 	$_POST['message'] = $message;
		// 	$_POST['token'] = $token;


		// 	//$sms->insertTeacherSMS($to, $message, $name, $nid, $attend, $attend_time, $attend_date, $year);
		// 	//die();
		// 	$results = $sms->set($_POST)->send();
		// 	// echo "<pre>";
		// 	// var_dump($results);
		// 	// die();
		// }
		else{

			$results = $student->studentIDForSendSMS($student_id);
			// echo "<pre>";
			// var_dump($results);
			// die();
			$to 		  =  $results['father_phone'];
			$name 		  = $results['student_name'];
			$class 		  = $results['class'];
			$section 	  = "comming";
			$department   = "comming";
			$class_roll   = "comming";
			$mobile       = "comming";
			$father_phone = "comming";
			$attend       = 'present';

			/*$section 	  = $results['branch'];
			$department   = $results['department'];
			$class_roll   = $results['class_roll'];
			$mobile       = $results['last_Orga_phone'];
			$father_phone = $results['father_phone'];
			$attend       = 'present';*/

			date_default_timezone_set("Asia/Dhaka");
			$attend_time  =  date("h:i:a");
			$attend_date  = date('Y-m-d');
			//$attend_date  = date('Y-M-d');
			$year         = date('Y');

			

			//echo $attend_time." ";
			//$message = $name." "."class ".$class." Roll ".$class_roll.", School attendence time, ".$attend_time.", Regard's Rafikul, Principal of School name...";
			//$message = $name." sokal ".$attend_time." School e Uposthit hoyechen, Saghata Pilot High School. @ehsansoft";

			// fuphs.com 051111:০১৭২১২০৮৯৪৬ 
			// sphsg 071111:01705447951 

			if($attend_time >= '11:00:am'  && $attend_time <= '11.59am'){
				$attend_time = date('h:i');
				$message = $name."(".$class.")"." দুপুর ".$attend_time." স্কুলে উপস্থিত হয়েছেন।";	
			}
			elseif($attend_time >= '12:00:pm' && $attend_time <= '01.00pm'){
				$attend_time = date('h:i');
				$message = $name."(".$class.")"." দুপুর ".$attend_time." স্কুলে উপস্থিত হয়েছেন।";	
			}
			elseif($attend_time >= '01:00:pm' && $attend_time <= '02:59:pm'){
				$attend_time = date('h:i');
				$message = $name."(".$class.")"." দুপুর ".$attend_time." স্কুলে উপস্থিত হয়েছেন।";	
				//$message = "সাঘাটা পাইলট উচ্চ বিদ্যালয়ের নিজস্ব ওয়েব সাইট এর শুভ উদ্ধোধন আগামী ১৬/০৮/২০১৮ ইং /প্রধান অতিথি মাননীয় ডেপুটি স্পিকার  অ্যাড: ফজলে রাব্বি মিয়া  এম.পি ";
			}
			elseif($attend_time >= '03:00:pm' && $attend_time <= '11:59:pm'){
				$attend_time = date('h:i');
				$message = $name."(".$class.")"." বিকাল ".$attend_time." স্কুল পরিত্যাগ করেছেন।";
			}
			// elseif($attend_time >= '03:00:pm'){
			// 	$attend_time = date('h:i');
			// 	$message = $name." বিকাল ".$attend_time." স্কুল পরিত্যাগ করেছেন।";
			// }
			// elseif($attend_time >= '04:00:pm'){
			// 	$attend_time = date('h:i');
			// 	$message = $name." বিকাল ".$attend_time." স্কুল পরিত্যাগ করেছেন।";
			// }
			else{
				$attend_time = date('h:i');
				$message = $name."(".$class.")"." দুপুর ".$attend_time." স্কুলে উপস্থিত হয়েছেন।";	
			}
			
			// echo $message;
			// die();

			$_POST['to']  = $to;
			$_POST['message'] = $message;
			$_POST['token'] = $token;


			$sms->insert($name, $class, $section, $department, $class_roll, $student_id, $message, $mobile, $father_phone, $attend, $attend_time, $attend_date, $year );
			//die();
			$sms->set($_POST)->send();
				
		}
		
	}

 ?>











<?php

/*
Developer: Ehtesham Mehmood
Site:      PHPCodify.com
Script:    Insert Data in PHP using jQuery AJAX without Page Refresh
File:      Insert-Data.php
*/
// include('db.php');
// $barcode=$_POST['barcode'];

// $stmt = $DBcon->prepare("INSERT INTO barcode(barcode) VALUES( :barcode)");

// $stmt->bindparam(':barcode', $barcode);
// if($stmt->execute())
// {
//   $res="Data Inserted Successfully:";
//   echo json_encode($res);
  
// }
// else {
//   $error="Not Inserted,Some Probelm occur.";
//   echo json_encode($error);
// }



 ?>
