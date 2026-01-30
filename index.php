<?php
session_start();
include "koneksi.php";

$result = mysqli_query($koneksi, "SELECT * FROM product");
?>

<h2>Daftar Produk</h2>
<?php while($row = mysqli_fetch_assoc($result)): ?>
    <div>
        <img src="assets/<?= $row['image'] ?>" width="80" height="80">
        <strong><?= $row['name'] ?></strong> | Rp <?= number_format($row['price']) ?> | Stok: <?= $row['stock'] ?>
        <form method="post" action="cart.php">
            <input type="hidden" name="product_id" value="<?= $row['id'] ?>">
            <input type="number" name="qty" value="1" min="1" max="<?= $row['stock'] ?>">
            <button type="submit" name="add_to_cart">Tambah ke Cart</button>
        </form>
    </div>
<?php endwhile; ?>
