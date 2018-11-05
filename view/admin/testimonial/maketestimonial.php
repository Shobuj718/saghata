
<?php 
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 26-Nov-17
 * Time: 9:17 AM
 */


if(!isset($_SESSION)){
    session_start();
}

include_once '../includes/header.php'; 
include_once '../../../vendor/autoload.php';

use App\admin\Testimonial\Testimonial;

$id    = $_POST['student_id'];
$class = $_POST['class'];


$testimonial = new Testimonial();
$data = $testimonial->set($_POST);//->store();

$result = $testimonial->findTestimonial($id,$class);

/*echo "<pre>";
var_dump($result);
die();
*/
?>

<style>
    #printableArea{
        background-image: url(assets/front/images/DSC04407.);
        opacity: 0.8;
         hover:0.1;
    }
</style>

<div class="col-md-12">

  <div class="container" style="width: 100%; background: white">
    <div class="row">
        <div class="col-md-12" id="printableArea">
            <!-- <form action="#" method="post" enctype="multipart/form-data"> -->


                <h3 style="text-align:center;color:green;">সাঘাটা পাইলট উচ্চ বিদ্যালয় </h3>
            <p style="text-align:center;">ডাকঘরঃ সাঘাটা, উপজেলাঃ সাঘাটা, জেলাঃ গাইবান্ধা। </p>

                <div style="text-align: center; padding-right:" class="form-group">
                    <img style="border-radius:50%" src="http://localhost/news/saghata/assets/front/images/sphsg.png" width="100">
                </div>
                <h1 class="text-center" style="color: #2559ee">প্রশংসা পত্র  </h3>
                <hr />

                <p style="text-align:justify; font-size:16px;"> আমি এই মর্মে  প্রশংসা পত্র প্রদান করিতেছি যে, <strong><?= $result['student_name']; ?> </strong> পিতা  <strong><?= $result['father_name']; ?>  </strong>গ্রাম   <strong><?= $result['lasting_village']; ?> </strong> ডাকঘর   <strong><?= $result['lasting_postoffice']; ?> </strong> থানা   <strong><?= $result['lasting_thana']; ?> </strong> জেলা   <strong><?= $result['lasting_district']; ?> </strong>  সে ফাঁপোর ইউনিয়ন পল্লীমঙ্গল উচ্চ বিদ্যালয়  অধীন হইতে <strong><?= $_POST['year']; ?> </strong> সালে   অনুষ্ঠিত  <?= $_POST['class']; ?> srenir barshik পরীক্ষায় অংশ  গ্রহণ  করিয়া জিপিএ  <strong><?= $_POST['gpa']; ?> </strong> পাইয়া  উত্তীর্ণ  হইয়াছে  ।

                 <!-- সে   <strong><?= $result['department']; ?> </strong> শাখার  ছাত্র/ছাত্রী    ছিল ।  -->

                 বিদ্যালয়ের  নথিপত্র  মোতাবেক  তাহার  জন্ম  তারিখ <strong><?= $result['birth_day']; ?>/<?= $result['birth_month']; ?>/<?= $result['birth_year']; ?> </strong> ইং । 

                    <p style=" font-size:16px;">আমার  জানা  মতে  তাহার  স্বভাব  ও   চরিত্র  উত্তম  । এখানে
                অধ্যায়নরত  অবস্থায়  সে  কখনো  বিদ্যালয়ের  আইন  শৃঙ্খলা  অথবা  রাষ্ট্র  বিরোধী  কার্যকলাপে  অংশ  গ্রহণ  করে  নাই  ।</p>

                     <p style=" font-size:16px;">আমি  তাহার  জীবনের  সর্বাঙ্গীন  উন্নতি  কামনা  করি ।</p>

                     <br>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"  style=" font-size:16px;">
                            <p>আই.সি.টি. ইনচার্জ</p>
                            <p>  তারিখ :- <?php echo date('Y-m-d'); ?>   </p>
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="form-group" style="text-align:right; font-size:16px;">
                            <p style="padding-right:95px;">  প্রধান শিক্ষক:    </p>
                            <p>  ফাঁপোর ইউনিয়ন পল্লীমঙ্গল উচ্চ বিদ্যালয়    </p>
                            <p style="padding-right:;">  তারিখ :- <?php echo '____/____/________'; ?>   </p>
                        </div>
                    </div>                    
                </div>

        </div>
    </div>
  </div>
<input type="button" class="btn btn-info" onclick="printDiv('printableArea')" value="print testimonial" />
</div>


<script>
    function printPageArea(areaID){
        var printContent = document.getElementById(areaID);
        var WinPrint = window.open('', '', 'width=900,height=650');
        WinPrint.document.write(printContent.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    }
</script>

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

