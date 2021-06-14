<?php
	include('../includes/connection.php');	$flightNo=$_GET['flightNo'];
	$date=$_POST['date'];
	$des=$_POST['des'];
    $time=$_GET['time'];
	$ass=$_POST['ass'];
	$seat=$_POST['seat'];
    $cap=$_GET['cap'];
	
	mysqli_query($conn,"update `timetable` set flightNo='$flightNo', date='$date',des='$des', time='$time', ass='$ass',seat='$seat', cap='$cap' where flightNo='$flightNo'");
	header('location:add_flight.php');
?>