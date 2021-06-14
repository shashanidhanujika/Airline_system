


<html>
    <head>
        <title>flight time table</title>
        <link rel="stylesheet" type="text/css" href="tablec.css">
        <link rel="stylesheet" type="text/css" href="css1/theme.css">
    <link rel="stylesheet" type="text/css" href="css1/style.css">
        
    </head>
<body>
    
      
     <div class="container-fluid">
        <div class="row fixed-top navshadow">
            
           
            <div class="col-md  navigation1" position-fixed>
                
                <button class="join_btn" onclick="location.href='admin.html'">Back</button>
                
            </div>
    
        </div>
    </div>
<h1><span class="blue"></span>Customer reg. details <span class="blue"></span><span class="yellow">CEYLON</span></h1>
<h2><a href="http://pablogarciafernandez.com" target="_blank"></a></h2>

<table class="container">
    
	<thead>
		<tr name="t1">
			<th ><h1>Image</h1></th>
            <th ><h1>User Name</h1></th>
			<th ><h1>Date Of Birth</h1></th>
			
			<th ><h1>Telephone Number</h1></th>
            <th ><h1>ID</h1></th>
            
            <th ><h1>Age</h1></th>
            <th ><h1>Email</h1></th>
           
            
		</tr>
	</thead>
	<tbody>
        <?php
					include('connection.php');
					$query=mysqli_query($conn,"select * from `customer`");
                    
					while($row=mysqli_fetch_array($query)){
						?>
		<tr name="t2">
            <td ><img src="<?php echo $row['image']; ?>" width="50px"></td>
			<td ><?php echo $row['userName']; ?></td>
			
			<td ><?php echo $row['gender']; ?></td>
			<td ><?php echo $row['tel']; ?></td>
            <td ><?php echo $row['id']; ?></td>
            
            <td ><?php echo $row['age']; ?></td>
            <td ><?php echo $row['email']; ?></td>
   
		</tr>

   
        <?php
					}
				?>
        
	</tbody>
</table>
</body>
</html>







