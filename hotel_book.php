<?php

    include("connection.php");
    session_start();
    
if(isset($_POST['submit'])){
    
    $user=$_POST['userName'];
    //$id=$_POST['id'];
    //$tel=$_POST['tel'];
    
    $email=$_POST['email'];
   
    
    $adult=$_POST['adult'];
    $kids=$_POST['kids'];
    $date = $_POST['date'];
    $return = $_POST['return'];
    $class=$_POST['class'];
    //echo "ghjgjhg".$date;
    
     $sql="INSERT INTO `hotel` (`userName`, `email`, `adult`, `kids`, `dateF`, `dateT`, `class`) VALUES ('$user','$email',$adult,$kids,'$date','$return','$class')";
    //$sql="INSERT INTO `hotel` (`userName`) VALUES ('$user')";
    
    //$sql="INSERT INTO `hotel`(`userName`, `email`, `adult`, `kids`, `date`, `return`, `class`) VALUES ('{$user}','{$email}',{$adult},{$kids},'{$date}','{$return}','{$class}')";
  
     $sqlResult=mysqli_query($conn,$sql);
    
    if($sqlResult){
       // echo "success";
    }
    
      //echo "unsuccess";   
}
 header('location:pay.php');
mysqli_close($conn);

?>

<html lang="en">

<head>


   
    <title>hotel book</title>

  
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
                    <h2 class="title">Hotel Book Info</h2>
                    <form method="post" action="hotel_book.php">
                           <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" id="userName" placeholder="NAME" name="userName" required value="<?php echo $_SESSION['id'] ?>">
                                   
                                </div>
                            </div>
                            <!--<div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="ID" name="id" value="
                                </div>
                            </div> -->
                        </div>
                           <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" id="email" placeholder="EMAIL" name="email" required value="<?php echo $_SESSION['email'] ?>">
                                   
                                </div>
                            </div>
                              
                            <!-- <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="TELEPHONE NUMBER" name="tel" value="
                                </div>
                            </div> -->
                               <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                       TYPE <select name="class" id="select" required>
                                             <option disabled="disabled" selected="selected" ></option>
                                            <option value="One room">One room</option>
                                            <option value="Double">Double</option>
                                            <option value="Family">Family</option>
                                            
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                               </div>
                     
                        
                        <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                       KIDS <select name="kids" id="select" required>
                                             <option disabled="disabled" selected="selected" ></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        ADULT <select name="adult" id="select" required>
                                            <option disabled="disabled" selected="selected" ></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-2">
                                <div class="input-group">
                                    <!-- <input class="input--style-1 " id="date" type="date" placeholder="DATE" name="date"> -->
                                    <input class="input--style-1" type="text" id="date" placeholder="START DATE" name="date" required>
                                   
                                </div>
                            </div>
                         <div class="col-2">
                                <div class="input-group">
                                    <!-- <input class="input--style-1 "  id="date1" type="date" placeholder="RETURN DATE" name="return"> -->
                                    <input class="input--style-1" type="text" id="date1" placeholder="RETURN DATE" name="return" required>
                                </div>
                             <a href="services.html"><img src="images/home-icon.png" </a>
                            </div>
                       
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="submit" >Submit</button>
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

