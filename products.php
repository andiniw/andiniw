<?php include 'navbar.php'; ?>
<?php session_start(); ?>

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
        <img src="img/kerudung1.jpg">
        <h3>Hijab Segi Empat Motif</h3>
        <p>Rp 25.000</p>
        <p class="rating">⭐ 4.8</p>

        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="name" value="Hijab Segi Empat Motif">
            <input type="hidden" name="price" value="25000">
            <input type="hidden" name="image" value="img/kerudung1.jpg">
            <button class="btn">Tambah</button>
        </form>
    </div>

    <!-- PRODUK 2 -->
    <div class="card">
        <img src="img/kerudung2.jpg">
        <h3>Pashmina Ceruty Premium</h3>
        <p>Rp 35.000</p>
        <p class="rating">⭐ 4.9</p>

        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="name" value="Pashmina Ceruty Premium">
            <input type="hidden" name="price" value="35000">
            <input type="hidden" name="image" value="img/kerudung2.jpg">
            <button class="btn">Tambah</button>
        </form>
    </div>

    <!-- PRODUK 3 -->
    <div class="card">
        <img src="img/kerudung3.jpg">
        <h3>Pashmina Plisket</h3>
        <p>Rp 28.000</p>
        <p class="rating">⭐ 4.7</p>

        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="name" value="Pashmina Plisket">
            <input type="hidden" name="price" value="28000">
            <input type="hidden" name="image" value="img/kerudung3.jpg">
            <button class="btn">Tambah</button>
        </form>
    </div>

    <!-- PRODUK 4 -->
    <div class="card">
        <img src="img/kerudung4.jpg">
        <h3>Hijab Instan Bergo</h3>
        <p>Rp 32.000</p>
        <p class="rating">⭐ 4.8</p>

        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="name" value="Hijab Instan Bergo">
            <input type="hidden" name="price" value="32000">
            <input type="hidden" name="image" value="img/kerudung4.jpg">
            <button class="btn">Tambah</button>
        </form>
    </div>

    <!-- PRODUK 5 -->
    <div class="card">
        <img src="img/kerudung5.jpg">
        <h3>Pashmina Diamond Italiano</h3>
        <p>Rp 42.000</p>
        <p class="rating">⭐ 5.0</p>

        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="name" value="Pashmina Diamond Italiano">
            <input type="hidden" name="price" value="42000">
            <input type="hidden" name="image" value="img/kerudung5.jpg">
            <button class="btn">Tambah</button>
        </form>
    </div>

</div>

</body>
</html>
