<?php 

namespace App\Admin\Section;

if(!isset($_SESSION)){
	session_start();
}

use App\Connection;
use PDOException;
use PDO;

class Section extends Connection
{
	public function set($data = array()){
		if(array_key_exists('class', $data)){
			$this->class = $data['class'];
		}
		if(array_key_exists('section', $data)){
			$this->section = $data['section'];
		}
		if(array_key_exists('nickname', $data)){
			$this->nickname = $data['nickname'];
		}
		if(array_key_exists('unique_id', $data)){
			$this->unique_id = $data['unique_id'];
		}
		return $this;
	}

	//insert section to database...
	public function store(){
		try {

			$stmt = $this->con->prepare("insert into section(class, section, nickname, status, unique_id, created_at) values(:class, :section, :nickname, :status, :unique_id, NOW()) ");
			$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':section', $this->section, PDO::PARAM_STR);
			$stmt->bindValue(':nickname', $this->nickname, PDO::PARAM_STR);
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['sectioninsert'] = "Section Inserted Successfully ";
				echo "<script>window.location='section/allsection.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//select all section from database...
	public function selectAllSection(){
		try {

			$stmt = $this->con->prepare("select * from section where status = 1 ");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//edit section 
	public function editSection($id){
		try {

			$stmt = $this->con->prepare("select * from section where unique_id = :id ");
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//update section 
	public function updateSection(){
		try {

			$stmt = $this->con->prepare("update section set class=:class, section=:section, nickname=:nickname, updated_at=NOW() where unique_id=:id ");
			$stmt->bindValue(':class',$this->class, PDO::PARAM_STR);
			$stmt->bindValue(':section', $this->section, PDO::PARAM_STR);
			$stmt->bindValue(':nickname', $this->nickname, PDO::PARAM_STR);
			$stmt->bindValue(':id', $this->unique_id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['sectioninsert'] = "Section Data Updated Successfully ";
				echo "<script>window.location='section/allsection.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//temporary delete section
	public function tmpDeleteSection($id){
		try {

			$stmt = $this->con->prepare("update section set status=:status where unique_id=:id");
			$stmt->bindValue(':status', 2, PDO::PARAM_STR);
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['sectiondelete'] = "Section Data Deleted Successfully ";
				echo "<script>window.location='section/allsection.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//select tmp delete section
	public function selectDeleteSection(){
		try {

			$stmt = $this->con->prepare("select * from section where status = 2 ");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//restore section bofore parmanent deleted
	public function restoreSection($id){
		try {

			$stmt = $this->con->prepare("update section set status=:status where unique_id=:id" );
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['restoresection'] = "Section Data Restored Successfully ";
				echo "<script>window.location='allDeleteSection.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//parmanently deleted section...
	public function deleteSectionParmanent($id){
		try {

			$stmt = $this->con->prepare("delete from section where unique_id=:id");
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['deletesection'] = "Section Deleted Successfully !!!";
				echo "<script>window.location='allDeleteSection.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//particular class and section select start here...
	public function selectClassOneSection(){
		try {

			$stmt = $this->con->prepare("select * from section where class='One' and status=1 ");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//select class two section 
	public function selectClassTwoSection(){
		try {

			$stmt = $this->con->prepare("select * from section where class='Two' and status=1 ");
			$stmt->execute();
			return $stmt->fetchAll(PDO::PARAM_STR);

		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//select class three all section...
	public function selectClassThreeSection(){
		try {

			$stmt = $this->con->prepare("select * from section where class='Three' and status=1 ");
			$stmt->execute();
			return $stmt->fetchAll(PDO::PARAM_STR);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//select class four all section...
	public function selectClassFourSection(){
		try {

			$stmt = $this->con->prepare("select * from section where class = 'Four' and status = 1 ");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//select class five all section...
	public function selectClassFiveSection(){
		try {

			$stmt = $this->con->prepare("select * from section where class = 'Five' and status = 1 ");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//select class six all section...
	public function selectClassSixSection(){
		try {

			$stmt = $this->con->prepare("select * from section where class = 'Six' and status = 1 ");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//select class seven all section...
	public function selectClassSevenSection(){
		try {

			$stmt = $this->con->prepare("select * from section where class = 'Seven' and status = 1 ");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//select class eight all section...
	public function selectClassEightSection(){
		try {

			$stmt = $this->con->prepare("select * from section where class = 'Eight' and status = 1 ");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//select class nine all section 
	public function selectClassNineSection(){
		try {

			$stmt = $this->con->prepare("select * from section where class = 'Nine' and status = 1");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//select class ten all section...
	public function selectClassTenSection(){
		try {

			$stmt = $this->con->prepare("select * from section where class = 'Ten' and status = 1 ");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

}