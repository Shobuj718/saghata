


<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 26-Nov-17
 * Time: 9:17 AM
 */

include_once '../includes/header.php'; ?>


<div class="col-md-12">

  <div class="container" style="width: 100%; background: white">
    <div class="row">
        <div class="col-md-12">
            <!-- <form action="#" method="post" enctype="multipart/form-data"> -->

            <form action="view/admin/library/store.php" method="post" enctype="multipart/form-data">

                <h3 class="text-center" style="color: #2559ee">All Classes Exam Routin <!-- নতুন বই যোগ করুন -->   </h3>
                <hr />

            <?php
            
                if(isset($_SESSION['success'])){
                    echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                    unset($_SESSION['success']);
                }
                if(isset($_SESSION['error'])){
                    echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
                    unset($_SESSION['error']);
                }

            ?>

<!-- <p align="justify"><p style="text-align: center;">&nbsp;<strong><span style="font-size: 14pt;">DHAKA OXFORD INTERNATIONAL COLLEGE&nbsp;&nbsp;</span></strong></p>
 -->
 <p style="text-align: center;">&nbsp;<strong><!-- 1<sup>ST</sup> -->&nbsp;  Final  Exam Routine- 2018</strong></p>
<p style="text-align: center;"><strong><strong> </strong></strong></p>
<p style="text-align: center;"><strong>&nbsp; &nbsp;Exam start from &nbsp; &nbsp;24/04/201 to 14/05/2018 &nbsp; &nbsp; &nbsp; &nbsp;</strong><strong>&nbsp; Exam time- &nbsp; &nbsp; &nbsp; 10.00 AM&nbsp; to 12.10</strong><strong>PM &nbsp;</strong></p>
<p style="text-align: center;"><strong><strong><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong></strong></strong></p>
<table style="height: 638px;" border="2" width="960">
<tbody>
<tr>
<td>
<p><strong>Date</strong></p>
</td>
<td>
<p><strong>Day</strong></p>
</td>
<td>
<p><strong>Subject</strong></p>
</td>
<td>
<p><strong>Science</strong></p>
</td>
<td>
<p><strong>Business</strong></p>
</td>
<td>
<p><strong>Human</strong></p>
</td>
</tr>
<tr>
<td>
<p><strong>24/04/2017</strong></p>
</td>
<td>
<p><strong>Monday</strong></p>
</td>
<td>
<p><strong>English-1</strong></p>
</td>
<td>
<p><strong>English-1</strong></p>
</td>
<td>
<p><strong>English-1</strong></p>
</td>
<td>
<p><strong>English-1</strong></p>
</td>
</tr>
<tr>
<td>
<p><strong>25/04/2017</strong></p>
</td>
<td>
<p><strong>Tuesday</strong></p>
</td>
<td>
<p><strong>English-2</strong></p>
</td>
<td>
<p><strong>English-2</strong></p>
</td>
<td>
<p><strong>English-2</strong></p>
</td>
<td>
<p><strong>English-2</strong></p>
</td>
</tr>
<tr>
<td>
<p><strong>26/04/2017</strong></p>
</td>
<td>
<p><strong>Wednesday</strong></p>
</td>
<td>
<p><strong>Bangla-1</strong></p>
</td>
<td>
<p><strong>Bangla-1</strong></p>
</td>
<td>
<p><strong>Bangla-1</strong></p>
</td>
<td>
<p><strong>Bangla-1</strong></p>
</td>
</tr>
<tr>
<td>
<p><strong>27/04/2017</strong></p>
</td>
<td>
<p><strong>Thursday</strong></p>
</td>
<td>
<p><strong>Bangla-2</strong></p>
</td>
<td>
<p><strong>Bangla-2</strong></p>
</td>
<td>
<p><strong>Bangla-2</strong></p>
</td>
<td>
<p><strong>Bangla-2</strong></p>
</td>
</tr>
<tr>
<td>
<p><strong>30/04/2017</strong></p>
</td>
<td>
<p><strong>Sunday</strong></p>
</td>
<td>
<p><strong>**</strong></p>
</td>
<td>
<p><strong>Physics-1</strong></p>
</td>
<td>
<p><strong>Accountin-1</strong></p>
</td>
<td>
<p><strong>Civics &amp;Good Gov-1</strong></p>
</td>
</tr>
<tr>
<td>
<p><strong>02/05/2017</strong></p>
</td>
<td>
<p><strong>Tuesday </strong></p>
</td>
<td>
<p><strong>**</strong></p>
</td>
<td>
<p><strong>Physics-2</strong></p>
</td>
<td>
<p><strong>Accounting-2</strong></p>
</td>
<td>
<p><strong>Civics &amp;Good Gov-2</strong></p>
</td>
</tr>
<tr>
<td>
<p><strong>03/05/2017</strong></p>
</td>
<td>
<p><strong>Wednesday</strong></p>
</td>
<td>
<p><strong>**</strong></p>
</td>
<td>
<p><strong>Chemistry-1</strong></p>
</td>
<td>
<p><strong>Management-1</strong></p>
</td>
<td>
<p><strong>Social Science-1</strong></p>
</td>
</tr>
<tr>
<td>
<p><strong>04/05/2017</strong></p>
</td>
<td>
<p><strong>Thursday</strong></p>
</td>
<td>
<p><strong>**</strong></p>
</td>
<td>
<p><strong>Chemistry-2</strong></p>
</td>
<td>
<p><strong>Management-2</strong></p>
</td>
<td>
<p><strong>Social Science-2</strong></p>
</td>
</tr>
<tr>
<td>
<p><strong>07/05/2017</strong></p>
</td>
<td>
<p><strong>Sunday</strong></p>
</td>
<td>
<p><strong>**</strong></p>
</td>
<td>
<p><strong>Biology-1</strong></p>
</td>
<td>
<p><strong>Fin &amp; Banking-1</strong></p>
</td>
<td>
<p><strong>Isla. His &amp; Cult-1</strong></p>
</td>
</tr>
<tr>
<td>
<p><strong>08/05/2017</strong></p>
</td>
<td>
<p><strong>Monday</strong></p>
</td>
<td>
<p><strong>**</strong></p>
</td>
<td>
<p><strong>Biology-2</strong></p>
</td>
<td>
<p><strong>Fin &amp; Banking-2</strong></p>
</td>
<td>
<p><strong>Isla. His &amp; Cult-2</strong></p>
</td>
</tr>
<tr>
<td>
<p><strong>09/05/2017</strong></p>
</td>
<td>
<p><strong>Tuesday</strong></p>
</td>
<td>
<p><strong>**</strong></p>
</td>
<td>
<p><strong>Math-1</strong></p>
</td>
<td>
<p><strong>Product &amp;Manage-1</strong></p>
</td>
<td>
<p><strong>Economics-1</strong></p>
</td>
</tr>
<tr>
<td>
<p><strong>11/05/2017</strong></p>
</td>
<td>
<p><strong>Thursday</strong></p>
</td>
<td>
<p><strong>**</strong></p>
</td>
<td>
<p><strong>Math-2</strong></p>
</td>
<td>
<p><strong>Product &amp;Manage-2</strong></p>
</td>
<td>
<p><strong>Economics-2</strong></p>
</td>
</tr>
<tr>
<td>
<p><strong>14/05/2017</strong></p>
</td>
<td>
<p><strong>Sunday</strong></p>
</td>
<td>
<p><strong>**</strong></p>
</td>
<td>
<p><strong>ICT</strong></p>
</td>
<td>
<p><strong>ICT</strong></p>
</td>
<td>
<p><strong>ICT</strong></p>
</td>
</tr>
</tbody>
</table>
<p><br />&nbsp;<strong>1.Exam&nbsp; Paper Explanation &nbsp;16/05/17 </strong></p>
<p><strong>2.Result Publist&nbsp; 21/05/2017&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>
<p><strong>&nbsp;</strong>Vice Principal / Examiner</p>


     </div>
    </div>
  </div>
</div>




<?php  include '../includes/footer.php' ?>

