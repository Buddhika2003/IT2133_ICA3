<?php session_start(); 
    if(!isset($_SESSION['Log_in'])){
        header('Location:ogin.php');
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <title>Change email</title>
</head>
<body>
    <form method="POST" action="">
        <input type="email" name="new_email" placeholder="New Email" required>
        <button type="submit" value="Change Email"></button>
    </form>
    
</body>
</html>