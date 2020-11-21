<?php
    if( !isset($_GET["a"]) ||
        !isset($_GET["merek"]) || 
        !isset($_GET["stok"]) ||
        !isset($_GET["prosesor"]) ||
        !isset($_GET["tahun"])){
        header("Location: get1.php");
        exit;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>geet</title>

    <style>
        img{
            height : 100px;
        }
    </style>
</head>
<body>

    <h1>Daftar barang dan stok</h1>

    
    <ul>
        <li><img src="<?= $_GET["a"]?>"></li>
        <li><strong>Merek = </strong><?= $_GET["merek"] ?></li>   
        <li><strong>Stok = </strong><?= $_GET["stok"] ?></li>
        <li><strong>Prosesor = </strong><?= $_GET["prosesor"] ?></li>
        <li><strong>Tahun = </strong><?= $_GET["tahun"] ?></li>
    </ul>
    <a href="get1.php" >Kembali</a>
    
</body>
</html>