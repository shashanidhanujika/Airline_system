<?php
    
    include 'connection.php';
session_start();
    $result=mysqli_select_db($conn,$dbname);

    if(!$result)
    {
        echo "Database not selected";
    }
    
     if(isset($_POST['register']))
            {
              
                $userName=$_POST["userName"];
                
                $id=$_POST["id"];
                $cardnum=$_POST["cardnum"];
                $cardbrand=$_POST["cardbrand"];
                $exmonth=$_POST["exmonth"];
                $exyear=$_POST["exyear"];
                $bill=$_POST["bill"];
                $postcode=$_POST["postcode"];
                $city=$_POST["city"];
                $country=$_POST["country"];

                mysqli_select_db($conn, $dbname);
            
                $sql="INSERT INTO `payment` VALUES ('$userName','$id',  $cardnum , '$cardbrand', $exmonth, $exyear, '$bill', $postcode, '$city', '$country')";
                echo $sql;
         
                $sqlResult=mysqli_query($conn,$sql);
                    echo "$sql";
             if($sqlResult){
        echo "success";
    }
    
      echo "unsuccess";
                header('location:index.html');
            }
 
mysqli_close($conn);


?>






<!DOCTYPE html>
<html lang="en">
    
    

<head>


   
    <title>Payment</title>

    
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
                    <h2 class="title">Payment Info</h2>
                    <form method="POST">
                           <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="NAME" name="userName" required value="<?php echo $_SESSION['id'];?>">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="ID" name="id"required value="<?php echo $_SESSION['email'];?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="CARD NUMBER" name="cardnum" required>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="CARD BRAND" name="cardbrand" required>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="EXPIRY MONTH" name="exmonth" required>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="EXPIRY YEAR" name="exyear" required>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="BILL" name="bill" required>
                                </div>
                            </div>
                        </div>
                         <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="CCV CODE" name="postcode" required>
                                     
                                   
                                </div>
                                
                            </div>
                            <a href="services.html"><img src="images/home-icon.png" </a>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="register">Pay</button>
                        </div>
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

