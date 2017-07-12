
<?php
$fname=$_POST['fpname'];
$lname=$_POST['lpname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$add1=$_POST['add1'];
$add2=$_POST['add2'];
$course1=$_POST['course1'];
$iname1=$_POST['iname1'];
$startmonth1=$_POST['startmonth1'];
$endmonth1=$_POST['endmonth1'];
$course2=$_POST['course2'];
$iname2=$_POST['iname2'];
$startmonth2=$_POST['startmonth2'];
$endmonth2=$_POST['endmonth2'];
$course3=$_POST['course3'];
$iname3=$_POST['iname3'];
$startmonth3=$_POST['startmonth3'];
$endmonth3=$_POST['endmonth3'];
$course4=$_POST['course4'];
$iname4=$_POST['iname4'];
$startmonth4=$_POST['startmonth4'];
$endmonth4=$_POST['endmonth4'];
$job1=$_POST['job1'];
$comp1=$_POST['comp1'];
$startmonth5=$_POST['startmonth5'];
$endmonth5=$_POST['endmonth5'];
$job2=$_POST['job2'];
$comp2=$_POST['comp2'];
$startmonth6=$_POST['startmonth6'];
$endmonth6=$_POST['endmonth6'];
$job3=$_POST['job3'];
$comp3=$_POST['comp3'];
$startmonth7=$_POST['startmonth7'];
$endmonth7=$_POST['endmonth7'];
$others=$_POST['others'];
$country=$_POST['country'];
$password=$_POST['password'];
if (isset($_POST['database'])) {
  $dbms = "yes";
} else {
  $dbms = "no";
}
if (isset($_POST['Programmming'])) {
  $prog = "yes";
} else {
  $prog = "no";
}
if (isset($_POST['MS-SQL'])) {
  $ms = "yes";
} else {
  $ms = "no";
}
if (isset($_POST['HTML'])) {
  $html = "yes";
} else {
  $html = "no";
}
if (isset($_POST['Testing'])) {
  $test = "yes";
} else {
  $test = "no";
}
if (isset($_POST['Analysis'])) {
  $analysis = "yes";
} else {
  $analysis = "no";
}
?>