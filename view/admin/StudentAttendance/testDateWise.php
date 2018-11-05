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

$db = new PDO('mysql:host=localhost;dbname=sphsg;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


$class = $_POST['class'];
$shift = $_POST['shift'];
$branch = $_POST['branch'];
$department = $_POST['department'];
$dateSelect = $_POST['dateSelect'];

//             $sql =  "SELECT student_data.name, student_data.class, student_data.shift, student_data.department, DISTINCT tbl_attendance.att_time
//FROM student_data
//INNER JOIN tbl_attendance ON student_data.class_roll = tbl_attendance.roll";

//$query = "SELECT distinct att_time from tbl_attendance WHERE class LIKE :class OR class_roll LIKE :roll";
$query = "SELECT * FROM tbl_attendance WHERE class LIKE :classes AND  shift LIKE :shifted AND branch LIKE :branches AND department LIKE :department AND att_time LIKE :dateSelect order by id asc ";
$stmt = $db->prepare($query);
$stmt->bindValue(':classes', '%' . $class . '%', PDO::PARAM_INT);
$stmt->bindValue(':shifted', '%' . $shift . '%', PDO::PARAM_INT);
$stmt->bindValue(':branches', '%'. $branch. '%', PDO::PARAM_STR);
$stmt->bindValue(':department', '%'. $department. '%', PDO::PARAM_STR);
$stmt->bindValue(':dateSelect', '%'. $dateSelect . '%', PDO::PARAM_STR);
//$stmt->bindValue(':roll', '%' . $roll . '%', PDO::PARAM_STR);
$stmt->execute();

?>

<div class="col-md-12">

  <div class="row">
    <div class="content">

    <form action="view/admin/StudentAttendance/attendanceUpdateAction.php" method="post">
        <?php
        $sl = 1;
        if ($stmt->rowCount() > 0) {
        $results = $stmt->fetchAll();
        ?>
        <table class="table table-bordered table-responsive" style="background:white; ">

            <tr>
                <td colspan="12" style="text-align:center;color:green;"><h2><center>Update Student Attendance</center></h2><br></td>


            </tr>
        



            <tr>
                <th class="text-center">Sl</th>
<!--                <th class="text-center">Name</th>-->
                <th class="text-center">Class</th>
                <th class="text-center">Shift</th>
                <th class="text-center">Branch</th>
                <th class="text-center">Department</th>
                            <th class="text-center">Date</th>
                <!--            <th class="text-center">Year</th>-->
                <th class="text-center">Roll</th>
<!--                <th class="text-center">Image</th>-->
                <th class="text-center">Action</th>
            </tr>
            <?php
//            $sl = 1;
//            if ($stmt->rowCount() > 0) {
//                $results = $stmt->fetchAll();

                foreach ($results as $result) {
                    ?>
                    <tr class="text-center">
                        <td><?php echo $sl++?></td>
<!--                        <td>--><?php //echo $result['student_name']?><!--</td>-->
                        <td><input type="hidden" name="class" value="<?php echo $result['class']?>"  > <?php echo $result['class']?></td>
                        <td><input type="hidden" name="shift" value="<?php echo $result['shift']?>"> <?php echo $result['shift']?></td>
                        <td><input type="hidden" name="branch" value="<?php echo $result['branch']?>"> <?php echo $result['branch']?></td>
                        <td><input type="hidden" name="department" value="<?php echo $result['department']?>"> <?php echo $result['department']?></td>
                        <td><input type="hidden" name="dateSelect" value="<?php echo $result['att_time']?>"> <?php echo $result['att_time']?></td>
                        <!--                <td>--><?php //echo $result['student_id']?><!--</td>-->
                        <!--                <td>--><?php //echo $result['year']?><!--</td>-->
                        <td><?php echo $result['roll']?></td>

<!--                        <td>-->
<!--                            <img src="../uploads/--><?php //echo $result['student_image']?><!--" width="100" alt="no image">-->
<!--                        </td>-->
                        <td>
                            <input type="radio" name="attend[<?php echo $result['roll']; ?>]" value="present" <?php if($result['attend'] == 'present'){echo 'checked="checked"';} ?> >P
                            <input type="radio" name="attend[<?php echo $result['roll']; ?>]" value="absent"<?php if($result['attend'] == 'absent'){echo 'checked="checked"';} ?>>A
                            <input type="radio" name="attend[<?php echo $result['roll']; ?>]" value="leave"<?php if($result['attend'] == 'leave'){echo 'checked="checked"';} ?>>L
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
        <?php } } else { 
                /*<strong style="font-size: 25px; color: red">No Data available..</strong>
                <a class="btn btn-primary" href="view/admin/StudentAttendance/searchByDateWise.php">Back</a><br />*/

                $_SESSION['attUpErr'] = "Value does not match !!!";
                echo "<script>window.location='view/admin/StudentAttendance/searchByDateWise.php'</script>";
        } ?>
        </table>

        <tr>
            <td colspan="">
                <input type="submit" class="btn btn-info" name="submit" value="Save">
                <input type="reset" class="btn btn-danger" name="reset" value="Reset">
            </td>
        </tr>

    </form>
    </div>
  </div>
</div>



<?php include_once '../includes/footer.php'?>