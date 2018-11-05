<?php 

namespace App\Admin\Onetofive;

if(!isset($_SESSION)){
	session_start();
}
use PDO;
use PDOException;
use App\Connection;


class Onetofive extends Connection
{
	public function set($data = array()){
		if(array_key_exists('class', $data)){
			$this->class = $data['class'];
		}
		if(array_key_exists('shift', $data)){
			$this->shift = $data['shift'];
		}
		if(array_key_exists('branch', $data)){
			$this->branch = $data['branch'];
		}
		if(array_key_exists('department', $data)){
			$this->department = $data['department'];
		}
		if(array_key_exists('term', $data)){
			$this->term = $data['term'];
		}
		if(array_key_exists('student_id', $data)){
			$this->student_id = $data['student_id'];
		}
		if(array_key_exists('bangla', $data)){
			$this->bangla = $data['bangla'];
		}
		if(array_key_exists('fullmark', $data)){
			$this->fullmark = $data['fullmark'];
		}
		if(array_key_exists('bw', $data)){
			$this->bw = $data['bw'];
		}

		if(array_key_exists('english', $data)){
			$this->english = $data['english'];
		}
		if(array_key_exists('enfullmark', $data)){
			$this->enfullmark = $data['enfullmark'];
		}
		if(array_key_exists('ew', $data)){
			$this->ew = $data['ew'];
		}

		if(array_key_exists('math', $data)){
			$this->math = $data['math'];
		}
		if(array_key_exists('mfullmark', $data)){
			$this->mfullmark = $data['mfullmark'];
		}
		if(array_key_exists('mw', $data)){
			$this->mw = $data['mw'];
		}

		if(array_key_exists('science', $data)){
			$this->science = $data['science'];
		}
		if(array_key_exists('sfullmark', $data)){
			$this->sfullmark = $data['sfullmark'];
		}
		if(array_key_exists('sw', $data)){
			$this->sw = $data['sw'];
		}
		if(array_key_exists('banint', $data)){
			$this->banint = $data['banint'];
		}
		if(array_key_exists('bifullmark', $data)){
			$this->bifullmark = $data['bifullmark'];
		}
		if(array_key_exists('biw', $data)){
			$this->biw = $data['biw'];
		}
		if(array_key_exists('religion', $data)){
			$this->religion = $data['religion'];
		}
		if(array_key_exists('refullmark', $data)){
			$this->refullmark = $data['refullmark'];
		}
		if(array_key_exists('rw', $data)){
			$this->rw = $data['rw'];
		}

		//return $this;
	}

