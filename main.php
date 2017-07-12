<?php
$con= mysqli_connect('localhost','u330286377_infy','kenobolbo','u330286377_infy');
mysqli_select_db($con,"u330286377_infy");
if(!$con)
{
die("Connection not established:" . mysqli_connect_error());
}
?>