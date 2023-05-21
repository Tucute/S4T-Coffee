<?php include('admin/includes/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Người Dùng</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>UserID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                
                                <th>Username</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('./functions/myfunction.php'); 
                            $users = UserAll("users");
                            if (mysqli_num_rows($users ) > 0) {
                                foreach ($users as $user) {
                                    ?>
                                    <tr>
                                        <td><?= $user['UserID'];?></td>
                                        <td><?= $user['Name'];?></td>
                                        <td><?= $user['Phone'];?></td>
                                        <td><?= $user['Address'];?></td>
                                       
                                        <td><?= $user['Username'];?></td>
                                        <td><?= $user['Password'];?></td>

                                        <td>
                                            <form action="delete-user.php" method="POST">
                                                <input type='hidden' name="UserID" value="<?= $user['UserID'];?>" >
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
