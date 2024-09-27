
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <form action="" method ="post" class="login-form" style="border: .1rem solid rgba(0,0,0,.2); width: 500px; height: 380px; margin:auto; text-align: center; box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1); border-radius: .5rem; background: #fff;;">
            <h3 style="font-size: 3.5rem; text-transform: uppercase; color: #192a56;margin-top: 1.5rem;">Login form</h3>
            <input type="text" placeholder="user name" name='user' class="box" style="width: 60%; margin: .7rem 0; background: #eee; border-radius: .5rem; padding: 1rem; font-size: 1.6rem; color: #192a56; text-transform: none;">
            <input type="password" placeholder="your password" name='pass' class="box" style="width: 60%; margin: .7rem 0; background: #eee; border-radius: .5rem; padding: 1rem; font-size: 1.6rem; color: #192a56; text-transform: none;">
            <p style="font-size: 1.4rem; padding: .5rem 0; ">Forget your password <a href="#">Click here</a></p>
            <p style="font-size: 1.4rem;">Don't have an account <a href="./index.php?dk">Create now</a></p>    
            <p style="font-size: 1.4rem;"><a href=""><button name="login" class="dangnhap" style="margin-top: 1rem; font-size: 1.7rem; color: #fff; background: #192a56; border-radius: .5rem; cursor: pointer; padding: .8rem 3rem;">Đăng nhập</button></a></p>
            <p style="font-size: 1.4rem;"><a href=""><button class="thoat" style="margin-top: 1rem; font-size: 1.7rem; color: #fff; background: #192a56; border-radius: .5rem; cursor: pointer; padding: .8rem 3rem;"><a href="./index.php">Thoát</a></button></a></p>
        </form>
    </body>
</html>



<?php
    include ("./conect/ketnoi.php");
    if(isset($_POST['login'])) {
        $username = $_POST['user'];
        $password = MD5($_POST['pass']);
        $sql_check = mysqli_query($con,"select * from khachhang where tendangnhap = '$username'");
        $dem = mysqli_num_rows($sql_check);
        if($dem == 0) {
            //echo "<p class='thongbao1'>Tài khoản không tồn tại</p>";
            echo "<script language='javascript'>
                            alert('Tài khoản này không tồn tại');
                   </script>";
        } else {
            $sql_check2 = "select * from khachhang where tendangnhap = '$username' and password = '$password'";
            $row = mysqli_query($con, $sql_check2);
            $dem2 = mysqli_num_rows($row);
            if($dem2 == 0)
                //echo "<p style='text-align:center'>Mật khẩu không chính xác</p>";
                echo "<script language='javascript'>
                                alert('Mật khẩu hoặc tài khoản không đúng');
                      </script>";
            else{
                while($rows = mysqli_fetch_array($row)){
                    $_SESSION['username'] = $username;
                    $_SESSION['phanquyen'] = $rows['quyentruycap'];
                    $_SESSION['idkh'] = $rows['idkh'];
                    if($rows['quyentruycap'] == 0){
                        echo "<script language='javascript'>
                                        alert('Đăng nhập quản trị thành công');
                                        window.open('./admin/home.php','_self', 1);
                                </script>";
                    } else{
                        header('location:../index.php');
                    } 
                }
            }
        }
    }
?>
