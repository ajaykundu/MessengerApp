
<?php 

   include("/includes/db_connection.php");
   
 ?>

<?php 
   
   $usernamedata=$_POST["username"];
   $passworddata=$_POST["pwd"];
   
   
   //$passworddata_hasd=password_hash($passworddata,PASSWORD_DEFAULT);
   
   $queryPerformed="select * from useinfo where username='{$usernamedata}' AND passwrd='{$passworddata}'";
   $queryDone=mysqli_query($connection,$queryPerformed);
   
  
   $rowfetch=mysqli_fetch_assoc($queryDone);

   //echo $rowfetch["username"];
   if($rowfetch)
   {
   	 redirecting("messagePage.php?id={$usernamedata}&fid=$$$$");
   }
   else {
       
   	  redirecting("index.php?id=2");

   }
   
 ?>


<?php 
   function redirecting($lacation)
   {
   echo	"<script type=";
   echo "\"text/javascript\"";
   echo ">location.href = '{$lacation}';</script>";
   }
 ?>
