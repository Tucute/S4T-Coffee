<?php 
    ob_start();
    include('admin/includes/header.php'); 
    include('./admin/config/dbcon.php');
?>

<div class="container">
    <h3>Đơn hàng chua giao</h3>
    <?php 
        $SQL="SELECT * FROM orders where Status='Chua giao'";
        $query2=mysqli_query($conn,$SQL);
        $row=mysqli_num_rows($query2);
        if($row >0){
    ?>
        <table class="table mt-5 table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">OrderID</th>
                <th scope="col">Detail</th>
                <th scope="col">Status</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
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
                        ?>
                        <td>
                        <p>Name:<?php echo $ROW2['Name']?></p>
                        <p>Phone number:<?php echo $ROW2['Phone']?></p>
                        <p>Address:<?php echo $ROW2['Address']?></p>
                        </td>
                    <td><?php echo $rowOrder['Status']?></td>
                    <td><?php echo $rowOrder['Date']?></td>
                    <td>
                        <form action="quanlyOrder.php?id=<?php echo $rowOrder['OrderID']?>" method="post">
                         <button type="submit" class="btn-outline-success btn" name="buttonGiaohang">Giao hàng</button>
                        </form>
                        <?php
                            if(isset($_POST['buttonGiaohang'])){
                            $idOrder=$_GET['id'];
                            $sql="UPDATE orders SET Status='Dang giao',Date=Now() where OrderID=".$idOrder;
                            $query=mysqli_query($conn,$sql);
                            
                            header("Location: quanlyOrder.php");
                            
                            }
                    
                        
                        ?>
                    </td>
                </tr>
            <?php
                }
            ?>
      
        </tbody>
    </table>
    <?php   
        }else{
            echo "<h5 style='color:red'>Không có đơn hàng nào chua giao</h5>";
        }
    ?>
       
    <h3>Đơn hàng đang giao</h3>
    <?php 
        $SQL="SELECT * FROM orders where Status='Dang giao'";
        $query2=mysqli_query($conn,$SQL);
        $row=mysqli_num_rows($query2);
        if($row >0){
    ?>
        <table class="table mt-5 table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">OrderID</th>
                <th scope="col">Detail</th>
                <th scope="col">Status</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
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
                        ?>
                        <td>
                        <p>Name:<?php echo $ROW2['Name']?></p>
                        <p>Phone number:<?php echo $ROW2['Phone']?></p>
                        <p>Address:<?php echo $ROW2['Address']?></p>
                        </td>
                    <td><?php echo $rowOrder['Status']?></td>
                    <td><?php echo $rowOrder['Date']?></td>
                    <td>
                        <form action="quanlyOrder.php?id=<?php echo $rowOrder['OrderID']?>" method="post">
                         <button type="submit" class="btn-outline-success btn" name="buttonDone">Giao xong</button>
                        </form>
                        <?php
                            if(isset($_POST['buttonDone'])){
                            $idOrder=$_GET['id'];
                            $sql="UPDATE orders SET Status='Da giao',Date=Now() where OrderID=".$idOrder;
                            $query=mysqli_query($conn,$sql);
                            ob_start();
                            header("Location: quanlyOrder.php");
                            
                            }
                    
                        
                        ?>
                    </td>
                </tr>
            <?php
                }
            ?>
      
        </tbody>
    </table>
    <?php   
        }else{
            echo "<h5 style='color:red'>Không có đơn hàng nào đang giao</h5>";
        }
    ?>
        

    <h3>Đơn hàng đã giao thành công</h3>
        <table class="table mt-5 table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">OrderID</th>
                <th scope="col">Detail</th>
                <th scope="col">Status</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $SQL="SELECT * FROM orders where Status='Da giao'";
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
                        ?>
                        <td>
                        <p>Name:<?php echo $ROW2['Name']?></p>
                        <p>Phone number:<?php echo $ROW2['Phone']?></p>
                        <p>Address:<?php echo $ROW2['Address']?></p>
                        </td>
                    <td><?php echo $rowOrder['Status']?></td>
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