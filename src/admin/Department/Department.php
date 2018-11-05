<?php 

namespace App\Admin\Department;

if(!isset($_SESSION)){
	session_start();
}

use PDOException;
use PDO;
use App\Connection;

class Department extends Connection 
{
	public function set($data = array()){
		if(array_key_exists('class', $data)){
			$this->class = $data['class'];
		}
		if(array_key_exists('deptName', $data)){
			$this->deptName = $data['deptName'];
		}
		return $this;
	}

	// insert database department info...
	public function store(){
		try {

			$stmt = $this->con->prepare(" insert into department(class, deptName, unique_id, created_at) values(:class, :deptName, :unique_id, NOW() ) ");
			$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':deptName', $this->deptName, PDO::PARAM_STR);
			$stmt->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$stmt->execute();

			
			if($stmt){
				$_SESSION['deptinsert'] = "Department Inserted Successfully ";
				echo "<script>window.location='index.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

	// select all class and department name from database...
	public function selectAllDept(){
		try {

			$stmt = $this->con->prepare("select * from department where status = 1");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br />";
			die();
		}
	}

}