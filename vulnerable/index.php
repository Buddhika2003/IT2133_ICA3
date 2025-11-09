<?php
    session_start();
    if(!isset($_SESSION['log_in'])) {
        header("Location: login.php");
        exit;   
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Dashboard</h2>
    <p>Sign in as : <?php 
    echo htmlspecialchars($_SESSION['user_email']);
    ?></p>
    <p><a href="logout.php">Logout</a></p>
    
</body>
</html>