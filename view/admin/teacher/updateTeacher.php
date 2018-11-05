<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 29-Nov-17
 * Time: 3:05 PM
 */

error_reporting(0);

if(!isset($_SESSION)){
    session_start();
}

// echo "<pre>";
// var_dump($_POST);
// var_dump($_FILES);

// die();




if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_FILES['image']['name'])) {

        $id = $_POST['unique_id'];

        $sex = $_POST['sex'];
        $teacher_name = $_POST['teacher_name'];
        $designation = $_POST['designation'];
        $what_work = $_POST['what_work'];
        $eduquali = $_POST['eduquali'];
        $training = $_POST['training'];
        $join_date = $_POST['join_date'];
        $retire_date = $_POST['retire_date'];
        $index_number = $_POST['index_number'];
        $mpo_date = $_POST['mpo_date'];
        $birth_date = $_POST['birth_date'];
        $blood = $_POST['blood'];
        $religion = $_POST['religion'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $nid = $_POST['nid'];
        $lastorga = $_POST['lastorga'];
        $whyleft = $_POST['whyleft'];
        $orgaarea = $_POST['orgaarea'];
        $homeName = $_POST['homeName'];
        $holdingNum = $_POST['holdingNum'];
        $roadName = $_POST['roadName'];
        $village = $_POST['village'];
        $postoffice = $_POST['postoffice'];
        $unione = $_POST['unione'];
        $thana = $_POST['thana'];
        $district = $_POST['district'];
        $postcode = $_POST['postcode'];
        $lasting_homeName = $_POST['lasting_homeName'];
        $lasting_holdingNum = $_POST['lasting_holdingNum'];
        $lasting_roadName = $_POST['lasting_roadName'];
        $lasting_village = $_POST['lasting_village'];
        $lasting_postoffice = $_POST['lasting_postoffice'];
        $lasting_unione = $_POST['lasting_unione'];
        $lasting_thana = $_POST['lasting_thana'];
        $lasting_district = $_POST['lasting_district'];
        $lasting_postcode = $_POST['lasting_postcode'];
        $father_name = $_POST['father_name'];
        $fa_occupation = $_POST['fa_occupation'];
        $fa_monthly_income = $_POST['fa_monthly_income'];
        $fa_edu_quli = $_POST['fa_edu_quli'];
        $fa_phone = $_POST['fa_phone'];
        $fa_email = $_POST['fa_email'];
        $fa_nid = $_POST['fa_nid'];
        $mother_name = $_POST['mother_name'];
        $ma_occupation = $_POST['ma_occupation'];
        $ma_monthly_income = $_POST['ma_monthly_income'];
        $ma_edu_quli = $_POST['ma_edu_quli'];
        $ma_phone = $_POST['ma_phone'];
        $ma_email = $_POST['ma_email'];
        $ma_nid = $_POST['ma_nid'];
        $marriage_person = $_POST['marriage_person'];
        $marriage_occu = $_POST['marriage_occu'];
        $marriage_date = $_POST['marriage_date'];
        $marriage_edu_quali = $_POST['marriage_edu_quali'];
        $marriage_mobile = $_POST['marriage_mobile'];
        $marriage_email = $_POST['marriage_email'];
        $children = $_POST['children'];
        $image = $_POST['image'];
        //$local_national_id   =  $_POST['local_national_id'];
        //$student_image       =  $_POST['student_image'];
        //$father_image        =  $_POST['father_image'];
        //$mother_image        =  $_POST['mother_image'];


        $db = new PDO('mysql:host=localhost;dbname=kghs;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


        $uploadSecondTo = null;
        if (isset($_FILES['image'])) {
            $image = $_FILES['image']['name'];
            $second_image_size = $_FILES['image']['size'];
            $second_image_tmp = $_FILES['image']['tmp_name'];

            $name = substr(md5(time()), '0', '10');
            $data = explode('.', $image);
            $image = $name . '.' . end($data);

            $permited = array('jpg', 'jpeg', 'png', 'gif');
            $file_size = $_FILES['image']['size'];
            $div2 = explode('.', $image);
            $file_ext = strtolower(end($div2));

                if($file_size > 1048576){
        $imgSize = "<p style='font-size:20px;'>Image size should be less then 1MB !!!</p>";
        $_SESSION['imgSize'] = $imgSize;
             echo "<script>window.location= 'editTeacher.php?edit=".$id."'</script>";

        die();
        }

        elseif (in_array($file_ext, $permited) == false) {
            $fileext = "<p style='font-size:20px;'>You can upload only:-".implode(', ', $permited)."</p>";
            $_SESSION['fileext'] = $fileext;
             echo "<script>window.location= 'editTeacher.php?edit=".$id."'</script>";

            die();
        }

            $uploadSecondTo = "../uploads/teacher/" . $image;
            $moveSecond = move_uploaded_file($second_image_tmp, $uploadSecondTo);
        }

       



        $stmt = $db->prepare("update teacher_data set 
            
            sex = :sex, 
            teacher_name = :teacher_name, 
            designation = :designation, 
            what_work = :what_work, 
            eduquali = :eduquali, 
            training = :training, 
            join_date = :join_date, 
            retire_date = :retire_date, 
            index_number = :index_number, 
            mpo_date = :mpo_date, 
            birth_date = :birth_date, 
            blood = :blood, 
            religion = :religion, 
            email = :email, 
            mobile = :mobile, 
            nid = :nid, 
            lastorga = :lastorga, 
            whyleft = :whyleft, 
            orgaarea = :orgaarea, 
            homeName = :homeName, 
            holdingNum = :holdingNum, 
            roadName = :roadName, 
            village = :village, 
            postoffice = :postoffice, 
            unione = :unione, 
            thana = :thana, 
            district = :district, 
            postcode = :postcode, 
            lasting_homeName = :lasting_homeName, 
            lasting_holdingNum = :lasting_holdingNum, 
            lasting_roadName = :lasting_roadName, 
            lasting_village = :lasting_village, 
            lasting_postoffice = :lasting_postoffice, 
            lasting_unione = :lasting_unione, 
            lasting_thana = :lasting_thana, 
            lasting_district = :lasting_district, 
            lasting_postcode = :lasting_postcode, 
            father_name = :father_name, 
            fa_occupation = :fa_occupation, 
            fa_monthly_income = :fa_monthly_income, 
            fa_edu_quli = :fa_edu_quli, 
            fa_phone = :fa_phone, 
            fa_email = :fa_email, 
            fa_nid = :fa_nid, 
            mother_name = :mother_name, 
            ma_occupation = :ma_occupation, 
            ma_monthly_income = :ma_monthly_income, 
            ma_edu_quli = :ma_edu_quli, 
            ma_phone = :ma_phone, 
            ma_email = :ma_email, 
            ma_nid = :ma_nid, 
            marriage_person = :marriage_person, 
            marriage_occu = :marriage_occu, 
            marriage_date = :marriage_date, 
            marriage_edu_quali = :marriage_edu_quali, 
            marriage_mobile = :marriage_mobile, 
            marriage_email = :marriage_email, 
            children = :children, 
            image = :image, 
            updated_at = NOW()            
            WHERE unique_id = :id
          ");


        $stmt->bindValue(':sex', $sex, PDO::PARAM_STR);
        $stmt->bindValue(':teacher_name', $teacher_name, PDO::PARAM_STR);
        $stmt->bindValue(':designation', $designation, PDO::PARAM_STR);
        $stmt->bindValue(':what_work', $what_work, PDO::PARAM_STR);
        $stmt->bindValue(':eduquali', $eduquali, PDO::PARAM_STR);
        $stmt->bindValue(':training', $training, PDO::PARAM_STR);
        $stmt->bindValue(':join_date', $join_date, PDO::PARAM_STR);
        $stmt->bindValue(':retire_date', $retire_date, PDO::PARAM_STR);
        $stmt->bindValue(':index_number', $index_number, PDO::PARAM_STR);
        $stmt->bindValue(':mpo_date', $mpo_date, PDO::PARAM_STR);
        $stmt->bindValue(':birth_date', $birth_date, PDO::PARAM_STR);
        $stmt->bindValue(':blood', $blood, PDO::PARAM_STR);
        $stmt->bindValue(':religion', $religion, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':mobile', $mobile, PDO::PARAM_STR);
        $stmt->bindValue(':nid', $nid, PDO::PARAM_STR);
        $stmt->bindValue(':lastorga', $lastorga, PDO::PARAM_STR);
        $stmt->bindValue(':whyleft', $whyleft, PDO::PARAM_STR);
        $stmt->bindValue(':orgaarea', $orgaarea, PDO::PARAM_STR);
        $stmt->bindValue(':homeName', $homeName, PDO::PARAM_STR);
        $stmt->bindValue(':holdingNum', $holdingNum, PDO::PARAM_STR);
        $stmt->bindValue(':roadName', $roadName, PDO::PARAM_STR);
        $stmt->bindValue(':village', $village, PDO::PARAM_STR);
        $stmt->bindValue(':postoffice', $postoffice, PDO::PARAM_STR);
        $stmt->bindValue(':unione', $unione, PDO::PARAM_STR);
        $stmt->bindValue(':thana', $thana, PDO::PARAM_STR);
        $stmt->bindValue(':district', $district, PDO::PARAM_STR);
        $stmt->bindValue(':postcode', $postcode, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_homeName', $lasting_homeName, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_holdingNum', $lasting_holdingNum, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_roadName', $lasting_roadName, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_village', $lasting_village, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_postoffice', $lasting_postoffice, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_unione', $lasting_unione, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_thana', $lasting_thana, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_district', $lasting_district, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_postcode', $lasting_postcode, PDO::PARAM_STR);
        $stmt->bindValue(':father_name', $father_name, PDO::PARAM_STR);
        $stmt->bindValue(':fa_occupation', $fa_occupation, PDO::PARAM_STR);
        $stmt->bindValue(':fa_monthly_income', $fa_monthly_income, PDO::PARAM_STR);
        $stmt->bindValue(':fa_edu_quli', $fa_edu_quli, PDO::PARAM_STR);
        $stmt->bindValue(':fa_phone', $fa_phone, PDO::PARAM_STR);
        $stmt->bindValue(':fa_email', $fa_email, PDO::PARAM_STR);
        $stmt->bindValue(':fa_nid', $fa_nid, PDO::PARAM_STR);
        $stmt->bindValue(':mother_name', $mother_name, PDO::PARAM_STR);
        $stmt->bindValue(':ma_occupation', $ma_occupation, PDO::PARAM_STR);
        $stmt->bindValue(':ma_monthly_income', $ma_monthly_income, PDO::PARAM_STR);
        $stmt->bindValue(':ma_edu_quli', $ma_edu_quli, PDO::PARAM_STR);
        $stmt->bindValue(':ma_phone', $ma_phone, PDO::PARAM_STR);
        $stmt->bindValue(':ma_email', $ma_email, PDO::PARAM_STR);
        $stmt->bindValue(':ma_nid', $ma_nid, PDO::PARAM_STR);
        $stmt->bindValue(':marriage_person', $marriage_person, PDO::PARAM_STR);
        $stmt->bindValue(':marriage_occu', $marriage_occu, PDO::PARAM_STR);
        $stmt->bindValue(':marriage_date', $marriage_date, PDO::PARAM_STR);
        $stmt->bindValue(':marriage_edu_quali', $marriage_edu_quali, PDO::PARAM_STR);
        $stmt->bindValue(':marriage_mobile', $marriage_mobile, PDO::PARAM_STR);
        $stmt->bindValue(':marriage_email', $marriage_email, PDO::PARAM_STR);
        $stmt->bindValue(':children', $children, PDO::PARAM_STR);
        $stmt->bindValue(':image', $image, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $result = $stmt->execute();


        if ($result) {
             $_SESSION['msg'] = 'Data successfully Updated !!!';
          echo "<script>window.location= 'allteacher.php'</script>";
            //header("location:allteacher.php");
        }

    }
    else{
        $id = $_POST['unique_id'];

        $sex = $_POST['sex'];
        $teacher_name = $_POST['teacher_name'];
        $designation = $_POST['designation'];
        $what_work = $_POST['what_work'];
        $eduquali = $_POST['eduquali'];
        $training = $_POST['training'];
        $join_date = $_POST['join_date'];
        $retire_date = $_POST['retire_date'];
        $index_number = $_POST['index_number'];
        $mpo_date = $_POST['mpo_date'];
        $birth_date = $_POST['birth_date'];
        $blood = $_POST['blood'];
        $religion = $_POST['religion'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $nid = $_POST['nid'];
        $lastorga = $_POST['lastorga'];
        $whyleft = $_POST['whyleft'];
        $orgaarea = $_POST['orgaarea'];
        $homeName = $_POST['homeName'];
        $holdingNum = $_POST['holdingNum'];
        $roadName = $_POST['roadName'];
        $village = $_POST['village'];
        $postoffice = $_POST['postoffice'];
        $unione = $_POST['unione'];
        $thana = $_POST['thana'];
        $district = $_POST['district'];
        $postcode = $_POST['postcode'];
        $lasting_homeName = $_POST['lasting_homeName'];
        $lasting_holdingNum = $_POST['lasting_holdingNum'];
        $lasting_roadName = $_POST['lasting_roadName'];
        $lasting_village = $_POST['lasting_village'];
        $lasting_postoffice = $_POST['lasting_postoffice'];
        $lasting_unione = $_POST['lasting_unione'];
        $lasting_thana = $_POST['lasting_thana'];
        $lasting_district = $_POST['lasting_district'];
        $lasting_postcode = $_POST['lasting_postcode'];
        $father_name = $_POST['father_name'];
        $fa_occupation = $_POST['fa_occupation'];
        $fa_monthly_income = $_POST['fa_monthly_income'];
        $fa_edu_quli = $_POST['fa_edu_quli'];
        $fa_phone = $_POST['fa_phone'];
        $fa_email = $_POST['fa_email'];
        $fa_nid = $_POST['fa_nid'];
        $mother_name = $_POST['mother_name'];
        $ma_occupation = $_POST['ma_occupation'];
        $ma_monthly_income = $_POST['ma_monthly_income'];
        $ma_edu_quli = $_POST['ma_edu_quli'];
        $ma_phone = $_POST['ma_phone'];
        $ma_email = $_POST['ma_email'];
        $ma_nid = $_POST['ma_nid'];
        $marriage_person = $_POST['marriage_person'];
        $marriage_occu = $_POST['marriage_occu'];
        $marriage_date = $_POST['marriage_date'];
        $marriage_edu_quali = $_POST['marriage_edu_quali'];
        $marriage_mobile = $_POST['marriage_mobile'];
        $marriage_email = $_POST['marriage_email'];
        $children = $_POST['children'];
        $image = $_POST['image'];
        //$local_national_id   =  $_POST['local_national_id'];
        //$student_image       =  $_POST['student_image'];
        //$father_image        =  $_POST['father_image'];
        //$mother_image        =  $_POST['mother_image'];


        $db = new PDO('mysql:host=localhost;dbname=kghs;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);





//if($file_size > 1048576){
//    echo "<span class='error' style='color: red;'>Image size should be less then 1MB !</span>";
//    //$_SESSION['imgSize'] = $imgSize;
//    //die();
//}
////elseif (in_array($file_ext, $permited) == false) {
////    echo "<span class='error' style='color: red;'>You can upload only:-".implode(', ', $permited)."</span>";
////}
//else{


        $stmt = $db->prepare("update teacher_data set 
            
            sex = :sex, 
            teacher_name = :teacher_name, 
            designation = :designation, 
            what_work = :what_work, 
            eduquali = :eduquali, 
            training = :training, 
            join_date = :join_date, 
            retire_date = :retire_date, 
            index_number = :index_number, 
            mpo_date = :mpo_date, 
            birth_date = :birth_date, 
            blood = :blood, 
            religion = :religion, 
            email = :email, 
            mobile = :mobile, 
            nid = :nid, 
            lastorga = :lastorga, 
            whyleft = :whyleft, 
            orgaarea = :orgaarea, 
            homeName = :homeName, 
            holdingNum = :holdingNum, 
            roadName = :roadName, 
            village = :village, 
            postoffice = :postoffice, 
            unione = :unione, 
            thana = :thana, 
            district = :district, 
            postcode = :postcode, 
            lasting_homeName = :lasting_homeName, 
            lasting_holdingNum = :lasting_holdingNum, 
            lasting_roadName = :lasting_roadName, 
            lasting_village = :lasting_village, 
            lasting_postoffice = :lasting_postoffice, 
            lasting_unione = :lasting_unione, 
            lasting_thana = :lasting_thana, 
            lasting_district = :lasting_district, 
            lasting_postcode = :lasting_postcode, 
            father_name = :father_name, 
            fa_occupation = :fa_occupation, 
            fa_monthly_income = :fa_monthly_income, 
            fa_edu_quli = :fa_edu_quli, 
            fa_phone = :fa_phone, 
            fa_email = :fa_email, 
            fa_nid = :fa_nid, 
            mother_name = :mother_name, 
            ma_occupation = :ma_occupation, 
            ma_monthly_income = :ma_monthly_income, 
            ma_edu_quli = :ma_edu_quli, 
            ma_phone = :ma_phone, 
            ma_email = :ma_email, 
            ma_nid = :ma_nid, 
            marriage_person = :marriage_person, 
            marriage_occu = :marriage_occu, 
            marriage_date = :marriage_date, 
            marriage_edu_quali = :marriage_edu_quali, 
            marriage_mobile = :marriage_mobile, 
            marriage_email = :marriage_email, 
            children = :children, 
            image = :image, 
            updated_at = NOW()            
            WHERE unique_id = :id
          ");


        $stmt->bindValue(':sex', $sex, PDO::PARAM_STR);
        $stmt->bindValue(':teacher_name', $teacher_name, PDO::PARAM_STR);
        $stmt->bindValue(':designation', $designation, PDO::PARAM_STR);
        $stmt->bindValue(':what_work', $what_work, PDO::PARAM_STR);
        $stmt->bindValue(':eduquali', $eduquali, PDO::PARAM_STR);
        $stmt->bindValue(':training', $training, PDO::PARAM_STR);
        $stmt->bindValue(':join_date', $join_date, PDO::PARAM_STR);
        $stmt->bindValue(':retire_date', $retire_date, PDO::PARAM_STR);
        $stmt->bindValue(':index_number', $index_number, PDO::PARAM_STR);
        $stmt->bindValue(':mpo_date', $mpo_date, PDO::PARAM_STR);
        $stmt->bindValue(':birth_date', $birth_date, PDO::PARAM_STR);
        $stmt->bindValue(':blood', $blood, PDO::PARAM_STR);
        $stmt->bindValue(':religion', $religion, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':mobile', $mobile, PDO::PARAM_STR);
        $stmt->bindValue(':nid', $nid, PDO::PARAM_STR);
        $stmt->bindValue(':lastorga', $lastorga, PDO::PARAM_STR);
        $stmt->bindValue(':whyleft', $whyleft, PDO::PARAM_STR);
        $stmt->bindValue(':orgaarea', $orgaarea, PDO::PARAM_STR);
        $stmt->bindValue(':homeName', $homeName, PDO::PARAM_STR);
        $stmt->bindValue(':holdingNum', $holdingNum, PDO::PARAM_STR);
        $stmt->bindValue(':roadName', $roadName, PDO::PARAM_STR);
        $stmt->bindValue(':village', $village, PDO::PARAM_STR);
        $stmt->bindValue(':postoffice', $postoffice, PDO::PARAM_STR);
        $stmt->bindValue(':unione', $unione, PDO::PARAM_STR);
        $stmt->bindValue(':thana', $thana, PDO::PARAM_STR);
        $stmt->bindValue(':district', $district, PDO::PARAM_STR);
        $stmt->bindValue(':postcode', $postcode, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_homeName', $lasting_homeName, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_holdingNum', $lasting_holdingNum, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_roadName', $lasting_roadName, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_village', $lasting_village, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_postoffice', $lasting_postoffice, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_unione', $lasting_unione, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_thana', $lasting_thana, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_district', $lasting_district, PDO::PARAM_STR);
        $stmt->bindValue(':lasting_postcode', $lasting_postcode, PDO::PARAM_STR);
        $stmt->bindValue(':father_name', $father_name, PDO::PARAM_STR);
        $stmt->bindValue(':fa_occupation', $fa_occupation, PDO::PARAM_STR);
        $stmt->bindValue(':fa_monthly_income', $fa_monthly_income, PDO::PARAM_STR);
        $stmt->bindValue(':fa_edu_quli', $fa_edu_quli, PDO::PARAM_STR);
        $stmt->bindValue(':fa_phone', $fa_phone, PDO::PARAM_STR);
        $stmt->bindValue(':fa_email', $fa_email, PDO::PARAM_STR);
        $stmt->bindValue(':fa_nid', $fa_nid, PDO::PARAM_STR);
        $stmt->bindValue(':mother_name', $mother_name, PDO::PARAM_STR);
        $stmt->bindValue(':ma_occupation', $ma_occupation, PDO::PARAM_STR);
        $stmt->bindValue(':ma_monthly_income', $ma_monthly_income, PDO::PARAM_STR);
        $stmt->bindValue(':ma_edu_quli', $ma_edu_quli, PDO::PARAM_STR);
        $stmt->bindValue(':ma_phone', $ma_phone, PDO::PARAM_STR);
        $stmt->bindValue(':ma_email', $ma_email, PDO::PARAM_STR);
        $stmt->bindValue(':ma_nid', $ma_nid, PDO::PARAM_STR);
        $stmt->bindValue(':marriage_person', $marriage_person, PDO::PARAM_STR);
        $stmt->bindValue(':marriage_occu', $marriage_occu, PDO::PARAM_STR);
        $stmt->bindValue(':marriage_date', $marriage_date, PDO::PARAM_STR);
        $stmt->bindValue(':marriage_edu_quali', $marriage_edu_quali, PDO::PARAM_STR);
        $stmt->bindValue(':marriage_mobile', $marriage_mobile, PDO::PARAM_STR);
        $stmt->bindValue(':marriage_email', $marriage_email, PDO::PARAM_STR);
        $stmt->bindValue(':children', $children, PDO::PARAM_STR);
        $stmt->bindValue(':image', $image, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $result = $stmt->execute();


        if ($result) {
            $_SESSION['msg'] = 'Data successfully Updated !!!';
            echo "<script>window.location= 'allteacher.php'</script>";
            //header("location:allteacher.php");
        }
    }
}

