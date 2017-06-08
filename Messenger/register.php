<!DOCTYPE html>
<?php 

   include("/includes/db_connection.php");
   
 ?>
<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <title>Mymessengerapp</title>
</head>
<body>
<div class="jumbotron text-center">
  <h1>Messenger</h1>
</div>

<div class="container">
  <div class="row">

  <div class="col-sm-4">
      
    </div>
    <div class="col-sm-4">
    <form action="index.php" method="post" accept-charset="utf-8">
  <div class="form-group">
    <label for="text">Username:</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pwd"> 
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="text" class="form-control" id="email" name="emailName">
  </div>
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
</form>

    </div>
    
    <div class="col-sm-4">
      
    </div>
  </div>
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>