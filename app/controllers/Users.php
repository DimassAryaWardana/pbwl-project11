<?php

namespace App\Controllers;

use App\Core\Controller;

class Users extends Controller
{
    public object $model;

    public function __construct()
    {
        $this->model = new \App\Models\Users();
    }

    public function index()
    {
        $data['rows'] = $this->model->tampil(); // Mendapatkan semua data users
        $this->dashboard('users/index', $data);
    }

    public function input()
    {
        $this->dashboard('users/input');
    }

    public function edit($id)
    {
        $data['row'] = $this->model->getById($id); // Mendapatkan data user berdasarkan ID
        $this->dashboard('users/edit', $data);
    }

    public function simpan()
    {
        $this->model->simpan();
        header("Location: " . URL . "/users");
    }

    public function update()
    {
        $this->model->update();
        header("Location: " . URL . "/users");
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header("Location: " . URL . "/users");
    }
}
