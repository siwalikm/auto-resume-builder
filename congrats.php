<?php include('main.php') ?>
<?php include('fetchHtml.php') ?>
<?php
mysqli_query($con,"INSERT INTO employee(FullName,LastName,phone,email,nation,dob,add1,add2,course1,iname1,start1,end1,job1,comp1,start5,end5,addinfo,password,dbms,prog,ms,html,test,analysis,course2,course3,course4,iname2,iname3,iname4,start2,start3,start4,end2,end3,end4,job2,job3,comp2,comp3,start6,start7,end6,end7) VALUES('$fname','$lname','$phone','$email','$country','$dob','$add1','$add2','$course1','$iname1','$startmonth1','$endmonth1','$job1','$comp1','$startmonth5','$endmonth5','$others','$password','$dbms','$prog','$ms','$html','$test','$analysis','$course2','$course3','$course4','$iname2','$iname3','$iname4','$startmonth2','$startmonth3','$startmonth4','$endmonth2','$endmonth3','$endmonth4','$job2','$job3','$comp2','$comp3','$startmonth6','$startmonth7','$endmonth6','$endmonth7')");
?><!--insert into table!-->
<?php 
$sql = "SELECT * FROM employee WHERE FullName='$fname'";
$retval = mysqli_query($con, $sql );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
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
        <span style="font-size:40;">PLEASE NOTE DOWN YOUR USERID AND PASSWORD</span>
        <br>
     <span style="font-size:30;">User id:<?php echo $id ?></span>
        <br>
        <span style="font-size:30;">Employee Name:<?php echo $fname ?></span>
        <br>
         <span style="font-size:30;">Password:<?php echo $password ?></span>
        <br>
        <br>
        <br>
        <span style="font-size:20;">Redirecting in 5secs.................</span>
    </div>
    </body>
    <div id="footer" style="  background-color: rgba(29, 25, 25, 0.94);
    width:100%;
   position:static;
    height:65;">
        <center ><pre style="padding-top:25;  font-family: source-sans-pro, sans-serif;">Copyright &copy Winner Technologies Pvt. Ltd.   |    <a href="about.html">About Us</a></pre></center>
    </div>
</html>