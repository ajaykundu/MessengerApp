<!DOCTYPE html>
<?php 

   include("/includes/db_connection.php");
   
 ?>

<?php 
   
     if($_POST)
     {
           $usernameData=$_POST["username"];
           $passwordData=$_POST["pwd"];
          // $passwordData=password_hash($passwordData,PASSWORD_DEFAULT);
           //password_verify($passworddata,$existing_hash);
           $emailData="hello@gmail.com";
           $emailData=$_POST["emailName"];

         $insertquery="insert into useinfo (username,passwrd,email) ";
         $insertquery.="values ('{$usernameData}','{$passwordData}','{$emailData}')";
         $perfom_query=mysqli_query($connection,$insertquery);
         if($perfom_query)
         {
            //echo "query is performed.";
         }
         else{
          echo mysqli_error($connection);
         }
     }
     else
      {}

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

    <?php 
         if($_GET)
         {
             if($_GET["id"]==2)
             {
                echo "Either username or Password is Incorrect";
             }
         }
     ?>

    <form action="login_processing.php" method="post" accept-charset="utf-8">
  <div class="form-group">
    <label for="email">Username:</label>
    <input type="text" class="form-control" id="email" name="username">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pwd"> 
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
</form>

   <div>
     Not a member <a href="register.php" >Resister Now</a>
   </div>

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