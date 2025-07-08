<?php
include('db.php');
$msg = "";
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $blood_group = $_POST['blood_group'];
    $city = $_POST['city'];
    $sql = "INSERT INTO donors (name, email, phone, blood_group, city) 
            VALUES ('$name', '$email', '$phone', '$blood_group', '$city')";
    if (mysqli_query($conn, $sql)) {
        $msg = "✅ Donor registered successfully!";
    } else {
        $msg = "❌ Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Donor Registration</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="container">
  <h2>🩸 Donor Registration</h2>
  <?php if ($msg) echo "<p class='msg'>$msg</p>"; ?>
  <form method="POST">
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email Address" required>
    <input type="text" name="phone" placeholder="Phone Number" required>
    <select name="blood_group" required>
      <option value="">Select Blood Group</option>
      <option>A+</option><option>A-</option>
      <option>B+</option><option>B-</option>
      <option>AB+</option><option>AB-</option>
      <option>O+</option><option>O-</option>
    </select>
    <input type="text" name="city" placeholder="City" required>
    <button type="submit" name="register">Register</button>
  </form>
  <a href="index.php">🏠 Back to Home</a>
</div>
</body>
</html>
