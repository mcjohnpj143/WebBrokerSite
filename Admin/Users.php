<table border=0 align="center" cellpadding=5 style = "-moz-border-radius:0px;padding-top:100px;padding-bottom:90px;color:black;box-shadow:0px 0px 20px">
<tr>
	<td>
		<?php	include('connection.php');
			//session_start();
			echo "<div align ='center' style='padding-bottom:90px;font-size:70px'>Registered Users</div>";
			echo "<form method='post' action='users.php'>
				<div align ='right' style='padding-bottom:20px; padding-right:70px;'>
						Search: <input type='text' name='txtSearch' placeholder='Search here' style='width:400px;height:30px'</input>
								<input type='submit' name='search' value='Search' style='width:80px;height:30px'</input>
				</div></form>";
		?>
	</td>
</tr>
<tr>
<td style="padding-left:90px;">

<?php	include('connection.php');

echo "<form method='post' onSubmit='return confirm('are you sure?')' action='userTransact.php'>";
	echo "<div><input type='submit' value='Home' name='home' id='home' style='width:100px;top:-300px;left:1350px;position:relative; height:30px; border:0px solid #000; '></input></div>";

	echo "<div style='color:white;width:1510px; border:0px solid #000; box-shadow:0px 0px 20px'>
			<div style='background-color:transparent;text-align:center;width:50px; height:30px; float:left; border:1px solid #000;border-color:#FFF;'></div>
			<div style='background-color:#66F;text-align:center;width:200px; height:30px; float:left; border:1px solid #000;border-color:#FFF;'>First Name</div>
			<div style='background-color:#66F;text-align:center;width:200px; height:30px; float:left; border:1px solid #000;border-color:#FFF;'>Last Name</div>
			<div style='background-color:#66F;text-align:center;width:50px; height:30px; float:left; border:1px solid #000;border-color:#FFF;'>MI</div>
			<div style='background-color:#66F;text-align:center;width:200px; height:30px; float:left; border:1px solid #000;border-color:#FFF;'>Gender</div>
			<div style='background-color:#66F;text-align:center;width:200px; height:30px; float:left; border:1px solid #000;border-color:#FFF;'>Birthday</div>
			<div style='background-color:#66F;text-align:center;width:200px; height:30px; float:left; border:1px solid #000;border-color:#FFF;'>Address</div>
			<div style='background-color:#66F;text-align:center;width:300px; height:30px; float:left; border:1px solid #000;border-color:#FFF;'>Picture</div>
		</div>";
		/* For Search */
		if(isset($_POST['search']))
		{
		$username = $_POST['txtSearch'];
		$sql_slct = mysql_query("select * from TBL_Member WHERE fname LIKE '".$username."%' OR lname LIKE '".$username."%'") or die(mysql_error());
		while($row=mysql_fetch_array($sql_slct))
		{
			$mem_id = $row['mem_id'];
			
			$fname = $row['fname'];
			$lname = $row['lname'];
			$MI = $row['MI'];
			$gender = $row['gender'];
			$Birthday = $row['Birthday'];
			$address = $row['address'];
			//$picture = $row['picture'];
				
			echo "
				
				<div style='width:1460px; height:30px; border:0px solid #000;'>
					<div style='width:50px; height:30px;position:relative;left:20px;top:5px;  float:left; border:1px solid transparent; '><input type='checkbox' name='checkbox[]' id='checkbox[]' value='".$mem_id."'></input></div>
					<div style='width:200px; height:30px; float:left; border:1px solid #000; '>".$fname."</div>
					<div style='width:200px; height:30px; float:left; border:1px solid #000; '>".$lname."</div>
					<div style='width:50px; height:30px;  float:left; border:1px solid #000; '>".$MI."</div>
					<div style='width:200px; height:30px; float:left; border:1px solid #000; '>".$gender."</div>
					<div style='width:200px; height:30px; float:left; border:1px solid #000; '>".$Birthday."</div>
					<div style='width:200px; height:30px; float:left; border:1px solid #000; '>".$address."</div>
					<div style='width:300px; height:30px; float:left; border:1px solid #000; '><img src =\"" . "../" . $row['picture']. "\" style='position:relative;width:40px;height:30px;left:125px;box-shadow: 0px 0px 5px;color:#000'></div>	
				</div>";
		}
		}
		/* End */
		else
		{
		$sql_slct = mysql_query("select * from TBL_Member where mem_id != '".$_SESSION['ID']."' ORDER by fname") or die(mysql_error());
		while($row=mysql_fetch_array($sql_slct))
		{
			$mem_id = $row['mem_id'];
			
			$fname = $row['fname'];
			$lname = $row['lname'];
			$MI = $row['MI'];
			$gender = $row['gender'];
			$Birthday = $row['Birthday'];
			$address = $row['address'];
			//$picture = $row['picture'];
				
			echo "
				
				<div style='width:1460px; height:30px; border:0px solid #000;'>
					<div style='width:50px; height:30px;position:relative;left:20px;top:5px;  float:left; border:1px solid transparent; '><input type='checkbox' name='checkbox[]' id='checkbox[]' value='".$mem_id."'></input></div>
					<div style='width:200px; height:30px; float:left; border:1px solid #000; '>".$fname."</div>
					<div style='width:200px; height:30px; float:left; border:1px solid #000; '>".$lname."</div>
					<div style='width:50px; height:30px;  float:left; border:1px solid #000; '>".$MI."</div>
					<div style='width:200px; height:30px; float:left; border:1px solid #000; '>".$gender."</div>
					<div style='width:200px; height:30px; float:left; border:1px solid #000; '>".$Birthday."</div>
					<div style='width:200px; height:30px; float:left; border:1px solid #000; '>".$address."</div>
					<div style='width:300px; height:30px; float:left; border:1px solid #000; '><img src =\"" . "../" . $row['picture']. "\" style='position:relative;width:40px;height:30px;left:125px;box-shadow: 0px 0px 5px;color:#000'></div>	
				</div>";
		}
		}
			echo "<div style='width:350px;top:50px;left:20px;position:relative; height:30px; border:0px solid #000; '><input type='submit' value='Delete' name='delete' id='delete'></input></div>";
		 	
		echo "<div style='width:350px;top:50px;left:100px;position:relative; height:30px; border:0px solid #000; '><input type='submit' value='Update' name='edit' id='update'></input></div>";
	echo "</form>";
?>
		<!--<div><img src =\"" . "../" . $row['picture']. "\"></div> -->
		
</td></tr>
</table>