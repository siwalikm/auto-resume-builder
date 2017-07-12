<?php include('main.php') ?>
<?php include('fetchHtml.php') ?>
<?php
session_start();
if(!isset($_SESSION['varname']))
{
    header("location:index.php");
}
$log=$_SESSION['varname'];
mysqli_query($con,"UPDATE employee SET FullName='$fname',LastName='$lname',phone='$phone',email='$email',nation='$country',dob='$dob',add1='$add1',add2='$add2',course1='$course1',iname1='$iname1',start1='$startmonth1',end1='$endmonth1',course2='$course2',iname2='$iname2',start2='$startmonth2',end2='$endmonth2',course3='$course3',iname3='$iname3',start3='$startmonth3',end3='$endmonth3',course4='$course4',iname4='$iname4',start4='$startmonth4',end4='$endmonth4',job1='$job1',comp1='$comp1',start5='$startmonth5',end5='$endmonth5',job2='$job2',comp2='$comp2',start6='$startmonth6',end6='$endmonth6',job3='$job3',comp3='$comp3',start7='$startmonth7',end7='$endmonth7',dbms='$dbms',prog='$prog',ms='$ms',html='$html',test='$test',analysis='$analysis',password='$password',addinfo='$others' WHERE ID='$log' ");
?><!--insert into table!-->
<?php 
$sql = "SELECT * FROM employee WHERE FullName='$fname'";
$retval = mysqli_query( $con,$sql );
if(! $retval )
{
  die('Could not get data: ' . mysqli_error());
}
while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
{
    $id=$row['ID']; 
}
       
?>
<html>
    <head>
    <link rel="stylesheet" href="index.css">
       <meta http-equiv="refresh" content="5; url=index.php"/>
    </head>
        <body>
    <div id="header">
Winner Technologies Ltd.
    </div>
    
    <div id="subheader">
       Welcome to Resume Builder v1.0 |
        Infosys Project MVJCE 2015
    </div>
    <div id="mainbody" style="margin-top:150; margin-left:30;">
    <span style="font-size:50;">CONGRATULATIONS</span>
        <br>
        <span style="font-size:40;">Your Resume has been successfully submitted</span>
        <br>
        <br>
        <span style="font-size:40;">PLEASE NOTE DOWN YOUR USERID AND PASSWORD</span>
        <br>
        <hr>
        <hr>
     <span style="font-size:30;">User id: <?php echo $log ?></span>
        <br>
        <span style="font-size:30;">Employee Name: <?php echo $fname ?></span>
        <br>
         <span style="font-size:30;">Password: <?php echo $password ?></span>
        <br>
        <br>
        <br>
        <span style="font-size:20;">Redirecting in 5secs.................</span>
    </div><div id="footer" style="  background-color: rgba(29, 25, 25, 0.94);
    width:100%;
   
    height:65;">
        <center ><pre style="padding-top:25;  font-family: source-sans-pro, sans-serif;">Copyright &copy Winner Technologies Pvt. Ltd.   |    <a href="about.html">About Us</a></pre></center>
    </div>
    </body>
</html>