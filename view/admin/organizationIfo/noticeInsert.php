
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

    $notice     =  $_POST['notice'];
    $details    =  $_POST['details'];
     

}

?>

<?php

$db = new PDO('mysql:host=localhost;dbname=sphsg;charset=utf8', 'root', '');
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

    $permited = array('jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc');
    $file_size = $_FILES['image']['size'];
    $div2 = explode('.', $image);
    $file_ext = strtolower(end($div2));


if($file_size > 1048576){
    $imgSize = "Image size should be less then 1MB !!!";
    $_SESSION['imgSize'] = $imgSize;
         echo "<script>window.location= 'topnews.php'</script>";

    die();
}
elseif (in_array($file_ext, $permited) == false) {
    $fileext = "You can upload only:-".implode(', ', $permited);
    $_SESSION['fileext'] = $fileext;
         echo "<script>window.location= 'topnews.php'</script>";

    die();
}


    $uploadSecondTo = "../uploads/news/" . $image;
    $moveSecond = move_uploaded_file($second_image_tmp, $uploadSecondTo);
}



 

    $stmt = $db->prepare("insert into top_news(news, details,  image, year, news_date, month, unique_id )

VALUES(:notice, :details,  :image, :year, :news_date, :month, :unique_id )");




    $result = $stmt->execute(array(
        ':notice' => $notice,
        ':details' => $details,
         
        ':image'=>$image,
        ':year'=>date('Y'),
        ':news_date'=>date('Y-m-d'),
        ':month'=>date('m'),
        ':unique_id'=> md5(time())

    ));


    if($result){
        //header("location:addTeacherInfo.php");
        //header('location: view/admin/auth/login.php');
        $_SESSION['notice'] = 'News successfully Inserted !!!';
    echo "<script>window.location= 'allnews.php'</script>";
   // echo "<script>window.location= 'view/admin/auth/login.php'</script>";
    }
 
?>



