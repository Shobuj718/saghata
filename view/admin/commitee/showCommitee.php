<?php


 include_once '../includes/header.php'; 
 include_once '../../../vendor/autoload.php';

 use App\Admin\Commitee\Commitee;

 $id = $_GET['show'];

 $commitee = new Commitee();
 $result = $commitee->showCommitee($id);
// echo $id;
// var_dump($result);
//die();


/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 16-Nov-17
 * Time: 12:17 PM
 */
// error_reporting(0);

// $db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
// $id = $_GET['show'];
//                echo $id;
//                var_dump($id);
//                die();
// $stm =  $db->prepare("SELECT * FROM `teacher_data` WHERE unique_id = :id");
// $stm->bindValue(':id', $id, PDO::PARAM_STR);
// $stm->execute();
// $result = $stm->fetch(PDO::FETCH_ASSOC);
//use $results

?>



        <br />
        <h2 style="text-align: center;padding-right:50px" ><strong>Commitee  তথ্যাবলী</strong></h2>

        <h3 style="text-align: center; padding-right:50px">Commitee  ছবি</h3>
        <div style="text-align: center; padding-right:50px" class="form-group">
            <img src="view/admin/uploads/commitee/<?php echo $result['image']?>" class="img-rounded" width="100" alt="no image">

        </div>

        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="col-md-4 col-md-offset-2">
                        <div class="form-group">
                            <h4>শিক্ষকের নাম </h4>
                            <h4>প্রতিষ্ঠানে পদবী </h4>
                            <h4>শিক্ষাগত যোগ্যতা</h4>
                            <h4>যোগদানের তারিখ</h4>
                            <h4>অবসরের তারিখ</h4>
                         </div>
                    </div>
                    <div class="col-md-4 col-md-offset-2">
                        <div class="form-group">
                            <h4><?= $result['name']; ?></h4>
                            <h4><?= $result['designation']; ?></h4>
                            <h4><?= $result['eduquali']; ?></h4>
                            <h4><?= $result['join_date']; ?></h4>
                            <h4><?= $result['retire_date']; ?></h4>
                         </div>
                    </div>
                </div>
            </div>


        </div>
        <h3 style="text-align: center;padding-right:50px" ><strong>ব্যক্তিগত তথ্যাবলী</strong></h3>
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="col-md-4 col-md-offset-2">
                        <div class="form-group">
                            <h4>জন্ম তারিখ </h4>
                            <h4>রক্তের গ্রুপ </h4>
                            <h4>ধর্ম</h4>
                            <h4>ইমেইল</h4>
                            <h4>মোবাইল নম্বর </h4>
                            <h4>জাতীয় পরিচয় পত্র </h4>
                         </div>
                    </div>
                    <div class="col-md-4 col-md-offset-2">
                        <div class="form-group">
                            <h4><?= $result['birth_date']; ?></h4>
                            <h4><?= $result['blood']; ?></h4>
                            <h4><?= $result['religion']; ?></h4>
                            <h4><?= $result['email']; ?></h4>
                            <h4><?= $result['mobile']; ?></h4>
                            <h4><?= $result['nid']; ?></h4>
                         </div>
                    </div>
                </div>
            </div>


        </div>

        <h3 style="text-align: center;padding-right:50px" ><strong>বর্তমান ঠিকানা</strong></h3>
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="col-md-4 col-md-offset-2">
                        <div class="form-group">
                            <h4>বাড়ির নাম </h4>
                            <h4>বাড়ি / হোল্ডিং নাম্বার </h4>
                            <h4>রোড নাম্বার</h4>
                            <h4>গ্রাম / পাড়া / মহল্লার নাম</h4>
                            <h4>ডাকঘর </h4>
                            <h4>ইউনিয়ন / পৌরসভার নাম</h4>
                            <h4>উপজেলা / থানার নাম</h4>
                            <h4>জেলার নাম</h4>
                            <h4>পোষ্ট কোড নাম্বার</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-2">
                        <div class="form-group">
                            <h4><?= $result['homeName']; ?></h4>
                            <h4><?= $result['holdingNum']; ?></h4>
                            <h4><?= $result['roadName']; ?></h4>
                            <h4><?= $result['village']; ?></h4>
                            <h4><?= $result['postoffice']; ?></h4>
                            <h4><?= $result['unione']; ?></h4>
                            <h4><?= $result['thana']; ?></h4>
                            <h4><?= $result['district']; ?></h4>
                            <h4><?= $result['postcode']; ?></h4>
                        </div>
                    </div>
                </div>
            </div>


        </div>


<?php  include '../includes/footer.php' ?>