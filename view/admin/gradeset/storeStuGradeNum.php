<?php 

include_once '../includes/header.php';
include_once '../../../vendor/autoload.php' ;

use App\admin\Gradeset\Gradeset;


// echo "<pre>";
// var_dump($_POST);
// die();

$gradeset = new Gradeset();

if($_POST['class'] == 'প্লে' || $_POST['class'] == 'নার্সারি' || $_POST['class'] == 'কে জি' || $_POST['class'] == '১ম' || $_POST['class'] == '২য়' || $_POST['class'] == '৩য়' || $_POST['class'] == '৪র্থ' || $_POST['class'] == '৫ম'){

    $class = $_POST['class'];
    $year = $_POST['year'];
    $results = $gradeset->playToFiveStuGpa($class, $year);
}

elseif($_POST['class'] == '৬ষ্ঠ' || $_POST['class'] == '৭ম' || $_POST['class'] == '৮ম'){
    $class = $_POST['class'];
    $year = $_POST['year'];
    $results = $gradeset->sixToEightGpaNum($class, $year);
}

elseif($_POST['class'] == 'নবম' || $_POST['class'] == '১০ম'){
    $class = $_POST['class'];
    $year = $_POST['year'];
    $results = $gradeset->sscStuGpaNum($class, $year);
}

elseif($_POST['class'] == 'একাদশ' || $_POST['class'] == 'দ্বাদশ'  ){
    $class = $_POST['class'];
    $year  = $_POST['year'];
    $results = $gradeset->hscStuGpaNum($class, $year);
}


//$class = $_POST['class'];
//$year = $_POST['year'];

//$gradeset = new Gradeset();
//$results = $gradeset->set($_POST);//->selectStuGpaNum();
// $results = $gradeset->selectStuGpaNum2($class, $year);//->selectStuGpaNum();

 foreach ($results as $data) {
    //echo  $data['totalmark']." ";
    //$gpt[] = $data['totalmark']. '+' .$data['gpa'];
    $gpt[] = $data['totalmark'];
    $gptt[]  = $data['gpa'];
 }

 
 $c = array();
foreach (array_keys($gpt + $gptt) as $key) {
    $c[$key] = $gpt[$key] + $gptt[$key];
}

 //after sor for Ascending 
 //echo " <hr>Total number and GPA summation = ";
rsort($c);
 foreach ($c as $gpatotalmark) {
     //echo $gpatotalmark."<br />";
 }


foreach($gpt as $gp){
    $gpnum = $gp['gpa'];
}
//echo $gpnum."<br />";
$totalnum = $studentNumber['gpa'];
rsort($gpt);
rsort($gptt);

//echo "<pre>";
//var_dump($results);
//die();

 

 

?>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    সকল শিক্ষার্থীদের মোট নম্বর এবং জিপিএ (শ্রেণী ভিত্তিক)
                </h1>
                <ol class="breadcrumb">
                    <li><a href="view/admin/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="javascript:void(0)">Tables</a></li>
                    <li class="active">Data tables</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">


                        <div class="box">
                            <div class="box-header">
                    <?php  
                      if($_SESSION['type'] == 'administrator'){
                  ?>
                                <a href="javascript:void(0);" id="print_button1" style="width: 120px; padding: 5px 8px 5px 8px;text-align: center;float: right;background-color: #02A6D8;color: #fff;text-decoration: none; margin: 2px;" onclick="printPageArea('wrapper')">Print Table</a>

                    <?php } ?>
                                <a href="view/admin/gradeset/allStuGradeNum.php"><h3 class="box-title pull-right btn btn-info">Again search</h3></a>
                            </div>

                                        


                            <!-- /.box-header -->
                            <div class="box-body" id="wrapper">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Class</th>
                                        <th>Student ID</th>
                                        <th>Class_roll</th>
                                        <th>Total Number </th>
                                        <th>GPA</th>
                                        <th><!-- Position3.2863.214 --></th>
                                         <th>Action</th>
                                    </tr>
                                    </thead>
                                   <tbody>
                                <?php
                                $sl = 1;
                                foreach ($results as $result) {
                                    ?>
                                       <tr>
                                           <td><?php echo $sl++?></td>
                                            <td><?php echo $_POST['class']?></td>
                                            <td><?php echo $result['student_id']?></td>
                                            <td><?php echo $result['class_roll']?></td>
                                            <td><?php echo $result['totalmark']?></td>
                                            <td><?php echo number_format($result['gpa'],2); ?></td>
                                            <td>


                <?php 

                    //this is gpa compare section...
                    $total = floatval($totalnum);

                     for($i = 0; $i<count($arr); $i++){
                        $merit = $i;

                        if($total == $arr[$i]){

                            $merit += 1;
                            $grade = number_format($gpnum);
                            // $total = number_format($total, 2);
                            // echo "Position(".$total.") = ".$merit."<br />";
                            // echo "Max GPA(".$max.") = ".$maxNum."<br />";
                            // echo "Position 1 = ".$maxNum;

            // Here GPA and Total Number summation and compare all number for merit position
                            $total2 = number_format($total2, 2);
                            echo "Your Merit <br> Position(".$totalmark.") = ".$merit2."<br />";
                            echo "Your GPA = ".$gpa."<br />";
                            echo "<br>";
                            echo "Max GPA  = ".$maxNum."<br />";
                             
                            break;

                        }     
                        
                     }

                ?>


                                            </td>
                                              
                                            <td>
                    <!--                                    <a class="btn btn-info" href="#">Show</a>-->
                    <!--                                    <a class="btn btn-primary" href="#">Edit</a>-->
                    <!--                                    <a class="btn btn-danger" href="#">Delete</a>-->
                   <!--  <a class="btn btn-primary" href="javascript(void)">View</a> -->
                <?php  
                      if($_SESSION['type'] == 'user'){
                  ?>
                   <a class="btn btn-danger">Not Allowed</a>
                <?php } ?>

                <?php  
                    if($_SESSION['type'] == 'administrator'){
                ?>
                    <a  class="btn btn-info" href="view/admin/gradeset/editStuGradeNum.php?edit=<?php echo $result['unique_id']?>">Edit</a>
             
                    <a  class="btn btn-danger" onclick="return confirm('Are you sure to Delete'); "   href="view/admin/gradeset/deleteStuGradeNum.php?del=<?php echo $result['unique_id']?>">Delete</a>
                <?php } ?>
                                        </td>
                                       </tr>

                                <?php } ?>

                                   </tbody>

                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->




<?php  include '../includes/footer.php' ?>