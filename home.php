<?php
session_start();
if (!isset($_SESSION['cardno']))
header('location:login.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HOME</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href=".css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	.menus .b1{
		margin-top: 50px;
		padding: 20px;
		color: white;
		text-decoration: none;


	}
	.menus .b2{
		margin-top: 50px;
		padding: 20px;
	}
	.b3{
		margin-top: 50px;
		padding: 20px;
	}
	.b4{
		margin-top: 50px;
		padding: 20px;
	}


</style>
</head>

<body>
<h2 class="text-center">WELCOME</h2>
<div class="menus">
	<center><button class=" btn btn-success text-white b1 " data-target="#f1" data-toggle="collapse">DEPOSIT</button><br>
	<button class=" btn btn-success b2 " data-target="#f2" data-toggle="collapse" >WITHDRAWL</button><br>
	<button class=" btn btn-success b3 " data-target="#f3" data-toggle="collapse">VIEW BALANCE</button><br>
	<a href="logout.php"><button class=" btn btn-success b4">LOGOUT</button></a><br></center>
	
</div>

<div id="f1" class="collapse">
<h2>Deposit money</h2>
<form action="#" method="post" >
	<label for="Ammout">Ammout</label>
	<input type="number" name="balance" id="Ammout" required>
	<input type="submit" value="Submit" name="submit1">
	
</form>
</div>
<div id="f2" class="collapse">
<h2>Withdraw money</h2>
<form action="#" method="post" >
	<label for="Ammout">Ammout</label>
	<input type="number" name="balance" id="Ammout" required>
	<input type="submit" value="Submit" name="submit2">
	
</form>
</div>
<div id="f3" class="collapse">
<h2>Current Balance</h2>
<form action="#" method="post" >
	<input type="submit" value="Check Balance" name="submit3">
	
</form>
</div>
</body>
</html>
<?php

if(isset($_POST['submit1']))
{ $x=$_SESSION['cardno'];
	$con=mysqli_connect('localhost','root','','banking');
    mysqli_select_db($con,'banking');
	$balance=$_POST['balance'];
	$q="UPDATE account
	SET balance=balance+$balance
	WHERE cardno=$x";
	mysqli_query($con,$q);

} ?>

<?php

if(isset($_POST['submit2']))
{ $x=$_SESSION['cardno'];
	$con=mysqli_connect('localhost','root','','banking');
    mysqli_select_db($con,'banking');
	$balance=$_POST['balance'];
	$q="UPDATE account
	SET balance=balance-$balance
	WHERE cardno=$x";
	mysqli_query($con,$q);

} ?>
<?php

if(isset($_POST['submit3']))
{ $x=$_SESSION['cardno'];
	$con=mysqli_connect('localhost','root','','banking');
    mysqli_select_db($con,'banking');
	$q="select balance from account
	WHERE cardno=$x";
	$result=mysqli_query($con,$q);
	$row=mysqli_fetch_array($result);
	echo "Your Balance is:Rs"."  ".$row[0];

} ?>