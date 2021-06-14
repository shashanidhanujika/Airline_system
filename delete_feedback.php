<?php
	$userName=$_GET['name'];
	include('connection.php');
	mysqli_query($conn,"delete from `contact` where name='$userName'");
    
	header('location:contact.php');
?>