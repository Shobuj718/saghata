<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="window.print();">

</body>
</html> -->

 

<?php 

include_once '../../../vendor/autoload.php' ;

//use App\Admin\Marksheet\Allmarkstore();

$marksheet = new App\Admin\Marksheet\Allmarkstore();

$class 		= trim(htmlspecialchars($_POST['class']));
$shift 		= trim(htmlspecialchars($_POST['shift']));
$branch 	= trim(htmlspecialchars($_POST['branch']));
$department = trim(htmlspecialchars($_POST['department']));
$term 		= trim(htmlspecialchars($_POST['term']));
$year 		= trim(htmlspecialchars($_POST['year']));
$student_id = trim(htmlspecialchars($_POST['student_id']));

$studentNumber = $marksheet->studentNumberSelect($student_id);


$class = $studentNumber['class'];
$shift = $studentNumber['shift'];
$branch = $studentNumber['branch'];
$department = $studentNumber['department'];
$student_id = $studentNumber['student_id'];

$totalnum = $studentNumber['gpa'];
$gpa      = $studentNumber['gpa'];
$totalSub = $studentNumber['totalSub'];
$totalmark = $studentNumber['totalmark'];

 
// echo $totalnum." is a ....";

 

$result = $marksheet->selectAllgpa($class, $shift, $branch, $department, $term, $year );

echo "All student number in this class = ";
foreach ($result as $data) {
	echo  $data['totalmark']." ";
	$arr[] = $data['gpa'].',';
}
echo " <hr />";

//$arr[]= rtrim($arr);
//$arr[] = rtrim($arr, ', ');
rsort($arr); 
echo "All student gpa in this class = ";

foreach ($arr as $result) {
	echo $result;
}
echo "<hr>";
$maxNum = max($arr);
$minNum = min($arr);
echo "Maximum GPA is : ".$maxNum."<br />";
echo "Minimum GPA is : ".$minNum."<br />";


echo " <hr />";

 //rsort($arr); 

 //$total = intval($totalnum);
 $total = floatval($totalnum);

 for($i = 0; $i<count($arr); $i++){
 	$merit = $i;

 	if($total == $arr[$i]){
 		$merit += 1;
 		echo "Your merit position is(".$total.") : ".$merit."<br />";

 		echo "<hr>";
		$maxNum = max($arr);
		$minNum = min($arr);
		echo "Maximum GPA is : ".$maxNum."<br />";
		echo "Minimum GPA is : ".$minNum."<br /><br />";

		echo "Your Class is : ".$class."<br />";
		echo "Your Shift is : ".$shift."<br />";
		echo "Your Branch is : ".$branch."<br />";
		echo "Your Department is : ".$department."<br />";

		echo "Your ID is : ".$student_id."<br />";
		echo "Your merit position is(".$total.") : ".$merit."<br />";
		echo "Your GPA is : ".$gpa."<br />";
		echo "Your Total Mark is : ".$totalmark."<br />";
		echo "Your Total Subject is : ".$totalSub."<br />";

 		die();
 	}
 	// else{
 	// 	echo "Your merit position is(".$total.") : "."<strong>"."Cannot Find !!!"."</strong><br />";
 	// }
 	echo "Highest is ".$arr[$i]."<br />";
 }

 echo "<hr>";
$maxNum = max($arr);
$minNum = min($arr);
echo "Maximum number is : ".$maxNum."<br />";
echo "Minimum number is : ".$minNum."<br />";
echo "Your merit position is(".$total.") : ".$merit."<br />";

 echo 'Highest is -'.$arr[0].', Second highest is -'.$arr[1]."<br />";

 // echo "<pre>";
 // var_dump($_POST);
 // die();


?>