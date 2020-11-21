<?php
require "function.php";

if (isset($_POST["submit"])) {
    if (masuk($_POST)) {
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
</body>

</html>