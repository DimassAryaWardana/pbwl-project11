<h2>Edit Order</h2>

<form action="<?php echo URL; ?>/order/update" method="post">
    <input type="hidden" name="order_id" value="<?php echo $data['row']['order_id']; ?>">
    <table>
        <tr>
            <td>User</td>
            <td>
                <select name="order_id_user">
                    <option value="">Pilih User</option>
                    <?php foreach ($data['users'] as $user) { ?>
                        <option value="<?php echo $user['user_id']; ?>" <?php echo $user['user_id'] == $data['row']['order_id_user'] ? 'selected' : ''; ?>>
                            <?php echo $user['user_nama']; ?>
                        </option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Kode Order</td>
            <td><input type="text" name="order_kode" value="<?php echo $data['row']['order_kode']; ?>"></td>
        </tr>
        <tr>
            <td>Total</td>
            <td><input type="number" name="order_ttl" value="<?php echo $data['row']['order_ttl']; ?>"></td>
        </tr>
        <tr>
            <td>Kurir</td>
            <td><input type="text" name="order_kurir" value="<?php echo $data['row']['order_kurir']; ?>"></td>
        </tr>
        <tr>
            <td>Ongkir</td>
            <td><input type="number" name="order_ongkir" value="<?php echo $data['row']['order_ongkir']; ?>"></td>
        </tr>
        <tr>
            <td>Deadline Pembayaran</td>
            <td><input type="datetime-local" name="order_byr_deadline" value="<?php echo date('Y-m-d\TH:i', strtotime($data['row']['order_byr_deadline'])); ?>"></td>
        </tr>
        <tr>
            <td>Status Pembatalan</td>
            <td>
                <select name="order_batal">
                    <option value="0" <?php echo $data['row']['order_batal'] == 0 ? 'selected' : ''; ?>>Aktif</option>
                    <option value="1" <?php echo $data['row']['order_batal'] == 1 ? 'selected' : ''; ?>>Batal</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Update"></td>
        </tr>
    </table>
</form>
