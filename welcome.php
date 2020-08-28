<?php include('include/header.php');?>

<?php
session_start();
if($_SESSION['username']==true){
echo "Welcome".'   '. $_SESSION['username'];
?>
<br />
<a href="logout.php">Logout</a>

<?php
}else{
    header("location:index.php");
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>Welcome Page</h2><br />
</body>
</html>





 <?php include('include/footer.php');?>
