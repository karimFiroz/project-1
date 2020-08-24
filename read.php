<?php include('include/header.php');?>

<!-----------    <?php echo "<br />" ?> -->

<?php 

$connection = mysqli_connect('localhost','root','','users');
if(!$connection){
    die("Not Connection.". mysqli_error($connection));
}
    $query = "SELECT * FROM user_info";
    $adanprodan = mysqli_query($connection,$query);

    $count = mysqli_num_rows($adanprodan);
    if($count>0){
  while($row = mysqli_fetch_assoc($adanprodan)){
     
      $id=$row['id'];
      $username=$row['username'];
      $email=$row['email'];
      $password=$row['password'];
    
    echo "$id|";
   echo " ";
    echo "$username|";
    echo " ";
    echo "$email|";
    echo " ";
    echo "$password|";
    echo "<br />";
   
  }
  
}else{
    echo "You have no data in your database!";
}





?>








<?php include('include/footer.php');?>