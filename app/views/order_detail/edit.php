<h2>Edit Detail Order</h2>

<form action="<?php echo URL; ?>/order_detail/update" method="post">
    <input type="hidden" name="detail_id_order" value="<?php echo $data['order_id']; ?>"> <!-- Menyertakan order_id -->
    <input type="hidden" name="detail_id_produk" value="<?php echo $data['row']['detail_id_produk']; ?>"> <!-- Menyertakan produk_id -->

    <table>
        <tr>
            <td>Produk</td>
            <td>
                <select name="detail_id_produk">
                    <?php foreach ($data['produk'] as $prod) { ?>
                        <option value="<?php echo $prod['produk_id']; ?>" <?php echo $prod['produk_id'] == $data['row']['detail_id_produk'] ? 'selected' : ''; ?>><?php echo $prod['produk_nama']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="number" name="detail_harga" value="<?php echo $data['row']['detail_harga']; ?>" step="0.01"></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><input type="number" name="detail_jml" value="<?php echo $data['row']['detail_jml']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Update"></td>
        </tr>
    </table>
</form>
