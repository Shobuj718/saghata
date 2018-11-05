
<?php
    include_once '../../includes/header.php';
    include_once '../../../../vendor/autoload.php';


?>

<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 16-Nov-17
 * Time: 12:17 PM
 */



use App\admin\student\Student;
//use App\Admin\Calculation\Student\Student;

//$studentfee = new Student();
$student = new Student();

$id = $_GET['show'];
//$id = 'srefd54';

$data   = $student->selectStuFee($id);
$result = $student->showSelect($id);

//var_dump($data);
//error_reporting(0);

?>

<!-- <div style="border:4px solid #F19F4D;padding:5px;margin-top:10px;"> -->

<a href="javascript:void(0);" id="print_button1" style="width: 120px; padding: 5px 8px 5px 8px;text-align: center;float: right;background-color: #02A6D8;color: #fff;text-decoration: none; margin: 10px;" onclick="printPageArea('wrapper')">প্রিন্ট রশিদ</a>

<!-- 
<div class="row">
        <div style="border:4px solid #F19F4D;padding:5px;margin-top:10px;">
            <script>

                setCal()

                function getTime() {
                    var now = new Date()
                    var hour = now.getHours()
                    var minute = now.getMinutes()
                    now = null
                    var ampm = ""
                    if (hour >= 12) {
                        hour -= 12
                        ampm = "PM"
                    } else
                        ampm = "AM"
                    hour = (hour == 0) ? 12 : hour
                    if (minute < 10)
                        minute = "0" + minute
                    return hour + ":" + minute + " " + ampm
                }

                function leapYear(year) {
                    if (year % 4 == 0)
                        return true
                    return false
                }

                function getDays(month, year) {
                    var ar = new Array(12)
                    ar[0] = 31
                    ar[1] = (leapYear(year)) ? 29 : 28
                    ar[2] = 31
                    ar[3] = 30
                    ar[4] = 31
                    ar[5] = 30
                    ar[6] = 31
                    ar[7] = 31
                    ar[8] = 30
                    ar[9] = 31
                    ar[10] = 30
                    ar[11] = 31
                    return ar[month]
                }

                function getMonthName(month) {
                    var ar = new Array(12)
                    ar[0] = "January"
                    ar[1] = "February"
                    ar[2] = "March"
                    ar[3] = "April"
                    ar[4] = "May"
                    ar[5] = "June"
                    ar[6] = "July"
                    ar[7] = "August"
                    ar[8] = "September"
                    ar[9] = "October"
                    ar[10] = "November"
                    ar[11] = "December"
                    return ar[month]
                }

                function setCal() {
                    var now = new Date()
                    var year = now.getYear()
                    if (year < 1000)
                        year += 1900
                    var month = now.getMonth()
                    var monthName = getMonthName(month)
                    var date = now.getDate()
                    now = null
                    var firstDayInstance = new Date(year, month, 1)
                    var firstDay = firstDayInstance.getDay()
                    firstDayInstance = null
                    var days = getDays(month, year)
                    drawCal(firstDay + 1, days, date, monthName, year)
                }

                function drawCal(firstDay, lastDate, date, monthName, year) {
                    var headerHeight = 50
                    var border = 1
                    var cellspacing = 4
                    var headerColor = "white"
                    var headerSize = "+2"
                    var colWidth = 60
                    var dayCellHeight = 25
                    var dayColor = "darkblue"
                    var cellHeight = 40
                    var todayColor = "white"
                    var timeColor = "purple"
                    var text = ""
                    text += '<CENTER>'
                    text += '<TABLE BORDER=' + border + ' CELLSPACING=' + cellspacing + '>'
                    text += '<TH ALIGN="center" COLSPAN=7 HEIGHT=' + headerHeight + '>'
                    text += '<FONT COLOR="' + headerColor + '" SIZE=' + headerSize + '>'
                    text += monthName + ' ' + year
                    text += '</FONT>'
                    text += '</TH>'
                    var openCol = '<TD WIDTH=' + colWidth + ' HEIGHT=' + dayCellHeight + '>'
                    openCol += '<FONT COLOR="' + dayColor + '">'
                    var closeCol = '</FONT></TD>'
                    var weekDay = new Array(7)
                    weekDay[0] = "Sun"
                    weekDay[1] = "Mon"
                    weekDay[2] = "Tues"
                    weekDay[3] = "Wed"
                    weekDay[4] = "Thu"
                    weekDay[5] = "Fri"
                    weekDay[6] = "Sat"

                    text += '<TR style="background: #E4E9ED" ALIGN="center" VALIGN="center">'
                    for (var dayNum = 0; dayNum < 7; ++dayNum) {
                        text += openCol + weekDay[dayNum] + closeCol
                    }
                    text += '</TR>'
                    var digit = 1
                    var curCell = 1

                    for (var row = 1; row <= Math.ceil((lastDate + firstDay - 1) / 7); ++row) {
                        text += '<TR style="background: #F0F4F7" ALIGN="center" VALIGN="center">'
                        for (var col = 1; col <= 7; ++col) {
                            if (digit > lastDate)
                                break
                            if (curCell < firstDay) {
                                text += '<TD></TD>';
                                curCell++
                            } else {
                                if (digit == date) {
                                    text += '<TD style="background: #3291D1" HEIGHT=' + cellHeight + '>'
                                    text += '<FONT COLOR="' + todayColor + '">'
                                    text += digit
                                    text += '</FONT><BR>'
                                    text += '<FONT COLOR="' + timeColor + '" SIZE=2>'
                                    text += '<CENTER></CENTER>'
                                    text += '</FONT>'
                                    text += '</TD>'
                                } else
                                    text += '<TD HEIGHT=' + cellHeight + '>' + digit + '</TD>'
                                digit++
                            }
                        }
                        text += '</TR>'
                    }
                    text += '</TABLE>'
                    text += '</CENTER>'
                    // document.write(text)
                }
            </script>

        </div>f
    </div>
 -->
    <div class="clearfix"></div>

