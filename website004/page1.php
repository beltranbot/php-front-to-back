<?php
if (isset($_POST['submit'])) {
  session_start(); // start the session
  $_SESSION['name'] = htmlentities($_POST['name']);
  $_SESSION['email'] = htmlentities($_POST['email']);

  header('Location: page2.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP sessions</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="name" Placeholder="Enter name">
    <br>
    <input type="text" name="email" Placeholder="Enter email">
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>
