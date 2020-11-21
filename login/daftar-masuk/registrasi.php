<?php
require "function.php";

if (isset($_POST["submit"])) {
    if (daftar($_POST) > 0) {
        echo "
                <script>
                    alert('Berhasil Registrasi')
                    document.location.href = 'index.php'
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('Gagal Registrasi')
                </script>
            ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
        label,
        input {
            display: block;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <label for="password2">Password2</label>
        <input type="password" name="password2" id="password2">
        <button type="submit" name="submit">Sign up</button>
    </form>
</body>

</html>