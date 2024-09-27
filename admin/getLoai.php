<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>Document</title>
</head>
<body>

    <table boder="1px" class="table table-bordered" style="text-align: center;">
        <h3 style="text-align: center;  margin-bottom:30px; font-size: 35px; font-weight:bold;">Danh mục loại</h3>
        <tr>
            <td colspan="5"><a href="./index.php?admin=nhaploai" class="btn btn-primary" style=" margin-left:860px;">Thêm loại</a></td>
        </tr>
        <tr style="background: green;">
            <th style="width: 50px;">STT</th>
            <th style="width: 80px;">Mã loại</th>
            <th style="width: 150px;">Tên loại</th>
        </tr>
        
        <?php
            include ("../conect/ketnoi.php");
            $sql= "SELECT * FROM loaisp";
            $result=mysqli_query($con,$sql);//thực hiện lệnh truy vấn
            if(mysqli_num_rows($result)>0){
                $i=1;
                while($row=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $row['idloaisp'];?></td>
                        <td><?php echo $row['tenloaisp'];?></td>
                    </tr>
                    <?php
                    $i++;
                }
            }else{
                    echo "Hiện đang được cập nhật dữ liệu";
            }
        ?>
        
    </table>

    <div style=" margin:60px;">
        <h3>---------------------------------------------- ^.^ --------------------------------------------</h3>
    </div>

    <table boder="1px" class="table table-bordered" style="text-align: center;">
        <h3 style="text-align: center;  margin-bottom:30px; font-size: 35px; font-weight:bold;">Danh mục hãng</h3>
        <tr>
            <td colspan="5"><a href="./index.php?admin=nhaphang" class="btn btn-primary" style=" margin-left:860px;">Thêm hãng</a></td>
        </tr>
        <tr style="background: green;">
            <th style="width: 50px;">STT</th>
            <th style="width: 80px;">Mã hãng</th>
            <th style="width: 150px;">Tên hãng</th>
        </tr>
        
        <?php
            include ("../conect/ketnoi.php");
            $sql= "SELECT * FROM hangsx";
            $result=mysqli_query($con,$sql);//thực hiện lệnh truy vấn
            if(mysqli_num_rows($result)>0){
                $i=1;
                while($row=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $row['idhang'];?></td>
                        <td><?php echo $row['tenhang'];?></td>
                    </tr>
                    <?php
                    $i++;
                }
            }else{
                    echo "Hiện đang được cập nhật dữ liệu";
            }
        ?>
        
    </table>
</body>
</html>

