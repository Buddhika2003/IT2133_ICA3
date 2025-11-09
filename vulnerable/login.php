<?php
    session_start();

    $err='';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $correct_email = "UOV_2025@gmail.com";
        $correct_password = "UOV2025";

        if($email == $correct_email && $password == $correct_password){
            $_SESSION['log_in'] = true;
            $_SESSION['user_email'] = $email;
            header("Location: index.php");
            exit;
        } else {
            $err = "Invalid email or password.";
        }
    }
?>
<!DOCTYPE html>
<html>
<head><title>CSRF_vulnerability</title>
</head>
<body>

    <h2>Login Form</h2>
    <form>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Login</button>
    </form>
    
</body>
</html>
