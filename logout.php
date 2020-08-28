<?php include('include/header.php');?>

<h2>Logout Page</h2>


<?php 
session_start();
session_destroy();
header("location:index.php");
?>





















 <?php include('include/footer.php');?>
