<?php 
if (isset($_POST['btn_simpan'])) {
    $order->simpan();
    header("location:index.php?hal=order_tampil");
}

if (isset($_POST['btn_update'])) {
    $order->update();
    header("location:index.php?hal=order_tampil");
}
