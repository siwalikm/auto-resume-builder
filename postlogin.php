<?php
include('main.php');
session_start();
if(!isset($_SESSION['varname']))
{
    header("location:index.php");
}
$log = $_SESSION['varname'];
?>
<?php 
$sql = "SELECT * FROM employee WHERE ID='$log'";
$retval = mysqli_query( $con,$sql );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
{
    $id=$row['FullName']; 
}
       
?>
<html>
<head>
    <title>Infosys Project</title>
 <link rel="stylesheet" href="postlogin.css">
    <script src="//use.edgefonts.net/source-sans-pro.js"></script>
    </head>

<body >
<div id="header">
Winner Technologies Ltd.
    </div>
    
    <div id="subheader">
       Welcome to Resume Builder v1.0 |
        Infosys Project MVJCE 2015
    </div>
    <button id="LOGOUT" onclick="window.location='logout.php';">LOGOUT</button>
    <div>
    <div id="main">
    Welcome <?php echo $id ?>    
    </div> 
    
    <div id="mainoption1">
    <ul>
        <li><a href="resume.php">View and Download Resume</a></li><br/>
        
       </ul>
        
   </div>
    
    
 <div id="mainoption2">
    <ul>
        <li><a href="resume_edit.php">Edit Resume</a></li>
       </ul>
        
   </div>   
    </div>
</body>
    <div id="footer" style="background-color: rgba(29, 25, 25, 0.94);
    width:100%;
   
    height:65;">
        <center ><pre style="padding-top:25;  font-family: source-sans-pro, sans-serif;">Copyright &copy Winner Technologies Pvt. Ltd.   |    <a href="about.html">About Us</a></pre></center>
    </div>
</html>