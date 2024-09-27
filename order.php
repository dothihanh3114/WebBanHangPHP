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

    <!-- order section ends: phần bắt đầu phần  order -->

    <section class="order" id="order">
        <h3 class="sub-heading">Order now</h3>
        <h1 class="heading">Miễn phí và nhanh chóng</h1>
        <form action="">
            <div class="inputBox">
                <div class="input">
                    <span>Tên bạn</span>
                    <input type="text" placeholder="Nhập tên bạn">
                </div>
                <div class="input">
                    <span>Số điện thoại</span>
                    <input type="number" placeholder="Nhập số điện thoại">
                </div>
            </div>

            <div class="inputBox">
                <div class="input">
                    <span>order</span>
                    <input type="text" placeholder="Nhập tên thức ăn">
                </div>
                <div class="input">
                    <span>Email</span>
                    <input type="test" placeholder="Nhập email của bạn">
                </div>
            </div>

            <div class="inputBox">
                <div class="input">
                    <span>Địa chỉ</span>
                    <input type="text" placeholder="Nhập địa chỉ của bạn">
                </div>
                <div class="input">
                    <span>Ngày đặt</span>
                    <input type="datetime-local">
                </div>
            </div>

            <div class="inputBox">
                <div class="input">
                    <span>Địa chỉ</span>
                    <textarea name="" placeholder="Nhập địa chỉ của bạn"  id="" cols="30" rows="10"></textarea>
                </div>
                <div class="input">
                    <span>Lời nhắn</span>
                    <textarea name="" placeholder="Nhập lời nhắn của bạn"  id="" cols="30" rows="10"></textarea>
                </div>
            </div>

            <input type="submit" value="Order now" class="btn">
        </form>
    </section>

    <!-- order section ends: phần kết thúc phần  order -->
    <?php
        include('./footer.php');
    ?>
</body>
</html>