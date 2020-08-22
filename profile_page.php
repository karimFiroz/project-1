

<?php include('include/header.php');
$pro=$_FILES['profile'];

 echo $name= $pro['name'];
 echo "<br />";
 echo $type= $pro['type'];
 echo "<br />";
 echo $tmp_name= $pro['tmp_name'];
 echo "<br />";
 $size= $pro['size'];
 echo floor($size/1000)."KB";

if(!empty($name))
{
    $loc="../";
   if(move_uploaded_file($tmp_name, $loc.$name))
   {
       echo "file uploaded successfuly!.<br />";
       $path = $loc.$name;
       echo "<img src='$path' width='200' height='200'/>"; 
   }else{
       echo "Faild.";
   }
}else{
    echo "file not found.";
}
include('include/header.php');?>

<!-- index_page
***********

<form action="profile_page.php" method="POST" enctype="multipart/form-data">

<input type="file" name="profile"><br />
<input type="submit" value="upload">
</form> -->
