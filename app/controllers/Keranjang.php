<?php

namespace App\Controllers;

use App\Core\Controller;

class Keranjang extends Controller
{
    public object $model;

    public function __construct()
    {
        $this->model = new \App\Models\Keranjang();
    }

    public function index()
    {
        $data['rows'] = $this->model->tampil(); // Ambil semua data keranjang
        $this->dashboard('keranjang/index', $data);
    }

    public function input()
    {
        $data['users'] = $this->model->getUsers(); // Ambil data pengguna
        $data['produk'] = $this->model->getProduk(); // Ambil data produk
        $this->dashboard('keranjang/input', $data); // Kirim data ke view input
    }

    public function edit($id)
    {
        $data['row'] = $this->model->getById($id); // Ambil data keranjang berdasarkan ID
        $data['users'] = $this->model->getUsers(); // Ambil data pengguna
        $data['produk'] = $this->model->getProduk(); // Ambil data produk
        $this->dashboard('keranjang/edit', $data); // Kirim data ke view edit
    }

    public function simpan()
    {
        $this->model->simpan(); // Simpan data keranjang
        header("Location: " . URL . "/keranjang");
    }

    public function update()
    {
        $this->model->update(); // Update data keranjang
        header("Location: " . URL . "/keranjang");
    }

    public function delete($id)
    {
        $this->model->delete($id); // Hapus data keranjang
        header("Location: " . URL . "/keranjang");
    }
}
