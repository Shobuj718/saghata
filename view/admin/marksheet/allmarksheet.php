<?php include_once'../includes/header.php'; ?>



<a href="javascript:void(0);" id="print_button2" style="width: 130px; padding: 5px 8px 5px 8px;text-align: center;float: right;background-color: #02A6D8;color: #fff;text-decoration: none; margin: 10px;" onclick="printPageArea('content')">Print Marksheet</a>
<div class="col-md-12" id="content" style="background: white;margin-top: ;">

   
 <br>
 
<!--  <h3 style="text-align:center;color:green;">শিক্ষার্থীদের মার্কশীট (<?php echo $_POST['class']; ?> শ্রেণী )</h3>
 -->

<?php 

if(!isset($_SESSION)){
    session_start();
}

error_reporting(0);

include_once '../../../vendor/autoload.php' ;

//use App\Admin\Marksheet\Allmarkstore();

$marksheet = new App\admin\Marksheet\Allmarkstore();
$student   = new App\admin\student\Student();


$class      = trim(htmlspecialchars($_POST['class']));
$term       = trim(htmlspecialchars($_POST['term']));
$year       = trim(htmlspecialchars($_POST['year']));

$allmark = $marksheet->allmarksheet($class, $term, $year);
//$result = $marksheet->Allgpa($class, $shift, $branch, $department, $term, $year );

