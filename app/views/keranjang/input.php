<h2>Tambah Keranjang</h2>

<form action="<?php echo URL; ?>/keranjang/simpan" method="post">
    <table>
        <tr>
            <td>Nama User</td>
            <td>
                <select name="ker_id_user">
                    <option value="">Pilih User</option>
                    <?php foreach ($data['users'] as $user) { ?>
                        <option value="<?php echo $user['user_id']; ?>"><?php echo $user['user_nama']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td>
                <select name="ker_id_produk">
                    <option value="">Pilih Produk</option>
                    <?php foreach ($data['produk'] as $produk) { ?>
                        <option value="<?php echo $produk['produk_id']; ?>"><?php echo $produk['produk_nama']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="number" name="ker_harga" step="0.01"></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><input type="number" name="ker_jml"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
