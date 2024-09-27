<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered" style="text-align: center;">
        <h3 style="text-align: center;  margin-bottom:30px; font-size: 35px; font-weight:bold;">Danh mục giá</h3>
        <tr>
            <td colspan="6"><a href="./index.php?admin=addgia"><button class="btn btn-primary" style="margin-left:860px;">Thêm mới</button></a></td>
        </tr>
        <tr>
            <th>Mã giá</th>
            <th>Mã sản phẩm</th>
            <th>Đơn giá nhập</th>
            <th>Đơn giá bán</th>
            <th>Ngày</th>
            <th>Chọn</th>
            
        </tr>
        <?php
            include('../conect/ketnoi.php');
            $sql = "SELECT * FROM gia ";
            $kq = mysqli_query($con, $sql);
            if (mysqli_num_rows($kq) > 0) {
                while ($row = mysqli_fetch_array($kq)) {
                    echo"<tr>";
                    echo "<td>".$row['idgia']."</td>";
                    echo "<td>".$row['idsp']."</td>";
                    echo "<td>".$row['dongianhap']."</td>";
                    echo "<td>".$row['dongiaban']."</td>";
                    echo "<td>".$row['ngayad']."</td>";
                    echo "<td>".$row['chon']."</td>";
                    echo"</tr>";
                }
            }
        ?>
    </table>
</body>
</html>

<!-- border="1px"  order by MaSP DESC -->