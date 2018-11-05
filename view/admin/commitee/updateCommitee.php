<?php 
if(!isset($_SESSION)){
	session_start();
}

// if(!empty($_FILES)){
// 	$_POST['image'] = $_FILES['image'];
// }

$unique_id = $_POST['unique_id'];
$uploadSecondTo = null;
if (!empty($_FILES['image']['name'])) {
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
             echo "<script>window.location='editCommitee.php?edit=".$unique_id."'</script>";

        die();
    }
    elseif (in_array($file_ext, $permited) == false) {
        $fileext = "You can upload only:-".implode(', ', $permited);
        $_SESSION['imgSize'] = $fileext;
       		echo "<script>window.location='editCommitee.php?edit=".$unique_id."'</script>";
        die();
    }


    $uploadSecondTo = "../uploads/commitee/" . $image;
    $_POST['image'] = $image;
    $moveSecond = move_uploaded_file($second_image_tmp, $uploadSecondTo);
}

		//echo "<script>window.location='editCommitee.php?edit=".$unique_id."'</script>";



include_once '../../../vendor/autoload.php';
use App\Admin\Commitee\Commitee;

$commitee = new Commitee();
$result = $commitee->set($_POST)->updateCommitee();

// echo "<pre>";
// var_dump($result);
// die();