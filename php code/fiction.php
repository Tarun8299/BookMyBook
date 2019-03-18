<?php
session_start();
require 'dbconfig/dbconfig.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>BookMyBook</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Coiny|Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme|Amatic+SC|Bangers|Coiny|Josefin+Sans:400,700|Lato|Merienda|Monoton|Permanent+Marker|Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noticia+Text" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/fiction.css">
</head>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content">
                 <h1>WELCOME TO THE DREAMY WORLD!</h1>
                </div>
            </div>
         </div>
    </div>
  <div class="slide">
      <div class="row">
         <div class="col-lg-2 col-sm-6  shifa ">
            <div class="thumbnail">
            <img src="https://images-na.ssl-images-amazon.com/images/I/91Hv8E17ViL._AC_UL320_SR212,320_.jpg" height="200" width="180">
             </div>
        </div>
        <div class="col-lg-2 col-sm-6  shifa">
            <div class="thumbnail">
                <img src="https://www.hp-lexicon.org/wp-content/uploads/2018/04/harry-potter-book-1.jpg" height="200" width="180">
            </div>
        </div>
       <div class="col-lg-2 col-sm-6  shifa">
            <div class="thumbnail">
                <img src="https://images-na.ssl-images-amazon.com/images/I/91nTClkODkL.jpg" height="200" width="180">
             </div>
        </div>
        <div class="col-lg-2 col-sm-6  shifa">
            <div class="thumbnail">
                <img src="https://images-na.ssl-images-amazon.com/images/I/513kliRZUiL._SX321_BO1,204,203,200_.jpg" height="200" width="180">
             </div>
        </div>
         <div class="col-lg-2 col-sm-6  shifa">
            <div class="thumbnail">
                <img src="https://images.gr-assets.com/books/1457458563l/29453740.jpg" height="200" width="180">
             </div>
        </div>
         <div class="col-lg-2 col-sm-6  shifa">
            <div class="thumbnail">
                <img src="https://johnboyne.com/wp-content/uploads/2019/01/51GUOuP1TkL._SX314_BO1204203200_.jpg" height="200" width="180">
             </div>
        </div>
    </div>
  </div>

      <form action="fiction.php" method="post">
       <div id="container">
           <div>
             <p> <h3>Book!</h3></p>
            </div>
          <div class="form-group row">
             <label for="input" class="col-sm-2 col-form-label"><b>Book name</b></label>
             <div class="col-sm-10">
             <input name="bookname" type="text" class="form-control" id="input" placeholder="Name" required>
             </div>
              
          </div>
          <div class="form-group row">
             <label for="input" class="col-sm-2 col-form-label"><b>Select weeks </b></label>
             <div class="col-sm-10">
                  <select onchange=" return func1()" name="selectweek" class="btn btn-secondary dropdown-toggle">
                <option disabled selected value="" >Select</option>
                      <option value=1>1</option>
               <option value=2>2</option>
                 <option value=3>3</option>
                     <option value=4>4</option>
                    </select>
                  
                            

             </div>
            
           </div>
          <?php
          function func1()
          {
          $query='select * from fictionbooks where bookname="$_POST["bookname"]"';
          $result=mysqli_query($con,$query);
          if(@mysqli_num_rows($query_run)>0)
         {

        $weeks=$_POST['selectweek'];  
        $bookname=$_POST['bookname'];
        $_SESSION['weeks']=$_POST['selectweek']; 
        $_SESSION['rent']=50*$weeks;
        $_SESSION['returndate']=date('y:m:d', strtotime("+($weeks*7) days"));
          
          }
          else{
           
echo '<script type="text/javascript"> alert("please enter valid book name!")</script>';
          }
          }
          ?>
          
         <div class="form-group row">
             <label for="input" class="col-sm-2 col-form-label"><b>Fee Charged </b></label>
             <div class="col-sm-10">
             <input value="<?php $_SESSION['rent']; ?>" name="rent" type="text" class="form-control" id="input" placeholder="rental charge">
             </div>
         </div>
         <div class="form-group row">
              <label for="input" class="col-sm-2 col-form-label"><b>Return Date</b></label>
                <div class="col-sm-10">
                  <input value="<?php $_SESSION['returndate'] ;?>" name="returndate" type="text" class="form-control" id="input" placeholder="return date">
            <input type="submit" class="btn btn-success" value="Select Book!">
                    
                </div>
         </div>
    
      <p><h6><b>Delivery details will be emailed</b></h6></p>
      </div>

     </form>

   <div class="wrapper">
  <div class="form-group">
  <label for="exampleFormControlTextarea2"><h2>FICTION BOOKS</h2></label>
  <div background-color:white>
   
      <?php
      $query= "SELECT * from fictionbooks";
$result = mysqli_query($con, $query);
echo "<table  class='fictiontable' border='1' style='background-color: white'>
<tr>
<th>Book Name</th>
<th>Author</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['bookname'] . "</td>";
echo "<td>" . $row['bookauthor'] . "</td>";
echo "</tr>";
}
echo "</table>";
      ?> 
  </div>
  </div>
</div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 

</body>
</html>


