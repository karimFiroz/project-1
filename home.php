<?php include('include/header.php');?>

<!-- echo "<br />"; -->
<?php
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$countPass= strlen($password);
if(!($countPass>=5 && $countPass<=10)){
header('location:login.php?wrongPass=Your username or password is wrong!');
}else{
    header('location:https://facebook.com');
}
?>

 <?php include('include/footer.php');?>

