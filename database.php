<?php

$con=mysqli_connect("localhost","root","","login");
if(mysqli_connect_errno()){
	echo 'Failed to connect to mysql'.mysqli_connect_errno();
}
