<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 20-Nov-17
 * Time: 4:30 PM
 */

// Connect to MySQL via PDO

//var_dump($_POST);
//die();

error_reporting(0);

$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


$class = $_POST['class'];
$shift = $_POST['shift'];
$branch = $_POST['branch'];
$department = $_POST['department'];
$term = $_POST['term'];
$roll = $_POST['roll'];
$subject = $_POST['subject'];


//$query = "SELECT * FROM student_data WHERE class LIKE :class OR class_roll LIKE :roll";
$query = "SELECT * FROM marksheet WHERE class LIKE :classes AND  shift LIKE :shifted AND branch LIKE :branches AND department LIKE :department AND term LIKE :term AND roll LIKE :roll AND subject LIKE :subject";
$stmt = $db->prepare($query);
$stmt->bindValue(':classes', '%' . $class . '%', PDO::PARAM_INT);
$stmt->bindValue(':shifted', '%' . $shift . '%', PDO::PARAM_INT);
$stmt->bindValue(':branches', '%'. $branch. '%', PDO::PARAM_STR);
$stmt->bindValue(':department', '%'. $department. '%', PDO::PARAM_STR);
$stmt->bindValue(':term', '%'. $term. '%', PDO::PARAM_STR);
$stmt->bindValue(':roll', '%'. $roll. '%', PDO::PARAM_STR);
$stmt->bindValue(':subject', '%'. $subject. '%', PDO::PARAM_STR);
//$stmt->bindValue(':roll', '%' . $roll . '%', PDO::PARAM_STR);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$affected_rows = $stmt->rowCount();

//$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//if ($stmt->rowCount() > 0) {
//    $result = $stmt->fetchAll();
//
//    foreach( $result as $row ) {
//        //echo $row["student_id"]."<br/>";
//        //echo $row["student_name"];

?>

<?php include_once '../includes/header.php'; ?>



<div class="col-md-12">

