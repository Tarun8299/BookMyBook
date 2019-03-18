<!DOCTYPE html>
<html>
<head>
    <title>selectbook</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Coiny|Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme|Amatic+SC|Bangers|Coiny|Josefin+Sans:400,700|Lato|Merienda|Monoton|Permanent+Marker|Righteous" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/selectbook.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
      <a class="navbar-brand" class="bmb" href="#"><i class="fas fa-book-open"></i> BookMyBook</a>
    </div>
       <ul class="nav navbar-nav navbar-right">
    <div>
     <a href="home.php"><button type="button" class="btn btn-primary navbar-btn" id="log"><i class="fas fa-user-tie"></i> Home</button> </a>
    
     </div>
 </ul>
  </div><!-- /.container-fluid --> 
</nav>
<div class="loginkaro">
 <form>
     <nav class="navbar navbar-default">
         <h3> <div class="library"> Select your Library!</div></h3>
    </nav>
  <div class="form-group row">
  <div class="some"    <label for="input" class="col-sm-2 col-form-label"><b>Delivery Address</b></label></div>
         <div class="col-sm-7">
           <input type="email" class="form-control" id="input" placeholder="Address">
       </div>
   </div>
     <div class="form-group row">
         <div class="some"> <label for="input" class="col-sm-2 col-form-label"><b>Select Library</b></label></div>
  <div class="btn-group">
  <button type="button" class="btn btn-default">Select</button>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">Library1</a></li>
    <li><a href="#">Library2</a></li>
    <li><a href="#">Library3</a></li>
    </ul>
    </div>
  </div>
    </div>
  </div>
</form>
</div>
</div>
    <div class ="container">
    <div class="row">
        <div class="col-lg-6 col-sm-6  shifa ">
            <div class="thumbnail">
                <p>FICTION</p>
            <img src="https://kbimages1-a.akamaihd.net/ca35b0df-52d8-44cd-ad10-1d1ae7828317/166/300/False/harry-potter-and-the-philosopher-s-stone-3.jpg">
                <p class="someimage"><a href="fiction.php"><button type="button" class="btn btn-primary">CHOOSE</button></a></p>

            </div>
        </div>
        
        <div class="col-lg-6 col-sm-6  shifa">
            <div class="thumbnail">
                <p>NON-FICTION</p>
            <img src="data:image/png;base64,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">
            <p class="someimage"><a href="nonfiction.php"><button type="button" class="btn btn-primary">CHOOSE</button></a></p>

            </div>
        </div>
    <div class ="container">
    <div class="row">
        <div class="col-lg-6 col-sm-6  shifa ">
            <div class="thumbnail">
                <p>SELF-HELP</p>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFQSoulBGL2kUSrALBhHvRDQToS-VVp9C12qcRaBfgWcOBBLHVGw">
                <p class="someimage"><a href="selfhelp.php"><button type="button" class="btn btn-primary">CHOOSE</button></a></p>

            </div>
        </div>
        
        <div class="col-lg-6 col-sm-6  shifa">
            <div class="thumbnail">
                <p>THRILLER</p>
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/b6/The_Da_Vinci_Code.jpg/220px-The_Da_Vinci_Code.jpg">
            <p class="someimage"><a href="thriller.php"><button type="button" class="btn btn-primary">CHOOSE</button></a></p>

            </div>
        </div>
    
        
    </div>
    </div>
    </div>
 
 <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
