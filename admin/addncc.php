<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data" action="">
        <div style="width: 700px; height: auto; align-items: center;" align="center">
            <table width="500"  align="center">
                <tr height="30" style="font-weight:bold">
                    <td colspan="4" align="center" style="font-size: 30px;">NHẬP MỚI NHÀ CUNG CẤP</td>
                </tr>
                <tr>
                    <td>Tên nhà cung cấp</td>
                    <td><input type="text" id="txt_ten" name="txt_ten" style="width:250px; margin-bottom:10px;  margin-top:30px;" placeholder="Nhập tên nhà cung cấp" class="form-control"/></td>
                </tr>
                <tr>
                    <td>Người đại diện</td>
                    <td><input type="text" id="txt_ndd" name="txt_ndd" style="width:250px;  margin-bottom:10px;" placeholder="Nhập người đại diện" class="form-control"/></td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><input type="text" id="txt_sdt" name="txt_sdt" style="width:250px ;  margin-bottom:10px;" placeholder="Nhập số điện thoại" class="form-control"/></td>
                </tr>
                <tr>
                    <td>Số tài khoản</td>
                    <td><input type="text" id="txt_stk" name="txt_stk" style="width:250px;  margin-bottom:10px;" placeholder="Nhập số tài khoản" class="form-control"/></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" id="txt_email" name="txt_email" style="width:250px;  margin-bottom:10px;" placeholder="Nhập email" class="form-control"/></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" id="txt_dc" name="txt_dc" style="width:250px;  margin-bottom:10px;" placeholder="Nhập địa chỉ" class="form-control"/></td>
                </tr>
                <tr>
                <td colspan="4" align="center"><input type="submit" name="btn_them" value="Thêm nhà cung cấp" style="background-color:#0e6253; border-radius: 10px; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px;"/></td>
                </tr>
                <?php ?>
            </table>
        </div>
    </form>
    <?php
        if(isset($_POST['btn_them'])){
            $ten = $_POST['txt_ten'];
            $ndd = $_POST['txt_ndd'];
            $sdt = $_POST['txt_sdt'];
            $stk = $_POST['txt_stk'];
            $email = $_POST['txt_email'];
            $dc = $_POST['txt_dc'];
            $sql="INSERT INTO nhacungcap(tenncc, nguoidaidien, sdtncc, stkncc, emailncc, diachincc) VALUES ('$ten', '$ndd', '$sdt', '$stk', '$email', '$dc')";
            if(mysqli_query($con, $sql)==true){
                echo "Thêm mới thành công";
            }else{
                echo "Thêm mới thất bại";
            }
        }        
    ?> 
</body>
</html>