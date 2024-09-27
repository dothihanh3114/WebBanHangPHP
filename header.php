<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <a href="index.php" class="logo"><i class="bi bi-shop-window"></i>Fast Food.</a>

        <nav class="navbar">
            <a href="./index.php?admin=home">home</a>
            <a href="./disher.php">dishes</a>
            <a href="./about.php">about</a>
            <a href="./review.php">review</a>
            <a href="./order.php">order</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
        </div>

        <form action="" class="search-form" method="post">
            <input type="search" placeholder="search here..."  id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <form action="" class="login-form">

            
            <!-- <input type="text" placeholder="user name" class="box">
            <input type="password" placeholder="your password" class="box">
            <p>Forget your password <a href="#">Click here</a></p>
            <p>Don't have an account <a href="#">Create now</a></p> -->
            
            <?php
                if(isset($_SESSION['idkh']) == null) {
                    echo "<h3>please login first!</h3>";
                    echo "<a href="."index.php?content=login"."> <button name=login>Đăng nhập</button></a>"; 
                }else{
                    echo "Chào mừng User <strong> ".$_SESSION['username']." </strong>";
                    echo "<a href="."index.php?content=logout"."> [<strong> Thoát </strong>]</a>"; 
                }
            ?>
            
        </form>

        <!-- <form action="" class="login-form">
            <h3>Login form</h3>
            <input type="text" placeholder="user name" class="box">
            <input type="password" placeholder="your password" class="box">
            <p>Forget your password <a href="#">Click here</a></p>
            <p>Don't have an account <a href="#">Create now</a></p>
            <button name="login" class="dangnhap" style="margintop: 10px">Đăng nhập</button>
            
        </form> -->

        
        


    </header>

</body>
</html>