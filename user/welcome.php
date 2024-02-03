<?php
session_start(); 

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>

<body>

    <h1>Welcome, <?php echo $username; ?>!</h1>

    <a href="../login/">Logout</a>

</body>

</html>
