<?php 
session_start(); 
include "navbar.php"; 
?>

<h2 style="text-align:center; color:#5d4630;">Checkout 🧾</h2>

<?php if (empty($_SESSION['cart'])): ?>

    <p style="text-align:center;">Belanjaan kamu masih kosong 🤦‍♀️</p>
    <div style="text-align:center;">
        <a href="index.php" style="background:#d4a5b2; padding:10px 20px; border-radius:8px; color:white; text-decoration:none;">Belanja dulu</a>
    </div>

<?php else: ?>

<div style="width:500px; margin:20px auto; background:white; padding:20px; border-radius:15px;">

<?php 
$total = 0; 
foreach ($_SESSION['cart'] as $item): 
    $total += $item['price'] * $item['qty']; 
?>
    <div style="display:flex; gap:15px; margin-bottom:15px;">
        <img src="<?= $item['image'] ?>" width="80" height="80" style="border-radius:10px; object-fit:cover;">
        <div>
            <strong><?= $item['name'] ?></strong><br>
            <span>Rp <?= number_format($item['price']) ?> x <?= $item['qty'] ?></span>
        </div>
    </div>
<?php endforeach; ?>

<hr>
<h3>Total: Rp <?= number_format($total) ?></h3>

<button style="background:#ff7ba9; padding:12px; border:none; border-radius:10px; width:100%; color:white; font-size:18px; cursor:pointer;">
    Bayar Sekarang
</button>

</div>

<?php endif; ?>
