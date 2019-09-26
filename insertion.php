<?php 
session_start();
$cardno=mt_rand(1000000000000000,9999999999999999);
$username=$_POST['username'];
$address=$_POST['address'];
$pin=$_POST['pin'];
$balance=$_POST['balance'];
$phone=$_POST['phone'];
$accounttype=$_POST['accounttype'];
$con=mysqli_connect('localhost', 'root','','banking');
mysqli_select_db($con,'banking');
$q="insert into account(name,address,pin,cardno,balance,phone,accounttype) values('$username','$address','$pin','$cardno','$balance','$phone','$accounttype')";
$status=mysqli_query($con,$q);
mysqli_close($con);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REGISTER</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
	.php{
		color:yellow;}
		
			
		</style>
</head>
<body>
<div class="bgimg">
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" >
<div class="container">
<a href="" class="navbar-brand text-warning font-weight-bold">LEarnQuik</a>
<button class="navbar-toggler" type="button" data-toggle="collapse"  data-target="#collapsenavbar">
<span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="collapsenavbar">
<ul class="navbar-nav ml-auto text-center">

<li class="nav-item">
<a href="" class="nav-link text-white">Buy Book</a></li>
<li class="nav-item">
<a href="" class="nav-link text-white">Sell Book</a></li>
<li class="nav-item">
<a href="" class="nav-link text-white"> Account</a></li>
<li class="nav-item">
<a href="" class="nav-link text-white">Contact Us</a></li>
<li class="nav-item">
<a href="" class="nav-link text-white">About Us</a></li>
</ul>
</div>
</nav><br><br><br><br>
<div class="container text-center headerset">
<div class="php">
<h2><?php if($status==1){
echo"<br> Your Card no is"."   " .$cardno;
echo "<br> Your Pin is"."    ".$pin;
echo"<br>Please Save the Cardno and Pin for login";}
 ?></h2></div>




<a href="login.php"><button class="btn btn-primary text-white btn-lg" >LOGIN</button></a>

</div>


<footer class="footer bg-dark text-center text-white fixed-bottom"><h6 class="text-center">COPYRIGHT &copy; 2019 DESIGNED BY LEarnQuik</h6></footer>
</body>
</html>

 
