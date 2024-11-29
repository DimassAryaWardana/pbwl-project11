<?php

namespace App\Models;

use App\Core\Model;
use \PDO; // Tambahkan ini untuk mengimpor kelas PDO

class Kategori extends Model
{
    public function getById($id) {
        $sql = "SELECT * FROM tb_kategori WHERE kat_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function tampil()
    {
        $query = "SELECT * FROM tb_kategori";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

      public function simpan() {
            $nama = $_POST['kat_nama'];
            $keterangan = $_POST['kat_keterangan'];
            $sql = "INSERT INTO tb_kategori (kat_nama, kat_keterangan) VALUES (:nama, :keterangan)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':nama', $nama);
            $stmt->bindParam(':keterangan', $keterangan);
            $stmt->execute();
        }
    
        public function update() {
            $id = $_POST['kat_id'];
            $nama = $_POST['kat_nama'];
            $keterangan = $_POST['kat_keterangan'];
            $sql = "UPDATE tb_kategori SET kat_nama = :nama, kat_keterangan = :keterangan WHERE kat_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nama', $nama);
            $stmt->bindParam(':keterangan', $keterangan);
            $stmt->execute();
        }
    
        public function delete($id) {
            $sql = "DELETE FROM tb_kategori WHERE kat_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }
}
