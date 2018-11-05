<?php

require "vendor/autoload.php";

if (!$_POST['text']) {
    header("location: index.php");
    die();
}

$Bar = new Picqer\Barcode\BarcodeGeneratorHTML();
$code = $Bar->getBarcode($_POST['text'], $Bar::TYPE_CODE_128);
?>


<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 26-Nov-17
 * Time: 9:17 AM
 */

$db = new PDO("mysql:host=localhost;dbname=bangla;charset=utf8;", "root", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$id = $_POST['text'];
//echo $id;
//die();

$stmt= $db->prepare("select * from teacher_data where mobile = :mobile");
$stmt->bindValue(':mobile', $id, PDO::PARAM_STR);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);


// echo $result['student_name'].'<br />';
// echo $result['shift']."<br />";
// echo $result['class']."<br />";
// echo $result['branch']."<br />";
// echo $result['department']."<br />";
// echo $result['father_name']."<br />";
// echo $result['mother_name']."<br />";
// echo $result['blood_group']."<br />";

//die();


?>
<!DOCTYPE html>
<html>
<head>
 <title>Barcode Generate</title>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />

    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

    <style>
        img{
            border-radius: 8px;
        }
       .hd2{
        color: green;

       }
       .tabledesign{
        /*background: rgba(26,255,253,0.65);*/
        background-color: #fff;
        width: 295px;
        text-align: center;
/*        width="260" height="360" style="text-align: center;background: rgba(26,255,253,0.95)"
*/       }
         
    </style>

</head>
<body>

<div class="container">
    <div class="row">
       
   


         <div class="col-md-6 col-md-offset-3">

            <h3 class="hd2">Create Student ID Card with Barcode</h3>

            <br />
            <a href="teacher.php">Generate Again</a>

            <br />
            <br />

            <table class="tabledesign" border="1">
                <tr>
                    <td colspan="2" rowspan="2" style="background-color:;"><img src="images/Monogram.JPG" width="70" height="80"  img-rounded ></td>

                    <td colspan="4" style="background-color:yellow;color:#000;"><strong>সাঘাটা পাইলট উচ্চ বিদ্যালয় </strong><br>www.sphsg.edu.bd<br></td>

                </tr>
                <tr>

                    <td colspan="4" style="font-size:14px;background-color:#fff;color:#000;">   সাঘাটা, গাইবান্ধা।    </td>
                </tr>

                <!-- <tr>
                    <td colspan="6" align="center"> শিক্ষার্থী আইডি</td>

                </tr> -->
                <tr>
                    <td colspan="6" align="center" style="background-color:#4744c5;color:#fff;"><?php  echo "<strong>".$result['teacher_name']."<strong>"; ?>

                </tr>
                <tr>
                    <!-- <td colspan="6" align="center"><img src="uploads/<?php echo $result['student_image']?>" class="img-rounded" width="65" height="60">
                    </td> -->
                   <!-- <td colspan="6" align="center"><img src="images/bg.jpg" width="60" height="55" class="img-round">
                    </td>-->
                    <td colspan="6" align="center" style="background-color:#fff;"><img src="http://localhost/impo/Fapore/view/admin/uploads/teacher/<?= $result['image']; ?>" width="90" height="90" class="img-round">
                    </td>

                </tr>
                <!-- <tr>
                    <td colspan="6" align="center"><?= $result['student_name'] ?></td>

                </tr> -->

                <tr>
                    <td width="15" align="right">পদবী  </td>
                    <td colspan="4" align="left" center">&nbsp;<?= $result['designation'] ?></td>

                    
                </tr>
                <tr>
                     <td align="right">যোগ্যতা  </td>
                    <td colspan="4" align="left">&nbsp;<?= $result['eduquali'] ?></td>
                    
                     
                </tr>
                <tr>
                    <td  align="right">যোগদান  </td>
                    <td colspan="2" align="left">&nbsp;<?= $result['join_date'] ?></td>
                   
                    <td align="right">অবসর  </td>
                    <td colspan="2" align="left">&nbsp;<?= $result['retire_date'] ?></td>
                </tr>
                <tr>
                    <td  align="right">ইনডেক্স   </td>
                    <td colspan="2" align="left">&nbsp;<?= $result['index_number'] ?></td>
                   <td align="right">মোবাইল  </td>
                    <td colspan="2" align="left">&nbsp;<?= $result['mobile']; ?></td>
                    
                    <!-- <td align="right">রক্ত  </td>
                    <td colspan="2" align="left">&nbsp;
                    <?php 
                        if($result['blood'] == 'সিলেক্ট করুন'){
                            echo 'জানা নাই';
                        }
                        else{
                            echo $result['blood'] ;
                        }

                    ?>
                        
                    </td> -->
                </tr>

                <tr>
                    <td align="right">পিতা</td>
                    <td colspan="5" align="left">&nbsp;<?= $result['father_name'] ?></td>
                </tr>
                <tr>
                    <td align="right">মাতা</td>
                    <td colspan="5" align="left">&nbsp;<?= $result['mother_name'] ?></td>
                </tr>
               <tr>
                    <td align="right">ইস্যু</td>
                    <td colspan="2" align="left">&nbsp;<?= date('d-m-y'); ?></td>

                    <td align="right">মেয়াদ</td>
                    <td colspan="2" align="left">&nbsp;<?= '31-12-18' ?></td>

                </tr>
                <tr>
                    
                    <td colspan="6" style="font-size:15px;" align="right"><img src="images/sphsgsign.JPG" class="img-rounded" width="90" height="20" > <br />প্রধান শিক্ষকের স্বাক্ষর</td>

                </tr>

                <tr>
                    <td colspan="6"  align="center">
                    <?php 
                        //echo '<center><div style="height: 30%; width: 50%;">';
//echo '<p>'.bar128(stripcslashes($_POST['generate'])).'</p>';
//echo '</div></center>';
?>
                           <!--  <div id="barcode" >12345678</div> -->
                        
                        <?= $code ?>
                         <!--<?=  $_POST['text'] ?> -->
                    </td>

                </tr>
                
                <!-- <tr>
                    <td colspan="6"  align="center">
                        <p style="margin-top: -2px;margin-bottom: -2px;font-size: 14px; background-color:#065412e6;color:#fff;">Ehsan Software: infoehsansoftware@gmail.com</p>
                    </td>
                </tr>
 -->


            </table>



         </div>

                
    </div>

</div>

</body>
</html>


