<h2>Edit User</h2>

<form action="<?php echo URL; ?>/users/update" method="post">
    <input type="hidden" name="user_id" value="<?php echo $data['row']['user_id']; ?>">
    <table>
        <tr>
            <td>Email</td>
            <td><input type="email" name="user_email" value="<?php echo $data['row']['user_email']; ?>" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="user_nama" value="<?php echo $data['row']['user_nama']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="user_alamat"><?php echo $data['row']['user_alamat']; ?></textarea></td>
        </tr>
        <tr>
            <td>No HP</td>
            <td><input type="text" name="user_hp" value="<?php echo $data['row']['user_hp']; ?>"></td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td><input type="text" name="user_pos" value="<?php echo $data['row']['user_pos']; ?>"></td>
        </tr>
        <tr>
            <td>Role</td>
            <td>
                <select name="user_role">
                    <option value="1" <?php echo $data['row']['user_role'] == 1 ? 'selected' : ''; ?>>Admin</option>
                    <option value="0" <?php echo $data['row']['user_role'] == 0 ? 'selected' : ''; ?>>User</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                <select name="user_aktif">
                    <option value="1" <?php echo $data['row']['user_aktif'] == 1 ? 'selected' : ''; ?>>Aktif</option>
                    <option value="0" <?php echo $data['row']['user_aktif'] == 0 ? 'selected' : ''; ?>>Nonaktif</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="UPDATE"></td>
        </tr>
    </table>
</form>
