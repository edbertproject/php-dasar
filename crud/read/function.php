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
?>