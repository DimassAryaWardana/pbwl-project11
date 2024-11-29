<?php

namespace App\Controllers;

use App\Core\Controller;

class Produk extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Produk();
	}
    public function index()
    {
        $data['rows'] = $this->model->tampil(); // Sesuaikan dengan model Produk
        $this->dashboard('produk/index', $data);
    }

	public function input() {
		$data['kategori'] = $this->model->getKategori(); // Ambil data kategori
		$this->dashboard('produk/input', $data); // Kirim data kategori ke view
	}
	
	public function edit($id) {
		$data['row'] = $this->model->getById($id); // Ambil data produk
		$data['kategori'] = $this->model->getKategori(); // Ambil data kategori
		$this->dashboard('produk/edit', $data); // Kirim data ke view
	}	

	public function simpan() {
        $this->model->simpan();
        header("Location: " . URL . "/produk");
    }

    public function update() {
        $this->model->update();
        header("Location: " . URL . "/produk");
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location: " . URL . "/produk");
    }
}
