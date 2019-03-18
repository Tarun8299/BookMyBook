<?php
session_start();
require 'dbconfig/dbconfig.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/signupcss.css">
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
  <div class="container">
      <a class="navbar-brand" class="bmb" href="#"><i class="fas fa-book-open"></i> BookMyBook</a>
  </div><!-- /.navbar-collapse -->
   <ul class="nav navbar-nav navbar-right">
   <div>
      <a href="home.php"><button type="button" class="btn btn-primary navbar-btn" id="log"><i class="fas fa-user-tie"></i> Home</button> </a>
      </div>
 </nav>
 

 	 <form action="otp.php" method="post">
       
         <div id="container">
		 <div>
             <p> <h3><b>Verify your Email<br><br>Enter OTP!</b></h3></p>
 	     </div>
     
     <div class="form-group row">
     	 <label for="input" class="col-sm-2 col-form-label"><b>OTP</b></label>
         <div class="col-sm-10">
           <input name="otp" type="password" class="form-control mt-0" id="input" placeholder="One Time Password" required>
         
           <div><input name="verify" type="submit" class="btn btn-success again" value="Verify"></div>
    
                 </div>
   </div>
 </div>
 </div>
</form>
</div>

<?php

$username=$_SESSION['username'];
$email =$_SESSION['email'];
$password =$_SESSION['password'];
$contact =$_SESSION['contact'];
$address=$_SESSION['address'];

if(isset($_POST['verify']))
{

          
if($_POST['otp']==$_SESSION['otp'])    
{
$query="insert into userinfo values('$username','$email','$password','$contact','$address')";
$query_run=mysqli_query($con,$query);
if($query_run)
{
echo '<script type="text/javascript"> alert("User registered..please login!!")</script>';	
    session_destroy();
header('location:login.php');
}
else
{
	echo '<script type="text/javascript"> alert("Error!! cannot connect to the database")</script>';
}	

}
    else{
      echo '<script type="text/javascript"> alert("Wrong OTP!!")</script>';  
    }
        
}

?>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
