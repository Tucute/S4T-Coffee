<?php include('admin/includes/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Thêm Sản Phẩm</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ItemID">ItemID</label>
                                    <input type="text" name="ItemID" placeholder="Enter ItemID" class="form-control" id="ItemID">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input type="text" name="Name" placeholder="Enter Name" class="form-control" id="Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Price">Price</label>
                                    <input type="text" name="Price" placeholder="Enter Price" class="form-control" id="Price">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Describes">Describes</label>
                                    <textarea rows="3" type="text" name="Describes" placeholder="Enter Describes" class="form-control" id="Describes"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Image">Image</label>
                                    <input type="file" name="image" class="form-control-file" id="Image">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="TypeID">TypeID</label>
                                    <textarea rows="3" type="text" name="TypeID" placeholder="Enter TypeID" class="form-control" id="TypeID"></textarea>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" name="add_item_btn">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('admin/includes/footer.php'); ?>