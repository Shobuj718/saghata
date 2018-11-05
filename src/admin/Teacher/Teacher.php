<?php 

namespace App\Admin\Teacher;

if(!isset($_SESSION)){
    session_start();
}

use App\Connection;
use PDO;
use PDOException;

class Teacher extends Connection
{

	public function showTecher($id){
		try {

			$stmt = $this->con->prepare('SELECT * FROM `teacher_data` WHERE unique_id = :id and status = 1 ');
    		$stmt->bindValue(':id', $id, PDO::PARAM_STR);
    		$stmt->execute();
    		return $stmt->fetch(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	//delete teacher data...
	public function delete($id){
		try{
			$stmt = $this->con->prepare("update teacher_data set 
        
					         status = :status
					         where unique_id = :id ");

			$stmt->bindValue(':status', '2', PDO::PARAM_STR);
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$result = $stmt->execute();

			if($result){
				$_SESSION['msg'] = "<p style='font-size:20px;'>Data Deleted Successfully.</p>";
				//echo "<script>window.location= 'allteacher.php'</script>";
				header('location:allteacher.php');
			}
		}
		catch(PDOException $e){
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//select all deleted teacher...
	public function selectDeletedTeacher(){
		try {
			
			$stmt = $this->con->prepare("select * from teacher_data where status = :status ");
			$stmt->bindValue(':status', 2, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);

		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//restore teacher data data after delete
	public function restoreTeacher($id){
		try {

			$stmt = $this->con->prepare("update teacher_data set status = :status where unique_id = :id ");
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['restoreteacher'] = "Teacher Data Restored Successfully ";
				echo "<script>window.location='allDeleteTeacher.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	//parmanent deleted 
	public function parmanentDelete($id){
		try {

			$stmt = $this->con->prepare("delete from teacher_data where unique_id = :id ");
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['deleteteacher'] = "Teacher Data Parmanently Deleted ";
				echo "<script>window.location='allDeleteTeacher.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	// total register teacher count
	public function totalTeacher(){
		try {

			$stmt = $this->con->prepare("select * from teacher_data where status=1 ");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	public function deletedTeahcer(){
		try {

			$stmt = $this->con->prepare("select * from teacher_data where status=:status ");
			$stmt->bindValue(':status', 2, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['success'] = "These are total deleted teacher !!!";
				echo "<script>window.location='index.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	 //select data from database
    public function teacherIDForSendSMS($id){
        try{
            $stmt = $this->con->prepare('SELECT * FROM `teacher_data` WHERE mobile = :id and status = 1 ');
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }
        catch (PDOException $e) {
               print "Error!: " . $e->getMessage() . "<br/>";
               die();
           }
    }
	
}