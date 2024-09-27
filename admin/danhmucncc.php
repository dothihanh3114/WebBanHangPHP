<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered" style="text-align: center;">
        <h3 style="text-align: center;  margin-bottom:30px; font-size: 35px; font-weight:bold;">Danh mục nhà cung cấp</h3>
        <tr>
            <td colspan="7"><a href="./index.php?admin=addncc"><button class="btn btn-primary" style="margin-left:860px;">Thêm mới</button></a></td>
        </tr>
        <tr>
            <th>Mã ncc</th>
            <th>Tên nhà cung cấp</th>
            <th>Người đại diện</th>
            <th>Số điện thoại</th>
            <th>Số tài khoản</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            
        </tr>
        <?php
            include('../conect/ketnoi.php');
            $sql = "SELECT * FROM nhacungcap ";
            $kq = mysqli_query($con, $sql);
            if (mysqli_num_rows($kq) > 0) {
                while ($row = mysqli_fetch_array($kq)) {
                    echo"<tr>";
                    echo "<td>".$row['idncc']."</td>";
                    echo "<td>".$row['tenncc']."</td>";
                    echo "<td>".$row['nguoidaidien']."</td>";
                    echo "<td>".$row['sdtncc']."</td>";
                    echo "<td>".$row['stkncc']."</td>";
                    echo "<td>".$row['emailncc']."</td>";
                    echo "<td>".$row['diachincc']."</td>";
                    echo"</tr>";
                }
            }
        ?>
        <tr>
                   
        </tr>
    </table>
</body>
</html>

<!-- border="1px"  order by MaSP DESC -->