<?php 




include_once '../../../vendor/autoload.php';

//use App\admin\Marksheet\Allmarkstore;
//error_reporting(0);

// $_POST['arts'] = 'চারু ও কারুকলা';
// $_POST['artsfullmark'] = 50;
// $_POST['aw'] = 0;
// $_POST['am'] = 0;
// $_POST['ap'] = 0;


$markstore = new App\admin\Marksheet\Allmarkstore2();

 $markstore->set($_POST)->gradeCalculate();
$markstore->store();


// echo "<pre>";
// var_dump($result);
// die();


		// $this->b1w = 0;
		// $this->b1m = 0;
		// $this->b2w = 0;
		// $this->b2m = 0;
		// $this->e1w = 0;
		// $this->e2w = 0;
		// $this->mw = 0;
		// $this->sw = 0;
		// $this->sm = 0;
		// $this->sp = 0;
		// $this->ssw = 0;
		// $this->ssm = 0;
		// $this->biw = 0;
		// $this->bim = 0;
		// $this->rw = 0;
		// $this->rm = 0;
		// $this->iw = 0;
		// $this->im = 0;
		// $this->ip = 0;
		// $this->dw = 0;
		// $this->dm = 0;
		// $this->dp = 0;
		// $this->spw = 0;
		// $this->spm = 0;
		// $this->spp = 0;
		// $this->wlw = 0;
		// $this->wlm = 0;
		// $this->wlp = 0;
