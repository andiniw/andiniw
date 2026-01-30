<?php
session_start();
include "navbar.php";
require_once "koneksi.php"; // wajib pakai require_once agar pasti ada koneksi

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

<h2 style="text-align:center; color:#5d4630;">Checkout 🧾</h2>

<?php if (empty($_SESSION['cart'])): ?>

    <p style="text-align:center;">Belanjaan kamu masih kosong 🤦‍♀️</p>
    <div style="text-align:center;">
        <a href="index.php" style="background:#d4a5b2; padding:10px 20px; border-radius:8px; color:white; text-decoration:none;">Belanja dulu</a>
    </div>

<?php else: ?>

<?php
// Proses checkout saat tombol ditekan
if(isset($_POST['checkout'])){
    $user_id = 1; // ganti sesuai session login user jika ada
    $cart = $_SESSION['cart'];
    $total = 0;

    // Hitung total
    foreach($cart as $item){
        $total += $item['price'] * $item['qty'];
    }

    // Masukkan ke tabel orders
    $sql_order = "INSERT INTO orders (user_id, total) VALUES ($user_id, $total)";
    if(mysqli_query($koneksi, $sql_order)){
        $order_id = mysqli_insert_id($koneksi); // ambil id order terbaru

        foreach($cart as $product_id => $item){
            $qty = $item['qty'];
            $price = $item['price'];

            // Masukkan ke order_detail
            mysqli_query($koneksi, "INSERT INTO order_detail (order_id, product_id, quantity, price) VALUES ($order_id, $product_id, $qty, $price)");

            // Update stok produk
            mysqli_query($koneksi, "UPDATE product SET stock = stock - $qty WHERE id = $product_id");
        }

        unset($_SESSION['cart']); // kosongkan cart

        echo "<p style='text-align:center; color:green; font-size:18px;'>Checkout berhasil! Total belanja: Rp " . number_format($total) . "</p>";
        echo "<div style='text-align:center; margin-top:10px;'><a href='index.php' style='background:#d4a5b2; padding:10px 20px; border-radius:8px; color:white; text-decoration:none;'>Kembali Belanja</a></div>";

    } else {
        echo "<p style='color:red;'>Error: " . mysqli_error($koneksi) . "</p>";
    }
}
?>

<div style="width:500px; margin:20px auto; background:white; padding:20px; border-radius:15px;">

<?php 
$total = 0;
foreach ($_SESSION['cart'] as $product_id => $item):
    $subtotal = $item['price'] * $item['qty'];
    $total += $subtotal;
?>
    <div style="display:flex; gap:15px; margin-bottom:15px;">
        <img src="<?= $item['image'] ?>" width="80" height="80" style="border-radius:10px; object-fit:cover;">
        <div>
            <strong><?= $item['name'] ?></strong><br>
            <span>Rp <?= number_format($item['price']) ?> x <?= $item['qty'] ?> = Rp <?= number_format($subtotal) ?></span>
        </div>
    </div>
<?php endforeach; ?>

<hr>
<h3>Total: Rp <?= number_format($total) ?></h3>

<!-- Form Checkout -->
<form method="post">
    <button type="submit" name="checkout" style="background:#ff7ba9; padding:12px; border:none; border-radius:10px; width:100%; color:white; font-size:18px; cursor:pointer;">
        Bayar Sekarang
    </button>
</form>

</div>

<?php endif; ?>
