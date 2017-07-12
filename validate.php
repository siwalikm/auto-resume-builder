<?php
include('main.php');
session_start();


    $log=$_POST['login'];
    $pwd=$_POST['password'];

$sql = "SELECT * FROM employee WHERE ID='$log' AND password='$pwd' AND attempts!='3' ";


$retval = mysqli_query( $con,$sql );
$row= mysqli_num_rows($retval);
if($row==1 )
{
  
    $_SESSION['varname'] = $log;
      header("Location:postlogin.php");
}
   
    
    
else
{
  
$sql = "SELECT * FROM employee WHERE ID='$log'";
$retval = mysqli_query( $con,$sql );

while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
{
    $attempts=$row['attempts'];
    $name=$row['FullName'];
    
}
    
 if($attempts>=3)
 {session_destroy();
  header("Location:index.php?lock=1");
 }
 
    else
    {
echo $attempts +=1;
    
    mysqli_query($con,"UPDATE employee SET attempts='$attempts' WHERE ID='$log' ");
         header("Location:index.php?error=1&&attempts=$attempts");
}
}

    
     
    
 
?>