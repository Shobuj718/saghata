
<?php
                 
 // if(isset($_SESSION["username"]))  
 // {  
 //    header('location:view/admin/index.php');
 //      // echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';  
 //      // echo '<br /><br /><a href="logout.php">Logout</a>';  
 // }  
 // else  
 // {  
 //      header("location:index.php");  
 // }
 ?>

<?php
    include_once '../includes/header.php';
    include_once '../../../vendor/autoload.php';


?>
<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 16-Nov-17
 * Time: 12:17 PM
 */
error_reporting(0);

$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$id = $_GET['edit'];
//                echo $id;
//                var_dump($id);
//                die();
$stm =  $db->prepare("SELECT * FROM `student_data` WHERE unique_id = :id");
$stm->bindValue(':id', $id, PDO::PARAM_STR);
$stm->execute();
$result = $stm->fetch(PDO::FETCH_ASSOC);
//use $results

?>


<!--       main form start here-->


<form class="navbar-form navbar-right" action="searchID.php" method="post" role="search">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Student ID...">
    </div>
    <button type="submit" name="submit" class="btn btn-default2">Submit</button>
<!--    <button type="submit" class="btn btn-default1">Logout</button>-->
</form>

<div class="col-md-12" style="">
    <form method="post" action="updateStudent.php" accept-charset="utf-8" align="center" enctype="multipart/form-data">
        <table width="" border="0">

            <tr>
                <td colspan="9"><h2><center>একাডেমিক তথ্যাবলী</center></h2></td>

            </tr>
            <tr>
                <th colspan="2">লিঙ্গ</th>
                <th colspan="7"> শিক্ষার্থীর নাম<font color="red" size="4">*</font></th>

            </tr>
            <tr>
                <td colspan="2">
                    <select class="form-control13" name="sex" required>
                        <option>সিলেক্ট করুণ</option>
                        <option <?php echo ($result['sex']=='ছেলে')? 'selected':'' ?> value="ছেলে">ছেলে</option>
                        <option <?php echo ($result['sex']=='মেয়ে')? 'selected':'' ?> value="মেয়ে">মেয়ে</option>
                        <option <?php echo ($result['sex']=='অন্যান্য')? 'selected':'' ?> value="অন্যান্য">অন্যান্য</option>


                    </select>
                </td>
                <td colspan="7"><input type="text" class="form-control14" value="<?php echo $result['student_name']?>"  name="student_name" required >
                <td colspan="7"><input type="hidden" class="form-control14" value="<?php echo $result['id']?>"  name="id" required >
                <td colspan="7"><input type="hidden" class="form-control14" value="<?php echo $result['student_image']?>"  name="student_image" required >
                <td colspan="7"><input type="hidden" class="form-control14" value="<?php echo $result['father_image']?>"  name="father_image" required >
                <td colspan="7"><input type="hidden" class="form-control14" value="<?php echo $result['mother_image']?>"  name="mother_image" required >
                </td>
            <tr>
                <th colspan="2">শ্রেণী<font color="red" size="4">*</font></th>
                <th colspan="2">শিফট<font color="red" size="4">*</font></th>
                <th colspan="2">শাখা<font color="red" size="4">*</font></th>
                <th colspan="3">গ্রুপ / বিভাগ<font color="red" size="3">*</font></th>
            </tr>
            <tr>
                <td colspan="2">
                    <select class="form-control13" name="class" required>
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
                </td>
                <td colspan="2">
                    <select class="form-control13" name="shift" required>
                        <option>সিলেক্ট করুন</option>
                        <option <?php echo ($result['shift']=='প্রভাতী')? 'selected':'' ?> value="প্রভাতী">প্রভাতী</option>
                        <option <?php echo ($result['shift']=='দিবা')? 'selected':'' ?> value="দিবা">দিবা</option>
                        <option <?php echo ($result['shift']=='সান্ধ্যকালীন')? 'selected':'' ?> value="সান্ধ্যকালীন">সান্ধ্যকালীন</option>
                        <option <?php echo ($result['shift']=='রাত্রিকালীন')? 'selected':'' ?> value="রাত্রিকালীন">রাত্রিকালীন</option>


                    </select>
                </td>
                <td colspan="2">
                    <select class="form-control13" name="branch" required>
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
                </td>
                <td colspan="3">
                    <select class="form-control10" name="department" required>
                        <option>সিলেক্ট করুন</option>
                        <option <?php echo ($result['department']=='জেনারেল')? 'selected':'' ?> value="জেনারেল">জেনারেল</option>
                        <option <?php echo ($result['department']=='বিজ্ঞান')? 'selected':'' ?> value="বিজ্ঞান">বিজ্ঞান</option>
                        <option <?php echo ($result['department']=='মানবিক')? 'selected':'' ?> value="মানবিক">মানবিক</option>
                        <option <?php echo ($result['department']=='বানিজ্য')? 'selected':'' ?> value="বানিজ্য">বানিজ্য</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th colspan="3">স্টুডেন্ট আইডি নাম্বার<font color="red" size="4">*</font></th>
                <th colspan="3">ক্লাসের রোল নাম্বার<font color="red" size="4">*</font></th>
                <th colspan="3">শিক্ষাবর্ষ<font color="red" size="4">*</font></th>

            </tr>
            <tr>
                <td colspan="3"><input type="text" value="<?php echo $result['student_id']; ?>" class="form-control10" name="student_id" required ></td>

                <td colspan="3"><input type="text" value="<?php echo $result['class_roll']; ?>" class="form-control10"  name="class_roll"   required></td>
                <td colspan="3"><input type="text" value="<?php echo $result['year']; ?>" class="form-control10" name="year"  required></td>
            </tr>
            <tr>
                <td colspan="9"><h2><center>ব্যক্তিগত তথ্যাবলী</center></h2></td>

            </tr>
            <tr>
                <th colspan="3"> জন্ম তারিখ<font color="red" size="4">*</font></th>
                <th colspan="3"> রক্তের গ্রুপ</th>
                <th colspan="3"> ধর্ম<font color="red" size="4">*</font></th>
            </tr>
            <tr>
                <td colspan="3">
                    <select class="form-control11" name="birth_day" required>
                        <option>তারিখ</option>

                        <option <?php echo ($result['birth_day']=='১')? 'selected':'' ?> value="১">১</option>
                        <option <?php echo ($result['birth_day']=='২')? 'selected':'' ?> value="২">২</option>
                        <option <?php echo ($result['birth_day']=='৩')? 'selected':'' ?> value="৩">৩</option>
                        <option <?php echo ($result['birth_day']=='৪')? 'selected':'' ?> value="৪">৪</option>
                        <option <?php echo ($result['birth_day']=='৫')? 'selected':'' ?> value="৫">৫</option>
                        <option <?php echo ($result['birth_day']=='৬')? 'selected':'' ?> value="৬">৬</option>
                        <option <?php echo ($result['birth_day']=='৭')? 'selected':'' ?> value="৭">৭</option>
                        <option <?php echo ($result['birth_day']=='৮')? 'selected':'' ?> value="৮">৮</option>
                        <option <?php echo ($result['birth_day']=='৯')? 'selected':'' ?> value="৯">৯</option>
                        <option <?php echo ($result['birth_day']=='১০')? 'selected':'' ?> value="১০">১০</option>
                        <option <?php echo ($result['birth_day']=='১১')? 'selected':'' ?> value="১১">১১</option>
                        <option <?php echo ($result['birth_day']=='১২')? 'selected':'' ?> value="১২">১২</option>
                        <option <?php echo ($result['birth_day']=='১৩')? 'selected':'' ?> value="১৩">১৩</option>
                        <option <?php echo ($result['birth_day']=='১৪')? 'selected':'' ?> value="১৪">১৪</option>
                        <option <?php echo ($result['birth_day']=='১৫')? 'selected':'' ?> value="১৫">১৫</option>
                        <option <?php echo ($result['birth_day']=='১৬')? 'selected':'' ?> value="১৬">১৬</option>
                        <option <?php echo ($result['birth_day']=='১৭')? 'selected':'' ?> value="১৭">১৭</option>
                        <option <?php echo ($result['birth_day']=='১৮')? 'selected':'' ?> value="১৮">১৮</option>
                        <option <?php echo ($result['birth_day']=='১৯')? 'selected':'' ?> value="১৯">১৯</option>
                        <option <?php echo ($result['birth_day']=='২১')? 'selected':'' ?> value="২১">২১</option>
                        <option <?php echo ($result['birth_day']=='২২')? 'selected':'' ?> value="২২">২২</option>
                        <option <?php echo ($result['birth_day']=='২৩')? 'selected':'' ?> value="২৩">২৩</option>
                        <option <?php echo ($result['birth_day']=='২৪')? 'selected':'' ?> value="২৪">২৪</option>
                        <option <?php echo ($result['birth_day']=='২৫')? 'selected':'' ?> value="২৫">২৫</option>
                        <option <?php echo ($result['birth_day']=='২৬')? 'selected':'' ?> value="২৬">২৬</option>
                        <option <?php echo ($result['birth_day']=='২৭')? 'selected':'' ?> value="২৭">২৭</option>
                        <option <?php echo ($result['birth_day']=='২৮')? 'selected':'' ?> value="২৮">২৮</option>
                        <option <?php echo ($result['birth_day']=='২৯')? 'selected':'' ?> value="২৯">২৯</option>
                        <option <?php echo ($result['birth_day']=='৩০')? 'selected':'' ?> value="৩০">৩০</option>

                        <option <?php echo ($result['birth_day']=='৩১')? 'selected':'' ?> value="৩১">৩১</option>

                    </select>

                    <select class="form-control11" name="birth_month" required>
                        <option>মাস</option>
                        <option <?php echo ($result['birth_month']=='জানুয়ারী')? 'selected':'' ?> value="জানুয়ারী">জানুয়ারী</option>
                        <option <?php echo ($result['birth_month']=='ফেব্রুয়ারী')? 'selected':'' ?> value="ফেব্রুয়ারী">ফেব্রুয়ারী</option>
                        <option <?php echo ($result['birth_month']=='মার্চ')? 'selected':'' ?> value="মার্চ">মার্চ</option>
                        <option <?php echo ($result['birth_month']=='এপ্রিল')? 'selected':'' ?> value="এপ্রিল">এপ্রিল</option>
                        <option <?php echo ($result['birth_month']=='মে')? 'selected':'' ?> value="মে">মে</option>
                        <option <?php echo ($result['birth_month']=='জুন')? 'selected':'' ?> value="জুন">জুন</option>
                        <option <?php echo ($result['birth_month']=='জুলাই')? 'selected':'' ?> value="জুলাই">জুলাই</option>
                        <option <?php echo ($result['birth_month']=='আগস্ট')? 'selected':'' ?> value="আগস্ট">আগস্ট</option>
                        <option <?php echo ($result['birth_month']=='সেপ্টেম্বর')? 'selected':'' ?> value="সেপ্টেম্বর">সেপ্টেম্বর</option>
                        <option <?php echo ($result['birth_month']=='অক্টোবর')? 'selected':'' ?> value="অক্টোবর">অক্টোবর</option>
                        <option <?php echo ($result['birth_month']=='নভেম্বর')? 'selected':'' ?> value="নভেম্বর">নভেম্বর</option>
                        <option <?php echo ($result['birth_month']=='ডিসেম্বর')? 'selected':'' ?> value="ডিসেম্বর">ডিসেম্বর</option>

                    </select>


                    <select class="form-control11" name="birth_year" required>
                        <option>সাল</option>
                        <option <?php echo ($result['birth_year']=='১৯৫২')? 'selected':'' ?> value="১৯৫২">১৯৫২</option>
                        <option <?php echo ($result['birth_year']=='১৯৫৩')? 'selected':'' ?> value="১৯৫৩">১৯৫৩</option>
                        <option <?php echo ($result['birth_year']=='১৯৫৪')? 'selected':'' ?> value="১৯৫৪">১৯৫৪</option>
                        <option <?php echo ($result['birth_year']=='১৯৫৫')? 'selected':'' ?> value="১৯৫৫">১৯৫৫</option>
                        <option <?php echo ($result['birth_year']=='১৯৫৬')? 'selected':'' ?> value="১৯৫৬">১৯৫৬</option>
                        <option <?php echo ($result['birth_year']=='১৯৫৭')? 'selected':'' ?> value="১৯৫৭">১৯৫৭</option>
                        <option <?php echo ($result['birth_year']=='১৯৫৮')? 'selected':'' ?> value="১৯৫৮">১৯৫৮</option>
                        <option <?php echo ($result['birth_year']=='১৯৫৯')? 'selected':'' ?> value="১৯৫৯">১৯৫৯</option>
                        <option <?php echo ($result['birth_year']=='১৯৬০')? 'selected':'' ?> value="১৯৬০">১৯৬০</option>
                        <option <?php echo ($result['birth_year']=='১৯৬১')? 'selected':'' ?> value="১৯৬১">১৯৬১</option>
                        <option <?php echo ($result['birth_year']=='১৯৬২')? 'selected':'' ?> value="১৯৬২">১৯৬২</option>
                        <option <?php echo ($result['birth_year']=='১৯৬৩')? 'selected':'' ?> value="১৯৬৩">১৯৬৩</option>
                        <option <?php echo ($result['birth_year']=='১৯৬৪')? 'selected':'' ?> value="১৯৬৪">১৯৬৪</option>
                        <option <?php echo ($result['birth_year']=='১৯৬৫')? 'selected':'' ?> value="১৯৬৫">১৯৬৫</option>
                        <option <?php echo ($result['birth_year']=='১৯৬৬')? 'selected':'' ?> value="১৯৬৬">১৯৬৬</option>
                        <option <?php echo ($result['birth_year']=='১৯৬৭')? 'selected':'' ?> value="১৯৬৭">১৯৬৭</option>
                        <option <?php echo ($result['birth_year']=='১৯৬৮')? 'selected':'' ?> value="১৯৬৮">১৯৬৮</option>
                        <option <?php echo ($result['birth_year']=='১৯৬৯')? 'selected':'' ?> value="১৯৬৯">১৯৬৯</option>
                        <option <?php echo ($result['birth_year']=='১৯৭১')? 'selected':'' ?> value="১৯৭১">১৯৭০</option>
                        <option <?php echo ($result['birth_year']=='১৯৭১')? 'selected':'' ?> value="১৯৭১">১৯৭১</option>
                        <option <?php echo ($result['birth_year']=='১৯৭২')? 'selected':'' ?> value="১৯৭২">১৯৭২</option>
                        <option <?php echo ($result['birth_year']=='১৯৭৩')? 'selected':'' ?> value="১৯৭৩">১৯৭৩</option>
                        <option <?php echo ($result['birth_year']=='১৯৭৪')? 'selected':'' ?> value="১৯৭৪">১৯৭৪</option>
                        <option <?php echo ($result['birth_year']=='১৯৭৫')? 'selected':'' ?> value="১৯৭৫">১৯৭৫</option>
                        <option <?php echo ($result['birth_year']=='১৯৭৬')? 'selected':'' ?> value="১৯৭৬">১৯৭৬</option>
                        <option <?php echo ($result['birth_year']=='১৯৭৭')? 'selected':'' ?> value="১৯৭৭">১৯৭৭</option>
                        <option <?php echo ($result['birth_year']=='১৯৭৮')? 'selected':'' ?> value="১৯৭৮">১৯৭৮</option>
                        <option <?php echo ($result['birth_year']=='১৯৭৯')? 'selected':'' ?> value="১৯৭৯">১৯৭৯</option>
                        <option <?php echo ($result['birth_year']=='১৯৮০')? 'selected':'' ?> value="১৯৮০">১৯৮০</option>
                        <option <?php echo ($result['birth_year']=='১৯৮১')? 'selected':'' ?> value="১৯৮১">১৯৮১</option>
                        <option <?php echo ($result['birth_year']=='১৯৮২')? 'selected':'' ?> value="১৯৮২">১৯৮২</option>
                        <option <?php echo ($result['birth_year']=='১৯৮৩')? 'selected':'' ?> value="১৯৮৩">১৯৮৩</option>
                        <option <?php echo ($result['birth_year']=='১৯৮৪')? 'selected':'' ?> value="১৯৮৪">১৯৮৪</option>
                        <option <?php echo ($result['birth_year']=='১৯৮৫')? 'selected':'' ?> value="১৯৮৫">১৯৮৫</option>
                        <option <?php echo ($result['birth_year']=='১৯৮৬')? 'selected':'' ?> value="১৯৮৬">১৯৮৬</option>
                        <option <?php echo ($result['birth_year']=='১৯৮৭')? 'selected':'' ?> value="১৯৮৭">১৯৮৭</option>
                        <option <?php echo ($result['birth_year']=='১৯৮৮')? 'selected':'' ?> value="১৯৮৮">১৯৮৮</option>
                        <option <?php echo ($result['birth_year']=='১৯৮৯')? 'selected':'' ?> value="১৯৮৯">১৯৮৯</option>
                        <option <?php echo ($result['birth_year']=='১৯৯০')? 'selected':'' ?> value="১৯৯০">১৯৯০</option>
                        <option <?php echo ($result['birth_year']=='১৯৯১')? 'selected':'' ?> value="১৯৯১">১৯৯১</option>
                        <option <?php echo ($result['birth_year']=='১৯৯২')? 'selected':'' ?> value="১৯৯২">১৯৯২</option>
                        <option <?php echo ($result['birth_year']=='১৯৯৩')? 'selected':'' ?> value="১৯৯৩">১৯৯৩</option>
                        <option <?php echo ($result['birth_year']=='১৯৯৪')? 'selected':'' ?> value="১৯৯৪">১৯৯৪</option>
                        <option <?php echo ($result['birth_year']=='১৯৯৫')? 'selected':'' ?> value="১৯৯৫">১৯৯৫</option>
                        <option <?php echo ($result['birth_year']=='১৯৯৬')? 'selected':'' ?> value="১৯৯৬">১৯৯৬</option>
                        <option <?php echo ($result['birth_year']=='১৯৯৭')? 'selected':'' ?> value="১৯৯৭">১৯৯৭</option>
                        <option <?php echo ($result['birth_year']=='১৯৯৮')? 'selected':'' ?> value="১৯৯৮">১৯৯৮</option>
                        <option <?php echo ($result['birth_year']=='১৯৯৯')? 'selected':'' ?> value="১৯৯৯">১৯৯৯</option>
                        <option <?php echo ($result['birth_year']=='২০০০')? 'selected':'' ?> value="২০০০">২০০০</option>
                        <option <?php echo ($result['birth_year']=='২০০১')? 'selected':'' ?> value="২০০১">২০০১</option>
                        <option <?php echo ($result['birth_year']=='২০০২')? 'selected':'' ?> value="২০০২">২০০২</option>
                        <option <?php echo ($result['birth_year']=='২০০৩')? 'selected':'' ?> value="২০০৩">২০০৩</option>
                        <option <?php echo ($result['birth_year']=='২০০৪')? 'selected':'' ?> value="২০০৪">২০০৪</option>
                        <option <?php echo ($result['birth_year']=='২০০৫')? 'selected':'' ?> value="২০০৫">২০০৫</option>
                        <option <?php echo ($result['birth_year']=='২০০৬')? 'selected':'' ?> value="২০০৬">২০০৬</option>
                        <option <?php echo ($result['birth_year']=='২০০৭')? 'selected':'' ?> value="২০০৭">২০০৭</option>
                        <option <?php echo ($result['birth_year']=='২০০৮')? 'selected':'' ?> value="২০০৮">২০০৮</option>
                        <option <?php echo ($result['birth_year']=='২০০৯')? 'selected':'' ?> value="২০০৯">২০০৯</option>
                        <option <?php echo ($result['birth_year']=='২০১০')? 'selected':'' ?> value="২০১০">২০১০</option>
                        <option <?php echo ($result['birth_year']=='২০১১')? 'selected':'' ?> value="২০১১">২০১১</option>
                        <option <?php echo ($result['birth_year']=='২০১২')? 'selected':'' ?> value="২০১২">২০১২</option>
                        <option <?php echo ($result['birth_year']=='২০১৩')? 'selected':'' ?> value="২০১৩">২০১৩</option>
                        <option <?php echo ($result['birth_year']=='২০১৪')? 'selected':'' ?> value="২০১৪">২০১৪</option>
                        <option <?php echo ($result['birth_year']=='২০১৫')? 'selected':'' ?> value="২০১৫">২০১৫</option>
                        <option <?php echo ($result['birth_year']=='২০১৬')? 'selected':'' ?> value="২০১৬">২০১৬</option>
                        <option <?php echo ($result['birth_year']=='২০১৭')? 'selected':'' ?> value="২০১৭">২০১৭</option>
                        <option <?php echo ($result['birth_year']=='২০১৮')? 'selected':'' ?> value="২০১৮">২০১৮</option>
                        <option <?php echo ($result['birth_year']=='২০১৯')? 'selected':'' ?> value="২০১৯">২০১৯</option>
                        <option <?php echo ($result['birth_year']=='২০২০')? 'selected':'' ?> value="২০২০">২০২০</option>
                        <option <?php echo ($result['birth_year']=='২০২১')? 'selected':'' ?> value="২০২১">২০২১</option>
                        <option <?php echo ($result['birth_year']=='২০২২')? 'selected':'' ?> value="২০২২">২০২২</option>
                        <option>২০২৩</option>
                        <option>২০২৪</option>
                        <option>২০২৫</option>
                        <option>২০২৬</option>
                        <option>২০২৭</option>
                        <option>২০২৮</option>
                        <option>২০২৯</option>
                        <option>২০৩০</option>
                        <option>২০৩১</option>
                        <option>২০৩২</option>
                        <option>২০৩৩</option>
                        <option>২০৩৪</option>
                        <option>২০৩৫</option>
                        <option>২০৩৬</option>
                        <option>২০৩৭</option>
                        <option>২০৩৮</option>
                        <option>২০৩৯</option>
                        <option>২০৪০</option>
                        <option>২০৪১</option>
                        <option>২০৪২</option>
                        <option>২০৪৩</option>
                        <option>২০৪৪</option>
                        <option>২০৪৫</option>
                        <option>২০৪৬</option>
                        <option>২০৪৭</option>
                        <option>২০৪৮</option>
                        <option>২০৪৯</option>
                        <option>২০৫০</option>
                        <option>২০৫১</option>


                    </select>
                </td>
                <td colspan="3">
                    <select class="form-control10" name="blood_group">
                        <option>সিলেক্ট করুন</option>
                        <option <?php echo ($result['blood_group']=='A+')? 'selected':'' ?> value="A+">A+</option>
                        <option <?php echo ($result['blood_group']=='A-')? 'selected':'' ?> value="A-">A-</option>
                        <option <?php echo ($result['blood_group']=='B+')? 'selected':'' ?> value="B+">B+</option>
                        <option <?php echo ($result['blood_group']=='B-')? 'selected':'' ?> value="B-">B-</option>
                        <option <?php echo ($result['blood_group']=='AB+')? 'selected':'' ?> value="AB+">AB+</option>
                        <option <?php echo ($result['blood_group']=='AB-')? 'selected':'' ?> value="AB-">AB-</option>
                        <option <?php echo ($result['blood_group']=='O+')? 'selected':'' ?> value="O+">O+</option>
                        <option <?php echo ($result['blood_group']=='O-')? 'selected':'' ?> value="O-">O-</option>
                    </select>
                </td>
                <td colspan="3">
                    <select class="form-control10" name="religion" required>
                        <option>সিলেক্ট করুন</option>
                        <option <?php echo ($result['religion']=='ইসলাম')? 'selected':'' ?> value="ইসলাম">ইসলাম</option>
                        <option <?php echo ($result['religion']=='হিন্দু')? 'selected':'' ?> value="হিন্দু">হিন্দু</option>
                        <option <?php echo ($result['religion']=='খ্রিষ্ঠান')? 'selected':'' ?> value="খ্রিষ্ঠান">খ্রিষ্ঠান</option>
                        <option <?php echo ($result['religion']=='বৌদ্ধ')? 'selected':'' ?> value="বৌদ্ধ">বৌদ্ধ</option>
                    </select>
                </td>
            </tr>
            </tr><tr>
                <th colspan="7">জন্ম নিবন্ধন নাম্বার</th>
            </tr>
            <tr>
                <td colspan="7"><input type="text" value="<?php echo $result['birth_reg_num']; ?>" class="form-control3" name="birth_reg_num"></td>
            </tr>
            <tr>
                <th colspan="6">সর্বশেষ অধ্যয়ন প্রতিষ্ঠানের নাম</th>
                <th colspan="3">ছেড়ে আসার কারন</th>
            </tr>
            <tr>
                <td colspan="6"><input type="text" value="<?php echo $result['last_study_orga']; ?>" class="form-control12" name="last_study_orga"></td>
                <td colspan="3"><input type="text" value="<?php echo $result['why_left']; ?>" class="form-control10" name="why_left"></td>
            </tr>
            <tr>
                <th colspan="7">সর্বশেষ ছেড়ে আসা প্রতিষ্ঠানের ঠিকানা (ফোন নাম্বার  সহ)</th>
            </tr>
            <tr>
                <td colspan="7"><input type="text" value="<?php echo $result['last_Orga_phone']; ?>" class="form-control3" name="last_Orga_phone"></td>
            </tr>

            <tr>
                <td colspan="7"><center><h3>বর্তমান ঠিকানা</h3></center></td>
            </tr>
            <tr>

                <th colspan="3">বাড়ির নাম</th>
                <th colspan="3">বাড়ি / হোল্ডিং নাম্বার</th>
                <th colspan="3"> রোড নাম্বার</th>
            </tr>


            <tr>
                <td colspan="3"><input type="text" value="<?php echo $result['home_name']; ?>" class="form-control10" name="home_name" ></td>
                <td colspan="3"><input type="text" value="<?php echo $result['hoding_number']; ?>" class="form-control10" name="hoding_number"></td>
                <td colspan="3"><input type="text" value="<?php echo $result['road_number']; ?>" class="form-control10" name=" road_number"></td>

            </tr>

            <tr>
                <th colspan="3">গ্রাম / পাড়া / মহল্লার নাম<font color="red" size="4">*</font></th>
                <th colspan="3">ডাকঘর<font color="red" size="4">*</font></th>
                <th colspan="3"> ইউনিয়ন / পৌরসভার নাম<font color="red" size="4">*</font></th>
            </tr>
            <tr>
                <td colspan="3"><input type="text" value="<?php echo $result['village_name']; ?>" class="form-control10" name="village_name" required></td>
                <td colspan="3"><input type="text" value="<?php echo $result['postoffice']; ?>" class="form-control10" name="postoffice" required></td>
                <td colspan="3"><input type="text" value="<?php echo $result['unione_name']; ?>" class="form-control10" name=" unione_name" required></td>
            </tr>
            <tr>
                <th colspan="3">উপজেলা / থানার নাম<font color="red" size="4">*</font></th>
                <th colspan="3">জেলার নাম<font color="red" size="4">*</font></th>
                <th colspan="3"> পোষ্ট কোড নাম্বার</th>
            </tr>
            <tr>
                <td colspan="3"><input type="text" value="<?php echo $result['thana_name']; ?>" class="form-control10" name="thana_name" required></td>
                <td colspan="3"><input type="text" value="<?php echo $result['district_name']; ?>" class="form-control10" name="district_name" required></td>
                <td colspan="3"><input type="text" value="<?php echo $result['postcode']; ?>" class="form-control10" name=" postcode"></td>
            </tr>

            <tr>
            <tr>
                <td colspan="7"><center><h3>স্থায়ী ঠিকানা</h3></center></td>
            </tr>
            <tr>
                <th colspan="3">বাড়ির নাম</th>
                <th colspan="3">বাড়ি / হোল্ডিং নাম্বার</th>
                <th colspan="3"> রোড নাম্বার</th>
            </tr>

            <tr>
                <td colspan="3"><input type="text" value="<?php echo $result['lasting_home_name']; ?>" class="form-control10" name="lasting_home_name"></td>
                <td colspan="3"><input type="text" value="<?php echo $result['lasting_holding_number']; ?>" class="form-control10" name="lasting_holding_number"></td>
                <td colspan="3"><input type="text" value="<?php echo $result['lasting_road_number']; ?>" class="form-control10" name=" lasting_road_number"></td>
            </tr>

            <tr>
                <th colspan="3">গ্রাম / পাড়া / মহল্লার নাম</th>
                <th colspan="3">ডাকঘর</th>
                <th colspan="3"> ইউনিয়ন / পৌরসভার নাম</th>
            </tr>
            <tr>
                <td colspan="3"><input type="text" value="<?php echo $result['lasting_village']; ?>" class="form-control10" name="lasting_village"></td>
                <td colspan="3"><input type="text" value="<?php echo $result['lasting_postoffice']; ?>" class="form-control10" name="lasting_postoffice"></td>
                <td colspan="3"><input type="text" value="<?php echo $result['lasting_unione']; ?>" class="form-control10" name=" lasting_unione"></td>
            </tr>
            <tr>
                <th colspan="3">উপজেলা / থানার নাম</th>
                <th colspan="3">জেলার নাম</th>
                <th colspan="3"> পোষ্ট কোড নাম্বার</th>
            </tr>
            <tr>
                <td colspan="3"><input type="text" value="<?php echo $result['lasting_thana']; ?>" class="form-control10" name="lasting_thana"></td>
                <td colspan="3"><input type="text" value="<?php echo $result['lasting_district']; ?>" class="form-control10" name="lasting_district"></td>
                <td colspan="3"><input type="text" value="<?php echo $result['lasting_postcode']; ?>" class="form-control10" name=" lasting_postcode"></td>
            </tr>
            <tr>
                <td colspan="7"><center><h2>অভিভাবকের তথ্যাবলী</h2></center></td>
            </tr>
            <tr>
                <th colspan="7">পিতার নাম<font color="red" size="4">*</font></th>
            </tr>
            <tr>
                <td colspan="7"><input type="text" value="<?php echo $result['father_name']; ?>" class="form-control3" name="father_name" required></td>
            </tr>
            <tr>
                <th colspan="3">পেশা<font color="red" size="4">*</font></th>
                <th colspan="3">মাসিক আয়</th>
                <th colspan="3">শিক্ষাগত যোগ্যতা</th>
            </tr>

            <tr>
                <td colspan="3"><input type="text" value="<?php echo $result['father_occupation']; ?>" class="form-control10" name="father_occupation" required></td>
                <td colspan="3"><input type="text" value="<?php echo $result['fa_monthly_income']; ?>" class="form-control10" name="fa_monthly_income" ></td>
                <td colspan="3"><input type="text" value="<?php echo $result['fa_edu_quali']; ?>" class="form-control10" name=" fa_edu_quali"></td>
            </tr>
            <tr>
                <th colspan="6">ফোন নাম্বার</th>
                <th colspan="3">ইমেইলঃ</th>
            </tr>
            <tr>
                <td colspan="6"><input type="text" value="<?php echo $result['father_phone']; ?>" class="form-control12" name="father_phone"></td>
                <td colspan="3"><input type="text" value="<?php echo $result['father_email']; ?>" class="form-control10" name="father_email"></td>
            </tr>
            <tr>
                <th colspan="7">জাতীয় পরিচয় পত্র / পাসপোর্ট / ড্রাইভিং লাইসেন্সের নাম্বার</th>
            </tr>
            <tr>
                <td colspan="7"><input type="text" value="<?php echo $result['father_national_id']; ?>" class="form-control3" name="father_national_id"></td>
            </tr>
            <tr>
                <th colspan="7">মাতার নাম<font color="red" size="3">*</font></th>
            </tr>
            <tr>
                <td colspan="7"><input type="text" value="<?php echo $result['mother_name']; ?>" class="form-control3" name="mother_name" required></td>
            </tr>
            <tr>
                <th colspan="3">পেশা<font color="red" size="3">*</font></th>
                <th colspan="3">মাসিক আয়</th>
                <th colspan="3">শিক্ষাগত যোগ্যতা</th>
            </tr>

            <tr>
                <td colspan="3"><input type="text" value="<?php echo $result['mother_occupation']; ?>" class="form-control10" name="mother_occupation" required></td>
                <td colspan="3"><input type="text" value="<?php echo $result['mo_monthly_income']; ?>" class="form-control10" name="mo_monthly_income"></td>
                <td colspan="3"><input type="text" value="<?php echo $result['mo_edu_quali']; ?>" class="form-control10" name=" mo_edu_quali"></td>
            </tr>
            <tr>
                <th colspan="6">ফোন নাম্বার</th>
                <th colspan="3">ইমেইলঃ</th>
            </tr>
            <tr>
                <td colspan="6"><input type="text" value="<?php echo $result['mother_phone']; ?>" class="form-control12" name="mother_phone"></td>
                <td colspan="3"><input type="text" value="<?php echo $result['mother_email']; ?>" class="form-control10" name="mother_email"></td>
            </tr>
            <tr>
                <th colspan="7">জাতীয় পরিচয় পত্র / পাসপোর্ট / ড্রাইভিং লাইসেন্সের নাম্বার</th>
            </tr>
            <tr>
                <td colspan="7"><input type="text" value="<?php echo $result['mo_national_id']; ?>" class="form-control3" name="mo_national_id"></td>
            </tr>
            <tr>
                <th colspan="7">পিতা / মাতার অবর্তমানে স্থানীয় অভিভাবকের নাম</th>
            </tr>
            <tr>
                <td colspan="7"><input type="text" value="<?php echo $result['local_gurdian']; ?>" class="form-control3" name="local_gurdian"></td>
            </tr>
            <tr>
                <th colspan="3">পেশা</th>
                <th colspan="3">সম্পর্ক</th>
                <th colspan="3">শিক্ষাগত যোগ্যতা</th>
            </tr>

            <tr>
                <td colspan="3"><input type="text" value="<?php echo $result['local_occupation']; ?>" class="form-control10" name="local_occupation"></td>
                <td colspan="3"><input type="text" value="<?php echo $result['relation']; ?>" class="form-control10" name="relation"></td>
                <td colspan="3"><input type="text" value="<?php echo $result['local_edu']; ?>" class="form-control10" name=" local_edu"></td>
            </tr>
            <tr>
                <th colspan="6">ফোন নাম্বার</th>
                <th colspan="3">ইমেইলঃ</th>
            </tr>
            <tr>
                <td colspan="6"><input type="text" value="<?php echo $result['local_phone']; ?>" class="form-control12" name="local_phone"></td>
                <td colspan="3"><input type="text" value="<?php echo $result['local_email']; ?>" class="form-control10" name="local_email"></td>
            </tr>
            <tr>
                <th colspan="7">জাতীয় পরিচয় পত্র / পাসপোর্ট / ড্রাইভিং লাইসেন্সের নাম্বার</th>
            </tr>
            <tr>
                <td colspan="7"><input type="text" value="<?php echo $result['local_national_id']; ?>" class="form-control3" name="local_national_id"></td>
            </tr>
            <br />
            <tr>
                <th colspan="3">শিক্ষার্থী ছবি<font color="red" size="4">*</font></th>
                <th colspan="3"> পিতার ছবি<font color="red" size="4">*</font></th>
                <th colspan="3">মাতার ছবি<font color="red" size="4">*</font></th>
            </tr>
            <tr>
                <!--                    <td colspan="3"><input type="file" name="student_image" onchange="readURL(this); id="image"></td>-->
                <!--                    <td colspan="3"><img id="blah" src="#" alt="your image" /></td>-->
                <!---->
                <!--                    <td colspan="3"><input type="file" name="father_image" onchange="readURL2(this); id="image"></td>-->
                <!--                    <td colspan="3"><img id="blah2" src="#" alt="your image" /></td>-->
                <!---->
                <!--                    <td colspan="3"><input type="file" name="mother_image" onchange="readURL3(this); id="image"></td>-->
                <!--                    <td colspan="3"><img id="blah3" src="#" alt="your image" /></td>-->

                <?php
                if(isset($_SESSION['imgSize'])){
                    echo "<div class='alert alert-success'>".$_SESSION['imgSize']."</div>";
                    session_unset();
                }

                ?>
                <td colspan="3">
                    <input type='file' name="student_image" value="<?php echo $result['student_image']?>"  onchange="readURL(this);" />

                    <img id="blah" src="../uploads/<?php echo $result['student_image']?>" width="100" alt=" " />
                </td>

                <td colspan="3">
                    <input type='file' name="father_image" onchange="readURL2(this);" />
                    <img id="blah2" <img src="../uploads/<?php echo $result['father_image']?>" width="100" alt="">
                </td>
                <td colspan="3">
                    <input type='file' name="mother_image" onchange="readURL3(this);" />
                    <img id="blah3" <img src="../uploads/<?php echo $result['mother_image']?>" width="100" alt="">
                </td>
            </tr>

            <!--                <input type='file' onchange="readURL(this);" />-->
            <!--                <img id="blah" src="#" alt="your image" />-->
            <!---->
            <!---->
            <!--                <input type='file' onchange="readURL2(this);" />-->
            <!--                <img id="blah2" src="#" alt="your image" />-->
            <!---->
            <!--                <input type='file' onchange="readURL3(this);" />-->
            <!--                <img id="blah3" src="#" alt="your image" />-->

            <br />
            <br />
            <tr>
                <td colspan="">
                    <input type="reset" class="btn btn-info" name="reset" value="Reset">
                    <input type="submit" class="btn btn-primary" name="submit" value="Update">
                </td>
            </tr>
        </table>

    </form>

    <!--main form end here-->





<?php  //include '../includes/footer.php' ?>