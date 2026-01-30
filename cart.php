<?php
session_start();
include 'navbar.php';
?>

<h2 style="text-align:center;">Keranjang Anda 🛒</h2>

<?php if(empty($_SESSION['cart'])): ?>
    <p style="text-align:center;">Keranjang masih kosong 🌿</p>
    <div style="text-align:center;">
        <a href="products.php" style="padding:10px 20px; background:#d4a5b2; color:white; text-decoration:none; border-radius:5px;">Belanja dulu</a>
    </div>
<?php else: ?>
    <?php $total = 0; ?>
    <div style="width:500px; margin:20px auto;">
        <?php foreach($_SESSION['cart'] as $product_id => $item): ?>
            <?php $subtotal = $item['price'] * $item['qty']; ?>
            <?php $total += $subtotal; ?>
            <div style="display:flex; gap:15px; margin-bottom:15px; border-bottom:1px solid #ccc; padding-bottom:10px;">
                <img src="<?= $item['image']; ?>" width="80" height="80" style="object-fit:cover; border-radius:5px;">
                <div>
                    <strong><?= $item['name']; ?></strong><br>
                    Rp <?= number_format($item['price']); ?> x <?= $item['qty']; ?> = Rp <?= number_format($subtotal); ?>
                </div>
            </div>
        <?php endforeach; ?>
        <hr>
        <h3>Total: Rp <?= number_format($total); ?></h3>
        <div style="text-align:center; margin-top:10px;">
            <a href="checkout.php" style="padding:10px 20px; background:#ff7ba9; color:white; text-decoration:none; border-radius:5px;">Lanjutkan Checkout</a>
        </div>
    </div>
<?php endif; ?>
