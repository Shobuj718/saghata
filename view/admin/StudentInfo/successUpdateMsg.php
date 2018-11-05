<?php include_once '../inc/header.php'; ?>


<?php

    $id = $_GET['msg'];

//    $sex = $_POST['sex'];
//    $student_name = $_POST['student_name'];
//    $class = $_POST['class'];
    //$class = $_POST['class'];

    error_reporting(0);

    $db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    //$id = $_POST['id'];
    //echo $id;
    //                var_dump($id);
    //                die();
    $stm =  $db->prepare("SELECT * FROM `student_data` WHERE id = :id");
    $stm->bindValue(':id', $id, PDO::PARAM_STR);
    $stm->execute();
    $result = $stm->fetch(PDO::FETCH_ASSOC);
    //use $results

//die();
?>
    <!--       main form start here-->


    <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default2">Submit</button>
<!--        <button type="submit" class="btn btn-default1">Logout</button>-->
    </form>

    <div class="col-md-8" style="width: 77.666667%;">


    <table class="table table-bordered table-responsive" style="background: white">

        <tr>
            <td colspan="12"><h2><center>একাডেমিক তথ্যাবলী</center></h2>
                <br>
            </td>

        </tr>


        <tr>
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

        <tr class="text-center">
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
            <td><a class="btn btn-primary" href="singleStuShow.php?singleShow=<?php echo $result['id']; ?>">View</a></td>

        </tr>

    </table>



<?php  include '../inc/footer.php' ?>