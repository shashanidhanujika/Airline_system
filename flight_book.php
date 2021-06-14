<?php

    include("connection.php");
    session_start();

    $msg = "";
    
if(isset($_POST['submit'])){
    
    $user=$_POST['userName'];
    //$id=$_POST['id'];
    //$tel=$_POST['tel'];
    
    
    $email=$_POST['email'];
    $to=$_POST['to'];
    $from=$_POST['from'];
    $class=$_POST['class'];
    $adult=$_POST['adult'];
    $kids=$_POST['kids'];
    $date = $_POST['date'];
    $return = $_POST['return'];
    //echo "ghjgjhg".$date;
    
     $sql="INSERT INTO `flight` (`userName`, `email`, `to`, `from`, `class`, `adult`, `kids`, `dateF`, `dateT`) VALUES ('$user', '$email', '$to', '$from', '$class', '$adult', '$kids', '$date', '$return');";
    
        
     $sqlResult=mysqli_query($conn,$sql);
    
    if($sqlResult){
        $msg = "Success";
        header('location:pay.php');
    }
         
}


?>









<html lang="en">

<head>


   
    <title>flight book</title>

    
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
                    <h2 class="title">flight Book Info</h2>
                    <form  action="" method="post">
                           <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="NAME" name="userName" required value="<?php echo $_SESSION['id']; ?>">
                                   
                                </div>
                            </div>
                            <!--<div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="ID" name="id" value="<?php echo $_SESSION['id']; ?>">
                                </div>
                            </div> -->
                        </div>
                           <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="EMAIL" name="email" required value="<?php echo $_SESSION['email']; ?>">
                                   
                                </div>
                            </div>
                              
                            <!-- <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="TELEPHONE NUMBER" name="tel" value="<?php echo $_SESSION['tel']; ?>">
                                </div>
                            </div> -->
                               <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                       TYPE <select name="class" required>
                                             <option disabled="disabled" selected="selected" ></option>
                                            <option value="Bussiness">Bussiness</option>
                                            <option value="Economy">Economy</option>
                                            <option value="Other">Other</option>
                                            
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                               </div>
                     
                             <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                       FROM <select name="from" required>
                                             <option disabled="disabled" selected="selected" ></option>
                                            <option value="Australia">Australia</option>
                                            <option value="Newzeland">Newzeland</option>
                                            <option value="Sri Lanka">Sri Lanaka</option>
                                            
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        TO <select name="to" required>
                                            <option disabled="disabled" selected="selected" ></option>
                                            <option value="Australia">Australia</option>
                                            <option value="Newzeland">Newzeland</option>
                                            <option value="Sri Lanka">Sri Lanaka</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                       KIDS <select name="kids" required>
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
                                        ADULT <select name="adult" required>
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
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="DATE" name="date" required>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                         <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="RETURN DATE" name="return" required>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    
                                </div>
                              <div class="col-2">
                            
                        
                        </div>
                            
                             
                            </div>
                        
                        
                       
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="submit" href="pay.php">Submit</button>
                        </div>
                        <div class="p-t-20">
                            <h6><?php echo $msg; ?></h6>
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

