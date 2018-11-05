
<?php
//echo "<pre>";
//var_dump($_POST);
//var_dump($_FILES);
//echo "<pre>";
//die();
error_reporting(0);
if(!isset($_SESSION)){
   session_start();
}



if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //$name = $_POST['text'];

//    $sex = $_POST['sex'];
//    $student_name = $_POST['student_name'];
//    $class = $_POST['class'];
    //$class = $_POST['class'];

    $sex                =  $_POST['sex'];
    $teacher_name       =  $_POST['teacher_name'];
    $designation        =  $_POST['designation'];
    $what_work          =  $_POST['what_work'];
    $eduquali           =  $_POST['eduquali'];
    $training           =  $_POST['training'];
    $join_date          =  $_POST['join_date'];
    $retire_date       =  $_POST['retire_date'];
    $index_number       =  $_POST['index_number'];
    $mpo_date           =  $_POST['mpo_date'];
    $birth_date         =  $_POST['birth_date'];
    $blood              =  $_POST['blood'];
    $religion           =  $_POST['religion'];
    $email              =  $_POST['email'];
    $nid                =  $_POST['nid'];
    $mobile             =  $_POST['mobile'];
    $lastorga           =  $_POST['lastorga'];
    $whyleft            =  $_POST['whyleft'];
    $orgaarea           =  $_POST['orgaarea'];
    $homeName           =  $_POST['homeName'];
    $holdingNum         =  $_POST['holdingNum'];
    $roadName           =  $_POST['roadName'];
    $village            =  $_POST['village'];
    $postoffice         =  $_POST['postoffice'];
    $unione             =  $_POST['unione'];
    $thana              =  $_POST['thana'];
    $district           =  $_POST['district'];
    $postcode           =  $_POST['postcode'];
    $lasting_homeName   = $_POST['lasting_homeName'];
    $lasting_holdingNum =  $_POST['lasting_holdingNum'];
    $lasting_roadName   =  $_POST['lasting_roadName'];
    $lasting_village    =  $_POST['lasting_village'];
    $lasting_postoffice =  $_POST['lasting_postoffice'];
    $lasting_unione     =  $_POST['lasting_unione'];
    $lasting_thana      =  $_POST['lasting_thana'];
    $lasting_district   =  $_POST['lasting_district'];
    $lasting_postcode   =  $_POST['lasting_postcode'];
    $father_name        =  $_POST['father_name'];
    $fa_occupation      =  $_POST['fa_occupation'];
    $fa_monthly_income  =  $_POST['fa_monthly_income'];
    $fa_edu_quli        =  $_POST['fa_edu_quli'];
    $fa_phone           =  $_POST['fa_phone'];
    $fa_email           =  $_POST['fa_email'];
    $fa_nid             =  $_POST['fa_nid'];
    $mother_name        =  $_POST['mother_name'];
    $ma_occupation      =  $_POST['ma_occupation'];
    $ma_monthly_income  =  $_POST['ma_monthly_income'];
    $ma_edu_quli        =  $_POST['ma_edu_quli'];
    $ma_phone           =  $_POST['ma_phone'];
    $ma_email           =  $_POST['ma_email'];
    $ma_nid             =  $_POST['ma_nid'];
    $marriage_person    =  $_POST['marriage_person'];
    $marriage_occu      =  $_POST['marriage_occu'];
    $marriage_date      =  $_POST['marriage_date'];
    $marriage_edu_quali =  $_POST['marriage_edu_quali'];
    $marriage_mobile    =  $_POST['marriage_mobile'];
    $marriage_email     =  $_POST['marriage_email'];
    $children           =  $_POST['children'];
    //$local_national_id   =  $_POST['local_national_id'];
    //$student_image       =  $_POST['student_image'];
    //$father_image        =  $_POST['father_image'];
    //$mother_image        =  $_POST['mother_image'];

}

?>

<?php

