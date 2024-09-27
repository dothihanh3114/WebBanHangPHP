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

    <!-- review section start: phần bắt đầu phần  review -->

    <section class="review" id="review">
        <h3 class="sub-heading">Custome's review</h3>
        <h1 class="heading">Mọi người nhận xét gì? </h1>
        <div class="swiper-container review-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="img/e.jpg" alt="">
                        <div class="user-info">
                            <h3>John deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Pizza có lớp vỏ giòn hoàn hảo và sốt cà chua đậm đà, tạo nên một hương vị tuyệt vời. Phô mai tan chảy kết hợp với topping phong phú mang đến một trải nghiệm ẩm thực đầy thỏa mãn.Nguyên liệu tươi ngon, đặc biệt là phô mai mozzarella và rau củ, làm cho chiếc pizza trở nên hấp dẫn hơn bao giờ hết</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="img/g.jpg" alt="">
                        <div class="user-info">
                            <h3>John deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Burger gà nướng có hương vị thơm ngon với thịt gà mềm mịn và sốt BBQ ngọt ngào. Bánh mì tươi và rau xanh giòn tạo nên sự cân bằng hoàn hảo.Thịt gà được nướng vừa tới, không quá khô và giữ được độ ẩm, làm cho burger trở nên ngon miệng hơn..</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="img/h.jpg" alt="">
                        <div class="user-info">
                            <h3>John deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="img/f.jpg" alt="">
                        <div class="user-info">
                            <h3>John deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- review section ends: phần kết thúc phần  review -->
    <?php
        include('./footer.php');
    ?>
</body>
</html>