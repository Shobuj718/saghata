




<?php 

    include_once '../../../vendor/autoload.php';

    use App\admin\student\Student;
    use App\admin\Sms\Sms;

    $sms = new Sms();
    
    $student = new Student();
var_dump($_POST);
//die();

if($_SERVER['REQUEST_METHOD'] == 'GET') {

		$student_id = $_GET['student_id'];

		if($student_id == ''){
			echo "<script>window.location='index.php'</script>";
		}
		else{

			$results = $student->studentIDForSendSMS($student_id);
			/*echo "<pre>";
			var_dump($results);
			die();*/

			$to 		  =  $results['father_phone'];
			$name 		  = $results['student_name'];
			$class 		  = $results['class'];
			$section 	  = $results['branch'];
			$department   = $results['department'];
			$class_roll   = $results['class_roll'];
			$mobile       = $results['last_Orga_phone'];
			$father_phone = $results['father_phone'];
			$attend       = 'present';

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

			if($attend_time >= '11:00:am'){
				$attend_time = date('h:i');
				$message = $name." সকাল ".$attend_time." স্কুল পরিত্যাগ করেছেন।";
			}
			elseif($attend_time >= '12:00:pm'){
				$attend_time = date('h:i');
				$message = $name." দুপুর ".$attend_time." স্কুল পরিত্যাগ করেছেন।";
			}
			elseif($attend_time >= '01:00:pm' && $attend_time <= '02:59:pm'){
				$attend_time = date('h:i');
				$message = $name." দুপুর ".$attend_time." স্কুল পরিত্যাগ করেছেন।";
			}
			elseif($attend_time >= '03:00:pm' && $attend_time <= '11:59:pm'){
				$attend_time = date('h:i');
				$message = $name." বিকাল ".$attend_time." স্কুল পরিত্যাগ করেছেন।";
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
				$message = $name." সকাল ".$attend_time." স্কুলে উপস্থিত হয়েছেন।";	
			}
			
			// echo $message;
			// die();

			$_POST['to']  = $to;
			$_POST['token'] = $_GET['token'];
			$_POST['message'] = $message;

			/*echo $_POST['to'].$_POST['token'].$_POST['message'];
			die();
*/

			$sms->insert($name, $class, $section, $department, $class_roll, $student_id, $message, $mobile, $father_phone, $attend, $attend_time, $attend_date, $year );
			//die();
			$sms->set($_POST)->smsSendGreenweb();
				
		}
		
	}
