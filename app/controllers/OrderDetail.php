<?php

namespace App\Controllers;

use App\Core\Controller;

class OrderDetail extends Controller
{
    public object $model;

    public function __construct()
    {
        $this->model = new \App\Models\OrderDetail(); // Inisialisasi model OrderDetail
    }

    // Menampilkan daftar detail order
    public function index($order_id)
    {
        $data['rows'] = $this->model->tampil($order_id); // Menampilkan detail berdasarkan order_id
        $this->dashboard('order_detail/index', $data); // Mengirimkan data ke view
    }

    // Menampilkan form input detail order
    public function input($order_id)
    {
        $data['order_id'] = $order_id; // Menyertakan order_id untuk form input
        $data['produk'] = $this->model->getProduk(); // Mendapatkan produk untuk pilihan
        $this->dashboard('order_detail/input', $data); // Mengirimkan data ke view
    }

    // Menyimpan detail order baru
    public function simpan()
    {
        $this->model->simpan(); // Menyimpan data
        header("Location: " . URL . "/order_detail/index/" . $_POST['detail_id_order']); // Redirect setelah simpan
    }

    // Mengupdate detail order
    public function update()
    {
        $this->model->update(); // Mengupdate data detail order
        header("Location: " . URL . "/order_detail/index/" . $_POST['detail_id_order']); // Redirect setelah update
    }

    // Menghapus detail order berdasarkan ID
    public function delete($order_id, $produk_id)
    {
        $this->model->delete($order_id, $produk_id); // Menghapus data detail order
        header("Location: " . URL . "/order_detail/index/" . $order_id); // Redirect setelah delete
    }
}
