<?php session_start();

include('connection.php');
	$_SESSION['Uname'] = null;
	$_SESSION['Pass'] = null;
	$username = $_GET['user'];
	$password =  md5($_GET['pass']);
		
		
	$sql = "SELECT * FROM tbluser WHERE Username = '$username' AND Password = '$password'";
	$result = mysqli_query($conn, $sql);
		
	while($row=mysqli_fetch_assoc($result)){
		echo "true";
		$_SESSION['UserLevel'] = $row['UserLevel'];
		$_SESSION['Uname'] = $row['Username'];
		$_SESSION['Pass'] =$row['Password'];
	}
	mysqli_close($conn);
?>