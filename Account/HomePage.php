<?php session_start();
if(!isset($_SESSION["userTrapUser"])){
header("location:../../WebBroker");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>ADMIN PAGE</title>
	</head>
	<body>
	<h5>WELCOME ADMIN!!!</h5>
		<a href="Users.php">
			<input type= "submit" alt="Submit Form" name="ViewUser" value="View Users" />
		</a>
		<a href="../PHP/Session_Destroy.php"><input type= "submit" alt="Submit Form" name="Logout" value="Logout" /></a>
	</body>
</html>