<?php include('include/header.php');?>

<!-- echo "<br />"; -->
<?php
$userName = $_REQUEST['username'];
$userEmail = $_REQUEST['email'];
$userPass = $_REQUEST['password'];


$hash_format = "$2y$07$";        
$salt = "sadfj1akafa1djsdk1ff22";
$conC=$hash_format . $salt;
echo $userPass;
echo "<br />";
echo crypt($userPass, $conC);


?>

 <?php include('include/footer.php');?>

