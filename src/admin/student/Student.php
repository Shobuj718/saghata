<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 09-Dec-17
 * Time: 11:10 AM
 */



namespace App\Admin\student;

if(!isset($_SESSION)){
    session_start();
}

use App\Connection;
use PDO;
use PDOException;

class Student extends Connection
{


    //select data from database
    public function select($query){
        $result =$this->con->prepare($query);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function showSelect($id){
    	try{
    		$stmt = $this->con->prepare('SELECT * FROM `student_data` WHERE unique_id = :id and status = 1 ');
    		$stmt->bindValue(':id', $id, PDO::PARAM_STR);
    		$stmt->execute();
    		return $stmt->fetch(PDO::FETCH_ASSOC);

    	}
    	catch (PDOException $e) {
               print "Error!: " . $e->getMessage() . "<br/>";
               die();
           }
    }

    // teacher data select for show
    public function showTeacher($id){
        try{
            $stmt = $this->con->prepare('SELECT * FROM `teacher_data` WHERE unique_id = :id');
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }
        catch (PDOException $e) {
               print "Error!: " . $e->getMessage() . "<br/>";
               die();
           }
    }

    // select all student fee for print
    public function selectStuFee($id){
        try {

            $stmt = $this->con->prepare("select * from student_fee where student_id = :id and status=1");
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage()."<br>";
            die();
        }
    }
    

    public function selectId(){
        try{
            $stmt = $this->con->prepare('select student_id from student_data ORDER by id DESC Limit 1 ');
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            echo "Error !" .$e->getMessage(). "<br />";
            die();
        }
    }

    //select delete student for restore...
    public function selectDeleteStudent(){
        try {
            
            $stmt =$this->con->prepare("select * from student_data where status = :status ");
            $stmt->bindValue(':status', 2, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage()."<br />";
            die();
        }
    }

    //restore student from database
    public function restoreStudent($id){
        try {

            $stmt = $this->con->prepare("update student_data set status = :status where unique_id = :id ");
            $stmt->bindValue(':status', 1, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            if($stmt){
                $_SESSION['restoreStu'] = "Student Restorecd Successfully ";
                echo "<script>window.location='allDeleteStudent.php'</script>";
            }
            
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage()."<br />";
            die();
        }
    }

    //paramanently deleted student data from database...
    public function parmanentDeleteStudent($id){
        try {
            
            $stmt = $this->con->prepare("delete from student_data where unique_id = :id ");
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            if($stmt){
                $_SESSION['deletestudent'] = "Student Data Parmanently Deleted ! ";
                echo "<script>window.location='allDeleteStudent.php'</script>";
            }

        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage()."<br />";
            die();
        }
    }

    //select all student data for using marksheet(findmeritposition2)...
    public function selectAllData($student_id){
        try {

            $stmt = $this->con->prepare("select * from student_data where student_id = :student_id ");
            $stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage()."<br />";
            die();
        }
    }

    //select all student from database using calculation for student fee...
    public function selectAllStudent(){
        try {

            $stmt = $this->con->prepare("select * from student_fee where status = 1 ");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage()."<br />";
            die();
        }
    }

    // select total registration student number 
    public function totalRegStuNumber(){
        try {

            $stmt = $this->con->prepare("select * from student_data where person='student' and status=1 ");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage()."<br>";
            die();
        }
    }

     //select data from database
    public function studentIDForSendSMS($id){
        try{
            $stmt = $this->con->prepare('SELECT * FROM `student_data` WHERE student_id = :id and status = 1 ');
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }
        catch (PDOException $e) {
               print "Error!: " . $e->getMessage() . "<br/>";
               die();
           }
    }
     //select data from database
    public function teacherIDForSendSMS($id){
        try{
            $stmt = $this->con->prepare('SELECT * FROM `teacher_data` WHERE mobile=:id and status = 1 ');
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }
        catch (PDOException $e) {
               print "Error!: " . $e->getMessage() . "<br/>";
               die();
           }
    }



    // select all class attend student 
    public function attendReportToday($attend_date, $year)
    {
        try {

            $stmt = $this->con->prepare("select * from sendsms where attend_date=:attend_date and year=:year ");

            $stmt->bindValue(':attend_date', $attend_date, PDO::PARAM_STR);
            $stmt->bindValue(':year', $year, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage()."<br>";
            die();
        }
    }
    

}