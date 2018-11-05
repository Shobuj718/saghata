
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

$testimonial = new Testimonial();
//$result = $testimonial->set($_POST);//->insert();

$id = $_POST['student_id'];
$result = $testimonial->findTC($id);

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

           <!--  <div class="row">
                 <div class="col-md-3">
                     <div style="text-align: right; padding-right:" class="form-group">
                        <img style="border-radius:50%" src="assets/front/images/Logo.jpg" width="100">
                    </div>
                 </div>
                 <div class="col-md-9">
                     <div class="form-group">
                         <h1 class="" style="color: green;font-size:30px;">ফাঁপোর ইউনিয়ন পল্লীমঙ্গল উচ্চ বিদ্যালয় </h2>
                         <p class="" style="padding-left:22px;">স্থাপিতঃ ১৯৬৯  ইং  বিদ্যালয়  কোডঃ 6005, EIIN No:- 121106, Mpo Code:- 8702131301</p>
                         <h4 class="" style="padding-left:55px;">ডাকঘরঃ বগুড়া , উপজেলাঃ বগুড়া সদর, জেলাঃ বগুড়া ।</h3>
                         <p class="" style="padding-left:100px;">
                            ইমেইলঃ f.u.pallimongalhighschoolbogra@gmail.com </p>
                            <p style="padding-left:160px;">
                             মোবাইলঃ ০১৭১৬৩০৩৬২৪ 
                         </p>
                     </div>
                 </div>
            </div> -->

           <h3 style="text-align:center;color:green;">সাঘাটা পাইলট উচ্চ বিদ্যালয় </h3>
            <p style="text-align:center;">ডাকঘরঃ সাঘাটা, উপজেলাঃ সাঘাটা, জেলাঃ গাইবান্ধা। </p>

            <div style="text-align: center; padding-right:" class="form-group">
                <img style="border-radius:50%" src="http://localhost/news/saghata/assets/front/images/sphsg.png" width="100">
            </div>

               
                <h1 class="text-center" style="color: #2559ee">ছাড়পত্র  </h3>
                <hr />

            <?php
            
                if(isset($_SESSION['success'])){
                    echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                    unset($_SESSION['success']);
                }
               
            ?>

                <p style="text-align:justify; font-size:16px;"> এতদ্বারা প্রত্যয়ন করা যাইতেছে যে, <?= $result['student_name']; ?>   পিতা  <?= $result['father_name']; ?>    মাতা <?= $result['mother_name']; ?>   গ্রাম   <?= $result['lasting_village']; ?>   ডাকঘর   <?= $result['lasting_postoffice']; ?>   থানা   <?= $result['lasting_thana']; ?>   জেলা   <?= $result['lasting_district']; ?>     অত্র বিদ্যালয়ের <?= $_POST['student']; ?>       ছিল ।  সে <?= $_POST['leaving_date']; ?>   তারিখে উক্ত বিদ্যালয় পরিত্যাগ করিয়াছে ।  সে <?= $_POST['class']; ?>   শ্রেণীতে অধ্যায়ন করিত এবং বিগত বার্ষিক পরীক্ষায় <?= $_POST['class']; ?>   শ্রেণী হইতে <?= $_POST['up_class']; ?>   শ্রেণীতে জিপিএ   <?= $_POST['gpa']; ?>    পাইয়া  উত্তীর্ণ হইয়াছে/হয় নাই ।  সে বিদ্যালয়ের বেতন ও অন্যান্য প্রাপ্য টাকা <?= $_POST['cl_date']; ?>   তারিখ  পর্যন্ত পরিশোধ করিয়াছে ।  বিদ্যালয়ের  নথিপত্র  মোতাবেক  তাহার  জন্ম  তারিখ <?= $_POST['birth_date']; ?>   ইং । 

                    <p style=" font-size:16px;">আমার  জানা  মতে  তাহার  স্বভাব  ও   চরিত্র  উত্তম  । এখানে
                অধ্যায়নরত  অবস্থায়  সে  কখনো  বিদ্যালয়ের  আইন  শৃঙ্খলা  অথবা  রাষ্ট্র  বিরোধী  কার্যকলাপে  অংশ  গ্রহণ  করে  নাই  ।</p>

                     <p style=" font-size:16px;">আমি  তাহার  জীবনের  সর্বাঙ্গীন  উন্নতি  কামনা  করি ।</p>

                     <br>
                     <br>
                     <br>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"  style=" font-size:16px;">
                            <p>আই.সি.টি. ইনচার্জ </p>
                            <p>  তারিখ :- <?php echo date('Y-m-d'); ?>   </p>
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="form-group" style="text-align:right; font-size:16px;">
                            <p style="padding-right:95px;">  প্রধান শিক্ষক    </p>
                            <p style="padding-right:60px;">  ফাঁপোর ইউনিয়ন পল্লীমঙ্গল উচ্চ বিদ্যালয়     </p>
                            <p style="padding-right:125px;">  তারিখ :- <?php echo date(''); ?>   </p>
                        </div>
                    </div>                    
                </div>


        </div>
    </div>
  </div>
  <br>
<input type="button" class="btn btn-info" onclick="printDiv('printableArea')" value="print testimonial" />
</div>

<script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;

     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

</script>
<!-- <script src="jquery.PrintArea.js"></script>

<script>
$(document).ready(function(){
    $("#printButton").click(function(){
        var mode = 'iframe'; //popup
        var close = mode == "popup";
        var options = { mode : mode, popClose : close};
        $("div.printableArea").printArea( options );
    });
});
</script> -->

<?php  include '../includes/footer.php' ?>

