<?php
    include('./conect/ketnoi.php');
    if(isset($_GET['content'])){
        if($_GET['content']=='addkh'){
            $ten = $_POST['txt_ten'];
            $ndd = $_POST['txt_ndd'];
            $pass = $_POST['txt_pass'];
            $qtc = $_POST['txt_qtc'];
            $dc = $_POST['txt_dc'];
            $sdt = $_POST['txt_sdt'];
            $stk = $_POST['txt_stk'];
            $email = $_POST['txt_email'];
            $sql="INSERT INTO khachhang(tenkh, tendangnhap, password, quyentruycap, diachikh, sdtkh, mstkh, emailkh) VALUES ('$ten', '$ndd', '$pass', '$qtc', '$dc', '$sdt', '$stk', '$email')";
            if(mysqli_query($con, $sql)==true){
                echo "<script language ='javascript'>
                        alert('Bạn đã thêm mới thành công!');
                        window.open('index.php');
                    </script>";
            }else{
                echo "<script language ='javascript'>
                    alert('Thêm mới thất bại!');
                    window.open('index.php');
                </script>";
            }
        }    
    }        
?> 