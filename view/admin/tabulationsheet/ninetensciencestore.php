<?php  

include '../includes/header.php'; 

if(!isset($_SESSION)){
    session_start();
}
error_reporting(0);


/*echo "<pre>";
var_dump($_POST);
die();
*/
include_once '../../../vendor/autoload.php' ;

use App\admin\Tabulation\Tabulation;

$class      = trim(htmlspecialchars($_POST['class']));
$term       = trim(htmlspecialchars($_POST['term']));
$year       = trim(htmlspecialchars($_POST['year']));

if($_POST['department'] == 'বিজ্ঞান'){
    $dept       = trim(htmlspecialchars($_POST['department']));  
}elseif ($_POST['department'] == 'মানবিক') {
    $dept       = trim(htmlspecialchars($_POST['department']));
}elseif ($_POST['department'] == 'বাণিজ্য') {
    $dept       = trim(htmlspecialchars($_POST['department']));
}

$tabulation = new Tabulation();
$results = $tabulation->selectNineTenScience($class, $term, $year, $dept);



?>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group" style="text-align:right;">
				<a class="btn btn-success" href="view/admin/tabulationsheet/ninetenscience.php">Search Again</a>
			</div>
		</div>
	</div>
    <div class="container" id="printableArea" >
        <div class="col-md-12"  style="background: white;margin-top: ;" >

        <div class="row" >
	            <div class="col-md-12" style="background: white;">

	            
	            <h3 style="text-align:center;color:green;">সাঘাটা পাইলট উচ্চ বিদ্যালয় </h3>
            <p style="text-align:center;">ডাকঘরঃ সাঘাটা, উপজেলাঃ সাঘাটা, জেলাঃ গাইবান্ধা। </p>
	            <!-- <p style="text-align:center;">ইমেইলঃ f.u.pallimongalhighschoolbogra@gmail.com
	            <br> মোবাইলঃ ০১৭১৬৩০৩৬২৪ 
	            </p> -->
	            <h3 style="text-align:center;color:rgba(46,50,230,0.9);"> টেবুলেশন শিট</h3>

	            <?php echo "<hr/>"; ?>
	            
	            </div>
            </div>
        </div>
 <br>
                    
    <table border="1" align="center" width="100%" style="background: white; font-size: 12px">

 
        <tr>
            <td colspan="23" align="center" style="background: #56ABEE;">টেবুলেশন শিট</td>
        </tr>


        <tr>
            <td align="center" class="size6">নং</td>
            <td align="left"  class="size6">নাম</td>
            <td align="center" class="size6">আইডি</td>
            <td align="center" class="size6">শ্রেণী</td>
            <td align="center" class="size6">শ্রেণী_রোল</td>
            <td align="center" class="size6">বিভাগ</td>

            <td align="center" class="size6">বাংলা ১ম </td>
            <td align="center" class="size6">বাংলা ২য় </td>
            <td align="center" class="size6">ইংরেজী ১ম  </td>
            <td align="center" class="size6">ইংরেজী ২য়  </td>
            <td align="center" class="size6">গণিত</td>
		<!--		
this section for humanities department:
 -->	
			 <td align="center" class="size6">ভূগোল </td>
            <td align="center" class="size6">অর্থনীতি </td>
            <td align="center" class="size6">বাংলাদেশের ইতিহাস ও বিশ্ব সভ্যতা  </td>
            <td align="center" class="size6">সাধারন বিজ্ঞান  </td>
            <td align="center" class="size6">কৃষি শিক্ষা   </td>
            <td align="center" class="size6">ধর্ম ও নৈতিক শিক্ষা </td>
            <td align="center" class="size6">তথ্য ও যোগাযোগ প্রযুক্তি </td>
           
<!--		
this section for science department:
   
