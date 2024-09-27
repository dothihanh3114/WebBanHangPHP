
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
        <?php
            session_start();
            ob_start();
        ?>

        <header class="header">
            <a href="./index.php" class="logo"><i class="bi bi-shop-window"></i>Fast Food.</a>

            <nav class="navbar">
                <a href="./index.php">home</a>
                <a href="./disher.php">dishes</a>
                <a href="./about.php">about</a>
                <a href="./review.php">review</a>
                <a href="./order.php">order</a>
            </nav>
            <?php
                if (isset($_SESSION["gio"]) && $_SESSION["gio"] != null) { 
                    $count = count($_SESSION["gio"]);
                } else {
                    $count = 0;
                }
            ?>

            <div class="icons">
                <div class="fas fa-bars" id="menu-btn"></div>
                <div class="fas fa-search" id="search-btn"></div>
                <a href="index.php?content=viewgio" class="center">
                    <div class="fas fa-shopping-cart" id="cart-btn">
                        <!-- <span></span> -->
                        <?php
                            if($count>0){
                            ?>(<span style="color: blue; font-weight: bold"><?php echo $count;?>)<br>
                            <?php
                            }else{
                                ?>(<span style="color: black; font-weight: bold"><?php echo $count;?>)<br>
                                <?php
                            }
                        ?>
                    </div>
                </a>  
                <div class="fas fa-user" id="login-btn"></div>
            </div>

            <form class="search-form" role="search" action="index.php?content=timkiem" method="post">
                <input type="search" placeholder="search here..."  id="search-box" name="search">
                <button name="timkiem" type="submit" style="background: #fff;"><label for="search-box" class="fas fa-search"></label></button>
            </form>

            <div class ="login-form">
                <?php
                    if(isset($_SESSION['idkh']) == null) { 
                        echo "<h3>please login first!</h3>";
                        echo "<a href='index.php?content=login'> <button name=login>Đăng nhập</button></a>"; 
                    }else{
                        echo "<h3>Chào mừng User <strong> ".$_SESSION['username']." </strong></h3>";
                        echo "<a href='index.php?content=logout'> <button> Thoát </button></a>"; 
                    }
                ?>
            </div>
        </header>

        <section>
            <h3 class="sub-heading">Ourrrr</h3>
            <h1 class="heading"></h1>
            <?php
                    if(isset($_GET['dk'])){
                        include('./admin/dangkikh.php');    
                    }
                
                    if(isset($_GET['content'])){
                        switch($_GET['content']){
                            case 'login':{
                                include('./admin/login.php');
                                break;
                            }
                            case 'logout':{
                                include('./admin/logout.php');
                                break;
                            }
                            case 'addkh':{
                                include('./admin/addkh.php');
                                break;
                            }
                            case 'add':{
                                include('./admin/giohang/addvaogio.php');
                                break;
                            }
                            case 'viewgio':{
                                include('./admin/giohang/viewgio.php');
                                break;
                            }
                            case 'thanhtoan':{
                                include('./admin/giohang/thongtin_thanhToan.php');
                                break;
                            }
                            case 'delete':{
                                include('./admin/giohang/deletegio.php');
                                break;
                            }
                            case 'update':{
                                include('./admin/giohang/updategio.php');
                                break;
                            }
                            case 'timkiem':{
                                include('./upload/timsp.php');
                                break;
                            }
                            case 'dathang':{
                                include('./admin/giohang/dathang.php');
                                break;
                            }
                        }
                    }
                
            ?>
            
            
        </section>


        <section class="home" id="home">
            <div class="swiper home-slide">
                <div class="swiper-wrapper wrapper">

                    <div class="swiper-slide slide">
                        <div class="content">
                            <span>Món ăn đặc biệt</span>
                            <h3>Hamburger</h3>
                            <p>Hamburger là một trong những món ăn nhanh phổ biến nhất trên thế giới, với nguồn gốc từ Mỹ và đã trở thành biểu tượng ẩm thực toàn cầu. Một chiếc hamburger truyền thống thường gồm một miếng thịt bò xay được nướng hoặc chiên, đặt giữa hai lát bánh mì tròn.</p>
                            <a href="#" class="btn">Order now</a>
                        </div>
                        <div class="image">
                            <img src="img/a.jpg" alt="" srcset="">
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <div class="content">
                            <span>Món ăn đặc biệt</span>
                            <h3>Gà chiên giòn</h3>
                            <p>Gà sau đó được chiên ngập dầu ở nhiệt độ cao cho đến khi có màu vàng óng và lớp vỏ ngoài giòn rụm. Món gà chiên giòn thường được phục vụ kèm với các loại sốt chấm phong phú như sốt tương ớt, sốt BBQ, sốt mật ong hoặc sốt phô mai, tạo nên hương vị đa dạng và hấp dẫn.</p>
                            <a href="#" class="btn">Order now</a>
                        </div>
                        <div class="image">
                            <img src="img/m.jpg" alt="" srcset="">
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <div class="content">
                            <span>Món ăn đặc biệt</span>
                            <h3>Pizza nóng</h3>
                            <p>Pizza là một món ăn nổi tiếng có nguồn gốc từ Ý và đã trở thành một hiện tượng ẩm thực toàn cầu. Được làm từ bột bánh mì mỏng và giòn, pizza thường được phủ lên trên các nguyên liệu như sốt cà chua, phô mai mozzarella và một loạt các loại topping khác nhau.</p>
                            <a href="#" class="btn">Order now</a>
                        </div>
                        <div class="image">
                            <img src="img/c.jpg" alt="" srcset="">
                        </div>
                    </div>


                </div>

                <div class="swiper-pagination"></div>

            </div>
        </section>

        <section class="menu" id="menu">

            <div class="row">
                <div class="col-md-9 col-12">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <?php
                        include('./upload/menu_ngang.php');
                    ?> 
                        <!-- <div class="container-fluid">
                            <a class="navbar-brand" href="./index.php">Break</a>
                            <a href="#">Hambuger</a>
                            <a href="#">Sanwish</a>
                            <a href="#">Hot dog</a>
                            <a href="#">Pizza</a>
                            <a href="#">Pizzammm</a>
                        </div> -->
                    </nav>
                </div>                        
            </div>

            <h3 class="sub-heading">MENU</h3>
            <h1 class="heading">Món ăn đặt biệt hôm nay</h1>
            <div class="box-container">
                <!-- <div class="danhmuc">
                    <ul>
                        <?php
                            // include('./upload/dmloai.php');
                        ?>
                    </ul> 
                </div> -->

                <?php
                    if(isset($_GET['action'])){
                        switch($_GET['action']){
                            case 'loai':{
                                include('./upload/laysptheoloai.php');
                                break;
                            }
                            case 'hangsx':{
                                include('./upload/laysptheohang.php');
                                break;
                            }
                            case 'chitiet':{
                                include('./upload/chitiet_sp.php');
                                break;
                            }
                            default:{
                                break;
                            }
                        }
                    }else{
                        include('./upload/layallsp.php');
                    }
                ?>
            </div>    
        </section>

        
        
        

        <section>
            <?php
                // include('../conect/ketnoi.php');
                
                    if(isset($_GET['content'])){
                        switch($_GET['content']){
                            // case 'add':{
                            //     include('./admin/giohang/addvaogio.php');
                            //     break;
                            // }
                            // case 'viewgio':{
                            //     include('./admin/giohang/viewgio.php');
                            //     break;
                            // }
                            // case 'thanhtoan':{
                            //     include('./admin/giohang/thongtin_thanhToan.php');
                            //     break;
                            // }
                            // case 'delete':{
                            //     include('./admin/giohang/deletegio.php');
                            //     break;
                            // }
                            // case 'update':{
                            //     include('./admin/giohang/updategio.php');
                            //     break;
                            // }
                            // case 'timkiem':{
                            //     include('./upload/timsp.php');
                            //     break;
                            // }
                            // case 'logout':{
                            //     include('./admin/logout.php');
                            //     break;
                            // }
                            // case 'dathang':{
                            //     include('./admin/giohang/dathang.php');
                            //     break;
                            // }
                            default:{
                                break;
                            }
                        }
                    }
                
            ?>
            
        </section>
        

        <!-- footer section ends: phần bắt đầu phần  footer -->

        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>Locations</h3>
                    <a href="#">India</a>
                    <a href="#">Japan</a>
                    <a href="#">Russia</a>
                    <a href="#">USA</a>
                    <a href="#">VietNam</a>
                </div>

                <div class="box">
                    <h3>Quick link</h3>
                    <a href="#">Home</a>
                    <a href="#">Disher</a>
                    <a href="#">About</a>
                    <a href="#">Menu</a>
                    <a href="#">Review</a>
                    <a href="#">Order</a>
                </div>

                <div class="box">
                    <h3>Contact info</h3>
                    <a href="#">+123-456-7890</a>
                    <a href="#">+111-222-3333</a>
                    <a href="#">john@gmail.com</a>
                    <a href="#">Linda@gmail.com</a>
                    <a href="#">Munbai. India - 4005712</a>
                </div>

                <div class="box">
                    <h3>Follow us</h3>
                    <a href="#">Facebook</a>
                    <a href="#">Instagram</a>
                    <a href="#">jTwitter</a>
                    <a href="#">Linkedin</a>
                </div>
            </div>
            <div class="credit"> CopyRight @ 2024 by <span>CNTT</span></div>
        </section>

        <!-- footer section ends: phần kết thúc phần  footer -->
        
        <!-- loader past: phần loader -->

        <!-- <div class="loader-container">
            <img src="img/hình-động.gif" alt="">
        </div> -->

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <script src="script.js"></script>

        <?php
            ob_end_flush();
        ?>
    </body>
</html>

