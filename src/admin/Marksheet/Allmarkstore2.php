<?php 

namespace App\admin\Marksheet;


if(!isset($_SESSION)){
    session_start();
}


use App\Connection;
use PDO;
use PDOException;

class Allmarkstore2 extends Connection
{

	// private $class;
	// private $shift;
	// private $branch;
	// private $department;
	// private $term;
 // 	private $student_id;

	//private $b1grade = 0;
	//private $grade = 0;

	//private $ag;

		private $b1t = 0;
		private $b2t = 0;
		private $e1t = 0;
		private $e2t = 0;
		private $mt = 0;
		private $st = 0;
		private $sst = 0;
		private $bit = 0;
		private $rt = 0;
		private $it = 0;
		private $dt = 0;
		private $spt = 0;
		private $wlt = 0;
		private $at = 0;
		private $totalmark = 0;


		private $b1w = 0;
		private $b1m = 0;
		private $b2w = 0;
		private $b2m = 0;
		private $e1w = 0;
		private $e2w = 0;
		private $mw = 0;
		private $sw = 0;
		private $sm = 0;
		private $sp = 0;
		private $ssw = 0;
		private $ssm = 0;
		private $biw = 0;
		private $bim = 0;
		private $rw = 0;
		private $rm = 0;
		private $iw = 0;
		private $im = 0;
		private $ip = 0;
		private $dw = 0;
		private $dm = 0;
		private $dp = 0;
		private $spw = 0;
		private $spm = 0;
		private $spp = 0;
		private $wlw = 0;
		private $wlm = 0;
		private $wlp = 0;


		private $aw = 0;
		private $am = 0;
		private $ap = 0;
		private $artsfullmark = 0;
		private $arts = 0;


        private $b1g = 0;
        private $b2g = 0;
        private $e1g = 0;
        private $e2g = 0;
        private $mg = 0;
        private $sg = 0;
        private $ssg = 0;
        private $big = 0;
        private $rg = 0;
        private $ig = 0;
        private $dg = 0;
        private $spg = 0;
        private $wlg = 0;


