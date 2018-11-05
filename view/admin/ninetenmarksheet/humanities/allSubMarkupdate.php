<?php 

// include_once '../../../vendor/autoload.php' ;

// use App\Admin\Marksheet\Allmarkstore;
//     $marksheet = new Allmarkstore();

// $result = $marksheet->set($_POST)->updatemark();

// echo "<pre>";
// var_dump($_POST);
// die();

if(!isset($_SESSION)){
	session_start();
}

$db  = new pdo('mysql:host=localhost;dbname=bangla;charset=utf8','root', '');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


         $b1t = 0;
         $b2t = 0;
         $e1t = 0;
         $e2t = 0;
         $mt = 0;
         $st = 0;
         $sst = 0;
         $bit = 0;
         $rt = 0;
         $it = 0;
         $dt = 0;
         $spt = 0;
         $wlt = 0;
         $at = 0;
         


         $b1w = 0;
         $b1m = 0;
         $b2w = 0;
         $b2m = 0;
         $e1w = 0;
         $e2w = 0;
         $mw = 0;
         $sw = 0;
         $sm = 0;
         $sp = 0;
         $ssw = 0;
         $ssm = 0;
         $biw = 0;
         $bim = 0;
         $rw = 0;
         $rm = 0;
         $iw = 0;
         $im = 0;
         $ip = 0;
         $dw = 0;
         $dm = 0;
         $dp = 0;
         $spw = 0;
         $spm = 0;
         $spp = 0;
         $wlw = 0;
         $wlm = 0;
         $wlp = 0;
         
         $aw = 0;
         $am = 0;
         $ap = 0;
         
         $b1g = 0;
         $b2g = 0;
         $e1g = 0;
         $e2g = 0;
         $mg = 0;
         $sg = 0;
         $ssg = 0;
         $big = 0;
         $rg = 0;
         $ig = 0;
         $dg = 0;
         $spg = 0;
         $wlg = 0;
         $ag = 0;

         $subNum    = 0;
         $totalmark = 0;
         $gpa       = 0;


