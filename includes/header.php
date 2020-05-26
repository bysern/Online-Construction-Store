<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B2B Store</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
        integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <header>
        <div class="logo">
            <a href="./index.php"><img src="./img/input-onlinejpgtools.png" alt="logo"></a>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a class="nav-link" href="./Products.php">Products</a></li>
                <li><a class="nav-link" href="./About.php">About us</a></li>
                <li><a class="nav-link" href="./Contact.php">Contact</a></li>
            </ul>

        </nav>

        <a href="./cart.php" class="nav-item active nav-link">
            <h5 class="px-5 cart">
                <i class="fas fa-shopping-cart"></i> Cart
                <?php
                if(isset($_SESSION['cart'])){
                    $count = count($_SESSION['cart']);
                    echo "<span id='cart_count' class='text-warning bg-light px-3'>$count</span>";
                } else{
                    echo "<span id='cart_count' class='text-warning bg-light px-3'> 0</span>";
                }
                ?>

            </h5>
        </a>

        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>

    </header>