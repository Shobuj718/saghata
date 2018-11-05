<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 15-Nov-17
 * Time: 10:34 AM
 */

error_reporting(0);
include '../config/config.php';
include '../Database/Database.php';


$db = new Database();

//echo "<pre>";
//var_dump($_POST);
//echo "</pre>";
//
//$query = "select * from tbl_slogan where id='1'";
//$blog_title = $db->select($query);
//if($blog_title) {
//    while ($result = $blog_title->fetch_assoc()) {
//    }
//}
//
echo "<pre>";
var_dump($_POST);
echo "</pre>";



//die();



if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sex                = mysqli_real_escape_string($db->link, $_POST['sex']);
    $student_name       = mysqli_real_escape_string($db->link, $_POST['student_name']);
    $class              = mysqli_real_escape_string($db->link, $_POST['class']);
    $shift              = mysqli_real_escape_string($db->link, $_POST['shift']);
    $branch             = mysqli_real_escape_string($db->link, $_POST['branch']);
    $department         = mysqli_real_escape_string($db->link, $_POST['department']);
    $student_id         = mysqli_real_escape_string($db->link, $_POST['student_id']);
    $class_roll         = mysqli_real_escape_string($db->link, $_POST['class_roll']);
    $year               = mysqli_real_escape_string($db->link, $_POST['year']);
    $birth_day          = mysqli_real_escape_string($db->link, $_POST['birth_day']);
    $birth_month        = mysqli_real_escape_string($db->link, $_POST['birth_month']);
    $birth_year         = mysqli_real_escape_string($db->link, $_POST['birth_year']);
    $blood_group        = mysqli_real_escape_string($db->link, $_POST['blood_group']);
    $religion           = mysqli_real_escape_string($db->link, $_POST['religion']);
    $birth_reg_num      = mysqli_real_escape_string($db->link, $_POST['birth_reg_num']);
    $last_study_orga    = mysqli_real_escape_string($db->link, $_POST['last_study_orga']);
    $why_left           = mysqli_real_escape_string($db->link, $_POST['why_left']);
    $last_Orga_phone    = mysqli_real_escape_string($db->link, $_POST['last_Orga_phone']);
    $home_name          = mysqli_real_escape_string($db->link, $_POST['home_name']);
    $hoding_number      = mysqli_real_escape_string($db->link, $_POST['hoding_number']);
    $road_number        = mysqli_real_escape_string($db->link, $_POST['road_number']);
    $village_name       = mysqli_real_escape_string($db->link, $_POST['village_name']);
    $postoffice         = mysqli_real_escape_string($db->link, $_POST['postoffice']);
    $unione_name        = mysqli_real_escape_string($db->link, $_POST['unione_name']);
    $thana_name         = mysqli_real_escape_string($db->link, $_POST['thana_name']);
    $district_name      = mysqli_real_escape_string($db->link, $_POST['district_name']);
    $postcode           = mysqli_real_escape_string($db->link, $_POST['postcode']);
    $lasting_home_name  = mysqli_real_escape_string($db->link, $_POST['lasting_home_name']);
    $lasting_holding_number = mysqli_real_escape_string($db->link, $_POST['lasting_holding_number']);
    $lasting_road_number = mysqli_real_escape_string($db->link, $_POST['lasting_road_number']);
    $lasting_village     = mysqli_real_escape_string($db->link, $_POST['lasting_village']);
    $lasting_postoffice  = mysqli_real_escape_string($db->link, $_POST['lasting_postoffice']);
    $lasting_unione      = mysqli_real_escape_string($db->link, $_POST['lasting_unione']);
    $lasting_thana       = mysqli_real_escape_string($db->link, $_POST['lasting_thana']);
    $lasting_district    = mysqli_real_escape_string($db->link, $_POST['lasting_district']);
    $lasting_postcode    = mysqli_real_escape_string($db->link, $_POST['lasting_postcode']);
    $father_name         = mysqli_real_escape_string($db->link, $_POST['father_name']);
    $father_occupation   = mysqli_real_escape_string($db->link, $_POST['father_occupation ']);
    $fa_monthly_income   = mysqli_real_escape_string($db->link, $_POST['fa_monthly_income']);
    $fa_edu_quali        = mysqli_real_escape_string($db->link, $_POST['fa_edu_quali']);
    $father_phone        = mysqli_real_escape_string($db->link, $_POST['father_phone']);
    $father_email        = mysqli_real_escape_string($db->link, $_POST['father_email']);
    $father_national_id  = mysqli_real_escape_string($db->link, $_POST['father_national_id']);
    $mother_name         = mysqli_real_escape_string($db->link, $_POST['mother_name']);
    $mother_occupation   = mysqli_real_escape_string($db->link, $_POST['mother_occupation']);
    $mo_monthly_income   = mysqli_real_escape_string($db->link, $_POST['mo_monthly_income']);
    $mo_edu_quali        = mysqli_real_escape_string($db->link, $_POST['mo_edu_quali']);
    $mother_phone        = mysqli_real_escape_string($db->link, $_POST['mother_phone']);
    $mother_email        = mysqli_real_escape_string($db->link, $_POST['mother_email']);
    $mo_national_id      = mysqli_real_escape_string($db->link, $_POST['mo_national_id']);
    $local_gurdian       = mysqli_real_escape_string($db->link, $_POST['local_gurdian']);
    $local_occupation    = mysqli_real_escape_string($db->link, $_POST['local_occupation']);
    $relation            = mysqli_real_escape_string($db->link, $_POST['relation']);
    $local_edu           = mysqli_real_escape_string($db->link, $_POST['local_edu']);
    $local_phone         = mysqli_real_escape_string($db->link, $_POST['local_phone']);
    $local_email         = mysqli_real_escape_string($db->link, $_POST['local_email']);
    $local_national_id   = mysqli_real_escape_string($db->link, $_POST['local_national_id']);
    $student_image   = mysqli_real_escape_string($db->link, $_POST['student_image']);
    $father_image        = mysqli_real_escape_string($db->link, $_POST['father_image']);
    $mother_image        = mysqli_real_escape_string($db->link, $_POST['mother_image']);


