<h2>Tambah User</h2>

<form action="<?php echo URL; ?>/users/simpan" method="post">
    <table>
        <tr>
            <td>Email</td>
            <td><input type="email" name="user_email" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="user_password" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="user_nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="user_alamat"></textarea></td>
        </tr>
        <tr>
            <td>No HP</td>
            <td><input type="text" name="user_hp"></td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td><input type="text" name="user_pos"></td>
        </tr>
        <tr>
            <td>Role</td>
            <td>
                <select name="user_role">
                    <option value="1">Admin</option>
                    <option value="0">User</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                <select name="user_aktif">
                    <option value="1">Aktif</option>
                    <option value="0">Nonaktif</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="SIMPAN"></td>
        </tr>
    </table>
</form>
