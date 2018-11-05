<?php include_once '../includes/header.php'; ?>




    <!--       main form start here-->


        <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default2">Submit</button>
<!--            <button type="submit" class="btn btn-default1">Logout</button>-->
        </form>



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
                $id = $_GET['singleShow'];
                //                echo $id;
                //                var_dump($id);
                //                die();
                $stm =  $db->prepare("SELECT * FROM `student_data` WHERE unique_id = :id");
                $stm->bindValue(':id', $id, PDO::PARAM_STR);
                $stm->execute();
                $result = $stm->fetch(PDO::FETCH_ASSOC);
                //use $results

            ?>
      <div class="col-md-12" style="">


            <table class="table table-bordered table-responsive" style="background: white">

            

           <h2 style="text-align: center" ><strong>Student Information</strong></h2>


            <tr >
                <th style="text-align: center" ><?php echo $result['student_name']?> <br>

                    <img src="../uploads/<?php echo $result['student_image']?>" class="img-circle" width="120" alt="no image">
                </th>
            </tr>
            <tr >
                <th style="text-align: center" > <?php echo $result['father_name']?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp; <?php echo $result['mother_name']?> <br>

                    <img src="../uploads/<?php echo $result['father_image']?>" class="img-rounded" width="100" alt="no image">
                    <img src="../uploads/<?php echo $result['mother_image']?>" class="img-rounded" width="100" alt="no image">
                </th>
            </tr>


            <tr>
                <th class="text-center">Student Name : <?php echo $result['student_name']?></th>
            </tr>
            <tr>
                <th class="text-center">Student Sex : <?php echo $result['sex']?></th>
            </tr>
            <tr>
                <th class="text-center">Class  : <?php echo $result['class']?></th>
            </tr>
            <tr>
                <th class="text-center">Shift  : <?php echo $result['shift']?></th>
            </tr>
            <tr>
                <th class="text-center">Branch  : <?php echo $result['branch']?></th>
            </tr>
            <tr>
                <th class="text-center">Department  : <?php echo $result['department']?></th>
            </tr>
            <tr>
                <th class="text-center">Student ID  : <?php echo $result['student_id']?></th>
            </tr>
            <tr>
                <th class="text-center">Class Roll  : <?php echo $result['class_roll']?></th>
            </tr>
            <tr>
                <th class="text-center">Year  : <?php echo $result['year']?></th>
            </tr>

            <tr>
                <th class="text-center">Birth Day  : <?php echo $result['birth_day']?></th>
            </tr>

            <tr>
                <th class="text-center">Birth Month  : <?php echo $result['birth_month']?></th>
            </tr>

            <tr>
                <th class="text-center">Birth Year  : <?php echo $result['birth_year']?></th>
            </tr>

            <tr>
                <th class="text-center">Blood Group  : <?php echo $result['blood_group']?></th>
            </tr>

            <tr>
                <th class="text-center">Religion  : <?php echo $result['religion']?></th>
            </tr>

            <tr>
                <th class="text-center">Brith Reg: Num:  : <?php echo $result['birth_reg_num']?></th>
            </tr>

            <tr>
                <th class="text-center">Last Study Organization  : <?php echo $result['last_study_orga']?></th>
            </tr>

            <tr>
                <th class="text-center">Why Left  : <?php echo $result['why_left']?></th>
            </tr>

            <tr>
                <th class="text-center">Last Organization Phone  : <?php echo $result['last_Orga_phone']?></th>
            </tr>

            <tr>
                <th class="text-center">Home Name  : <?php echo $result['home_name']?></th>
            </tr>

            <tr>
                <th class="text-center">Holding Number  : <?php echo $result['hoding_number']?></th>
            </tr>

            <tr>
                <th class="text-center">Road Number  : <?php echo $result['road_number']?></th>
            </tr>

            <tr>
                <th class="text-center">Village Name  : <?php echo $result['village_name']?></th>
            </tr>

            <tr>
                <th class="text-center">Post Office  : <?php echo $result['postoffice']?></th>
            </tr>

            <tr>
                <th class="text-center">Unione Name  : <?php echo $result['unione_name']?></th>
            </tr>

            <tr>
                <th class="text-center">Thana Name  : <?php echo $result['thana_name']?></th>
            </tr>

            <tr>
                <th class="text-center">District Name  : <?php echo $result['district_name']?></th>
            </tr>

            <tr>
                <th class="text-center">Post Code  : <?php echo $result['postcode']?></th>
            </tr>

            <tr>
                <th class="text-center">Lasting Home Name  : <?php echo $result['lasting_home_name']?></th>
            </tr>

            <tr>
                <th class="text-center">Lasting Holding Number  : <?php echo $result['lasting_holding_number']?></th>
            </tr>
            <tr>
                <th class="text-center">Lasting Road Number  : <?php echo $result['lasting_road_number']?></th>
            </tr>
            <tr>
                <th class="text-center">lasting Post Office  : <?php echo $result['lasting_postoffice']?></th>
            </tr>
            <tr>
                <th class="text-center">lasting_unione  : <?php echo $result['lasting_unione']?></th>
            </tr>
            <tr>
                <th class="text-center">Lasting Thana  : <?php echo $result['lasting_thana']?></th>
            </tr>
            <tr>
                <th class="text-center">Lasting District  : <?php echo $result['lasting_district']?></th>
            </tr>
            <tr>
                <th class="text-center">Lasting Post Code  : <?php echo $result['lasting_postcode']?></th>
            </tr>
            <tr>
                <th class="text-center">Father Name  : <?php echo $result['father_name']?></th>
            </tr>
            <tr>
                <th class="text-center">Father Occupation  : <?php echo $result['father_occupation']?></th>
            </tr>
            <tr>
                <th class="text-center">Father Monthly Income  : <?php echo $result['fa_monthly_income']?></th>
            </tr>
            <tr>
                <th class="text-center">Father Edu Quali  : <?php echo $result['fa_edu_quali']?></th>
            </tr>
            <tr>
                <th class="text-center">Father Phone  : <?php echo $result['father_phone']?></th>
            </tr>
            <tr>
                <th class="text-center">Father Email  : <?php echo $result['father_email']?></th>
            </tr>
            <tr>
                <th class="text-center">Father NID  : <?php echo $result['father_national_id']?></th>
            </tr>
            <tr>
                <th class="text-center">Mother Name  : <?php echo $result['mother_name']?></th>
            </tr>
            <tr>
                <th class="text-center">Mother Occupation  : <?php echo $result['mother_occupation']?></th>
            </tr>
            <tr>
                <th class="text-center">Mother Monthly Income  : <?php echo $result['mo_monthly_income']?></th>
            </tr>
            <tr>
                <th class="text-center">Mother Edu Quali  : <?php echo $result['mo_edu_quali']?></th>
            </tr>
            <tr>
                <th class="text-center">Mother Phone  : <?php echo $result['mother_phone']?></th>
            </tr>
            <tr>
                <th class="text-center">Mother Email  : <?php echo $result['mother_email']?></th>
            </tr>
            <tr>
                <th class="text-center">Mother NID  : <?php echo $result['mo_national_id']?></th>
            </tr>
            <tr>
                <th class="text-center">Local Gurdian  : <?php echo $result['local_gurdian']?></th>
            </tr>
            <tr>
                <th class="text-center">Gurdian Occupation  : <?php echo $result['local_occupation']?></th>
            </tr>
            <tr>
                <th class="text-center">Relation  : <?php echo $result['relation']?></th>
            </tr>
            <tr>
                <th class="text-center">Gurdian Edu Quali  : <?php echo $result['local_edu']?></th>
            </tr>
            <tr>
                <th class="text-center">Gurdian Phone  : <?php echo $result['local_phone']?></th>
            </tr>
            <tr>
                <th class="text-center">Gurdian Email  : <?php echo $result['local_email']?></th>
            </tr>
            <tr>
                <th class="text-center">Gurdian NID  : <?php echo $result['local_national_id']?></th>
            </tr>


