<?php 

namespace App;

use App\Connection;

use PDOExecption;
use PDO;

class Helper extends Connection
{

	public function img_delete($unique_id){
		$stmt = $this->con->prepare("select image from top_news where unique_id = :id ");
		$stmt->bindValue(':id', $unique_id, PDO::PARAM_STR);
		$stmt->execute();
		$image_name = $stmt->fetch(PDO::PARAM_STR);
		$data = "../uploads/news/".$image_name['image'];
		if(isset($data)){
			unlink($data);
		}
	}

	public function image_upload($unique_id){

		$upload = null;
	 
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
		         echo "<script>window.location= 'editnews.php?edit=".$unique_id."'</script>";

		    die();
		}
		elseif (in_array($file_ext, $permited) == false) {
		    $fileext = "You can upload only:-".implode(', ', $permited);
		    $_SESSION['fileext'] = $fileext;
		         echo "<script>window.location= 'editnews.php?edit=".$unique_id."'</script>";

		    die();
		}


		    $upload = "../uploads/news/" . $image;
		    $moveSecond = move_uploaded_file($second_image_tmp, $upload);
		    return $_POST['image'] = $image;
		}

 
}