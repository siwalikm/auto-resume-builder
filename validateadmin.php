<?php
include('main.php');
session_start();
    $log=$_POST['login'];
    $pass=$_POST['password'];

$sql = "SELECT * FROM admin WHERE login='$log' AND password='$pass' ";
$retval = mysqli_query( $con, $sql  );
$row= mysqli_num_rows($retval);
if($row==1 )
{
    
    header("Location:postloginadmin.php");
    $_SESSION['varname'] = $log;


    
}
else
{
session_destroy();
  header("Location:adminlogin.php?error=1");
}

?>