<!--                <tr style="background: #DEDEDE">-->
<!--                    <th class="text-center">Name : </th>-->
<!---->
<!--                    <td>--><?php //echo $result['sex']?><!--</td>-->
<!--                </tr>-->
<!--                <tr style="background: #DEDEDE">-->
<!--                    <th class="text-center">Sex : </th>-->
<!---->
<!--                    <td>--><?php //echo $result['sex']?><!--</td>-->
<!--                </tr>-->
<!--                <tr style="background: #DEDEDE">-->
<!--                    <th class="text-center">Class : </th>-->
<!---->
<!--                    <td>--><?php //echo $result['class']?><!--</td>-->
<!--                </tr>-->
<!--                <tr style="background: #DEDEDE">-->
<!--                    <th class="text-center">Shift : </th>-->
<!---->
<!--                    <td>--><?php //echo $result['shift']?><!--</td>-->
<!--                </tr>-->
<!--                <tr style="background: #DEDEDE">-->
<!--                    <th class="text-center">Branch : </th>-->
<!---->
<!--                    <td>--><?php //echo $result['branch']?><!--</td>-->
<!--                </tr>-->
<!--                <tr style="background: #DEDEDE">-->
<!--                    <th class="text-center">Department : </th>-->
<!---->
<!--                    <td>--><?php //echo $result['department']?><!--</td>-->
<!--                </tr>-->
<!--                <tr style="background: #DEDEDE">-->
<!--                    <th class="text-center">Student ID : </th>-->
<!---->
<!--                    <td>--><?php //echo $result['student_id']?><!--</td>-->
<!--                </tr>-->
<!--                <tr style="background: #DEDEDE">-->
<!--                    <th class="text-center">Class Roll : </th>-->
<!---->
<!--                    <td>--><?php //echo $result['class_roll']?><!--</td>-->
<!--                </tr>-->
<!--                <tr style="background: #DEDEDE">-->
<!--                    <th class="text-center">Year : </th>-->
<!---->
<!--                    <td>--><?php //echo $result['year']?><!--</td>-->
<!--                </tr>-->
<!--                echo str_repeat("&nbsp;", 60);-->




