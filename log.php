<?php

    include("connection.php");
    session_start();
    
    if(isset($_POST['register'])){
        $user=$_POST['userName'];
        $pwd=$_POST['pwd'];
        
        
        $query="SELECT * FROM `customer` where id='{$user}' AND password='{$pwd}' LIMIT 1";
        $query2="SELECT * FROM `admin` where ad_id='{$user}' AND password='{$pwd}' LIMIT 1";
        $result=mysqli_query($conn,$query);
        $result2=mysqli_query($conn,$query2);
        
        
            if(mysqli_num_rows($result)==1){
                header('location:services.html');
                if($query=mysqli_fetch_assoc($result)){
                    $_SESSION['id']=$query['id'];
                    $_SESSION['userName']=$query['userName'];
                    $_SESSION['email']=$query['email'];
                }
            }
       
            else if(mysqli_num_rows($result2)==1){
                header('location:admin.html');
                if($query2=mysqli_fetch_assoc($result2)){
                    $_SESSION['ad_id']=$query2['ad_id'];
                }
            }
            else
            {
                echo"<script>alert('correct user name & password')</script>";
            }
    
            }
        
    ?>





<!DOCTYPE html>
<html lang="en">

<head>
    
  

    
    
    <title>log in</title>

   
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
   
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

   
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <link href="css/mainn.css" rel="stylesheet" media="all">
</head>

<body>
    
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Login Info</h2>
                    <form method="POST">
                        
                     
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="YOUR ID" name="userName" required>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="password" placeholder="PASSWORD" name="pwd" required>
                                </div>
                            </div>
                        </div>
                         
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="register" href="services.html">Log In</button>
                            
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

