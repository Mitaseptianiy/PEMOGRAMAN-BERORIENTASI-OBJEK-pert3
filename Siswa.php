<?php
require('../Controller/CSiswa.php');
require('../Libraries/csrf.php');
session_start();
$Siswa = new CSiswa();

if (isset($_POST['simpan'])) {

    if(CSRF::check($_POST['csrf_token'], 'form_csrf'))
    {
        echo $Siswa->SimpanSiswa($_POST['nis'], $_POST['nama']);
    }
    else 
    {
        echo "Invalid or missing CSRF token.";
    }
    
}
?>

<form action="" method="post">
    <input type="hidden" name="csrf_token" value="<?php echo CSRF::generate('form_csrf'); ?>">
    <table>
        <tr>
            <td>Masukan NIS Siswa</td>
            <td>:</td>
            <td><input type="text" name="nis"></td>
        </tr>
        <tr>
            <td>Masukan Nama Lengkap Siswa</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td colspan="3" align="right">
                <input type="submit" name="simpan" value="Simpan">
            </td>
        </tr>
    </table>
</form>

