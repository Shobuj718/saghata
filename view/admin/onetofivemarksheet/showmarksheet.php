<?php include_once'../includes/header.php'; ?>

<?php 

if(!isset($_SESSION)){
    session_start();
}
// echo "<pre>";
// var_dump($_POST);
// die();

//error_reporting(0);

include_once '../../../vendor/autoload.php' ;

use App\admin\Onetofive\Onetofive;
use App\admin\student\Student;

$onetofive = new Onetofive();
$student   = new Student();


$class      = trim(htmlspecialchars($_POST['class']));
$shift      = trim(htmlspecialchars($_POST['shift']));
$branch     = trim(htmlspecialchars($_POST['branch']));
$term       = trim(htmlspecialchars($_POST['term']));
$year       = trim(htmlspecialchars($_POST['year']));
$student_id = trim(htmlspecialchars($_POST['student_id']));
 $studentNumber = $onetofive->studentNumberSelect($student_id);
 $studentData    = $student->selectAllData($student_id);
// echo "<pre>";
// var_dump($studentNumber);

$result = $onetofive->selectOneToFiveMark($class, $shift, $branch, $term, $year);
// echo "<pre>";
// var_dump($result);
$singgpatotal = $onetofive->selectSingleGpaTotal($class, $term, $year, $student_id);
// echo "<pre>";
// var_dump($singgpatotal);
 

 foreach ($singgpatotal as $singlemerit) {
    $singlemeritposition = $singlemerit;
    //echo "this is a current student  totalmark and gpa summation = ".$singlemeritposition."<br>";
}

//var_dump($result);
//die();

// $class = $studentNumber['class'];
// $shift = $studentNumber['shift'];
// $branch = $studentNumber['branch'];
// $student_id = $studentNumber['student_id'];

$totalnum = $studentNumber['gpa'];
// $totalnum = number_format($totalnum, 2);

$gpa      = $studentNumber['gpa'];
$gpa = number_format($gpa, 2);

$totalSub = $studentNumber['totalSub'];
$totalmark = $studentNumber['totalmark'];

//echo "All student number in this class = ";
foreach ($result as $data) {

    //echo  $data['totalmark']." ";
    $mark[] = $data['totalmark'];

    $bw[] = $data['bw'];
    $ew[] = $data['ew'];
    $mw[] = $data['mw'];
    $sw[] = $data['sw'];
    $biw[] = $data['biw'];
    $rw[] = $data['rw'];

    $gpt[] = $data['totalmark'];
    $gptt[]  = $data['gpa'];
 }


 $c = array();
foreach (array_keys($gpt + $gptt) as $key) {
    $c[$key] = $gpt[$key] + $gptt[$key];
}

 //after sor for Ascending 
 //echo " <hr>Total number and GPA summation = ";
rsort($c);
// foreach ($c as $gpatotalmark) {
//      echo $gpatotalmark."<br />";
//  }
 
 $total2 = floatval($singlemeritposition);

 for($i = 0; $i<count($c); $i++){
    $merit2 = $i;

    if($total2 == $c[$i]){
        $merit2 += 1;
        
        $maxNum = max($c);
        $minNum = min($c);
         
        // echo "Your merit position is(".$total2.") : ".$merit2."<br />";
        // echo "Your GPA is : ".$gpa."<br />";
        // echo "Your Total Mark is : ".$totalmark."<br />";
         break;
    }
    
 }



 //echo "<hr>";
rsort($bw);
$bw = max($bw);
//echo "Bangla maximum number is : ".$b1t."<br />";

rsort($ew);
$ew = max($ew);

rsort($mw);
$mw = max($mw);

rsort($sw);
$sw = max($sw);

rsort($rw);
$rw = max($rw);

rsort($biw);
$biw = max($biw);

//echo "<hr>";
 rsort($mark); 
$maxTotalNumber = max($mark);
$minTotalNumber = min($mark);



?>
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Student Marksheet</title>
</head>
<body onload="window.print();"> -->

 <!-- <body> -->


<div class="col-md-12" id="wrapper" style="background: white;margin-top: ;">

    <div class="container" >
        <div class="row" >
            <div class="col-md-12" style="background: white;">

            <?php echo "<hr/>"; ?>
            
            <h3 style="text-align:center;color:green;">প্লে থেকে ৫ম শ্রেণীর  শিক্ষার্থীর মার্কশীট</h3>

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
                   $studentNumber['bangla'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['fullmark']; ?></td>
                <td align="center" style="background: white;color: #3926ee"><?=
                   $studentNumber['bw'];
                    ?>
                </td>
                
                         
                <td rowspan="" align="center">
                     <?=
                    $bw;
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $studentNumber['fullmark'];
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
                    echo 'F';
                }
                ?>
                </td>
                <td rowspan="6" align="center">

                <?php 

            // Here GPA and Total Number summation and compare all number for merit position
                            $total2 = number_format($total2, 2);
                            echo "Your Merit <br> Position(".$totalmark.") = ".$merit2."<br />";
                            echo "Your GPA = ".$gpa."<br />";
                            echo "<br>";
                            
                ?>

                </td>
          
            </tr>


            <tr>
                <td><?=
                   $studentNumber['english'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['enfullmark']; ?></td>
                <td align="center" style="background: white;color: #3926ee"><?=
                   $studentNumber['ew'];
                    ?>
                </td>

                
                         
                <td rowspan="" align="center">
                     <?=
                    $ew;
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $studentNumber['enfullmark'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?=
                    $eg = $studentNumber['eg'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php

                if($eg == 5 ){
                    echo 'A+';
                }
                elseif ($eg >= 4 && $eg <= 4.99 ){
                    echo "A";
                }
                elseif ($eg >= 3.5 && $eg <= 3.99 ){
                    echo "A-";
                }
                elseif ($eg >= 3.0 && $eg <= 3.49 ){
                    echo "B";
                }
                elseif ($eg >= 2 && $eg <= 2.99 ){
                    echo "C";
                }
                elseif ($eg >= 1 && $eg <= 1.99 ){
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
                   $studentNumber['math'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['mfullmark']; ?></td>

                <td align="center" style="background: white;color: #3926ee"><?=
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
                   $studentNumber['science'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['sfullmark']; ?></td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['sw'];
                ?>
                </td>

                
                         
                <td rowspan="" align="center">
                     <?=
                    $sw;
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
                   $studentNumber['religion'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['refullmark']; ?></td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['rw'];
                ?>
                </td>

                
                         
                <td rowspan="" align="center">
                     <?=
                     //maximum number in this subject...
                    $rw;
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

                
                         
                <td rowspan="" align="center">
                     <?=
                     //maximum number in this subject...
                    $biw;
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
            <td colspan="2" style="text-align: right">  সর্বমোট প্রাপ্ত  নাম্বার &nbsp;&nbsp;
            </td>
            <td style="text-align: center; background: #56ABEE">
                
            <?= $totalmark; ?>
                 
            </td>
            <td style="text-align: center;">
                 <?=
                     "সর্বাধিক প্রাপ্ত নম্বর : ".$maxTotalNumber;
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
  </div>   
 <a href="javascript:void(0);" id="print_button1" style="width: 120px; padding: 5px 8px 5px 8px;text-align: center;float: left;background-color: #02A6D8;color: #fff;text-decoration: none; margin: 10px;" onclick="printPageArea('wrapper')">Print Marksheet</a>
    <?php  include '../includes/footer.php' ?>