//        $permited  = array('jpg','jpeg','png','gif');
//        $file_name = $_FILES['student_image']['name'];
//        $file_size = $_FILES['student_image']['size'];
//        $file_temp = $_FILES['student_image']['tmp_name'];
//
//        $div = explode('.', $file_name);
//        $file_ext = strtolower(end($div));
//        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
//        $upload_image = "upload/".$unique_image;



//$pic1=($_FILES['photo1']['name']);
//$pic2=($_FILES['photo2']['name']);
//$pic3=($_FILES['photo3']['name']);
////$target = "../uploads/".;
//for($i=1;$i<=3;$i++) {
//    if (move_uploaded_file($_FILES['photo' . $i]['tmp_name'], '../uploads/' . $_FILES['photo1']['name'])) ;
//    {
//
////Tells you if its all ok
//        echo "The file " . basename($_FILES['uploadedfile']['name']) . " has been uploaded, and your information has been added to the directory";
//    }
//}

    //$uploadMainTo = null;
//        $unique_image = "";
//        $unique_image1 = "";
//        $unique_image2 = "";
//if(isset($_FILES['student_image'])){
//
//
//        $_POST['image'] = $_FILES['student_image']['name'];
//        $image_tmp_name = $_FILES['student_image']['tmp_name'];
//        $permited  = array('jpg','jpeg','png','gif');
//        $file_size = $_FILES['student_image']['size'];
//        $div = explode('.', $_POST['image']);
//        $file_ext = strtolower(end($div));
//
//        $unique_image =  substr(md5(time()),'0','10');
//        $data = explode('.',$_POST['image']);
//        $_POST['image'] = $unique_image.'.'.end($data);
//        move_uploaded_file($image_tmp_name,'../uploads/'.$_POST['image']);
//        }
//        //father image upload
//if(isset($_FILES['father_image'])) {
//
//    $_POST['image1'] = $_FILES['father_image']['name'];
//    $image_tmp_name1 = $_FILES['father_image']['tmp_name'];
//    $permited = array('jpg', 'jpeg', 'png', 'gif');
//    $file_size = $_FILES['father_image']['size'];
//    $div1 = explode('.', $_POST['image1']);
//    $file_ext1 = strtolower(end($div1));
//
//    $unique_image1 = substr(md5(time()), '0', '10');
//    $data1 = explode('.', $_POST['image1']);
//    $_POST['image1'] = $unique_image1 . '.' . end($data1);
//    move_uploaded_file($image_tmp_name1, '../uploads/' . $_POST['image1']);
//}
//if(isset($_FILES['mother_image'])) {
//
//    //mother image upload
//    $_POST['image2'] = $_FILES['mother_image']['name'];
//    $image_tmp_name2 = $_FILES['mother_image']['tmp_name'];
//    $permited = array('jpg', 'jpeg', 'png', 'gif');
//    $file_size = $_FILES['mother_image']['size'];
//    $div2 = explode('.', $_POST['image']);
//    $file_ext = strtolower(end($div2));
//
//    $unique_image2 = substr(md5(time()), '0', '10');
//    $data2 = explode('.', $_POST['image2']);
//    $_POST['image2'] = $unique_image2 . '.' . end($data2);
//    move_uploaded_file($image_tmp_name2, '../uploads/' . $_POST['image2']);
//}
    //move_uploaded_file($image_tmp_name,'../uploads/'.$_POST['image']);

