<?php
session_start();
$cardno=$_POST['cardno'];
$pin=$_POST['pin'];
$con=mysqli_connect('localhost','root','','banking');
mysqli_select_db($con,'banking');
$q="select * from account where cardno='$cardno' && pin='$pin' ";
$result=mysqli_query($con,$q);
$n=mysqli_num_rows($result);
if($n == 1 )
{
	$_SESSION['cardno']=$cardno;
     echo "you are welcome";
     header('location:home.php');
}
else
{
	
	echo "you are not registered";
	header ('location:login.php');
}
?>
