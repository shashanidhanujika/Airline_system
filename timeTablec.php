


<html>
    <head>
        <title>flight time table</title>
        <link rel="stylesheet" type="text/css" href="tablec.css">
   
   <link rel="stylesheet" type="text/css" href="css1/theme.css">
    <link rel="stylesheet" type="text/css" href="css1/style.css">

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/setting.js"></script>
    
  </head>
    
  
    
<body>
    
     <div class="container-fluid">
        <div class="row fixed-top navshadow">
            
           
            <div class="col-md  navigation1" position-fixed>
                
                <button class="join_btn" onclick="location.href='services.html'">Back</button>
                
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
           
            
		</tr>
	</thead>
	<tbody>
        <?php
					include('connection.php');
					$query=mysqli_query($conn,"select * from `timeTable`");
                    
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
   
		</tr>

   
        <?php
					}
				?>
        
	</tbody>
</table>
</body>
</html>







