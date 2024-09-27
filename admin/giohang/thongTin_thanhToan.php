<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="thongtinkhachhang" align="center">
        <h2 style="text-align: center;font-size: 30px;font-weight:bold;">Thông tin thanh toán</h2>
        <!-- id="a" onsubmit="return kiemtra" -->
        <form action="index.php?content=dathang" method="post" >
            <table>
                <?php
                    include './conect/ketnoi.php';
                    if(isset($_SESSION['idkh'])==null){
                        echo "<h2>Quý khách phải đăng nhập trước khi đặt hàng.</h2>";
                    }else{
                        $sql = mysqli_query($con,"select * from khachhang where idkh='" .$_SESSION['idkh'] ."'");
                        $row = mysqli_fetch_array($sql);                        
                ?>
                <tr style="font-size: 18px;">
                    <td class="tieude">Tên khách hàng</td>
                    <td><input class="form-control" style="font-size: 18px; width:250px; margin-bottom:5px; margin-left:10px; margin-top:30px;" type="text" name="hoten" value="<?php echo $row['tenkh']?>"></td>
                </tr>
                <tr style="font-size: 18px;">
                    <td class="tieude">Địa chỉ giao hàng</td>
                    <td><input class="form-control" style="font-size: 18px; width:250px; margin-bottom:5px; margin-left:10px; margin-top:30px;" type="text" name="diachi" value="<?php echo $row['diachikh']?>"></td>
                </tr>
                <tr style="font-size: 18px;">
                    <td class="tieude">Điện thoại khách hàng</td>
                    <td><input class="form-control" style="font-size: 18px; width:250px; margin-bottom:5px; margin-left:10px; margin-top:30px;" type="text" name="dienthoai" value="<?php echo $row['sdtkh']?>"></td>
                </tr>
                <tr style="font-size: 18px;">
                    <td class="tieude">Email</td>
                    <td><input class="form-control" style="font-size: 18px; width:250px; margin-bottom:5px; margin-left:10px; margin-top:30px;" type="text" name="email" value="<?php echo $row['emailkh']?>"></td>
                </tr>
                <tr style="font-size: 18px;">
                    <td class="tieude">Phương thức: </td>
                    <td>
                        <select name="phuongthuc" id="" class="form-control" style="font-size: 18px; width:250px; margin-bottom:10px; margin-left:10px; margin-top:30px;">
                            <option value="0">Chọn phương thức</option>
                            <option value="1">Qua bưu điện</option>
                            <option value="2">Qua thẻ ATM</option>
                            <option value="3">Thanh toán khi nhận hàng</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="submit">
                        <center><input type="submit" value="Đặt hàng" width="120px" class="btn btn-primary"></center>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </form>            
    </div>
</body>
</html>