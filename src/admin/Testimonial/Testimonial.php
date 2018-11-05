<?php 

namespace App\admin\Testimonial;

if(!isset($_SESSION)){
	session_start();
}


use App\Connection;
use PDOException;
use PDO;

class Testimonial extends Connection
{

	public function set($data = array()){
		// if(array_key_exists('student_id', $data)){
		// 	$this->student_id = $data['student_id'];
		// }
		if(array_key_exists('class', $data)){
			$this->class = $data['class'];
		}
		if(array_key_exists('name', $data)){
			$this->name = $data['name'];
		}
		if(array_key_exists('father', $data)){
			$this->father = $data['father'];
		}
		if(array_key_exists('village', $data)){
			$this->village = $data['village'];
		}
		if(array_key_exists('post', $data)){
			$this->post = $data['post'];
		}
		if(array_key_exists('thana', $data)){
			$this->thana = $data['thana'];
		}
		if(array_key_exists('district', $data)){
			$this->district = $data['district'];
		}
		if(array_key_exists('year', $data)){
			$this->year = $data['year'];
		}
		if(array_key_exists('gpa', $data)){
			$this->gpa = $data['gpa'];
		}
		if(array_key_exists('department', $data)){
			$this->department = $data['department'];
		}
		if(array_key_exists('roll', $data)){
			$this->roll = $data['roll'];
		}
		if(array_key_exists('birth_date', $data)){
			$this->birth_date = $data['birth_date'];
		}


		return $this;
	}

	// insert testimonial info for each student...
	public function insert(){
		try {

			$stmt = $this->con->prepare("insert into testimonial(name, father, village, post, thana, district, year, gpa, department, roll, birth_date, status, unique_id) values(:name, :father, :village, :post, :thana, :district, :year, :gpa, :department, :roll, :birth_date, :status, :unique_id)  ");
			$stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
			$stmt->bindValue(':father', $this->father, PDO::PARAM_STR);
			$stmt->bindValue(':village', $this->village, PDO::PARAM_STR);
			$stmt->bindValue(':post', $this->post, PDO::PARAM_STR);
			$stmt->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$stmt->bindValue(':district', $this->district, PDO::PARAM_STR);
			$stmt->bindValue(':year', $this->year, PDO::PARAM_STR);
			$stmt->bindValue(':gpa', $this->gpa, PDO::PARAM_STR);
			$stmt->bindValue(':department', $this->department, PDO::PARAM_STR);
			$stmt->bindValue(':roll', $this->roll, PDO::PARAM_STR);
			$stmt->bindValue(':birth_date', $this->birth_date, PDO::PARAM_STR);
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['success'] = "Testimonial Created Successfully ";
				//echo "<script>window.location='view/admin/testimonial/store.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	

	// search student data for making testimonial
	public function findTestimonial($id,$class){
		try {
			
			$stmt = $this->con->prepare("select * from student_data where student_id=:id and class=:class and status=:status ");
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// search student data for making testimonial
	public function findTC($id){
		try {
			
			$stmt = $this->con->prepare("select * from student_data where student_id=:id and status=:status ");
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->bindValue(':status', 1, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	
}