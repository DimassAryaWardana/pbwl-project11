<h2>Input Produk</h2>

<form action="<?php echo URL; ?>/produk/simpan" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Kategori</td>
            <td>
                <select name="produk_id_kat">
                    <option value="">Pilih Kategori</option>
                    <?php foreach ($data['kategori'] as $kat) { ?>
                        <option value="<?php echo $kat['kat_id']; ?>"><?php echo $kat['kat_nama']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Kode Produk</td>
            <td><input type="text" name="produk_kode"></td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td><input type="text" name="produk_nama"></td>
        </tr>
        <tr>
            <td>Harga Produk</td>
            <td><input type="number" name="produk_hrg"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><textarea name="produk_keterangan" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>Stock</td>
            <td><input type="number" name="produk_stock"></td>
        </tr>
        <tr>
            <td>Foto Produk</td>
            <td><input type="file" name="produk_photo"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
