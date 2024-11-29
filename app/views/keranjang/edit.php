<h2>Edit Keranjang</h2>

<form action="<?php echo URL; ?>/keranjang/update" method="post">
    <input type="hidden" name="ker_id" value="<?php echo $data['row']['ker_id']; ?>">
    <table>
        <tr>
            <td>Nama User</td>
            <td>
                <select name="ker_id_user">
                    <?php foreach ($data['users'] as $user) { ?>
                        <option value="<?php echo $user['user_id']; ?>" <?php echo $user['user_id'] == $data['row']['ker_id_user'] ? 'selected' : ''; ?>>
                            <?php echo $user['user_nama']; ?>
                        </option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td>
                <select name="ker_id_produk">
                    <?php foreach ($data['produk'] as $produk) { ?>
                        <option value="<?php echo $produk['produk_id']; ?>" <?php echo $produk['produk_id'] == $data['row']['ker_id_produk'] ? 'selected' : ''; ?>>
                            <?php echo $produk['produk_nama']; ?>
                        </option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="number" name="ker_harga" step="0.01" value="<?php echo $data['row']['ker_harga']; ?>"></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><input type="number" name="ker_jml" value="<?php echo $data['row']['ker_jml']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>