		//private $b1g = $b2g = $e1g = $e1g = $mg = $sg = $ssg = $big = $rg = $ig = $dg = $spg = $wlg = 0;


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
		if(array_key_exists('bangla1', $data)){
			$this->bangla1 = $data['bangla1'];
		}
		if(array_key_exists('fullmark', $data)){
			$this->fullmark = $data['fullmark'];
		}
		if(array_key_exists('b1w', $data)){
			$this->b1w = ((int)$data['b1w']);
		}
		if(array_key_exists('b1m', $data)){
			$this->b1m = ((int)$data['b1m']);
		}
		if(array_key_exists('bangla2', $data)){
			$this->bangla2 = $data['bangla2'];
		}
		if(array_key_exists('b2fullmark', $data)){
			$this->b2fullmark = $data['b2fullmark'];
		}
		if(array_key_exists('b2w', $data)){
			$this->b2w = ((int)$data['b2w']);
		}
		if(array_key_exists('b2m', $data)){
			$this->b2m = ((int)$data['b2m']);
		}
		if(array_key_exists('english1', $data)){
			$this->english1 = $data['english1'];
		}
		if(array_key_exists('enfullmark', $data)){
			$this->enfullmark = $data['enfullmark'];
		}
		if(array_key_exists('e1w', $data)){
			$this->e1w = $data['e1w'];
		}
		if(array_key_exists('english2', $data)){
			$this->english2 = $data['english2'];
		}
		if(array_key_exists('e2fullmark', $data)){
			$this->e2fullmark = $data['e2fullmark'];
		}
		if(array_key_exists('e2w', $data)){
			$this->e2w = $data['e2w'];
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
		if(array_key_exists('sm', $data)){
			$this->sm = $data['sm'];
		}
		if(array_key_exists('sp', $data)){
			$this->sp = $data['sp'];
		}
		if(array_key_exists('social_science', $data)){
			$this->social_science = $data['social_science'];
		}
		if(array_key_exists('ssfullmark', $data)){
			$this->ssfullmark = $data['ssfullmark'];
		}
		if(array_key_exists('ssw', $data)){
			$this->ssw = $data['ssw'];
		}
		if(array_key_exists('ssm', $data)){
			$this->ssm = $data['ssm'];
		}
		// if(array_key_exists('ssp', $data)){
		// 	$this->ssp = $data['ssp'];
		// }
		if(array_key_exists('banint', $data)){
			$this->banint = $data['banint'];
		}
		if(array_key_exists('bifullmark', $data)){
			$this->bifullmark = $data['bifullmark'];
		}
		if(array_key_exists('biw', $data)){
			$this->biw = $data['biw'];
		}
		if(array_key_exists('bim', $data)){
			$this->bim = $data['bim'];
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
		if(array_key_exists('rm', $data)){
			$this->rm = $data['rm'];
		}
		if(array_key_exists('ict', $data)){
			$this->ict = $data['ict'];
		}
		if(array_key_exists('ictfullmark', $data)){
			$this->ictfullmark = $data['ictfullmark'];
		}
		if(array_key_exists('iw', $data)){
			$this->iw = $data['iw'];
		}
		if(array_key_exists('im', $data)){
			$this->im = $data['im'];
		}

		if(array_key_exists('ip', $data)){
			$this->ip = $data['ip'];
		}
		if(array_key_exists('dms', $data)){
			$this->dms = $data['dms'];
		}
		if(array_key_exists('dmsfullmark', $data)){
			$this->dmsfullmark = $data['dmsfullmark'];
		}
		if(array_key_exists('dw', $data)){
			$this->dw = $data['dw'];
		}
		if(array_key_exists('dm', $data)){
			$this->dm = $data['dm'];
		}

		if(array_key_exists('dp', $data)){
			$this->dp = $data['dp'];
		}
		if(array_key_exists('sports', $data)){
			$this->sports = $data['sports'];
		}
		if(array_key_exists('spfullmark', $data)){
			$this->spfullmark = $data['spfullmark'];
		}
		if(array_key_exists('spw', $data)){
			$this->spw = $data['spw'];
		}
		if(array_key_exists('spm', $data)){
			$this->spm = $data['spm'];
		}

		if(array_key_exists('spp', $data)){
			$this->spp = $data['spp'];
		}
		if(array_key_exists('wl', $data)){
			$this->wl = $data['wl'];
		}
		if(array_key_exists('wlfullmark', $data)){
			$this->wlfullmark = $data['wlfullmark'];
		}
		if(array_key_exists('wlw', $data)){
			$this->wlw = ((int)$data['wlw']);
		}
		if(array_key_exists('wlm', $data)){
			$this->wlm = ((int)$data['wlm']);
		}

		if(array_key_exists('wlp', $data)){
			$this->wlp = ((int)$data['wlp']);
		}
		if(array_key_exists('arts', $data)){
			$this->arts = $data['arts'];
		}
		if(array_key_exists('artsfullmark', $data)){
			$this->artsfullmark = $data['artsfullmark'];
		}
		if(array_key_exists('aw', $data)){
			$this->aw = $data['aw'];
		}
		if(array_key_exists('am', $data)){
			$this->am = $data['am'];
		}

		if(array_key_exists('ap', $data)){
			$this->ap = $data['ap'];
		}

		return $this;
	}
		// $this->grade = $this->b1w + $this->b1m;

	//((int)$Test['time'])
	
	public function gradeCalculate(){ 

		$this->b1t  = $this->b1w + $this->b1m;
		$this->b2t  = $this->b2w + $this->b2m;
		$this->e1t  = $this->e1w;
		$this->e2t  = $this->e2w;
		$this->mt   = $this->mw;
		$this->st   = $this->sw + $this->sm + $this->sp;
		$this->sst   = $this->ssw + $this->ssm;
		$this->bit   = $this->biw + $this->bim;
		$this->rt   = $this->rw + $this->rm;
		$this->it  = $this->iw + $this->im + $this->ip;
		$this->dt  = $this->dw + $this->dm + $this->dp;
		$this->spt   = $this->spw + $this->spm + $this->spp;
		$this->wlt   = $this->wlw + $this->wlm + $this->wlp;
		$this->at   = $this->aw + $this->am + $this->ap;

		$this->totalmark = $this->b1t + $this->b2t + $this->e1w + $this->e2w + $this->mw + 
						   $this->st + $this->sst +$this->bit  +$this->rt  +$this->it + 
						   $this->dt  + $this->spt + $this->wlt + $this->at;



 		$this->subNum = 0;
 		
		if($this->fullmark == 100){

			$this->subNum += 1;
		
            if($this->b1t >= 80 ){
                $this->b1g = 5;
             }
            elseif ($this->b1t >= 70 && $this->b1t <= 79 ){
                $this->b1g = 4;
             }
            elseif ($this->b1t >= 60 && $this->b1t <= 69 ){
                $this->b1g = 3.5;
             }
            elseif ($this->b1t >= 50 && $this->b1t <= 59 ){
                $this->b1g = 3;
             }
            elseif ($this->b1t >= 40 && $this->b1t <= 49 ){
                $this->b1g = 2;
             }
            elseif ($this->b1t >= 33 && $this->b1t <= 39 ){
                $this->b1g = 1;
             }
            else {
                $this->b1g = 0;
             }
            // return $this;
        }

		if($this->fullmark == 50){

			$this->subNum += 1;
		
            if($this->b1t >= 40 ){
                $this->b1g = 5;
             }
            elseif ($this->b1t >= 35 && $this->b1t <= 39 ){
                $this->b1g = 4;
             }
            elseif ($this->b1t >= 30 && $this->b1t <= 34 ){
                $this->b1g = 3.5;
             }
            elseif ($this->b1t >= 25 && $this->b1t <= 29 ){
                $this->b1g = 3;
             }
            elseif ($this->b1t >= 20 && $this->b1t <= 24 ){
                $this->b1g = 2;
             }
            elseif ($this->b1t >= 17 && $this->b1t <= 19 ){
                $this->b1g = 1;
             }
            else {
                $this->b1g = 0;
             }
        }

        if($this->b2fullmark == 100){

        	$this->subNum += 1;

        	if($this->b2t >= 80){
        		$this->b2g = 5;
        	}
        	elseif($this->b2t >= 70 && $this->b2t <= 79){
        		$this->b2g = 4;
        	}
        	elseif($this->b2t >=60 && $this->b2t <= 69){
        		$this->b2g = 3.5;
        	}
        	elseif($this->b2t >= 50 && $this->b2t <= 59){
        		$this->b2g = 3;
        	}
        	elseif($this->b2t >= 40 && $this->b2t <= 49){
        		$this->b2g = 2;
        	}
        	elseif($this->b2t >= 33 && $this->b2t <= 39){
        		$this->b2g = 1;
        	}
        	else{
        		$this->b2g = 0;
        	}
        }


		if($this->b2fullmark == 50){

			$this->subNum += 1;
		
            if($this->b2t >= 40 ){
                $this->b2g = 5;
             }
            elseif ($this->b2t >= 35 && $this->b2t <= 39 ){
                $this->b2g = 4;
             }
            elseif ($this->b2t >= 30 && $this->b2t <= 34 ){
                $this->b2g = 3.5;
             }
            elseif ($this->b2t >= 25 && $this->b2t <= 29 ){
                $this->b2g = 3;
             }
            elseif ($this->b2t >= 20 && $this->b2t <= 24 ){
                $this->b2g = 2;
             }
            elseif ($this->b2t >= 17 && $this->b2t <= 19 ){
                $this->b2g = 1;
             }
            else {
                $this->b2g = 0;
             }
        }

        //for english first papaer grade set...


        if($this->enfullmark == 100){

        	$this->subNum += 1;

        	if($this->e1t >= 80){
        		$this->e1g = 5;
        	}
        	elseif($this->e1t >= 70 && $this->e1t <= 79){
        		$this->e1g = 4;
        	}
        	elseif($this->e1t >=60 && $this->e1t <= 69){
        		$this->e1g = 3.5;
        	}
        	elseif($this->e1t >= 50 && $this->e1t <=59){
        		$this->e1g = 3;
        	}
        	elseif($this->e1t >= 40 && $this->e1t <=49){
        		$this->e1g = 2;
        	}
        	elseif($this->e1t >= 33 && $this->e1t <= 39){
        		$this->e1g = 1;
        	}
        	else{
        		$this->e1g = 0;
        	}
        }


		if($this->enfullmark == 50){

			$this->subNum += 1;
		
            if($this->e1t >= 40 ){
                $this->e1g = 5;
             }
            elseif ($this->e1t >= 35 && $this->e1t <= 39 ){
                $this->e1g = 4;
             }
            elseif ($this->e1t >= 30 && $this->e1t <= 34 ){
                $this->e1g = 3.5;
             }
            elseif ($this->e1t >= 25 && $this->e1t <= 29 ){
                $this->e1g = 3;
             }
            elseif ($this->e1t >= 20 && $this->e1t <= 24 ){
                $this->e1g = 2;
             }
            elseif ($this->e1t >= 17 && $this->e1t <= 19 ){
                $this->e1g = 1;
             }
            else {
                $this->e1g = 0;
             }
        }


        //for english second papaer grade set...


        if($this->e2fullmark == 100){

        	$this->subNum += 1;

        	if($this->e2t >= 80){
        		$this->e2g = 5;
        	}
        	elseif($this->e2t >= 70 && $this->e2t <= 79){
        		$this->e2g = 4;
        	}
        	elseif($this->e2t >=60 && $this->e2t <= 69){
        		$this->e2g = 3.5;
        	}
        	elseif($this->e2t >= 50 && $this->e2t <=59){
        		$this->e2g = 3;
        	}
        	elseif($this->e2t >= 40 && $this->e2t <=49){
        		$this->e2g = 2;
        	}
        	elseif($this->e2t >= 33 && $this->e2t <= 39){
        		$this->e2g = 1;
        	}
        	else{
        		$this->e2g = 0;
        	}
        }


		if($this->e2fullmark == 50){

			$this->subNum += 1;
		
            if($this->e2t >= 40 ){
                $this->e2g = 5;
             }
            elseif ($this->e2t >= 35 && $this->e2t <= 39 ){
                $this->e2g = 4;
             }
            elseif ($this->e2t >= 30 && $this->e2t <= 34 ){
                $this->e2g = 3.5;
             }
            elseif ($this->e2t >= 25 && $this->e2t <= 29 ){
                $this->e2g = 3;
             }
            elseif ($this->e2t >= 20 && $this->e2t <= 24 ){
                $this->e2g = 2;
             }
            elseif ($this->e2t >= 17 && $this->e2t <= 19 ){
                $this->e2g = 1;
             }
            else {
                $this->e2g = 0;
             }
        }

        //for mathmatics grade set...

        if($this->mfullmark == 100){

        	$this->subNum += 1;

        	if($this->mt >= 80){
        		$this->mg = 5;
        	}
        	elseif($this->mt >= 70 && $this->mt <= 79){
        		$this->mg = 4;
        	}
        	elseif($this->mt >= 60 && $this->mt <= 69){
        		$this->mg = 3.5;
        	}
        	elseif($this->mt >= 50 && $this->mt <= 59){
        		$this->mg = 3;
        	}
        	elseif($this->mt >= 40 && $this->mt <= 49){
        		$this->mg = 2;
        	}
        	elseif($this->mt >= 33 && $this->mt <= 39){
        		$this->mg = 1;
        	}
        	else{
        		$this->mg = 0;
        	}
        }

        // for science grade set...
        if($this->sfullmark == 100){

        	$this->subNum += 1;

        	if($this->st >= 80){
        		$this->sg = 5;
        	}
        	elseif($this->st >=70 && $this->st <= 79){
        		$this->sg = 4;
        	}
        	elseif($this->st >= 60 && $this->st <= 69){
        		$this->sg = 3.5;
        	}
        	elseif($this->st >= 50 && $this->st <= 59){
        		$this->sg = 3;
        	}
        	elseif($this->st >= 40 && $this->st <= 49){
        		$this->sg = 2;
        	}
        	elseif($this->st >= 33 && $this->st <=39){
        		$this->sg = 1;
        	}
        	else{
        		$this->sg = 0;
        	}
        }

        //social science grade set...

        if($this->ssfullmark == 100){

        	$this->subNum += 1;
		
            if($this->sst >= 80 ){
                $this->ssg = 5;
             }
            elseif ($this->sst >= 70 && $this->sst <= 79 ){
                $this->ssg = 4;
             }
            elseif ($this->sst >= 60 && $this->sst <= 69 ){
                $this->ssg = 3.5;
             }
            elseif ($this->sst >= 50 && $this->sst <= 59 ){
                $this->ssg = 3;
             }
            elseif ($this->sst >= 40 && $this->sst <= 49 ){
                $this->ssg = 2;
             }
            elseif ($this->sst >= 33 && $this->sst <= 39 ){
                $this->ssg = 1;
             }
            else {
                $this->ssg = 0;
             }
         }

         //bangladesh and internatinal...

        //  if($this->bifullmark == 100){

        //  	$this->subNum += 1;
		
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

        if($this->bifullmark == 50){

        	$this->subNum += 1;
		
            if($this->bit >= 40 ){
                $this->big = 5;
             }
            elseif ($this->bit >= 35 && $this->bit <= 39 ){
                $this->big = 4;
             }
            elseif ($this->bit >= 30 && $this->bit <= 34 ){
                $this->big = 3.5;
             }
            elseif ($this->bit >= 25 && $this->bit <= 29 ){
                $this->big = 3;
             }
            elseif ($this->bit >= 20 && $this->bit <= 24 ){
                $this->big = 2;
             }
            elseif ($this->bit >= 17 && $this->bit <= 19 ){
                $this->big = 1;
             }
            else {
                $this->big = 0;
             }
        }


        //religion fullmark...

        if($this->refullmark == 100){

        	$this->subNum += 1;
		
            if($this->rt >= 80 ){
                $this->rg = 5;
             }
            elseif ($this->rt >= 70 && $this->rt <= 79 ){
                $this->rg = 4;
             }
            elseif ($this->rt >= 60 && $this->rt <= 69 ){
                $this->rg = 3.5;
             }
            elseif ($this->rt >= 50 && $this->rt <= 59 ){
                $this->rg = 3;
             }
            elseif ($this->rt >= 40 && $this->rt <= 49 ){
                $this->rg = 2;
             }
            elseif ($this->rt >= 33 && $this->rt <= 39 ){
                $this->rg = 1;
             }
            else {
                $this->rg = 0;
             }
             
        }

        // ICT grade set...

             if($this->ictfullmark == 100){

             	$this->subNum += 1;
		
            if($this->it >= 80 ){
                $this->ig = 5;
             }
            elseif ($this->it >= 70 && $this->it <= 79 ){
                $this->ig = 4;
             }
            elseif ($this->it >= 60 && $this->it <= 69 ){
                $this->ig = 3.5;
             }
            elseif ($this->it >= 50 && $this->it <= 59 ){
                $this->ig = 3;
             }
            elseif ($this->it >= 40 && $this->it <= 49 ){
                $this->ig = 2;
             }
            elseif ($this->it >= 33 && $this->it <= 39 ){
                $this->ig = 1;
             }
            else {
                $this->ig = 0;
             }
             
        }


        if($this->ictfullmark == 50){

        	$this->subNum += 1;
		
            if($this->it >= 40 ){
                $this->ig = 5;
             }
            elseif ($this->it >= 35 && $this->it <= 39 ){
                $this->ig = 4;
             }
            elseif ($this->it >= 30 && $this->it <= 34 ){
                $this->ig = 3.5;
             }
            elseif ($this->it >= 25 && $this->it <= 29 ){
                $this->ig = 3;
             }
            elseif ($this->it >= 20 && $this->it <= 24 ){
                $this->ig = 2;
             }
            elseif ($this->it >= 17 && $this->it <= 19 ){
                $this->ig = 1;
             }
            else {
                $this->ig = 0;
             }
        }

        //dms grade set...

        if($this->dmsfullmark == 100){

        	$this->subNum += 1;
		
            if($this->dt >= 80 ){
                $this->dg = 5;
             }
            elseif ($this->dt >= 70 && $this->dt <= 79 ){
                $this->dg = 4;
             }
            elseif ($this->dt >= 60 && $this->dt <= 69 ){
                $this->dg = 3.5;
             }
            elseif ($this->dt >= 50 && $this->dt <= 59 ){
                $this->dg = 3;
             }
            elseif ($this->dt >= 40 && $this->dt <= 49 ){
                $this->dg = 2;
             }
            elseif ($this->dt >= 33 && $this->dt <= 39 ){
                $this->dg = 1;
             }
            else {
                $this->dg = 0;
             }
             
        }


        if($this->dmsfullmark == 50){

        	$this->subNum += 1;
		
            if($this->dt >= 40 ){
                $this->dg = 5;
             }
            elseif ($this->dt >= 35 && $this->dt <= 39 ){
                $this->dg = 4;
             }
            elseif ($this->dt >= 30 && $this->dt <= 34 ){
                $this->dg = 3.5;
             }
            elseif ($this->dt >= 25 && $this->dt <= 29 ){
                $this->dg = 3;
             }
            elseif ($this->dt >= 20 && $this->dt <= 24 ){
                $this->dg = 2;
             }
            elseif ($this->dt >= 17 && $this->dt <= 19 ){
                $this->dg = 1;
             }
            else {
                $this->dg = 0;
             }
        }

        //sport grade set...

        if($this->spfullmark == 100){

        	$this->subNum += 1;
		
            if($this->spt >= 80 ){
                $this->spg = 5;
             }
            elseif ($this->spt >= 70 && $this->spt <= 79 ){
                $this->spg = 4;
             }
            elseif ($this->spt >= 60 && $this->spt <= 69 ){
                $this->spg = 3.5;
             }
            elseif ($this->spt >= 50 && $this->spt <= 59 ){
                $this->spg = 3;
             }
            elseif ($this->spt >= 40 && $this->spt <= 49 ){
                $this->spg = 2;
             }
            elseif ($this->spt >= 33 && $this->spt <= 39 ){
                $this->spg = 1;
             }
            else {
                $this->spg = 0;
             }
             
        }


        if($this->spfullmark == 50){

        	$this->subNum += 1;
		
            if($this->spt >= 40 ){
                $this->spg = 5;
             }
            elseif ($this->spt >= 35 && $this->spt <= 39 ){
                $this->spg = 4;
             }
            elseif ($this->spt >= 30 && $this->spt <= 34 ){
                $this->spg = 3.5;
             }
            elseif ($this->spt >= 25 && $this->spt <= 29 ){
                $this->spg = 3;
             }
            elseif ($this->spt >= 20 && $this->spt <= 24 ){
                $this->spg = 2;
             }
            elseif ($this->spt >= 17 && $this->spt <= 19 ){
                $this->spg = 1;
             }
            else {
                $this->spg = 0;
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


        if($this->wlfullmark == 50){

        	$this->subNum += 1;
		
            if($this->wlt >= 40 ){
                $this->wlg = 5;
             }
            elseif ($this->wlt >= 35 && $this->wlt <= 39 ){
                $this->wlg = 4;
             }
            elseif ($this->wlt >= 30 && $this->wlt <= 34 ){
                $this->wlg = 3.5;
             }
            elseif ($this->wlt >= 25 && $this->wlt <= 29 ){
                $this->wlg = 3;
             }
            elseif ($this->wlt >= 20 && $this->wlt <= 24 ){
                $this->wlg = 2;
             }
            elseif ($this->wlt >= 17 && $this->wlt <= 19 ){
                $this->wlg = 1;
             }
            else {
                $this->wlg = 0;
             }
        }


        if($this->artsfullmark == 50){

        	$this->subNum += 1;
		
            if($this->at >= 40 ){
                $this->ag = 5;
             }
            elseif ($this->at >= 35 && $this->at <= 39 ){
                $this->ag = 4;
             }
            elseif ($this->at >= 30 && $this->at <= 34 ){
                $this->ag = 3.5;
             }
            elseif ($this->at >= 25 && $this->at <= 29 ){
                $this->ag = 3;
             }
            elseif ($this->at >= 20 && $this->at <= 24 ){
                $this->ag = 2;
             }
            elseif ($this->at >= 17 && $this->at <= 19 ){
                $this->ag = 1;
             }
            else {
                $this->ag = 0;
             }
        }
 		

        $this->totalgpa = $this->b1g + $this->b2g + $this->e1g + $this->e2g + $this->mg +         $this->sg + $this->ssg + $this->big + $this->rg + $this->ig +           $this->dg +   $this->spg + $this->wlg;// + $this->ag ;
        $this->gpa = $this->totalgpa / $this->subNum;
        $this->gpa = number_format($this->gpa, 2);


		return $this;

	 }

	 public function store(){
	 	try {

	 		$stmt = $this->con->prepare("insert into allmarks(class, shift, branch, department, term, year, student_id, bangla1, fullmark, b1w, b1m, b1t, b1g, bangla2, b2fullmark, b2w, b2m, b2t, b2g, english1, enfullmark, e1w, e1g, english2, e2fullmark, e2w, e2g, math, mfullmark, mw, mg, science, sfullmark, sw, sm, sp, st, sg, social_science, ssfullmark, ssw, ssm,  sst, ssg, banint, bifullmark, biw, bim, bit, big, religion, refullmark, rw, rm, rt, rg, ict, ictfullmark, iw, im, ip, it, ig, dms, dmsfullmark, dw, dm, dp, dt, dg, sports, spfullmark, spw, spm, spp, spt, spg, wl, wlfullmark, wlw, wlm, wlp, wlt, wlg, arts, artsfullmark, aw, am, ap, at, totalSub  totalmark, gpa, created_at )

	 		 values( :class, :shift, :branch, :department, :term, :year, :student_id, :bangla1, :fullmark, :b1w, :b1m, :b1t, :b1g, :bangla2, :b2fullmark, :b2w, :b2m, :b2t, :b2g, :english1, :enfullmark, :e1w, :e1g, :english2, :e2fullmark, :e2w, :e2g, :math, :mfullmark, :mw, :mg, :science, :sfullmark, :sw, :sm, :sp, :st, :sg, :social_science, :ssfullmark, :ssw, :ssm,   :sst, :ssg, :banint, :bifullmark, :biw, :bim, :bit, :big, :religion, :refullmark, :rw, :rm, :rt, :rg, :ict, :ictfullmark, :iw, :im, :ip, :it, :ig, :dms, :dmsfullmark, :dw, :dm, :dp, :dt, :dg, :sports, :spfullmark, :spw, :spm, :spp, :spt, :spg, :wl, :wlfullmark, :wlw, :wlm, :wlp, :wlt, :wlg, :arts, :artsfullmark, :aw, :am, :ap, :at, :totalSub,  :totalmark, :gpa, NOW() )  ");

	 		$stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
		    $stmt->bindValue(':shift', $this->shift, PDO::PARAM_STR);
		    $stmt->bindValue(':branch', $this->branch, PDO::PARAM_STR);
		    $stmt->bindValue(':department', $this->department, PDO::PARAM_STR);
		    $stmt->bindValue(':term', $this->term, PDO::PARAM_STR);
		    $stmt->bindValue(':year', date('Y'), PDO::PARAM_STR);
		    $stmt->bindValue(':student_id', $this->student_id, PDO::PARAM_INT);
		    $stmt->bindValue(':bangla1', $this->bangla1, PDO::PARAM_STR);
		    $stmt->bindValue(':fullmark', $this->fullmark, PDO::PARAM_INT);
		    $stmt->bindValue(':b1w', $this->b1w, PDO::PARAM_INT);
		    $stmt->bindValue(':b1m', $this->b1m, PDO::PARAM_STR);
		    $stmt->bindValue(':b1t', $this->b1t, PDO::PARAM_INT);
		    $stmt->bindValue(':b1g', $this->b1g, PDO::PARAM_INT);
		    $stmt->bindValue(':bangla2', $this->bangla2, PDO::PARAM_STR);
		    $stmt->bindValue(':b2fullmark', $this->b2fullmark, PDO::PARAM_STR);
		    $stmt->bindValue(':b2w', $this->b2w, PDO::PARAM_STR);
		    $stmt->bindValue(':b2m', $this->b2m, PDO::PARAM_STR);
		    $stmt->bindValue(':b2t', $this->b2t, PDO::PARAM_STR);
		    $stmt->bindValue(':b2g', $this->b2g, PDO::PARAM_STR);
		    $stmt->bindValue(':english1', $this->english1, PDO::PARAM_STR);
		    $stmt->bindValue(':enfullmark', $this->enfullmark, PDO::PARAM_STR);
		    $stmt->bindValue(':e1w', $this->e1w, PDO::PARAM_STR);
		    $stmt->bindValue(':e1g', $this->e1g, PDO::PARAM_STR);
		    $stmt->bindValue(':english2', $this->english2, PDO::PARAM_STR);
		    $stmt->bindValue(':e2fullmark', $this->e2fullmark, PDO::PARAM_STR);
		    $stmt->bindValue(':e2w', $this->e2w, PDO::PARAM_STR);
		    $stmt->bindValue(':e2g', $this->e2g, PDO::PARAM_STR);
		    $stmt->bindValue(':math', $this->math, PDO::PARAM_STR);
		    $stmt->bindValue(':mfullmark', $this->mfullmark, PDO::PARAM_STR);
		    $stmt->bindValue(':mw', $this->mw, PDO::PARAM_STR);
		    $stmt->bindValue(':mg', $this->mg, PDO::PARAM_STR);
		    $stmt->bindValue(':science', $this->science, PDO::PARAM_STR);
		    $stmt->bindValue(':sfullmark', $this->sfullmark, PDO::PARAM_STR);
		    $stmt->bindValue(':sw', $this->sw, PDO::PARAM_STR);
		    $stmt->bindValue(':sm', $this->sm, PDO::PARAM_STR);
		    $stmt->bindValue(':sp', $this->sp, PDO::PARAM_STR);
		    $stmt->bindValue(':st', $this->st, PDO::PARAM_STR);
		    $stmt->bindValue(':sg', $this->sg, PDO::PARAM_STR);
		    $stmt->bindValue(':social_science', $this->social_science, PDO::PARAM_STR);
		    $stmt->bindValue(':ssfullmark', $this->ssfullmark, PDO::PARAM_STR);
		    $stmt->bindValue(':ssw', $this->ssw, PDO::PARAM_STR);
		    $stmt->bindValue(':ssm', $this->ssm, PDO::PARAM_STR);
		    //$stmt->bindValue(':ssp', $this-> , PDO::PARAM_STR);
		    $stmt->bindValue(':sst', $this->sst, PDO::PARAM_STR);
		    $stmt->bindValue(':ssg', $this->ssg, PDO::PARAM_STR);
		    $stmt->bindValue(':banint', $this->banint, PDO::PARAM_STR);
		    $stmt->bindValue(':bifullmark', $this->bifullmark, PDO::PARAM_STR);
		    $stmt->bindValue(':biw', $this->biw, PDO::PARAM_STR);
		    $stmt->bindValue(':bim', $this->bim, PDO::PARAM_STR);
		    $stmt->bindValue(':bit', $this->bit, PDO::PARAM_STR);
		    $stmt->bindValue(':big', $this->big, PDO::PARAM_STR);
		    $stmt->bindValue(':religion', $this->religion, PDO::PARAM_STR);
		    $stmt->bindValue(':refullmark', $this->refullmark, PDO::PARAM_STR);
		    $stmt->bindValue(':rw', $this->rw, PDO::PARAM_STR);
		    $stmt->bindValue(':rm', $this->rm, PDO::PARAM_STR);
		    $stmt->bindValue(':rt', $this->rt, PDO::PARAM_STR);
		    $stmt->bindValue(':rg', $this->rg, PDO::PARAM_STR);
		    $stmt->bindValue(':ict', $this->ict, PDO::PARAM_STR);
		    $stmt->bindValue(':ictfullmark', $this->ictfullmark, PDO::PARAM_STR);
		    $stmt->bindValue(':iw', $this->iw, PDO::PARAM_STR);
		    $stmt->bindValue(':im', $this->im, PDO::PARAM_STR);
		    $stmt->bindValue(':ip', $this->ip, PDO::PARAM_STR);
		    $stmt->bindValue(':it', $this->it, PDO::PARAM_STR);
		    $stmt->bindValue(':ig', $this->ig, PDO::PARAM_STR);
		    $stmt->bindValue(':dms', $this->dms, PDO::PARAM_STR);
		    $stmt->bindValue(':dmsfullmark', $this->dmsfullmark, PDO::PARAM_STR);
		    $stmt->bindValue(':dw', $this->dw, PDO::PARAM_STR);
		    $stmt->bindValue(':dm', $this->dm, PDO::PARAM_STR);
		    $stmt->bindValue(':dp', $this->dp, PDO::PARAM_STR);
		    $stmt->bindValue(':dt', $this->dt, PDO::PARAM_STR);
		    $stmt->bindValue(':dg', $this->dg, PDO::PARAM_STR);
		    $stmt->bindValue(':sports', $this->sports, PDO::PARAM_STR);
		    $stmt->bindValue(':spfullmark', $this->spfullmark, PDO::PARAM_STR);
		    $stmt->bindValue(':spw', $this->spw, PDO::PARAM_STR);
		    $stmt->bindValue(':spm', $this->spm, PDO::PARAM_STR);
		    $stmt->bindValue(':spp', $this->spp, PDO::PARAM_STR);
		    $stmt->bindValue(':spt', $this->spt, PDO::PARAM_STR);
		    $stmt->bindValue(':spg', $this->spg, PDO::PARAM_STR);
		    $stmt->bindValue(':wl', $this->wl, PDO::PARAM_STR);
		    $stmt->bindValue(':wlfullmark', $this->wlfullmark, PDO::PARAM_STR);
		    $stmt->bindValue(':wlw', $this->wlw, PDO::PARAM_STR);
		    $stmt->bindValue(':wlm', $this->wlm, PDO::PARAM_STR);
		    $stmt->bindValue(':wlp', $this->wlp, PDO::PARAM_STR);
		    $stmt->bindValue(':wlt', $this->wlt, PDO::PARAM_STR);
		    $stmt->bindValue(':wlg', $this->wlg, PDO::PARAM_STR);
		    $stmt->bindValue(':arts', $this->arts, PDO::PARAM_STR);
		    $stmt->bindValue(':artsfullmark', $this->artsfullmark, PDO::PARAM_STR);
		    $stmt->bindValue(':aw', $this->aw, PDO::PARAM_STR);
		    $stmt->bindValue(':am', $this->am, PDO::PARAM_STR);
		    $stmt->bindValue(':ap', $this->ap, PDO::PARAM_STR);
		    $stmt->bindValue(':at', $this->at, PDO::PARAM_STR);
		    $stmt->bindValue(':totalSub', $this->subNum, PDO::PARAM_STR);
		   // $stmt->bindValue(':ag', $this->ag, PDO::PARAM_STR);
		    $stmt->bindValue(':totalmark', $this->totalmark, PDO::PARAM_STR);
		    $stmt->bindValue(':gpa', $this->gpa, PDO::PARAM_STR);
 			
 			$result = $stmt->execute();

 			if($result){
 				$_SESSION['success'] = "All Subject Number Added Successfully ";
 				echo "<script>window.location='allSubMarkAdd.php'</script>";
 				//header("location:allsubmarkadd.php");
 			}
 
	 		
	 	} catch (PDOException $e) {
	 		echo "Error : ".$e->getMessage()."<br />";
	 		die();
	 	}
	 }

	 public function select($id){
	 	try {

	 		$stmt = $this->con->prepare("select * from allmarks where student_id = :id ");
	 		$stmt->bindValue(':id', $id, PDO::PARAM_STR);
	 		$stmt->execute();
	 		return $stmt->fetch(PDO::FETCH_ASSOC);
	 		
	 	} catch (PDOException $e) {
	 		echo "Error : ".$e->getMessage(). "<br />";
	 		die();
	 	}
	 }

	 //all gpa select 
	 public function selectAllgpa($class, $shift, $branch, $department, $term, $year ){
	 	try {

	 		//$stmt = $this->con->prepare("select * from allmarks where status = 1 ");
	 		$stmt = $this->con->prepare("select * from allmarks where class=:class and shift=:shift and branch=:branch and department=:department and term=:term and year=:year and status=1 ");
	 		$stmt->bindValue(':class', $class, PDO::PARAM_STR);
	 		$stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
	 		$stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
	 		$stmt->bindValue(':department', $department, PDO::PARAM_STR);
	 		$stmt->bindValue(':term', $term, PDO::PARAM_STR);
	 		$stmt->bindValue(':year', $year, PDO::PARAM_STR);
	 		$stmt->execute();
	 		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	 		
	 	} catch (PDOException $e) {
	 		echo "Error: ".$e->getMessage()."<br />";
	 		die();
	 	}
	 }

	 //select student total number...
	 public function studentNumberSelect($student_id){
	 	try {

	 		$stmt = $this->con->prepare("select * from allmarks where student_id = :student_id and status = 1 ");
	 		$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
	 		$stmt->execute();
	 		return $stmt->fetch(PDO::FETCH_ASSOC);
	 		
	 	} catch (PDOException $e) {
	 		echo "Error: ".$e->getMessage()."<br />";
	 		die();

	 	}
	 }

	 public function selectStudentTotalmark($student_id){
	 	try {

	 		$stmt = $this->con->prepare("select totalmark from allmarks where student_id=:student_id and status=1 ");
	 		$stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
	 		$stmt->execute();
	 		return $stmt->fetch(PDO::FETCH_ASSOC);
	 		
	 	} catch (PDOException $e) {
	 		echo "Error: ".$e->getMessage()."<br />";
	 		die();
	 	}
	 }
	
	 
}