<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>From nhập sản phẩm</title>
    </head>
    <body>
        <?php
            include('../conect/ketnoi.php');
        ?>
        <form method="post" enctype="multipart/form-data" action="./index.php?admin=insertsp">
            <div style="width: 700px; height: auto; align-items: center;" align="center">
                <table width="500"  align="center">
                    <tr height="30" style="font-weight:bold;">
                        <td colspan="4" align="center" style="font-size: 30px;">NHẬP MỚI SẢN PHẨM</td>
                    </tr>
                    <tr>
                        <td>Tên sản phẩm</td>
                        <td><input type="text" id="txt_tensp" name="txt_tensp" style="width:250px; margin-bottom:10px;  margin-top:30px;" placeholder="Nhập tên sản phẩm" class="form-control"/></td>
                    </tr>
                    <tr>
                        <td>Hãng sản xuất</td>
                        <td>
                            <select name="hangsx" style="width:250px; margin-bottom:10px;" class="form-control">
                                <option>Chọn hãng sản xuất</option>
                                <?php
                                    $sql = "select * from hangsx";
                                    $hangsx = mysqli_query($con, $sql);
                                    while($row = mysqli_fetch_array($hangsx)){
                                        echo "<option value=".$row['idhang'].">".$row['tenhang']."</option>";
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Loại sản phẩm</td>
                        <td>
                            <select name="loaisp" style="width:250px; margin-bottom:10px;"  class="form-control">
                                <option>Chọn loại sản phẩm</option>
                                <?php
                                    $sql = "select * from loaisp";
                                    $loaisp = mysqli_query($con, $sql);
                                    if(mysqli_num_rows($loaisp)>0){
                                        while($row = mysqli_fetch_array($loaisp)){
                                            echo "<option value=".$row['idloaisp'].">".$row['tenloaisp']."</option>";
                                        }
                                    }else{
                                        echo "Đang cập nhật dữ liệu";
                                    }

                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nhà cung cấp sản phẩm</td>
                        <td>
                            <select name="nhaccsp" style="width:250px; margin-bottom:10px;"  class="form-control">
                                <option>Chọn nhà cung cấp sản phẩm</option>
                                <?php
                                    $sql = "select * from nhacungcap";
                                    $nhaccsp = mysqli_query($con, $sql);
                                    if(mysqli_num_rows($nhaccsp)>0){
                                        while($row = mysqli_fetch_array($nhaccsp)){
                                            echo "<option value=".$row['idncc'].">".$row['tenncc']."</option>";
                                        }
                                    }else{
                                        echo "Đang cập nhật dữ liệu";
                                    }

                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Ảnh minh họa</td>
                        <td colspan="4"><input type="file" name="sp_hinh"  class="form-control" style="margin-bottom:10px;"/></td>
                    </tr>
                    <tr>
                        <td>Nhập mô tả sản phẩm</td>
                        <td><textarea name="txt_chitiet" cols="30" rows="4" placeholder="Nhập mô tả sản phẩm" class="form-control" style=" margin-bottom:10px;"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center" style=""><input type="submit" name="btn_them" value="Thêm SP" style="background-color:#0e6253; border-radius: 10px; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px;"/></td>
                    </tr>
                    <?php ?>
                </table>
            </div>
        </form>
    </body>
</html>

<!-- require('xulynhapsp.php'); -->





