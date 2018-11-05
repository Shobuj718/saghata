
<?php

//echo "<pre>";
//var_dump($_POST);
//echo "<pre>";
//var_dump($_FILES);
//echo $_POST['id'];
//
//die();

//error_reporting(0);

$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

//or !empty($_FILES['student_image']['name']) or  !empty($_FILES['student_image']['name'])
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_FILES['student_image']['name'])){

        $id = $_POST['id'];

        $sex = $_POST['sex'];
        $student_name = $_POST['student_name'];
        $class = $_POST['class'];
        $shift = $_POST['shift'];
        $branch = $_POST['branch'];
        $department = $_POST['department'];
        $student_id = $_POST['student_id'];
        $class_roll = $_POST['class_roll'];
        $year = $_POST['year'];
        $birth_day = $_POST['birth_day'];
        $birth_month = $_POST['birth_month'];
        $birth_year = $_POST['birth_year'];
        $blood_group = $_POST['blood_group'];
        $religion = $_POST['religion'];
        $birth_reg_num = $_POST['birth_reg_num'];
        $last_study_orga = $_POST['last_study_orga'];
        $why_left = $_POST['why_left'];
        $last_Orga_phone = $_POST['last_Orga_phone'];
        $home_name = $_POST['home_name'];
        $hoding_number = $_POST['hoding_number'];
        $road_number = $_POST['road_number'];
        $village_name = $_POST['village_name'];
        $postoffice = $_POST['postoffice'];
        $unione_name = $_POST['unione_name'];
        $thana_name = $_POST['thana_name'];
        $district_name = $_POST['district_name'];
        $postcode = $_POST['postcode'];
        $lasting_home_name = $_POST['lasting_home_name'];
        $lasting_holding_number = $_POST['lasting_holding_number'];
        $lasting_road_number = $_POST['lasting_road_number'];
        $lasting_village = $_POST['lasting_village'];
        $lasting_postoffice = $_POST['lasting_postoffice'];
        $lasting_unione = $_POST['lasting_unione'];
        $lasting_thana = $_POST['lasting_thana'];
        $lasting_district = $_POST['lasting_district'];
        $lasting_postcode = $_POST['lasting_postcode'];
        $father_name = $_POST['father_name'];
        $father_occupation = $_POST['father_occupation'];
        $fa_monthly_income = $_POST['fa_monthly_income'];
        $fa_edu_quali = $_POST['fa_edu_quali'];
        $father_phone = $_POST['father_phone'];
        $father_email = $_POST['father_email'];
        $father_national_id = $_POST['father_national_id'];
        $mother_name = $_POST['mother_name'];
        $mother_occupation = $_POST['mother_occupation'];
        $mo_monthly_income = $_POST['mo_monthly_income'];
        $mo_edu_quali = $_POST['mo_edu_quali'];
        $mother_phone = $_POST['mother_phone'];
        $mother_email = $_POST['mother_email'];
        $mo_national_id = $_POST['mo_national_id'];
        $local_gurdian = $_POST['local_gurdian'];
        $local_occupation = $_POST['local_occupation'];
        $relation = $_POST['relation'];
        $local_edu = $_POST['local_edu'];
        $local_phone = $_POST['local_phone'];
        $local_email = $_POST['local_email'];
        $local_national_id = $_POST['local_national_id'];
        $student_image = $_FILES['student_image']['name'];
        $father_image = $_FILES['father_image']['name'];
        $mother_image = $_FILES['mother_image']['name'];


        $uploadMainTo = null;
        if (isset($_FILES['student_image'])) {
            $student_image = $_FILES['student_image']['name'];
            $main_image_size = $_FILES['student_image']['size'];
            $main_image_tmp = $_FILES['student_image']['tmp_name'];

            $name = substr(md5(time()), '0', '10');
            $data = explode('.', $student_image);
            $student_image = $name . '.' . end($data);

            $permited = array('jpg', 'jpeg', 'png', 'gif');
            $file_size = $_FILES['student_image']['size'];
            $div2 = explode('.', $student_image);
            $file_ext = strtolower(end($div2));

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
//echo "<pre>";
//var_dump($_FILES);
//echo "</pre>";

//
//        $uploadSecondTo = null;
//        if (isset($_FILES['father_image'])) {
//            $father_image = $_FILES['father_image']['name'];
//            $second_image_size = $_FILES['father_image']['size'];
//            $second_image_tmp = $_FILES['father_image']['tmp_name'];
//
//            $name = substr(md5('huj'), '0', '10');
//            $data = explode('.', $father_image);
//            $father_image = $name . '.' . end($data);
//
//            $permited = array('jpg', 'jpeg', 'png', 'gif');
//            $file_size = $_FILES['father_image']['size'];
//            $div2 = explode('.', $father_image);
//            $file_ext = strtolower(end($div2));
//
//
//            $uploadSecondTo = "../uploads/" . $father_image;
//            $moveSecond = move_uploaded_file($second_image_tmp, $uploadSecondTo);
//        }
//
//        $uploadPdfTo = null;
//        if (isset($_FILES['mother_image'])) {
//            $mother_image = $_FILES['mother_image']['name'];
//            $pdf_size = $_FILES['mother_image']['size'];
//            $pdf_tmp = $_FILES['mother_image']['tmp_name'];
//
//            $name = substr(md5('shobuj'), '0', '10');
//            $data = explode('.', $mother_image);
//            $mother_image = $name . '.' . end($data);
//
//            $permited = array('jpg', 'jpeg', 'png', 'gif');
//            $file_size = $_FILES['mother_image']['size'];
//            $div2 = explode('.', $mother_image);
//            $file_ext = strtolower(end($div2));
//
//            $uploadPdfTo = "../uploads/" . $mother_image;
//            $movepdf = move_uploaded_file($pdf_tmp, $uploadPdfTo);
//        }


//if($file_size > 1048576){
//    echo "<span class='error' style='color: red;'>Image size should be less then 1MB !</span>";
//    //$_SESSION['imgSize'] = $imgSize;
//    //die();
//}
//elseif (in_array($file_ext, $permited) == false) {
//    echo "<span class='error' style='color: red;'>You can upload only:-".implode(', ', $permited)."</span>";
//}


        $stmt = $db->prepare("UPDATE `student_data` SET
 
        sex = :sex,
        student_name = :student_name,
        class = :class,
        shift = :shift,
        branch = :branch,
        department = :department,
        student_id = :student_id,
        class_roll = :class_roll,
        year = :year,
        birth_day = :birth_day,
        birth_month = :birth_month,
        birth_year = :birth_year, 
        blood_group = :blood_group,
        religion = :religion, 
        birth_reg_num = :birth_reg_num, 
        last_study_orga = :last_study_orga, 
        why_left = :why_left, 
        last_Orga_phone = :last_Orga_phone,
        home_name = :home_name, 
        hoding_number = :hoding_number, 
        road_number = :road_number, 
        village_name = :village_name, 
        postoffice = :postoffice, 
        unione_name = :unione_name, 
        thana_name = :thana_name, 
        district_name = :district_name, 
        postcode = :postcode, 
        lasting_home_name = :lasting_home_name, 
        lasting_holding_number = :lasting_holding_number, 
        lasting_road_number = :lasting_road_number, 
        lasting_village = :lasting_village, 
        lasting_postoffice = :lasting_postoffice, 
        lasting_unione = :lasting_unione, 
        lasting_thana = :lasting_thana, 
        lasting_district = :lasting_district, 
        lasting_postcode = :lasting_postcode, 
        father_name = :father_name, 
        father_occupation = :father_occupation, 
        fa_monthly_income = :fa_monthly_income, 
        fa_edu_quali = :fa_edu_quali, 
        father_phone = :father_phone, 
        father_email = :father_email, 
        father_national_id = :father_national_id, 
        mother_name = :mother_name, 
        mother_occupation = :mother_occupation, 
        mo_monthly_income = :mo_monthly_income, 
        mo_edu_quali = :mo_edu_quali, 
        mother_phone = :mother_phone, 
        mother_email = :mother_email, 
        mo_national_id = :mo_national_id, 
        local_gurdian = :local_gurdian, 
        local_occupation = :local_occupation, 
        relation = :relation, 
        local_edu = :local_edu, 
        local_phone = :local_phone, 
        local_email = :local_email, 
        local_national_id = :local_national_id, 
        student_image = :student_image, 
        
        updated_at = NOW()
 
 WHERE id = :id;");

        $stmt->bindValue(':sex' , $sex, PDO::PARAM_STR);
        $stmt->bindValue(':student_name' , $student_name, PDO::PARAM_STR);
        $stmt->bindValue(':class',$class, PDO::PARAM_STR);
        $stmt->bindValue(':shift',$shift, PDO::PARAM_STR);
        $stmt->bindValue(':branch',$branch, PDO::PARAM_STR);
        $stmt->bindValue(':department',$department, PDO::PARAM_STR);
        $stmt->bindValue(':student_id',$student_id, PDO::PARAM_STR);
        $stmt->bindValue(':class_roll',$class_roll, PDO::PARAM_STR);
        $stmt->bindValue(':year',$year, PDO::PARAM_STR);
        $stmt->bindValue(':birth_day',$birth_day, PDO::PARAM_STR);
        $stmt->bindValue(':birth_month',$birth_month, PDO::PARAM_STR);
        $stmt->bindValue(':birth_year',$birth_year, PDO::PARAM_STR);
        $stmt->bindValue(':blood_group',$blood_group, PDO::PARAM_STR);
        $stmt->bindValue(':religion',$religion, PDO::PARAM_STR);
        $stmt->bindValue(':birth_reg_num',$birth_reg_num, PDO::PARAM_STR);
        $stmt->bindValue(':last_study_orga',$last_study_orga, PDO::PARAM_STR);
        $stmt->bindValue(':why_left',$why_left, PDO::PARAM_STR);
        $stmt->bindValue(':last_Orga_phone',$last_Orga_phone, PDO::PARAM_STR);
        $stmt->bindValue(':home_name',$home_name, PDO::PARAM_STR);
        $stmt->bindValue(':hoding_number',$hoding_number, PDO::PARAM_STR);
        $stmt->bindValue(':road_number',$road_number, PDO::PARAM_STR);
        $stmt->bindValue(':village_name',$village_name, PDO::PARAM_STR);
        $stmt->bindValue(':postoffice',$postoffice, PDO::PARAM_STR);
        $stmt->bindValue(':unione_name',$unione_name, PDO::PARAM_STR);
        $stmt->bindValue(':thana_name',$thana_name, PDO::PARAM_STR);
        $stmt->bindValue(':district_name',$district_name, PDO::PARAM_STR);
        $stmt->bindValue(':postcode',$postcode, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_home_name',$lasting_home_name, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_holding_number',$lasting_holding_number, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_road_number',$lasting_road_number, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_village',$lasting_village, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_postoffice',$lasting_postoffice, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_unione',$lasting_unione, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_thana',$lasting_thana, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_district',$lasting_district, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_postcode',$lasting_postcode, PDO::PARAM_STR);
        $stmt->bindValue(':father_name',$father_name, PDO::PARAM_STR);
        $stmt->bindValue(':father_occupation',$father_occupation, PDO::PARAM_STR);
        $stmt->bindValue(':fa_monthly_income',$fa_monthly_income, PDO::PARAM_STR);
        $stmt->bindValue(':fa_edu_quali',$fa_edu_quali, PDO::PARAM_STR);
        $stmt->bindValue(':father_phone',$father_phone, PDO::PARAM_STR);
        $stmt->bindValue(':father_email',$father_email, PDO::PARAM_STR);
        $stmt->bindValue(':father_national_id',$father_national_id, PDO::PARAM_STR);
        $stmt->bindValue(':mother_name',$mother_name, PDO::PARAM_STR);
        $stmt->bindValue(':mother_occupation',$mother_occupation, PDO::PARAM_STR);
        $stmt->bindValue(':mo_monthly_income',$mo_monthly_income, PDO::PARAM_STR);
        $stmt->bindValue(':mo_edu_quali',$mo_edu_quali, PDO::PARAM_STR);
        $stmt->bindValue(':mother_phone',$mother_phone, PDO::PARAM_STR);
        $stmt->bindValue(':mother_email',$mother_email, PDO::PARAM_STR);
        $stmt->bindValue(':mo_national_id',$mo_national_id, PDO::PARAM_STR);
        $stmt->bindValue(':local_gurdian',$local_gurdian, PDO::PARAM_STR);
        $stmt->bindValue(':local_occupation',$local_occupation, PDO::PARAM_STR);
        $stmt->bindValue(':relation',$relation, PDO::PARAM_STR);
        $stmt->bindValue(':local_edu',$local_edu, PDO::PARAM_STR);
        $stmt->bindValue(':local_phone',$local_phone, PDO::PARAM_STR);
        $stmt->bindValue(':local_email',$local_email, PDO::PARAM_STR);
        $stmt->bindValue(':local_national_id',$local_national_id, PDO::PARAM_STR);
        $stmt->bindValue(':student_image',$student_image, PDO::PARAM_STR);
        //$stmt->bindValue(':father_image',$father_image, PDO::PARAM_STR);
        //$stmt->bindValue(':mother_image',$mother_image, PDO::PARAM_STR);
        $stmt->bindValue(':id',$id, PDO::PARAM_STR);
        $result = $stmt->execute();




        if($result){
            $msg = "Student Data Updated Successfully";
            header("location:allstudent.php");
            //header("location:showStudent.php");
            //header("location:successUpdateMsg.php?msg=$id");
        }


    }

    elseif (!empty($_FILES['father_image']['name'])){

        $id = $_POST['id'];

        $sex = $_POST['sex'];
        $student_name = $_POST['student_name'];
        $class = $_POST['class'];
        $shift = $_POST['shift'];
        $branch = $_POST['branch'];
        $department = $_POST['department'];
        $student_id = $_POST['student_id'];
        $class_roll = $_POST['class_roll'];
        $year = $_POST['year'];
        $birth_day = $_POST['birth_day'];
        $birth_month = $_POST['birth_month'];
        $birth_year = $_POST['birth_year'];
        $blood_group = $_POST['blood_group'];
        $religion = $_POST['religion'];
        $birth_reg_num = $_POST['birth_reg_num'];
        $last_study_orga = $_POST['last_study_orga'];
        $why_left = $_POST['why_left'];
        $last_Orga_phone = $_POST['last_Orga_phone'];
        $home_name = $_POST['home_name'];
        $hoding_number = $_POST['hoding_number'];
        $road_number = $_POST['road_number'];
        $village_name = $_POST['village_name'];
        $postoffice = $_POST['postoffice'];
        $unione_name = $_POST['unione_name'];
        $thana_name = $_POST['thana_name'];
        $district_name = $_POST['district_name'];
        $postcode = $_POST['postcode'];
        $lasting_home_name = $_POST['lasting_home_name'];
        $lasting_holding_number = $_POST['lasting_holding_number'];
        $lasting_road_number = $_POST['lasting_road_number'];
        $lasting_village = $_POST['lasting_village'];
        $lasting_postoffice = $_POST['lasting_postoffice'];
        $lasting_unione = $_POST['lasting_unione'];
        $lasting_thana = $_POST['lasting_thana'];
        $lasting_district = $_POST['lasting_district'];
        $lasting_postcode = $_POST['lasting_postcode'];
        $father_name = $_POST['father_name'];
        $father_occupation = $_POST['father_occupation'];
        $fa_monthly_income = $_POST['fa_monthly_income'];
        $fa_edu_quali = $_POST['fa_edu_quali'];
        $father_phone = $_POST['father_phone'];
        $father_email = $_POST['father_email'];
        $father_national_id = $_POST['father_national_id'];
        $mother_name = $_POST['mother_name'];
        $mother_occupation = $_POST['mother_occupation'];
        $mo_monthly_income = $_POST['mo_monthly_income'];
        $mo_edu_quali = $_POST['mo_edu_quali'];
        $mother_phone = $_POST['mother_phone'];
        $mother_email = $_POST['mother_email'];
        $mo_national_id = $_POST['mo_national_id'];
        $local_gurdian = $_POST['local_gurdian'];
        $local_occupation = $_POST['local_occupation'];
        $relation = $_POST['relation'];
        $local_edu = $_POST['local_edu'];
        $local_phone = $_POST['local_phone'];
        $local_email = $_POST['local_email'];
        $local_national_id = $_POST['local_national_id'];
        $student_image = $_FILES['student_image']['name'];
        $father_image = $_FILES['father_image']['name'];
        $mother_image = $_FILES['mother_image']['name'];


//            $uploadMainTo = null;
//            if (isset($_FILES['student_image'])) {
//                $student_image = $_FILES['student_image']['name'];
//                $main_image_size = $_FILES['student_image']['size'];
//                $main_image_tmp = $_FILES['student_image']['tmp_name'];
//
//                $name = substr(md5(time()), '0', '10');
//                $data = explode('.', $student_image);
//                $student_image = $name . '.' . end($data);
//
//                $permited = array('jpg', 'jpeg', 'png', 'gif');
//                $file_size = $_FILES['student_image']['size'];
//                $div2 = explode('.', $student_image);
//                $file_ext = strtolower(end($div2));
//
////        $div = explode('.', $student_image);
////        $file_ext = strtolower(end($div));
////        $student_image = substr(md5(time()), 0, 10).'.'.$file_ext;
////        echo $student_image;
//
//
//                //$upload_image = "upload/".$unique_image;
//
////   $permited = array('jpg', 'jpeg', 'png', 'gif');
////   $file_size = $_FILES['student_image']['size'];
////   $div2 = explode('.', $student_image);
////   $file_ext = strtolower(end($div2));
////   $unique_image2 = substr(md5(time()), '0', '10');
////   $data2 = explode('.', $student_image);
////   $student_image = $unique_image2 . '.' . end($data2);
//
//                $uploadMainTo = "../uploads/" . $student_image;
//                $moveMain = move_uploaded_file($main_image_tmp, $uploadMainTo);
//            }
//echo "<pre>";
//var_dump($_FILES);
//echo "</pre>";

//
        $uploadSecondTo = null;
        if (isset($_FILES['father_image'])) {
            $father_image = $_FILES['father_image']['name'];
            $second_image_size = $_FILES['father_image']['size'];
            $second_image_tmp = $_FILES['father_image']['tmp_name'];

            $name = substr(md5('huj'), '0', '10');
            $data = explode('.', $father_image);
            $father_image = $name . '.' . end($data);

            $permited = array('jpg', 'jpeg', 'png', 'gif');
            $file_size = $_FILES['father_image']['size'];
            $div2 = explode('.', $father_image);
            $file_ext = strtolower(end($div2));


            $uploadSecondTo = "../uploads/" . $father_image;
            $moveSecond = move_uploaded_file($second_image_tmp, $uploadSecondTo);
        }
//
//        $uploadPdfTo = null;
//        if (isset($_FILES['mother_image'])) {
//            $mother_image = $_FILES['mother_image']['name'];
//            $pdf_size = $_FILES['mother_image']['size'];
//            $pdf_tmp = $_FILES['mother_image']['tmp_name'];
//
//            $name = substr(md5('shobuj'), '0', '10');
//            $data = explode('.', $mother_image);
//            $mother_image = $name . '.' . end($data);
//
//            $permited = array('jpg', 'jpeg', 'png', 'gif');
//            $file_size = $_FILES['mother_image']['size'];
//            $div2 = explode('.', $mother_image);
//            $file_ext = strtolower(end($div2));
//
//            $uploadPdfTo = "../uploads/" . $mother_image;
//            $movepdf = move_uploaded_file($pdf_tmp, $uploadPdfTo);
//        }


//if($file_size > 1048576){
//    echo "<span class='error' style='color: red;'>Image size should be less then 1MB !</span>";
//    //$_SESSION['imgSize'] = $imgSize;
//    //die();
//}
//elseif (in_array($file_ext, $permited) == false) {
//    echo "<span class='error' style='color: red;'>You can upload only:-".implode(', ', $permited)."</span>";
//}


        $stmt = $db->prepare("UPDATE `student_data` SET
 
        sex = :sex,
        student_name = :student_name,
        class = :class,
        shift = :shift,
        branch = :branch,
        department = :department,
        student_id = :student_id,
        class_roll = :class_roll,
        year = :year,
        birth_day = :birth_day,
        birth_month = :birth_month,
        birth_year = :birth_year, 
        blood_group = :blood_group,
        religion = :religion, 
        birth_reg_num = :birth_reg_num, 
        last_study_orga = :last_study_orga, 
        why_left = :why_left, 
        last_Orga_phone = :last_Orga_phone,
        home_name = :home_name, 
        hoding_number = :hoding_number, 
        road_number = :road_number, 
        village_name = :village_name, 
        postoffice = :postoffice, 
        unione_name = :unione_name, 
        thana_name = :thana_name, 
        district_name = :district_name, 
        postcode = :postcode, 
        lasting_home_name = :lasting_home_name, 
        lasting_holding_number = :lasting_holding_number, 
        lasting_road_number = :lasting_road_number, 
        lasting_village = :lasting_village, 
        lasting_postoffice = :lasting_postoffice, 
        lasting_unione = :lasting_unione, 
        lasting_thana = :lasting_thana, 
        lasting_district = :lasting_district, 
        lasting_postcode = :lasting_postcode, 
        father_name = :father_name, 
        father_occupation = :father_occupation, 
        fa_monthly_income = :fa_monthly_income, 
        fa_edu_quali = :fa_edu_quali, 
        father_phone = :father_phone, 
        father_email = :father_email, 
        father_national_id = :father_national_id, 
        mother_name = :mother_name, 
        mother_occupation = :mother_occupation, 
        mo_monthly_income = :mo_monthly_income, 
        mo_edu_quali = :mo_edu_quali, 
        mother_phone = :mother_phone, 
        mother_email = :mother_email, 
        mo_national_id = :mo_national_id, 
        local_gurdian = :local_gurdian, 
        local_occupation = :local_occupation, 
        relation = :relation, 
        local_edu = :local_edu, 
        local_phone = :local_phone, 
        local_email = :local_email, 
        local_national_id = :local_national_id, 
        father_image = :father_image, 
        
        updated_at = NOW()
 
 WHERE id = :id;");

        $stmt->bindValue(':sex' , $sex, PDO::PARAM_STR);
        $stmt->bindValue(':student_name' , $student_name, PDO::PARAM_STR);
        $stmt->bindValue(':class',$class, PDO::PARAM_STR);
        $stmt->bindValue(':shift',$shift, PDO::PARAM_STR);
        $stmt->bindValue(':branch',$branch, PDO::PARAM_STR);
        $stmt->bindValue(':department',$department, PDO::PARAM_STR);
        $stmt->bindValue(':student_id',$student_id, PDO::PARAM_STR);
        $stmt->bindValue(':class_roll',$class_roll, PDO::PARAM_STR);
        $stmt->bindValue(':year',$year, PDO::PARAM_STR);
        $stmt->bindValue(':birth_day',$birth_day, PDO::PARAM_STR);
        $stmt->bindValue(':birth_month',$birth_month, PDO::PARAM_STR);
        $stmt->bindValue(':birth_year',$birth_year, PDO::PARAM_STR);
        $stmt->bindValue(':blood_group',$blood_group, PDO::PARAM_STR);
        $stmt->bindValue(':religion',$religion, PDO::PARAM_STR);
        $stmt->bindValue(':birth_reg_num',$birth_reg_num, PDO::PARAM_STR);
        $stmt->bindValue(':last_study_orga',$last_study_orga, PDO::PARAM_STR);
        $stmt->bindValue(':why_left',$why_left, PDO::PARAM_STR);
        $stmt->bindValue(':last_Orga_phone',$last_Orga_phone, PDO::PARAM_STR);
        $stmt->bindValue(':home_name',$home_name, PDO::PARAM_STR);
        $stmt->bindValue(':hoding_number',$hoding_number, PDO::PARAM_STR);
        $stmt->bindValue(':road_number',$road_number, PDO::PARAM_STR);
        $stmt->bindValue(':village_name',$village_name, PDO::PARAM_STR);
        $stmt->bindValue(':postoffice',$postoffice, PDO::PARAM_STR);
        $stmt->bindValue(':unione_name',$unione_name, PDO::PARAM_STR);
        $stmt->bindValue(':thana_name',$thana_name, PDO::PARAM_STR);
        $stmt->bindValue(':district_name',$district_name, PDO::PARAM_STR);
        $stmt->bindValue(':postcode',$postcode, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_home_name',$lasting_home_name, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_holding_number',$lasting_holding_number, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_road_number',$lasting_road_number, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_village',$lasting_village, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_postoffice',$lasting_postoffice, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_unione',$lasting_unione, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_thana',$lasting_thana, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_district',$lasting_district, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_postcode',$lasting_postcode, PDO::PARAM_STR);
        $stmt->bindValue(':father_name',$father_name, PDO::PARAM_STR);
        $stmt->bindValue(':father_occupation',$father_occupation, PDO::PARAM_STR);
        $stmt->bindValue(':fa_monthly_income',$fa_monthly_income, PDO::PARAM_STR);
        $stmt->bindValue(':fa_edu_quali',$fa_edu_quali, PDO::PARAM_STR);
        $stmt->bindValue(':father_phone',$father_phone, PDO::PARAM_STR);
        $stmt->bindValue(':father_email',$father_email, PDO::PARAM_STR);
        $stmt->bindValue(':father_national_id',$father_national_id, PDO::PARAM_STR);
        $stmt->bindValue(':mother_name',$mother_name, PDO::PARAM_STR);
        $stmt->bindValue(':mother_occupation',$mother_occupation, PDO::PARAM_STR);
        $stmt->bindValue(':mo_monthly_income',$mo_monthly_income, PDO::PARAM_STR);
        $stmt->bindValue(':mo_edu_quali',$mo_edu_quali, PDO::PARAM_STR);
        $stmt->bindValue(':mother_phone',$mother_phone, PDO::PARAM_STR);
        $stmt->bindValue(':mother_email',$mother_email, PDO::PARAM_STR);
        $stmt->bindValue(':mo_national_id',$mo_national_id, PDO::PARAM_STR);
        $stmt->bindValue(':local_gurdian',$local_gurdian, PDO::PARAM_STR);
        $stmt->bindValue(':local_occupation',$local_occupation, PDO::PARAM_STR);
        $stmt->bindValue(':relation',$relation, PDO::PARAM_STR);
        $stmt->bindValue(':local_edu',$local_edu, PDO::PARAM_STR);
        $stmt->bindValue(':local_phone',$local_phone, PDO::PARAM_STR);
        $stmt->bindValue(':local_email',$local_email, PDO::PARAM_STR);
        $stmt->bindValue(':local_national_id',$local_national_id, PDO::PARAM_STR);
        //$stmt->bindValue(':student_image',$student_image, PDO::PARAM_STR);
        $stmt->bindValue(':father_image',$father_image, PDO::PARAM_STR);
        //$stmt->bindValue(':mother_image',$mother_image, PDO::PARAM_STR);
        $stmt->bindValue(':id',$id, PDO::PARAM_STR);
        $result = $stmt->execute();




        if($result){
            $msg = "Student Data Updated Successfully";
            header("location:allstudent.php");
            //header("location:showStudent.php");
            //header("location:successUpdateMsg.php?msg=$id");
        }


    }

    elseif (!empty($_FILES['mother_image']['name'])){

        $id = $_POST['id'];

        $sex = $_POST['sex'];
        $student_name = $_POST['student_name'];
        $class = $_POST['class'];
        $shift = $_POST['shift'];
        $branch = $_POST['branch'];
        $department = $_POST['department'];
        $student_id = $_POST['student_id'];
        $class_roll = $_POST['class_roll'];
        $year = $_POST['year'];
        $birth_day = $_POST['birth_day'];
        $birth_month = $_POST['birth_month'];
        $birth_year = $_POST['birth_year'];
        $blood_group = $_POST['blood_group'];
        $religion = $_POST['religion'];
        $birth_reg_num = $_POST['birth_reg_num'];
        $last_study_orga = $_POST['last_study_orga'];
        $why_left = $_POST['why_left'];
        $last_Orga_phone = $_POST['last_Orga_phone'];
        $home_name = $_POST['home_name'];
        $hoding_number = $_POST['hoding_number'];
        $road_number = $_POST['road_number'];
        $village_name = $_POST['village_name'];
        $postoffice = $_POST['postoffice'];
        $unione_name = $_POST['unione_name'];
        $thana_name = $_POST['thana_name'];
        $district_name = $_POST['district_name'];
        $postcode = $_POST['postcode'];
        $lasting_home_name = $_POST['lasting_home_name'];
        $lasting_holding_number = $_POST['lasting_holding_number'];
        $lasting_road_number = $_POST['lasting_road_number'];
        $lasting_village = $_POST['lasting_village'];
        $lasting_postoffice = $_POST['lasting_postoffice'];
        $lasting_unione = $_POST['lasting_unione'];
        $lasting_thana = $_POST['lasting_thana'];
        $lasting_district = $_POST['lasting_district'];
        $lasting_postcode = $_POST['lasting_postcode'];
        $father_name = $_POST['father_name'];
        $father_occupation = $_POST['father_occupation'];
        $fa_monthly_income = $_POST['fa_monthly_income'];
        $fa_edu_quali = $_POST['fa_edu_quali'];
        $father_phone = $_POST['father_phone'];
        $father_email = $_POST['father_email'];
        $father_national_id = $_POST['father_national_id'];
        $mother_name = $_POST['mother_name'];
        $mother_occupation = $_POST['mother_occupation'];
        $mo_monthly_income = $_POST['mo_monthly_income'];
        $mo_edu_quali = $_POST['mo_edu_quali'];
        $mother_phone = $_POST['mother_phone'];
        $mother_email = $_POST['mother_email'];
        $mo_national_id = $_POST['mo_national_id'];
        $local_gurdian = $_POST['local_gurdian'];
        $local_occupation = $_POST['local_occupation'];
        $relation = $_POST['relation'];
        $local_edu = $_POST['local_edu'];
        $local_phone = $_POST['local_phone'];
        $local_email = $_POST['local_email'];
        $local_national_id = $_POST['local_national_id'];
        $student_image = $_FILES['student_image']['name'];
        $father_image = $_FILES['father_image']['name'];
        $mother_image = $_FILES['mother_image']['name'];


//            $uploadMainTo = null;
//            if (isset($_FILES['student_image'])) {
//                $student_image = $_FILES['student_image']['name'];
//                $main_image_size = $_FILES['student_image']['size'];
//                $main_image_tmp = $_FILES['student_image']['tmp_name'];
//
//                $name = substr(md5(time()), '0', '10');
//                $data = explode('.', $student_image);
//                $student_image = $name . '.' . end($data);
//
//                $permited = array('jpg', 'jpeg', 'png', 'gif');
//                $file_size = $_FILES['student_image']['size'];
//                $div2 = explode('.', $student_image);
//                $file_ext = strtolower(end($div2));
//
////        $div = explode('.', $student_image);
////        $file_ext = strtolower(end($div));
////        $student_image = substr(md5(time()), 0, 10).'.'.$file_ext;
////        echo $student_image;
//
//
//                //$upload_image = "upload/".$unique_image;
//
////   $permited = array('jpg', 'jpeg', 'png', 'gif');
////   $file_size = $_FILES['student_image']['size'];
////   $div2 = explode('.', $student_image);
////   $file_ext = strtolower(end($div2));
////   $unique_image2 = substr(md5(time()), '0', '10');
////   $data2 = explode('.', $student_image);
////   $student_image = $unique_image2 . '.' . end($data2);
//
//                $uploadMainTo = "../uploads/" . $student_image;
//                $moveMain = move_uploaded_file($main_image_tmp, $uploadMainTo);
//            }
//echo "<pre>";
//var_dump($_FILES);
//echo "</pre>";

//
//        $uploadSecondTo = null;
//        if (isset($_FILES['father_image'])) {
//            $father_image = $_FILES['father_image']['name'];
//            $second_image_size = $_FILES['father_image']['size'];
//            $second_image_tmp = $_FILES['father_image']['tmp_name'];
//
//            $name = substr(md5('huj'), '0', '10');
//            $data = explode('.', $father_image);
//            $father_image = $name . '.' . end($data);
//
//            $permited = array('jpg', 'jpeg', 'png', 'gif');
//            $file_size = $_FILES['father_image']['size'];
//            $div2 = explode('.', $father_image);
//            $file_ext = strtolower(end($div2));
//
//
//            $uploadSecondTo = "../uploads/" . $father_image;
//            $moveSecond = move_uploaded_file($second_image_tmp, $uploadSecondTo);
//        }

        $uploadPdfTo = null;
        if (isset($_FILES['mother_image'])) {
            $mother_image = $_FILES['mother_image']['name'];
            $pdf_size = $_FILES['mother_image']['size'];
            $pdf_tmp = $_FILES['mother_image']['tmp_name'];

            $name = substr(md5('shobuj'), '0', '10');
            $data = explode('.', $mother_image);
            $mother_image = $name . '.' . end($data);

            $permited = array('jpg', 'jpeg', 'png', 'gif');
            $file_size = $_FILES['mother_image']['size'];
            $div2 = explode('.', $mother_image);
            $file_ext = strtolower(end($div2));

            $uploadPdfTo = "../uploads/" . $mother_image;
            $movepdf = move_uploaded_file($pdf_tmp, $uploadPdfTo);
        }


//if($file_size > 1048576){
//    echo "<span class='error' style='color: red;'>Image size should be less then 1MB !</span>";
//    //$_SESSION['imgSize'] = $imgSize;
//    //die();
//}
//elseif (in_array($file_ext, $permited) == false) {
//    echo "<span class='error' style='color: red;'>You can upload only:-".implode(', ', $permited)."</span>";
//}


        $stmt = $db->prepare("UPDATE `student_data` SET
 
        sex = :sex,
        student_name = :student_name,
        class = :class,
        shift = :shift,
        branch = :branch,
        department = :department,
        student_id = :student_id,
        class_roll = :class_roll,
        year = :year,
        birth_day = :birth_day,
        birth_month = :birth_month,
        birth_year = :birth_year, 
        blood_group = :blood_group,
        religion = :religion, 
        birth_reg_num = :birth_reg_num, 
        last_study_orga = :last_study_orga, 
        why_left = :why_left, 
        last_Orga_phone = :last_Orga_phone,
        home_name = :home_name, 
        hoding_number = :hoding_number, 
        road_number = :road_number, 
        village_name = :village_name, 
        postoffice = :postoffice, 
        unione_name = :unione_name, 
        thana_name = :thana_name, 
        district_name = :district_name, 
        postcode = :postcode, 
        lasting_home_name = :lasting_home_name, 
        lasting_holding_number = :lasting_holding_number, 
        lasting_road_number = :lasting_road_number, 
        lasting_village = :lasting_village, 
        lasting_postoffice = :lasting_postoffice, 
        lasting_unione = :lasting_unione, 
        lasting_thana = :lasting_thana, 
        lasting_district = :lasting_district, 
        lasting_postcode = :lasting_postcode, 
        father_name = :father_name, 
        father_occupation = :father_occupation, 
        fa_monthly_income = :fa_monthly_income, 
        fa_edu_quali = :fa_edu_quali, 
        father_phone = :father_phone, 
        father_email = :father_email, 
        father_national_id = :father_national_id, 
        mother_name = :mother_name, 
        mother_occupation = :mother_occupation, 
        mo_monthly_income = :mo_monthly_income, 
        mo_edu_quali = :mo_edu_quali, 
        mother_phone = :mother_phone, 
        mother_email = :mother_email, 
        mo_national_id = :mo_national_id, 
        local_gurdian = :local_gurdian, 
        local_occupation = :local_occupation, 
        relation = :relation, 
        local_edu = :local_edu, 
        local_phone = :local_phone, 
        local_email = :local_email, 
        local_national_id = :local_national_id, 
        mother_image = :mother_image, 
        
        updated_at = NOW()
 
 WHERE id = :id;");

        $stmt->bindValue(':sex' , $sex, PDO::PARAM_STR);
        $stmt->bindValue(':student_name' , $student_name, PDO::PARAM_STR);
        $stmt->bindValue(':class',$class, PDO::PARAM_STR);
        $stmt->bindValue(':shift',$shift, PDO::PARAM_STR);
        $stmt->bindValue(':branch',$branch, PDO::PARAM_STR);
        $stmt->bindValue(':department',$department, PDO::PARAM_STR);
        $stmt->bindValue(':student_id',$student_id, PDO::PARAM_STR);
        $stmt->bindValue(':class_roll',$class_roll, PDO::PARAM_STR);
        $stmt->bindValue(':year',$year, PDO::PARAM_STR);
        $stmt->bindValue(':birth_day',$birth_day, PDO::PARAM_STR);
        $stmt->bindValue(':birth_month',$birth_month, PDO::PARAM_STR);
        $stmt->bindValue(':birth_year',$birth_year, PDO::PARAM_STR);
        $stmt->bindValue(':blood_group',$blood_group, PDO::PARAM_STR);
        $stmt->bindValue(':religion',$religion, PDO::PARAM_STR);
        $stmt->bindValue(':birth_reg_num',$birth_reg_num, PDO::PARAM_STR);
        $stmt->bindValue(':last_study_orga',$last_study_orga, PDO::PARAM_STR);
        $stmt->bindValue(':why_left',$why_left, PDO::PARAM_STR);
        $stmt->bindValue(':last_Orga_phone',$last_Orga_phone, PDO::PARAM_STR);
        $stmt->bindValue(':home_name',$home_name, PDO::PARAM_STR);
        $stmt->bindValue(':hoding_number',$hoding_number, PDO::PARAM_STR);
        $stmt->bindValue(':road_number',$road_number, PDO::PARAM_STR);
        $stmt->bindValue(':village_name',$village_name, PDO::PARAM_STR);
        $stmt->bindValue(':postoffice',$postoffice, PDO::PARAM_STR);
        $stmt->bindValue(':unione_name',$unione_name, PDO::PARAM_STR);
        $stmt->bindValue(':thana_name',$thana_name, PDO::PARAM_STR);
        $stmt->bindValue(':district_name',$district_name, PDO::PARAM_STR);
        $stmt->bindValue(':postcode',$postcode, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_home_name',$lasting_home_name, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_holding_number',$lasting_holding_number, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_road_number',$lasting_road_number, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_village',$lasting_village, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_postoffice',$lasting_postoffice, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_unione',$lasting_unione, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_thana',$lasting_thana, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_district',$lasting_district, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_postcode',$lasting_postcode, PDO::PARAM_STR);
        $stmt->bindValue(':father_name',$father_name, PDO::PARAM_STR);
        $stmt->bindValue(':father_occupation',$father_occupation, PDO::PARAM_STR);
        $stmt->bindValue(':fa_monthly_income',$fa_monthly_income, PDO::PARAM_STR);
        $stmt->bindValue(':fa_edu_quali',$fa_edu_quali, PDO::PARAM_STR);
        $stmt->bindValue(':father_phone',$father_phone, PDO::PARAM_STR);
        $stmt->bindValue(':father_email',$father_email, PDO::PARAM_STR);
        $stmt->bindValue(':father_national_id',$father_national_id, PDO::PARAM_STR);
        $stmt->bindValue(':mother_name',$mother_name, PDO::PARAM_STR);
        $stmt->bindValue(':mother_occupation',$mother_occupation, PDO::PARAM_STR);
        $stmt->bindValue(':mo_monthly_income',$mo_monthly_income, PDO::PARAM_STR);
        $stmt->bindValue(':mo_edu_quali',$mo_edu_quali, PDO::PARAM_STR);
        $stmt->bindValue(':mother_phone',$mother_phone, PDO::PARAM_STR);
        $stmt->bindValue(':mother_email',$mother_email, PDO::PARAM_STR);
        $stmt->bindValue(':mo_national_id',$mo_national_id, PDO::PARAM_STR);
        $stmt->bindValue(':local_gurdian',$local_gurdian, PDO::PARAM_STR);
        $stmt->bindValue(':local_occupation',$local_occupation, PDO::PARAM_STR);
        $stmt->bindValue(':relation',$relation, PDO::PARAM_STR);
        $stmt->bindValue(':local_edu',$local_edu, PDO::PARAM_STR);
        $stmt->bindValue(':local_phone',$local_phone, PDO::PARAM_STR);
        $stmt->bindValue(':local_email',$local_email, PDO::PARAM_STR);
        $stmt->bindValue(':local_national_id',$local_national_id, PDO::PARAM_STR);
        //$stmt->bindValue(':student_image',$student_image, PDO::PARAM_STR);
        //$stmt->bindValue(':father_image',$father_image, PDO::PARAM_STR);
        $stmt->bindValue(':mother_image',$mother_image, PDO::PARAM_STR);
        $stmt->bindValue(':id',$id, PDO::PARAM_STR);
        $result = $stmt->execute();




        if($result){
            $msg = "Student Data Updated Successfully";
            header("location:allstudent.php");
            //header("location:showStudent.php");
            //header("location:successUpdateMsg.php?msg=$id");
        }


    }



    else{
        $id = $_POST['id'];

        $sex = $_POST['sex'];
        $student_name = $_POST['student_name'];
        $class = $_POST['class'];
        $shift = $_POST['shift'];
        $branch = $_POST['branch'];
        $department = $_POST['department'];
        $student_id = $_POST['student_id'];
        $class_roll = $_POST['class_roll'];
        $year = $_POST['year'];
        $birth_day = $_POST['birth_day'];
        $birth_month = $_POST['birth_month'];
        $birth_year = $_POST['birth_year'];
        $blood_group = $_POST['blood_group'];
        $religion = $_POST['religion'];
        $birth_reg_num = $_POST['birth_reg_num'];
        $last_study_orga = $_POST['last_study_orga'];
        $why_left = $_POST['why_left'];
        $last_Orga_phone = $_POST['last_Orga_phone'];
        $home_name = $_POST['home_name'];
        $hoding_number = $_POST['hoding_number'];
        $road_number = $_POST['road_number'];
        $village_name = $_POST['village_name'];
        $postoffice = $_POST['postoffice'];
        $unione_name = $_POST['unione_name'];
        $thana_name = $_POST['thana_name'];
        $district_name = $_POST['district_name'];
        $postcode = $_POST['postcode'];
        $lasting_home_name = $_POST['lasting_home_name'];
        $lasting_holding_number = $_POST['lasting_holding_number'];
        $lasting_road_number = $_POST['lasting_road_number'];
        $lasting_village = $_POST['lasting_village'];
        $lasting_postoffice = $_POST['lasting_postoffice'];
        $lasting_unione = $_POST['lasting_unione'];
        $lasting_thana = $_POST['lasting_thana'];
        $lasting_district = $_POST['lasting_district'];
        $lasting_postcode = $_POST['lasting_postcode'];
        $father_name = $_POST['father_name'];
        $father_occupation = $_POST['father_occupation'];
        $fa_monthly_income = $_POST['fa_monthly_income'];
        $fa_edu_quali = $_POST['fa_edu_quali'];
        $father_phone = $_POST['father_phone'];
        $father_email = $_POST['father_email'];
        $father_national_id = $_POST['father_national_id'];
        $mother_name = $_POST['mother_name'];
        $mother_occupation = $_POST['mother_occupation'];
        $mo_monthly_income = $_POST['mo_monthly_income'];
        $mo_edu_quali = $_POST['mo_edu_quali'];
        $mother_phone = $_POST['mother_phone'];
        $mother_email = $_POST['mother_email'];
        $mo_national_id = $_POST['mo_national_id'];
        $local_gurdian = $_POST['local_gurdian'];
        $local_occupation = $_POST['local_occupation'];
        $relation = $_POST['relation'];
        $local_edu = $_POST['local_edu'];
        $local_phone = $_POST['local_phone'];
        $local_email = $_POST['local_email'];
        $local_national_id = $_POST['local_national_id'];
        $student_image = $_POST['student_image'];
        $father_image = $_POST['father_image'];
        $mother_image = $_POST['mother_image'];




        $stmt = $db->prepare("UPDATE `student_data` SET
 
        sex = :sex,
        student_name = :student_name,
        class = :class,
        shift = :shift,
        branch = :branch,
        department = :department,
        student_id = :student_id,
        class_roll = :class_roll,
        year = :year,
        birth_day = :birth_day,
        birth_month = :birth_month,
        birth_year = :birth_year, 
        blood_group = :blood_group,
        religion = :religion, 
        birth_reg_num = :birth_reg_num, 
        last_study_orga = :last_study_orga, 
        why_left = :why_left, 
        last_Orga_phone = :last_Orga_phone,
        home_name = :home_name, 
        hoding_number = :hoding_number, 
        road_number = :road_number, 
        village_name = :village_name, 
        postoffice = :postoffice, 
        unione_name = :unione_name, 
        thana_name = :thana_name, 
        district_name = :district_name, 
        postcode = :postcode, 
        lasting_home_name = :lasting_home_name, 
        lasting_holding_number = :lasting_holding_number, 
        lasting_road_number = :lasting_road_number, 
        lasting_village = :lasting_village, 
        lasting_postoffice = :lasting_postoffice, 
        lasting_unione = :lasting_unione, 
        lasting_thana = :lasting_thana, 
        lasting_district = :lasting_district, 
        lasting_postcode = :lasting_postcode, 
        father_name = :father_name, 
        father_occupation = :father_occupation, 
        fa_monthly_income = :fa_monthly_income, 
        fa_edu_quali = :fa_edu_quali, 
        father_phone = :father_phone, 
        father_email = :father_email, 
        father_national_id = :father_national_id, 
        mother_name = :mother_name, 
        mother_occupation = :mother_occupation, 
        mo_monthly_income = :mo_monthly_income, 
        mo_edu_quali = :mo_edu_quali, 
        mother_phone = :mother_phone, 
        mother_email = :mother_email, 
        mo_national_id = :mo_national_id, 
        local_gurdian = :local_gurdian, 
        local_occupation = :local_occupation, 
        relation = :relation, 
        local_edu = :local_edu, 
        local_phone = :local_phone, 
        local_email = :local_email, 
        local_national_id = :local_national_id, 
        student_image = :student_image, 
        father_image = :father_image, 
        mother_image = :mother_image,
        updated_at = NOW()
 
 WHERE id = :id;");

        $stmt->bindValue(':sex' , $sex, PDO::PARAM_STR);
        $stmt->bindValue(':student_name' , $student_name, PDO::PARAM_STR);
        $stmt->bindValue(':class',$class, PDO::PARAM_STR);
        $stmt->bindValue(':shift',$shift, PDO::PARAM_STR);
        $stmt->bindValue(':branch',$branch, PDO::PARAM_STR);
        $stmt->bindValue(':department',$department, PDO::PARAM_STR);
        $stmt->bindValue(':student_id',$student_id, PDO::PARAM_STR);
        $stmt->bindValue(':class_roll',$class_roll, PDO::PARAM_STR);
        $stmt->bindValue(':year',$year, PDO::PARAM_STR);
        $stmt->bindValue(':birth_day',$birth_day, PDO::PARAM_STR);
        $stmt->bindValue(':birth_month',$birth_month, PDO::PARAM_STR);
        $stmt->bindValue(':birth_year',$birth_year, PDO::PARAM_STR);
        $stmt->bindValue(':blood_group',$blood_group, PDO::PARAM_STR);
        $stmt->bindValue(':religion',$religion, PDO::PARAM_STR);
        $stmt->bindValue(':birth_reg_num',$birth_reg_num, PDO::PARAM_STR);
        $stmt->bindValue(':last_study_orga',$last_study_orga, PDO::PARAM_STR);
        $stmt->bindValue(':why_left',$why_left, PDO::PARAM_STR);
        $stmt->bindValue(':last_Orga_phone',$last_Orga_phone, PDO::PARAM_STR);
        $stmt->bindValue(':home_name',$home_name, PDO::PARAM_STR);
        $stmt->bindValue(':hoding_number',$hoding_number, PDO::PARAM_STR);
        $stmt->bindValue(':road_number',$road_number, PDO::PARAM_STR);
        $stmt->bindValue(':village_name',$village_name, PDO::PARAM_STR);
        $stmt->bindValue(':postoffice',$postoffice, PDO::PARAM_STR);
        $stmt->bindValue(':unione_name',$unione_name, PDO::PARAM_STR);
        $stmt->bindValue(':thana_name',$thana_name, PDO::PARAM_STR);
        $stmt->bindValue(':district_name',$district_name, PDO::PARAM_STR);
        $stmt->bindValue(':postcode',$postcode, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_home_name',$lasting_home_name, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_holding_number',$lasting_holding_number, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_road_number',$lasting_road_number, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_village',$lasting_village, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_postoffice',$lasting_postoffice, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_unione',$lasting_unione, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_thana',$lasting_thana, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_district',$lasting_district, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_postcode',$lasting_postcode, PDO::PARAM_STR);
        $stmt->bindValue(':father_name',$father_name, PDO::PARAM_STR);
        $stmt->bindValue(':father_occupation',$father_occupation, PDO::PARAM_STR);
        $stmt->bindValue(':fa_monthly_income',$fa_monthly_income, PDO::PARAM_STR);
        $stmt->bindValue(':fa_edu_quali',$fa_edu_quali, PDO::PARAM_STR);
        $stmt->bindValue(':father_phone',$father_phone, PDO::PARAM_STR);
        $stmt->bindValue(':father_email',$father_email, PDO::PARAM_STR);
        $stmt->bindValue(':father_national_id',$father_national_id, PDO::PARAM_STR);
        $stmt->bindValue(':mother_name',$mother_name, PDO::PARAM_STR);
        $stmt->bindValue(':mother_occupation',$mother_occupation, PDO::PARAM_STR);
        $stmt->bindValue(':mo_monthly_income',$mo_monthly_income, PDO::PARAM_STR);
        $stmt->bindValue(':mo_edu_quali',$mo_edu_quali, PDO::PARAM_STR);
        $stmt->bindValue(':mother_phone',$mother_phone, PDO::PARAM_STR);
        $stmt->bindValue(':mother_email',$mother_email, PDO::PARAM_STR);
        $stmt->bindValue(':mo_national_id',$mo_national_id, PDO::PARAM_STR);
        $stmt->bindValue(':local_gurdian',$local_gurdian, PDO::PARAM_STR);
        $stmt->bindValue(':local_occupation',$local_occupation, PDO::PARAM_STR);
        $stmt->bindValue(':relation',$relation, PDO::PARAM_STR);
        $stmt->bindValue(':local_edu',$local_edu, PDO::PARAM_STR);
        $stmt->bindValue(':local_phone',$local_phone, PDO::PARAM_STR);
        $stmt->bindValue(':local_email',$local_email, PDO::PARAM_STR);
        $stmt->bindValue(':local_national_id',$local_national_id, PDO::PARAM_STR);
        $stmt->bindValue(':student_image',$student_image, PDO::PARAM_STR);
        $stmt->bindValue(':father_image',$father_image, PDO::PARAM_STR);
        $stmt->bindValue(':mother_image',$mother_image, PDO::PARAM_STR);
        $stmt->bindValue(':id',$id, PDO::PARAM_STR);
        $result = $stmt->execute();




        if($result){
            $msg = "Student Data Updated Successfully";
            header("location:allstudent.php");
            //header("location:showStudent.php");
            //header("location:successUpdateMsg.php?msg=$id");
        }

    }

}
//$query = $db->execute("INSERT INTO input (name, image, image1, image2) VALUES (?,?,?,?) array($name, $uploadPdfTo, $uploadMainTo, $uploadSecondTo) );

?>
