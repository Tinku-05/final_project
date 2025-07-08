<?php
include('../db.php');
$msg = "";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM admins WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
    } else {
        $msg = "❌ Invalid login.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
  <h2>🔐 Admin Login</h2>
  <?php if ($msg) echo "<p class='msg'>$msg</p>"; ?>
  <form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="login">Login</button>
  </form>
  <p style="text-align:center; margin-top:15px;">New admin? <a href="admin_register.php">Register here</a></p>
  <div style="text-align:center; margin-top:20px;">
    <a href="../index.php">🏠 Back to Home</a>
  </div>
</div>
</body>
</html>