//       if($title == "" || $cat == "" || $body == "" || $tags == "" || $author == "" || $file_name == ""){
//            echo "<span class='error'>Field must not by empty !</span>";
//        }


    $uploadMainTo = null;
    if (isset($_FILES['student_image'])) {
        $student_image = $_FILES['student_image']['name'];
        $main_image_size = $_FILES['student_image']['size'];
        $main_image_tmp = $_FILES['student_image']['tmp_name'];

//        $div = explode('.', $student_image);
//        $file_ext = strtolower(end($div));
//        $student_image = substr(md5(time()), 0, 10).'.'.$file_ext;
//        echo $student_image;


        //$upload_image = "upload/".$unique_image;

//   $permited = array('jpg', 'jpeg', 'png', 'gif');
//   $file_size = $_FILES['student_image']['size'];
//   $div2 = explode('.', $student_image);
//   $file_ext = strtolower(end($div2));
//   $unique_image2 = substr(md5(time()), '0', '10');
//   $data2 = explode('.', $student_image);
//   $student_image = $unique_image2 . '.' . end($data2);

        $uploadMainTo = "../uploads/" . $student_image;
        $moveMain = move_uploaded_file($main_image_tmp, $uploadMainTo);
    }
    echo "<pre>";
    var_dump($_FILES);
    echo "</pre>";

    $uploadSecondTo = null;
    if (isset($_FILES['father_image'])) {
        $father_image = $_FILES['father_image']['name'];
        $second_image_size = $_FILES['father_image']['size'];
        $second_image_tmp = $_FILES['father_image']['tmp_name'];
        $uploadSecondTo = "../uploads/" . $father_image;
        $moveSecond = move_uploaded_file($second_image_tmp, $uploadSecondTo);
    }

    $uploadPdfTo = null;
    if (isset($_FILES['mother_image'])) {
        $mother_image = $_FILES['mother_image']['name'];
        $pdf_size = $_FILES['mother_image']['size'];
        $pdf_tmp = $_FILES['mother_image']['tmp_name'];
        $uploadPdfTo = "../uploads/" . $mother_image;
        $movepdf = move_uploaded_file($pdf_tmp, $uploadPdfTo);
    }




    if($file_size > 1048576){
        echo "<span class='error'>Image size should be less then 1MB !</span>";
    }
    elseif (in_array($file_ext, $permited) == false) {
        echo "<span class='error'>You can upload only:-".implode(',', $permited)."</span>";
    }
    //else{
    //move_uploaded_file($file_temp, "../upload/".$unique_image);
    //move_uploaded_file($image_tmp_name,'../uploads/'.$_POST['image']);
    $query = "INSERT INTO student_data(sex, student_name, class, shift, branch, department, student_id, class_roll, year, birth_day, birth_month, birth_year, blood_group, religion, birth_reg_num, last_study_orga, why_left, last_Orga_phone, home_name, hoding_number, road_number, village_name, postoffice, unione_name, thana_name, district_name, postcode, lasting_home_name, lasting_holding_number, lasting_road_number, lasting_village, lasting_postoffice, lasting_unione, lasting_thana, lasting_district, lasting_postcode, father_name, father_occupation, fa_monthly_income, fa_edu_quali, father_phone, father_email, father_national_id, mother_name, mother_occupation, mo_monthly_income, mo_edu_quali, mother_phone, mother_email, mo_national_id, local_gurdian, local_occupation, relation, local_edu, local_phone, local_email, local_national_id, student_image, father_image, mother_image ) 

VALUES('$sex','$student_name','$class','$shift','$branch','$department','$student_id','$class_roll','$year','$birth_day','$birth_month','$birth_year','$blood_group','$religion','$birth_reg_num','$last_study_orga','$why_left', '$last_Orga_phone', '$home_name', '$hoding_number', '$road_number', '$village_name', '$postoffice', '$unione_name', '$thana_name', '$district_name', '$postcode', '$lasting_home_name', '$lasting_holding_number', '$lasting_road_number', '$lasting_village', '$lasting_postoffice', '$lasting_unione', '$lasting_thana', '$lasting_district', '$lasting_postcode', '$father_name', '$father_occupation', '$fa_monthly_income', '$fa_edu_quali', '$father_phone', '$father_email', '$father_national_id', '$mother_name', '$mother_occupation', '$mo_monthly_income', '$mo_edu_quali', '$mother_phone', '$mother_email', '$mo_national_id', '$local_gurdian', '$local_occupation', '$relation', '$local_edu', '$local_phone', '$local_email', '$local_national_id', '$student_image', '$father_image', '$mother_image' )";

    $inserted_rows = $db->insert($query);
    if($inserted_rows){
        echo "<span class='success'>Data Inserted successful.</span>";
    }
    else{
        echo "<span class='error'>Data not inserted !</span>";
    }
    //}

}




?>
