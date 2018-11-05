<?php //include_once '../includes/header.php'; ?>

<!---->
<?php
error_reporting(0);
///**
// * Created by PhpStorm.
// * User: Shobuj
// * Date: 25-Nov-17
// * Time: 11:26 AM
// */
//$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//
//
//
//if($_SERVER['REQUEST_METHOD'] == 'POST'){
//    $class = $_POST['class'];
//    $shift = $_POST['shift'];
//    $branch = $_POST['branch'];
//    $department = $_POST['department'];
//    $roll = $_POST['roll'];
//    $term = $_POST['term'];
//
//    echo $roll;
//    echo $term;
//
//
//
//
////    echo "<pre>";
////    var_dump($_POST);
//
////    $sd = "SELECT student_data.student_id, student_data.student_name, student_data.father_name, student_data.mother_name, marksheet.class, marksheet.term
////FROM student_data
////RIGHT JOIN marksheet ON student_data.student_id = marksheet.roll
////ORDER BY marksheet.id";
//
////    $query = " select * from marksheet where class LIKE :class AND shift LIKE :shift AND branch LIKE :branch AND department LIKE :department AND roll LIKE :roll AND term LIKE :term ";
////
////    $stmt = $db->prepare($query);
////
////    $stmt->bindValue(':class', '%'. $class . '%', PDO::PARAM_STR);
////    $stmt->bindValue(':shift', '%'. $shift . '%', PDO::PARAM_STR);
////    $stmt->bindValue(':branch', '%'. $branch . '%', PDO::PARAM_STR);
////    $stmt->bindValue(':department', '%'. $department . '%', PDO::PARAM_STR);
////    $stmt->bindValue(':roll', '%'. $roll . '%', PDO::PARAM_STR);
////    $stmt->bindValue(':term', '%'. $term . '%', PDO::PARAM_STR);
//
//    $stmt = $db->prepare("select * from marksheet where roll = '$roll' ");
//    //$stmt->bindValue(':roll', '%'. $roll . '%', PDO::PARAM_STR);
//
//    $stmt->execute();
//    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//
//    //$sql = "SELECT * FROM citys LEFT JOIN comments ON comments.city=citys.city WHERE citys.id=$id";
//
//
////    $stmt = $db->prepare('select * from student_data where student_id = 2222 ');
////    $stmt->execute();
////    $result2 = $stmt->fetch(PDO::FETCH_ASSOC);
//
//    //echo $results['class'];
////    $stmt = $db->prepare("SELECT * FROM student_data WHERE id=:id ");
////    $stmt->bindValue(':id', '১২১২১২১২', PDO::PARAM_INT);
////    $stmt->execute();
////    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
//
////    if($stmt){
////        $msg = "Student Mark Sheet";
////        //header("location:markShow.php");
////    }
//
//}
//
//?>
<!---->
<!---->
<!--<div class="col-md-8" style="width: 77.666667%;">-->
<!---->
<!--    <table border="1" align="center" width="877" style="background: white;">-->
<!---->
<!--        <tr>-->
<!--            <td colspan="15" rowspan="4"><img src="../images/wild-flower-banner.JPG"  alt="no image" width="877" height="90"></td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--        </tr>-->
<!--        <!--    --><?php
//        //
//        //    foreach( $results as $result ) {
//        //    ?>
<!--        <!--    <tr>-->
<!--        <td colspan="7" align="right" class="size1">পরীক্ষার নাম </td>-->
<!--        <td align="center" class="size2"></td>-->
<!--        <td colspan="7" class="size1" style="background: white;color: #3926ee">--><?//= $term// $result2['term']; ?><!--</td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td colspan="7" align="right" class="size1">গ্রুপ / বিভাগ</td>-->
<!--            <td  align="center" class="size2">:</td>-->
<!--            <td colspan="7" class="size1" style="background: white;color: #3926ee">--><?//= $department//$results['department']; ?><!--</td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td class="size3">শ্রেণী &nbsp;&nbsp;:</td>-->
<!--            <!--        <td  align="center" class="size5">:</td>-->
<!--            <td class="size5" style="background: white;color: #3926ee">--><?//= $class //$results['class']; ?><!--</td>-->
<!--            <td class="size5">শিফট</td>-->
<!--            <td  align="center" class="size5">:</td>-->
<!--            <td  class="size5" style="background: white;color: #3926ee">--><?//= $shift // $results['shift']; ?><!--</td>-->
<!--            <td  class="size5">শাখা</td>-->
<!--            <td  align="center"  class="size5">:</td>-->
<!--            <td  class="size5" style="background: white;color: #3926ee">--><?//= $branch// $results['branch']; ?><!--</td>-->
<!--            <td  class="size5">রোল</td>-->
<!--            <td  align="center"  class="size5">:</td>-->
<!--            <td  class="size5" style="background: white;color: #3926ee">--><?//= $roll // $results['roll']; ?><!--</td>-->
<!--            <td  class="size5">আইডি</td>-->
<!--            <td  align="center"  class="size5">:</td>-->
<!--            <td  class="size5" style="background: white;color: #3926ee">--><?//= $roll// $results['roll']; ?><!--</td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td class="size3">নাম</td>-->
<!--            <td  align="center" class="size5">:</td>-->
<!--            <td colspan="3" class="size5"></td>-->
<!--            <td class="size5">পিতা</td>-->
<!--            <td  align="center" class="size5">:</td>-->
<!--            <td colspan="3" class="size5"></td>-->
<!--            <td class="size5">মাতা</td>-->
<!--            <td  align="center" class="size5">:</td>-->
<!--            <td colspan="3" class="size5"></td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td colspan="15" align="center">মার্কসশীট</td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td align="center" class="size6">বিষয়</td>-->
<!--            <td align="center" class="size6">পূর্ণ নাম্বার</td>-->
<!--            <td align="center" class="size6">সি কিউ</td>-->
<!--            <td align="center"class="size6">এম সি কিউ</td>-->
<!--            <td align="center" class="size6">প্রাকটিক্যাল</td>-->
<!--            <td align="center" class="size6">সাব টোটাল</td>-->
<!--            <td align="center" class="size6">কনভার্ট</td>-->
<!--            <td align="center" class="size6">কনভার্টেড  নাম্বার</td>-->
<!--            <td align="center" class="size6">সি এ</td>-->
<!--            <td align="center" class="size6">মোট নাম্বার</td>-->
<!--            <td align="center" class="size6"> সর্বাধিক</td>-->
<!--            <td align="center" class="size6">লেটার গ্রেড</td>-->
<!--            <td align="center" class="size6">জি পি </td>-->
<!--            <td colspan="2" align="center" class="size4">মন্তব্য</td>-->
<!--        </tr>-->
<!---->
<!--        --><?php
//
//        foreach( $results as $result ) {
//        ?>
<!---->
<!--        <tr>-->
<!--            <td>--><?//= $result['subject']; ?><!--</td>-->
<!--            <td align="center">১০০</td>-->
<!--            <td align="center" style="background: white;color: #3926ee">--><?//= $result['cq']; ?><!--</td>-->
<!--            <td align="center" style="background: white;color: #3926ee">--><?//= $result['mcq']; ?><!--</td>-->
<!--            <td align="center" style="background: white;color: #3926ee">--><?//= $result['practical']; ?><!--</td>-->
<!--            <td align="center" style="background: white;color: #3926ee">--><?//= $result['subtotal']; ?><!--</td>-->
<!--            <td align="center" style="background: white;color: #3926ee">100</td>-->
<!--            <td align="center">100</td>-->
<!--            <td align="center">9</td>-->
<!--            <td align="center">10</td>-->
<!--            <td align="center">11</td>-->
<!--            <td rowspan="2" align="center">A<td>-->
<!--            <td rowspan="2" align="center">4</td>--><?php // } ?>
<!--            <td colspan="2" rowspan="20" align="center">pass</td>-->
<!--        </tr>-->
<!---->
<!---->
<!--        <tr>-->
<!--            <td colspan="5" align="right">সাব টোটালঃ</td>-->
<!--            <td>6</td>-->
<!--            <td colspan="3" align="right">কনভারটেড টোটালঃ</td>-->
<!--            <td>10</td>-->
<!--            <td colspan="3">11</td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td colspan="6" align="right">আচরণ এবং মূল্যবোধের বিষয়গুলি</td>-->
<!--            <td colspan="7" align="center">আচরণ এবং মূল্যবোধের মন্তব্য</td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td>1</td>-->
<!--            <td align="center">2</td>-->
<!--            <td align="center">3</td>-->
<!--            <td align="center">4</td>-->
<!--            <td align="center">5</td>-->
<!--            <td align="center">6</td>-->
<!--            <td colspan="7" rowspan="4" align="center">7</td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td>1</td>-->
<!--            <td align="center">2</td>-->
<!--            <td align="center">3</td>-->
<!--            <td align="center">4</td>-->
<!--            <td align="center">5</td>-->
<!--            <td align="center">6</td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td>1</td>-->
<!--            <td align="center">2</td>-->
<!--            <td align="center">3</td>-->
<!--            <td align="center">4</td>-->
<!--            <td align="center">5</td>-->
<!--            <td align="center">6</td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td colspan="5" align="right">আচরণ এবং মূল্যবোধ টোটালঃ</td>-->
<!--            <td>6</td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td colspan="15">1</td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td colspan="2">1</td>-->
<!--            <td colspan="5">3</td>-->
<!--            <td colspan="2">8</td>-->
<!--            <td colspan="6">9</td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td colspan="2">1</td>-->
<!--            <td colspan="5">3</td>-->
<!--            <td colspan="2">8</td>-->
<!--            <td colspan="6">9</td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td colspan="2">1</td>-->
<!--            <td colspan="5">3</td>-->
<!--            <td colspan="2">8</td>-->
<!--            <td colspan="6">9</td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td colspan="2">1</td>-->
<!--            <td colspan="5">3</td>-->
<!--            <td colspan="2">8</td>-->
<!--            <td colspan="6">9</td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td colspan="2">1</td>-->
<!--            <td colspan="5">3</td>-->
<!--            <td colspan="2">8</td>-->
<!--            <td colspan="6">9</td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td colspan="2">1</td>-->
<!--            <td colspan="5">3</td>-->
<!--            <td colspan="2">8</td>-->
<!--            <td colspan="6">9</td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td colspan="2">1</td>-->
<!--            <td colspan="5">3</td>-->
<!--            <td colspan="2">8</td>-->
<!--            <td colspan="6">9</td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td colspan="2">1</td>-->
<!--            <td colspan="5">3</td>-->
<!--            <td colspan="2">8</td>-->
<!--            <td colspan="6">9</td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td colspan="2">1</td>-->
<!--            <td colspan="13">3</td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td colspan="2">1</td>-->
<!--            <td colspan="13">3</td>-->
<!--        </tr>-->
<!--        --><?php ////}  ?>
<!---->
<!--    </table>-->
<!---->
<!--    --><?php // include '../inc/footer.php' ?>


