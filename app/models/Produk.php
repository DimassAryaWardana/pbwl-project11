<?php

namespace App\Models;

use App\Core\Model;
use \PDO;

class Produk extends Model
{
    public function getKategori()
    {
        $sql = "SELECT * FROM tb_kategori"; // Sesuaikan dengan tabel kategori Anda
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function tampil()
    {
        $sql = "SELECT * FROM tb_produk"; // Sesuaikan nama tabel
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Menyimpan data produk baru
    public function simpan()
    {
        $sql = "INSERT INTO tb_produk (
            produk_id_kat, 
            produk_id_user, 
            produk_kode, 
            produk_nama, 
            produk_hrg, 
            produk_keterangan, 
            produk_stock, 
            produk_photo, 
            created_at
        ) VALUES (
            :id_kat, 
            :id_user, 
            :kode, 
            :nama, 
            :hrg, 
            :keterangan, 
            :stock, 
            :photo, 
            :created_at
        )";

        $stmt = $this->db->prepare($sql);

        // Bind parameter dengan data dari form
        $stmt->bindParam(':id_kat', $_POST['produk_id_kat']);
        $stmt->bindParam(':id_user', $_POST['produk_id_user']);
        $stmt->bindParam(':kode', $_POST['produk_kode']);
        $stmt->bindParam(':nama', $_POST['produk_nama']);
        $stmt->bindParam(':hrg', $_POST['produk_hrg']);
        $stmt->bindParam(':keterangan', $_POST['produk_keterangan']);
        $stmt->bindParam(':stock', $_POST['produk_stock']);
        $stmt->bindParam(':photo', $_POST['produk_photo']);

        $createdAt = date('Y-m-d H:i:s'); // Simpan nilai tanggal ke variabel
        $stmt->bindParam(':created_at', $createdAt); // Gunakan variabel di sini

        $stmt->execute();
    }

    // Mengupdate data produk berdasarkan ID
    public function update()
    {
        $sql = "UPDATE tb_produk SET
            produk_id_kat = :id_kat,
            produk_id_user = :id_user,
            produk_kode = :kode,
            produk_nama = :nama,
            produk_hrg = :hrg,
            produk_keterangan = :keterangan,
            produk_stock = :stock,
            produk_photo = :photo,
            updated_at = :updated_at
        WHERE produk_id = :id";

        $stmt = $this->db->prepare($sql);

        // Bind parameter dengan data dari form
        $stmt->bindParam(':id', $_POST['produk_id']);
        $stmt->bindParam(':id_kat', $_POST['produk_id_kat']);
        $stmt->bindParam(':id_user', $_POST['produk_id_user']);
        $stmt->bindParam(':kode', $_POST['produk_kode']);
        $stmt->bindParam(':nama', $_POST['produk_nama']);
        $stmt->bindParam(':hrg', $_POST['produk_hrg']);
        $stmt->bindParam(':keterangan', $_POST['produk_keterangan']);
        $stmt->bindParam(':stock', $_POST['produk_stock']);
        $stmt->bindParam(':photo', $_POST['produk_photo']);

        $updatedAt = date('Y-m-d H:i:s'); // Simpan nilai tanggal ke variabel
        $stmt->bindParam(':updated_at', $updatedAt); // Gunakan variabel di sini

        $stmt->execute();
    } // Pastikan fungsi ditutup dengan kurung kurawal

    // Menghapus data produk berdasarkan ID
    public function delete($id)
    {
        $sql = "DELETE FROM tb_produk WHERE produk_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    // Mendapatkan data produk berdasarkan ID
    public function getById($id)
    {
        $sql = "SELECT * FROM tb_produk WHERE produk_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
