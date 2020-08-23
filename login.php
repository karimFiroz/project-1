<?php include('include/header.php');?>
<?php 

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];
   $connection = mysqli_connect('localhost','root','','users');
   if(!$connection){
die("Not Connected.". mysqli_error());
   }

   $query ="INSERT INTO user_info(username,email,password) 
   VALUES('$username','$email','$password')";
 $result = mysqli_query($connection,$query);
  
   if($result){
       echo "Insert success.";
   }else{
       echo "Isnert Fail.";
   }
}

?>

<form action="login.php" method="POST"><br />
<input type="text" name="username" placeholder="username"><br />
<input type="email" name="email" placeholder="email"><br />
<input type="password" name="password" placeholder="password"><br />
<input type="submit" name="submit" value="submit">
</form>





















 <?php include('include/footer.php');?>
