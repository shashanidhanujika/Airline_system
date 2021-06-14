<?php
	$userName=$_GET['userName'];
	include('connection.php');
	mysqli_query($conn,"delete from `customer` where userName='$userName'");
    
	header('location:cusdelete.php');
?>