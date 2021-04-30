<?php 
    // function untuk melakukan koneksi ke database dan memilih database
    function koneksi(){
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "pw_tubes_203040049");

        return $conn;
    }

    // function untuk melakukan query dan memasukannya kedalam array
    function query($sql){
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;

        }
        return $rows;
    }

    // function untuk mengubah format tampilan int harga kedalam format rupiah
    function ubahRupiah($angka){
        return "Rp" . number_format($angka,2,',','.');
    }
?>