<?php 

namespace App\admin\Promotion;

if(!isset($_SESSION)){
	session_start();
}
use PDO;
use PDOException;
use App\Connection;

class Promotion extends Connection
{
	public function set($data = array()){
		if(array_key_exists('classfrom', $data)){
			$this->classfrom = $data['classfrom'];
		}
		if(array_key_exists('shiftfrom', $data)){
			$this->shiftfrom = $data['shiftfrom'];
		}
		if(array_key_exists('branchfrom', $data)){
			$this->branchfrom = $data['branchfrom'];
		}
		if(array_key_exists('yearfrom', $data)){
			$this->yearfrom = $data['yearfrom'];
		}
		if(array_key_exists('classto', $data)){
			$this->classto = $data['classto'];
		}
		if(array_key_exists('shiftto', $data)){
			$this->shiftto = $data['shiftto'];
		}
		if(array_key_exists('branchto', $data)){
			$this->branchto = $data['branchto'];
		}
		if(array_key_exists('yearto', $data)){
			$this->yearto = $data['yearto'];
		}

		return $this;
	}

	public function studentPromotion()
	{
		try {

			$stmt = $this->con->prepare("
				update student_data set 
				                                                                                                                                                                                                                                                                           
				");
			$stmt->bindValue(':class', $this->classto, PDO::PARAM_STR);
			$stmt->bindValue(':shift', $this->shift, PDO::PARAM_STR);
			$stmt->bindValue(':branch', $this->branch, PDO::param);
			$stmt->bindValue(':year', $this->yearto, PDO::PARAM_STR);
			$stmt->exeucte();
			if($stmt){
				$_SESSION['success'] = "Student Promotion success";
				echo "<script>window.locatio='view/admin/promotion/index.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}
}