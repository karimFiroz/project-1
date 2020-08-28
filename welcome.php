<?php include('include/header.php');?>

<?php
session_start();

if($_SESSION['username']==true){
if((time() - $_SESSION['current_timestamp'])>300){
    header('location:logout.php');
        }else{
            echo "<h3>Welcome! You are successfully login!</h3>".'   '. $_SESSION['username'];
             echo "<a href='logout.php'><h3>Logout</h3></a>";   
} 

}else{
    header('location:index.php'); 
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
