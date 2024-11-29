<h2>Edit Produk</h2>

<form action="<?php echo URL; ?>/produk/update" method="post" enctype="multipart/form-data">
    <input type="hidden" name="produk_id" value="<?php echo $data['row']['produk_id']; ?>">
    <table>
        <tr>
            <td>Kategori</td>
            <td>
                <select name="produk_id_kat">
                    <?php foreach ($data['kategori'] as $kat) { ?>
                        <option value="<?php echo $kat['kat_id']; ?>" <?php echo $kat['kat_id'] == $data['row']['produk_id_kat'] ? 'selected' : ''; ?>><?php echo $kat['kat_nama']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>User ID</td>
            <td><input type="text" name="produk_id_user" value="<?php echo $data['row']['produk_id_user']; ?>"></td>
        </tr>
        <tr>
            <td>Kode Produk</td>
            <td><input type="text" name="produk_kode" value="<?php echo $data['row']['produk_kode']; ?>"></td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td><input type="text" name="produk_nama" value="<?php echo $data['row']['produk_nama']; ?>"></td>
        </tr>
        <tr>
            <td>Harga Produk</td>
            <td><input type="number" name="produk_hrg" value="<?php echo $data['row']['produk_hrg']; ?>"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><textarea name="produk_keterangan" cols="30" rows="5"><?php echo $data['row']['produk_keterangan']; ?></textarea></td>
        </tr>
        <tr>
            <td>Stock</td>
            <td><input type="number" name="produk_stock" value="<?php echo $data['row']['produk_stock']; ?>"></td>
        </tr>
        <tr>
            <td>Foto Produk</td>
            <td><input type="file" name="produk_photo"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>
