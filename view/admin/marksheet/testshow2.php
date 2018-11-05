<?php include_once '../inc/header.php'; ?>


<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 25-Nov-17
 * Time: 11:26 AM
 */

error_reporting(0);

$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);



if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $class = $_POST['class'];
    $shift = $_POST['shift'];
    $branch = $_POST['branch'];
    $department = $_POST['department'];
    $roll = $_POST['roll'];
    $term = $_POST['term'];

    //echo "<br />";



//    echo "<pre>";
//    var_dump($_POST);

//    $sd = "SELECT student_data.student_id, student_data.student_name, student_data.father_name, student_data.mother_name, marksheet.class, marksheet.term
//FROM student_data
//RIGHT JOIN marksheet ON student_data.student_id = marksheet.roll
//ORDER BY marksheet.id";

//    $query = " select * from marksheet where class LIKE :class AND shift LIKE :shift AND branch LIKE :branch AND department LIKE :department AND roll LIKE :roll AND term LIKE :term ";
//
//    $stmt = $db->prepare($query);
//
//    $stmt->bindValue(':class', '%'. $class . '%', PDO::PARAM_STR);
//    $stmt->bindValue(':shift', '%'. $shift . '%', PDO::PARAM_STR);
//    $stmt->bindValue(':branch', '%'. $branch . '%', PDO::PARAM_STR);
//    $stmt->bindValue(':department', '%'. $department . '%', PDO::PARAM_STR);
//    $stmt->bindValue(':roll', '%'. $roll . '%', PDO::PARAM_STR);
//    $stmt->bindValue(':term', '%'. $term . '%', PDO::PARAM_STR);

    $stmt = $db->prepare("select * from marksheet where roll = '$roll' AND term = '$term' AND class = '$class' AND shift = '$shift' AND branch = '$branch' AND department = '$department' ");
    //$stmt->bindValue(':roll', '%'. $roll . '%', PDO::PARAM_STR);

    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt2 = $db->prepare("select * from student_data where student_id = '$roll' ");
    //$stmt->bindValue(':roll', '%'. $roll . '%', PDO::PARAM_STR);

    $stmt2->execute();
    $results2 = $stmt2->fetch(PDO::FETCH_ASSOC);



}

?>


