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

$stmt= $db->prepare("select * from student_data where student_id = :id");
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
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
            <a href="index.php">Generate Again</a>

            <br />
            <br />

            <table class="tabledesign" border="1">   <!-- 4744c5 -->
                <tr>
                    <td colspan="2" style="background-color:#fff;" rowspan="2"><img src="images/Logo.jpg" width="70" height="60"  img-rounded ></td>

                    <td colspan="4" style="background-color:yellow;color:#000"><strong>ফাঁপোর উচ্চ বিদ্যালয়</strong></td>

                </tr>
                <tr>

                    <td colspan="4" style="font-size:14px;background-color:#fff;color:#000;"> বগুড়া সদর, বগুড়া </td>
                </tr>

                <!-- <tr>
                    <td colspan="6" align="center"> শিক্ষার্থী আইডি</td>

                </tr> -->
                <tr>
                    <td colspan="6" style="background-color:#4744c5;color:#fff;" align="center"><?php  echo "<strong>".$result['student_name']."<strong>"; ?></td>

                </tr>
                <tr>
                    <!-- <td colspan="6" align="center"><img src="uploads/<?php echo $result['student_image']?>" class="img-rounded" width="65" height="60">
                    </td> -->
                    <td colspan="6" style="background-color:#fff;" align="center"><img src="images/bg.jpg" width="70" height="70" class="img-round">
                    </td>

                </tr>
                <!-- <tr>
                    <td colspan="6" align="center"><?= $result['student_name'] ?></td>

                </tr> -->

                <tr>
                    <td width="15"  align="right">শ্রেণীঃ  </td>
                    <td colspan="2" align="left"gn: center">&nbsp;<?= $result['class'] ?></td>

                     <td align="right">রোলঃ  </td>
                    <td colspan="2" align="left">&nbsp;<?= $result['class_roll'] ?></td>
                </tr>
                <tr>
                    <td   align="right">শিফটঃ   </td>
                    <td colspan="2" align="left">&nbsp;<?= $result['shift'] ?></td>
                    <td  align="right">শাখাঃ  </td>
                    <td colspan="2" align="left">&nbsp;<?= $result['branch'] ?></td>
                    
                </tr>
                <tr>
                    <td  align="right">গ্রুপঃ  </td>
                    <td colspan="2" align="left">&nbsp;<?= $result['department'] ?></td>
                   
                    <td align="right">আইডিঃ  </td>
                    <td colspan="2" align="left">&nbsp;<?= $result['student_id'] ?></td>
                </tr>
                <tr>
                    <td align="right">সেশনঃ  </td>
                    <td colspan="2" align="left">&nbsp;<?= '২০১৭' ?></td>
                    <td align="right">রক্তঃ  </td>
                    <td colspan="2" align="left">&nbsp;
                    <?php 
                        if($result['blood_group'] == 'সিলেক্ট করুন'){
                            echo 'জানা নাই';
                        }
                        else{
                            echo $result['blood_group'] ;
                        }

                    ?>
                        
                    </td>
                </tr>

                <tr>
                    <td align="right">পিতাঃ</td>
                    <td colspan="5" align="left">&nbsp;<?= $result['father_name'] ?></td>
                </tr>
                <tr>
                    <td align="right">মাতাঃ</td>
                    <td colspan="5" align="left">&nbsp;<?= $result['mother_name'] ?></td>
                </tr>
                <tr>
                    <td align="right">ইস্যুঃ</td>
                    <td colspan="2" align="left">&nbsp;<?= date('d-m-y'); ?></td>

                    <td align="right">মেয়াদঃ</td>
                    <td colspan="2" align="left">&nbsp;<?= '31-12-19' ?></td>

                </tr>
                <tr>
                    
                    <td colspan="5" style="font-size:15px;" colspan="3" align="right"><img src="images/sign.JPG" class="img-rounded" width="65" height="20" > <br />প্রধান শিক্ষকের স্বাক্ষর</td>

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
                        
                    </td>
                    <tr>
                        <td colspan="6"  align="center">
                            <p style="margin-top: -2px;margin-bottom: -2px;font-size: 10px; background-color:#8000ff;color:#fff;">Ehsan Software: infoehsansoftware@gmail.com</p>
                        </td>
                    </tr>

                </tr>



            </table>



         </div>

                
    </div>

</div>

</body>
</html>