if($_SERVER['REQUEST_METHOD'] == 'POST'){

	 $class              =  $_POST['class'];
    $shift              =  $_POST['shift'];
    $branch             =  $_POST['branch'];
    $department         =  $_POST['department'];
    $term               =  $_POST['term'];
    $student_id         =  $_POST['student_id'];

    $bangla1            =  $_POST['bangla1'];
    $fullmark           =  $_POST['fullmark'];
    $b1w                =  $_POST['b1w'];
    $b1m                =  $_POST['b1m'];
    $bangla2            =  $_POST['bangla2'];
    $b2fullmark         =  $_POST['b2fullmark'];
    $b2w                =  $_POST['b2w'];
    $b2m                =  $_POST['b2m'];
    $english1           =  $_POST['english1'];
    $enfullmark         =  $_POST['enfullmark'];
    $e1w                =  $_POST['e1w'];
    $english2           =  $_POST['english2'];
    $e2fullmark         =  $_POST['e2fullmark'];
    $e2w                =  $_POST['e2w'];

    $math               =  $_POST['math'];
    $mfullmark          =  $_POST['mfullmark'];
    $mw                 =  $_POST['mw'];
    $banint             =  $_POST['banint'];
    $bifullmark         =  $_POST['bifullmark'];
    $biw                =  $_POST['biw'];
    $bim                =  $_POST['bim'];
    $social_science     =  $_POST['social_science'];
    $ssfullmark         =  $_POST['ssfullmark'];
    $ssw                =  $_POST['ssw'];
    $ssm                =  $_POST['ssm'];

    $religion           =  $_POST['religion'];
    $refullmark         =  $_POST['refullmark'];
    $rw                 =  $_POST['rw'];
    $rm                 =  $_POST['rm'];
    $science            =  $_POST['science'];
    $sfullmark          =  $_POST['sfullmark'];
    $sw                 =  $_POST['sw'];
    $sm                 =  $_POST['sm'];
    $sp                 =  $_POST['sp'];

    $ict                =  $_POST['ict'];
    $ictfullmark        =  $_POST['ictfullmark'];
    $iw                 =  $_POST['iw'];
    $im                 =  $_POST['im'];
    $ip                 =  $_POST['ip'];
    $dms                =  $_POST['dms'];
    $dmsfullmark        =  $_POST['dmsfullmark'];
    $dw                 =  $_POST['dw'];
    $dm                 =  $_POST['dm'];
    $dp                 =  $_POST['dp'];

    $sports             =  $_POST['sports'];
    $spfullmark         =  $_POST['spfullmark'];
    $spw                =  $_POST['spw'];
    $spm                =  $_POST['spm'];
    $spp                =  $_POST['spp'];
    $wl                 =  $_POST['wl'];
    $wlfullmark         =  $_POST['wlfullmark'];
    $wlw                =  $_POST['wlw'];
    $wlm                =  $_POST['wlm'];
    $wlp                =  $_POST['wlp'];
    $arts               =  $_POST['arts'];
    $artsfullmark       =  $_POST['artsfullmark'];
    $aw                 =  $_POST['aw'];
    $am                 =  $_POST['am'];
    $ap                 =  $_POST['ap'];

}
        $b1t  = $b1w + $b1m;
        $b2t  = $b2w + $b2m;
        $e1t  = $e1w;
        $e2t  = $e2w;
        $mt   = $mw;
        $st   = $sw + $sm + $sp;
        $sst  = $ssw + $ssm;
        $bit  = $biw + $bim;
        $rt   = $rw + $rm;
        $it   = $iw + $im + $ip;
        $dt   = $dw + $dm + $dp;
        $spt  = $spw + $spm + $spp;
        $wlt  = $wlw + $wlm + $wlp;
        $at   = $aw + $am + $ap;

        $totalmark = $b1t + $b2t + $e1w + $e2w + $mw + $st + $sst +$bit  +$rt  +$it + $dt  +         $spt + $wlt + $at;


    //Bangla 1st paper Grade set...

        if($fullmark == 100){

            $subNum += 1;
        
            if($b1t >= 80 ){
                $b1g = 5;
             }
            elseif ($b1t >= 70 && $b1t <= 79 ){
                $b1g = 4;
             }
            elseif ($b1t >= 60 && $b1t <= 69 ){
                $b1g = 3.5;
             }
            elseif ($b1t >= 50 && $b1t <= 59 ){
                $b1g = 3;
             }
            elseif ($b1t >= 40 && $b1t <= 49 ){
                $b1g = 2;
             }
            elseif ($b1t >= 33 && $b1t <= 39 ){
                $b1g = 1;
             }
            else {
                $b1g = 0;
             }
            // return $this;
        }

        if($fullmark == 50){

            $subNum += 1;
        
            if($b1t >= 40 ){
                $b1g = 5;
             }
            elseif ($b1t >= 35 && $b1t <= 39 ){
                $b1g = 4;
             }
            elseif ($b1t >= 30 && $b1t <= 34 ){
                $b1g = 3.5;
             }
            elseif ($b1t >= 25 && $b1t <= 29 ){
                $b1g = 3;
             }
            elseif ($b1t >= 20 && $b1t <= 24 ){
                $b1g = 2;
             }
            elseif ($b1t >= 17 && $b1t <= 19 ){
                $b1g = 1;
             }
            else {
                $b1g = 0;
             }
        }

        // Bangla 2nd paper grade set...


        if($b2fullmark == 100){

            $subNum += 1;

            if($b2t >= 80){
                $b2g = 5;
            }
            elseif($b2t >= 70 && $b2t <= 79){
                $b2g = 4;
            }
            elseif($b2t >=60 && $b2t <= 69){
                $b2g = 3.5;
            }
            elseif($b2t >= 50 && $b2t <= 59){
                $b2g = 3;
            }
            elseif($b2t >= 40 && $b2t <= 49){
                $b2g = 2;
            }
            elseif($b2t >= 33 && $b2t <= 39){
                $b2g = 1;
            }
            else{
                $b2g = 0;
            }
        }


        if($b2fullmark == 50){

            $subNum += 1;
        
            if($b2t >= 40 ){
                $b2g = 5;
             }
            elseif ($b2t >= 35 && $b2t <= 39 ){
                $b2g = 4;
             }
            elseif ($b2t >= 30 && $b2t <= 34 ){
                $b2g = 3.5;
             }
            elseif ($b2t >= 25 && $b2t <= 29 ){
                $b2g = 3;
             }
            elseif ($b2t >= 20 && $b2t <= 24 ){
                $b2g = 2;
             }
            elseif ($b2t >= 17 && $b2t <= 19 ){
                $b2g = 1;
             }
            else {
                $b2g = 0;
             }
        }

        //for english first papaer grade set...


        if($enfullmark == 100){

            $subNum += 1;

            if($e1t >= 80){
                $e1g = 5;
            }
            elseif($e1t >= 70 && $e1t <= 79){
                $e1g = 4;
            }
            elseif($e1t >=60 && $e1t <= 69){
                $e1g = 3.5;
            }
            elseif($e1t >= 50 && $e1t <=59){
                $e1g = 3;
            }
            elseif($e1t >= 40 && $e1t <=49){
                $e1g = 2;
            }
            elseif($e1t >= 33 && $e1t <= 39){
                $e1g = 1;
            }
            else{
                $e1g = 0;
            }
        }


        if($enfullmark == 50){

            $subNum += 1;
        
            if($e1t >= 40 ){
                $e1g = 5;
             }
            elseif ($e1t >= 35 && $e1t <= 39 ){
                $e1g = 4;
             }
            elseif ($e1t >= 30 && $e1t <= 34 ){
                $e1g = 3.5;
             }
            elseif ($e1t >= 25 && $e1t <= 29 ){
                $e1g = 3;
             }
            elseif ($e1t >= 20 && $e1t <= 24 ){
                $e1g = 2;
             }
            elseif ($e1t >= 17 && $e1t <= 19 ){
                $e1g = 1;
             }
            else {
                $e1g = 0;
             }
        }


        //for english second papaer grade set...


        if($e2fullmark == 100){

            $subNum += 1;

            if($e2t >= 80){
                $e2g = 5;
            }
            elseif($e2t >= 70 && $e2t <= 79){
                $e2g = 4;
            }
            elseif($e2t >=60 && $e2t <= 69){
                $e2g = 3.5;
            }
            elseif($e2t >= 50 && $e2t <=59){
                $e2g = 3;
            }
            elseif($e2t >= 40 && $e2t <=49){
                $e2g = 2;
            }
            elseif($e2t >= 33 && $e2t <= 39){
                $e2g = 1;
            }
            else{
                $e2g = 0;
            }
        }


        if($e2fullmark == 50){

            $subNum += 1;
        
            if($e2t >= 40 ){
                $e2g = 5;
             }
            elseif ($e2t >= 35 && $e2t <= 39 ){
                $e2g = 4;
             }
            elseif ($e2t >= 30 && $e2t <= 34 ){
                $e2g = 3.5;
             }
            elseif ($e2t >= 25 && $e2t <= 29 ){
                $e2g = 3;
             }
            elseif ($e2t >= 20 && $e2t <= 24 ){
                $e2g = 2;
             }
            elseif ($e2t >= 17 && $e2t <= 19 ){
                $e2g = 1;
             }
            else {
                $e2g = 0;
             }
        }

        //for mathmatics grade set...

        if($mfullmark == 100){

            $subNum += 1;

            if($mt >= 80){
                $mg = 5;
            }
            elseif($mt >= 70 && $mt <= 79){
                $mg = 4;
            }
            elseif($mt >= 60 && $mt <= 69){
                $mg = 3.5;
            }
            elseif($mt >= 50 && $mt <= 59){
                $mg = 3;
            }
            elseif($mt >= 40 && $mt <= 49){
                $mg = 2;
            }
            elseif($mt >= 33 && $mt <= 39){
                $mg = 1;
            }
            else{
                $mg = 0;
            }
        }

        // for science grade set...
        if($sfullmark == 100){

            $subNum += 1;

            if($st >= 80){
                $sg = 5;
            }
            elseif($st >=70 && $st <= 79){
                $sg = 4;
            }
            elseif($st >= 60 && $st <= 69){
                $sg = 3.5;
            }
            elseif($st >= 50 && $st <= 59){
                $sg = 3;
            }
            elseif($st >= 40 && $st <= 49){
                $sg = 2;
            }
            elseif($st >= 33 && $st <=39){
                $sg = 1;
            }
            else{
                $sg = 0;
            }
        }

        //social science grade set...

        if($ssfullmark == 100){

            $subNum += 1;
        
            if($sst >= 80 ){
                $ssg = 5;
             }
            elseif ($sst >= 70 && $sst <= 79 ){
                $ssg = 4;
             }
            elseif ($sst >= 60 && $sst <= 69 ){
                $ssg = 3.5;
             }
            elseif ($sst >= 50 && $sst <= 59 ){
                $ssg = 3;
             }
            elseif ($sst >= 40 && $sst <= 49 ){
                $ssg = 2;
             }
            elseif ($sst >= 33 && $sst <= 39 ){
                $ssg = 1;
             }
            else {
                $ssg = 0;
             }
         }

         //bangladesh and internatinal...

        //  if($this->bifullmark == 100){

        //      $this->subNum += 1;
        
        //     if($this->bit >= 80 ){
        //         $this->big = 5;
        //      }
        //     elseif ($this->bit >= 70 && $this->bit <= 79 ){
        //         $this->big = 4;
        //      }
        //     elseif ($this->bit >= 60 && $this->bit <= 69 ){
        //         $this->big = 3.5;
        //      }
        //     elseif ($this->bit >= 50 && $this->bit <= 59 ){
        //         $this->big = 3;
        //      }
        //     elseif ($this->bit >= 40 && $this->bit <= 49 ){
        //         $this->big = 2;
        //      }
        //     elseif ($this->bit >= 33 && $this->bit <= 39 ){
        //         $this->big = 1;
        //      }
        //     else {
        //         $this->big = 0;
        //      }
        //     // return $this;
        // }

        if($bifullmark == 50){

            $subNum += 1;
        
            if($bit >= 40 ){
                $big = 5;
             }
            elseif ($bit >= 35 && $bit <= 39 ){
                $big = 4;
             }
            elseif ($bit >= 30 && $bit <= 34 ){
                $big = 3.5;
             }
            elseif ($bit >= 25 && $bit <= 29 ){
                $big = 3;
             }
            elseif ($bit >= 20 && $bit <= 24 ){
                $big = 2;
             }
            elseif ($bit >= 17 && $bit <= 19 ){
                $big = 1;
             }
            else {
                $big = 0;
             }
        }


        //religion fullmark...

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
                $rg = 3;
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
             
        }

        // ICT grade set...

             if($ictfullmark == 100){

                $subNum += 1;
        
            if($it >= 80 ){
                $ig = 5;
             }
            elseif ($it >= 70 && $it <= 79 ){
                $ig = 4;
             }
            elseif ($it >= 60 && $it <= 69 ){
                $ig = 3.5;
             }
            elseif ($it >= 50 && $it <= 59 ){
                $ig = 3;
             }
            elseif ($it >= 40 && $it <= 49 ){
                $ig = 2;
             }
            elseif ($it >= 33 && $it <= 39 ){
                $ig = 1;
             }
            else {
                $ig = 0;
             }
             
        }


        if($ictfullmark == 50){

            $subNum += 1;
        
            if($it >= 40 ){
                $ig = 5;
             }
            elseif ($it >= 35 && $it <= 39 ){
                $ig = 4;
             }
            elseif ($it >= 30 && $it <= 34 ){
                $ig = 3.5;
             }
            elseif ($it >= 25 && $it <= 29 ){
                $ig = 3;
             }
            elseif ($it >= 20 && $it <= 24 ){
                $ig = 2;
             }
            elseif ($it >= 17 && $it <= 19 ){
                $ig = 1;
             }
            else {
                $ig = 0;
             }
        }

        //dms grade set...

        if($dmsfullmark == 100){

            $subNum += 1;
        
            if($dt >= 80 ){
                $dg = 5;
             }
            elseif ($dt >= 70 && $dt <= 79 ){
                $dg = 4;
             }
            elseif ($dt >= 60 && $dt <= 69 ){
                $dg = 3.5;
             }
            elseif ($dt >= 50 && $dt <= 59 ){
                $dg = 3;
             }
            elseif ($dt >= 40 && $dt <= 49 ){
                $dg = 2;
             }
            elseif ($dt >= 33 && $dt <= 39 ){
                $dg = 1;
             }
            else {
                $dg = 0;
             }
             
        }


        if($dmsfullmark == 50){

            $subNum += 1;
        
            if($dt >= 40 ){
                $dg = 5;
             }
            elseif ($dt >= 35 && $dt <= 39 ){
                $dg = 4;
             }
            elseif ($dt >= 30 && $dt <= 34 ){
                $dg = 3.5;
             }
            elseif ($dt >= 25 && $dt <= 29 ){
                $dg = 3;
             }
            elseif ($dt >= 20 && $dt <= 24 ){
                $dg = 2;
             }
            elseif ($dt >= 17 && $dt <= 19 ){
                $dg = 1;
             }
            else {
                $dg = 0;
             }
        }

        //sport grade set...

        if($spfullmark == 100){

            $subNum += 1;
        
            if($spt >= 80 ){
                $spg = 5;
             }
            elseif ($spt >= 70 && $spt <= 79 ){
                $spg = 4;
             }
            elseif ($spt >= 60 && $spt <= 69 ){
                $spg = 3.5;
             }
            elseif ($spt >= 50 && $spt <= 59 ){
                $spg = 3;
             }
            elseif ($spt >= 40 && $spt <= 49 ){
                $spg = 2;
             }
            elseif ($spt >= 33 && $spt <= 39 ){
                $spg = 1;
             }
            else {
                $spg = 0;
             }
             
        }


        if($spfullmark == 50){

            $subNum += 1;
        
            if($spt >= 40 ){
                $spg = 5;
             }
            elseif ($spt >= 35 && $spt <= 39 ){
                $spg = 4;
             }
            elseif ($spt >= 30 && $spt <= 34 ){
                $spg = 3.5;
             }
            elseif ($spt >= 25 && $spt <= 29 ){
                $spg = 3;
             }
            elseif ($spt >= 20 && $spt <= 24 ){
                $spg = 2;
             }
            elseif ($spt >= 17 && $spt <= 19 ){
                $spg = 1;
             }
            else {
                $spg = 0;
             }
        }


        //sport grade set...

        // if($this->wlfullmark == 100){
        
        //     if($this->wlt >= 80 ){
        //         $this->spg = 5;
        //      }
        //     elseif ($this->spt >= 70 && $this->spt <= 79 ){
        //         $this->spg = 4;
        //      }
        //     elseif ($this->spt >= 60 && $this->spt <= 69 ){
        //         $this->spg = 3.5;
        //      }
        //     elseif ($this->spt >= 50 && $this->spt <= 59 ){
        //         $this->spg = 3;
        //      }
        //     elseif ($this->spt >= 40 && $this->spt <= 49 ){
        //         $this->spg = 2;
        //      }
        //     elseif ($this->spt >= 33 && $this->spt <= 39 ){
        //         $this->spg = 1;
        //      }
        //     else {
        //         $this->spg = 0;
        //      }
             
        // }


        if($wlfullmark == 50){

            $subNum += 1;
        
            if($wlt >= 40 ){
                $wlg = 5;
             }
            elseif ($wlt >= 35 && $wlt <= 39 ){
                $wlg = 4;
             }
            elseif ($wlt >= 30 && $wlt <= 34 ){
                $wlg = 3.5;
             }
            elseif ($wlt >= 25 && $wlt <= 29 ){
                $wlg = 3;
             }
            elseif ($wlt >= 20 && $wlt <= 24 ){
                $wlg = 2;
             }
            elseif ($wlt >= 17 && $wlt <= 19 ){
                $wlg = 1;
             }
            else {
                $wlg = 0;
             }
        }


        if($artsfullmark == 50){

            $subNum += 1;
        
            if($at >= 40 ){
                $ag = 5;
             }
            elseif ($at >= 35 && $at <= 39 ){
                $ag = 4;
             }
            elseif ($at >= 30 && $at <= 34 ){
                $ag = 3.5;
             }
            elseif ($at >= 25 && $at <= 29 ){
                $ag = 3;
             }
            elseif ($at >= 20 && $at <= 24 ){
                $ag = 2;
             }
            elseif ($at >= 17 && $at <= 19 ){
                $ag = 1;
             }
            else {
                $ag = 0;
             }
        }


        $totalgpa = $b1g + $b2g + $e1g + $e2g + $mg + $sg + $ssg + $big + $rg + $ig + $dg +        $spg + $wlg + $ag ;

        $gpa = $totalgpa / $subNum;
        //$gpa = number_format($gpa, 2);
        $gpa = number_format($gpa, 3);

        

     		



	$stmt = $db->prepare("update allmarks set 
			 

			class 		= :class,
			shift 		= :shift,
			branch 		= :branch,
			department 	= :department,
			term    	= :term,
			student_id 	= :student_id,

			bangla1     = :bangla1,
			fullmark    = :fullmark,
			b1w         = :b1w,
			b1m 		= :b1m,
			b1g 		= :b1g,

			bangla2 	= :bangla2,
			b2fullmark 	= :b2fullmark,
			b2w 		= :b2w,
			b2m 		= :b2m,
			b2t 		= :b2t,
			b2g 		= :b2g,

			english1 	= :english1,
			enfullmark 	= :enfullmark,
			e1w 		= :e1w,
			e1g 		= :e1g,
			english2 	= :english2,
			e2fullmark 	= :e2fullmark,
			e2w 		= :e2w, 
			e2g 		= :e2g,

			math 		= :math,
			mfullmark 	= :mfullmark,
			mw 			= :mw,
			mg 			= :mg,

			science 	= :science,
			sfullmark 	= :sfullmark,
			sw 			= :sw,
			sm 			= :sm, 
			sp 			= :sp,
			st 			= :st,
			sg 			= :sg,

			social_science = :social_science,
			ssfullmark 	= :ssfullmark,
			ssw 		= :ssw,
			ssm 		= :ssm,
			sst 		= :sst,
			ssg 		= :ssg,

			banint 		= :banint,
			bifullmark 	= :bifullmark,
			biw 		= :biw,
			bim 		= :bim,
			bit 		= :bit,
			big 		= :big,

			religion 	= :religion,
			refullmark 	= :refullmark,
			rw 			= :rw,
			rm 			= :rm,
			rt 			= :rt,
			rg 			= :rg,

			ict 		= :ict,
			ictfullmark = :ictfullmark,
			iw 			= :iw,
			im 			= :im, 
			ip 			= :ip,
			it 			= :it,
			ig 			= :ig,

			dms 		= :dms,
			dmsfullmark = :dmsfullmark,
			dw 			= :dw,
			dm 			= :dm,
			dp 			= :dp,
			dt 			= :dt,
			dg 			= :dg,

			sports 		= :sports,
			spfullmark 	= :spfullmark,
			spw 		= :spw,
			spm 		= :spm,
			spp 		= :spp,
			spt 		= :spt,
			spg 		= :spg,

			wl 			= :wl,
			wlfullmark 	= :wlfullmark,
			wlw 		= :wlw,
			wlm 		= :wlm,
			wlp 		= :wlp,
			wlt 		= :wlt,
			wlg 		= :wlg,

			arts 		= :arts,
			artsfullmark = :artsfullmark,
			aw 			= :aw,
			am 			= :am,
			ap 			= :ap,
			at 			= :at,
			ag          = :ag,
			
			totalSub 	= :totalSub,
			totalmark 	= :totalmark,
			gpa 		= :gpa,
			updated_at 	= NOW()
			where student_id = :student_id  ");


	
            $stmt->bindValue(':class', $class, PDO::PARAM_STR);
            $stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
            $stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
            $stmt->bindValue(':department', $department, PDO::PARAM_STR);
            $stmt->bindValue(':term', $term, PDO::PARAM_STR);
            //$stmt->bindValue(':year', date('Y'), PDO::PARAM_STR);
            $stmt->bindValue(':student_id', $student_id, PDO::PARAM_INT);
            $stmt->bindValue(':bangla1', $bangla1, PDO::PARAM_STR);
            $stmt->bindValue(':fullmark', $fullmark, PDO::PARAM_INT);
            $stmt->bindValue(':b1w', $b1w, PDO::PARAM_INT);
            $stmt->bindValue(':b1m', $b1m, PDO::PARAM_STR);
            $stmt->bindValue(':b1t', $b1t, PDO::PARAM_INT);
            $stmt->bindValue(':b1g', $b1g, PDO::PARAM_INT);
            $stmt->bindValue(':bangla2', $bangla2, PDO::PARAM_STR);
            $stmt->bindValue(':b2fullmark', $b2fullmark, PDO::PARAM_STR);
            $stmt->bindValue(':b2w', $b2w, PDO::PARAM_STR);
            $stmt->bindValue(':b2m', $b2m, PDO::PARAM_STR);
            $stmt->bindValue(':b2t', $b2t, PDO::PARAM_STR);
            $stmt->bindValue(':b2g', $b2g, PDO::PARAM_STR);
            $stmt->bindValue(':english1', $english1, PDO::PARAM_STR);
            $stmt->bindValue(':enfullmark', $enfullmark, PDO::PARAM_STR);
            $stmt->bindValue(':e1w', $e1w, PDO::PARAM_STR);
            $stmt->bindValue(':e1g', $e1g, PDO::PARAM_STR);
            $stmt->bindValue(':english2', $english2, PDO::PARAM_STR);
            $stmt->bindValue(':e2fullmark', $e2fullmark, PDO::PARAM_STR);
            $stmt->bindValue(':e2w', $e2w, PDO::PARAM_STR);
            $stmt->bindValue(':e2g', $e2g, PDO::PARAM_STR);
            $stmt->bindValue(':math', $math, PDO::PARAM_STR);
            $stmt->bindValue(':mfullmark', $mfullmark, PDO::PARAM_STR);
            $stmt->bindValue(':mw', $mw, PDO::PARAM_STR);
            $stmt->bindValue(':mg', $mg, PDO::PARAM_STR);
            $stmt->bindValue(':science', $science, PDO::PARAM_STR);
            $stmt->bindValue(':sfullmark', $sfullmark, PDO::PARAM_STR);
            $stmt->bindValue(':sw', $sw, PDO::PARAM_STR);
            $stmt->bindValue(':sm', $sm, PDO::PARAM_STR);
            $stmt->bindValue(':sp', $sp, PDO::PARAM_STR);
            $stmt->bindValue(':st', $st, PDO::PARAM_STR);
            $stmt->bindValue(':sg', $sg, PDO::PARAM_STR);
            $stmt->bindValue(':social_science', $social_science, PDO::PARAM_STR);
            $stmt->bindValue(':ssfullmark', $ssfullmark, PDO::PARAM_STR);
            $stmt->bindValue(':ssw', $ssw, PDO::PARAM_STR);
            $stmt->bindValue(':ssm', $ssm, PDO::PARAM_STR);
            //$stmt->bindValue(':ssp', $this-> , PDO::PARAM_STR);
            $stmt->bindValue(':sst', $sst, PDO::PARAM_STR);
            $stmt->bindValue(':ssg', $ssg, PDO::PARAM_STR);
            $stmt->bindValue(':banint', $banint, PDO::PARAM_STR);
            $stmt->bindValue(':bifullmark', $bifullmark, PDO::PARAM_STR);
            $stmt->bindValue(':biw', $biw, PDO::PARAM_STR);
            $stmt->bindValue(':bim', $bim, PDO::PARAM_STR);
            $stmt->bindValue(':bit', $bit, PDO::PARAM_STR);
            $stmt->bindValue(':big', $big, PDO::PARAM_STR);
            $stmt->bindValue(':religion', $religion, PDO::PARAM_STR);
            $stmt->bindValue(':refullmark', $refullmark, PDO::PARAM_STR);
            $stmt->bindValue(':rw', $rw, PDO::PARAM_STR);
            $stmt->bindValue(':rm', $rm, PDO::PARAM_STR);
            $stmt->bindValue(':rt', $rt, PDO::PARAM_STR);
            $stmt->bindValue(':rg', $rg, PDO::PARAM_STR);
            $stmt->bindValue(':ict', $ict, PDO::PARAM_STR);
            $stmt->bindValue(':ictfullmark', $ictfullmark, PDO::PARAM_STR);
            $stmt->bindValue(':iw', $iw, PDO::PARAM_STR);
            $stmt->bindValue(':im', $im, PDO::PARAM_STR);
            $stmt->bindValue(':ip', $ip, PDO::PARAM_STR);
            $stmt->bindValue(':it', $it, PDO::PARAM_STR);
            $stmt->bindValue(':ig', $ig, PDO::PARAM_STR);
            $stmt->bindValue(':dms', $dms, PDO::PARAM_STR);
            $stmt->bindValue(':dmsfullmark', $dmsfullmark, PDO::PARAM_STR);
            $stmt->bindValue(':dw', $dw, PDO::PARAM_STR);
            $stmt->bindValue(':dm', $dm, PDO::PARAM_STR);
            $stmt->bindValue(':dp', $dp, PDO::PARAM_STR);
            $stmt->bindValue(':dt', $dt, PDO::PARAM_STR);
            $stmt->bindValue(':dg', $dg, PDO::PARAM_STR);
            $stmt->bindValue(':sports', $sports, PDO::PARAM_STR);
            $stmt->bindValue(':spfullmark', $spfullmark, PDO::PARAM_STR);
            $stmt->bindValue(':spw', $spw, PDO::PARAM_STR);
            $stmt->bindValue(':spm', $spm, PDO::PARAM_STR);
            $stmt->bindValue(':spp', $spp, PDO::PARAM_STR);
            $stmt->bindValue(':spt', $spt, PDO::PARAM_STR);
            $stmt->bindValue(':spg', $spg, PDO::PARAM_STR);
            $stmt->bindValue(':wl', $wl, PDO::PARAM_STR);
            $stmt->bindValue(':wlfullmark', $wlfullmark, PDO::PARAM_STR);
            $stmt->bindValue(':wlw', $wlw, PDO::PARAM_STR);
            $stmt->bindValue(':wlm', $wlm, PDO::PARAM_STR);
            $stmt->bindValue(':wlp', $wlp, PDO::PARAM_STR);
            $stmt->bindValue(':wlt', $wlt, PDO::PARAM_STR);
            $stmt->bindValue(':wlg', $wlg, PDO::PARAM_STR);
            $stmt->bindValue(':arts', $arts, PDO::PARAM_STR);
            $stmt->bindValue(':artsfullmark', $artsfullmark, PDO::PARAM_STR);
            $stmt->bindValue(':aw', $aw, PDO::PARAM_STR);
            $stmt->bindValue(':am', $am, PDO::PARAM_STR);
            $stmt->bindValue(':ap', $ap, PDO::PARAM_STR);
            $stmt->bindValue(':at', $at, PDO::PARAM_STR);
            $stmt->bindValue(':ag', $ag, PDO::PARAM_STR);
            $stmt->bindValue(':totalSub', $subNum, PDO::PARAM_STR);
            $stmt->bindValue(':totalmark', $totalmark, PDO::PARAM_STR);
            $stmt->bindValue(':gpa', $gpa, PDO::PARAM_STR);
            $stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
            //$stmt->bindValue(':created_at', NOW(), PDO::PARAM_STR);
            
            $result = $stmt->execute();

            if($result){
                $_SESSION['msg'] = "All Subject Number Updated Successfully ";
                echo "<script>window.location='allSubMarkAdd.php'</script>";
                //header("location:allsubmarkAdd.php");
            }
