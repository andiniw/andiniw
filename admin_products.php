<?php
include 'koneksi.php';
?>

<h2>Tambah Produk</h2>

<form action="admin_products.php" method="POST">
    <input type="text" name="name" placeholder="Nama Produk" required><br><br>
    <input type="number" name="price" placeholder="Harga" required><br><br>
    <input type="text" name="image" placeholder="Path Gambar (images/xxx.jpg)" required><br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>
