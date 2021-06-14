


<html>
    <head>
        <title>Message view</title>
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
    
    
<h1><span class="blue"></span>Customer Feedbacks <span class="blue"></span><span class="yellow">CEYLON</span></h1>
<h2><a href="http://pablogarciafernandez.com" target="_blank"></a></h2>

<table class="container">
    
	<thead>
		<tr name="t1">
			<th ><h1>User Name</h1></th>
			<th ><h1>Email</h1></th>
			
			
            <th> <h1>Feedback</h1></th>
           
            
		</tr>
	</thead>
	<tbody>
        <?php
					include('connection.php');
					$query=mysqli_query($conn,"select * from `messages`");
                    
					while($row=mysqli_fetch_array($query)){
						?>
		<tr name="t2">
			<td ><?php echo $row['name']; ?></td>
			
            <td ><?php echo $row['email']; ?></td>
            <td ><?php echo $row['message']; ?></td>
            <td>
								
                <a href="mdelete.php?name=<?php echo $row['name']; ?>"><img src="images/delete.png" style="width:30px;"></a></td>
							
   
		</tr>

   
        <?php
					}
				?>
        
	</tbody>
</table>
</body>
</html>







