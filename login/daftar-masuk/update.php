<?php
    require "function.php";

    // mengambil data sesuai id pada database dan menampilkan ke text input
    $id = $_GET["id"];
    $data = setquery("SELECT * FROM laptop WHERE id = $id")[0];

    // mengecek tombol submit sudah ditekan apa belum
    if ( isset($_POST["submit"]) ) {
        // apakah query berhasil atau tidak
        // jika berhasil akan mengembalikan nilai 1
        // jika tidak berhasil query akan mengembalikan nilai -1

        if (update($_POST) > 0) {
            echo"
                <script>
                    alert('data berhasil diupdate')
                    document.location.href = 'index.php'
                </script>
            ";
        }else{
            echo"
                <script>
                    alert('data gagal diupdate')
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
    <title>Update data</title>

    <style>
        img{
            height: 70px;
        }
    </style>
</head>
<body>
    
    <a href="index.php">kembali</a>
    <h1>Update data yang ada pada tabel</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <ul>
            <li>
                <label for="merek">Merek</label>
                <input type="text" name="merek" id="merek" required value="<?= $data['merek'] ?>">
            </li>
            <li>
                <label for="stok">Stok</label>
                <input type="number" name="stok" id="stok" required value=<?= $data['stok'] ?>>
            </li>
            <li>
                <label for="prosesor">Prosesor</label>
                <input type="text" name="prosesor" id="prosesor" required value="<?= $data['prosesor'] ?>">
            </li>
            <li>
                <label for="tahun">Tahun</label>
                <input type="text" name="tahun" id="tahun" required value="<?= $data['tahun'] ?>">
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar" required value="<?= $data['gambar'] ?>">
            </li>
            <li>
                <button type="submit" name="submit">Update data</button>
            </li>
        </ul>
    </form>
</body>
</html>