<?php
    require "function.php";

    $penampung =  setquery("SELECT * FROM laptop");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create data</title>

    <style>
        body{
            padding: 1em;
        }
        img{
            height: 70px;
        }
    </style>
</head>
<body>

    <a href="tambah.php">Tambah data laptop</a>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>id</th>
            <th>aksi</th>
            <th>merek</th>
            <th>stok</th>
            <th>prosesor</th>
            <th>tahun</th>
            <th>gambar</th>
        </tr>

        
        <?php 
            $i = 1;
            foreach($penampung as $isi) : ?>
            <tr>
                <td><?=$i?></td>
                <td>
                    <a href="hapus.php?id=<?= $isi['id']?>" onclick="return confirm('apakah anda yakin')">hapus</a>
                    <a href="#">ubah</a>
                </td>
                <td><?= $isi["merek"]?></td>
                <td><?= $isi["stok"]?></td>
                <td><?= $isi["prosesor"]?></td>
                <td><?= $isi["tahun"]?></td>
                <td><img src="img/<?= $isi["gambar"]?>"></td>
            </tr>
        <?php   $i++;
                endforeach; ?>

    </table>

</body>
</html>