	// marksheet result calculate...
	public function calculate(){
		try {

			$bt  = $this->bw;
			$et  = $this->ew;
			$mt   = $this->mw;
			$st  = $this->sw;
			$bit   = $this->biw;
			$rt   = $this->rw;

			$bw  = $this->bw;
			$ew  = $this->ew;
			$mw   = $this->mw;
			$sw  = $this->sw;
			$biw   = $this->biw;
			$rw   = $this->rw;

			$totalmark = $this->bw + $this->ew + $this->mw + $this->sw + $this->biw + $this->rw;
			//return $rt;

			$subNum = 0;

			if($this->fullmark == 100){

				$subNum += 1;
			
	            if($bt >= 80 ){
	                $bg = 5;
	             }
	            elseif ($bt >= 70 && $bt <= 79 ){
	                $bg = 4;
	             }
	            elseif ($bt >= 60 && $bt <= 69 ){
	                $bg = 3.5;
	             }
	            elseif ($bt >= 50 && $bt <= 59 ){
	                $bg = 3;
	             }
	            elseif ($bt >= 40 && $bt <= 49 ){
	                $bg = 2;
	             }
	            elseif ($bt >= 33 && $bt <= 39 ){
	                $bg = 1;
	             }
	            else {
	                $bg = 0;
	             }
	            // return $this;
        	}

        	if($this->enfullmark == 100){

				$subNum += 1;
			
	            if($et >= 80 ){
	                $eg = 5;
	             }
	            elseif ($et >= 70 && $et <= 79 ){
	                $eg = 4;
	             }
	            elseif ($et >= 60 && $et <= 69 ){
	                $eg = 3.5;
	             }
	            elseif ($et >= 50 && $et <= 59 ){
	                $eg = 3;
	             }
	            elseif ($et >= 40 && $et <= 49 ){
	                $bg = 2;
	             }
	            elseif ($et >= 33 && $et <= 39 ){
	                $eg = 1;
	             }
	            else {
	                $eg = 0;
	             }
	            // return $this;
        	}

        	//for math
        	if($this->mfullmark == 100){

				$subNum += 1;
			
	            if($mt >= 80 ){
	                $mg = 5;
	             }
	            elseif ($mt >= 70 && $mt <= 79 ){
	                $mg = 4;
	             }
	            elseif ($mt >= 60 && $mt <= 69 ){
	                $mg = 3.5;
	             }
	            elseif ($mt >= 50 && $mt <= 59 ){
	                $mg = 3;
	             }
	            elseif ($mt >= 40 && $mt <= 49 ){
	                $mg = 2;
	             }
	            elseif ($mt >= 33 && $mt <= 39 ){
	                $mg = 1;
	             }
	            else {
	                $mg = 0;
	             }
	            // return $this;
        	}

        	//for science 
        	if($this->sfullmark == 100){

				$subNum += 1;
			
	            if($st >= 80 ){
	                $sg = 5;
	             }
	            elseif ($st >= 70 && $sg <= 79 ){
	                $sg = 4;
	             }
	            elseif ($st >= 60 && $st <= 69 ){
	                $sg = 3.5;
	             }
	            elseif ($st >= 50 && $st <= 59 ){
	                $sg = 3;
	             }
	            elseif ($st >= 40 && $st <= 49 ){
	                $sg = 2;
	             }
	            elseif ($st >= 33 && $st <= 39 ){
	                $sg = 1;
	             }
	            else {
	                $sg = 0;
	             }
	            // return $this;
        	}

        	//for bangladesh and international
        	if($this->bifullmark == 100){

				$subNum += 1;
			
	            if($bit >= 80 ){
	                $big = 5;
	             }
	            elseif ($bit >= 70 && $bit <= 79 ){
	                $big = 4;
	             }
	            elseif ($bit >= 60 && $bit <= 69 ){
	                $big = 3.5;
	             }
	            elseif ($bit >= 50 && $bit <= 59 ){
	                $big = 3;
	             }
	            elseif ($bit >= 40 && $bit <= 49 ){
	                $big = 2;
	             }
	            elseif ($bit >= 33 && $bit <= 39 ){
	                $big = 1;
	             }
	            else {
	                $big = 0;
	             }
	            // return $this;
        	}

        	//for religion
        	if($this->refullmark == 100){

				$subNum += 1;
			
	            if($rt >= 80 ){
	                $rg = 5;
	             }
	            elseif ($rt >= 70 && $rt <= 79 ){
	                $rg = 4;
	             }
	            elseif ($rt >= 60 && $rt <= 69 ){
	                $rg = 3.5;
	             }
	            elseif ($rt >= 50 && $rt <= 59 ){
	                $bg = 3;
	             }
	            elseif ($rt >= 40 && $rt <= 49 ){
	                $rg = 2;
	             }
	            elseif ($rt >= 33 && $rt <= 39 ){
	                $rg = 1;
	             }
	            else {
	                $rg = 0;
	             }
	            // return $this;
        	}

        	$totalgpa = $bg + $eg + $mg + $sg + $big + $rg;
        	$gpa = $totalgpa / $subNum;
        	$gpa = number_format($gpa, 3);

       		//return $bt." ".$et." ".$mt." ".$st." ".$bit." ".$rt." ".$bg." ".$eg." ".$mg." ".$sg." ".$big." ".$rg." ".$subNum." ".$totalmark." ".$totalgpa." ".$gpa;

       		$stmt = $this->con->prepare("insert into onetofivemark(class, shift, branch, department, term, year, student_id, bangla, fullmark, bw, bg, english, enfullmark, ew, eg, math, mfullmark, mw, mg, science, sfullmark, sw, sg,  banint, bifullmark, biw, big, religion, refullmark, rw,rg, totalSub,  totalmark, gpa, unique_id, created_at  )

             values( :class, :shift, :branch, :department, :term, :year, :student_id, :bangla, :fullmark, :bw, :bg, :english, :enfullmark, :ew, :eg, :math, :mfullmark, :mw, :mg, :science, :sfullmark, :sw, :sg,  :banint, :bifullmark, :biw, :big, :religion, :refullmark, :rw, :rg, :totalSub,  :totalmark, :gpa, :unique_id, NOW() )  ");


       		$stmt->bindValue(':class', $class, PDO::PARAM_STR);
            $stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
            $stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
            $stmt->bindValue(':department', $department, PDO::PARAM_STR);
            $stmt->bindValue(':term', $term, PDO::PARAM_STR);
            $stmt->bindValue(':year', date('Y'), PDO::PARAM_STR);
            $stmt->bindValue(':student_id', $student_id, PDO::PARAM_INT);

            $stmt->bindValue(':bangla', $bangla, PDO::PARAM_STR);
            $stmt->bindValue(':fullmark', $fullmark, PDO::PARAM_INT);
            $stmt->bindValue(':bw', $bw, PDO::PARAM_INT);
            $stmt->bindValue(':bg', $bg, PDO::PARAM_INT);

            $stmt->bindValue(':english', $english, PDO::PARAM_STR);
            $stmt->bindValue(':enfullmark', $enfullmark, PDO::PARAM_STR);
            $stmt->bindValue(':ew', $ew, PDO::PARAM_STR);
            $stmt->bindValue(':eg', $eg, PDO::PARAM_STR);

            $stmt->bindValue(':math', $math, PDO::PARAM_STR);
            $stmt->bindValue(':mfullmark', $mfullmark, PDO::PARAM_STR);
            $stmt->bindValue(':mw', $mw, PDO::PARAM_STR);
            $stmt->bindValue(':mg', $mg, PDO::PARAM_STR);

            $stmt->bindValue(':science', $science, PDO::PARAM_STR);
            $stmt->bindValue(':sfullmark', $sfullmark, PDO::PARAM_STR);
            $stmt->bindValue(':sw', $sw, PDO::PARAM_STR);
            $stmt->bindValue(':sg', $sg, PDO::PARAM_STR);

            $stmt->bindValue(':banint', $banint, PDO::PARAM_STR);
            $stmt->bindValue(':bifullmark', $bifullmark, PDO::PARAM_STR);
            $stmt->bindValue(':biw', $biw, PDO::PARAM_STR);
            $stmt->bindValue(':big', $big, PDO::PARAM_STR);

            $stmt->bindValue(':religion', $religion, PDO::PARAM_STR);
            $stmt->bindValue(':refullmark', $refullmark, PDO::PARAM_STR);
            $stmt->bindValue(':rw', $rw, PDO::PARAM_STR);
            $stmt->bindValue(':rg', $rg, PDO::PARAM_STR);


            $stmt->bindValue(':totalSub', $subNum, PDO::PARAM_STR);
            $stmt->bindValue(':totalmark', $totalmark, PDO::PARAM_STR);
            $stmt->bindValue(':gpa', $gpa, PDO::PARAM_STR);
            $stmt->bindValue(':unique_id', trim(md5(time())), PDO::PARAM_STR);
            
            $result = $stmt->execute();

            if($result){
                $_SESSION['onetofive'] = "All Subject Number Added Successfully ";
                echo "<script>window.location='markadd.php'</script>";
                //header("location:allsubmarkAdd.php");
            }

 


			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// select class one to five student number for edit
	public function selectOneToFive($class, $term, $year, $student_id){
		try {

			$stmt = $this->con->prepare("select * from onetofivemark where class=:class and term=:term and year=:year and student_id=:student_id and status=1 ");
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':term', $term, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}





	// delete One To Five marksheet...
	public function deleteMarksheet($class, $term, $year, $student_id){
		try {

			$stmt = $this->con->prepare("update onetofivemark set status=:status, updated_at=NOW() where class=:class and term=:term and year=:year and student_id=:student_id ");
			$stmt->bindValue(':status', 2, PDO::PARAM_STR);
			$stmt->bindValue(':class', $class, PDO::PARAM_STR);
			$stmt->bindValue(':term', $term, PDO::PARAM_STR);
			$stmt->bindValue(':year', $year, PDO::PARAM_STR);
			$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt){
				$_SESSION['deleteMarsheet'] = "Marksheet Deleted Successfully !!!";
				echo "<script>window.location='deletemark.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	

	 //all gpa select 
	 public function selectOneToFiveMark($class, $shift, $branch, $term, $year){
	 	try {

	 		//$stmt = $this->con->prepare("select * from allmarks where status = 1 ");
	 		$stmt = $this->con->prepare("select * from onetofivemark where class=:class and shift=:shift and branch=:branch and term=:term and year=:year and status=1 ");
	 		$stmt->bindValue(':class', $class, PDO::PARAM_STR);
	 		$stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
	 		$stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
	 		$stmt->bindValue(':term', $term, PDO::PARAM_STR);
	 		$stmt->bindValue(':year', $year, PDO::PARAM_STR);
	 		$stmt->execute();
	 		if($stmt->rowCount() > 0){
	 			return $stmt->fetchAll(PDO::FETCH_ASSOC);
	 		}
	 		else{
	 			$_SESSION['onefiveErr'] = "Value does not match !!!";
	 			echo "<script>window.location='view/admin/onetofivemarksheet/meritmarksheet.php'</script>";
	 		}
	 		
	 	} catch (PDOException $e) {
	 		echo "Error: ".$e->getMessage()."<br />";
	 		die();
	 	}
	 }


	 //select student total number...
	 public function studentNumberSelect($student_id){
	 	try { 

	 		$stmt = $this->con->prepare("select * from onetofivemark where student_id = :student_id and status = 1 ");
	 		$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
	 		$stmt->execute();

	 		if($stmt->rowCount() > 0){
	 			return $stmt->fetch(PDO::FETCH_ASSOC);
	 		}
	 		else{
	 			$_SESSION['onefiveErr'] = "Value does not match !!!";
	 			//header('location=meritmarksheet.php');
	 			echo "<script>window.location='view/admin/onetofivemarksheet/meritmarksheet.php'</script>";
	 		}
	 		
	 	} catch (PDOException $e) {
	 		echo "Error: ".$e->getMessage()."<br />";
	 		die();

	 	}
	 }

	 //select gpa and total number for create actual merit position...
	 public function selectSingleGpaTotal($class, $term,  $year, $student_id){
	 	try {

	 		$stmt = $this->con->prepare("select totalmark + gpa from onetofivemark where class=:class and term=:term and year=:year and student_id=:student_id and status=1 ");
	 		 
	 		$stmt->bindValue(':class', $class, PDO::PARAM_STR);
	 		$stmt->bindValue(':term', $term, PDO::PARAM_STR);
	 		$stmt->bindValue(':year', $year, PDO::PARAM_STR);
	 		$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
	 		$stmt->execute();

	 		return $stmt->fetch(PDO::FETCH_ASSOC);
	 		 
	 		
	 	} catch (PDOException $e) {
	 		echo "Error: ".$e->getMessage()."<br />";
	 		die();
	 	}
	 }

	 // restore deleted marksheet 
	 public function restoreOnetofiveMarksheet($class, $term, $year, $student_id){
	 	try {

	 		$stmt = $this->con->prepare("update onetofivemark set status=:status where class=:class and term=:term and year=:year and student_id=:student_id ");
	 		$stmt->bindValue(':status', 1, PDO::PARAM_STR);
	 		$stmt->bindValue(':class', $class, PDO::PARAM_STR);
	 		$stmt->bindValue(':term', $term, PDO::PARAM_STR);
	 		$stmt->bindValue(':year', $year, PDO::PARAM_STR);
	 		$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
	 		$stmt->execute();
	 		if($stmt){
	 			$_SESSION['restore'] = "Marksheet Restored Successfully !!!";
	 			echo "<script>window.location='allDeleteOnetofiveMarksheet.php'</script>";
	 		}
	 		
	 	} catch (PDOException $e) {
	 		echo "Error: ".$e->getMessage()."<br>";
	 	}
	 }

}