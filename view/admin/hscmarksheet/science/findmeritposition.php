    <?php  include '../../includes/header.php' ?>


<?php 

if(!isset($_SESSION)){
    session_start();
}

// echo "<pre>";
// var_dump($_POST);
//die();
error_reporting(0);

include_once '../../../../vendor/autoload.php' ;

//use App\Admin\Marksheet\Allmarkstore();

$ninetenscience = new App\admin\Ninetenscience\Ninetenscience();
$student   = new App\admin\student\Student();


$class      = trim(htmlspecialchars($_POST['class']));
$shift      = trim(htmlspecialchars($_POST['shift']));
$branch     = trim(htmlspecialchars($_POST['branch']));
$department = trim(htmlspecialchars($_POST['department']));
$term       = trim(htmlspecialchars($_POST['term']));
$year       = trim(htmlspecialchars($_POST['year']));
$student_id = trim(htmlspecialchars($_POST['student_id']));

$studentNumber = $ninetenscience->studentNumberSelect($student_id);
$studentData    = $student->selectAllData($student_id);


$class = $studentNumber['class'];
$shift = $studentNumber['shift'];
$branch = $studentNumber['branch'];
$department = $studentNumber['department'];
$student_id = $studentNumber['student_id'];

$totalnum = $studentNumber['gpa'];
// $totalnum = number_format($totalnum, 2);

$gpa      = $studentNumber['gpa'];
$gpa = number_format($gpa, 2);

$totalSub = $studentNumber['totalSub'];
$totalmark = $studentNumber['totalmark'];

 
// echo $totalnum." is a ....";

 

$result = $ninetenscience->selectNineTenMark($class, $shift, $branch, $department, $term, $year);
//$ninetenscience->selectstudetn();
$singgpatotal = $ninetenscience->selectSingleGpaTotal($class, $term, $year, $student_id);

 

 foreach ($singgpatotal as $singlemerit) {
    $singlemeritposition = $singlemerit;
    //echo "this is a totalmark and gpa summation = ".$singlemeritposition."<br>";
}

// echo "<pre>";
// var_dump($result);
// die();


//echo "All student number in this class = ";
foreach ($result as $data) {
    //echo  $data['totalmark']." ";
    $mark[] = $data['totalmark'];
    $b1t[] = $data['b1t'];
    $b2t[] = $data['b2t'];
    $e1w[] = $data['e1w'];
    $e2w[] = $data['e2w'];
    $mw[] = $data['mw'];

    $hmw[]  = $data['hmw'];
    $pt[]   = $data['pt'];
    $ct[]   = $data['ct'];
    $bt[]   = $data['bt'];
    $agt[]  = $data['agt'];

    $st[] = $data['st'];
    //$sst[] = $data['sst'];
    $bit[] = $data['bit'];
    $rt[] = $data['rt'];
    $it[] = $data['it'];
    $dt[] = $data['dt'];
    $spt[] = $data['spt'];
    $wlt[] = $data['wlt'];
    $at[] = $data['at'];
    //$gpt[] = $data['totalmark']. '+' .$data['gpa'];
    $gpt[] = $data['totalmark'];
    $gptt[]  = $data['gpa'];
 }
 
 $c = array();
foreach (array_keys($gpt + $gptt) as $key) {
    $c[$key] = $gpt[$key] + $gptt[$key];
}
//rsort($c);
 foreach ($c as $gpatotalmark) {
     //echo $gpatotalmark."<br />";
 }
 //after sor for Ascending 
 //echo " <hr>Total number and GPA summation = ";
rsort($c);
 foreach ($c as $gpatotalmark) {
     //echo $gpatotalmark."<br />";
 }

//die();

 //$total = intval($totalnum);
 $total2 = floatval($singlemeritposition);

 for($i = 0; $i<count($c); $i++){
    $merit2 = $i;

    if($total2 == $c[$i]){
        $merit2 += 1;
        //echo "Your merit position is(".$total.") : ".$merit."<br />";

        //echo "<hr>";
        $maxNum = max($c);
        $minNum = min($c);
         
        // echo "Your merit position is(".$total2.") : ".$merit2."<br />";
        // echo "Your GPA is : ".$gpa."<br />";
        // echo "Your Total Mark is : ".$totalmark."<br />";
         break;
    }
    
 }




//echo "<hr>";
rsort($b1t);
$b1t = max($b1t);
//echo "Bangla maximum number is : ".$b1t."<br />";

rsort($b2t);
$b2t = max($b2t);
//echo "Bangla 2nd maximum number is : ".$b2t."<br />";

rsort($e1w);
$e1w = max($e1w);
//echo "English 1st maximum number is : ".$e1w."<br />";

rsort($e2w);
$e2w = max($e2w);
//echo "English 2nd maximum number is : ".$e2w."<br />";

rsort($mw);
$mw = max($mw);
//echo "Math maximum number is : ".$mw."<br />";

rsort($st);
$st = max($st);
//echo "Science maximum number is : ".$st."<br />";

rsort($bit);
$bit = max($bit);
//echo "Bangladesh and Internatinal maximum number is : ".$bit."<br />";

rsort($rt);
$rt = max($rt);
//echo "Religion maximum number is : ".$rt."<br />";

