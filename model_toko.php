<?php
    function getProduk(){
        include "koneksi.php";
        $query = "SELECT * FROM produk";
        $result = mysqli_query($connect,$query);
        $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $hasil;
    }
    // echo "<pre>";
    // print_r(getProduk());
    // echo "</pre>";
?>



