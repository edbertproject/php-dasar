<?php

session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('user', '', time() - 3600);
setcookie('username', '', time() - 3600);

header("Location: masuk.php");