rsort($it);
$it = max($it);
//echo "Information Technology maximum number is : ".$it."<br />";

rsort($dt);
$dt = max($dt);
//echo "Domestic Science maximum number is : ".$dt."<br />";

rsort($spt);
$spt = max($spt);
//echo "Sports maximum number is : ".$spt. "<br />";

rsort($wlt);
$wlt = max($wlt);
//echo "Work and Life Education maximum number is : ".$wlt."<br />";

rsort($at);
$at = max($at);
//echo "Arts maximum number is : ".$at."<br />";

// for Physics Subject
rsort($pt);
$pt = max($pt);
//echo "Physics maximum number is : ".$pt."<br />";

//for Chemistry Subject
rsort($ct);
$ct = max($ct);
//echo "Chemistry maximum number is : ".$ct."<br />";

//for Biology Subject
rsort($bt);
$bt = max($bt);
//echo "Biology maximum number is : ".$bt."<br />";

// for Higher math
rsort($hmw);
$hmw = max($hmw);
//echo "Higher Math maximum number is : ".$hmw."<br />";

//for agriculture
rsort($agt);
$agt = max($agt);
//echo "Agriculture maximum number is : ".$agt."<br />";


//echo "<hr>";
rsort($mark); 
$max = max($mark);
$min = min($mark);
//echo "Maximum Number is : ".$max."<br />";
//echo "Minimum Number is : ".$min."<br />";






foreach ($result as $data) {
    //echo  $data['totalmark']." ";
    $arr[] = $data['gpa'].',';
}
//echo " <hr />";

//$arr[]= rtrim($arr);
//$arr[] = rtrim($arr, ', ');
rsort($arr); 
//echo "All student gpa in this class = ";
//echo "All student GPA in this class = ";

foreach ($arr as $result) {
    //echo $result;
}

//echo "<hr>";
$maxNum = max($arr);
$minNum = min($arr);
//echo "Maximum GPA is : ".$maxNum."<br />";
//echo "Minimum GPA is : ".$minNum."<br />";


 //$total = intval($totalnum);
 $total = floatval($totalnum);

 for($i = 0; $i<count($arr); $i++){
    $merit = $i;

    if($total == $arr[$i]){
        $merit += 1;
        //echo "Your merit position is(".$total.") : ".$merit."<br />";

        //echo "<hr>";
        $maxNum = max($arr);
        $minNum = min($arr);
        // echo "Maximum GPA is : ".$maxNum."<br />";
        // echo "Minimum GPA is : ".$minNum."<br /><br />";

        // echo "Your Class is : ".$class."<br />";
        // echo "Your Shift is : ".$shift."<br />";
        // echo "Your Branch is : ".$branch."<br />";
        // echo "Your Department is : ".$department."<br />";

        // echo "Your ID is : ".$student_id."<br />";
        // echo "Your merit position is(".$total.") : ".$merit."<br />";
        // echo "Your GPA is : ".$gpa."<br />";
        // echo "Your Total Mark is : ".$totalmark."<br />";
        // echo "Your Total Subject is : ".$totalSub."<br />";

        //die();
    }
    // else{
    //  echo "Your merit position is(".$total.") : "."<strong>"."Cannot Find !!!"."</strong><br />";
    // }
    //echo "Highest is ".$arr[$i]."<br />";
 }

 //echo "<hr>";
$maxNum = max($arr);
$minNum = min($arr);
// echo "Maximum number is : ".$maxNum."<br />";
// echo "Minimum number is : ".$minNum."<br />";
// echo "Your merit position is(".$total.") : ".$merit."<br />";

//  echo 'Highest is -'.$arr[0].', Second highest is -'.$arr[1]."<br />";

 // echo "<pre>";
 // var_dump($_POST);
 // die();
 

?><!-- 
<!DOCTYPE html>
<html>
<head>
	<title>Student Marksheet</title>
</head>
<body onload="window.print();"> -->

 <!-- <body> -->

 <a href="javascript:void(0);" id="print_button1" style="width: 120px; padding: 5px 8px 5px 8px;text-align: center;float: right;background-color: #02A6D8;color: #fff;text-decoration: none; margin: 10px;" onclick="printPageArea('wrapper')">Print Marksheet</a>

