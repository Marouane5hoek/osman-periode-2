<?php
include('db.php');
 
$MONKEY = new Database();
$MONKEY->telefoons("Iphone", "X", 100, 1000);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spelers voegen</title>
</head>
<body>
<table>
    <tr>
<tr>Id</tr>
<tr>Email</tr>
<tr>Password</tr>
  </tr>

  <tr>
    <?php $user = $db->selectUser(); ?>
  </tr>
</table>

<form method="POST">
 <input type="text" name="email">
 <input type="password" name="password>
 <input type="submit">
</form>

</body>
</html>