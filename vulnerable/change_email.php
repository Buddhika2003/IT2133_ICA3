<?php session_start(); 
    if(!isset($_SESSION['Log_in'])){
        header('Location:ogin.php');
        exit;
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
       $new = filter_var($_POST['new_email']?? '', FILTER_VALIDATE_EMAIL);
    if($new){
        $msg ="Invalid email";
    }else{
        $_SESSION['email'] = $new;
        $msg = "Email changed successfully". htmlspecialchars($new) ;
    }
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
    <?php if (!empty($msg)): ?>
        <p style="color:green;"><?php echo $msg; ?></p>
    <?php endif; ?>

    <p><a href="index.php">Back to Dashboard</a></
</body>
</html>