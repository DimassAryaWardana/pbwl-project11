<h2>Input Order</h2>

<form action="<?php echo URL; ?>/order/simpan" method="post">
    <table>
        <tr>
            <td>User</td>
            <td>
                <select name="order_id_user">
                    <option value="">Pilih User</option>
                    <?php foreach ($data['users'] as $user) { ?>
                        <option value="<?php echo $user['user_id']; ?>"><?php echo $user['user_nama']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Kode Order</td>
            <td><input type="text" name="order_kode"></td>
        </tr>
        <tr>
            <td>Total</td>
            <td><input type="number" name="order_ttl"></td>
        </tr>
        <tr>
            <td>Kurir</td>
            <td><input type="text" name="order_kurir"></td>
        </tr>
        <tr>
            <td>Ongkir</td>
            <td><input type="number" name="order_ongkir"></td>
        </tr>
        <tr>
            <td>Deadline Pembayaran</td>
            <td><input type="datetime-local" name="order_byr_deadline"></td>
        </tr>
        <tr>
            <td>Status Pembatalan</td>
            <td>
                <select name="order_batal">
                    <option value="0">Aktif</option>
                    <option value="1">Batal</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>
