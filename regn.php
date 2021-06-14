
<?php
    
    include 'connection.php';

    $result=mysqli_select_db($conn,$dbname);

    if(!$result)
    {
        echo "Database not selected";
    }
    
     if(isset($_POST['register']))
            {
              
                $userName=$_POST["userName"];
                
                $dateOfBirth=$_POST["dob"];
                $password=$_POST["pwd"];
                $id=$_POST["id"];
                $email=$_POST["email"];
                $tel=$_POST["tel"];
                $gender=$_POST["gender"];
                $age=$_POST["age"];

                mysqli_select_db($conn, $dbname);
            
                $sql="INSERT INTO `customer` VALUES ('$userName','$password',  '$dateOfBirth', '$gender', $tel, '$id', $age, '$email')";
                echo $sql;
         
                $sqlResult=mysqli_query($conn,$sql);
                    echo "$sql";
             if($sqlResult){
        echo "success";
    }
    
      echo "unsuccess";
                header('location:regn.php');
            }
 
mysqli_close($conn);

?>





<html>
<head>
<title>sign_form</title>
<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
<script src="bootstrap-3.3.7/jq/jquery.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<link href="form1.css" type="text/css" rel="stylesheet"/>

<style>
		body {

  background-image:linear-gradient(rgba(0,0,0,4),rgba(0,0,0,0.3)), url("images/item-37.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: 100% 100%;
  margin-top: 60px;  
  background-attachment: fixed;
            
            
}
		</style>
</head>
<body>

  <div class="container">
       
            <div class="row ">
            	
		
                
            </div>  
     
    <h1 style="color: white;" >Registration Form</h1>
    
      
    <hr>
      <br>
      <br>
<div class="signin">
    <form>
<div class="form-group">
    
    <label for="first name"><b>User Name </b></label>
    <input type="text"  class="form-control" style="height: 35px; width: 300px; border-radius: 5px;" placeholder="Enter Your user Name" name="userName" required>
</div>
        <br>
<div class="form-group">
    <label for="psw"><b>ID Number</b></label>
    <input type="text" class="form-control" style="height: 35px;  width: 300px; border-radius: 5px;" placeholder="Enter your ID " name="id" required><br>
</div>
<div class="form-group">
    <label for="first name"><b>Date of Birth </b></label>
    <input type="text"  class="form-control" style="height: 35px; width: 250px; border-radius: 5px;" placeholder="Enter date of birth" name="dob" required><br>
</div>
<div class="form-group">
    <label for="psw"><b>Email </b></label>
    <input type="text" class="form-control" style="height: 35px;  width: 300px; border-radius: 5px;" placeholder="Enter email" name="email" required><br>
</div>       
<div class="form-group">
    <label for="psw"><b>Telephone Number </b></label>
    <input type="text" class="form-control" style="height: 35px;  width: 300px; border-radius: 5px;" placeholder="Enter telphone number" name="tel" required><br>
</div>            
<!--<div class="form-group">      
    <label for="Date Of Birth"><b>Country </b></label>
    <input type="text"  class="form-control" style="height: 35px;  width: 150px; border-radius: 5px;" placeholder="Enter birth Country" name="DOB" required><br>
</div>-->
<div class="form-group">      
	 <label for="Gender"><b>Gender </b></label>
    <input type="text"  class="form-control" style="height: 35px; width: 100px; border-radius: 5px;" placeholder="Enter Gender " name="gender" required><br>
</div>


<div class="form-group">      
	 <label for="Age"><b>Age </b></label>
    <input type="text"  class="form-control" style="height: 35px;  width: 70px; border-radius: 5px;" placeholder="Age " name="age" required><br>
</div>	
<div class="form-group">      
	 <label for="Gender"><b>Password </b></label>
    <input type="password"  class="form-control" style="height: 35px; width: 100px; border-radius: 5px;" placeholder="Enter Password " name="pwd" required><br>
</div>

<!--<div class="form-group"> 
    
    <label for="DP"><b>Enter DP *</b></label>
  <input type="file"  class="form-control" class="btn1"style="height: 35px;  width: 200px; border-radius: 5px;"name="pic" accept="image/*"><br>

      </div>-->
      <br><br>

         

    

    <div >
      <button type="reset" formaction="main.html" class="btn01"  >Reset</button>
   
      <button type="submit" formaction="services.html" class="btn02" name="register">Sign Up</button>
        <br>
        
    </div>
    </div>
    </form>
      </div>
  </div>

</body>
</html>