<?php
session_start();
require 'dbconfig/dbconfig.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Details</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" href="css/details.css">
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
  <div class="container">
      <a class="navbar-brand" class="bmb" href="#"><i class="fas fa-book-open"></i> BookMyBook</a>
  </div><!-- /.navbar-collapse -->
 </nav>
   <form action="details.php" method="POST">
    <div id="container">
         <div>
		  <p> <h2>Welcome user!</h2></p>
         <p> <h3>Enter further Details!</h3></p>
     </div>
     <div class="form-group row">
          <label for="input" class="col-sm-2 col-form-label"><b>Full name</b></label>
         <div class="col-sm-10">
           <input type="text" class="form-control" id="input" placeholder="Name" required>
         </div>
  </div>
   
    <div class="form-group row">
    <label for="input" class="col-sm-2 col-form-label"><b>Contact No.</b></label>
         <div class="col-sm-10">
           <input name="contact" type="text" class="form-control" id="input" placeholder="Contact No." required>
         </div>
  </div>
  <div class="form-group row">
    <label for="input" class="col-sm-2 col-form-label"><b>Address</b></label>
    <div class="col-sm-10">
      <input name="address" type="text" class="form-control" id="input" placeholder="Address" required>
    </div>
  </div>
  <div class="form-group row">
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle"  id="city" type="button" id="dropdownMenuButton" data-toggle="dropdown">
    Bhopal
  </button>
 </div>
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle"  id="state" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Madhya Pradesh
  </button><br>
  <input name="login" type="submit" class="btn btn-success" value="Login Now!">
</div>
 
</div>
</form>
<?php
if(isset($_POST['login']))
{
$username=$_SESSION['username'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$query="update userinfo  set contact='$contact',address='$address' where username='$username'";	
$query_run=mysqli_query($con,$query);	
if($query_run)
{
echo '<script type="text/javascript"> alert("Information registered..redirecting to login page!!")</script>';
header('location:login.php');	
}
else
{
	echo '<script type="text/javascript"> alert("Error!!")</script>';
}	
	
}

?>
</div>
 <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>

























 <?php
if(isset($_POST['submit_btn']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$address=$_POST['address'];
$contact=$_POST['contact'];
    
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
    
$query="insert into userinfo values('$username','$email','$password','$contact','$address')";
$query_run=mysqli_query($con,$query);
if($query_run)
{
echo '<script type="text/javascript"> alert("User registered..please login!!")</script>';	
$_SESSION['username']=$username;
header('location:login.php');
}
else
{
	echo '<script type="text/javascript"> alert("Error!!")</script>';
}	
}	
}	
else{
	echo '<script type="text/javascript"> alert("Passwords doesnot match!!")</script>';
}

}
?>