<?php
    if($affected_rows > 0){
?>
    <form action="view/admin/marksheet/markUpdateAction.php" method="post">

        <div class="form-inline">
            <div class="form-group col-lg-12 col-md-12">
                <br />
                <label style="font-size: 20px;color: #3c5aee; background: #92fffa">শিক্ষার্থীদের নম্বর সংশোধন</label><br>
                <br />
                <strong>শ্রেণী:</strong>
                <select class="form-control" name="class" required>
                    <option>সিলেক্ট করুন</option>
                    <option <?php echo ($result['class']=='প্লে')? 'selected':'' ?> value="প্লে">প্লে</option>
                    <option <?php echo ($result['class']=='নার্সারি')? 'selected':'' ?> value="নার্সারি">নার্সারি</option>
                    <option <?php echo ($result['class']=='কে জি')? 'selected':'' ?> value="কে জি">কে জি</option>
                    <option <?php echo ($result['class']=='১ম')? 'selected':'' ?> value="১ম">১ম</option>
                    <option <?php echo ($result['class']=='২য় ')? 'selected':'' ?> value="২য় ">২য় </option>
                    <option <?php echo ($result['class']=='৩য়')? 'selected':'' ?> value="৩য়">৩য়</option>
                    <option <?php echo ($result['class']=='৪র্থ')? 'selected':'' ?> value="৪র্থ">৪র্থ</option>
                    <option <?php echo ($result['class']=='৫ম')? 'selected':'' ?> value="৫ম">৫ম</option>
                    <option <?php echo ($result['class']=='৬ষ্ঠ')? 'selected':'' ?> value="৬ষ্ঠ">৬ষ্ঠ</option>
                    <option <?php echo ($result['class']=='৭ম')? 'selected':'' ?> value="৭ম">৭ম</option>
                    <option <?php echo ($result['class']=='৮ম')? 'selected':'' ?> value="৮ম">৮ম</option>
                    <option <?php echo ($result['class']=='৯ম ')? 'selected':'' ?>
                            value="৯ম ">৯ম </option>
                    <option <?php echo ($result['class']=='১০ম')? 'selected':'' ?> value="১০ম">১০ম</option>
                    <option <?php echo ($result['class']=='একাদশ')? 'selected':'' ?> value="একাদশ">একাদশ</option>
                    <option <?php echo ($result['class']=='দ্বাদশ')? 'selected':'' ?> value="দ্বাদশ">দ্বাদশ</option>
                    <option <?php echo ($result['class']=='ডিগ্রী ১ম বর্ষ')? 'selected':'' ?> value="ডিগ্রী ১ম বর্ষ">ডিগ্রী ১ম বর্ষ</option>
                    <option <?php echo ($result['class']=='ডিগ্রী ২য় বর্ষ')? 'selected':'' ?> value="ডিগ্রী ২য় বর্ষ">ডিগ্রী ২য় বর্ষ</option>
                    <option <?php echo ($result['class']=='ডিগ্রী ৩য় বর্ষ')? 'selected':'' ?> value="ডিগ্রী ৩য় বর্ষ">ডিগ্রী ৩য় বর্ষ</option>
                    <option <?php echo ($result['class']=='ডিগ্রী প্রিভিয়াস মাস্টার্স')? 'selected':'' ?> value="ডিগ্রী প্রিভিয়াস মাস্টার্স">ডিগ্রী প্রিভিয়াস মাস্টার্স</option>
                    <option <?php echo ($result['class']=='ডিগ্রী  মাস্টার্স')? 'selected':'' ?> value="ডিগ্রী  মাস্টার্স">ডিগ্রী  মাস্টার্স</option>
                    <option <?php echo ($result['class']=='অনার্স ১ম বর্ষ')? 'selected':'' ?> value="অনার্স ১ম বর্ষ">অনার্স ১ম বর্ষ</option>
                    <option <?php echo ($result['class']=='অনার্স ২য় বর্ষ')? 'selected':'' ?> value="অনার্স ২য় বর্ষ">অনার্স ২য় বর্ষ</option>
                    <option <?php echo ($result['class']=='অনার্স ৩য় বর্ষ')? 'selected':'' ?> value="অনার্স ৩য় বর্ষ">অনার্স ৩য় বর্ষ</option>
                    <option <?php echo ($result['class']=='অনার্স  ৪র্থ বর্ষ')? 'selected':'' ?> value="অনার্স  ৪র্থ বর্ষ">অনার্স  ৪র্থ বর্ষ</option>
                    <option <?php echo ($result['class']=='মাস্টার্স')? 'selected':'' ?> value="মাস্টার্স">মাস্টার্স</option>
                </select>
                <strong>শিফট:</strong>
                <select class="form-control" name="shift" required>
                    <option>সিলেক্ট করুন</option>
                    <option <?php echo ($result['shift']=='প্রভাতী')? 'selected':'' ?> value="প্রভাতী">প্রভাতী</option>
                    <option <?php echo ($result['shift']=='দিবা')? 'selected':'' ?> value="দিবা">দিবা</option>
                    <option <?php echo ($result['shift']=='সান্ধ্যকালীন')? 'selected':'' ?> value="সান্ধ্যকালীন">সান্ধ্যকালীন</option>
                    <option <?php echo ($result['shift']=='রাত্রিকালীন')? 'selected':'' ?> value="রাত্রিকালীন">রাত্রিকালীন</option>
                </select>
                <strong>শাখা:</strong>

                <select class="form-control" name="branch" required>
                    <option>সিলেক্ট করুন</option>

                    <option <?php echo ($result['branch']=='ক')? 'selected':'' ?> value="ক">ক</option>
                    <option <?php echo ($result['branch']=='খ')? 'selected':'' ?> value="খ">খ</option>
                    <option <?php echo ($result['branch']=='গ')? 'selected':'' ?> value="গ">গ</option>
                    <option <?php echo ($result['branch']=='ঘ')? 'selected':'' ?> value="ঘ">ঘ</option>
                    <option <?php echo ($result['branch']=='ঙ')? 'selected':'' ?> value="ঙ">ঙ</option>
                    <option <?php echo ($result['branch']=='চ')? 'selected':'' ?> value="চ">চ</option>
                    <option <?php echo ($result['branch']=='ছ')? 'selected':'' ?> value="ছ">ছ</option>
                    <option <?php echo ($result['branch']=='জ')? 'selected':'' ?> value="জ">জ</option>
                    <option <?php echo ($result['branch']=='ঝ')? 'selected':'' ?> value="ঝ">ঝ</option>
                    <option <?php echo ($result['branch']=='ঞ</')? 'selected':'' ?> value="ঞ</">ঞ</</option>
                    <option <?php echo ($result['branch']=='ট')? 'selected':'' ?> value="ট">ট</option>
                    <option <?php echo ($result['branch']=='ঠ')? 'selected':'' ?> value="ঠ">ঠ</option>
                </select>
                <strong>বিভাগ:</strong>
                <select class="form-control" name="department" required>
                    <option>সিলেক্ট করুন</option>
                    <option <?php echo ($result['department']=='জেনারেল')? 'selected':'' ?> value="জেনারেল">জেনারেল</option>
                    <option <?php echo ($result['department']=='বিজ্ঞান')? 'selected':'' ?> value="বিজ্ঞান">বিজ্ঞান</option>
                    <option <?php echo ($result['department']=='মানবিক')? 'selected':'' ?> value="মানবিক">মানবিক</option>
                    <option <?php echo ($result['department']=='বানিজ্য')? 'selected':'' ?> value="বানিজ্য">বানিজ্য</option>
                </select>
                <br />
                <br />
                <strong>পরীক্ষা:</strong>
                <select class="form-control" name="term" required>
                    <option <?= $result['term'] == 'Mid Term'?'selected':'' ?> value="Mid Term" >Mid Term</option>
                    <option <?= $result['term'] == 'Final'?'selected':'' ?> value="Final" > Final</option>
                </select>

                <div class="form-group">
                    <label for="">শিক্ষার্থীদের আইডি :</label>
                    <input type="text" name="roll" value="<?= $result['roll']; ?>" class="form-control" placeholder="Enter roll" id="">
                </div>

                <div class="form-group">
                    <label for="">বিষয়:</label>
                    <select class="form-control" name="subject" required>
                        <option <?= $result['subject'] == 'বাংলা ১ম পত্র'?'selected':'' ?> value="বাংলা ১ম পত্র" >বাংলা ১ম পত্র</option>
                        <option <?= $result['subject'] == 'বাংলা ২য় পত্র'?'selected':'' ?> value="বাংলা ২য় পত্র" >বাংলা ২য় পত্র</option>
                        <option <?= $result['subject'] == 'ইংরেজী ১ম পত্র'?'selected':'' ?> value="ইংরেজী ১ম পত্র" >ইংরেজী ১ম পত্র</option>

                        <option <?= $result['subject'] == 'ইংরেজী ২য় পত্র'?'selected':'' ?> value="ইংরেজী ২য় পত্র" >ইংরেজী ২য় পত্র</option>
                        <option <?= $result['subject'] == 'গণিত'?'selected':'' ?> value="গণিত" >গণিত</option>
                        <option <?= $result['subject'] == 'বাংলাদেশ ও বিশ্ব পরিচয়'?'selected':'' ?> value="বাংলাদেশ ও বিশ্ব পরিচয়" >বাংলাদেশ ও বিশ্ব পরিচয়</option>
                        <option <?= $result['subject'] == 'বিজ্ঞান'?'selected':'' ?> value="বিজ্ঞান" >বিজ্ঞান</option>
                        <option <?= $result['subject'] == 'ধর্ম ও নৈতিক শিক্ষা'?'selected':'' ?> value="ধর্ম ও নৈতিক শিক্ষা" >ধর্ম ও নৈতিক শিক্ষা</option>
                        <option <?= $result['subject'] == 'তথ্য ও যোগাযোগ প্রযুক্তি'?'selected':'' ?> value="তথ্য ও যোগাযোগ প্রযুক্তি" >তথ্য ও যোগাযোগ প্রযুক্তি</option>
                        <option <?= $result['subject'] == 'গার্হস্থ্যবিজ্ঞান 4th'?'selected':'' ?> value="গার্হস্থ্যবিজ্ঞান 4th" >গার্হস্থ্যবিজ্ঞান 4th</option>
                        <option <?= $result['subject'] == 'শারীরিক শিক্ষা ও স্বাস্থ্য'?'selected':'' ?> value="শারীরিক শিক্ষা ও স্বাস্থ্য" >শারীরিক শিক্ষা ও স্বাস্থ্য</option>
                        <option <?= $result['subject'] == 'কর্ম ও জীবনমূখী শিক্ষা'?'selected':'' ?> value="কর্ম ও জীবনমূখী শিক্ষা" >কর্ম ও জীবনমূখী শিক্ষা</option>
                        <option <?= $result['subject'] == 'চারু ও কারুকলা'?'selected':'' ?> value="sd" >চারু ও কারুকলা</option>

                    </select>
                </div>

                <br />
                <br />

                <div class="form-group">
                    <label for="">লিখিত:</label>
                    <input type="text" name="cq"  class="form-control" value="<?= $result['cq']; ?>" id="">
                </div>
                <div class="form-group">
                    <label for="">এম সি কিউ:</label>
                    <input type="text" name="mcq" value="<?= $result['mcq']; ?>" class="form-control"  id="">
                </div>

                <div class="form-group">
                    <label for="">ব্যাবহারিক:</label>
                    <input type="text" name="practical" value="<?= $result['practical']; ?>" class="form-control"  id="">
                </div>



                <br />
                <br />

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-info">Update</button>
                </div>
            </div>
        </div>

    </form>
    <?php  } else{ ?>
        <h3 style="color: red">Student ID, or Exam or any other key does not match..</h3><br>
        <a class="btn btn-primary" href="view/admin/marksheet/markUpdateform.php">Again Search</a>
    <?php } ?>
</div>

</div>






<?php  include '../includes/footer.php' ?>

