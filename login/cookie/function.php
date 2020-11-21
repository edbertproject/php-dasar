<?php

$koneksi = mysqli_connect("localhost", "root", "", "phpdasar");

function setquery($parameter)
{
    global $koneksi;
    $query = mysqli_query($koneksi, $parameter);
    if (!$query) {
        echo "query error or not selected";
    }
    $penampung = [];
    while ($fetch = mysqli_fetch_assoc($query)) {
        $penampung[] = $fetch;
    }
    return $penampung;
}

function insert($data, $file)
{
    global $koneksi;
    $merek = htmlspecialchars($data["merek"]);
    $stok = htmlspecialchars($data["stok"]);
    $prosesor = htmlspecialchars($data["prosesor"]);
    $tahun = htmlspecialchars($data["tahun"]);

    $namaGambar = upload($file["gambar"]);
    if (!$namaGambar) {
        return false;
    }

    $gambar = htmlspecialchars($namaGambar);

    $query = "INSERT INTO laptop
                    VALUES
                ('', '$merek' ,$stok ,'$prosesor', '$tahun' ,'$gambar')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM laptop WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function update($data)
{
    global $koneksi;
    $id = $data["id"];
    $merek = htmlspecialchars($data["merek"]);
    $stok = htmlspecialchars($data["stok"]);
    $prosesor = htmlspecialchars($data["prosesor"]);
    $tahun = htmlspecialchars($data["tahun"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $query = "UPDATE laptop SET
                    merek = '$merek',
                    stok = $stok,
                    prosesor = '$prosesor',
                    tahun = '$tahun',
                    gambar = '$gambar'
                WHERE id = $id
        ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function upload($file)
{

    $namaGambar = $file["name"];
    $tmp = $file["tmp_name"];
    $size = $file["size"];
    $error = $file["error"];

    if ($error != 0) {
        echo "
                <script>
                    alert('gambar error')
                    document.location.href = 'index.php'
                </script>
            ";
        return;
    }

    if ($size > 1000000) {
        echo "
                <script>
                    alert('gambar terlalu besar')
                    document.location.href = 'index.php'
                </script>
            ";
        return;
    }

    move_uploaded_file($tmp, "./img/" . $namaGambar);

    return $namaGambar;
}

function daftar($data)
{
    global $koneksi;
    $username = strtolower($data["username"]);
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    // validasi 1
    if ($password !== $password2) {
        echo "
                <script>
                    alert('Masukan password yang benar')
                </script>
            ";
        return 0;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users
                    VALUES
                ('', '$username' ,'$password')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function masuk($data)
{
    global $koneksi;

    $username = $data["username"];
    $password = $data["password"];

    $query = "SELECT * FROM users WHERE username='$username'";
    $result =  mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            return $row;
        }
    }
    return false;
}

function validCookie()
{
    global $koneksi;
    $id = $_COOKIE['user'];
    $res = mysqli_query($koneksi, "SELECT * FROM users WHERE id='$id'");
    $res = mysqli_fetch_assoc($res);

    $valid = $_COOKIE['username'] === hash('sha256', $res['username']);

    if ($valid) {
        return true;
    }
    return false;
}

    // function alert($msg){
    //     return echo "<script>
    //                 alert(". $msg .")
    //                 document.location.href = 'index.php'
    //             </script>";
    // }
