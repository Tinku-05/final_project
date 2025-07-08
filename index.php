<!DOCTYPE html>
<html>
<head>
  <title>Blood Donation System</title>
  <style>
    /* Base Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Roboto', sans-serif;
  background: linear-gradient(to right, #ff416c, #ff4b2b);
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
  color: #fff;
}

.container {
  background-color: rgba(250, 250, 250, 0.1);
  border-radius: 16px;
  padding: 40px 20px;
  max-width: 400px;
  width: 100%;
  text-align: center;
  backdrop-filter: blur(10px);
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
}

.container h2 {
  font-size: 26px;
  margin-bottom: 20px;
}

.container p {
  margin-bottom: 30px;
  font-size: 16px;
  color: #fbeffb;
}

.buttons {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

/* Stylish & Responsive Buttons */
.btn {
  display: inline-block;
  padding: 14px 22px;
  background: #ffffff;
  color: #e63946;
  text-decoration: none;
  border-radius: 50px;
  font-weight: bold;
  font-size: 16px;
  transition: all 0.3s ease-in-out;
  border: 2px solid transparent;
  box-shadow: 0 4px 14px rgba(0, 0, 0, 0.2);
  text-align: center;
  letter-spacing: 0.5px;
}

.btn:hover {
  background: transparent;
  color: #fff;
  border: 2px solid #fff;
  transform: scale(1.05);
  box-shadow: 0 6px 20px rgba(255, 255, 255, 0.3);
}

/* Mobile Friendly */
@media (max-width: 500px) {
  .container {
    padding: 30px 15px;
  }

  .btn {
    font-size: 14px;
    padding: 12px 18px;
  }
}

  </style>
</head>
<body>
<div class="container">
  <h2>🩸 Welcome to Blood Donation Portal</h2>
  <p style="text-align:center;">Choose an option below:</p>
  <div class="buttons">
  <a href="register.php" class="btn">📝 Register as Donor</a>
  <a href="search.php" class="btn">🔍 Search for Donors</a>
  <a href="admin/login.php" class="btn">🔐 Admin Login</a>
</div>

</div>
</body>
</html>
