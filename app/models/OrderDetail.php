<?php

namespace App\Models;

use App\Core\Model;
use \PDO;

class OrderDetail extends Model
{
    // Menampilkan semua detail order berdasarkan order_id
    public function tampil($order_id)
    {
        $sql = "SELECT * FROM tb_order_detail WHERE detail_id_order = :order_id"; // Query untuk mendapatkan detail berdasarkan order_id
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':order_id', $order_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Mengembalikan hasil query
    }

    // Mendapatkan semua produk untuk dipilih saat input detail order
    public function getProduk()
    {
        $sql = "SELECT * FROM tb_produk"; // Query untuk mendapatkan semua produk
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Mengembalikan hasil query
    }

    // Menyimpan detail order baru
    public function simpan()
    {
        $sql = "INSERT INTO tb_order_detail (detail_id_order, detail_id_produk, detail_harga, detail_jml) 
                VALUES (:order_id, :produk_id, :harga, :jumlah)";
        
        $stmt = $this->db->prepare($sql);
        
        // Binding parameter dengan data dari form
        $stmt->bindParam(':order_id', $_POST['detail_id_order']);
        $stmt->bindParam(':produk_id', $_POST['detail_id_produk']);
        $stmt->bindParam(':harga', $_POST['detail_harga']);
        $stmt->bindParam(':jumlah', $_POST['detail_jml']);
        
        $stmt->execute(); // Eksekusi query
    }

    // Mengupdate detail order berdasarkan order_id dan produk_id
    public function update()
    {
        $sql = "UPDATE tb_order_detail SET 
                detail_harga = :harga,
                detail_jml = :jumlah 
                WHERE detail_id_order = :order_id AND detail_id_produk = :produk_id";

        $stmt = $this->db->prepare($sql);
        
        // Binding parameter dengan data dari form
        $stmt->bindParam(':order_id', $_POST['detail_id_order']);
        $stmt->bindParam(':produk_id', $_POST['detail_id_produk']);
        $stmt->bindParam(':harga', $_POST['detail_harga']);
        $stmt->bindParam(':jumlah', $_POST['detail_jml']);
        
        $stmt->execute(); // Eksekusi query
    }

    // Menghapus detail order berdasarkan order_id dan produk_id
    public function delete($order_id, $produk_id)
    {
        $sql = "DELETE FROM tb_order_detail WHERE detail_id_order = :order_id AND detail_id_produk = :produk_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':order_id', $order_id, PDO::PARAM_INT);
        $stmt->bindParam(':produk_id', $produk_id, PDO::PARAM_INT);
        $stmt->execute(); // Eksekusi query untuk menghapus
    }
}
