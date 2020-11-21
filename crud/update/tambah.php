<?php
    require "function.php";

    if ( isset($_POST["submit"]) ) {
        // apakah query berhasil atau tidak
        // jika berhasil akan mengembalikan nilai 1
        // jika tidak berhasil query akan mengembalikan nilai -1

        if (insert($_POST) > 0) {
            echo"
                <script>
                    alert('data berhasil ditambahkan')
                    document.location.href = 'index.php'
                </script>
            ";
        }else{
            echo"
                <script>
                    alert('data gagal ditambahkan')
                    document.location.href = 'index.php'
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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data di database</title>

    <style>
        img{
            height: 70px;
        }
    </style>
</head>
<body>
    
    <a href="index.php">kembali</a>
    <h1>Masukan data ke dalam tabel</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="merek">Merek</label>
                <input type="text" name="merek" id="merek" required>
            </li>
            <li>
                <label for="stok">Stok</label>
                <input type="number" name="stok" id="stok" required>
            </li>
            <li>
                <label for="prosesor">Prosesor</label>
                <input type="text" name="prosesor" id="prosesor" required>
            </li>
            <li>
                <label for="tahun">Tahun</label>
                <input type="text" name="tahun" id="tahun" required>
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah data</button>
            </li>
        </ul>
    </form>
</body>
</html>