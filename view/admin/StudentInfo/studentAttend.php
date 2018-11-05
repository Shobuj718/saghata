<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 21-Nov-17
 * Time: 10:12 AM
 */
include_once '../inc/header.php';

?>


<?php



?>

    <div class="col-md-8" style="width: 77.666667%;">

    <div class="form-group pull-left" style="padding: 20px 0px">
        <a class="btn btn-primary" href="studentAttend.php">Attendance</a>

    </div>

    <form class="navbar-form navbar-right" action="searchID.php" method="post" role="search">
        <div class="form-group">
            <input type="text" name="studentSearch" class="form-control" placeholder="Student ID...">
        </div>
        <button type="submit" name="submit" class="btn btn-default2">Submit</button>
<!--        <button type="submit" class="btn btn-default1">Logout</button>-->
    </form>


    <form action="attendanceTaken.php" method="post">
    <table class="table table-bordered table-responsive" style="background: white">

        <tr>
            <td colspan="12"><h2><center>Student Attendance</center></h2></td>

        </tr>

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

        $stmt = $db->query('SELECT * FROM student_data order by id DESC ');
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //use $results

        ?>



        <tr>
            <th class="text-center">Sl</th>
            <th class="text-center">Name</th>
            <th class="text-center">Class</th>
<!--            <th class="text-center">Shift</th>-->
<!--            <th class="text-center">Branch</th>-->
<!--            <th class="text-center">Department</th>-->
<!--            <th class="text-center">ID</th>-->
<!--            <th class="text-center">Year</th>-->
            <th class="text-center">Roll</th>
            <th class="text-center">Image</th>
            <th class="text-center">Action</th>
        </tr>
        <?php
        $sl = 1;
        foreach ($results as $result) {
            ?>
            <tr class="text-center">
                <td><?php echo $sl++?></td>
                <td><?php echo $result['student_name']?></td>
                <td><?php echo $result['class']?></td>
<!--                <td>--><?php //echo $result['shift']?><!--</td>-->
<!--                <td>--><?php //echo $result['branch']?><!--</td>-->
<!--                <td>--><?php //echo $result['department']?><!--</td>-->
<!--                <td>--><?php //echo $result['student_id']?><!--</td>-->
<!--                <td>--><?php //echo $result['year']?><!--</td>-->
                <td><?php echo $result['class_roll']?></td>

                <td>
                    <img src="../uploads/<?php echo $result['student_image']?>" width="100" alt="no image">
                </td>
                <td>
                    <input type="radio" name="attend[<?php echo $result['class_roll']; ?>]" value="present">P
                    <input type="radio" name="attend[<?php echo $result['class_roll']; ?>]" value="absent">A
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
        <?php } ?>
        <tr>
            <td colspan="">
                <input type="reset" class="btn btn-info" name="reset" value="Reset">
                <input type="submit" class="btn btn-primary" name="submit" value="Save">
            </td>
        </tr>

    </table>
    </form>



<?php include_once '../inc/footer.php'?>