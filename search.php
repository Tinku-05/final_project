<?php
include('db.php');
$result = null;
if (isset($_POST['search'])) {
    $blood_group = $_POST['blood_group'];
    $city = $_POST['city'];
    $sql = "SELECT * FROM donors WHERE blood_group='$blood_group' AND city LIKE '%$city%'";
    $result = mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html>
<head><title>Search Donors</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="container">
  <h2>🔍 Search Donors</h2>
  <form method="POST">
    <select name="blood_group" required>
      <option value="">Select Blood Group</option>
      <option>A+</option><option>A-</option>
      <option>B+</option><option>B-</option>
      <option>AB+</option><option>AB-</option>
      <option>O+</option><option>O-</option>
    </select>
    <input type="text" name="city" placeholder="Enter City" required>
    <button type="submit" name="search">Search</button>
  </form>
  <?php if ($result && mysqli_num_rows($result) > 0): ?>
  <table>
    <tr><th>Name</th><th>Email</th><th>Phone</th><th>City</th></tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?= $row['name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['phone'] ?></td>
        <td><?= $row['city'] ?></td>
      </tr>
    <?php } ?>
  </table>
  <?php elseif ($result): ?>
  <p>No donors found.</p>
  <?php endif; ?>
  <a href="index.php">🏠 Back to Home</a>
</div>
</body>
</html>
