<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login George RUCINYA_25052966</title>
  <link rel="stylesheet" href="style.css">
  <style>
  body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background:rgb(4, 28, 73);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.login-container {
  text-align: center;
  background: transparent;
  padding: 40px;
  border-radius: 8px;
  color: white;
}

.icon {
  font-size: 60px;
  margin-bottom: 30px;
}

.input-box {
  margin: 15px 0;
}

.input-box input {
  width: 250px;
  padding: 10px;
  border: 2px solid white;
  background: transparent;
  border-radius: 5px;
  color: white;
  font-size: 16px;
}

.input-box input::placeholder {
  color: ##000000;
}

.login-btn {
  margin-top: 20px;
  width: 260px;
  padding: 10px;
  background-color: white;
  color: #1a5fe1;
  border: none;
  border-radius: 5px;
  font-weight: bold;
  cursor: pointer;
}

.login-btn:hover {
  background-color: #f0f0f0;
}

.forgot-link {
  margin-top: 15px;
}

.forgot-link a {
  color: white;
  font-size: 14px;
  text-decoration: none;
}

  </style>
</head>
<body>

<div class="login-container">
  <div class="icon">
    🛒
  </div>
  <form action="llogin.php" method="POST">
    <div class="input-box">
      <input type="text" name="username" placeholder="Username" required>
    </div>
    <div class="input-box">
      <input type="password" name="password" placeholder="Password" required>
    </div>
    <button type="submit" class="login-btn">LOGIN</button>
    <div class="forgot-link">
      <a href="#">Forgot password?</a>
    </div>
  </form>
  <?php
// Database connection setup
$servername = "localhost";
$dbUsername = "root";       // default for XAMPP
$dbPassword = "";           // leave empty for XAMPP
$dbName     = "george";  // replace with your DB name

// Create connection
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle POST login submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    // Sanitize input
    $user = $conn->real_escape_string($user);
    $pass = $conn->real_escape_string($pass);

    // SQL query to check credentials
    $sql = "SELECT * FROM users WHERE User_Name = '$user' AND Password = '$pass'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows === 1) {
        echo "<p><strong>Login successful!</strong></p>";
    } else {
        echo "<p><strong>Invalid username or password!</strong></p>";
    }
}
?>
</div>

</body>
</html>
