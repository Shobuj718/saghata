<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 21-Nov-17
 * Time: 10:12 AM
 */
include_once '../includes/header.php';

?>
<div class="col-md-12">

  <div class="row">
    <div class="content">
        <h2 style="text-align:center;color:green;">Search For Take Student Attendance (Manualy)</h2>

        <br>

        <?php
            if(isset($_SESSION['attTake'])){
                echo "<div class='alert alert-success'>".$_SESSION['attTake']."</div>";
                unset($_SESSION['attTake']);
            }
            if(isset($_SESSION['attErr'])){
                echo "<div class='alert alert-danger'>".$_SESSION['attErr']."</div>";
                unset($_SESSION['attErr']);
            }
            
             


        ?>

       
        <form action="view/admin/StudentAttendance/studentAttend.php" method="post">

          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>শ্রেণী:</strong>
                    <select class="form-control" name="class" required>
                        <option>সিলেক্ট করুন</option>
                        <option>প্লে</option>
                        <option> নার্সারি </option>
                        <option>কে জি</option>
                        <option>১ম</option>
                        <option>৩য়</option>
                        <option> ৪র্থ</option>
                        <option>৫ম</option>
                        <option>৬ষ্ঠ</option>
                        <option>৭ম</option>
                        <option>৮ম</option>
                        <option>নবম</option>
                        <option>১০ম</option>
                        <option>একাদশ</option>
                        <option>দ্বাদশ</option>
                        <option>ডিগ্রী ১ম বর্ষ</option>
                        <option>ডিগ্রী ২য় বর্ষ</option>
                        <option>ডিগ্রী ৩য় বর্ষ</option>
                        <option>ডিগ্রী প্রিভিয়াস মাস্টার্স</option>
                        <option>ডিগ্রী  মাস্টার্স</option>
                        <option>অনার্স ১ম বর্ষ</option>
                        <option>অনার্স ২য় বর্ষ</option>
                        <option>অনার্স ৩য় বর্ষ</option>
                        <option>অনার্স  ৪র্থ বর্ষ</option>
                        <option>মাস্টার্স</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>শিফট:</strong>
                    <select class="form-control" name="shift" required>
                        <option>সিলেক্ট করুন</option>
                        <option>প্রভাতী</option>
                        <option>দিবা</option>
                        <option>সান্ধ্যকালীন</option>
                        <option>রাত্রিকালীন</option>
                    </select>
                </div>
            </div>
         </div>

         <div class="row">
             <div class="col-md-6">
                <div class="form-group">
                    <strong>শাখা:</strong>
                    <select class="form-control" name="branch" required>
                        <option>সিলেক্ট করুন</option>
                        <option>ক</option>
                        <option>খ</option>
                        <option>গ</option>
                        <option>ঘ</option>
                        <option>ঙ</option>
                        <option>চ</option>
                        <option>ছ</option>
                        <option>জ</option>
                        <option>ঝ</option>
                        <option>ঞ</option>
                        <option>ট</option>
                        <option>ঠ</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>বিভাগ:</strong>
                    <select class="form-control" name="department" required>
                        <option>সিলেক্ট করুন</option>
                        <option>জেনারেল</option>
                        <option>বিজ্ঞান</option>
                        <option>মানবিক</option>
                        <option>বানিজ্য  </option>
                    </select>
                </div>
            </div>

         </div>

         <div class="col-md-4">
            <div class="form-group">
                <input type="submit"  class="btn btn-primary" name="submit" value="Submit">
            </div>
        </div>

       </form>
    </div>

  </div>
</div>




<?php include_once '../includes/footer.php'?>