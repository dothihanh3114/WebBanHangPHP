<!-- <!DOCTYPE html>
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
    
    about section ends: phần bắt đầu phần  món ăn

    <section class="about" id="about">
        <h3 class="sub-heading">About us</h3>
        <h1 class="heading">Why choose us? </h1>
        <div class="row">
            <div class="image">
                <img src="img/a7.png" alt="">
            </div>
            <div class="content">
                <h3>Best food in the country</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                <p>the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>Free delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>Easy payments</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>
                <a href="#" class="btn">Learn more</a>
            </div>
        </div>
    </section>

    about section ends: phần kết thúc phần  món ăn
    
</body>
</html> -->

<?php
    include('./conect/ketnoi.php');
    if(isset($_GET['action'])){
        $masp=$_GET['idsp'];
    
        $sql = "SELECT * FROM sanpham sp INNER JOIN gia g on sp.idsp=g.idsp WHERE chon=1 and sp.idsp=$masp";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <section class="about" id="about" >
                    <div class="row" style="margin-left: -240px;">
                        <div class="image">
                            <img src="./img/<?php echo $row['hddsp'] ?>" alt="">
                        </div>
                        <div class="content">
                            <h3><span class="span_ten"><?php echo $row['tensp'] ?></span></h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span style="text-decoration: line-through; font-size: 1.9rem; color: black;" ><?php echo number_format($row['dongianhap']); ?></span>
                            <span class="pice" style="text-align: center;"><?php echo number_format($row['dongiaban']); ?></span><br></a>                      
                            <form action="index.php?content=add&idsp=<?php echo $row["idsp"]?>" method="POST">
                                <input type="hidden" name="txtTensp" value="<?php echo $row['tensp'] ?>">
                                <input type="hidden" name="txtGiasp" value="<?php echo $row['dongiaban'] ?>">
                                <input type="hidden" name="ingHinh" value="<?php echo $row['hddsp'] ?>">
                                <input type="number" value="1" name="txt_sl" style=" width: 120px; font-size: 1.7rem; border: .1rem solid rgba(0,0,0,.2);text-align: center; padding: .8rem ; border-radius: .5rem; margin-top: 1rem;" >
                                <a href="#" ><button class="btn" style="color:#eee">Add to cart</button></a>
                            </form> 
                            <p><span class="span_mota"><?php echo $row['motasp'] ?></span></p>
                            <div class="icons-container">
                                <div class="icons">
                                    <i class="fas fa-shipping-fast"></i>
                                    <span>Free delivery</span>
                                </div>
                                <div class="icons">
                                    <i class="fas fa-dollar-sign"></i>
                                    <span>Easy payments</span>
                                </div>
                                <div class="icons">
                                    <i class="fas fa-headset"></i>
                                    <span>24/7 service</span>
                                </div>
                            </div>
                            <!-- <a href="#" class="btn" style="color:#eee">Learn more</a> -->
                        </div>
                    </div>
                </section> 
                <?php
            }
        } else {
            echo "Hiện đang được cập nhật dữ liệu";
        }     
    } 
?>