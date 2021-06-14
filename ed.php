<?php
	include('connection.php');
	$flightNo=$_GET['flightNo'];
	$query=mysqli_query($conn,"select * from `timetable` where flightNo='$flightNo'");
	$row=mysqli_fetch_array($query);
?>









<!DOCTYPE html>
<html lang="en">
    
    

<head>


   
    <title>edit</title>

    
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
   
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

 
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

   
    <link href="css/mainn.css" rel="stylesheet" media="all">
    
    
  

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/setting.js"></script>
      
  
</head>

<body>
    
     
        
    
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Edit Flight Info</h2>
                    <form method="POST" action="update.php?flightNo=<?php echo $flightNo; ?>">
                           <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="FLIGHT NO " value="<?php echo $row['flightNo']; ?>" name="flightNo" required>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="DATE" value="<?php echo $row['date']; ?>" name="date" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Destination" value="<?php echo $row['des']; ?>" name="des" required>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="TIME" value="<?php echo $row['time']; ?>" name="time" required>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="ASS" value="<?php echo $row['ass']; ?>" name="ass" required>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Seat Reserved"  value="<?php echo $row['seat']; ?>" name="seat" required>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Seat Available" value="<?php echo $row['cap']; ?>" name="cap" required>
                                </div>
                            </div>
                        </div>
                        <!--
                         <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="CCV CODE" name="postcode" required>
                                   
                                </div>
                            </div>
                            
                        </div>-->
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

   
    <script src="vendor/jquery/jquery.min.js"></script>

    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    
    <script src="js/global.js"></script>

</body>

</html>



