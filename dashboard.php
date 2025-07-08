<?php
session_start();
include('../db.php');
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
$donors = mysqli_query($conn, "SELECT * FROM donors ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html>
<head><title>Admin Dashboard</title><link rel="stylesheet" href="../style.css"></head>
<body>
<div class="container">
  <h2>📋 All Registered Donors</h2>
  <p><a href="logout.php" style="color:red;">Logout</a></p>
  <table>
    <tr><th>Name</th><th>Email</th><th>Phone</th><th>Blood Group</th><th>City</th><th>Registered On</th></tr>
    <?php while ($row = mysqli_fetch_assoc($donors)) { ?>
    <tr>
      <td><?= $row['name'] ?></td>
      <td><?= $row['email'] ?></td>
      <td><?= $row['phone'] ?></td>
      <td><?= $row['blood_group'] ?></td>
      <td><?= $row['city'] ?></td>
      <td><?= $row['created_at'] ?></td>
    </tr>
    <?php } ?>
  </table>
  <a href="../index.php">🏠 Back to Home</a>
</div>
</body>
</html>
