<?php
session_start();
require_once('PHPMailer/PHPMailerAutoload.php');
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
 
 	 <form action="signup.php" method="post">
       
         <div id="container">
		 <div>
 		<p> <h3>Sign Up!</h3></p>
 	     </div>
     
     <div class="form-group row">
     	 <label for="input" class="col-sm-2 col-form-label"><b>Username</b></label>
         <div class="col-sm-10">
           <input name="username" type="text" class="form-control mt-0" id="input" placeholder="Username" required>
         </div>
   </div>
    <div class="form-group row">
    <label for="input" class="col-sm-2 col-form-label"><b>Email</b></label>
         <div class="col-sm-10">
           <input name="email" type="email" class="form-control mt-0" id="input" placeholder="Email" required>
         </div>
  </div>
       <div class="form-group row">
    <label for="input" class="col-sm-2 col-form-label"><b>Mobileno</b></label>
         <div class="col-sm-10">
           <input name="contact" type="text" class="form-control mt-0" id="input" placeholder="Contact No." required>
         </div>
  </div>     
         
           <div class="form-group row">
    <label for="input" class="col-sm-2 col-form-label"><b>Address</b></label>
    <div class="col-sm-10">
      <input name="address" type="text" class="form-control mt-0" id="input" placeholder="Address" required>
    </div>
  </div>
         
    <div class="form-group row">
    <label for="input" class="col-sm-2 col-form-label "><b>Password</b></label>
         <div class="col-sm-10">
           <input name="password" type="password" class="form-control mt-0" id="input" placeholder="Password" required>
         </div>
  </div>
  <div class="form-group row">
    <label for="input" class="col-sm-2 col-form-label"><b>Confirm-Password</b></label>
    <div class="col-sm-10">
      <input name="cpassword" type="password" class="form-control mt-0" id="input" placeholder="Confirm-Password" required>
      <div><input name="register" type="submit" class="btn btn-success again mt-0" value="REGISTER"></div>
    </div>
    
  </div>
         

</form>
        
 <?php
if(isset($_POST['register']))
{
$_SESSION['username']=$_POST['username'];
$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['password'];
$_SESSION['cpassword']=$_POST['cpassword'];
$_SESSION['address']=$_POST['address'];
$_SESSION['contact']=$_POST['contact'];
$username=$_POST['username'];
    
if($password==$cpassword)
{
$query="select * from userinfo  where username='$username'";
$query_run=mysqli_query($con,$query);
if(@mysqli_num_rows($query_run)>0)
{
echo '<script type="text/javascript"> alert("Username already exists!!")</script>';	
}
else
{
$email=$_POST['email'];
$otp=rand(100000,999999);
$_SESSION['otp']=$otp;
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Host='smtp.gmail.com';
$mail->Port='465';
$mail->isHTML();
$mail->Username='bookmybook2k19@gmail.com';
$mail->Password='Book@1234';
$mail->SetFrom('no-reply@kronos.org');
$mail->Subject='OTP for Verification';
$mail->Body='Dear '.'<strong>'.$_POST['username'].'</strong>'.','.'<br>'.'<br>'.'Your verification code is: '.'<strong>'.$otp.'</strong>'.'<br>'.'<br>'.'If you are having any issues with your account, please don\'t hesitate to contact us by replying to this mail.'.'<br>'.'<br>'.'<br>'.'Thanks!'.'<br>'.'<strong>'.'BookMyBook'.'</strong>';
$mail->AddAddress($email);
$mail->Send();
                
header('location:otp.php');    
}
}
else{
 echo '<script type="text/javascript"> alert("Passwords doesnot match!!")</script>';   
}
}
 ?>
        

    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