<?php include_once '../includes/header.php'; ?>



<div class="col-md-12">


    <form action="view/admin/marksheet/testshow3.php" method="post">

        <div class="form-inline">
            <div class="form-group col-lg-12">
                <br />
                <label style="font-size: 20px;color: green;">শিক্ষার্থীদের মার্কশীট  :</label><br>
                 
                <hr>
                <strong>শ্রেণী:</strong>
                <select class="form-control" name="class" required>
                    <option>সিলেক্ট করুন</option>
                    <option>প্লে</option>
                    <option> নার্সারি </option>
                    <option>কে জি</option>
                    <option>১ম</option>
                    <option>৩য়</option>
                    <option> ৪র্থ</option>
                    <option>৫ম</option>
                    <option>৬ষ্ঠ</option>
                    <option>৭ম</option>
                    <option>৮ম</option>
                    <option>নবম</option>
                    <option>১০ম</option>
                    <option>একাদশ</option>
                    <option>দ্বাদশ</option>
                    <option>ডিগ্রী ১ম বর্ষ</option>
                    <option>ডিগ্রী ২য় বর্ষ</option>
                    <option>ডিগ্রী ৩য় বর্ষ</option>
                    <option>ডিগ্রী প্রিভিয়াস মাস্টার্স</option>
                    <option>ডিগ্রী  মাস্টার্স</option>
                    <option>অনার্স ১ম বর্ষ</option>
                    <option>অনার্স ২য় বর্ষ</option>
                    <option>অনার্স ৩য় বর্ষ</option>
                    <option>অনার্স  ৪র্থ বর্ষ</option>
                    <option>মাস্টার্স</option>
                </select>
                <strong>শিফট:</strong>
                <select class="form-control" name="shift" required>
                    <option>সিলেক্ট করুন</option>
                    <option>প্রভাতী</option>
                    <option>দিবা</option>
                    <option>সান্ধ্যকালীন</option>
                    <option>রাত্রিকালীন</option>
                </select>
                <strong>শাখা:</strong>

                <select class="form-control" name="branch" required>
                    <option>সিলেক্ট করুন</option>
                    <option>ক</option>
                    <option>খ</option>
                    <option>গ</option>
                    <option>ঘ</option>
                    <option>ঙ</option>
                    <option>চ</option>
                    <option>ছ</option>
                    <option>জ</option>
                    <option>ঝ</option>
                    <option>ঞ</option>
                    <option>ট</option>
                    <option>ঠ</option>
                </select>
                <strong>বিভাগ:</strong>
                <select class="form-control" name="department" required>
                    <option>সিলেক্ট করুন</option>
                    <option>জেনারেল</option>
                    <option>বিজ্ঞান</option>
                    <option>মানবিক</option>
                    <option>বানিজ্য  </option>
                </select>

                <br />
                <br />

                <strong>পরীক্ষা :</strong>
                <select class="form-control" name="term" required>
                    <option>Mid Term</option>
                    <option>Final</option>
                </select>

                <div class="form-group">
                    <label for="">রোল :</label>
                    <input type="text" name="roll" class="form-control" placeholder="Enter roll" id="">
                </div>


                <br />
                <br />

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-info">Print</button>
                </div>
            </div>
        </div>

    </form>
</div>

<?php
    //error_reporting(0);
//    echo $msg."<br />";
//    echo $class."<br />";
//    echo $shift."<br />";
//    echo $branch."<br />";
//    echo $department."<br />";
//    echo $roll."<br />";
//    echo $term."<br />";
?>





<?php  include '../includes/footer.php' ?>

