<?php
    
    include 'connection.php';
     session_start();

    
    
     if(isset($_POST['register']))
            {
              $sqlResult=0;
                $userName=$_POST["userName"];
                
                $password=$_POST["pwd"];
                $dateOfBirth=$_POST["dob"];
                $gender=$_POST["gender"];
                $tel=$_POST["tel"];
                $id=$_POST["id"];
                $age=$_POST["age"];
                $email=$_POST["email"];
                
                
                
         
                mysqli_select_db($conn, $dbname);
         
                if(isset($_FILES['img'])){
                    $dir = "images/dp/";
                    $fileName = $_FILES['img']['name'];
                    $fileNameTmp = $_FILES['img']['tmp_name'];
                    $path = $dir.$fileName;
                    echo "aaa";
                    
                    $status = 0;
                    
                    $status = move_uploaded_file($fileNameTmp,$path);
                    
                    if($status){
                        $sql="INSERT INTO `student` VALUES ('$userName','$password',  '$dateOfBirth', '$gender', $tel, '$id', $age, '$email','$path')";
                        
                        echo $sql;
                        
                        $sqlResult=mysqli_query($conn,$sql);
                    }
                }
         
                else {
                    $sql="INSERT INTO `student` VALUES ('$userName','$password',  '$dateOfBirth', '$gender', $tel, '$id', $age, '$email','images/dp/default.png')";
                
                    $sqlResult=mysqli_query($conn,$sql);
                }
         
                 if(!$sqlResult)
                {
                    echo "Data not inserted";
                } else {
                     header('location:editstudent.php');
                 }
                
            }
         mysqli_close($conn); 
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Charted Accountancy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <!--extra-->
    <link rel="stylesheet" href="css/style1.css">
    
  </head>
  <body>
      <div class="bg-top navbar-light">
        <div class="container">
            <div class="row no-gutters d-flex align-items-center align-items-stretch">
                <div class="col-md-4 d-flex align-items-center py-4">
                    <a class="navbar-brand" href="index.php">Charted <span>Accountancy</span></a>
                </div>
                <div class="col-lg-8 d-block">
                    <div class="row d-flex">
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <div class="text">
                                <span>Email</span>
                                <span>Charted@email.com</span>
                            </div>
                        </div>
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <div class="text">
                                <span>Call</span>
                                <span>Call Us: 041 2234800</span>
                            </div>
                        </div>
                        <!--div class="col-md topper d-flex align-items-center justify-content-end">
                            <p class="mb-0">
                                <a href="#" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
                                    <span>Student Login</span>
                                </a>
                            </p>
                        </div-->

                        <div class="col-md topper d-flex align-items-center justify-content-end">
                        <!--div class="col-lg-3 text-right"-->
                            <a href="login.php" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
                            <a href="register.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
                        </div>

                    </div>
                </div>
            </div>
          </div>
    </div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center px-4">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>
          <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a href="index.php" class="nav-link pl-0">Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
               
              <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Register</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Register</span>
      </div>
    </div>

  <!--form-->
  <form  method="post">

    <div class="site-section">
        <div class="container">


            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        
                        <div class="col-md-12 form-group">
                            <label for="username">Username</label>
                            <input type="text" placeholder="Enter User Name" id="username" name="userName" class="form-control form-control-lg" required value="<?php echo $_SESSION['userName']; ?>">
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="id">ID number</label>
                            <input type="text" placeholder="Enter ID number" id="id" name="id" class="form-control form-control-lg" required value="<?php echo $_SESSION['id']; ?>">
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="date">Birthday</label>
                            <input type="text" placeholder="Enter Date of birth" id="dob" name="dob" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="age">Age</label>
                            <input type="text" placeholder="Enter age" id="age" name="age" class="form-control form-control-lg" required>
                          </div>
                          <div class="col-md-12 form-group">
                            <label for="tel">Telephone Number</label>
                            <input type="text" placeholder="Enter Telephone Number" id="tel" name="tel" class="form-control form-control-lg" required>
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="address">Gender</label>
                            <input type="text" placeholder="Enter Gender" id="gender" name="gender" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" placeholder="Enter Email" id="email" name="email" class="form-control form-control-lg" required>
                        </div>
                         
                        <div class="col-md-12 form-group">
                            <label for="pword">Password</label>
                            <input type="password" placeholder="Enter Password" id="pwd" name="pwd" maxlength="15" minlength="8" class="form-control form-control-lg" required>
                        </div>
                      <!--  <div class="col-md-12 form-group">
                            <label for="pword">Comfirm Password</label>
                            <input type="password" placeholder="Re Enter Password" id="pword" name="cPassword" class="form-control form-control-lg" required>
                        </div>
                    </div>-->
                    <div class="col-md-12 form-group">
                            <label for="image">Image</label>
                            <input class="input--style-1" type="file" placeholder="IMAGE" name="img" >

                        </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="submit" value="Register" name="register" href="editstudent.php" class="btn btn-primary btn-lg px-5">
                        </div><br/>
                        <div class="col-6">
                          
                        </div>
                    </div>
                   
                </div>
            </div>
  
        </div>
    </div>

    
</form>

    

    <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>

