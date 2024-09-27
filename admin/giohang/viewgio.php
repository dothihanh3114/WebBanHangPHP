<meta charset="utf-8" />
<h2 style="text-align: center;font-size: 25px;">CHI TIẾT GIỎ HÀNG</h2>
<div class="table-responsive">
    <!-- <form methed="post"> -->
    <table class="table table-bordered" border="1px" style="bordercollapse:collapse; border-color: green;">
        <tr style="font-weight:bold; background-color: green; font-size: 15px; text-align: center;">
            <th width="25%">Tên sản phẩm</th>
            <th width="10%">Số lượng</th>
            <th width="12%">Giá</th>
            <th width="12%">Tổng tiền</th>
            <th width="18%">Action</th>
        </tr>
        <?php
            include ("./conect/ketnoi.php");
            $total = 0; $tongsp = 0;
            if(isset($_SESSION["gio"]) && $_SESSION["gio"] != null){
                $sql="SELECT * FROM sanpham sp INNER JOIN gia g on sp.idsp=g.idsp WHERE chon = 1 and sp.idsp IN (";
                foreach($_SESSION['gio'] as $id => $value) {
                    $sql.=$id.",";
                }
                $sql = substr($sql, 0, -1).") ORDER BY sp.idsp ASC";
                // echo $sql;
                $query = mysqli_query($con, $sql);
                if(mysqli_num_rows($query)>0){
                    while($row = mysqli_fetch_array($query)){
                        ?>
                        <form action="index.php?content=update&idsp=<?php echo $row["idsp"]; ?>" method="post">
                            <tr>
                                <td style="padding-left: 10px; font-size: 13px;">
                                    <a style="text-decoration: none;" href="index.php?action=chitiet&idsp=<?php echo $row['idsp']?>">
                                    <?php echo $row["tensp"];?></a>
                                </td>
                                <td style="text-align:center; font-size: 13px;">
                                    <input type="number" name="sl[<?php echo $row['idsp'] ?>]"value="<?php echo $_SESSION['gio'][$row['idsp']]['sl'] ?>" style="width: 40px; border-style: none;textalign: center;" onchange=(alert(this.value)) >
                                </td>
                                <td style="text-align:center; font-size: 13px;">
                                    <?php echo number_format($row["dongiaban"],0); ?>
                                </td>
                                <td style="text-align:center; font-size: 13px;">
                                    <?php echo number_format($_SESSION['gio'][$row['idsp']]['sl'] * $row ["dongiaban"]);?>
                                </td>
                                <td style="text-align:center; font-size: 13px;">
                                    <a href="index.php?content=delete&idsp=<?php echo $id; ?>"><button style="width:60px;">Xoá</button></a>
                                    <a href="index.php?content=update&idsp=<?php echo $id; ?>"><button type="submit" style="width:60px;">Cập nhật</button></a>
                                </td> 
                            </tr>
                        </form>
                        <?php
                        $total = $total + ($_SESSION['gio'][$row['idsp']]['sl'] * $row["dongiaban"]);
                        $tongsp = $tongsp + $_SESSION['gio'][$row['idsp']]['sl'];
                    } ?>
                    <tr>
                        <td align="right" style="font-weight:bold; padding-right:5px; bordercolor: green; font-size: 15px; text-align: center;">Tổng cộng</td>
                        <td align="right" style="font-weight:bold; text-align:center; font-size: 13px;"><?php echo number_format($tongsp); ?></td>
                        <td></td>
                        <td align="right" style="font-weight:bold; text-align:center; font-size: 13px;"><?php echo number_format($total); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="5" style="text-align:center">
                        <a href="index.php"><button style="width:100px; margin-top:5px; marginbottom:5px; color:red; font-size: 15px; text-align: center;">Mua hàng tiếp</button></a>
                        <a href="index.php?content=thanhtoan"><button style="width:100px; margintop:5px; margin-bottom:5px; font-size: 15px; text-align: center;">Thanh toán</button></a></td> 
                    </tr>
                <?php }else{
                    echo "Giỏ hàng không có sản phẩm nào!";
                }
            }
        ?>
    </table>
</div>