<div class="col-md-12" id="wrapper" style="background: white;margin-top: ;">

   

    <div class="container" >
        <div class="row" >
            <div class="col-md-12" style="background: white;">

            <?php //echo "<hr/>"; ?>
            
            <h3 style="text-align:center;color:green;">শিক্ষার্থীর মার্কশীট</h3>

            <?php echo "<hr/>"; ?>
 

            <div class="col-md-6" style="background: white; margin-top: 5px;">
            
                <div class="row">
                         
                    <div class="col-md-6">
                        <div class="form-group">
                            শিক্ষার্থীর নামঃ <?= $studentData['student_name'] ?> <br>  
                            পিতার নামঃ <?= $studentData['father_name'] ?> <br>
                            মাতার নামঃ <?= $studentData['mother_name'] ?> <br>
                            পরীক্ষার নামঃ <?= $term ?> <br>
                            শ্রেণীঃ<?= $class ?> <br>
                            শিফটঃ <?= $shift ?> <br>
                            আইডিঃ <?= $student_id ?> <br>
                            সর্বমোট বিষয়ঃ <?= $studentNumber['totalSub']; ?> <br>
                         </div>
                    </div> 
                    <!-- <div class="col-md-6">
                        <div class="form-group">
                            <h4><?= $results2['student_name'] ?> </h4> 
                            <h4><?= $roll ?> </h4>
                             
                        </div>
                    </div>    -->  
                </div>   
            </div> 
           <!-- 
            <div style="text-align: ;margin-left: 312px;  margin-top: 5px; background: rgba(64,255,225,0.63)" class="col-md-2">
                <label for="" style="color: rgba(46,50,230,0.9)">Grading System</label>
                <div class="row" style="text-align: right;">
                    <div class="col-md-4">
                        <p><strong>Number</strong></p>
                        <p style="text-align: center; font-size: 13px"><?= '80-100'; ?></p>
                        <p style="text-align: center; font-size: 13px"><?= '70-79'; ?></p>
                        <p style="text-align: center; font-size: 13px"><?= '60-69'; ?></p>
                        <p style="text-align: center; font-size: 13px"><?= '50-59'; ?></p>
                        <p style="text-align: center; font-size: 13px"><?= '40-49'; ?></p>
                        <p style="text-align: center; font-size: 13px"><?= '33-39'; ?></p>
                        <p style="text-align: center; font-size: 13px"><?= '0-32'; ?></p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Grade</strong></p>
                       <p style="text-align: center; font-size: 13px"> <?= 'A+'; ?></p>
                       <p style="text-align: center; font-size: 13px"> <?= 'A'; ?></p>
                       <p style="text-align: center; font-size: 13px"> <?= 'A-'; ?></p>
                       <p style="text-align: center; font-size: 13px"> <?= 'B'; ?></p>
                       <p style="text-align: center; font-size: 13px"> <?= 'C'; ?></p>
                       <p style="text-align: center; font-size: 13px"> <?= 'D'; ?></p>
                       <p style="text-align: center; font-size: 13px"> <?= 'F'; ?></p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Point</strong></p>
                       <p style="text-align: center; font-size: 13px"> <?= '5'; ?></p>
                       <p style="text-align: center; font-size: 13px"> <?= '4'; ?></p>
                       <p style="text-align: center; font-size: 13px"> <?= '3.5'; ?></p>
                       <p style="text-align: center; font-size: 13px"> <?= '3'; ?></p>
                       <p style="text-align: center; font-size: 13px"> <?= '2'; ?></p>
                       <p style="text-align: center; font-size: 13px"> <?= '1'; ?></p>
                       <p style="text-align: center; font-size: 13px"> <?= '0'; ?></p>
                    </div>
                    <br>
                </div>
              </div> -->
            </div>
            </div>
        </div>
 <br>
                    
    <table border="1" align="center" width="100%" style="background: white; font-size: 12px">

 
        <tr>
            <td colspan="15" align="center" style="background: #56ABEE;">মার্কসশীট</td>
        </tr>


        <tr>
            <td align="center" class="size6">বিষয়</td>
            <td align="center" class="size6">পূর্ণ  নম্বর </td>
            <td align="center" class="size6">লিখিত নম্বর </td>
            <td align="center" class="size6">এম সি কিউ নম্বর </td>
            <td align="center" class="size6">প্রাকটিক্যাল নম্বর </td>
            <td align="center" class="size6">প্রাপ্ত  নম্বর </td>
            <td align="center" class="size6"> সর্বাধিক প্রাপ্ত নম্বর</td>
            <!-- <td align="center" class="size6">সাব টোটাল</td> -->
            <td align="center" class="size6">কনভার্ট</td>
            <!-- <td align="center" class="size6">কনভার্টেড  নাম্বার</td> -->
            <!-- <td align="center" class="size6">সি এ</td> -->
            <td align="center" class="size6">গ্রেড পয়েন্ট </td>
            <td align="center" class="size6">লেটার গ্রেড</td>
            <!-- <td align="center" class="size6">জি পি </td> -->
            <!-- <td colspan="2" align="center" class="size4">মন্তব্য</td> -->
            <td colspan="2" align="center" class="size4">Merit Position</td>
        </tr>

        
        
        
 
            <tr>
                <td><?=
                   $studentNumber['bangla1'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['fullmark']; ?></td>
                <td align="center" style="background: white;color: #3926ee"><?=
                   $studentNumber['b1w'];
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    $studentNumber['b1m'];
                    ?>
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                </td>

                <td align="center" style="background: white;color: #3926ee">
                     <?=
                    $studentNumber['b1t'];
                    ?>
                        
                </td>
                         
                <td rowspan="" align="center">
                     <?=
                    $b1t;
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $studentNumber['fullmark'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $b1g = $studentNumber['b1g'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php

                if($b1g == 5 ){
                    echo 'A+';
                }
                elseif ($b1g >= 4 && $b1g <= 4.99 ){
                    echo "A";
                }
                elseif ($b1g >= 3.5 && $b1g <= 3.99 ){
                    echo "A-";
                }
                elseif ($b1g >= 3.0 && $b1g <= 3.49 ){
                    echo "B";
                }
                elseif ($b1g >= 2 && $b1g <= 2.99 ){
                    echo "C";
                }
                elseif ($b1g >= 1 && $b1g <= 1.99 ){
                    echo "D";
                }
                else {
                    echo 'F';
                }
                ?>
                </td>
                <td rowspan="18" align="center">

                <?php 

                    //this is gpa compare section...
                    $total = floatval($totalnum);

                    //for loop does not need here...
                     for($i = 0; $i<count($arr); $i++){
                        $merit = $i;

                        if($total == $arr[$i]){

                            $merit += 1;
                            // $total = number_format($total, 2);
                            // echo "Position(".$total.") = ".$merit."<br />";
                            // echo "Max GPA(".$max.") = ".$maxNum."<br />";
                            // echo "Position 1 = ".$maxNum;

            // Here GPA and Total Number summation and compare all number for merit position
                            $total2 = number_format($total2, 2);
                            echo "Your Merit <br> Position(".$totalmark.") = ".$merit2."<br />";
                            echo "Your GPA = ".$gpa."<br />";
                            echo "<br>";
                            // echo "Max GPA  = ".$maxNum."<br />";
                             
                            break;

                        }     
                        
                     }

                ?>

                </td>
          
            </tr>


 
            <tr>
                <td><?=
                   $studentNumber['bangla2'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['b2fullmark']; ?></td>
                <td align="center" style="background: white;color: #3926ee"><?=
                   $studentNumber['b2w'];
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    $studentNumber['b2m'];
                    ?>
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                </td>

                <td align="center" style="background: white;color: #3926ee">
                     <?=
                    $studentNumber['b2t'];
                    ?>
                        
                </td>
                         
                <td rowspan="" align="center">
                     <?=
                    $b2t;
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $studentNumber['b2fullmark'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $b2g = $studentNumber['b2g'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php

                if($b2g == 5 ){
                    echo 'A+';
                }
                elseif ($b2g >= 4 && $b2g <= 4.99 ){
                    echo "A";
                }
                elseif ($b2g >= 3.5 && $b2g <= 3.99 ){
                    echo "A-";
                }
                elseif ($b2g >= 3.0 && $b2g <= 3.49 ){
                    echo "B";
                }
                elseif ($b2g >= 2 && $b2g <= 2.99 ){
                    echo "C";
                }
                elseif ($b2g >= 1 && $b2g <= 1.99 ){
                    echo "D";
                }
                else {
                    echo 'F';
                }
                ?>
                </td>
                
          
            </tr>


            <tr>
                <td><?=
                   $studentNumber['english1'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['enfullmark']; ?></td>
                <td align="center" style="background: white;color: #3926ee"><?=
                   $studentNumber['e1w'];
                    ?>
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                </td>

                <td  align="center" style="background: white;color: #3926ee">
                     <?=
                    $studentNumber['e1w'];
                    ?>
                        
                </td>
                         
                <td rowspan="" align="center">
                     <?=
                    $e1w;
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $studentNumber['enfullmark'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $e1g = $studentNumber['e1g'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php

                if($e1g == 5 ){
                    echo 'A+';
                }
                elseif ($e1g >= 4 && $e1g <= 4.99 ){
                    echo "A";
                }
                elseif ($e1g >= 3.5 && $e1g <= 3.99 ){
                    echo "A-";
                }
                elseif ($e1g >= 3.0 && $e1g <= 3.49 ){
                    echo "B";
                }
                elseif ($e1g >= 2 && $e1g <= 2.99 ){
                    echo "C";
                }
                elseif ($e1g >= 1 && $e1g <= 1.99 ){
                    echo "D";
                }
                else {
                    echo 'F';
                }
                ?>
                </td>
                
          
            </tr>
             


            <tr>
                <td><?=
                   $studentNumber['english2'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['e2fullmark']; ?></td>

                <td align="center" style="background: white;color: #3926ee"><?=
                   $studentNumber['e2w'];
                    ?>
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                </td>

                <td  align="center" style="background: white;color: #3926ee">
                     <?=
                    $studentNumber['e2w'];
                    ?>
                        
                </td>
                         
                <td rowspan="" align="center">
                     <?=
                    $e2w;
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $studentNumber['e2fullmark'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $e2g = $studentNumber['e2g'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php

                if($e2g == 5 ){
                    echo 'A+';
                }
                elseif ($e2g >= 4 && $e2g <= 4.99 ){
                    echo "A";
                }
                elseif ($e2g >= 3.5 && $e2g <= 3.99 ){
                    echo "A-";
                }
                elseif ($e2g >= 3.0 && $e2g <= 3.49 ){
                    echo "B";
                }
                elseif ($e2g >= 2 && $e2g <= 2.99 ){
                    echo "C";
                }
                elseif ($e2g >= 1 && $e2g <= 1.99 ){
                    echo "D";
                }
                else {
                    echo "F";
                }
                ?>
                </td>
                
          
            </tr>
             


            <tr>
                <td><?=
                   $studentNumber['math'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['mfullmark']; ?></td>

                <td align="center" style="background: white;color: #3926ee"><?=
                   $studentNumber['mw'];
                    ?>
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                </td>

                <td  align="center" style="background: white;color: #3926ee">
                     <?=
                    $studentNumber['mw'];
                    ?>
                        
                </td>
                         
                <td rowspan="" align="center">
                     <?=
                    $mw;
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $studentNumber['mfullmark'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $mg = $studentNumber['mg'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php

                if($mg == 5 ){
                    echo 'A+';
                }
                elseif ($mg >= 4 && $mg <= 4.99 ){
                    echo "A";
                }
                elseif ($mg >= 3.5 && $mg <= 3.99 ){
                    echo "A-";
                }
                elseif ($mg >= 3.0 && $mg <= 3.49 ){
                    echo "B";
                }
                elseif ($mg >= 2 && $mg <= 2.99 ){
                    echo "C";
                }
                elseif ($mg >= 1 && $mg <= 1.99 ){
                    echo "D";
                }
                else {
                    echo "F";
                }
                ?>
                </td>
                
          
            </tr>


            <tr>
                <td><?=
                   $studentNumber['hmath'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['hfullmark']; ?></td>

                <td align="center" style="background: white;color: #3926ee"><?=
                   $studentNumber['hmw'];
                    ?>
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                </td>

                <td  align="center" style="background: white;color: #3926ee">
                     <?=
                    $studentNumber['hmw'];
                    ?>
                        
                </td>
                         
                <td rowspan="" align="center">
                     <?=
                    $hmw;
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $studentNumber['hfullmark'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $hmg = $studentNumber['hmg'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php

                if($hmg == 5 ){
                    echo 'A+';
                }
                elseif ($hmg >= 4 && $hmg <= 4.99 ){
                    echo "A";
                }
                elseif ($hmg >= 3.5 && $hmg <= 3.99 ){
                    echo "A-";
                }
                elseif ($hmg >= 3.0 && $hmg <= 3.49 ){
                    echo "B";
                }
                elseif ($hmg >= 2 && $hmg <= 2.99 ){
                    echo "C";
                }
                elseif ($hmg >= 1 && $hmg <= 1.99 ){
                    echo "D";
                }
                else {
                    echo "F";
                }
                ?>
                </td>
                
          
            </tr>



            <tr>
                <td><?=
                   $studentNumber['physics'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['pfullmark']; ?></td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['pw'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['pm'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                    <?=
                   $studentNumber['pp'];
                ?>
                </td>

                <td  align="center" style="background: white;color: #3926ee">
                     <?=
                    $studentNumber['pt'];
                    ?>
                        
                </td>
                         
                <td rowspan="" align="center">
                     <?=
                    $pt;
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $studentNumber['pfullmark'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $pg = $studentNumber['pg'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php

                if($pg == 5 ){
                    echo 'A+';
                }
                elseif ($pg >= 4 && $pg <= 4.99 ){
                    echo "A";
                }
                elseif ($pg >= 3.5 && $pg <= 3.99 ){
                    echo "A-";
                }
                elseif ($pg >= 3.0 && $pg <= 3.49 ){
                    echo "B";
                }
                elseif ($pg >= 2 && $pg <= 2.99 ){
                    echo "C";
                }
                elseif ($pg >= 1 && $pg <= 1.99 ){
                    echo "D";
                }
                else {
                    echo "F";
                }
                ?>
                </td>
                
          
            </tr>             



            <tr>
                <td><?=
                   $studentNumber['chemistry'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['cfullmark']; ?></td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['cw'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['cm'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                   <?=
                   $studentNumber['cp'];
                ?>
                </td>

                <td  align="center" style="background: white;color: #3926ee">
                     <?=
                    $studentNumber['ct'];
                    ?>
                        
                </td>
                         
                <td rowspan="" align="center">
                     <?=
                    $ct;
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $studentNumber['cfullmark'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $cg = $studentNumber['cg'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php

                if($cg == 5 ){
                    echo 'A+';
                }
                elseif ($cg >= 4 && $cg <= 4.99 ){
                    echo "A";
                }
                elseif ($cg >= 3.5 && $cg <= 3.99 ){
                    echo "A-";
                }
                elseif ($cg >= 3.0 && $cg <= 3.49 ){
                    echo "B";
                }
                elseif ($cg >= 2 && $cg <= 2.99 ){
                    echo "C";
                }
                elseif ($cg >= 1 && $cg <= 1.99 ){
                    echo "D";
                }
                else {
                    echo "F";
                }
                ?>
                </td>
                
          
            </tr>             


            <tr>
                <td><?=
                   $studentNumber['biology'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['bfullmark']; ?></td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['bw'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['bm'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                   <?=
                   $studentNumber['bp'];
                ?>
                </td>

                <td  align="center" style="background: white;color: #3926ee">
                     <?=
                    $studentNumber['bt'];
                    ?>
                        
                </td>
                         
                <td rowspan="" align="center">
                     <?=
                    $bt;
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $studentNumber['bfullmark'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $bg = $studentNumber['bg'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php

                if($bg == 5 ){
                    echo 'A+';
                }
                elseif ($bg >= 4 && $bg <= 4.99 ){
                    echo "A";
                }
                elseif ($bg >= 3.5 && $bg <= 3.99 ){
                    echo "A-";
                }
                elseif ($bg >= 3.0 && $bg <= 3.49 ){
                    echo "B";
                }
                elseif ($bg >= 2 && $bg <= 2.99 ){
                    echo "C";
                }
                elseif ($bg >= 1 && $bg <= 1.99 ){
                    echo "D";
                }
                else {
                    echo "F";
                }
                ?>
                </td>
                
          
            </tr>             


            <tr>
                <td><?=
                   $studentNumber['science'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['sfullmark']; ?></td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['sw'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['sm'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                <?=
                   $studentNumber['sp'];
                ?>
                </td>

                <td  align="center" style="background: white;color: #3926ee">
                     <?=
                    $studentNumber['st'];
                    ?>
                        
                </td>
                         
                <td rowspan="" align="center">
                     <?=
                    $st;
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $studentNumber['sfullmark'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $sg = $studentNumber['sg'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php

                if($sg == 5 ){
                    echo 'A+';
                }
                elseif ($sg >= 4 && $sg <= 4.99 ){
                    echo "A";
                }
                elseif ($sg >= 3.5 && $sg <= 3.99 ){
                    echo "A-";
                }
                elseif ($sg >= 3.0 && $sg <= 3.49 ){
                    echo "B";
                }
                elseif ($sg >= 2 && $sg <= 2.99 ){
                    echo "C";
                }
                elseif ($sg >= 1 && $sg <= 1.99 ){
                    echo "D";
                }
                else {
                    echo "F";
                }
                ?>
                </td>
                
          
            </tr>
             



            <tr>
                <td><?=
                   $studentNumber['agriculture'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['agfullmark']; ?></td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['agw'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['agm'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                 
                </td>

                <td  align="center" style="background: white;color: #3926ee">
                     <?=
                    $studentNumber['agt'];
                    ?>
                        
                </td>
                         
                <td rowspan="" align="center">
                     <?=
                     //maximum number in this subject...
                    $agt;
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $studentNumber['agfullmark'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $agg = $studentNumber['agg'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php

                if($agg == 5 ){
                    echo 'A+';
                }
                elseif ($agg >= 4 && $agg <= 4.99 ){
                    echo "A";
                }
                elseif ($agg >= 3.5 && $agg <= 3.99 ){
                    echo "A-";
                }
                elseif ($agg >= 3.0 && $agg <= 3.49 ){
                    echo "B";
                }
                elseif ($agg >= 2 && $agg <= 2.99 ){
                    echo "C";
                }
                elseif ($agg >= 1 && $agg <= 1.99 ){
                    echo "D";
                }
                else {
                    echo "F";
                }
                ?>
                </td>
                
          
            </tr>
             


            <tr>
                <td><?=
                   $studentNumber['religion'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['refullmark']; ?></td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['rw'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['rm'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                 
                </td>

                <td  align="center" style="background: white;color: #3926ee">
                     <?=
                    $studentNumber['rt'];
                    ?>
                        
                </td>
                         
                <td rowspan="" align="center">
                     <?=
                     //maximum number in this subject...
                    $rt;
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $studentNumber['refullmark'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $rg = $studentNumber['rg'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php

                if($rg == 5 ){
                    echo 'A+';
                }
                elseif ($rg >= 4 && $rg <= 4.99 ){
                    echo "A";
                }
                elseif ($rg >= 3.5 && $rg <= 3.99 ){
                    echo "A-";
                }
                elseif ($rg >= 3.0 && $rg <= 3.49 ){
                    echo "B";
                }
                elseif ($rg >= 2 && $rg <= 2.99 ){
                    echo "C";
                }
                elseif ($rg >= 1 && $rg <= 1.99 ){
                    echo "D";
                }
                else {
                    echo "F";
                }
                ?>
                </td>
                
          
            </tr>
             

             


            <tr>
                <td><?=
                   $studentNumber['banint'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['bifullmark']; ?></td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['biw'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['bim'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                 
                </td>

                <td  align="center" style="background: white;color: #3926ee">
                     <?=
                    $studentNumber['bit'];
                    ?>
                        
                </td>
                         
                <td rowspan="" align="center">
                     <?=
                     //maximum number in this subject...
                    $bit;
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $studentNumber['bifullmark'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $big = $studentNumber['big'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php

                if($big == 5 ){
                    echo 'A+';
                }
                elseif ($big >= 4 && $big <= 4.99 ){
                    echo "A";
                }
                elseif ($big >= 3.5 && $big <= 3.99 ){
                    echo "A-";
                }
                elseif ($big >= 3.0 && $big <= 3.49 ){
                    echo "B";
                }
                elseif ($big >= 2 && $big <= 2.99 ){
                    echo "C";
                }
                elseif ($big >= 1 && $big <= 1.99 ){
                    echo "D";
                }
                else {
                    echo "F";
                }
                ?>
                </td>
                
          
            </tr>




            <tr>
                <td><?=
                   $studentNumber['ict'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['ictfullmark']; ?></td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['iw'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['im'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                 <?=
                   $studentNumber['ip'];
                ?>
                </td>

                <td  align="center" style="background: white;color: #3926ee">
                     <?=
                    $studentNumber['it'];
                    ?>
                        
                </td>
                         
                <td rowspan="" align="center">
                     <?=
                     //maximum number in this subject...
                    $it;
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $studentNumber['ictfullmark'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $ig = $studentNumber['ig'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php

                if($ig == 5 ){
                    echo 'A+';
                }
                elseif ($ig >= 4 && $ig <= 4.99 ){
                    echo "A";
                }
                elseif ($ig >= 3.5 && $ig <= 3.99 ){
                    echo "A-";
                }
                elseif ($ig >= 3.0 && $ig <= 3.49 ){
                    echo "B";
                }
                elseif ($ig >= 2 && $ig <= 2.99 ){
                    echo "C";
                }
                elseif ($ig >= 1 && $ig <= 1.99 ){
                    echo "D";
                }
                else {
                    echo "F";
                }
                ?>
                </td>
                
          
            </tr>



            <tr>
                <td><?=
                   $studentNumber['dms'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['dmsfullmark']; ?></td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['dw'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['dm'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                 <?=
                   $studentNumber['dp'];
                ?>
                </td>

                <td  align="center" style="background: white;color: #3926ee">
                     <?=
                    $studentNumber['dt'];
                    ?>
                        
                </td>
                         
                <td rowspan="" align="center">
                     <?=
                     //maximum number in this subject...
                    $dt;
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $studentNumber['dmsfullmark'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $dg = $studentNumber['dg'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php

                if($dg == 5 ){
                    echo 'A+';
                }
                elseif ($dg >= 4 && $dg <= 4.99 ){
                    echo "A";
                }
                elseif ($dg >= 3.5 && $dg <= 3.99 ){
                    echo "A-";
                }
                elseif ($dg >= 3.0 && $dg <= 3.49 ){
                    echo "B";
                }
                elseif ($dg >= 2 && $dg <= 2.99 ){
                    echo "C";
                }
                elseif ($dg >= 1 && $dg <= 1.99 ){
                    echo "D";
                }
                else {
                    echo "F";
                }
                ?>
                </td>
                
          
            </tr>




            <tr>
                <td><?=
                   $studentNumber['sports'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['spfullmark']; ?></td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['spw'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['spm'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                 <?=
                   $studentNumber['spp'];
                ?>
                </td>

                <td  align="center" style="background: white;color: #3926ee">
                     <?=
                    $studentNumber['spt'];
                    ?>
                        
                </td>
                         
                <td rowspan="" align="center">
                     <?=
                     //maximum number in this subject...
                    $spt;
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $studentNumber['spfullmark'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $spg = $studentNumber['spg'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php

                if($spg == 5 ){
                    echo 'A+';
                }
                elseif ($spg >= 4 && $spg <= 4.99 ){
                    echo "A";
                }
                elseif ($spg >= 3.5 && $spg <= 3.99 ){
                    echo "A-";
                }
                elseif ($spg >= 3.0 && $spg <= 3.49 ){
                    echo "B";
                }
                elseif ($spg >= 2 && $spg <= 2.99 ){
                    echo "C";
                }
                elseif ($spg >= 1 && $spg <= 1.99 ){
                    echo "D";
                }
                else {
                    echo "F";
                }
                ?>
                </td>
                
          
            </tr>




            <tr>
                <td><?=
                   $studentNumber['wl'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['wlfullmark']; ?></td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['wlw'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['wlm'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                 <?=
                   $studentNumber['wlp'];
                ?>
                </td>

                <td  align="center" style="background: white;color: #3926ee">
                     <?=
                    $studentNumber['wlt'];
                    ?>
                        
                </td>
                         
                <td rowspan="" align="center">
                     <?=
                     //maximum number in this subject...
                    $wlt;
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $studentNumber['wlfullmark'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $wlg = $studentNumber['wlg'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php

                if($wlg == 5 ){
                    echo 'A+';
                }
                elseif ($wlg >= 4 && $wlg <= 4.99 ){
                    echo "A";
                }
                elseif ($wlg >= 3.5 && $wlg <= 3.99 ){
                    echo "A-";
                }
                elseif ($wlg >= 3.0 && $wlg <= 3.49 ){
                    echo "B";
                }
                elseif ($wlg >= 2 && $wlg <= 2.99 ){
                    echo "C";
                }
                elseif ($wlg >= 1 && $wlg <= 1.99 ){
                    echo "D";
                }
                else {
                    echo "F";
                }
                ?>
                </td>
                
          
            </tr>




            <tr>
                <td><?=
                   $studentNumber['arts'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['artsfullmark']; ?></td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['aw'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['am'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                 <?=
                   $studentNumber['ap'];
                ?>
                </td>

                <td  align="center" style="background: white;color: #3926ee">
                     <?=
                    $studentNumber['at'];
                    ?>
                        
                </td>
                         
                <td rowspan="" align="center">
                     <?=
                     //maximum number in this subject...
                    $at;
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $studentNumber['artsfullmark'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $ag = $studentNumber['ag'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php

                if($ag == 5 ){
                    echo 'A+';
                }
                elseif ($ag >= 4 && $ag <= 4.99 ){
                    echo "A";
                }
                elseif ($ag >= 3.5 && $ag <= 3.99 ){
                    echo "A-";
                }
                elseif ($ag >= 3.0 && $ag <= 3.49 ){
                    echo "B";
                }
                elseif ($ag >= 2 && $ag <= 2.99 ){
                    echo "C";
                }
                elseif ($ag >= 1 && $ag <= 1.99 ){
                    echo "D";
                }
                else {
                    echo "F";
                }
                ?>
                </td>
                
          
            </tr>



             

  
            
             

<!-- 
            <tr>
                <td><?=
                   'asd';
                    ?>
                </td>
                <td align="center"><?= 'asd'; ?></td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    'asd';
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    'asd';
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    'asd';
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee">
                    <?=
                    'asd';

                    ?>                        
                </td>

                <td align="center" style="background: white;color: #3926ee">100</td>
                <td align="center">100</td>
                <td align="center">9</td>
                <td align="center">10</td>
               <td align="center">11</td> switch case use here... 

            </tr>
 -->
          




        <tr>
            <td colspan="5" style="text-align: right">  সর্বমোট প্রাপ্ত  নাম্বার &nbsp;&nbsp;
            </td>
            <td style="text-align: center; background: #56ABEE">
                
            <?= $totalmark; ?>
                 
            </td>
            <td style="text-align: center;">
                 <?=
                     "সর্বাধিক প্রাপ্ত নম্বর : ".$max;
                  ?>
            </td>

            <td></td>
             
             
            <td   style="text-align: center; background: #56ABEE">   
                
                <?php
                 if($gpa){
                echo "গ্রেড পয়েন্ট = ".$gpa;
                ?> 
            </td>
            <td style="text-align: center; background: #56ABEE">লেটার গ্রেড =   
                <?php

                if($gpa == 5 ){
                    echo 'A+';
                }
                elseif ($gpa >= 4 && $gpa <= 4.99 ){
                    echo "A";
                }
                elseif ($gpa >= 3.5 && $gpa <= 3.99 ){
                    echo "A-";
                }
                elseif ($gpa >= 3.0 && $gpa <= 3.49 ){
                    echo "B";
                }
                elseif ($gpa >= 2.5 && $gpa <= 2.99 ){
                    echo "C";
                }
                elseif ($gpa >= 1 && $gpa <= 1.99 ){
                    echo "D";
                }
                else {
                    echo '<p style="color: red"> F </p>';
                }
                ?>
            </td>

             <td colspan="2" style="text-align: center; background: #56ABEE">   
                
                <?php
                
                echo "Pass ";
                ?> 
            </td>

        </tr>

        <tr>
            <?php  } else{  
                $_SESSION['delete'] = "Student ID or Exam name does not match !!!";
                //header('location=meritmarksheet.php');
                echo "<script>window.location='meritmarksheet.php'</script>";
                // <h3 style="color: red;">Student id or Exam name does not match!</h3>
           } ?>
        </tr>

        <tr style="background: #56ABEE;">
        	<th style="background: #56ABEE;">গ্রেড পয়েন্ট :</th>
        	<td style="text-align: center;"><?= $gpa; ?></td>
        </tr>

        <tr style="background: #56ABEE;">
            <th style="background: #56ABEE;">লেটার গ্রেড   :</th>
            <td style="text-align: center;">
                <?php

                if($gpa == 5 ){
                    echo 'A+';
                }
                elseif ($gpa >= 4 && $gpa <= 4.99 ){
                    echo "A";
                }
                elseif ($gpa >= 3.5 && $gpa <= 3.99 ){
                    echo "A-";
                }
                elseif ($gpa >= 3.0 && $gpa <= 3.49 ){
                    echo "B";
                }
                elseif ($gpa >= 2.5 && $gpa <= 2.99 ){
                    echo "C";
                }
                elseif ($gpa >= 1 && $gpa <= 1.99 ){
                    echo "D";
                }
                else {
                    echo '<p style="color: red"> F </p>';
                }
                ?>
            </td>
        </tr>

        <tr style="background: #56ABEE;">
            <th style="background: #56ABEE;">ফলাফল  :</th>
            <td style="text-align: center"><?php
                if ($gpa == 5){
                    echo "Pass : Outstanding ";
                }
                elseif ($gpa >= 4.5 && $gpa <= 4.99 ){
                    echo "Pass : Excellent Result!";
                }
                elseif ($gpa >= 4 && $gpa <= 4.49 ){
                    echo "Pass : Good Result! ";
                }
                elseif ($gpa >= 3.5 && $gpa <= 3.99 ){
                    echo "Pass : Good ";
                }
                elseif ($gpa >= 3 && $gpa <= 3.49 ){
                    echo "Pass : Need To Improve! ";
                }
                elseif ($gpa >= 2 && $gpa <= 2.99 ){
                    echo "Pass :Under Average, Need To Improve! ";
                }
                elseif ($gpa >= 1 && $gpa <= 1.99 ){
                    echo "Pass :Under Average, Need To Improve! Father signature with marksheet  ";
                }
                else {
                    echo '<p style="color: red"> Fail </p>';

                }

                ?></td>
        </tr>



    </table>
        <br />
  </div>   <!-- 
  </body>
</html> -->
<a href="javascript:void(0);" id="print_button1" style="width: 120px; padding: 5px 8px 5px 8px;text-align: center;float: left;background-color: #02A6D8;color: #fff;text-decoration: none; margin: 10px;" onclick="printPageArea('wrapper')">Print Marksheet</a>
    <?php  include '../../includes/footer.php' ?>
