<?php

namespace App\Models;

use App\Core\Model;
use \PDO;

class Users extends Model
{
    public function tampil()
    {
        $sql = "SELECT * FROM tb_users";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function simpan()
    {
        $sql = "INSERT INTO tb_users (
            user_email, 
            user_password, 
            user_nama, 
            user_alamat, 
            user_hp, 
            user_pos, 
            user_role, 
            user_aktif, 
            created_at
        ) VALUES (
            :email, 
            :password, 
            :nama, 
            :alamat, 
            :hp, 
            :pos, 
            :role, 
            :aktif, 
            :created_at
        )";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(':email', $_POST['user_email']);
        $stmt->bindParam(':password', password_hash($_POST['user_password'], PASSWORD_BCRYPT));
        $stmt->bindParam(':nama', $_POST['user_nama']);
        $stmt->bindParam(':alamat', $_POST['user_alamat']);
        $stmt->bindParam(':hp', $_POST['user_hp']);
        $stmt->bindParam(':pos', $_POST['user_pos']);
        $stmt->bindParam(':role', $_POST['user_role']);
        $stmt->bindParam(':aktif', $_POST['user_aktif']);

        $createdAt = date('Y-m-d H:i:s');
        $stmt->bindParam(':created_at', $createdAt);

        $stmt->execute();
    }

    public function update()
    {
        $sql = "UPDATE tb_users SET 
            user_email = :email, 
            user_nama = :nama, 
            user_alamat = :alamat, 
            user_hp = :hp, 
            user_pos = :pos, 
            user_role = :role, 
            user_aktif = :aktif, 
            updated_at = :updated_at 
        WHERE user_id = :id";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(':id', $_POST['user_id']);
        $stmt->bindParam(':email', $_POST['user_email']);
        $stmt->bindParam(':nama', $_POST['user_nama']);
        $stmt->bindParam(':alamat', $_POST['user_alamat']);
        $stmt->bindParam(':hp', $_POST['user_hp']);
        $stmt->bindParam(':pos', $_POST['user_pos']);
        $stmt->bindParam(':role', $_POST['user_role']);
        $stmt->bindParam(':aktif', $_POST['user_aktif']);

        $updatedAt = date('Y-m-d H:i:s');
        $stmt->bindParam(':updated_at', $updatedAt);

        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tb_users WHERE user_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM tb_users WHERE user_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
