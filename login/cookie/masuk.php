<?php
require "function.php";
session_start();

if (isset($_COOKIE['user'])) {
    if (validCookie()) {
        $_SESSION["login"] = true;
    }
}

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST["submit"])) {
    if ($res = masuk($_POST)) {
        // session start
        $_SESSION["login"] = true;

        if (isset($_POST["remember"])) {
            // set cookie 
            setcookie('user', $res['id'], time() + 120);
            setcookie('username', hash('sha256', $res['username']), time() + 120);
        }

        echo "
                <script>
                    document.location.href = 'index.php'
                </script>
            ";
    } else {
        $error = true;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        label,
        input {
            display: block;
        }
    </style>
</head>

<body>
    <?php
    if (isset($error)) {
        echo "<p style='color: red'>username atau password salah</p>";
    }
    ?>

    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username">
        <label for="password">Password</label>
        <input type="password" name="password">
        <input type="checkbox" name="remember">
        <label for="remember">Remember</label>
        <button type="submit" name="submit">Masuk</button>
    </form>
    <p>Belum punya akun? <a href="registrasi.php">Sign Up</a></p>
</body>

</html>