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
        if(isset($_REQUEST['Deleted'])){
            echo "<font color='red'><h3>One user is deleted!</h3></font>";
        }
        if(isset($_REQUEST['Updated'])){
            echo "<font color='green'><h3>Data is updated!</h3></font>";
        }
      ?>
      <table class="table">
    <thead class="head-dark">
        <tr>
        <th>SN</th>
            <th>ID</th>
            <th>Username</th>
            <th>E-mail</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php
    $serial_No=0;
  while($row = mysqli_fetch_assoc($adanprodan)){
     
      $db_id=$row['id'];
      $username=$row['username'];
      $email=$row['email'];
      $password=$row['password'];
      $serial_No++;
   ?>
    <tbody>
        <tr>
        <td><?php echo $serial_No; ?></td>
            <td><?php echo "$db_id"; ?></td>
            <td><?php echo "$username"; ?></td>
            <td><?php echo "$email"; ?></td>
            <td><?php echo "$password"; ?></td>
            <td><a href="edit.php?edit_id=<?php echo "$db_id";?>">Edit</a>||
            <a href="delete.php?delete_id=<?php echo "$db_id";?>"onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            <!-- onClick="return confirm('Are you sure you want to delete?')" -->
            </td>
        </tr>
    </tbody>

<?php
  }
  ?>
  </table>
  Count=
  <?php
  echo $count;
}else{
    echo "<font color='red'><h3>You have no data in your database!</h3></font>";
}


?>








<?php include('include/footer.php');?>