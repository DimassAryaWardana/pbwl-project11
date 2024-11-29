<?php 
if (isset($_POST['btn_simpan'])) {
    $user->simpan();
    header("location:index.php?hal=user_tampil");
}

if (isset($_POST['btn_update'])) {
    $user->update();
    header("location:index.php?hal=user_tampil");
}