//echo "All student number in this class = ";
    foreach ($allmark as $data) {
        //echo  $data['totalmark']." ";
        $mark[] = $data['totalmark'];
        $b1t[] = $data['b1t'];
        $b2t[] = $data['b2t'];
        $e1w[] = $data['e1w'];
        $e2w[] = $data['e2w'];
        $mw[] = $data['mw'];
        $st[] = $data['st'];
        $sst[] = $data['sst'];
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

    //echo "<hr>";
    rsort($mark); 
    $max = max($mark);

        
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

    rsort($sst);
    $sst = max($sst);
    //echo "Social Science maximum number is : ".$sst."<br />";


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

    // // for Physics Subject
    // rsort($pt);
    // $pt = max($pt);
    // echo "Physics maximum number is : ".$pt."<br />";

    // //for Chemistry Subject
    // rsort($ct);
    // $ct = max($ct);
    // echo "Chemistry maximum number is : ".$ct."<br />";

    // //for Biology Subject
    // rsort($bt);
    // $bt = max($bt);
    // echo "Biology maximum number is : ".$bt."<br />";

    // // for Higher math
    // rsort($ht);
    // $ht = max($ht);
    // echo "Higher Math maximum number is : ".$ht."<br />";

    // //for agriculture
    // rsort($ag);
    // $ag = max($ag);
    // echo "Agriculture maximum number is : ".$ag."<br />";

        
//generate new class roll
    $i= 1;

foreach($allmark as $studentNumber){
    $class = $studentNumber['class'];
    $shift = $studentNumber['shift'];
    $branch = $studentNumber['branch'];
    $department = $studentNumber['department'];
    $student_id = $studentNumber['student_id'];
    $totalnum   = $studentNumber['gpa'];
    $sub = $studentNumber['bangla1'];


    $gpa      = $studentNumber['gpa'];
    $gpa = number_format($gpa, 2);

    $totalSub   = $studentNumber['totalSub'];
    $totalmark  = $studentNumber['totalmark'];

    //echo $student_id.' ';
    
    foreach($student_id as $value){
        $student_id = $value;
        //echo $student_id;
    }
    $studentData    = $student->selectAllData($student_id);

    
?>

    <div class="container" >
        <div class="row" >
            <div class="col-md-12" style="background: white;">

            

    
             <h3 style="text-align:center;color:green;">সাঘাটা পাইলট উচ্চ বিদ্যালয়</h3>
            <h4 style="text-align:center;color:green;">শিক্ষার্থীদের মার্কশীট ( <?php echo $_POST['class']; ?> শ্রেণী )</h4>
            <p style="text-align:center;">ডাকঘরঃ সাঘাটা, উপজেলাঃ সাঘাটা, জেলাঃ গাইবান্ধা । 
           <br>ইমেইলঃ example@gmail.com
            <br> মোবাইলঃ 01716307510 
            </p>

            <div class="col-md-6" style="background: ; margin-top: 5px;">
            
                <div class="row">
                         
                    <div class="col-md-6">
                        <div class="form-group">
                            শিক্ষার্থীর নাম &nbsp;: &nbsp; <?= $studentData['student_name'] ?> <br>  
                            পিতার নাম &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;<?= $studentData['father_name'] ?> <br>
                            মাতার নাম &nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; <?= $studentData['mother_name'] ?> <br>
                            পরীক্ষার নাম &nbsp; : &nbsp;&nbsp;<?= $term ?> <br>
                            শ্রেণী &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp; <?= $class; ?> <br>
                            রোল &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp; <?= $i++; ?> <br>
                            শ্রেণী রোল&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp; <?= $studentData['mother_name'] ?> <br>
                           
                            আইডি &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; <?= $studentData['student_id'] ?> <br>
                            সর্বমোট বিষয় : &nbsp;<?= $studentNumber['totalSub']; ?> <br>
                         </div>
                    </div> 
                     
                </div>   
            </div> 
           
           
            </div>
            </div>
        </div>

    <table border="1" align="center" width="100%" style="background: white; font-size: 12px">

 
        <tr>
            <td colspan="10" align="center" style="background: #56ABEE;">মার্কসশীট</td>
        </tr>


        <tr>
            <td align="center" class="size6">কোড</td>
            <td align="center" class="size6">বিষয়</td>
            <td align="center" class="size6">পূর্ণ  নম্বর </td>
            <td align="center" class="size6">লিখিত নম্বর </td>
            <td align="center" class="size6">এম সি কিউ নম্বর </td>
            <td align="center" class="size6">প্রাকটিক্যাল নম্বর </td>
            <td align="center" class="size6">প্রাপ্ত  নম্বর </td>
            <td align="center" class="size6"> সর্বাধিক প্রাপ্ত নম্বর</td>
            <td align="center" class="size6">গ্রেড পয়েন্ট </td>
            <td align="center" class="size6">লেটার গ্রেড</td>
        </tr>

        
        
        
 
            <tr>
                <td align="center">১০১</td>
                <td><?=
                   $data['bangla1'];
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
                
          
            </tr>


 
            <tr>
                <td align="center">১০২</td>
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
                <td align="center">১০৭</td>
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
                <td align="center">১০৮</td>
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
                <td align="center">১০৯</td>
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
                <td align="center">১২৭</td>
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
                <td align="center">১৩৪</td>
                <td><?=
                   $studentNumber['social_science'];
                    ?>
                </td>
                <td align="center"><?= $studentNumber['ssfullmark']; ?></td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['ssw'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee">
                <?=
                   $studentNumber['ssm'];
                ?>
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                 
                </td>

                <td  align="center" style="background: white;color: #3926ee">
                     <?=
                    $studentNumber['sst'];
                    ?>
                        
                </td>
                         
                <td rowspan="" align="center">
                     <?=
                    $sst;
                    ?>
                </td>
                
                <td rowspan="" align="center">
                    <?=
                    $ssg = $studentNumber['ssg'];
                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php

                if($ssg == 5 ){
                    echo 'A+';
                }
                elseif ($ssg >= 4 && $ssg <= 4.99 ){
                    echo "A";
                }
                elseif ($ssg >= 3.5 && $ssg <= 3.99 ){
                    echo "A-";
                }
                elseif ($ssg >= 3.0 && $ssg <= 3.49 ){
                    echo "B";
                }
                elseif ($ssg >= 2 && $ssg <= 2.99 ){
                    echo "C";
                }
                elseif ($ssg >= 1 && $ssg <= 1.99 ){
                    echo "D";
                }
                else {
                    echo "F";
                }
                ?>
                </td>
                
          
            </tr>





            <tr>
                <td align="center">১১১</td>
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
                <td align="center">১৫০</td>
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
                <td align="center">১৫৪</td>
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
                <td align="center">0</td>
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
                <td align="center">১৪৭</td>
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
                <td align="center">১৫৫</td>
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
                <td align="center">১৪৮</td>
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


        <tr>
            <td colspan="6" style="text-align: right">  সর্বমোট প্রাপ্ত  নাম্বার &nbsp;&nbsp;
            </td>
            <td style="text-align: center; background: #56ABEE">
                
            <?= $totalmark; ?>
                 
            </td>
            <td style="text-align: center;">
                 <?=
                     "সর্বাধিক প্রাপ্ত নম্বর : ".$max;
                  ?>
            </td>             
             
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

             
                <?php
                
                //echo "Pass ";
                ?> 

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
        <hr />
        <br />
        <hr />
    <?php  } ?>
  </div>  
  <script>
function printPageArea(areaID){
    var printContent = document.getElementById(areaID);
    var WinPrint = window.open('', '', 'width=900,height=650');
    WinPrint.document.write(printContent.innerHTML);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
}
</script>

    <?php  include '../includes/footer.php' ?>
