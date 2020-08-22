<?php include('include/header.php');?>


<form action="home.php" method="GET"><br />
<input type="text" name="username" placeholder="username"><br />
<input type="email" name="email" placeholder="email"><br />
<input type="password" name="password" placeholder="password"><br />
<input type="submit" value="submit">
</form>


<?php 

if(isset($_REQUEST['wrongPass'])){
    echo $_REQUEST['wrongPass'];
}

?>


















 <?php include('include/footer.php');?>
