<?php
//session_start();
require 'dbconfig/dbconfig.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        login page
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
     <link rel="stylesheet" href="css/logincss.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
  <div class="container">
      <a class="navbar-brand" class="bmb" href="#"><i class="fas fa-book-open"></i> BookMyBook</a>
   <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="#">Sign Up <i class="fas fa-user-plus"></i></a></li> -->
      <!-- <i class="fas fa-user-tie"></i> -->
     <div>
        <a href="home.php"><button type="button" class="btn btn-info navbar-btn " id="sign">Home</button> <!--<i class="fas fa-user-plus"> --></a></i>
      
  </div> 
  </div><!-- /.navbar-collapse -->
 </nav> 
 

 <div class="loginkaro">
 <form action="login.php" method="post">
     <nav class="navbar mx-auto navbar-dark bg-dark ">
         <h3> <div class="center"> Your Book Your Way!</div></h3>
</nav>
     
      <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"><b>Username</b></label>
         <div class="col-sm-9">
           <input name="username" type="text" class="form-control" id="inputEmail3" placeholder="Username" required>
         </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"><b>Password</b></label>
    <div class="col-sm-9">
      <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password" required>

	</div>
  </div>
  <input name="login" type="submit" class="btn btn-primary" value="login">
    </div>
  </div>
</form>
<?php
if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];	
$query="select * from userinfo where username='$username' AND password='$password'";	
$query_run=mysqli_query($con,$query);
if(@mysqli_num_rows($query_run)>0)
{
echo '<script type="text/javascript"> alert("Successfully logged in!")</script>';
$_SESSION['username']=$username;	
header('location:selectbook.php');
}
else
{
echo '<script type="text/javascript"> alert("Username doesnot exists!!Please Register")</script>';	
}	
}
?>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

