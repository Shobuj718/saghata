<?php  

include '../includes/header.php'; 

if(!isset($_SESSION)){
    session_start();
}
error_reporting(0);

include_once '../../../vendor/autoload.php' ;

use App\admin\Tabulation\Tabulation;

$class      = trim(htmlspecialchars($_POST['class']));
$term       = trim(htmlspecialchars($_POST['term']));
$year       = trim(htmlspecialchars($_POST['year']));


$tabulation = new Tabulation();
$results = $tabulation->selectAllMark($class, $term, $year);


// echo "<pre>";
// var_dump($results);
// die();


?>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group" style="text-align:right;">
				<a class="btn btn-success" href="view/admin/tabulationsheet/sixtoeight.php">Search Again</a>
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
            <td colspan="18" align="center" style="background: #56ABEE;">মার্কসশীট</td>
        </tr>


        <tr>
            <td align="center" class="size6">রোল</td>
            <td align="center" class="size6">আইডি</td>
            <td align="center" class="size6">শ্রেণী</td>

            <td align="center" class="size6">বাংলা ১ম </td>
            <td align="center" class="size6">বাংলা ২য় </td>
            <td align="center" class="size6">ইংরেজী ১ম  </td>
            <td align="center" class="size6">ইংরেজী ২য়  </td>
            <td align="center" class="size6">গণিত</td>
            <td align="center" class="size6">বিজ্ঞান</td>
            <td align="center" class="size6">সমাজ বিজ্ঞান </td>
            <td align="center" class="size6">কৃষি শিক্ষা </td>
            <td align="center" class="size6">ধর্ম ও নৈতিক শিক্ষা </td>
            <td align="center" class="size6">বাংলাদেশ ও বিশ্ব পরিচয় </td>
            <td align="center" class="size6">তথ্য ও যোগাযোগ প্রযুক্তি </td>
            <td align="center" class="size6">শারীরিক শিক্ষা ও স্বাস্থ্য </td>
            <td align="center" class="size6">গার্হস্থ্যবিজ্ঞান </td>
            <td align="center" class="size6">কর্ম ও জীবনমূখী শিক্ষা </td>
            <td align="center" class="size6">চারু ও কারুকলা </td>

            <td align="center" class="size6">লেটার গ্রেড</td>
            <td align="center" class="size6">সর্বমোট   নাম্বার    </td>
        </tr>

        
        
       <?php 
       		$i = 0;
       		foreach($results as $result){
       		$i++;

        ?> 
 
            <tr>
                <td align="center"><?= $i; ?></td>
                <td><?=
                   $result['student_id'];
                    ?>
                </td>
                <td align="center"><?= $result['class']; ?></td>
                <td align="center"><?= $result['b1t']; ?></td>
                <td align="center" style="background: white;color: #3926ee"><?=
                   $result['b2t'];
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    $result['e1w'];
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    $result['e2w'];
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    $result['mw'];
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    $result['st'];
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    $result['sst'];
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    '0';
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    $result['bit'];
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    $result['rt'];
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    $result['it'];
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    $result['dt'];
                    ?>
                </td>

                <td align="center" style="background: white;color: #3926ee"> 
                <?=
                    $result['spt'];
                    ?>
                </td>

                <td align="center" style="background: white;color: #3926ee">
                     <?=
                    $result['wlt'];
                    ?>
                        
                </td>
                         
                <td rowspan="" align="center">
                     <?=
                    $result['at'];
                    ?>
                </td>
               
                <td rowspan="" align="center">
                    <?=
                    $result['gpa'];
                    ?>
                </td>

                <td rowspan="" align="center">
                    <?=
                    $result['totalmark'];
                
                ?>
                </td>
                
          
            </tr>


 <?php } ?>
          
  
            
             

<!-- 
            <tr>
                <td><?=
                   'asd';
                    ?>
                </td>
                <td align="center"><?= 'asd'; ?></td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    'asd';
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    'asd';
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee"><?=
                    'asd';
                    ?>
                </td>
                <td align="center" style="background: white;color: #3926ee">
                    <?=
                    'asd';

                    ?>                        
                </td>

                <td align="center" style="background: white;color: #3926ee">100</td>
                <td align="center">100</td>
                <td align="center">9</td>
                <td align="center">10</td>
               <td align="center">11</td> switch case use here... 

            </tr>
 -->
          
     

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
