<?php
    
    include 'connection.php';

    $result=mysqli_select_db($conn,$dbname);

    if(!$result)
    {
        echo "Database not selected";
    }
    
     if(isset($_POST['register']))
            {
              $sqlResult=0;
                $userName=$_POST["userName"];
                
                $dateOfBirth=$_POST["dob"];
                $password=$_POST["pwd"];
                $id=$_POST["id"];
                $email=$_POST["email"];
                $tel=$_POST["tel"];
                $gender=$_POST["gender"];
                $age=$_POST["age"];
         
                mysqli_select_db($conn, $dbname);
         
                if(isset($_FILES['img'])){
                    $dir = "images/customerDP/";
                    $fileName = $_FILES['img']['name'];
                    $fileNameTmp = $_FILES['img']['tmp_name'];
                    $path = $dir.$fileName;
                    echo "aaa";
                    
                    $status = 0;
                    
                    $status = move_uploaded_file($fileNameTmp,$path);
                    
                    if($status){
                        $sql="INSERT INTO `customer` VALUES ('$userName','$password',  '$dateOfBirth', '$gender', $tel, '$id', $age, '$email','$path')";
                        
                        echo $sql;
                        
                        $sqlResult=mysqli_query($conn,$sql);
                    }
                }
         
                else {
                    $sql="INSERT INTO `customer` VALUES ('$userName','$password',  '$dateOfBirth', '$gender', $tel, '$id', $age, '$email','images/customerDP/default.png')";
                
                    $sqlResult=mysqli_query($conn,$sql);
                }
         
                 if(!$sqlResult)
                {
                    echo "Data not inserted";
                } else {
                     header('location:log.php');
                 }
                
            }
         mysqli_close($conn); 
?>












<!DOCTYPE html>
<html lang="en">

<head>


   
    <title>register</title>

    
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
                    <h2 class="title">Registration Info</h2>
                    <form method="POST" enctype="multipart/form-data">
                           <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="NAME" name="userName">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="ID" name="id">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="BIRTHDATE" name="dob">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <input class="input--style-1" type="password" placeholder="PASSWORD" name="pwd">
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="TELEPHONE NUMBER" name="tel">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="EMAIL" name="email">
                                </div>
                            </div>
                        </div>
                         <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="AGE" name="age">
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="file" placeholder="IMAGE" name="img">
                                   
                                </div>
                            </div>
                             <a href="index.html"><img src="images/home-icon.png" </a>
                        </div>
                        
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="register">Submit</button>
                           
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

