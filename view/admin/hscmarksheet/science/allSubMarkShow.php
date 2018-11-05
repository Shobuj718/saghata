<?php //include_once '../includes/header.php'; ?>


<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 25-Nov-17
 * Time: 11:26 AM
 */

error_reporting(0);

 
    include_once '../includes/header.php';
    include_once '../../../vendor/autoload.php';

$marksheet = new App\admin\Marksheet\Allmarkstore();


$id = '1212';
$result = $marksheet->select($id);

echo $result['student_id'];
echo "<pre>";
var_dump($result);

 


// $db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);



// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     $class      = $_POST['class'];
//     $shift      = $_POST['shift'];
//     $branch     = $_POST['branch'];
//     $department = $_POST['department'];
//     $roll       = $_POST['roll'];
//     $term       = $_POST['term'];

   
//     $stmt = $db->prepare("select * from marksheet where roll = '$roll' AND term = '$term' AND class = '$class' AND shift = '$shift' AND branch = '$branch' AND department = '$department' ");
//     //$stmt->bindValue(':roll', '%'. $roll . '%', PDO::PARAM_STR);

//     $stmt->execute();
//     $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//     $stmt2 = $db->prepare("select * from student_data where student_id = '$roll' ");
//     //$stmt->bindValue(':roll', '%'. $roll . '%', PDO::PARAM_STR);

//     $stmt2->execute();
//     $results2 = $stmt2->fetch(PDO::FETCH_ASSOC);
 
// }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Marksheet</title>
</head>
<body>


