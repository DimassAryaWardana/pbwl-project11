<h2>Edit Kategori</h2>
<form action="<?php echo URL; ?>/kategori/update" method="POST">
    <input type="hidden" name="kat_id" value="<?php echo $data['row']['kat_id']; ?>">
    <label for="kat_nama">Nama Kategori</label>
    <input type="text" name="kat_nama" value="<?php echo $data['row']['kat_nama']; ?>" required>
    <br>
    <label for="kat_keterangan">Keterangan</label>
    <textarea name="kat_keterangan" required><?php echo $data['row']['kat_keterangan']; ?></textarea>
    <br>
    <button type="submit" name="btn_update">Update</button>
</form>
