<?php
include('../db.php');
$msg = "";
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO admins (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $sql)) {
        $msg = "✅ Admin registered successfully!";
    } else {
        $msg = "❌ Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register Admin</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
  <h2>👤 Register New Admin</h2>
  <?php if ($msg) echo "<p class='msg'>$msg</p>"; ?>
  <form method="POST">
    <input type="text" name="username" placeholder="Admin Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="register">Register</button>
  </form>
  <p style="text-align:center; margin-top:15px;">Already have account? <a href="login.php">Login here</a></p>
  <div style="text-align:center; margin-top:20px;">
    <a href="../index.php">🏠 Back to Home</a>
  </div>
</div>
</body>
</html>
