<?php
    include('./conect/ketnoi.php');
    if(isset($_GET['action'])){
        $idhang=$_GET['idhang'];
        $sql = "SELECT * FROM sanpham sp INNER JOIN gia g on sp.idsp=g.idsp WHERE chon=1 and idhang=$idhang";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="product-box">
                    <div class="product-image">
                        <img src="./img/<?php echo $row['hddsp'] ?>" alt="<?php echo $row['tensp'] ?>">
                    </div> 
                    <div class="product-content">
                        <a href="index.php?action=chitiet&idsp=<?php echo $row['idsp']?>" class="product-link">
                            <h3 class="product-title"><?php echo $row['tensp'] ?></h3>
                            <div class="product-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="product-pricing">
                                <span class="product-original-price"><?php echo number_format($row['dongianhap']); ?></span>
                                <span class="product-sale-price"><?php echo number_format($row['dongiaban']); ?></span>
                            </div>
                        </a>
                        <form action="index.php?content=add&idsp=<?php echo $row['idsp']?>" method="POST" class="add-to-cart-form">
                            <input type="hidden" name="txtTensp" value="<?php echo $row['tensp'] ?>">
                            <input type="hidden" name="txtGiasp" value="<?php echo $row['dongiaban'] ?>">
                            <input type="hidden" name="ingHinh" value="<?php echo $row['hddsp'] ?>">
                            <input type="number" value="1" name="txt_sl" class="product-quantity">
                            <button class="btn_sp">Add to cart</button>
                        </form>
                    </div>
                </div> 
                <?php
            }
        } else {
            echo "Hiện đang được cập nhật dữ liệu";
        }
    }
?>