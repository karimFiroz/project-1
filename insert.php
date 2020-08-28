<?php include('include/header.php');?>
 


<a href="insert.php"><h3>New Registration</h3></a>
<?php 

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $gender= $_POST['gender'];
    $country= $_POST['country'];
    $receive_file=$_FILES['upload_image'];
    $image_name=$receive_file['name'];
    $image_tmp_name=$receive_file['tmp_name'];

$name_changer = uniqid().".png";


if(!empty($name)){
    $location="profile_pic/";
   if( move_uploaded_file($image_tmp_name, $location.$image_name)){
       header("location:insert.php");
   }
}



    if($username && $email && $password){


   $connection = mysqli_connect('localhost','root','','users');
   if(!$connection){
die("Not Connected.". mysqli_error());
   }

   $query ="INSERT INTO user_info(profile_pic,username,email,password,gender,country) 
   VALUES('$image_name','$username','$email','$password','$gender','$country')";
    $result = mysqli_query($connection,$query);
   if(!$result){
      die("Not inserted!.".mysqli_error());
        }
    }else{
        echo "<h4>All registration field must be filled!.<br /></h4>";
    }
}


       ?>

<form action="insert.php" method="POST" enctype="multipart/form-data"><br />
<input type="text" name="username" placeholder="username"><br />
<input type="email" name="email" placeholder="email"><br />
<input type="password" name="password" placeholder="password"><br />
<input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female">Female<br />
<select name="country">
    <option value="">Select your country</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="USA">USA</option>
    <option value="India">India</option>
    <option value="Pakistan">Pakistan</option>
</select><br />
<input type="file" name="upload_image"  value="upload"><br />
<input type="submit" name="submit" value="Submit"class="btn btn-info">
</form>
<br />
<div>
<!-- 
    <form action="insert.php" method="POST">
<input type="text" name="search_name" placeholder="search username">
<input type="submit" name="search" value="search"class="btn btn-info">
</form>
</div>

if(isset($_REQUEST['search'])){
    $recv_name =  $_REQUEST['search_name'];
    $query ="INSERT INTO user_info WHERE username LIKE  '%$recv_name%'";
} -->





    

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
        if(isset($_REQUEST['delete_m_data'])){
            $chk_data = $_REQUEST['check_data'];
            $all_marked = implode(",",$chk_data);
            
            $query="DELETE FROM user_info WHERE id in ($all_marked)";

            $run_delete_query = mysqli_query($connection,$query);            }
      ?>

    <br />
<br />
<form action="insert.php" method="POST">
      <table class="table">
    <thead class="head-dark">
        <tr>
        <th>SN</th>
            <th>ID</th>
            <th>Profile_pic</th>
            <th>Username</th>
            <th>E-mail</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Country</th>
            <th>Action</th>
            <th><input type="submit" name="delete_m_data"class="btn btn-info" value="Delete_m"></th>
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
    $gender=$row['gender'];
    $country=$row['country'];
    $serial_No++;
   ?>
   <tbody>
        <tr>
        <td><?php echo $serial_No; ?></td>
            <td><?php echo "$db_id"; ?></td>
            <td><img  src="profile_pic/<?php echo $profile_pic; ?>"/></td>
            <td><?php echo "$username"; ?></td>
            <td><?php echo "$email"; ?></td>
            <td><?php echo "$password"; ?></td>
            <td><?php echo "$gender"; ?></td>
            <td><?php echo "$country"; ?></td>
            <td><a href="edit.php?edit_id=<?php echo "$db_id";?>">Edit</a>||
            <a href="delete.php?delete_id=<?php echo "$db_id";?>"onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            <!-- onClick="return confirm('Are you sure you want to delete?')" -->
            </td>
            <td><center><input type="checkbox"name="check_data[]" value="<?php echo "$db_id";?>"</center></td>
        </tr>
    </tbody>

<?php
  }
  ?>
  </table>
  </form>
  Count=
  <?php
  echo $count;
}else{
    echo "<font color='red'><h3>You have no data in your database!</h3></font>";
}


?>


 <?php include('include/footer.php');?>
