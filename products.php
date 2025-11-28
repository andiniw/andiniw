<?php 
session_start();
include 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hijab Products</title>
    <style>
        body {
            font-family: Arial;
            background: #f6efe7;
            margin: 0;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 20px;
            padding: 25px;
        }

        .card {
            background: #fffaf4;
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.15);
            text-align: center;
            color: #5d4630;
        }

        .card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 10px;
        }

        .btn {
            background: #d8a97a;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 10px;
            color: white;
            cursor: pointer;
            margin-top: 10px;
            font-size: 15px;
        }

        .btn:hover {
            background: #c28b58;
        }

        .rating {
            color: #d8a97a;
            font-size: 18px;
            margin-top: 3px;
        }

        form {
            margin-top: 10px;
        }
    </style>
</head>

<body>

<div class="container">

    <!-- PRODUK 1 -->
    <div class="card">
        <img src="images/viscose.jpg">
        <h3>Hijab Viscose</h3>
        <p>Rp 25.000</p>
        <p class="rating">⭐ 4.8</p>

        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="name" value="Hijab viscose">
            <input type="hidden" name="price" value="25000">
            <input type="hidden" name="image" value="images/viscose.jpg">
            <button type="submit" class="btn">Tambah</button>

        </form>
    </div>

    <!-- PRODUK 2 -->
    <div class="card">
        <img src="images/pashmina kaos.jpg">
        <h3>PashminaKaos</h3>
        <p>Rp 35.000</p>
        <p class="rating">⭐ 4.9</p>

        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="name" value="Pashmina Kaos">
            <input type="hidden" name="price" value="35000">
            <input type="hidden" name="image" value="images/pashmina kaos.jpg">
            <button type="submit" class="btn">Tambah</button>

        </form>
    </div>

    <!-- PRODUK 3 -->
    <div class="card">
        <img src="images/voal.jpg">
        <h3>Pashmina Voal</h3>
        <p>Rp 28.000</p>
        <p class="rating">⭐ 4.7</p>

        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="name" value="Pashmina Voal">
            <input type="hidden" name="price" value="28000">
            <input type="hidden" name="image" value="images/voal.jpg">
            <button type="submit" class="btn">Tambah</button>

        </form>
    </div>

    <!-- PRODUK 4 -->
    <div class="card">
        <img src="images/motif.jpg">
        <h3>Hijab Segi Empat Motif</h3>
        <p>Rp 32.000</p>
        <p class="rating">⭐ 4.8</p>

        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="name" value="Hijab Segi Empat Motif">
            <input type="hidden" name="price" value="32000">
            <input type="hidden" name="image" value="images/motif.jpg">
            <button type="submit" class="btn">Tambah</button>

        </form>
    </div>

    <!-- PRODUK 5 -->
    <div class="card">
        <img src="images/sport.jpg">
        <h3>Hijab Sport</h3>
        <p>Rp 42.000</p>
        <p class="rating">⭐ 5.0</p>

        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="name" value="Hijab Sport">
            <input type="hidden" name="price" value="42000">
            <input type="hidden" name="image" value="images/sport.jpg">
           <button type="submit" class="btn">Tambah</button>

        </form>
    </div>

</div>

</body>
</html>
