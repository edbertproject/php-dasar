<?php

    $koneksi = mysqli_connect("localhost" , "root" , "" ,"phpdasar");

    function setquery($parameter) {
        global $koneksi;
        $query = mysqli_query($koneksi , $parameter);
        if(!$query){
            echo "query error or not selected";
        }
        $penampung = [];
        while($fetch = mysqli_fetch_assoc($query)){
            $penampung[] = $fetch;
        }
        return $penampung;
    }

    function insert($data, $file){
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
        mysqli_query($koneksi ,$query);
        return mysqli_affected_rows($koneksi);
    }

    function hapus($id){
        global $koneksi;
        mysqli_query($koneksi , "DELETE FROM laptop WHERE id = $id");
        return mysqli_affected_rows($koneksi);
    }

    function update($data){
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
        mysqli_query($koneksi ,$query);
        return mysqli_affected_rows($koneksi);
    }

    function upload($file){

        $namaGambar = $file["name"];
        $tmp = $file["tmp_name"];
        $size = $file["size"];
        $error = $file["error"];

        if($error != 0){
            echo"
                <script>
                    alert('gambar error')
                    document.location.href = 'index.php'
                </script>
            ";
            return;
        }

        if ($size > 1000000) {
            echo"
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

    // function alert($msg){
    //     return echo "<script>
    //                 alert(". $msg .")
    //                 document.location.href = 'index.php'
    //             </script>";
    // }

?>