<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengolahan Form type input TEXT dan PASSWORD</title>
</head>
<body>
  <form action="loginproses.php" method="post" name="input">
    <h2>Silahkan Login ya</h2>
    Username : <input type="text" name="username" /><br>
    Password : <input type="password" name="password" /><br>
    <input type="submit" name="Login" value="Login"/>
    <input type="reset" name="reset" value="Reset"/>
  </form>
</body>
</html>