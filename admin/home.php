<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="sidebar">
        <h1 class="logo">FASTFOOD</h1>
        <div class="sidebar-menus">
            <a href="./home.php"><ion-icon name="storefront-outline"></ion-icon>Trang chủ</a>
            <a href="./index.php?admin=sanpham"><ion-icon name="wallet-outline"></ion-icon>DM sản phẩm</a>
            <a href="./index.php?admin=donhang"><ion-icon name="receipt-outline"></ion-icon>Quản lí đơn hàng</a>
            <a href="./index.php?admin=loai"><ion-icon name="notifications-outline"></ion-icon>DM loại & hãng</a>
            <a href="./index.php?admin=ncc"><ion-icon name="chatbubbles-outline"></ion-icon>DM nhà cung cấp</a>
            <a href="./index.php?admin=gia"><ion-icon name="cash-outline"></ion-icon>Đơn giá</a>
        </div>
        <div class="sidebar-logout">
            <a href="./index.php?admin=thoat"><ion-icon name="log-out-outline"></ion-icon>Thoát</a>
        </div>
    </div>
    <!-- main -->
    <div class="main">
        <div class="main-navbar">
            <ion-icon class="menu-toggle" name="menu-outline"></ion-icon>
            <div class="search">
                <input type="text" placeholder="Bạn muốn ăn gì??">
                <button class="search-btn">Tìm kiếm</button>
            </div>
            <div class="profile">
                <!-- <a href="cart" href="#"><ion-icon name="cart-outline"></ion-icon></a>
                <a href="user" href="#"><ion-icon name="person-outline"></ion-icon></a> -->               
            </div>
        </div>
        <div class="main-highlight">
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>30</h1>
                        <span>Đặt hàng</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>10</h1>
                        <span>Khách hàng</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>10</h1>
                        <span>Sản phẩm</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>5</h1>
                        <span>Quản trị</span>
                    </div>
                    <div>
                        <span class="las la-user"></span>
                    </div>
                </div>
            </div>
            <div class="chart-grid">
                <div class="chart-follow">
                    <div class="chart-head">
                        <h3>Theo dõi</h3>
                        <span class="las la-cog"></span>
                    </div>
                    <div id="myfirstchart" style="height: 250px;"></div>
                </div>
                <div class="chart-sales">
                    <div class="chart-head">
                        <h3>Sales</h3>
                        <span class="las ellipsis-h"></span>
                    </div>
                    <div id="donut-example" style="height: 250px;"></div>
                </div>
            </div>
        </div>        
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="main.js"></script>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>