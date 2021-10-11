<?php
  if(isset($_POST['btn'])){
    $file=$_FILES['file'];
    $path="upload/".$file['name'];
   $upload= move_uploaded_file($file["tmp_name"],$path );
    $user_name=$_POST['user_name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $date=$_POST['date'];
  }
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>idcard</title>
    <<link rel="stylesheet" href="style.css" />
</head>
<body class='bg-grid-line'>
<div class='card'>
  <header>
    <h1>ID Card Generator</h1>
  </header>
  <article>
    <img alt='My Pic'  src='<?php if(isset($upload)){echo $path;};?>'>
    <h2>Your ID Card</h2>
    <div class='area'>
      <h3>My Name is :<?php if(isset($user_name)){echo $user_name;};?></h3>
      <ul>
        <li>
          Name :
          <span class='bar percent-100'><?php if(isset($user_name)){echo $user_name;};?></span>
        </li>
        <li>
          Email :
          <span class='bar percent-90'><?php  if(isset($email)){echo $email;};?></span>
        </li>
        <li>
          Gender
          <span class='bar percent-100'><?php  if(isset($gender)){echo $gender;};?></span>
        </li>
        <li>
          Date of Birth
          <span class='bar percent-100'><?php  if(isset($date)){echo $date;};?></span>
        </li>
      </ul>
    </div>
  </article>
</div>

</body>
</html>