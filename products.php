<?php
session_start();
include 'koneksi.php';
include 'navbar.php';

$query = mysqli_query($koneksi, "SELECT * FROM products");
?>

<div class="container">
<?php while ($row = mysqli_fetch_assoc($query)) { ?>
    <div class="card">
        <img src="<?= $row['image']; ?>">
        <h3><?= $row['name']; ?></h3>
        <p>Rp <?= number_format($row['price']); ?></p>

        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id']; ?>">
            <button class="btn">Tambah</button>
        </form>
    </div>
<?php } ?>
</div>
