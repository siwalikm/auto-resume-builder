<?php include('main.php') ?>
<?php
    session_start();
if(!isset($_SESSION['varname']))
{
    header("location:index.php");
}
else if(isset($_GET['id'])){
    
$log=$_GET['id'];
}
else{
$log=$_SESSION['varname'];
}
$sql = "SELECT * FROM employee WHERE ID='$log'";
$retval = mysqli_query( $con,$sql );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
{
    $fname=$row['FullName'];
$lname=$row['LastName'];
$email=$row['email'];
$phone=$row['phone'];
$dob=$row['dob'];
$add1=$row['add1'];
$add2=$row['add2'];
$course1=$row['course1'];
$iname1=$row['iname1'];
$startmonth1=$row['start1'];
$endmonth1=$row['end1'];
$course2=$row['course2'];
$iname2=$row['iname2'];
$startmonth2=$row['start2'];
$endmonth2=$row['end2'];
$course3=$row['course3'];
$iname3=$row['iname3'];
$startmonth3=$row['start3'];
$endmonth3=$row['end3'];
$course4=$row['course4'];
$iname4=$row['iname4'];
$startmonth4=$row['start4'];
$endmonth4=$row['end4'];
$job1=$row['job1'];
$comp1=$row['comp1'];
$startmonth5=$row['start5'];
$endmonth5=$row['end5'];
$job2=$row['job2'];
$comp2=$row['comp2'];
$startmonth6=$row['start6'];
$endmonth6=$row['end6'];
$job3=$row['job3'];
$comp3=$row['comp3'];
$startmonth7=$row['start7'];
$endmonth7=$row['end7'];
$others=$row['addinfo'];
$country=$row['nation'];
$dbms=$row['dbms'];
$prog=$row['prog'];
    $ms=$row['ms'];
    $html=$row['html'];
    $test=$row['test'];
    $analysis=$row['analysis'];
}
?>
<html>
 <head>
<link type="text/css" rel="stylesheet" href="preview.css"/>
<title></title>
     <script type="text/javascript">
     function check()
         {
             var crse2='<?php echo $course2; ?>';
             var crse3='<?php echo $course3; ?>';
             var crse4='<?php echo $course4; ?>';
             var job2='<?php echo $job2; ?>';
             var job3='<?php echo $job3; ?>';
             if(crse2!="")
             {
                 document.getElementById('next').style.display="table-row";
             }
             if(crse3!="")
             {
                 document.getElementById('next1').style.display="table-row";
             }
             if(crse4!="")
             {
                 document.getElementById('next2').style.display="table-row";
             }
             if(job2!="")
             {
                 document.getElementById('next3').style.display="table-row";
             }
             if(job3!="")
             {
                 document.getElementById('next4').style.display="table-row";
             }
         }
     </script>
</head>
<body onload="check();">
    <div id="header">
Winner Technologies Ltd.
    </div>
    
    <div id="subheader">
       Your Resume
    </div>
    <br><br>
    <div id="main">
            <h3>Personal Details</h3>
         <hr>
            <table>
                <tr><td id="frst">Employee Name</td><td>:</td><td><?php echo $fname ?>&nbsp<?php echo $lname ?></td></tr>
                <tr><td id="frst">Phone Number</td><td>:</td><td>+91<?php echo $phone ?></td></tr>
                <tr><td id="frst">Email-id</td><td>:</td><td><?php echo $email ?></td></tr>
    <tr >
        <td id="frst">Date of Birth</td><td>:</td><td><?php echo $dob ?> </td></tr>
                <tr><td id="frst">Country</td><td>:</td><td><?php echo $country ?></td></tr>
                <tr><td id="frst">Address 1</td><td>:</td><td><?php echo $add1 ?></td></tr>
                <tr><td id="frst">Address 2</td><td>:</td><td><?php echo $add2 ?></td></tr>
                <tr><td id="frst">Skills</td><td>:</td><td>Good Communication Skills,<br> Presentation Skills,<br> attitude towards leadership,</td><tr>
         </table>
            <h3>Work Experience</h3><hr>
            <table>
                <tr id="heading">
                    <td>Job Title</td>
                    <td>Company Name</td>
                    <td>Start Date</td>
                    <td>End Date</td>
                </tr>
                <tr>
                    <td><?php echo $job1 ?></td>
                    <td><?php echo $comp1 ?></td>
                    <td><?php echo $startmonth5 ?></td>
                    <td><?php echo $endmonth5 ?></td>
                </tr>
                <tr id="next3" style="display:none;" >
                    <td><?php echo $job2 ?></td>
                    <td><?php echo $comp2 ?></td>
                    <td><?php echo $startmonth6 ?></td>
                    <td><?php echo $endmonth6 ?></td>
                </tr>
                <tr id="next4" style="display:none;">
                    <td><?php echo $job3 ?></td>
                    <td><?php echo $comp3 ?></td>
                    <td><?php echo $startmonth7 ?></td>
                    <td><?php echo $endmonth7 ?></td>
                </tr>
                 
            </table>

            <h3>Educational Information</h3><hr>
            <table>
                <tr id="heading">
                    <td>Course Name</td>
                    <td>Institution Name</td>
                    <td>Start Date</td>
                    <td>End Date</td>
                </tr>
                <tr>
                    <td><?php echo $course1 ?></td>
                    <td><?php echo $iname1 ?></td>
                    <td><?php echo $startmonth1 ?></td>
                    <td><?php echo $endmonth1 ?></td>
                </tr>
                  <tr id="next" style="display:none;">
                    <td><?php echo $course2 ?></td>
                    <td><?php echo $iname2 ?></td>
                    <td><?php echo $startmonth2 ?></td>
                    <td><?php echo $endmonth2 ?></td>
                </tr>
                <tr id="next1" style="display:none;">
                    <td><?php echo $course3 ?></td>
                    <td><?php echo $iname3 ?></td>
                    <td><?php echo $startmonth3 ?></td>
                    <td><?php echo $endmonth3 ?></td>
                </tr>
                <tr id="next2" style="display:none;">
                    <td><?php echo $course4 ?></td>
                    <td><?php echo $iname4 ?></td>
                    <td><?php echo $startmonth4 ?></td>
                    <td><?php echo $endmonth4 ?></td>
                </tr>
            </table>
        <h3>Skills:</h3><hr>
        <p><?php 
           if($dbms=="yes")
       {
           echo "Database<br>";
       }
           if($prog=="yes")
       {
           echo "Programming<br>";
       }
    if($ms=="yes")
       {
           echo "MS_SQL<br>";
       }
if($test=="yes")
       {
           echo "Testing<br>";
       }
if($html=="yes")
       {
           echo "HTML<br>";
       }
if($analysis=="yes")
       {
           echo "Analysis<br>";
       }

     ?>
           </p>
            <h3>Visa Details</h3><hr>
            <pre style="font-size:20;"><?php echo $others ?></pre>
            <h3>Declaration</h3><hr>
            <p>
            I hereby declare that the details furnished above are true and correct to the best of my knowledge and belief.</p>
     </div>
<br>
    <center>    <input id="download" type="submit" value="Download as .doc file" onClick="parent.location='createdoc.php'" target="_blank"/> 
       </center>
    </body>
    <div id="footer" style="  background-color: rgba(29, 25, 25, 0.94);
    width:100%;
   
    height:65;">
        <center ><pre style="padding-top:25;  font-family: source-sans-pro, sans-serif;">Copyright &copy Winner Technologies Pvt. Ltd.   |    <a href="about.html">About Us</a></pre></center>
    </div>
</html>