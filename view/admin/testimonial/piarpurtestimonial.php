
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
$result = $testimonial->set($_POST)->insert();

/*echo "<pre>";
var_dump($result);
die();*/

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


                <h1 class="text-center" style="color: green;font-size:50px;">পিয়ারাপুর উচ্চ বিদ্যালয়  </h2>
                <p class="text-center">স্থাপিতঃ ১৯১৭ ইং  বিদ্যালয়  কোডঃ 6005, EIIN No:- 121106, Mpo Code:- 8702131301</p>
                <h4 class="text-center" style="color: ">ডাকঘরঃ বোয়ালী, উপজেলাঃ গাইবান্ধা সদর, গাইবান্ধা ।   </h3>
                <p class="text-center">স্নারক নংঃ  জে.এস.সি  কেন্দ্র  কোডঃ গাই-ডি, ৫৫৪ <br>
                    এস.সি.সি কেন্দ্র  কোডঃ গাই-এফ, ৫৮৫  <br>
                   ইমেইলঃ pearapurhs60@gmail.com
                </p>

                <div style="text-align: center; padding-right:" class="form-group">
                    <img style="border-radius:50%" src="assets/front/images/Logo.jpg" width="100">
                </div>
                <h1 class="text-center" style="color: #2559ee">প্রশংসা পত্র  </h3>
                <hr />

            <?php
            
                if(isset($_SESSION['success'])){
                    echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                    unset($_SESSION['success']);
                }
               
            ?>

                <p style="text-align:justify; font-size:16px;"> আমি এই মর্মে  প্রশংসা পত্র প্রদান করিতেছি যে, <strong><?= $_POST['name']; ?> </strong> পিতা  <strong><?= $_POST['father']; ?>  </strong> মাতা <strong><?= $_POST['mother']; ?>  </strong>গ্রাম   <strong><?= $_POST['village']; ?> </strong> ডাকঘর   <strong><?= $_POST['post']; ?> </strong> থানা   <strong><?= $_POST['thana']; ?> </strong> জেলা   <strong><?= $_POST['district']; ?> </strong>   অত্র  বিদ্যালয়  হইতে <strong><?= $_POST['year']; ?> </strong> সালে  দিনাজপুর   মাধ্যমিক  ও  উচ্চ  মাধ্যমিক  শিক্ষা  বোর্ডের   অধীনে  অনুষ্ঠিত  এস.এস.সি পরীক্ষায় অংশ  গ্রহণ  করিয়া জিপিএ <strong><?= $_POST['gpa']; ?> </strong> পাইয়া  উত্তীর্ণ  হইয়াছে  । সে   <strong><?= $_POST['department']; ?> </strong> শাখার   <strong><?= $_POST['sex']; ?>  </strong>  ছিল । তাহার  উক্ত  পরীক্ষার রেজিস্ট্রেশন  নাম্বার <strong><?= $_POST['reg']; ?>  </strong>  রোল  নাম্বার <strong><?= $_POST['roll']; ?> </strong>, বিদ্যালয়ের  নথিপত্র  মোতাবেক  তাহার  জন্ম  তারিখ <strong><?= $_POST['birth_date']; ?> </strong> ইং । 

                    <p style=" font-size:16px;">আমার  জানা  মতে  তাহার  স্বভাব  ও   চরিত্র  উত্তম  । এখানে
                অধ্যায়নরত  অবস্থায়  সে  কখনো  বিদ্যালয়ের  আইন  শৃঙ্খলা  অথবা  রাষ্ট্র  বিরোধী  কার্যকলাপে  অংশ  গ্রহণ  করে  নাই  ।</p>

                     <p style=" font-size:16px;">আমি  তাহার  জীবনের  সর্বাঙ্গীন  উন্নতি  কামনা  করি ।</p>

                     <br>
                     <br>
                     <br>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"  style=" font-size:16px;">
                            <p>আই.সি.টি. ইনচার্জ:</p>
                            <p>  তারিখ :- <?php echo date('Y-m-d'); ?>   </p>
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="form-group" style="text-align:right; font-size:16px;">
                            <p style="padding-right:95px;">  প্রধান শিক্ষক:    </p>
                            <p style="padding-right:60px;">  পিয়ারাপুর উচ্চ বিদ্যালয়    </p>
                            <p style="padding-right:163px;">  তারিখ :- <?php echo date(''); ?>   </p>
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