<div class="col-md-8" style="width: 77.666667%;">

    <table border="1" align="center" width="877" style="background: white;">

        <tr>
            <td colspan="15" rowspan="4"><img src="../images/wild-flower-banner.JPG"  alt="no image" width="877" height="90"></td>
        </tr>

        <tr>
        </tr>

        <tr>
        </tr>

        <tr>
        </tr>





        <tr>
            <th>শিক্ষার্থীর নাম:</th>
            <td ><?= $results2['student_name'] ?></td>

            <td colspan="6" style="text-align: center; background: #25FF56"><?= 'Grading System  '; ?></td>
        </tr>
        <tr>
            <th>পিতার নাম:</th>
            <td ><?= $results2['father_name'] ?></td>
            <td colspan="2" style="text-align: center; background: #62ff2f"><?= 'Class Interval  '; ?></td>
            <td colspan="2" style="text-align: center ;background: #62ff2f"><?= 'Letter Grade  '; ?></td>
            <td colspan="2" style="text-align: center ;background: #62ff2f"><?= 'Grade Point  '; ?></td>
        </tr>
        <tr>
            <th>মাতার নাম:</th>
            <td ><?= $results2['mother_name'] ?></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= '80 - 100  '; ?></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= ' A+  '; ?></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= ' 5  '; ?></td>
        </tr>
        <tr>
            <th >পরীক্ষার নাম : </th>
            <td  style="background: white;color: #3926ee"><?= $term// $result2['term']; ?></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= '70 - 79  '; ?></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= ' A  '; ?></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= ' 4  '; ?></td>
        </tr>

        <tr>
            <th>গ্রুপ / বিভাগ :</th>
            <td  style="background: white;color: #3926ee"><?= $department//$results['department']; ?></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= '60 - 69  '; ?></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= ' A-  '; ?></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= ' 3.5  '; ?></td>
        </tr>
        <tr>
            <th>শ্রেণী :</th>
            <td  style="background: white;color: #3926ee"><?= $class//$results['department']; ?></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= '50 - 59  '; ?></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= ' B  '; ?></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= ' 3  '; ?></td>
        </tr>
        <tr>
            <th>শিফট :</th>
            <td  style="background: white;color: #3926ee"><?= $shift//$results['department']; ?></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= '40 - 49  '; ?></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= ' C  '; ?></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= ' 2  '; ?></td>
        </tr>
        <!--    <tr>-->
        <!--        <th>রোল:</th>-->
        <!--        <td  style="background: white;color: #3926ee">--><?//= $roll//$results['department']; ?><!--</td>-->
        <!--    </tr>-->
        <tr>
            <th>আইডি :</th>
            <td  style="background: white;color: #3926ee"><?= $roll//$results['department']; ?></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= '33 - 39  '; ?></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= ' D  '; ?></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= ' 2  '; ?></td>
        </tr>

        <tr>
            <th> </th>
            <td></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= '0 - 32  '; ?></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= ' F  '; ?></td>
            <td colspan="2" style="text-align: center ;background: #40ffe1"><?= ' 0  '; ?></td>
        </tr>

        <!--    <tr>-->
        <!--        <td class="size3">শ্রেণী &nbsp;&nbsp;:</td>-->
        <!--<!--        <td  align="center" class="size5">:</td>-->
        <!--        <td class="size5" style="background: white;color: #3926ee">--><?//= $class //$results['class']; ?><!--</td>-->
        <!--        <td class="size5">শিফট</td>-->
        <!--        <td  align="center" class="size5">:</td>-->
        <!--        <td  class="size5" style="background: white;color: #3926ee">--><?//= $shift // $results['shift']; ?><!--</td>-->
        <!--        <td  class="size5">শাখা</td>-->
        <!--        <td  align="center"  class="size5">:</td>-->
        <!--        <td  class="size5" style="background: white;color: #3926ee">--><?//= $branch// $results['branch']; ?><!--</td>-->
        <!--        <td  class="size5">রোল</td>-->
        <!--        <td  align="center"  class="size5">:</td>-->
        <!--        <td  class="size5" style="background: white;color: #3926ee">--><?//= $roll // $results['roll']; ?><!--</td>-->
        <!--        <td  class="size5">আইডি</td>-->
        <!--        <td  align="center"  class="size5">:</td>-->
        <!--        <td  class="size5" style="background: white;color: #3926ee">--><?//= $roll// $results['roll']; ?><!--</td>-->
        <!--    </tr>-->

        <!--    <tr>-->
        <!--        <th>নাম</th>-->
        <!--        <td >--><?//= $results2['student_name'] ?><!--</td>-->
        <!--        <td class="size5">পিতা</td>-->
        <!--        <td  align="center" class="size5">:</td>-->
        <!--        <td colspan="3" class="size5">--><?//= $results2['father_name'] ?><!--</td>-->
        <!--        <td class="size5">মাতা</td>-->
        <!--        <td  align="center" class="size5">:</td>-->
        <!--        <td colspan="3" class="size5">--><?//= $results2['mother_name'] ?><!--</td>-->
        <!--    </tr>-->



        <tr>
            <td colspan="15" align="center" style="background: rgba(255,34,109,0.68);">মার্কসশীট</td>
        </tr>

        <tr>
            <td align="center" class="size6">বিষয়</td>
            <td align="center" class="size6">পূর্ণ নাম্বার</td>
            <td align="center" class="size6">সি কিউ</td>
            <td align="center"class="size6">এম সি কিউ</td>
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
                <td align="center" >
                    <?=
                    $subtotal = $cq ;//+ $mcq + $practical;
                    $subtotal;
                    $total_number += $subtotal;
                    //$result['subtotal'];style="background: white;color: #3926ee"
                    //$total_number += $result['subtotal'];

                    ?></td>
                <!--        <td align="center" style="background: white;color: #3926ee">100</td>-->
                <!--        <td align="center">100</td>-->
                <!--        <td align="center">9</td>-->
                <!--        <td align="center">10</td>-->
                <!--        <td align="center">11</td> switch case use here...  -->

                <td rowspan="" align="center" >
                    <?php
                    $favcolor = $subtotal;//$result['subtotal'];

                    if($favcolor >= 80 ){
                        echo '<h5 style="color: green"> A+ </h5>';
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
                        echo '<h5 style="color: red"> F </h5>';
                    }

                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php
                    $favcolor = $subtotal;//$result['subtotal'];


                    if($favcolor >= 80 ){
                        $total_point += 5;
                        echo '<h5 style="color: green"> 5 </h5>';
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
                        echo '<h5 style="color: red"> 0 </h5>';
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
                        echo '<h5 style="color: green"> A+ </h5>';
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
                        echo '<h5 style="color: red"> F </h5>';
                    }

                    ?>
                </td>
                <td rowspan="" align="center">
                    <?php
                    $favcolor = $subtotal;//$result['subtotal'];


                    if($favcolor >= 40 ){
                        $total_point += 5;
                        echo '<h5 style="color: green"> 5 </h5>';
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
                        echo '<h5 style="color: red"> 0 </h5>';
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
            <td colspan="5" style="text-align: right">সব বিষয়ের মোট নম্বর  &nbsp;&nbsp;</td>
            <td style="text-align: center; background: #6bdef7">
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
            <td style="text-align: center; background: #6bdef7">
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
                <h3 style="color: red;">Student id or exam name does not match!</h3>
            <?php  } ?>
        </tr>



        <tr style="background: #56ABEE;">
            <th style="background: #56ABEE;">Your Grade Point:</th>
            <td style="text-align: center;">
                <?php

                if($exact_point == 5 ){
                    echo '<h5 style="color: green"> A+ </h5>';
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
                    echo '<h5 style="color: red"> F </h5>';
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
                    echo '<h5 style="color: red"> Fail </h5>';
                }

                ?></td>
        </tr>



    </table>

    <?php  include '../inc/footer.php' ?>
