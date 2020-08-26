

<?php
$connection = mysqli_connect('localhost','root','','users');
   if(!$connection){
die("Not Connected.". mysqli_error());
   }
  $received_id= $_REQUEST['delete_id'];
   $query="DELETE FROM user_info where id=$received_id";
   $run_delete_query=mysqli_query($connection,$query);
   if($run_delete_query){
    header("location:insert.php?Deleted");
   }
   ?>