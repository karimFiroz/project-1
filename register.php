<?php include('include/header.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
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
</body>
</html>























 <?php include('include/footer.php');?>
