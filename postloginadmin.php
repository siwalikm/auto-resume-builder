<?php
include('main.php');
session_start();
if(!isset($_SESSION['varname']))
{
    header("location:index.php");
}
$log = $_SESSION['varname'];
$_SESSION['uname']=$log;
?>
<?php 
$sql = "SELECT * FROM employee WHERE ID='$log'";
$retval = mysqli_query( $con, $sql );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
{
    $iid=$row['ID']; 
}
  
?>
<html>
<head>
    <title>Infosys Project</title>
 
    <link rel="stylesheet" href="postloginadmin.css">
    <script src="//use.edgefonts.net/source-sans-pro.js"></script>
    </head>

<body >
<div id="header">
Winner Technologies Ltd.
    </div>
    
    <div id="subheader">
       Welcome to Resume Builder v1.0 |
        Infosys Project MVJCE 2015
    </div><div id="HELP1"><button id="help">HELP</button>  
    <img id="screen" src="Screens/admin%20login2.png">
  </div>
    
    <div id="main">
    Welcome Admin    
    </div> 
    
<br/>  <br/>   
    
   <button id="LOGOUT" onclick="window.location='logout.php';">LOGOUT</button><br> <br>
    <div id="submain">
<form id="form_a" method="post" action="search_result.php" target="_blank"  >    
     <fieldset> <br>
         <legend>Search Employee(s) by Skill Preference</legend>
           <input type="checkbox" name="database" value="database">Database

<input type="checkbox" name="Programmming" value="Programmming">Programmming
        
           <input type="checkbox" name="MS-SQL" value="MS-SQL">MS-SQL

<input type="checkbox" name="HTML" value="HTML">HTML

           <input type="checkbox" name="Testing" value="Testing">Testing

<input type="checkbox" name="Analysis" value="Analysis">Analysis
       </fieldset>
 
  <center>or </center> 
    
 
<div style="width:100%">
        <div>
        <fieldset> <br>
    <legend>Search Employee(s) by Name</legend>
    Enter Name: <input id="textbox" type="text" name="textbox" value=""> <br> 
   
  </fieldset>
 
     <center>or </center>  
     <fieldset> <br>
    <legend>Search Employee(s) by ID</legend>
    Enter ID: <input id="textbox" type="text" name="id" value=""> <br>
   
  </fieldset>
              </div> 
        <div>
        <input id="submit2" class="submitclass" type="submit" value="Search Database" style="margin-top:80px">
        </div>

        </form>
 <br>
</div>
        </body>
      
  <div id="footer" style="  background-color: rgba(29, 25, 25, 0.94);
    width:100%;
   
    height:65;">
        <center ><pre style="padding-top:25;  font-family: source-sans-pro, sans-serif;">Copyright &copy Winner Technologies Pvt. Ltd.   |    <a href="about.html">About Us</a></pre></center>
    </div>  
</html>