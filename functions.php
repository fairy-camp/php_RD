<?php
    $koneksi = mysqli_connect("localhost", "root", "", "karyawan");

    function query($query) {
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;
    }

    function hapus($id) {

        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM tb_karyawan WHERE id = $id");

        return mysqli_affected_rows($koneksi);
      
   }


?>