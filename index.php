<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form  action="idcards.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file"><br>
    username:<input type="text" name="user_name"><br>
    Email :<input type="email" name="email"><br>
    gender:<br>
    <input type="radio" name="gender" value="Female"> Female<br>
    <input type="radio" name="gender"value="Male"> Male<br>
    Date of birth:<input type="date" name="date"><br>
    <input type="submit" name="btn" value="submit">
  </form>
</body>
</html>