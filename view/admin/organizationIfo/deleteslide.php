<?php 

    include_once '../../../vendor/autoload.php';

use App\admin\News\News;
use App\Helper;

$id = $_GET['del'];

$news = new News();
$helper = new helper();

//$helper->img_delete($id);
$news->deleteslide($id);
