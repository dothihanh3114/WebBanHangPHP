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
    <section class="home" id="home">
        <div class="swiper home-slide">
            <div class="swiper-wrapper wrapper">

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our special dish</span>
                        <h3>Spicy noodles</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                        <a href="#" class="btn">Order now</a>
                    </div>
                    <div class="image">
                        <img src="img/a.jpg" alt="" srcset="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our special dish</span>
                        <h3>Fried chicken</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                        <a href="#" class="btn">Order now</a>
                    </div>
                    <div class="image">
                        <img src="img/b.jpg" alt="" srcset="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our special dish</span>
                        <h3>Hot pizza</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
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


    <!-- home section ends: phần kết thúc phần nhà-->
    <?php
        include('./footer.php');
    ?>
    
</body>
</html>