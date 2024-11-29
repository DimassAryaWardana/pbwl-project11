<h2>KERANJANG</h2>

<a href="<?php echo URL; ?>/keranjang/input" class="btn">Tambah Keranjang</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAMA USER</th>
        <th>NAMA PRODUK</th>
        <th>HARGA</th>
        <th>JUMLAH</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    <?php $no = 1; ?>
    <?php foreach ($data['rows'] as $row) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['user_nama']; ?></td>
            <td><?php echo $row['produk_nama']; ?></td>
            <td><?php echo number_format($row['ker_harga'], 2, ',', '.'); ?></td>
            <td><?php echo $row['ker_jml']; ?></td>
            <td><a href="<?php echo URL; ?>/keranjang/edit/<?php echo $row['ker_id']; ?>" class="btn">Edit</a></td>
            <td><a href="<?php echo URL; ?>/keranjang/delete/<?php echo $row['ker_id']; ?>" class="btn" onclick="return confirm('Apakah Anda yakin ingin menghapus item ini dari keranjang?')">Delete</a></td>
        </tr>
    <?php } ?>
</table>
