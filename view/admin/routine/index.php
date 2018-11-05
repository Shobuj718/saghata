


<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 26-Nov-17
 * Time: 9:17 AM
 */

include_once '../includes/header.php'; ?>


<div class="col-md-12">

  <div class="container" bgcolor="skyblue" style="width: 100%; background: ">
    <div class="row">
        <div class="col-md-12">
            <!-- <form action="#" method="post" enctype="multipart/form-data"> -->


                <h3 class="text-center" style="color: #2559ee">All Classes  Routine  </h3>
                <hr />

            <?php
            
                if(isset($_SESSION['success'])){
                    echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                    unset($_SESSION['success']);
                }
            ?>

<H1><FONT COLOR="DARKCYAN"><CENTER>SCHOOL CLASS ROUTINE</FONT></H1>
<table border="2" cellspacing="3" align="center" width="900px" bgcolor="skyblue">
<tr  align="center">
 <td>
 <td>10:00-10:40
 <td>10:40-11:20
 <td>11:20-12:00
 <td>12:00-1:00
 <td>1:00-1:40
 <td>1:40-2:20
 <td>2:20-3:00
 <td>3:00-4:00
</tr>

<tr>
 <td align="center">SATURDAY
 <td align="center">---<td align="center"><font color="blue">SUB1<br>
 <td align="center"><font color="pink">SUB2<br>
 <td align="center"><font color="red">SUB3<br>
 <td rowspan="6"align="center">L<br>U<br>N<br>C<br>H
 <td align="center"><font color="maroon">SUB4<br>
 <td align="center"><font color="brown">SUB5<br>
 <td align="center">counselling class
</tr>
<tr>
 <td align="center">SUNDAY
 <td align="center"><font color="blue">SUB1<br>
 <td align="center"><font color="red">SUB2<br>
 <td align="center"><font color="pink">SUB3<br>
 <td align="center">---
 <td align="center"><font color="orange">SUB4<BR>
 <td align="center"><font color="maroon">SUB5<br>
 <td align="center">library
</tr>
<tr>
 <td align="center">MONDAY
 <td align="center"><font color="pink">SUB1<br>
 <td align="center"><font color="orange">SUB2<BR>
 <td align="center"><font color="brown">SWA<br>
 <td align="center">---
 <td colspan="3" align="center"><font color="green"> lab
</tr>
<tr>
 <td align="center">TUESDAY
 <td align="center">SUB1<br>
 <td align="center"><font color="brown">SUB2<br>
 <td align="center"><font color="orange">SUB3<BR>
 <td align="center">---
 <td align="center"><font color="blue">SUB4<br>
 <td align="center"><font color="red">SUB5<br>
 <td align="center">library
</tr>
<tr>
 <td align="center">WEDNESDAY
 <td align="center"><font color="orange">SUB1<BR>
 <td align="center"><font color="maroon">SUB2<br>
 <td align="center"><font color="blue">SUB3<br>
 <td align="center">---
 <td align="center"><font color="pink">SUB4<br>
 <td align="center"><font color="brown">SUB5<br>
 <td align="center">library
</tr>
<tr>
 <td align="center">THURSDAY
 <td align="center"><font color="red">SUB1<br>
 <td colspan="3" align="center">seminar
 <td align="center"><font color="pink">SUB4<br>
 <td align="center"><font color="brown">SUB5<br>
 <td align="center">library
</tr>
</table>

</div>
</div>
</div>
</div>

<?php  include '../includes/footer.php' ?>

