<?php include('include/header.php');?>

<!-- echo "<br />"; -->
<?php
$userName = $_REQUEST['username'];
$userEmail = $_REQUEST['email'];
$userPass = $_REQUEST['password'];

$countPass= strlen($password);

if(!($countPass>=5 && $countPass<=10)){
header("location:login.php?wrongPass=You enter wrong password is=$userPass");
}else{
    header('location:https://facebook.com');
}
?>

 <?php include('include/footer.php');?>