<div class="col-md-4 col-md-offset-4" id="wrapper" style="background: ;margin-top: ;">

   

    <div class="container" >
        <div class="row" >
            <div class="col-md-12" style="background: ;">

            <?php //echo "<hr/>"; ?>
            
            <h3 style="text-align:;color:green;"><img src="view/admin/calculation/student/monogram.jpg" class="img-rounded" width="60" alt="no image"> Fapore High School, Bogra Sadar, Bogra</h3>

            <h4 style="text-align:;color:green;">বেতন ও  অন্যান্য ফি / রশিদ নম্বর : <?= $data['id'] ?></h4>

         
            <!-- <img src="view/admin/calculation/student/monogram.jpg" class="img-rounded" width="60" alt="no image"> -->
        
          
 

            <div class="col-md-6" style="background: ; margin-top: 5px;">
            
                <div class="row">
                         
                    <div class="col-md-6">
                        <div class="form-group">
                            শিক্ষার্থীর নাম &nbsp;: <?= $result['student_name'] ?> <br>  
                            পিতার নাম &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $result['father_name'] ?> <br>
                            মাতার নাম &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $result['mother_name'] ?> <br>
                            <!-- পরীক্ষার নাম &nbsp;&nbsp;: <?= $term ?> <br> -->
                            শ্রেণী &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $data['class'] ?> <br>
                            ক্লাস রোল  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $result['class_roll'] ?> <br>
                            শাখা &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $result['branch'] ?> <br>

                            শিফট &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $result['shift'] ?> <br>
                            আইডি &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $id ?> <br>
                            জমার  তারিখ  &nbsp;&nbsp;: <?= $data['submit_date'] ?> <br>
                            <!-- সর্বমোট বিষয় : <?= $result['totalSub']; ?>  --><br>
                         </div>
                    </div> 
                    <!-- <div class="col-md-6">
                        <div class="form-group">
                            <h4><?= $results2['student_name'] ?> </h4> 
                            <h4><?= $roll ?> </h4>
                             
                        </div>
                    </div>    -->  
                </div>   
            </div> 
          
           </div>
        </div>
     </div>
    <!-- </div>
 <br>

