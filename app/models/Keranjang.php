<?php

namespace App\Models;

use App\Core\Model;
use \PDO;

class Keranjang extends Model
{
    // Menampilkan semua data keranjang
    public function tampil()
    {
        $sql = "SELECT 
                    tb_keranjang.*, 
                    tb_users.user_nama, 
                    tb_produk.produk_nama 
                FROM tb_keranjang
                JOIN tb_users ON tb_keranjang.ker_id_user = tb_users.user_id
                JOIN tb_produk ON tb_keranjang.ker_id_produk = tb_produk.produk_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Menambahkan data baru ke keranjang
    public function simpan()
    {
        $sql = "INSERT INTO tb_keranjang (
                    ker_id_user, 
                    ker_id_produk, 
                    ker_harga, 
                    ker_jml
                ) VALUES (
                    :id_user, 
                    :id_produk, 
                    :harga, 
                    :jumlah
                )";

        $stmt = $this->db->prepare($sql);

        // Bind parameter
        $stmt->bindParam(':id_user', $_POST['ker_id_user'], PDO::PARAM_INT);
        $stmt->bindParam(':id_produk', $_POST['ker_id_produk'], PDO::PARAM_INT);
        $stmt->bindParam(':harga', $_POST['ker_harga']);
        $stmt->bindParam(':jumlah', $_POST['ker_jml'], PDO::PARAM_INT);

        $stmt->execute();
    }

    // Mengupdate data keranjang berdasarkan ID
    public function update()
    {
        $sql = "UPDATE tb_keranjang SET
                    ker_id_user = :id_user,
                    ker_id_produk = :id_produk,
                    ker_harga = :harga,
                    ker_jml = :jumlah
                WHERE ker_id = :id";

        $stmt = $this->db->prepare($sql);

        // Bind parameter
        $stmt->bindParam(':id', $_POST['ker_id'], PDO::PARAM_INT);
        $stmt->bindParam(':id_user', $_POST['ker_id_user'], PDO::PARAM_INT);
        $stmt->bindParam(':id_produk', $_POST['ker_id_produk'], PDO::PARAM_INT);
        $stmt->bindParam(':harga', $_POST['ker_harga']);
        $stmt->bindParam(':jumlah', $_POST['ker_jml'], PDO::PARAM_INT);

        $stmt->execute();
    }

    // Menghapus data keranjang berdasarkan ID
    public function delete($id)
    {
        $sql = "DELETE FROM tb_keranjang WHERE ker_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    // Mendapatkan data keranjang berdasarkan ID
    public function getById($id)
    {
        $sql = "SELECT * FROM tb_keranjang WHERE ker_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Mendapatkan semua pengguna (untuk dropdown di form)
    public function getUsers()
    {
        $sql = "SELECT * FROM tb_users";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Mendapatkan semua produk (untuk dropdown di form)
    public function getProduk()
    {
        $sql = "SELECT * FROM tb_produk";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
