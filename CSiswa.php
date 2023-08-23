<?php 

    require('../Models/MSiswa.php');

    Class CSiswa {

        function SimpanSiswa($nis,$nama){

            $db = new MSiswa();
            echo $db->Simpan($nis,$nama);
            
        }

    }

?>