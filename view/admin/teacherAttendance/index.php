<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 21-Nov-17
 * Time: 10:12 AM
 */
include_once '../includes/header.php';

?>


<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 16-Nov-17
 * Time: 12:17 PM
 */
error_reporting(0);

$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


$class = $_POST['class'];
$shift = $_POST['shift'];
$branch = $_POST['branch'];
$department = $_POST['department'];


//$query = "SELECT * FROM student_data WHERE class LIKE :class OR class_roll LIKE :roll";
// $query = "SELECT * FROM student_data WHERE class LIKE :classes AND  shift LIKE :shifted AND branch LIKE :branches AND department LIKE :department";
// $stmt = $db->prepare($query);
// $stmt->bindValue(':classes', '%' . $class . '%', PDO::PARAM_INT);
// $stmt->bindValue(':shifted', '%' . $shift . '%', PDO::PARAM_INT);
// $stmt->bindValue(':branches', '%'. $branch. '%', PDO::PARAM_STR);
// $stmt->bindValue(':department', '%'. $department. '%', PDO::PARAM_STR);
//$stmt->bindValue(':roll', '%' . $roll . '%', PDO::PARAM_STR);

$query = "SELECT * FROM teacher_data WHERE status=1 ";
$stmt = $db->prepare($query);
$results = $stmt->execute();

?>

   
<div class="col-md-12">

  <div class="row">
    <div class="content">

    <?php
    $sl = 1;
    if ($stmt->rowCount() > 0) {
    $results = $stmt->fetchAll();

    ?>

    <!-- <form action="view/admin/StudentAttendance/attendanceTaken.php" method="post"> -->
     <form action="" method="post">


        <table class="table table-bordered table-responsive" style="background: white">

            <tr>
                <td colspan="12" style="color:green;"><h2><center>Take Teacher Attendance</center></h2> 
                <?php echo "<hr>" ?>
                </td>

            </tr>





            <tr>
                <th class="text-center">Sl</th>
                <th class="text-center">Name</th>
                <th class="text-center">Designation</th>
                <th class="text-center">Training</th>
                <!--            <th class="text-center">ID</th>-->
                <!--            <th class="text-center">Year</th>-->
                <th class="text-center">Index_No</th>
                <th class="text-center">Image</th>
                <th class="text-center">Action</th>
            </tr>
            <?php
//            $sl = 1;
//            if ($stmt->rowCount() > 0) {
//            $results = $stmt->fetchAll();

            foreach ($results as $result) {
                ?>
                <tr class="text-center">
                    <td><?php echo $sl++?></td>
                    <td><?php echo $result['teacher_name']?></td>
                    <td><input type="hidden" name="class" value="<?php echo $result['designation']?>"> <?php echo $result['designation']?></td>
                    <td><input type="hidden" name="shift" value="<?php echo $result['training']?>"> <?php echo $result['training']?></td>
                    <td><input type="hidden" name="branch" value="<?php echo $result['index_number']?>"> <?php echo $result['index_number']?></td>
                      
                    <td>
                        <img class="img-rounded" src="view/admin/uploads/teacher/<?php echo $result['image']?>" width="80" alt="no image">
                    </td>
                    <td>
                        <input type="radio" name="attend[<?php echo $result['index_number']; ?>]" value="present">P
                        <input type="radio" name="attend[<?php echo $result['index_number']; ?>]" value="absent">A
                        <input type="radio" name="attend[<?php echo $result['index_number']; ?>]" value="leave">L
                    </td>
                    <!--                <td>-->
                    <!--                                    <a class="btn btn-info" href="#">Show</a>-->
                    <!--                                    <a class="btn btn-primary" href="#">Edit</a>-->
                    <!--                                    <a class="btn btn-danger" href="#">Delete</a>-->
                    <!--                    <a style="color: black" class="text-info" href="showStudent.php?show=--><?php //echo $result['id']; ?><!--">View</a>-->
                    <!--                    <a  class="text-primary" href="editStudent.php?edit=--><?php //echo $result['id']; ?><!--">Edit</a>-->
                    <!--                    <a onclick="return confirm('Are you sure to Delete'); " class="text-danger" href="deleteStudent.php?del=--><?php //echo $result['id']; ?><!--">Delete</a>-->
                    <!--                </td>-->
                </tr>
            <?php } } else { ?>
            <strong style="font-size: 25px; color: red">No Data available..</strong>
                <a class="btn btn-primary" href="view/admin/teacherAttendance/index.php">Back</a><br />
        <?php } ?>
        </table>

        <tr>
                <td colspan="">
                    <input type="submit" class="btn btn-info" name="submit" value="Save">
                    <input type="reset" class="btn btn-danger" name="reset" value="Reset">
                </td>
            </tr>

    </form>
    <?php
        header('location:view/admin/teacherAttendance/index.php');
    ?>
   </div> 
  </div> 
</div> 



<?php include_once '../includes/footer.php'?>