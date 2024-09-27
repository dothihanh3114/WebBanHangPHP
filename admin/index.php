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
    <!-- sidebar -->
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
            <a href="./loginfrom/index.php"><ion-icon name="log-out-outline"></ion-icon>Thoát</a>
        </div>
    </div>
    <!-- main -->
    <div class="main">
        <div class="main-navbar">
            <ion-icon class="menu-toggle" name="menu-outline"></ion-icon>
            <div class="search">
                <input type="text" placeholder="Bạn muốn ăn gì?">
                <button class="search-btn">Tìm kiếm</button>
            </div>
            <div class="profile">
                <!-- <a href="cart" href="#"><ion-icon name="cart-outline"></ion-icon></a>
                <a href="user" href="#"><ion-icon name="person-outline"></ion-icon></a> -->               
            </div>
        </div>

        <div class="main-highlight">
            <?php
                include('../conect/ketnoi.php');
                if(isset($_GET['admin'])){
                    switch($_GET['admin']){
                        case 'sanpham':{
                            include('./danhmucsp.php');
                            break;
                        }
                        case 'addsanpham':{
                            include('./addsanpham.php');
                            break;
                        }
                        case 'insertsp':{
                            include('./insertsp.php');
                            break;
                        }
                        case 'updatesp':{
                            include('./updatesp.php');
                            break;
                        }
                        case 'update':{
                            include('./insertsp.php');
                            break;
                        }
                        case 'delete':{
                            include('./insertsp.php');
                            break;
                        }
                        case 'donhang':{
                            include('./ql_donhang.php');
                            break;
                        }
                        case 'xulyhd':{
                            include('./xulydonhang.php');
                            break;
                        }
                        case 'chitiethoadon':{
                            include('./ql_ctdonhang.php');
                            break;
                        }
                        case 'thoat':{
                            include('./logout.php');
                            break;
                        }
                        case 'gia':{
                            include('./danhmucgia.php');
                            break;
                        }
                        case 'addgia':{
                            include('./addgia.php');
                            break;
                        }
                        case 'loai':{
                            include('./getLoai.php');
                            break;
                        }
                        case 'nhaploai':{
                            include('./frmNhapLoai.php');
                            break;
                        }
                        case 'nhaphang':{
                            include('./frmNhapHang.php');
                            break;
                        }
                        case 'ncc':{
                            include('./danhmucncc.php');
                            break;
                        }
                        case 'addncc':{
                            include('./addncc.php');
                            break;
                        }
                        default:{
                            break;
                        }
                    }
                }
            ?>
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