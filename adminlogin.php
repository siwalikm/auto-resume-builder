<html>
    <head>
 <title>Infosys Project</title>
 <link rel="stylesheet" href="index.css">
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
    <img id="screen" src="Screens/admin%20login.png">
  </div>
    
    
    
    <div id="mainlogin">
    <form id="signin" name="login" action="validateadmin.php" method="post">
  <ul>  
 <li>    
     <label for="login">Admin Login ID</label>
      <input type="text" name="login" id="login" required/>
        </li>
<li>  
    <label for="Password">Password</label>
        <input type="password" name="password" id="password" required/></li> 
      
<li><input id="button" type="submit" value="Sign In"/></li>
      

     </ul>
        </form>
        
       <?php
if(isset($_GET['error']))
{
$error=$_GET['error'];
                echo "<html>
                <center><p style=\"font-size:20;color:#f00\"> Invalid ID or Password</p>
                </center></html>";
            }  
?>
        
    </div>
    
    <div id="footer" style="  background-color: rgba(29, 25, 25, 0.94);
    width:100%;
   
    height:65;">
        <center ><pre style="padding-top:25;  font-family: source-sans-pro, sans-serif;">Copyright &copy Winner Technologies Pvt. Ltd.   |    <a href="about.html">About Us</a></pre></center>
    </div>
</body>
</html>