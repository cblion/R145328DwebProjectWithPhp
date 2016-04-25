<!DOCTYPE html>
<head>
<html>
<title>
</title>
</head>
<body>
<?php 
	$fname=$_POST['username'];
	$sname=$_POST['demail'];
	$fgender=$_POST['dgender'];
	$smedicalaidinsurer=$_POST['dmedicalaidinsurer'];
	$fMedicalAidscheme=$_POST['dMedicalAidscheme'];
	$sMedicalAidscheme=$_POST['dMedicalAidscheme'];
	$foccupation=$_POST['occupation'];
	$snationaIDNumber=$_POST['nationaIDNumber'];
	$fpassword=$_POST['password'];
	
	
	echo "your Firstname is :$fname <br>";
	echo "your Email is :$sname <br>";
	echo "your Gender is :$fgender <br>";
	echo "your Medical aid insurer is :$smedicalaidinsurer <br>";
	echo "your Medical Aid scheme is :$fMedicalAidscheme <br>";
	echo "your occupation is :$foccupation <br>";
	echo "your National ID Number is :$snationaIDNumber <br>";
	echo "your Password is :$fpassword <br>";
	$username=$fname;
	 
?>
<?php 
	
	if($_POST['username']=='cb'&& $_POST['password']=='1234')
	{
	?>
		<a href="profile.php?username=<?php echo $_POST['username'] ?>">
		goto profile page		
		</a>
	<?php	
	}
	else{
	?>
		<a href="index.php">Login failure go to home</a>
		<?php
	}
		?>
</form>
</body>
</html>