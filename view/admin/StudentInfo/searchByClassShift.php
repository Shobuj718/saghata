<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 21-Nov-17
 * Time: 10:12 AM
 */
include_once '../inc/header.php';

?>

    <div class="col-md-8" style="width: 77.666667%;">

<!--        <form class="navbar-form navbar-right" action="searchID.php" method="post" role="search">-->
<!--            <div class="form-group">-->
<!--                <input type="text" name="studentSearch" class="form-control" placeholder="Student ID...">-->
<!--            </div>-->
<!--            <button type="submit" name="submit" class="btn btn-default2">Submit</button>-->
<!--            <button type="submit" class="btn btn-default1">Logout</button>-->
<!--        </form>-->

    <form action="ClassShiftSearchResult.php" method="post">

        <div class="form-inline">
            <div class="form-group col-lg-12">
                <label style="font-size: 20px;color: #3c5aee">Search Student </label><br>
                <strong>শ্রেণী</strong>
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
                <strong>শিফট</strong>
                <select class="form-control" name="shift" required>
                    <option>সিলেক্ট করুন</option>
                    <option>প্রভাতী</option>
                    <option>দিবা</option>
                    <option>সান্ধ্যকালীন</option>
                    <option>রাত্রিকালীন</option>
                </select>
                <strong>শাখা</strong>

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
                <strong>বিভাগ</strong>
                <select class="form-control" name="department" required>
                    <option>সিলেক্ট করুন</option>
                    <option>জেনারেল</option>
                    <option>বিজ্ঞান</option>
                    <option>মানবিক</option>
                    <option>বানিজ্য  </option>
                </select>
<!--                <strong>Class</strong>-->
<!--                <select class="form-control" id="sel2">-->
<!--                    <option value="">Year</option>-->
<!--                    <option value="1992">1992</option>-->
<!--                    <option value="1993">1993</option>-->
<!--                    <option value="1994">1994</option>-->
<!---->
<!--                    <option value="2015">2015</option>-->
<!--                </select>-->
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-default2">Submit</button>
                </div>
            </div>
        </div>

<!--        <div class="form-group">-->
<!--            <label class="col-md-3 control-label">All Student Search</label>-->
<!--            <div class="col-md-4">-->
<!---->
<!--                <select class="form-control input-xsmall input-inline">-->
<!--                    <option>0</option>-->
<!--                    <option>1</option>-->
<!--                    <option>2</option>-->
<!--                    <option>3</option>-->
<!--                    <option>4</option>-->
<!--                    <option>5</option>-->
<!--                    <option>6</option>-->
<!--                    <option>7</option>-->
<!--                    <option>8</option>-->
<!--                </select>-->
<!--                <span class="inline-help">name</span>-->
<!---->
<!--                <select class="form-control input-xsmall input-inline">-->
<!--                    <option>0</option>-->
<!--                    <option>1</option>-->
<!--                    <option>2</option>-->
<!--                    <option>3</option>-->
<!--                    <option>4</option>-->
<!--                    <option>5</option>-->
<!--                    <option>6</option>-->
<!--                    <option>7</option>-->
<!--                    <option>8</option>-->
<!--                </select>-->
<!--                <span class="inline-help">Roll</span>-->
<!---->
<!--                <select class="form-control input-xsmall input-inline">-->
<!--                    <option>0</option>-->
<!--                    <option>1</option>-->
<!--                    <option>2</option>-->
<!--                    <option>3</option>-->
<!--                    <option>4</option>-->
<!--                    <option>5</option>-->
<!--                    <option>6</option>-->
<!--                    <option>7</option>-->
<!--                    <option>8</option>-->
<!--                </select>-->
<!--                <span class="inline-help">Class</span>-->
<!--            </div>-->
<!--        </div>-->

    </form>
    </div>



<?php include_once '../inc/footer.php'?>