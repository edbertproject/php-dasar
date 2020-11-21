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

    function insert($data){
        global $koneksi;
        $merek = htmlspecialchars($data["merek"]);
        $stok = htmlspecialchars($data["stok"]);
        $prosesor = htmlspecialchars($data["prosesor"]);
        $tahun = htmlspecialchars($data["tahun"]);
        $gambar = htmlspecialchars($data["gambar"]);
        $query = "INSERT INTO laptop
                    VALUES
                ('', '$merek' ,$stok ,'$prosesor', '$tahun' ,'$gambar')";
        mysqli_query($koneksi ,$query);
        return mysqli_affected_rows($koneksi);
    }

?>