<div class="col-md-4 col-md-offset-4" id="content" style="background: ;margin-top: ;">
 -->
    <table border="1" align="center" width="100%" background="login2.jpg" ; font-size: 12px">
 
        <tr>
            <td colspan="15" align="center" style="background: #56ABEE;">বেতন ও  অন্যান্য ফি আদায়ের রশিদ </td>
            
        </tr>


        <tr>
            <td align="center" class="size6">ফি'র নাম  </td>
            <td align="center" class="size6">টাকা  </td>         
            <!-- <td colspan="2" align="center" class="size4">Merit Position</td> -->
        </tr>

        
        <tr>
            <?php  if($err){
                $_SESSION['delete'] = "Student ID or Exam name does not match !!!";
                //header('location=meritmarksheet.php');
                //echo "<script>window.location='meritmarksheet.php'</script>";
                // <h3 style="color: red;">Student id or Exam name does not match!</h3>
           } ?>
        </tr>

        <tr>
            <th style="text-align:left;">মাসিক বেতন: চলতি/ অগ্রীম/ বকেয়া</th>
            <td style="text-align: center;"><?= $data['salary']; ?></td>
        </tr>

        <tr>
            <th style="text-align:left;">ভর্তি/পুনঃ ভর্তি ফি </th>
            <td style="text-align: center;">
                <?= $data['admission']; ?>
            </td>
        </tr>

        <tr>
            <th style="text-align:left;">জরিমানা: বকেয়া বেতন/ অনুপস্থিতির   </th>
            <td style="text-align: center">
                <?= $data['fine']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">সেশন  </th>
            <td style="text-align: center">
                <?= $data['sessionfee']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">পরীক্ষা  </th>
            <td style="text-align: center">
                <?= $data['exam']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">পরিচিতি পত্র  </th>
            <td style="text-align: center">
                <?= $data['contact_letter']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">গ্রন্থাগার জামানত   </th>
            <td style="text-align: center">
               <?= $data['security']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">বার্ষিকী  </th>
            <td style="text-align: center">
                <?= $data['yearly']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">বিদ্যুৎ  </th>
            <td style="text-align: center">
                <?= $data['current']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">সফটওয়্যার  </th>
            <td style="text-align: center">
                <?= $data['software']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">বিবিধ   </th>
            <td style="text-align: center">
                <?= $data['other']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">রেজিস্ট্রেশন/পরীক্ষা   </th>
            <td style="text-align: center">
                <?= $data['regexam']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">প্রশংসা পত্র  </th>
            <td style="text-align: center">
                <?= $data['testimonial']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">বিজ্ঞানাগার জামানত  </th>
            <td style="text-align: center">
                <?= $data['science_security']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">কেন্দ্র   </th>
            <td style="text-align: center">
                <?= $data['center']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">ব্যাবহারিক   </th>
            <td style="text-align: center">
                <?= $data['practical']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">নম্বর সনদপত্র  </th>
            <td style="text-align: center">
                <?= $data['number_certificate']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">স্কাউট/গার্লস গাইড  </th>
            <td style="text-align: center">
                <?= $data['scout']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">বাসভাড়া   </th>
            <td style="text-align: center">
                <?= $data['bus']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">ছাড়পত্র   </th>
            <td style="text-align: center">
                <?= $data['clearance']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">উন্নয়ন   </th>
            <td style="text-align: center">
                <?= $data['development']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">দরিদ্র তহবিল  </th>
            <td style="text-align: center">
                <?= $data['poorfund']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">ধর্মীয় অনুষ্ঠান  </th>
            <td style="text-align: center">
                <?= $data['re_ceremoni']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">রেড ক্রিসেন্ট ফান্ড  </th>
            <td style="text-align: center">
                <?= $data['red_cricent']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">অবস্থা   </th>
            <td style="text-align: center">
                <?= $data['status2']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">পদ্ধতি   </th>
            <td style="text-align: center">
                <?= $data['method']; ?>
            </td>
        </tr>
        <tr>
            <th style="text-align:left;">সর্বমোট টাকা </th>
            <td style="text-align: center">
                <?= $data['total']; ?>
            </td>
        </tr>



    </table>



    <br>
    <br>
     <h4 style="color:#000;">ফরম শিক্ষকের স্বাক্ষর :</h4>
        <br />
  </div>  
 <!--  <a href="javascript:void(0);" id="print_button1" style="width: 120px; padding: 5px 8px 5px 8px;text-align: center;float: right;background-color: #02A6D8;color: #fff;text-decoration: none; margin: 10px;" onclick="printPageArea('wrapper')">প্রিন্ট রশিদ</a> -->



<?php  include '../../includes/footer.php' ?>