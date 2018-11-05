<?php 

// echo "<pre>";
// var_dump($_POST);
// die();
error_reporting(0);

if(!isset($_SESSION)){
	session_start();
}

$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8;', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$class     = $_POST['class'];
	$shift	   = $_POST['shift'];
	$branch	   = $_POST['branch'];
	$term		= $_POST['term'];
	$student_id = $_POST['student_id'];
	$unique_id  = $_POST['unique_id'];

	$bangla    = $_POST['bangla'];
	$fullmark  = $_POST['fullmark'];
	$bw        = $_POST['bw'];

	$english   = $_POST['english'];
	$enfullmark = $_POST['enfullmark'];
	$ew		   = $_POST['ew'];

	$math	   = $_POST['math'];
	$mw		   = $_POST['mw'];
	$mfullmark = $_POST['mfullmark'];

	$science   = $_POST['science'];
	$sfullmark = $_POST['sfullmark'];
	$sw 	   = $_POST['sw'];

	$banint	   = $_POST['banint'];
	$bifullmark = $_POST['bifullmark'];
	$biw	   = $_POST['biw'];

	$religion  = $_POST['religion'];
	$refullmark = $_POST['refullmark'];
	$rw 	   = $_POST['rw'];

}


			$bt  = $bw;
			$et  = $ew;
			$mt  = $mw;
			$st  = $sw;
			$bit = $biw;
			$rt  = $rw;

			

			//$totalmark = $bw + $ew + $mw + $sw + $biw + $rw;
			//return $rt;

			$subNum = 0;

			if($fullmark == 100){

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

        	if($enfullmark == 100){

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
        	if($mfullmark == 100){

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
        	if($sfullmark == 100){

				$subNum += 1;
			
	            if($st >= 80 ){
	                $sg = 5;
	             }
	            elseif ($st >= 70 && $st <= 79 ){
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
        	if($bifullmark == 100){

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
        	if($refullmark == 100){

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

        	$totalmark = $bw + $ew + $mw + $sw + $biw + $rw;
        	$totalgpa = $bg + $eg + $mg + $sg + $big + $rg;
        	$gpa = $totalgpa / $subNum;
        	$gpa = number_format($gpa, 3);

       		echo $bt." ".$et." ".$mt." ".$st." ".$bit." ".$rt." ".$bg." ".$eg." ".$mg." ".$sg." ".$big." ".$rg." ".$subNum." ".$totalmark." ".$totalgpa." ".$gpa;


       		$stmt = $db->prepare("update onetofivemark set 
             

            class       = :class,
            shift       = :shift,
            branch      = :branch,
            term        = :term,
            student_id  = :student_id,

            bangla     = :bangla,
            fullmark    = :fullmark,
            bw         = :bw,
            bg         = :bg,

            english    = :english,
            enfullmark  = :enfullmark,
            ew         = :ew,
            eg         = :eg,

            math        = :math,
            mfullmark   = :mfullmark,
            mw          = :mw,
            mg          = :mg,

            science     = :science,
            sfullmark   = :sfullmark,
            sw          = :sw,
            sg          = :sg,

            banint      = :banint,
            bifullmark  = :bifullmark,
            biw         = :biw,
            big         = :big,

            religion    = :religion,
            refullmark  = :refullmark,
            rw          = :rw,
            rg          = :rg,

            
            totalSub    = :totalSub,
            totalmark   = :totalmark,
            gpa         = :gpa,
            updated_at  = NOW()
            where unique_id = :unique_id;  ");


            $stmt->bindValue(':class', $class, PDO::PARAM_STR);
            $stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
            $stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
            $stmt->bindValue(':term', $term, PDO::PARAM_STR);
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
            $stmt->bindValue(':unique_id', $unique_id, PDO::PARAM_STR);
            
            $result = $stmt->execute();

            if($result){
                $_SESSION['onetofiveupdate'] = "Number Updated Successfully ";
                echo "<script>window.location='editmarksearch.php'</script>";
                //header("location:allsubmarkAdd.php");
            }



 
