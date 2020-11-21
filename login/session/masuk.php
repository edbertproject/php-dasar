<?php
require "function.php";

session_start();
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST["submit"])) {
    if (masuk($_POST)) {
        // session start
        $_SESSION["login"] = true;
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
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <button type="submit" name="submit">Masuk</button>
    </form>
    <p>Belum punya akun? <a href="registrasi.php">Sign Up</a></p>
</body>

</html>