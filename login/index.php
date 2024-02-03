<?php include '../config/db.php' ?>

<?php
session_start();

if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $query = mysqli_query($conn, "select name from user where name = '$username' and password = '$password';");
  header('Location: index.php');

  if (mysqli_num_rows($result) > 0) {
    header('Location: /../../user/welcome.php');
    exit();
  } else {
    echo "Incorrect username or password.";
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <div class="container">
    <div class="title-container">
      <span id="title">Explore Weather Wise: Log in to forecast your day!</span>
    </div>

    <form class="input-container" method="post">
      <label for="username">Username</label>
      <div class="input">
        <input name="username" type="text" id="username" name="username" placeholder="John Wick" required>
      </div>

      <label for="password">Password</label>
      <div class="input">
        <input type="password" id="password" required>
        <button name="password" type="button" id="button" class="eye-icon"
          onclick="togglePasswordVisibility()"></button>
      </div>

      <div class="button">
        <button type="submit" name="login">Login</button>
      </div>
    </form>

    <div class="signup">
      <span class="signup-text">Never had an account? <a href="../signup/" class="link">Sign up</a> now</span>
    </div>

  </div>



  <script src="index.js"></script>
</body>

</html>