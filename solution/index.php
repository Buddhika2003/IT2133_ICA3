<?php
session_start();
if (!isset($_SESSION['logged_in'])) { header('Location: login.php'); exit; }
?>
<!doctype html><html><head><meta charset="utf-8"><title>Dashboard</title></head>
<body>
  <h2>Dashboard - Fixed App</h2>
  <p>Signed in as: <?php echo htmlspecialchars($_SESSION['user_email']); ?></p>
  <p><a href="change_email.php">Change Email (Protected)</a></p>
  <p><a href="logout.php">Logout</a></p>
</body></html>
