<?php include('admin/includes/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Sản Phẩm</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ItemID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Describes</th>
                                <th>Image</th>
                                <th>TypeID</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('./functions/myfunction.php'); 
                            $items = ItemAll("items");
                            if (mysqli_num_rows($items ) > 0) {
                                foreach ($items as $item) {
                                    ?>
                                    <tr>
                                        <td><?= $item['ItemID'];?></td>
                                        <td><?= $item['Name'];?></td>
                                        <td><?= $item['Price'];?></td>
                                        <td><?= substr($item['Describes'], 0, 50); ?>...</td>

                                        <td>
                                            <img src="./admin/image/<?php echo $item['image'] ?>" width="50px" height="50px" alt="">
                                        </td>
                                        <td><?= $item['TypeID'];?></td>
                                        <td>
                                            <a href="edit-item.php?id=<?= $item['ItemID'];?>" class="btn btn-primary">Edit</a>
                                            <form action="code.php" method="POST">
                                                <input type='hidden' name="ItemID" value="<?= $item['ItemID'];?>" >
                                                <button type="submit" class="btn btn-danger" name="delete_item_btn">Delete</button>
                                            </form>
                                        </td>


                                    </tr>
                                    <?php

                                }
                            } else {
                                echo "No recodrds found";
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php include('admin/includes/footer.php'); ?>
