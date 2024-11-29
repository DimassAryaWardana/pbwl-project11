<?php

namespace App\Controllers;

use App\Core\Controller;

class Order extends Controller
{
    public object $model;

    public function __construct()
    {
        $this->model = new \App\Models\Order();
    }

    public function index()
    {
        $data['rows'] = $this->model->tampil(); // Menampilkan semua data order
        $this->dashboard('order/index', $data); // Tampilkan di view
    }

    public function input() 
    {
        $data['users'] = $this->model->getUsers(); // Ambil data user untuk pilihan user
        $this->dashboard('order/input', $data); // Tampilkan form input
    }

    public function edit($id)
    {
        $data['row'] = $this->model->getById($id); // Ambil data order berdasarkan ID
        $data['users'] = $this->model->getUsers(); // Ambil data user
        $this->dashboard('order/edit', $data); // Tampilkan form edit
    }

    public function simpan()
    {
        $this->model->simpan(); // Simpan data order
        header("Location: " . URL . "/order"); // Redirect ke halaman daftar order
    }

    public function update()
    {
        $this->model->update(); // Update data order
        header("Location: " . URL . "/order"); // Redirect ke halaman daftar order
    }

    public function delete($id)
    {
        $this->model->delete($id); // Hapus data order berdasarkan ID
        header("Location: " . URL . "/order"); // Redirect ke halaman daftar order
    }
}
