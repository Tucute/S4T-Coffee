

<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-body">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th class="text-center">Order ID</th>
                        <th class="text-center">Item name</th>
                        <th class="text-center">Image</th>
						<th class="text-center">Date start</th>
						<th class="text-center">Date end</th>
						<th class="text-center">Status</th>
						
					</tr>
				</thead>
				<tbody>
					<?php 
                    error_reporting(0);
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $db= "web_coffee";
                    $conn = mysqli_connect($servername, $username, $password, $db);
                   
					$i = 1;
					$query = $conn->query("select  delivery.orderID,Customer.Customerid, Customer.name as 'Customername', 
                    Item.name as 'Itemname', Item.image, DateStart,DateEnd, status,payment.TotalPrice
                    FROM delivery, Item ,Customer , payment, orders
                    WHERE Item.ItemID = Orders.ItemID 
                    AND Customer.CustomerID = Orders.CustomerID 
                    AND Orders.OrderID = Delivery.OrderID
                    AND delivery.deliveryID= payment.deliveryId");
					while($row= $query->fetch_assoc()):
					?>
					<tr>
						
                        <td class="text-center"><?php echo   $row['orderID'] ?></td>
                        <td class="text-center"><?php echo $row['Itemname'] ?></td>
                        <td> <?php echo '<img src="../index/public/' . $row['image'] . '" style="max-width: 250px; height: auto; max-height: 200px;"/>'; ?></td>

						<td class=""><?php echo date( $row['DateStart']) ?></td>
                        <td class=""><?php echo date($row['DateEnd']) ?></td>
                        <td class=""><?php echo ($row['status']) ?></td>


						
						
		                    
					</tr>
					<?php endwhile; ?>
				</tbody>
				
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('table').dataTable()
		$('.view_order').click(function(){
			uni_modal("My Order "+$(this).attr('data-code'),"view_order.php?id="+$(this).attr('data-id'),"large")
		})
	})
</script>
<img src="../index/./public/./" alt="">