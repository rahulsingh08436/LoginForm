<?php 
include 'database.php';

if(isset($_POST[Submit])){
	
	$N_Name = mysqli_real_escape_string($con, $_POST['N_Name']);
	$N_Password = mysqli_real_escape_string($con, $_POST['N_Password']);
	$N_Username = mysqli_real_escape_string($con, $_POST['N_Username']);


	$query = "insert into newuser(N_Name, N_Password, N_UserName)values('$N_Name','$N_Password','$N_Username')";
	
		if(!mysqli_query($con, $query)){
			die('Error:'.mysqli_error($con));
		}
		else{
			header("Location: index.php");
			exit();
		}
	
}