<?php 

namespace App\Admin\Commitee;

if(!isset($_SESSION)){
	session_start();
}

use App\Connection;
use PDO;
use PDOException;

class Commitee extends Connection{

	public function set($data = array()){
		if(array_key_exists('name', $data)){
			$this->name = $data['name'];
		}
		if(array_key_exists('sex', $data)){
			$this->sex = $data['sex'];
		}
		if(array_key_exists('designation', $data)){
			$this->designation = $data['designation'];
		}
		if(array_key_exists('eduquali', $data)){
			$this->eduquali = $data['eduquali'];
		}
		if(array_key_exists('join_date', $data)){
			$this->join_date = $data['join_date'];
		}
		if(array_key_exists('retire_date', $data)){
			$this->retire_date = $data['retire_date'];
		}
		if(array_key_exists('birth_date', $data)){
			$this->birth_date = $data['birth_date'];
		}
		if(array_key_exists('blood', $data)){
			$this->blood = $data['blood'];
		}
		if(array_key_exists('religion', $data)){
			$this->religion = $data['religion'];
		}
		if(array_key_exists('email', $data)){
			$this->email = $data['email'];
		}
		if(array_key_exists('mobile', $data)){
			$this->mobile = $data['mobile'];
		}
		if(array_key_exists('nid', $data)){
			$this->nid = $data['nid'];
		}
		if(array_key_exists('homeName', $data)){
			$this->homeName = $data['homeName'];
		}
		if(array_key_exists('holdingNum', $data)){
			$this->holdingNum = $data['holdingNum'];
		}
		if(array_key_exists('roadName', $data)){
			$this->roadName = $data['roadName'];
		}
		if(array_key_exists('village', $data)){
			$this->village = $data['village'];
		}
		if(array_key_exists('postoffice', $data)){
			$this->postoffice = $data['postoffice'];
		}
		if(array_key_exists('unione', $data)){
			$this->unione = $data['unione'];
		}
		if(array_key_exists('thana', $data)){	
			$this->thana = $data['thana'];
		}
		if(array_key_exists('district', $data)){
			$this->district = $data['district'];
		}
		if(array_key_exists('postcode', $data)){
			$this->postcode = $data['postcode'];
		}
		if(array_key_exists('image', $data)){
			$this->image = $data['image'];
		}
		if(array_key_exists('unique_id', $data)){
			$this->unique_id = $data['unique_id'];
		}

		return $this;
	}

