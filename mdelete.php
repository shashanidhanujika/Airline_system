<?php
	$userName=$_GET['name'];
	include('connection.php');
	mysqli_query($conn,"delete from `messages` where name='$userName'");
    
	header('location:msg.php');
?>