<!--                -->
<!--                <tr>-->
<!--                    <th class="text-center">Name</th>-->
<!--                    <th class="text-center">Class</th>-->
<!--                    <th class="text-center">Shift</th>-->
<!--                    <th class="text-center">Branch</th>-->
<!--                    <th class="text-center">Department</th>-->
<!--                    <th class="text-center">ID</th>-->
<!--                    <th class="text-center">Roll</th>-->
<!--                    <th class="text-center">Year</th>-->
<!--                    <th class="text-center">Image</th>-->
<!--                </tr>-->
<!---->
<!--                <tr class="text-center">-->
<!--                    <td>--><?php //echo $result['student_name']?><!--</td>-->
<!--                    <td>--><?php //echo $result['class']?><!--</td>-->
<!--                    <td>--><?php //echo $result['shift']?><!--</td>-->
<!--                    <td>--><?php //echo $result['branch']?><!--</td>-->
<!--                    <td>--><?php //echo $result['department']?><!--</td>-->
<!--                    <td>--><?php //echo $result['student_id']?><!--</td>-->
<!--                    <td>--><?php //echo $result['class_roll']?><!--</td>-->
<!--                    <td>--><?php //echo $result['year']?><!--</td>-->
<!--                    <td>-->
<!--                        <img src="../uploads/--><?php //echo $result['student_image']?><!--" width="100" alt="no image">-->
<!--                    <td>-->
<!--                    </td>-->
<!---->
<!--                </tr>-->

            </table>


            <!--main form end here-->


<?php  //include '../includes/footer.php' ?>