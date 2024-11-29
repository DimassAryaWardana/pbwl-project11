<?php 
if (isset($_POST['btn_simpan'])) {
    $detail->simpan();
    header("location:index.php?hal=detail_tampil");
}

if (isset($_POST['btn_update'])) {
    $detail->update();
    header("location:index.php?hal=detail_tampil");
}
