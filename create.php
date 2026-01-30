<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $image = $_POST['image']; // nama file gambar di folder assets

    $sql = "INSERT INTO product (name, price, stock, image) VALUES ('$name', $price, $stock, '$image')";
    if(mysqli_query($koneksi, $sql)){
        echo "Produk berhasil ditambahkan!";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<form method="post">
    Nama Produk: <input type="text" name="name" required><br>
    Harga: <input type="number" name="price" required><br>
    Stok: <input type="number" name="stock" required><br>
    Gambar: <input type="text" name="image" required><br>
    <input type="submit" name="submit" value="Tambah Produk">
</form>
