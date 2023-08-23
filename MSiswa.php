<?php
    require('../Config/Database.php');

    Class MSiswa{

        var $sql;

        function Simpan($nis,$nama){
            Global $Koneksi;
            $sql="insert into siswa values('".$nis."','".$nama."')";
            $exec=mysqli_query($Koneksi,$sql);
            if($exec>0){
                return "Data Berhasil Disimpan.";
            }
        }
        
    }
?>