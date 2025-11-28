<?php 
session_start(); 
include "navbar.php"; 
?>

<h2 style="text-align:center; color:#5d4630;">Keranjang Anda 🛍️</h2>

<?php if (empty($_SESSION['cart'])): ?>

    <p style="text-align:center;">Keranjang masih kosong 🌿</p>
    <div style="text-align:center;">
        <a href="products.php" style="background:#d4a5b2; padding:10px 20px; border-radius:8px; color:white; text-decoration:none;">Belanja dulu</a>
    </div>

<?php else: ?>

<?php foreach ($_SESSION['cart'] as $item): ?>
    <div style="background:white; width:350px; margin:15px auto; padding:15px; display:flex; gap:15px; border-radius:15px;">
        <img src="<?= $item['image'] ?>" width="100" height="100" style="object-fit:cover; border-radius:10px;">
        <div>
            <h4><?= $item['name'] ?></h4>
            <p>Harga: Rp <?= number_format($item['price']) ?></p>
            <p><b>Jumlah: <?= $item['qty'] ?> pcs</b></p>
        </div>
    </div>
<?php endforeach; ?>

<div style="text-align:center; margin-top:20px;">
    <a href="checkout.php" style="background:#ff9fb8; padding:12px 20px; border-radius:10px; color:white; text-decoration:none; font-size:18px;">
        Lanjutkan Checkout
    </a>
</div>

<?php endif; ?>
