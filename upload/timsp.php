<?php
include ("./conect/ketnoi.php");

if(isset($_POST['timkiem'])){
    $tim = $_POST['search'];
    $sql = "SELECT * FROM sanpham sp INNER JOIN gia g on sp.idsp=g.idsp WHERE tensp like '%".$tim."%'";
    $rows = mysqli_query($con, $sql);
    $tong = mysqli_num_rows($rows);

    if($tong <= 0){
        echo "Không tìm được sản phẩm nào";
    } else { ?>
        <h2>Từ khóa <font color="red"><b><?php echo $tim ?></b></font>: có <?php echo $tong ?> kết quả </h2>
        <div class="product-container">
            <?php while($row = mysqli_fetch_array($rows)){ ?>
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
                            <button class="btn">Add to cart</button>
                        </form>
                    </div>
                </div> 
            <?php } ?>
        </div>
    <?php }
}
?>

<style>
    .product-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    .product-box {
        border: 1px solid #ccc;
        border-radius: 10px;
        overflow: hidden;
        width: 250px;
        margin-bottom: 20px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .product-image img {
        width: 100%;
        height: auto;
    }
    .product-content {
        padding: 15px;
    }
    .product-link {
        text-decoration: none;
        color: #000;
    }
    .product-title {
        text-align: center;
        font-size: 1.9rem;
        font-weight: bold;
    }
    .product-stars {
        text-align: center;
        color: #f39c12;
    }
    .product-pricing {
        text-align: center;
        margin-top: 10px;
    }
    .product-original-price {
        text-decoration: line-through;
        color: #999;
        font-size: 1.2rem;
        margin-right: 10px;
    }
    .product-sale-price {
        color: #e74c3c;
        font-size: 1.7rem;
        font-weight: bold;
    }
    .add-to-cart-form {
        text-align: center;
        margin-top: 10px;
    }
    .product-quantity {
        width: 60px;
        text-align: center;
        margin-right: 10px;
        font-size: 1.2rem;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 5px;
    }
    .btn {
        background-color: #192a56;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1.5rem;
    }
</style>
