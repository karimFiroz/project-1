<?php include('include/header.php');?>

<?php 
session_start();
   $connection = mysqli_connect('localhost','root','','users');
   if(!$connection){
die("Not Connected.". mysqli_error());
   }

if(isset($_REQUEST['submit'])){
    $username = $_REQUEST['username'];
    $userpass= $_REQUEST['password'];

    $query="SELECT * FROM user_info where username= '$username' && password='$userpass'";

 $adanprodan = mysqli_query($connection,$query);
  
$row_count = mysqli_num_rows($adanprodan);


if($row_count){
   $_SESSION['username']=$username;
   $_SESSION['current_timestamp']=time();
   header('location:welcome.php');
        }else{
          echo "Not login!";
    }
  }

?>

<form action="check.php" method="POST"><br />
<input type="text" name="username" placeholder="username"><br />
<input type="password" name="password" placeholder="password"><br />
<input type="submit" name="submit" value="Login">
</form>





















 <?php include('include/footer.php');?>