$db = new PDO('mysql:host=localhost;dbname=kghs;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);






$uploadSecondTo = null;
if (isset($_FILES['image'])) {
    $image = $_FILES['image']['name'];
    $second_image_size = $_FILES['image']['size'];
    $second_image_tmp = $_FILES['image']['tmp_name'];

    $name =  substr(md5(time()),'0','10');
    $data = explode('.',$image);
    $image = $name.'.'.end($data);

    $permited = array('jpg', 'jpeg', 'png', 'gif');
    $file_size = $_FILES['image']['size'];
    $div2 = explode('.', $image);
    $file_ext = strtolower(end($div2));

    if($file_size > 1048576){
        $imgSize = "Image size should be less then 1MB !!!";
        $_SESSION['imgSize'] = $imgSize;
             echo "<script>window.location= 'addTeacherInfo.php'</script>";

        die();
    }
    elseif (in_array($file_ext, $permited) == false) {
        $fileext = "You can upload only:-".implode(', ', $permited);
        $_SESSION['fileext'] = $fileext;
             echo "<script>window.location= 'addTeacherInfo.php'</script>";

        die();
    }


    $uploadSecondTo = "../uploads/teacher/" . $image;
    $moveSecond = move_uploaded_file($second_image_tmp, $uploadSecondTo);
}



 


    $stmt = $db->prepare("insert into teacher_data(sex, teacher_name, designation, what_work, eduquali, training, join_date, retire_date,index_number, mpo_date, birth_date, blood, religion, email, mobile, nid, lastorga, whyleft, orgaarea, homeName, holdingNum, roadName, village, postoffice, unione, thana, district, postcode, lasting_homeName, lasting_holdingNum, lasting_roadName, lasting_village, lasting_postoffice, lasting_unione, lasting_thana, lasting_district, lasting_postcode, father_name, fa_occupation, fa_monthly_income, fa_edu_quli, fa_phone, fa_email, fa_nid, mother_name, ma_occupation, ma_monthly_income, ma_edu_quli, ma_phone, ma_email, ma_nid, marriage_person, marriage_occu, marriage_date, marriage_edu_quali, marriage_mobile, marriage_email,children,  image, unique_id )

VALUES(:sex, :teacher_name, :designation, :what_work, :eduquali, :training, :join_date, :retire_date, :index_number, :mpo_date, :birth_date, :blood, :religion, :email, :mobile, :nid,  :lastorga, :whyleft, :orgaarea, :homeName, :holdingNum, :roadName, :village, :postoffice, :unione, :thana, :district, :postcode, :lasting_homeName, :lasting_holdingNum, :lasting_roadName, :lasting_village, :lasting_postoffice, :lasting_unione, :lasting_thana, :lasting_district, :lasting_postcode, :father_name, :fa_occupation, :fa_monthly_income, :fa_edu_quli, :fa_phone, :fa_email, :fa_nid, :mother_name, :ma_occupation, :ma_monthly_income, :ma_edu_quli, :ma_phone, :ma_email, :ma_nid, :marriage_person, :marriage_occu, :marriage_date, :marriage_edu_quali, :marriage_mobile, :marriage_email, :children, :image, :unique_id )");




    $result = $stmt->execute(array(
        ':sex' => $sex,
        ':teacher_name' => $teacher_name,
        ':designation'=>$designation,
        ':what_work'=>$what_work,
        ':eduquali'=>$eduquali,
        ':training'=>$training,
        ':join_date'=>$join_date,
        ':retire_date'=>$retire_date,
        ':index_number'=>$index_number,
        ':mpo_date'=>$mpo_date,
        ':birth_date'=>$birth_date,
        ':blood'=>$blood,
        ':religion'=>$religion,
        ':email'=>$email,
        ':mobile'=>$mobile,
        ':nid'=>$nid,
        ':lastorga'=>$lastorga,
        ':whyleft'=>$whyleft,
        ':orgaarea'=>$orgaarea,
        ':homeName'=>$homeName,
        ':holdingNum'=>$holdingNum,
        ':roadName'=>$roadName,
        ':village'=>$village,
        ':postoffice'=>$postoffice,
        ':unione'=>$unione,
        ':thana'=>$thana,
        ':district'=>$district,
        ':postcode'=>$postcode,
        ':lasting_homeName'=>$lasting_homeName,
        ':lasting_holdingNum'=>$lasting_holdingNum,
        ':lasting_roadName'=>$lasting_roadName,
        ':lasting_village'=>$lasting_village,
        ':lasting_postoffice'=>$lasting_postoffice,
        ':lasting_unione'=>$lasting_unione,
        ':lasting_thana'=>$lasting_thana,
        ':lasting_district'=>$lasting_district,
        ':lasting_postcode'=>$lasting_postcode,
        ':father_name'=>$father_name,
        ':fa_occupation'=>$fa_occupation,
        ':fa_monthly_income'=>$fa_monthly_income,
        ':fa_edu_quli'=>$fa_edu_quli,
        ':fa_phone'=>$fa_phone,
        ':fa_email'=>$fa_email,
        ':fa_nid'=>$fa_nid,
        ':mother_name'=>$mother_name,
        ':ma_occupation'=>$ma_occupation,
        ':ma_monthly_income'=>$ma_monthly_income,
        ':ma_edu_quli'=>$ma_edu_quli,
        ':ma_phone'=>$ma_phone,
        ':ma_email'=>$ma_email,
        ':ma_nid'=>$ma_nid,
        ':marriage_person'=>$marriage_person,
        ':marriage_occu'=>$marriage_occu,
        ':marriage_date'=>$marriage_date,
        ':marriage_edu_quali'=>$marriage_edu_quali,
        ':marriage_mobile'=>$marriage_mobile,
        ':marriage_email'=>$marriage_email,
        ':children'=>$children,
        ':image'=>$image,
        ':unique_id'=> md5(time())

    ));


    if($result){
        //header("location:addTeacherInfo.php");
        //header('location: view/admin/auth/login.php');
        $_SESSION['msg'] = 'Data successfully Inserted !!!';
    echo "<script>window.location= 'allteacher.php'</script>";
   // echo "<script>window.location= 'view/admin/auth/login.php'</script>";
    }

?>



