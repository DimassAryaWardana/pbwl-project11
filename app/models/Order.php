<?php

namespace App\Models;

use App\Core\Model;
use \PDO;

class Order extends Model
{
    public function getUsers()
    {
        $sql = "SELECT * FROM tb_users"; // Ambil data user
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function tampil()
    {
        $sql = "SELECT * FROM tb_order"; // Ambil semua data order
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Menyimpan data order baru
    public function simpan()
    {
        $sql = "INSERT INTO tb_order (
            order_id_user, 
            order_kode, 
            order_ttl, 
            order_kurir, 
            order_ongkir, 
            order_byr_deadline, 
            order_batal
        ) VALUES (
            :id_user, 
            :kode, 
            :ttl, 
            :kurir, 
            :ongkir, 
            :byr_deadline, 
            :order_batal
        )";

        $stmt = $this->db->prepare($sql);

        // Bind parameter dengan data dari form
        $stmt->bindParam(':id_user', $_POST['order_id_user']);
        $stmt->bindParam(':kode', $_POST['order_kode']);
        $stmt->bindParam(':ttl', $_POST['order_ttl']);
        $stmt->bindParam(':kurir', $_POST['order_kurir']);
        $stmt->bindParam(':ongkir', $_POST['order_ongkir']);
        $stmt->bindParam(':byr_deadline', $_POST['order_byr_deadline']);
        $stmt->bindParam(':order_batal', $_POST['order_batal']);

        $stmt->execute();
    }

    // Mengupdate data order berdasarkan ID
    public function update()
    {
        $sql = "UPDATE tb_order SET
            order_id_user = :id_user,
            order_kode = :kode,
            order_ttl = :ttl,
            order_kurir = :kurir,
            order_ongkir = :ongkir,
            order_byr_deadline = :byr_deadline,
            order_batal = :order_batal,
            updated_at = :updated_at
        WHERE order_id = :id";

        $stmt = $this->db->prepare($sql);

        // Bind parameter dengan data dari form
        $stmt->bindParam(':id', $_POST['order_id']);
        $stmt->bindParam(':id_user', $_POST['order_id_user']);
        $stmt->bindParam(':kode', $_POST['order_kode']);
        $stmt->bindParam(':ttl', $_POST['order_ttl']);
        $stmt->bindParam(':kurir', $_POST['order_kurir']);
        $stmt->bindParam(':ongkir', $_POST['order_ongkir']);
        $stmt->bindParam(':byr_deadline', $_POST['order_byr_deadline']);
        $stmt->bindParam(':order_batal', $_POST['order_batal']);

        $updatedAt = date('Y-m-d H:i:s');
        $stmt->bindParam(':updated_at', $updatedAt); // Set updated_at saat update data

        $stmt->execute();
    }

    // Menghapus data order berdasarkan ID
    public function delete($id)
    {
        $sql = "DELETE FROM tb_order WHERE order_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    // Mendapatkan data order berdasarkan ID
    public function getById($id)
    {
        $sql = "SELECT * FROM tb_order WHERE order_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
