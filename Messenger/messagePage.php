<!DOCTYPE html>

<?php 

   include("/includes/db_connection.php");
   
 ?>
     <!-- insert of newfriend into your list -->
    <?php 
        
          if(isset($_GET["sid"]))
          {
             $make_friend_query="insert into friend_list (Myusername,friendusername) values ('{$_GET["id"]}','{$_GET['sid']}')";
             $perform_make_friend_query=mysqli_query($connection,$make_friend_query);
             $make_friend_query="insert into friend_list (Myusername,friendusername) values ('{$_GET['sid']}','{$_GET["id"]}')";
             $perform_make_friend_query=mysqli_query($connection,$make_friend_query);
          }

     ?>

 <?php 
   
     if($_POST)
     {
           $newvar=$_POST["texta"];
         $insertquery="insert into messageexchanged(sendername,receivername,messages) values ('{$_GET["id"]}','{$_GET["fid"]}','{$newvar}')";
         $perfom_query=mysqli_query($connection,$insertquery);
     }
     else
      {}

  ?>

<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>hello world</title>
</head>
<body>
<div class="jumbotron text-center">
  <h1>Messenger app</h1>
  <p></p> 
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-2" style="background: #eee;">
     
         <?php 
           if($_GET)
     {
 $friend_list_query="select friendusername from friend_list where Myusername='{$_GET["id"]}'";
 $perform_friend_list_query=mysqli_query($connection,$friend_list_query);
      if($perform_friend_list_query)
      {
        //echo "query is performed";
      }
      else{
        echo mysqli_error($connection);
      }
     }
     else
      {}  
          
          
          
          ?>
      <h3>Your Friends:</h3>
          <ul>
          <?php 
             while ($friend_list_result=mysqli_fetch_assoc($perform_friend_list_query)) {
           ?>
            <li>
               <a href=<?php echo "\"messagePage.php?id={$_GET["id"]}&fid={$friend_list_result["friendusername"]}\"";  ?>><?php echo $friend_list_result["friendusername"]; ?></a>
                <br>
            </li>
             <?php } ?>
          </ul>



    </div>

    <?php 
         $query="select * from messageexchanged where (sendername='{$_GET["id"]}' AND receivername='{$_GET["fid"]}') or (sendername='{$_GET["fid"]}' AND receivername='{$_GET["id"]}')";

         $result=mysqli_query($connection,$query);
     ?>
    
    <div class="col-sm-6" >
    
    
             <h3>Your messages:</h3>
       

           <div  class="demo" style="overflow:scroll; height:400px;">
     <ul>
          <?php 
             while ($mess=mysqli_fetch_assoc($result)) {
           ?>
            <li>
                <?php 
                echo $mess["sendername"]."-".$mess["messages"]; 
                ?>
                <br>
            </li>
             <?php } ?>
          </ul>

          <script type="text/javascript">
     $('.demo').scrollTop($('.demo')[0].scrollHeight);
          </script>
          
</div>

    </div>
    
    <div class="col-sm-4">
    <form action=<?php echo "\"messagePage.php?id={$_GET["id"]}&fid={$_GET["fid"]}\""; ?> method="post" accept-charset="utf-8">

    <div class="form-group">
  <label for="comment">Type your message here:</label>
  <textarea class="form-control" rows="5" id="comment" name="texta"></textarea>
</div>


<br> 
     <input type="submit" name="submit" value="send"/>
      <button type="button" ><a href=<?php echo "\"messagePage.php?id={$_GET["id"]}&fid={$_GET["fid"]}\""; ?>>Refresh</a></button>
   
   Refresh to get new messages.

    </form>
  
    <div class="row" >
      <h3>Friend Suggestion:</h3>
     
      <?php 
           $Suggestion_query="select username from useinfo";
           $result_suggestion_query=mysqli_query($connection,$Suggestion_query);
       ?>

       <?php 
               while($suggest_output=mysqli_fetch_assoc($result_suggestion_query))
               {
        ?>
               
         <a href=<?php echo "\"messagePage.php?id={$_GET["id"]}&fid=$$$$&sid={$suggest_output["username"]}\"";  ?>><?php echo $suggest_output["username"]; ?></a>

        <?php 
               }
         ?>

    </div>

</div>

   

  </div>
</div>


  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>