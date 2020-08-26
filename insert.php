<?php include('include/header.php');?>
<?php 

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];


    $receive_file=$_FILES['upload_image'];
    $image_name=$receive_file['name'];
    $image_tmp_name=$receive_file['tmp_name'];

if(!empty($name)){
    $loc="../";
    move_uploaded_file($image_tmp_name, $loc.$image_name);
}else{
    echo "Your file is empty!.";
}



    if($username && $email && $password){


   $connection = mysqli_connect('localhost','root','','users');
   if(!$connection){
die("Not Connected.". mysqli_error());
   }

   $query ="INSERT INTO user_info(profile_pic,username,email,password) 
   VALUES('$image_name','$username','$email','$password')";
    $result = mysqli_query($connection,$query);
   if(!$result){
      die("Not inserted!.".mysqli_error());
        }
    }else{
        echo "Any Field cannot be blank!";
    }
}
?>

<form action="insert.php" method="POST" enctype="multipart/form-data">
<input type="text" name="username" placeholder="username">
<input type="email" name="email" placeholder="email">
<input type="password" name="password" placeholder="password">
<input type="file" name="upload_image"  value="upload">
<input type="submit" name="submit" value="submit">
</form>

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
    <br />
<br />
      <table class="table">
    <thead class="head-dark">
        <tr>
        <th>SN</th>
            <th>ID</th>
            <th>Profile_pic</th>
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
    $profile_pic=$row['profile_pic'];
    $email=$row['email'];
    $password=$row['password'];
    $serial_No++;
   ?>
   <tbody>
        <tr>
        <td><?php echo $serial_No; ?></td>
            <td><?php echo "$db_id"; ?></td>
            <td><img src="profile_pic/<?php echo $profile_pic; ?>"></td>
            <td><?php echo "$username"; ?></td>
            <td><?php echo "$email"; ?></td>
            <td><?php echo "$password"; ?></td>
            <td><a href="edit.php?edit_id=<?php echo "$db_id";?>">Edit</a>||
            <a href="delete.php?delete_id=<?php echo "$db_id";?>&profile_pic=<?php echo $profile_pic; ?>"onClick="return confirm('Are you sure you want to delete?')">Delete</a>
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
