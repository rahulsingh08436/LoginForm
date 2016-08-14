<?php

include 'database.php';
$host = 'localhost';
$user = 'root';
$pass = '';

if(isset($_POST[N_Username])){
	$name = $_POST['N_Username'];
	$checkdata = "SELECT N_Username FROM newuser WHERE N_Username ='$name'";
	$query = mysql_query($checkdata);
	
	if(mysql_num_rows($query)>0)
	{
	echo "username already exists";
	}
	else
	{
	echo "OK";
	}
exit();
}
}
