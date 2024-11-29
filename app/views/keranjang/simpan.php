<?php 
if (isset($_POST['btn_simpan'])) {
    $ker->simpan();
    header("location:index.php?hal=ker_tampil");
}

if (isset($_POST['btn_update'])) {
    $ker->update();
    header("location:index.php?hal=ker_tampil");
}
