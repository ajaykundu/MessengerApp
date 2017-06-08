 <?php 
     $Databasehost="localhost";
     $DatabaseUser="root";
     $Databasepassword="ajay37ak";
     $Databasename="mymssengerdatabase";

     $connection=mysqli_connect($Databasehost,$DatabaseUser,$Databasepassword,$Databasename);
    
   if(mysqli_connect_errno())
   {
    die(
        "my sql connection is failed." . mysqli_connect_error(). "(" .mysqli_connect_errno().")"
        );
   }
   else {
       // echo "connection has been formed";
   }
 ?>