	public function store(){
		try {

			$stmt = $this->con->prepare("insert into commitee(name, sex, designation, eduquali, join_date, retire_date, birth_date, blood, religion, email, mobile, nid, homeName, holdingNum, roadName, village, postoffice, unione, thana, district, postcode, image, status, unique_id, created_at ) 

				values(:name, :sex, :designation, :eduquali, :join_date, :retire_date, :birth_date, :blood, :religion, :email, :mobile, :nid, :homeName, :holdingNum, :roadName, :village, :postoffice, :unione, :thana, :district, :postcode, :image, :status, :unique_id, NOW() ) ");

			$stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
			$stmt->bindValue(':sex', $this->sex, PDO::PARAM_STR);
			$stmt->bindValue(':designation', $this->designation, PDO::PARAM_STR);
			$stmt->bindValue(':eduquali', $this->eduquali, PDO::PARAM_STR);
			$stmt->bindValue(':join_date', $this->join_date, PDO::PARAM_STR);
			$stmt->bindValue(':retire_date', $this->retire_date, PDO::PARAM_STR);
			$stmt->bindValue(':birth_date', $this->birth_date, PDO::PARAM_STR);
			$stmt->bindValue(':blood', $this->blood, PDO::PARAM_STR);
			$stmt->bindValue(':religion', $this->religion, PDO::PARAM_STR);
			$stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
			$stmt->bindValue(':mobile', $this->mobile, PDO::PARAM_STR);
			$stmt->bindValue(':nid', $this->nid, PDO::PARAM_STR);
			$stmt->bindValue(':homeName', $this->homeName, PDO::PARAM_STR);
			$stmt->bindValue(':holdingNum', $this->holdingNum, PDO::PARAM_STR);
			$stmt->bindValue(':roadName', $this->roadName, PDO::PARAM_STR);
			$stmt->bindValue(':village', $this->village, PDO::PARAM_STR);
			$stmt->bindValue(':postoffice', $this->postoffice, PDO::PARAM_STR);
			$stmt->bindValue(':unione', $this->unione, PDO::PARAM_STR);
			$stmt->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$stmt->bindValue(':district', $this->district, PDO::PARAM_STR);
			$stmt->bindValue(':postcode', $this->postcode, PDO::PARAM_STR);
			$stmt->bindValue(':image', $this->image, PDO::PARAM_STR);
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['commitee'] = "Data Inserted Successfully ";
				echo "<script>window.location='index.php'</script>";
			}
			
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	//select all member for show
	public function allMemberSelect(){
		try {

			$stmt = $this->con->prepare("SELECT * FROM commitee where status = 1 ORDER by id ASC");
			$stmt->execute();
			if($stmt){
				return $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br >";
			die();
		}
	}

	// edit commitee member information
	public function editCommitee($id){
		try {

			$stmt = $this->con->prepare("select * from commitee where status = 1 and unique_id = :id ");
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				return $stmt->fetch(PDO::FETCH_ASSOC);
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// show commitee using unique id
	public function showCommitee($id){
		try {

			$stmt = $this->con->prepare("select * from commitee where status = 1 and unique_id=:id ");
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				return $stmt->fetch(PDO::FETCH_ASSOC);
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// remove/delete commitee on display
	public function deleteCommitee($id){
		try {

			$stmt = $this->con->prepare("update commitee set status = :status where unique_id = :id ");
			$stmt->bindValue(':status', 2, PDO::PARAM_STR);
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['commitee'] = "Data Deleted Successfully !!!";
				echo "<script>window.location='index.php'</script>";
			}

		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// update commitee member info
	public function updateCommitee(){
		try {

			$stmt = $this->con->prepare("update commitee set 

					name = :name,
					sex = :sex,
					designation = :designation,
					eduquali = :eduquali,
					join_date = :join_date,
					retire_date = :retire_date,
					birth_date = :birth_date,
					blood = :blood,
					religion = :religion,
					email  = :email,
					mobile = :mobile,
					nid = :nid,
					homeName = :homeName,
					holdingNum = :holdingNum,
					roadName =:roadName, 
					village = :village,
					postoffice = :postoffice,
					unione = :unione,
					thana = :thana,
					district = :district,
					postcode = :postcode,
					image = :image,
					updated_at = NOW()
					where unique_id = :unique_id
					");
			$stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
			$stmt->bindValue(':sex', $this->sex, PDO::PARAM_STR);
			$stmt->bindValue(':designation', $this->designation, PDO::PARAM_STR);
			$stmt->bindValue(':eduquali', $this->eduquali, PDO::PARAM_STR);
			$stmt->bindValue(':join_date', $this->join_date, PDO::PARAM_STR);
			$stmt->bindValue(':retire_date', $this->retire_date, PDO::PARAM_STR);
			$stmt->bindValue(':birth_date', $this->birth_date, PDO::PARAM_STR);
			$stmt->bindValue(':blood', $this->blood, PDO::PARAM_STR);
			$stmt->bindValue(':religion', $this->religion, PDO::PARAM_STR);
			$stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
			$stmt->bindValue(':mobile', $this->mobile, PDO::PARAM_STR);
			$stmt->bindValue(':nid', $this->nid, PDO::PARAM_STR);
			$stmt->bindValue(':homeName', $this->homeName, PDO::PARAM_STR);
			$stmt->bindValue(':holdingNum', $this->holdingNum, PDO::PARAM_STR);
			$stmt->bindValue(':roadName', $this->roadName, PDO::PARAM_STR);
			$stmt->bindValue(':village', $this->village, PDO::PARAM_STR);
			$stmt->bindValue(':postoffice', $this->postoffice, PDO::PARAM_STR);
			$stmt->bindValue(':unione', $this->unione, PDO::PARAM_STR);
			$stmt->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$stmt->bindValue(':district', $this->district, PDO::PARAM_STR);
			$stmt->bindValue(':postcode', $this->postcode, PDO::PARAM_STR);
			$stmt->bindValue(':image', $this->image, PDO::PARAM_STR);
			$stmt->bindValue(':unique_id', $this->unique_id, PDO::PARAM_STR);
			$stmt->execute();

			if($stmt){
				$_SESSION['commitee'] = "Data Successfully Updated !";
				echo "<script>window.location='index.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// restore after deleted commitee...
	public function restoreCommitee($id){
		try {

			$stmt = $this->con->prepare("update commitee set status=:status where unique_id=:id ");
			$stmt->bindValue(':status', 2, PDO::PARAM_STR);
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['commitee'] = "Data Restored Successfully !!!";
				echo "<script>window.location='commiteRestore.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	public function commiteeDeletedParmanently($id){
		try {

			$stmt = $this->con->prepare("delete * from commitee where status=2 and unique_id=:id ");
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['deletePar'] = "Data Deleted Parmanently Successfylly !!!";
				echo "<script>window.location='index.php'</script>";
 			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}


}