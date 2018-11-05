<?php 

// http://sms.one9.one/API/?action=compose&username=shathi&api_key=6a17c2c2bf2cc88d1d21802cc4a6fd4d:K2vtK9CTU6JfpByAIRsoGPMuNpipl0Jh&sender=[Your+SenderID]&to=[Your+Recipients]&message=[Your+Message]
	$to 	     = '01926287401';
	$api_key 	 = '6a17c2c2bf2cc88d1d21802cc4a6fd4d:K2vtK9CTU6JfpByAIRsoGPMuNpipl0Jh';
	$message     = "Md Shakil, School attendence time 10.22 AM, Regard's Rafikul, Principal of School name...";

$url = "http://sms.one9.one/API/?";


$data= array(
	'action' => 'compose',
	'username' => 'shathi',
	'sender' => 'shathi',
	'to'=>"$to",
	'message'=>"$message",
	'api_key'=>"$api_key"
); // Add parameters in key value

$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$smsresult = curl_exec($ch);
if($smsresult){
	header('location:index.php');
}



// $stmt = $db->prepare("insert into sms(name, class, section, department, class_roll, student_id, message, mobile, father_phone, attend, attend_time, attend_date, year)
            
//                         VALUES(:name, :class, :section, :department, :class_roll, :student_id, :message, :mobile, :father_phone, :attend, :attend_time, :attend_date, :year)");
            
            
//             $result = $stmt->execute(array(
//                 ':name' => $name,
//                 ':class' => $class,
//                 ':section' => $section,
//                 ':department' => $department,
//                 ':class_roll' => $class_roll,
//                 ':student_id' => $student_id,
//                 ':message'    => $message,
//                 ':mobile'     => $mobile,
//                 ':father_phone' => $father_phone,
//                 ':attend' => $attend,
//                 ':attend_time' => $attend_time,
//                 ':attend_date' => $attend_date,
//                 ':year' => $year


