<h2>Input Order Detail</h2>

<form action="<?php echo URL; ?>/order_detail/simpan" method="post">
    <table>
        <tr>
            <td>ID ORDER</td>
            <td><input type="number" name="detail_id_order" required></td>
        </tr>
        <tr>
            <td>ID PRODUK</td>
            <td><input type="number" name="detail_id_produk" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="number" step="0.01" name="detail_harga" required></td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="number" name="detail_jml" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
