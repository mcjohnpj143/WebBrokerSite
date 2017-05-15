<?php session_start();
include('connection.php');
	$username = $_SESSION["Uname"];
	$password = $_SESSION["Pass"];

	$sql = "SELECT * FROM tbluser WHERE Username = '$username' AND Password = '$password'";
	$result = mysqli_query($conn, $sql);
	
		while($row=mysqli_fetch_assoc($result)){
			$UserLevel =$row['UserLevel'];
				
			if($UserLevel=="Admin"){
				header("location:../Admin");
				$_SESSION["userTrapAdmin"] = 1;
			}elseif($UserLevel=="User"){
				header("location:../Account");
				$_SESSION["userTrapUser"] = 1;
			}
		}
		mysqli_close($conn);
?>