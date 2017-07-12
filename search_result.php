<?php include('main.php') ?>
<?php
    session_start();
$fname=$_POST['textbox'];
$id=$_POST['id'];
if(!isset($_SESSION['varname']))
{
    header("location:index.php");
}

else if($fname!="")
{

    $sql = "SELECT * FROM employee WHERE FullName='$fname'";
}
else if($id!="")
{
        $sql = "SELECT * FROM employee WHERE ID='$id'";
}
else{
    
if (isset($_POST['database'])) {
  $sql = "SELECT * FROM employee WHERE dbms='yes'";
} 
if (isset($_POST['Programmming'])) {
 $sql = "SELECT * FROM employee WHERE prog='yes'";
}
if (isset($_POST['MS-SQL'])) {
  $sql = "SELECT * FROM employee WHERE ms='yes'";
} 
if (isset($_POST['HTML'])) {
  $sql = "SELECT * FROM employee WHERE html='yes'";
} 
if (isset($_POST['Testing'])) {
  $sql = "SELECT * FROM employee WHERE test='yes'";
} 
if (isset($_POST['Analysis'])) {
  $sql = "SELECT * FROM employee WHERE analysis='yes'";
} 
}
$retval = mysqli_query($con, $sql );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
     
?>     
<html>
<head>
    <title>Infosys Project</title>
 
    <link rel="stylesheet" href="postloginadmin.css">
    <script src="//use.edgefonts.net/source-sans-pro.js"></script>
    </head>

<body style="color:white" >
<div id="header">
Winner Technologies Ltd.
    </div>
     <div id="subheader">
       Your Search is Complete | Congratulation
    </div><div id="HELP1"><button id="help">HELP</button>  
    <img id="screen" src="Screens/admin%20login3.png">
  </div>
    <br><br>
    <div style="color:white;width:45%">
            <h3 style="text-align: center;">Results</h3><br>
        <table style="color:white">
        <tr>
            <td>Employee Name</td>
            <td>User Id</td>
            <td>Download</td>
            <td>View</td>
            </tr>
            <tr>
                <td><?php 



while($row = mysqli_fetch_assoc($retval))
{
    $name=$row['FullName'];
    $lname=$row['LastName'];
    $iid=$row['ID'];
         echo "
         <html>
         <form method=\"post\" action=\"resume.php\">
         <tr><td>$name</td>
     <td>$iid</td>
     <td><a href=\"resume.php?id=$iid\" target=\"_blank\">download/view</a></td>
     <td><a href=\"resume_edit.php?id=$iid\" target=\"_blank\">edit</a></td>
     </tr></form>
                        </html>";
         echo "\n";
}  ?></td>
        
            </tr>
        </table>
    </div>
    </body> 
    <div id="footer" style="  background-color: rgba(29, 25, 25, 0.94);
    width:100%;
   position:absolute;
    height:65;">
        <center ><pre style="padding-top:25;  font-family: source-sans-pro, sans-serif;color:white;">Copyright &copy Winner Technologies Pvt. Ltd.   |    <a href="about.html" target="_blank">About Us</a></pre></center>
    </div>
</html>