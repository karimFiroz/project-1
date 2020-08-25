

<?php
$connection = mysqli_connect('localhost','root','','users');
   if(!$connection){
die("Not Connected.". mysqli_error());
   }
  $receive= $_REQUEST['id'];
   $query="DELETE FROM user_info where id=$receive";
   $run_delete_query=mysqli_query($connection,$query);
   if($run_delete_query){
    header("location:read.php?Deleted");
   }
   ?>