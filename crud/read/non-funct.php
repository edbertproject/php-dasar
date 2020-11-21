<?php
    $koneksi = mysqli_connect("localhost" , "root" , "" ,"phpdasar");

    $query = mysqli_query($koneksi , "SELECT * FROM laptop");

    // mysqli_query doesnt return error if is failed run
    // to check use this line
    if(!$query){
        echo "query error or not selected";
    }

    // mysqli_fetch_row     --> return array numeric
    // mysqli_fetch_assoc   --> return array associative
    // mysqli_fetch_array   --> return both array
    // mysqli_fetch_object  --> return as object
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read database</title>

    <style>
        img{
            height: 70px;
        }
    </style>
</head>
<body>
    
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

        <?php while($data = mysqli_fetch_assoc($query)) : ?>
            <tr>
                <td><?= $data["id"]?></td>
                <td>
                    <a href="#">hapus</a>
                    <a href="#">ubah</a>
                </td>
                <td><?= $data["merek"]?></td>
                <td><?= $data["stok"]?></td>
                <td><?= $data["prosesor"]?></td>
                <td><?= $data["tahun"]?></td>
                <td><img src="img/<?= $data["gambar"]?>"></td>
            </tr>
        <?php endwhile; ?>

    </table>

</body>
</html>