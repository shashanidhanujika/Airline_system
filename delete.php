<?php
	$flightNo=$_GET['flightNo'];
	include('connection.php');
	mysqli_query($conn,"delete from `timetable` where flightNo='$flightNo'");
    
	header('location:add_flight.php');
?>