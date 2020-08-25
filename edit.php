<?php include('include/header.php');?>

<!-----------    <?php echo "<br />" ?> -->

<?php 

$connection = mysqli_connect('localhost','root','','users');
if(!$connection){
    die("Not Connection.". mysqli_error($connection));
}

if(isset($_REQUEST['edit_id'])){
    $received_id = $_REQUEST['edit_id'];
    $get_info ="SELECT * FROM user_info WHERE id= $received_id";
    $select_info = mysqli_query($connection, $get_info);

  
  while($row=mysqli_fetch_assoc($select_info)){

  
   
   ?>
   
   <form action="update.php" method="POST">
<input type="text" name="username" value="<?php echo $row['username'];?>">
<input type="email" name="email" value="<?php echo $row['email'];?>">
<input type="password" name="password" value="<?php echo $row['password'];?>"><br />
<input type="submit" name="submit" value="Update">
<input type="hidden" name="updating_hidden_id" value="<?php echo $received_id;?>">
</form>
   
   
   
   
   <?php
  }
}
   ?>











<?php include('include/footer.php');?>