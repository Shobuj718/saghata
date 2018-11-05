<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 21-Nov-17
 * Time: 10:12 AM
 */
include_once '../inc/header.php';

?>
        <!--       main form start here-->


        <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default2">Submit</button>
<!--            <button type="submit" class="btn btn-default1">Logout</button>-->
        </form>

        <div class="col-md-8">
            <form method="post" action="rowInser.php" accept-charset="utf-8" align="center" enctype="multipart/form-data">
                <table width="747" border="0">

                    <tr>
                        <td colspan="9"><h2><center>একাডেমিক তথ্যাবলী</center></h2></td>

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

                    $stmt = $db->query('SELECT * FROM student_data');
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    //use $results

                    ?>

                    <table class="table-bordered">

                        <tr class="text-center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Class</th>
                            <th>Year</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                <?php
                    $sl = 1;
                    foreach ($results as $result) {
                ?>
                    <tr class="text-center">
                        <td><?php echo $sl++?></td>
                        <td><?php echo $result['student_name']?></td>
                        <td><?php echo $result['student_id']?></td>
                        <td><?php echo $result['department']?></td>
                        <td><?php echo $result['class']?></td>

                        <td>
                            <img src="../uploads/<?php echo $result['student_image']?>" width="100" alt="no image">
                        </td>
                        <td>
                            <a class="btn btn-info" href="#">Show</a>
                            <a class="btn btn-primary" href="#">Edit</a>
                            <a class="btn btn-danger" href="#">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                    </table>

                    <tr>
                        <td colspan="">
                            <input type="reset" class="btn btn-info" name="reset" value="Reset">
                            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        </td>
                    </tr>
                </table>

            </form>

            <!--main form end here-->


<?php  include '../inc/footer.php' ?>