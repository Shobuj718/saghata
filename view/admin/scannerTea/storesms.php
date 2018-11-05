
<?php 

   include_once '../../../vendor/autoload.php' ;

   use App\admin\Sms\Sms;

    date_default_timezone_set("Asia/Dhaka");
    $created_at  = date('Y-m-d h:i:a');

   $sms = new Sms();

   			date_default_timezone_set("Asia/Dhaka");
			$attend_time  =  date("h:i:a");
			$attend_date  = date('Y-m-d');
			//$attend_date  = date('Y-M-d');
			$year         = date('Y');


   	if($attend_time >= '11:00:am'  && $attend_time <= '11.59am'){
				$attend_time = date('h:i');
				$message = " স্কুলে উপস্থিতির সময়  ".$attend_time;
			}
			elseif($attend_time >= '12:00:pm' && $attend_time <= '01.00pm'){
				$attend_time = date('h:i');
				$message = " স্কুল পরিত্যাগের সময়  ".$attend_time;
			}
			elseif($attend_time >= '01:00:pm' && $attend_time <= '02:59:pm'){
				$attend_time = date('h:i');
				$message = " স্কুল পরিত্যাগের সময় ".$attend_time;
			}
			elseif($attend_time >= '03:00:pm' && $attend_time <= '11:59:pm'){
				$attend_time = date('h:i');
				$message = " স্কুল পরিত্যাগের সময় ".$attend_time;
			}			
			else{
				$attend_time = date('h:i');
				$message = " স্কুলে উপস্থিতির সময়  ".$attend_time;	
			}

	$_POST['message'] = $message;
	
   $sms->set($_POST);//->othersms($created_at);
   $sms->send();


// echo "<pre>";
// var_dump($sms);
// die();