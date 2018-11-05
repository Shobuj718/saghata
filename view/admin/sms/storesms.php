
<?php 

   include_once '../../../vendor/autoload.php' ;

   use App\admin\Sms\Sms;

    date_default_timezone_set("Asia/Dhaka");
    $created_at  = date('Y-m-d h:i:a');

   $sms = new Sms();
   $sms->set($_POST)->othersms($created_at);
   $sms->send();


// echo "<pre>";
// var_dump($sms);
// die();