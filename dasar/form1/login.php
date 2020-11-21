<?php
    if( isset($_POST["submit"]) ){
        if( $_POST["username"] == "edbert" & $_POST["password"] == "123" ){
            header("Location: admin.php");
            exit;
        }else{
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login form simple</title>

    <style>
        p{
            color: red;
        }
    </style>
</head>
<body>

    <h3>Login form</h3>
    <?php if( isset($error) ): ?>
        <p>your username and password are wrong</p>
    <?php endif; ?>
    <form method="post">
        <label for="username">username</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>

    
</body>
</html>