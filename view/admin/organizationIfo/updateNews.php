<?php 
    include_once '../../../vendor/autoload.php';

// echo "<pre>";
// var_dump($_POST);

// var_dump($_FILES);
//     die();
error_reporting(0);

 use App\admin\News\News;
 use App\Helper;

$news = new News();

if(!empty($_FILES['image']['name'])){
	$helper = new Helper();

	$helper->img_delete($_POST['unique_id']);
	$_POST['image'] = $helper->image_upload($_POST['unique_id']);

 //$result = $news->set($_POST);
 //$result->update();

}
 
	$result = $news->set($_POST);
 	$result->update();

 
 
 

 // echo "<pre>";
 // var_dump($result);
 // die();
 
 