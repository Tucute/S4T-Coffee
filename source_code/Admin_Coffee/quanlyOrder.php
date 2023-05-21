<?php 
    ob_start();
    include('admin/includes/header.php'); 
    include('./admin/config/dbcon.php');
?>

<div class="container">
    <h3>Đơn hàng chưa thanh toán</h3>
    <?php 
        $SQL="SELECT * FROM orders where Status='Chưa thanh toán'";
        $query2=mysqli_query($conn,$SQL);
        $row=mysqli_num_rows($query2);
        if($row >0){
    ?>
        <table class="table mt-5 table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">OrderID</th>
                <th scope="col">Customer Information</th>
                <th scope="col">Product</th>
                <th scope="col">Total Price</th>
                <th scope="col">Payment type</th>
                <th scope="col">Status</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                while($rowOrder=mysqli_fetch_assoc($query2)){
                    $idOrder = $rowOrder['OrderID']
            ?>
                <tr>
                    <td><?php echo $rowOrder['OrderID']?></td>
                     <?php
                        $sql="SELECT * FROM orders where OrderID=".$rowOrder['OrderID'];
                        $KQ2=mysqli_query($conn,$sql);
                        $ROW2=mysqli_fetch_assoc($KQ2);
                        if($ROW2['UserID']!=NULL){
                        $sql="SELECT * FROM user where UserID=".$ROW2['UserID'];
                        $KQ2=mysqli_query($conn,$sql);
                        $ROW2=mysqli_fetch_assoc($KQ2);
                        }else{
                        $sql="SELECT * FROM customer where CustomerID=".$ROW2['CustomerID'];
                        $KQ2=mysqli_query($conn,$sql);
                        $ROW2=mysqli_fetch_assoc($KQ2);
                        }
                        if ($rowOrder['ItemID'] == null) {
                            $idUser=$rowOrder['UserID'];
                            $sql="SELECT*FROM item WHERE ItemID in (SELECT ItemID FROM cartorder where CartID in (SELECT CartID FROM orders WHERE UserID = $idUser AND OrderID = $idOrder) group by CartID)";
                            $KQ3=mysqli_query($conn,$sql);
            
                        }
                        else {
                            $sql="SELECT * FROM item where ItemID=".$rowOrder['ItemID'];
                            $KQ3=mysqli_query($conn,$sql);
                            ;
                        }
                        ?>
                    <td>
                        <p>Name:<?php echo $ROW2['Name']?></p>
                        <p>Phone number:<?php echo $ROW2['Phone']?></p>
                        <p>Address:<?php echo $ROW2['Address']?></p>
                    </td>
                    <td>
                        <?php
                        while ($ROW3=mysqli_fetch_assoc($KQ3)) {
                        ?>
                        <p>Name:<?php echo $ROW3['Name']?></p>
                        <p>Price:<?php echo $ROW3['Price']?></p>
                        <img src="../img_WebCoffee/<?php echo $ROW3['image'] ?>" width="50px" height="50px" alt="">
                        <?php
                        }
                        ?>
                    </td>
                    <td><?php echo $rowOrder['TotalPrice']?></td>
                    <td><?php echo $rowOrder['payType']?></td>

                    <td style="color:red"><?php echo $rowOrder['Status']?></td>
                    <td><?php echo $rowOrder['Date']?></td>
                    <!-- <td>
                        <form action="quanlyOrder.php?id=<?php echo $rowOrder['OrderID']?>" method="post">
                         <button type="submit" class="btn-outline-success btn" name="buttonGiaohang">Giao hàng</button>
                        </form>
                        <?php
                            // if(isset($_POST['buttonGiaohang'])){
                            // $idOrder=$_GET['id'];
                            // $sql="UPDATE orders SET Status='Dang giao',Date=Now() where OrderID=".$idOrder;
                            // $query=mysqli_query($conn,$sql);
                            
                            // header("Location: quanlyOrder.php");
                            
                            // }
                    
                        
                        ?>
                    </td> -->
                </tr>
            <?php
                }
            ?>
      
        </tbody>
    </table>
    <?php   
        }else{
            echo "<h5 style='color:red'>Không có đơn hàng nào chưa giao</h5>";
        }
    ?>
       
    
    <h3>Đơn hàng đã thanh toán</h3>
        <table class="table mt-5 table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">OrderID</th>
                <th scope="col">Customer Information</th>
                <th scope="col">Product</th>
                <th scope="col">Total Price</th>
                <th scope="col">Payment type</th>
                <th scope="col">Status</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $SQL="SELECT * FROM orders where Status='Đã thanh toán'";
            $query2=mysqli_query($conn,$SQL);
                while($rowOrder=mysqli_fetch_assoc($query2)){
            ?>
                <tr>
                    <td><?php echo $rowOrder['OrderID']?></td>
                     <?php
                        $sql="SELECT * FROM orders where OrderID=".$rowOrder['OrderID'];
                        $KQ2=mysqli_query($conn,$sql);
                        $ROW2=mysqli_fetch_assoc($KQ2);
                        if($ROW2['UserID']!=NULL){
                        $sql="SELECT * FROM user where UserID=".$ROW2['UserID'];
                        $KQ2=mysqli_query($conn,$sql);
                        $ROW2=mysqli_fetch_assoc($KQ2);
                        }else{
                        $sql="SELECT * FROM customer where CustomerID=".$ROW2['CustomerID'];
                        $KQ2=mysqli_query($conn,$sql);
                        $ROW2=mysqli_fetch_assoc($KQ2);
                        }
                        if ($rowOrder['ItemID'] == null) {
                            // $idUser=$rowOrder['UserID'];
                            // $sql="SELECT*FROM item WHERE ItemID in (SELECT ItemID FROM cart where UserID = $idUser)";
                            // $KQ3=mysqli_query($conn,$sql);
                            // $ROW3=mysqli_fetch_assoc($KQ3);
                            $idUser=$rowOrder['UserID'];
                            $sql="SELECT*FROM item WHERE ItemID in (SELECT ItemID FROM cartorder where CartID in (SELECT CartID FROM orders WHERE UserID = $idUser AND OrderID = $idOrder) group by CartID)";
                            $KQ3=mysqli_query($conn,$sql);
                        }
                        else {
                            $sql="SELECT * FROM item where ItemID=".$rowOrder['ItemID'];
                            $KQ3=mysqli_query($conn,$sql);
                            ;
                        }  
                        ?>
                    <td>
                        <p>Name:<?php echo $ROW2['Name']?></p>
                        <p>Phone number:<?php echo $ROW2['Phone']?></p>
                        <p>Address:<?php echo $ROW2['Address']?></p>
                    </td>
                    <td>
                    <?php
                        while ($ROW3=mysqli_fetch_assoc($KQ3)) {
                        ?>
                        <p>Name:<?php echo $ROW3['Name']?></p>
                        <p>Price:<?php echo $ROW3['Price']?></p>
                        <img src="../img_WebCoffee/<?php echo $ROW3['image'] ?>" width="50px" height="50px" alt="">
                        
                        <?php
                        }
                        ?>
                    </td>
                    <td><?php echo $rowOrder['TotalPrice']?></td>
                    <td><?php echo $rowOrder['payType']?></td>
                    <td style="color:green"><?php echo $rowOrder['Status']?></td>
                    <td><?php echo $rowOrder['Date']?></td>
                </tr>
            <?php
                }
            ?>
      
        </tbody>
    </table>




</div>




<?php 
ob_end_flush();
include('admin/includes/footer.php');

?>