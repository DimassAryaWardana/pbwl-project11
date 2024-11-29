<h2>PRODUK</h2>

<a href="<?php echo URL; ?>/produk/input" class="btn">Input Produk</a>

<table>
    <tr>
        <th>NO</th>
        <th>KODE</th>
        <th>NAMA</th>
        <th>HARGA</th>
        <th>KETERANGAN</th>
        <th>STOCK</th>
        <th>PHOTO</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    <?php $no = 1; ?>
    <?php foreach ($data['rows'] as $row) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['produk_kode']; ?></td>
            <td><?php echo $row['produk_nama']; ?></td>
            <td><?php echo number_format($row['produk_hrg'], 2, ',', '.'); ?></td>
            <td><?php echo $row['produk_keterangan']; ?></td>
            <td><?php echo $row['produk_stock']; ?></td>
            <td>
                <?php if (!empty($row['produk_photo'])) { ?>
                    <img src="<?php echo URL; ?>/uploads/<?php echo $row['produk_photo']; ?>" alt="Foto Produk" width="100">
                <?php } else { ?>
                    <img src="<?php echo URL; ?>/assets/no-image.png" alt="No Image" width="100">
                <?php } ?>
            </td>
            <td><a href="<?php echo URL; ?>/produk/edit/<?php echo $row['produk_id']; ?>" class="btn">Edit</a></td>
            <td><a href="<?php echo URL; ?>/produk/delete/<?php echo $row['produk_id']; ?>" class="btn" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Delete</a></td>
        </tr>
    <?php } ?>
</table>
