<h2>Order Detail</h2>

<a href="<?php echo URL; ?>/order_detail/input" class="btn">Input Order Detail</a>

<table>
      <tr>
            <th>NO</th>
            <th>ID ORDER</th>
            <th>ID PRODUK</th>
            <th>HARGA</th>
            <th>JUMLAH</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['detail_id_order']; ?></td>
                  <td><?php echo $row['detail_id_order']; ?></td>
                  <td><?php echo $row['detail_id_produk']; ?></td>
                  <td><?php echo $row['detail_harga']; ?></td>
                  <td><?php echo $row['detail_jml']; ?></td>
                  <td><a href="<?php echo URL; ?>order_detail/edit/<?php echo $row['detail_id_order']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>order_detail/delete/<?php echo $row['detail_id_order']; ?>" class="btn">Delete</a></td>
            </tr>
      <?php } ?>

</table>

