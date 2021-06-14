


<html>
    <head>
        <title>flight time table</title>
        <link rel="stylesheet" type="text/css" href="tablec.css">
        <link rel="stylesheet" type="text/css" href="css1/theme.css">
    <link rel="stylesheet" type="text/css" href="css1/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    </head>
<body>
    
    <div class="container-fluid">
        <div class="row fixed-top navshadow">
            
           
            <div class="col-md  navigation1" position-fixed>
                
                <button class="join_btn" onclick="location.href='admin.html'">Back</button>
                
            </div>
    
        </div>
    </div>
    
    
<h1><span class="blue"></span>Today Flight details <span class="blue"></span><span class="yellow">CEYLON</span></h1>
<h2><a href="http://pablogarciafernandez.com" target="_blank"></a></h2>

<table class="container">
    
	<thead>
		<tr name="t1">
			<th ><h1>Flight No</h1></th>
			<th ><h1>Date</h1></th>
			<th ><h1>Destination</h1></th>
			<th ><h1>Scheduled Departure</h1></th>
            <th ><h1>Assinged Plane Type</h1></th>
            
            <th ><h1>Seats reserved</h1></th>
            <th ><h1>Seats available</h1></th>
            <th ><h1>Delete</h1></th>
            <th ><h1>Edit</h1></th>
            
		</tr>
	</thead>
	<tbody>
        <?php
					include('connection.php');
					$query=mysqli_query($conn,"select * from `timetable`");
                    
					while($row=mysqli_fetch_array($query)){
						?>
		<tr name="t2">
			<td ><?php echo $row['flightNo']; ?></td>
			<td ><?php echo $row['date']; ?></td>
			<td ><?php echo $row['des']; ?></td>
			<td ><?php echo $row['time']; ?></td>
            <td ><?php echo $row['ass']; ?></td>
            
            <td ><?php echo $row['seat']; ?></td>
            <td ><?php echo $row['cap']; ?></td>
            <td > <a href="delete.php?flightNo=<?php echo $row['flightNo']; ?>"><img src="images/delete.png" style="width:30px;"></a></td>
            <td > <a href="ed.php?flightNo=<?php echo $row['flightNo']; ?>"><img src="images/edit.png" style="width:30px;"></a></td>
		</tr>
		
	
   
        <?php
					}
				?>
        
	</tbody>
</table>
</body>
</html>







