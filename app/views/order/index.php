<h2>Daftar Order</h2>

<a href="<?php echo URL; ?>/order/input" class="btn">Input Order</a>

<table>
    <tr>
        <th>NO</th>
        <th>KODE ORDER</th>
        <th>TANGGAL</th>
        <th>USER</th>
        <th>TOTAL</th>
        <th>KURIR</th>
        <th>ONGKIR</th>
        <th>DEADLINE</th>
        <th>STATUS</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    <?php $no = 1; ?>
    <?php foreach ($data['rows'] as $row) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['order_kode']; ?></td>
            <td><?php echo $row['order_tgl']; ?></td>
            <td><?php echo $row['order_id_user']; ?></td>
            <td><?php echo number_format($row['order_ttl'], 2, ',', '.'); ?></td>
            <td><?php echo $row['order_kurir']; ?></td>
            <td><?php echo number_format($row['order_ongkir'], 2, ',', '.'); ?></td>
            <td><?php echo $row['order_byr_deadline']; ?></td>
            <td><?php echo $row['order_batal'] == 1 ? 'Batal' : 'Aktif'; ?></td>
            <td><a href="<?php echo URL; ?>/order/edit/<?php echo $row['order_id']; ?>" class="btn">Edit</a></td>
            <td><a href="<?php echo URL; ?>/order/delete/<?php echo $row['order_id']; ?>" class="btn" onclick="return confirm('Apakah Anda yakin ingin menghapus order ini?')">Delete</a></td>
        </tr>
    <?php } ?>
</table>
