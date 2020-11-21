<?php
    $koneksi = mysqli_connect("localhost" , "root" , "" ,"phpdasar");

    if ( isset($_POST["submit"]) ) {
        $merek = $_POST["merek"];
        $stok = $_POST["stok"];
        $prosesor = $_POST["prosesor"];
        $tahun = $_POST["tahun"];
        $gambar = $_POST["gambar"];

        //membuat query untuk memasukkan data ke database

        $query = "INSERT INTO laptop
                    VALUES
                ('', '$merek' ,$stok ,'$prosesor', '$tahun' ,'$gambar')";

        $create = mysqli_query($koneksi ,$query);

        if(mysqli_affected_rows($koneksi) > 0){
            echo("data berhasil dimasukkan");
        }else{
            echo("data gagal dimasukkan");
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