<?php include('admin/includes/header.php'); ?>
<?php include('./functions/myfunction.php');  ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (isset($_GET['id']))
            {   
                $id = $_GET['id'];
                $itemS = getByID($id);
                if (mysqli_num_rows($itemS) > 0) {
                    $data = mysqli_fetch_array($itemS);
                    ?>
                        <div class="card">
                        <div class="card-header">
                            <h4>Cập Nhập Sản Phẩm</h4>
                        </div>
                        <div class="card-body">
                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ItemID">ItemID</label>
                                            <input type="text" name="ItemID" value="<?=$data ['ItemID']?>" placeholder="Enter ItemID" class="form-control" id="ItemID">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Name">Name</label>
                                            <input type="text" name="Name" value="<?=$data ['Name']?>" placeholder="Enter Name" class="form-control" id="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Price">Price</label>
                                            <input type="text" name="Price" value="<?=$data ['Price']?>" placeholder="Enter Price" class="form-control" id="Price">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Describes">Describes</label>
                                            <textarea rows="3" type="text" name="Describes" placeholder="Enter Describes" class="form-control" id="Describes" value="<?=$data ['Describes']?>"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Image">Image</label>
                                            <input type="file" name="image" class="form-control-file" id="Image">
                                            <label for="Image">Current Image</label>
                                            <input type="hidden" name="old_image"]  value="<?=$data ['image']?>" >
                                            <img src= "./admin/image/<? $data['image'] ?>"height="50px" width="50px" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="TypeID">TypeID</label>
                                            <textarea rows="3" type="text" name="TypeID" placeholder="Enter TypeID" class="form-control" id="TypeID" value="<?=$data ['TypeID']?>"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary" name="update_item_btn">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php
                }
                else
                {
                    echo "Item not found";

                }
            }
            else
            {
                echo "Id missing from url";
            }

                ?>
        </div>
    </div>
</div>


<?php include('admin/includes/footer.php'); ?>

