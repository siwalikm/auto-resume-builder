<?php 
session_start();

?>
<html>
    <head>
 <title>Infosys Project</title>
 <link rel="stylesheet" href="index.css">
    <script src="//use.edgefonts.net/source-sans-pro.js"></script>
    </head>

<body >
  
    
    
    
    
    </div>
<div id="header">
Winner Technologies Ltd.
    </div> 
     
    
    <div id="subheader">
       Welcome to Resume Builder v1.0 |
        Infosys Project MVJCE 2015
    </div>
    
   <div id="HELP1"><button id="help">HELP</button>  
    <img id="screen" src="Screens/Untitled-1.png">
  </div>
    
    
    
    <div id="mainlogin">
    <form id="signin" name="login" action="validate.php" method="post">
  <ul>  
 <li>    
     <label for="login">Employee Login ID</label>
      <input type="text" name="login" id="login" placeholder="0012" required/>
        </li>
<li>  
    <label for="Password">Password</label>
        <input type="password" name="password" id="password" placeholder="password &#40min 4 chars&#41" pattern=".{4,}" required/></li> 
      
<li><input id="button" type="submit" value="Sign In"/></li>
      

     </ul>
        </form>
        <form id="newuser">
<ul>
    <li><input id="button" type="button" value="New User" onClick="location.href='resume.html'"/></li></ul>

        </form>
        <?php
if(isset($_GET['error']))
{
$error=$_GET['error'];
$attempt=$_GET['attempts'];
                echo "<html>
                <center><p style=\"font-size:20;color:#f00\"> Invalid ID or Password</p>
                <p>Login attempt(s) = $attempt </p>
                </center></html>";
            }
elseif(isset($_GET['lock']))
       {
        $locked=$_GET['lock']; 
       echo "<html>
                <center><p style=\"font-size:20;color:#f00\"> User is Locked.<br/> Please contact Admin.
        </p>        </center></html>";    
       }

?>
      <button id="btn" onclick="window.location='adminlogin.php';"> ADMIN LOGIN </button>
    </div>
</body>
    <div id="footer" style="  background-color: rgba(29, 25, 25, 0.94);
    width:100%;
   
    height:65;">
        <center ><pre style="padding-top:25;  font-family: source-sans-pro, sans-serif;">Copyright &copy Winner Technologies Pvt. Ltd.   |    <a href="about.html">About Us</a></pre></center>
    </div>
</html>