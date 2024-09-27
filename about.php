<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <?php
        include('./header.php');
    ?>
    <!-- about section ends: phần bắt đầu phần  món ăn -->

    <section class="about" id="about">
        <h3 class="sub-heading">About us</h3>
        <h1 class="heading">Tại sao lại chọn chúng tôi? </h1>
        <div class="row">
            <div class="image">
                <img src="img/n.jpg" alt="">
            </div>
            <div class="content">
                <h3>Hamburger</h3>
                <p>Hamburger là một trong những món ăn nhanh phổ biến nhất trên thế giới, với nguồn gốc từ Mỹ và đã trở thành biểu tượng ẩm thực toàn cầu. Một chiếc hamburger truyền thống thường gồm một miếng thịt bò xay được nướng hoặc chiên, đặt giữa hai lát bánh mì tròn. Bánh mì thường được nướng nhẹ để tạo độ giòn bên ngoài nhưng vẫn giữ được độ mềm mịn bên trong.</p>
                <p>Hamburger có thể được tùy biến với nhiều loại nhân và gia vị khác nhau để tạo nên hương vị đa dạng. Các thành phần phổ biến trong một chiếc hamburger bao gồm phô mai, rau diếp, cà chua, hành tây, dưa chua và các loại sốt như sốt cà chua, mayonnaise hoặc mù tạt. Phô mai thường được thêm vào ngay sau khi thịt chín để tạo nên lớp phô mai tan chảy hấp dẫn, gọi là cheeseburger.</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>Vận chuyển miễn phí</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>Thanh toán dễ dàng</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>Phục vụ 24/7</span>
                    </div>
                </div>
                <a href="#" class="btn">Learn more</a>
            </div>
        </div>
    </section>

    <!-- about section ends: phần kết thúc phần  món ăn -->
    <?php
        include('./footer.php');
    ?>
</body>
</html>