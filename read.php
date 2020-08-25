<?php include('include/header.php');?>

<!-----------    <?php echo "<br />" ?> -->

<?php 

$connection = mysqli_connect('localhost','root','','users');
if(!$connection){
    die("Not Connection.". mysqli_error($connection));
}
    $query = "SELECT * FROM user_info";
    $adanprodan = mysqli_query($connection,$query);

    $count = mysqli_num_rows($adanprodan);
    if($count>0){
      ?>
      <table class="table">
    <thead class="head-dark">
        <tr>
            <th>id</th>
            <th>username</th>
            <th>email</th>
            <th>password</th>
            <th>action</th>
        </tr>
    </thead>
    <?php
  while($row = mysqli_fetch_assoc($adanprodan)){
     
      $db_id=$row['id'];
      $username=$row['username'];
      $email=$row['email'];
      $password=$row['password'];
    
   ?>
    <tbody>
        <tr>
            <td><?php echo "$db_id"; ?></td>
            <td><?php echo "$username"; ?></td>
            <td><?php echo "$email"; ?></td>
            <td><?php echo "$password"; ?></td>
            <td>
            <a href="delete.php?id=<?php echo "$db_id"; ?>">Delete</a>
            </td>
        </tr>
    </tbody>

<?php
  }
  ?>
  </table>
  Total=
  <?php
  echo $count;
}else{
    echo "You have no data in your database!";
}





?>








<?php include('include/footer.php');?>