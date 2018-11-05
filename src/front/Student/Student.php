
<?php 

namespace App\Front\Student;

use App\Connection;
use PDO;
use PDOException;


class Student extends Connection
{
	public function academicinfo($data)  {
		try{
			$stmt = $this->con->prepare('SELECT * FROM student_data WHERE student_id LIKE :search OR student_name LIKE :name');
			//$stmt = $db->prepare($query);
			$stmt->bindValue(':search', '%' . $data . '%', PDO::PARAM_INT);
			$stmt->bindValue(':name', '%' . $data . '%', PDO::PARAM_INT);
			$stmt->execute();
    		
    		if ($stmt->rowCount() > 0){
    			return $stmt->fetch(PDO::FETCH_ASSOC);
    		}else{
    			header('Location:academicinfo.php');
    		}

		}
		catch(PDOException $e){
			print "Error!: " . $e->getMessage() . "<br/>";
               die();
		}
	}
}