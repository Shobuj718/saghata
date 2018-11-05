<?php 

namespace App\admin\Tabulation;

if(!isset($_SESSION)){
	session_start();
}


use App\Connection;
use PDOException;
use PDO;

class Tabulation extends Connection
{
	public function selectAllMark($class, $term, $year)
	{
		try {

			$stmt = $this->con->prepare("select * from allmarks where class=:class and term=:term and year=:year and status=:status order by gpa desc");
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':term', $term, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				return $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
			
		} catch (PDOException $e) {
			echo "Error :".$e->getMessage()."<br>";
			die();
		}
	}

		// select only gpa field...
	public function selectGPA()
	{
		try {

			$stmt = $this->con->prepare('select * from niteten where status=:status');
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				return $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

		// select one to five mark for creating tabulation sheet...
	public function selectOneToFive($class, $term, $year)
	{
		try {

			$stmt = $this->con->prepare("select * from onetofivemark where class=:class and term=:term and year=:year and status=:status order by gpa desc");
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':term', $term, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				return $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	
	//Select nine ten science
	public function selectAllNineTen($class, $term, $year)
	{
		try {

			$stmt = $this->con->prepare("select * from niteten where class=:class and term=:term and year=:year and status=:status order by gpa desc");
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':term', $term, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				return $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
			
		} catch (PDOException $e) {
			echo "Error :".$e->getMessage()."<br>";
			die();
		}
	}

	//Select nine ten arts
	public function selectNineTenScience($class, $term, $year, $dept)
	{
		try {

			$stmt = $this->con->prepare("select * from nineten where class=:class and term=:term and year=:year and department=:dept and status=:status order by student_id ASC ");
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':term', $term, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->bindValue(':dept', $dept, PDO::PARAM_STR);
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				return $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	//select student id
	public function stu_id_select($stu_id){
		try{
    		$stmt = $this->con->prepare('SELECT class_roll,student_name FROM `student_data` WHERE student_id = :id and status = 1 ');
    		$stmt->bindValue(':id', $stu_id, PDO::PARAM_STR);
    		$stmt->execute();
    		return $stmt->fetch(PDO::FETCH_ASSOC);

    	}
    	catch (PDOException $e) {
               print "Error!: " . $e->getMessage() . "<br/>";
               die();
           }
	}
	
}