<?php include('include/header.php');?>

<!-- echo "<br />"; -->
<?php
$name = "username";
$value = "karim";
setcookie($name, $value, time()+20);

if(isset($_COOKIE['username'])){
echo "Saved COOKIE is= {$_COOKIE['username']}";   
}else{
    echo "After 20 seconds COOKIE is gone!";



  

    echo "<br />";

    session_start();
    $_SESSION['username'] = "karim";
    echo "SESSION is running=";
    echo  $_SESSION['username'];



}
?>

 <?php include('include/footer.php');?>

