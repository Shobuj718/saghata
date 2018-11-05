<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 20-Nov-17
 * Time: 4:30 PM
 */

// Connect to MySQL via PDO

//var_dump($_POST);

error_reporting(0);

$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


$var1 = $_POST['studentSearch'];


//$query = "SELECT * FROM student_data WHERE student_id LIKE :search OR student_name LIKE :search";
$query = "SELECT * FROM student_data WHERE student_id LIKE :search OR student_name LIKE :name";
$stmt = $db->prepare($query);
$stmt->bindValue(':search', '%' . $var1 . '%', PDO::PARAM_INT);
$stmt->bindValue(':name', '%' . $var1 . '%', PDO::PARAM_INT);
$stmt->execute();
//$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//if ($stmt->rowCount() > 0) {
//    $result = $stmt->fetchAll();
//
//    foreach( $result as $row ) {
//        //echo $row["student_id"]."<br/>";
//        //echo $row["student_name"];

?>
        <?php include_once '../inc/header.php'; ?>
<form class="navbar-form navbar-right" action="searchID.php" method="post" role="search">
    <div class="form-group">
        <input type="text" name="studentSearch" class="form-control" placeholder="Student ID...">
    </div>
    <button type="submit" name="submit" class="btn btn-default2">Submit</button>
<!--    <button type="submit" class="btn btn-default1">Logout</button>-->
</form>
<div class="col-md-8" style="width: 77.666667%;">

    <?php
    if ($stmt->rowCount() > 0) {
    $results = $stmt->fetchAll();
    ?>

        <table class="table table-bordered table-responsive" style="background: white">

            <tr>
                <td colspan="12"><h2><center>একাডেমিক তথ্যাবলী</center></h2></td>

            </tr>





            <tr>
                <th class="text-center">Sl</th>
                <th class="text-center">Name</th>
                <th class="text-center">Class</th>
                <th class="text-center">Shift</th>
                <th class="text-center">Branch</th>
                <th class="text-center">Department</th>
                <th class="text-center">ID</th>
                <th class="text-center">Roll</th>
                <th class="text-center">Year</th>
                <th class="text-center">Image</th>
                <th class="text-center">Action</th>
            </tr>
            <?php
            $sl = 1;


            foreach( $results as $result ) {
                ?>
                <tr class="text-center">
                    <td><?php echo $sl++?></td>
                    <td><?php echo $result['student_name']?></td>
                    <td><?php echo $result['class']?></td>
                    <td><?php echo $result['shift']?></td>
                    <td><?php echo $result['branch']?></td>
                    <td><?php echo $result['department']?></td>
                    <td><?php echo $result['student_id']?></td>
                    <td><?php echo $result['class_roll']?></td>
                    <td><?php echo $result['year']?></td>

                    <td>
                        <img src="../uploads/<?php echo $result['student_image']?>" width="100" alt="no image">
                    </td>
                    <td>
                        <!--                                    <a class="btn btn-info" href="#">Show</a>-->
                        <!--                                    <a class="btn btn-primary" href="#">Edit</a>-->
                        <!--                                    <a class="btn btn-danger" href="#">Delete</a>-->
                        <a style="color: black" class="text-info" href="showStudent.php?show=<?php echo $result['id']; ?>">View</a>
                        <a  class="text-primary" href="editStudent.php?edit=<?php echo $result['id']; ?>">Edit</a>
                        <a onclick="return confirm('Are you sure to Delete'); " class="text-danger" href="deleteStudent.php?del=<?php echo $result['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } } else{ ?>
            <h3 style="color:red;text-align: center" >Student name or id does not match!</h3>
            <a class="btn btn-primary" href="allstudent.php">Back</a>
        <?php } ?>

        </table>
</div>


        <?php  include '../inc/footer.php' ?>



    <?php //}  ?>

<!-- else {-->
<!--    echo 'There is nothing to show';-->
<!--}-->
<!--?>-->
<!--//while ($r=$stmt->fetch(PDO::FETCH_ASSOC)) {-->
<!--//    echo"<pre>".print_r($r,true)."</pre>";-->
<!--//}-->