<td align="center" class="size6">পদার্থবিজ্ঞান </td>
            <td align="center" class="size6">রসায়ন </td>
            <td align="center" class="size6">জীববিজ্ঞান </td>
            <td align="center" class="size6">উচ্চতর গণিত  </td>
            <td align="center" class="size6">কৃষি শিক্ষা   </td>
            <td align="center" class="size6">ধর্ম ও নৈতিক শিক্ষা </td>
            <td align="center" class="size6">বাংলাদেশ ও বিশ্ব পরিচয় </td>
            <td align="center" class="size6">তথ্য ও যোগাযোগ প্রযুক্তি </td>
			-->
			
          <!--   <td align="center" class="size6">শারীরিক শিক্ষা ও স্বাস্থ্য </td>
            <td align="center" class="size6">গার্হস্থ্যবিজ্ঞান </td>
            <td align="center" class="size6">কর্ম ও জীবনমূখী শিক্ষা </td>
            <td align="center" class="size6">চারু ও কারুকলা </td> -->

            <td align="center" class="size6">লেটার গ্রেড</td>
            <td align="center" class="size6">সর্বমোট   নাম্বার    </td>
        </tr>

        
        
       <?php 
       		$i = 0;
       		foreach($results as $result){
       		$i++;

            $stu_id = $result['student_id'];
            $data   = $tabulation->stu_id_select($stu_id);
			
			
			$b1g = $result['b1g'];
			$b2g = $result['b2g'];
			$e1g = $result['e1g'];
			$e2g = $result['e2g'];

			$mg = $result['mg'];
			$pg = $result['pg'];
			$cg = $result['cg'];
			$bg = $result['bg'];

			$big = $result['big'];
			$rg = $result['rg'];
			$ig = $result['ig'];
			//echo $bg." check ".$ig." ceheckkkk  original gpa: ";

			if($b1g == 0 || $b2g == 0 || $e1g == 0 || $e2g == 0 || $mg == 0 || $pg == 0 || $cg == 0 || $bg == 0 || $big == 0 || $rg == 0 || $ig == 0){
				$Fail = 'F';
				$gpa = "F";
			}elseif($result['gpa'] > 5){
				$gpa = 5;
				$gpa = number_format($gpa,2);
			}else{
				$gpa = number_format($result['gpa'],2);
			}
				
			
			//echo $gpa;
			//echo "<pre>";
            //var_dump($data);
            //die();

        ?> 
 
            <tr>
                <td align="center"><?= $i; ?></td>
                <td align="left"><?= $data['student_name']; ?></td>
                <td><?=
                   $result['student_id'];
                    ?>
                </td>
                <td align="center"><?= $result['class']; ?></td>
                <td align="center"><?= $data['class_roll']; ?></td>
                <td align="center"><?= $result['department']; ?></td>
                <td align="center"><?= $result['b1t']; ?></td>
                <td align="center" style="background: white;color: "><?=
                   $result['b2t'];
                    ?>
                </td>
                <td align="center" style="background: white;color: "><?=
                    $result['e1w'];
                    ?>
                </td>
                <td align="center" style="background: white;color: "><?=
                    $result['e2w'];
                    ?>
                </td>
                <td align="center" style="background: white;color: "><?=
                    $result['mt'];
                    ?>
                </td>
                <td align="center" style="background: white;color: "><?=
                    $result['pt'];
                    ?>
                </td>
                <td align="center" style="background: white;color: "><?=
                    $result['ct'];
                    ?>
                </td>
                <td align="center" style="background: white;color: "><?=
                    $result['bt'];
                    ?>
                </td>
                <td align="center" style="background: white;color: "><?=
                    $result['hmt'];
                    ?>
                </td>
                <td align="center" style="background: white;color: "><?=
                    $result['agt'];
                    ?>
                </td>
                <td align="center" style="background: white;color: "><?=
                    $result['rt'];
                    ?>
                </td>
               <!-- <td align="center" style="background: white;color: "><?//=
                    //$result['bit'];
                    ?>
                </td>
				-->
                <td align="center" style="background: white;color: "><?=
                    $result['it'];
                    ?>
                </td>
                
                <td rowspan="" align="center">
                    <?=
					
                    $gpa
                    ?>
                </td>

                <td rowspan="" align="center">
                    <?=
                    $result['totalmark'];
                
                ?>
                </td>
                
          
            </tr>


 <?php } ?>       
     

    </table>
        <br />
  </div>   
  <input type="button" class="btn btn-info" onclick="printDiv('printableArea')" value="print marksheet" />


  <!-- 
  </body>
</html> -->
<!-- <a href="javascript:void(0);" id="print_button1" style="width: 120px; padding: 5px 8px 5px 8px;text-align: center;float: left;background-color: #02A6D8;color: #fff;text-decoration: none; margin: 10px;" onclick="printPageArea('wrapper')">Print Marksheet</a> -->

<script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

</script>
    <?php  include '../includes/footer.php' ?>
