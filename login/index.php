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

    <form class="input-container">
      <label for="username">Username</label>
      <div class="input">
        <input type="text" id="username" placeholder="John Wick" required>
      </div>

      <label for="password">Password</label>
      <div class="input">
        <input type="password" id="password" required>
        <button type="button" id="button" class="eye-icon" onclick="togglePasswordVisibility()"></button>
      </div>

      <div class="button">
        <button type="submit">Login</button>
      </div>
    </form>

    <div class="signup">
      <span class="signup-text">Never had an account? <a href="../signup/" class="link">Sign up</a> now</span>
    </div>

  </div>



  <script src="index.js"></script>
</body>

</html>