<div class="col-md-12" style="background: white;margin-top: ;">

    <div class="container" >
        <div class="row" >
            <div class="col-md-12" style="background: white;">

            <h3 style="text-align:center;color:green;">Student Marksheet</h3>
 

            <div class="col-md-6" style="background: white; margin-top: 5px;">
            
                <div class="row">
                         
                    <div class="col-md-6">
                        <div class="form-group">
                            শিক্ষার্থীর নামঃ <?= $result['student_name'] ?> <br>  
                            পিতার নামঃ <?= $result['father_name'] ?> <br>
                            মাতার নামঃ <?= $result['mother_name'] ?> <br>
                            পরীক্ষার নামঃ <?= $result['term'] ?> <br>
                            গ্রুপ / বিভাগঃ <?= $result['department'] ?> <br> 
                            শ্রেণীঃ<?= $result['class'] ?> <br>
                            শিফটঃ <?= $result['branch'] ?> <br>
                            আইডিঃ <?= $result['student_id'] ?> <br>
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
 
                    
    <table border="1" align="center" width="100%" style="background: white; font-size: 12px">

 
        <tr>
            <td colspan="15" align="center" style="background: #56ABEE;">মার্কসশীট</td>
        </tr>

        <tr>
            <td align="center" class="size6">বিষয়</td>
            <td align="center" class="size6">পূর্ণ নাম্বার</td>
            <td align="center" class="size6">লিখিত </td>
            <td align="center" class="size6">এম সি কিউ</td>
            <td align="center" class="size6">প্রাকটিক্যাল</td>
            <td align="center" class="size6">সাব টোটাল</td>
            <!--        <td align="center" class="size6">কনভার্ট</td>-->
            <!--        <td align="center" class="size6">কনভার্টেড  নাম্বার</td>-->
            <!--        <td align="center" class="size6">সি এ</td>-->
            <!--        <td align="center" class="size6">মোট নাম্বার</td>-->
            <!--        <td align="center" class="size6"> সর্বাধিক</td>-->
            <td align="center" class="size6">লেটার গ্রেড</td>
            <td align="center" class="size6">গ্রেড পয়েন্ট </td>
            <!--        <td align="center" class="size6">জি পি </td>-->
            <!--        <td colspan="2" align="center" class="size4">মন্তব্য</td>-->
        </tr>

        <?php
        $total_point = 0;
        $total_number = 0;
        $cq = 0;
        $mcq = 0;
        $practical = 0;
        $sub_number = 0;

        foreach( $results as $result ) {
            $cq = 0;
            if($result['fullmark'] == 100){
                ?>
                <tr>
                <td><?=
                    $result['subject'];
                    $sub_number += 1;
                    ?>
                </td>
                <td align="center"><?= $result['fullmark']; ?></td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    $result['cq'];
                    $cq += $result['cq'];
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    $result['mcq'];
                    $cq += $result['mcq'];
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    $result['practical'];
                    $cq += $result['practical'];
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee">
                    <?=
                    $subtotal = $cq ;//+ $mcq + $practical;
                    $subtotal;
                    $total_number += $subtotal;
                    //$result['subtotal'];
                    //$total_number += $result['subtotal'];

                    ?></td>
                <!--        <td align="center" style="background: white;color: #3926ee">100</td>-->
                <!--        <td align="center">100</td>-->
                <!--        <td align="center">9</td>-->
                <!--        <td align="center">10</td>-->
                <!--        <td align="center">11</td> switch case use here...  -->

                <td rowspan="" align="center">
                    <?php
                    $favcolor = $subtotal;//$result['subtotal'];

                    if($favcolor >= 80 ){
                        echo '5';
                    }
                    elseif ($favcolor >= 70 && $favcolor <= 79 ){
                        echo "A";
                    }
                    elseif ($favcolor >= 60 && $favcolor <= 69 ){
                        echo "A-";
                    }
                    elseif ($favcolor >= 50 && $favcolor <= 59 ){
                        echo "B";
                    }
                    elseif ($favcolor >= 40 && $favcolor <= 49 ){
                        echo "C";
                    }
                    elseif ($favcolor >= 33 && $favcolor <= 39 ){
                        echo "D";
                    }
                    else {
                        echo '<p style="color: red"> F </p>';
                    }

                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php
                    $favcolor = $subtotal;//$result['subtotal'];


                    if($favcolor >= 80 ){
                        $total_point += 5;
                        echo '5';
                    }
                    elseif ($favcolor >= 70 && $favcolor <= 79 ){
                        $total_point += 4;
                        echo "4";
                    }
                    elseif ($favcolor >= 60 && $favcolor <= 69 ){
                        $total_point += 3.5;
                        echo "3.5";
                    }
                    elseif ($favcolor >= 50 && $favcolor <= 59 ){
                        $total_point += 3;
                        echo "3";
                    }
                    elseif ($favcolor >= 40 && $favcolor <= 49 ){
                        $total_point += 2;
                        echo "2";
                    }
                    elseif ($favcolor >= 33 && $favcolor <= 39 ){
                        $total_point += 1;
                        echo "1";
                    }
                    else {
                        $total_point += 0;
                        echo '<p style="color: red"> 0 </p>';
                    }

                    ?>
                </td>
            <?php  } else { ?>


                <tr>
                <td><?=
                    $result['subject'];
                    $sub_number += 1;
                    ?>
                </td>
                <td align="center"><?= $result['fullmark']; ?></td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    $result['cq'];
                    $cq += $result['cq'];
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    $result['mcq'];
                    $cq += $result['mcq'];
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    $result['practical'];
                    $cq += $result['practical'];
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee">
                    <?=
                    $subtotal = $cq ;//+ $mcq + $practical;
                    $subtotal;
                    $total_number += $subtotal;
                    //$result['subtotal'];
                    //$total_number += $result['subtotal'];

                    ?></td>
                <!--        <td align="center" style="background: white;color: #3926ee">100</td>-->
                <!--        <td align="center">100</td>-->
                <!--        <td align="center">9</td>-->
                <!--        <td align="center">10</td>-->
                <!--        <td align="center">11</td> switch case use here...  -->

                <td rowspan="" align="center">
                    <?php
                    $favcolor = $subtotal;//$result['subtotal'];

                    if($favcolor >= 40 ){
                        echo 'A+';
                    }
                    elseif ($favcolor >= 35 && $favcolor <= 39 ){
                        echo "A";
                    }
                    elseif ($favcolor >= 30 && $favcolor <= 34 ){
                        echo "A-";
                    }
                    elseif ($favcolor >= 25 && $favcolor <= 29 ){
                        echo "B";
                    }
                    elseif ($favcolor >= 20 && $favcolor <= 24 ){
                        echo "C";
                    }
                    elseif ($favcolor >= 17 && $favcolor <= 19 ){
                        echo "D";
                    }
                    else {
                        echo '<p style="color: red"> F </p>';
                    }

                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php
                    $favcolor = $subtotal;//$result['subtotal'];


                    if($favcolor >= 40 ){
                        $total_point += 5;
                        echo '5';
                    }
                    elseif ($favcolor >= 35 && $favcolor <= 39 ){
                        $total_point += 4;
                        echo "4";
                    }
                    elseif ($favcolor >= 30 && $favcolor <= 34 ){
                        $total_point += 3.5;
                        echo "3.5";
                    }
                    elseif ($favcolor >= 25 && $favcolor <= 29 ){
                        $total_point += 3;
                        echo "3";
                    }
                    elseif ($favcolor >= 20 && $favcolor <= 24 ){
                        $total_point += 2;
                        echo "2";
                    }
                    elseif ($favcolor >= 17 && $favcolor <= 19 ){
                        $total_point += 1;
                        echo "1";
                    }
                    else {
                        $total_point += 0;
                        echo '<p style="color: red"> 0 </p>';
                    }

                    ?>
                </td>

            <?php  } ?>
            <!--        <td rowspan="2" align="center">4</td>-->
            <!--        <td colspan="2" rowspan="20" align="center">pass</td>-->

            </tr>

            <?php
        }
        ?>




        <tr>
            <td colspan="5" style="text-align: right">  টোটাল &nbsp;&nbsp;</td>
            <td style="text-align: center; background: #56ABEE">
                <?php
                $data  = '';
                foreach( $results as $result ) {
                    $data = $subtotal;//($result['subtotal']);

                }
                if($data){
                echo $total_number;

                ?>

                <?php //$data = sum($results['subtotal']); echo $data; ?>
            </td>
            <td>
                <?php //$sub_number here print out for what's letter grade he earn... ?>
            </td>
            <td style="text-align: center; background: #56ABEE">
                <?php
                $total_point = $total_point /$sub_number;
                //echo $total_point;
                $exact_point = number_format($total_point, 2);
                echo $exact_point;
                ?>
                <?php
                //            if($total_point >= 80 ){
                //                $total_point += 5;
                //                echo '<h5 style="color: green"> 5 </h5>';
                //            }
                //            elseif ($favcolor >= 70 && $favcolor <= 79 ){
                //                $total_point += 4;
                //                echo "4";
                //            }
                //
                //            else {
                //                $total_point += 0;
                //                echo '<h5 style="color: red"> 0 </h5>';
                //            }
                ?>
            </td>

        </tr>
        <tr>
            <?php  } else{ ?>
                <h3 style="color: red;">Student id or Exam name does not match!</h3>
            <?php  } ?>
        </tr>

        <tr style="background: #56ABEE;">
        	<th style="background: #56ABEE;">GPA :</th>
        	<td style="text-align: center;"><?= $exact_point; ?></td>
        </tr>

        <tr style="background: #56ABEE;">
            <th style="background: #56ABEE;">গ্রেড  :</th>
            <td style="text-align: center;">
                <?php

                if($exact_point == 5 ){
                    echo 'A+';
                }
                elseif ($exact_point >= 4 && $exact_point <= 4.99 ){
                    echo "A";
                }
                elseif ($exact_point >= 3.5 && $exact_point <= 3.99 ){
                    echo "A-";
                }
                elseif ($exact_point >= 3.0 && $exact_point <= 3.49 ){
                    echo "B";
                }
                elseif ($exact_point >= 2.5 && $exact_point <= 2.99 ){
                    echo "C";
                }
                elseif ($exact_point >= 1 && $exact_point <= 1.99 ){
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
                if ($exact_point == 5){
                    echo "Pass : Outstanding ";
                }
                elseif ($exact_point >= 4.5 && $exact_point <= 4.99 ){
                    echo "Pass : Excellent Result!";
                }
                elseif ($exact_point >= 4 && $exact_point <= 4.49 ){
                    echo "Pass : Good Result! ";
                }
                elseif ($exact_point >= 3.5 && $exact_point <= 3.99 ){
                    echo "Pass : Good ";
                }
                elseif ($exact_point >= 3 && $exact_point <= 3.49 ){
                    echo "Pass : Need To Improve! ";
                }
                elseif ($exact_point >= 2 && $exact_point <= 2.99 ){
                    echo "Pass :Under Average, Need To Improve! ";
                }
                elseif ($exact_point >= 1 && $exact_point <= 1.99 ){
                    echo "Pass :Under Average, Need To Improve! Father signature with marksheet  ";
                }
                else {
                    echo '<p style="color: red"> Fail </p>';
                }

                ?></td>
        </tr>



    </table>

  </div>   
  </body>
</html>
    <?php  //include '../includes/footer.php' ?>
