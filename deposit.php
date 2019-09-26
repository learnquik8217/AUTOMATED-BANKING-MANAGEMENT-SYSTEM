<?php
session_start();
if (!isset($_SESSION['cardno']))
header('location:login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deposit</title>
</head>
<body>
<h2>Deposit money</h2>
<form action="#" method="post">
	<label for="Ammout">Ammout</label>
	<input type="number" name="balance" id="Ammout" required>
	<input type="submit" value="Submit" name="submit">
	
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$con=mysqli_connect('localhost','root','','banking');
mysqli_select_db($con,'banking');
	$balance=$_POST['balance'];
	$q="UPDATE account
	SET balance=balance+$balance
	WHERE cardno=$_SESSION['cardno']";
	mysqli_query($conn,$q);

} ?>