<?php
session_start();
include('./admin/config/dbcon.php');
include('./functions/myfunction.php'); 

if(isset($_POST['add_item_btn']))
{
    $ItemID = $_POST['ItemID'];
    $Name = $_POST['Name'];
    $Price = $_POST['Price'];
    $Describes = $_POST['Describes'];
    $TypeID = $_POST['TypeID'];
    $image = $_FILES['image']['name'];

    $path = "./admin/image";
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_ext;

    $cate_query = "INSERT INTO item (ItemID,Name,Price,Describes,Image,TypeID
    VALUES ('" . $ItemID . "','" . $Name . "','" . $Price . "','" . $Describes . "','" . $image . "','" . $TypeID . "')";

    $cate_query_run = mysqli_query($conn, $cate_query);
    if ($cate_query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);

        redirect("add-item.php", "Item Added Successfully");

    }
    else
    {
        redirect("add-item.php", "Something Went Wrong");
    }
}
else if (isset($_POST['update_item_btn']))
{
    $ItemID = $_POST['ItemID'];
    $Name = $_POST['Name'];
    $Price = $_POST['Price'];
    $Describes = $_POST['Describes'];
    $TypeID = $_POST['TypeID'];
    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];
    if ($new_image !="")
    {

        // $update_filename = $new_image;
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time().'.'. $image_ext;
    }
    else
    {
        $update_filename = $old_image;
    }
     $path = "./admin/image";
    $update_query = "UPDATE item SET ItemID='$ItemID', Name='$Name',Price='$Price',Describes='$Describes', Image='$update_filename' ,TypeID='$TypeID'";
    $update_query_run = mysqli_query($conn, $update_query);
    if ($update_query_run){
        if ($_FILES['image']['name'] !=""){
            move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$new_image );
            if(file_exists(" ./admin/image/".$old_image)){
                unlink(" ./admin/image/".$old_image);
            }
        }
        redirect('edit-item.php', "Item Update Successfully");
    }
    else{
        redirect('edit-item.php', "Something Went Wrong");
    }
}
else if (isset($_POST['delete_item_btn']))
{
    $ItemID = mysqli_real_escape_string($conn, $_POST['ItemID']);

    $ItemID_query = "SELECT * FROM item WHERE id=$$ItemID";
    $ItemID_query_run = mysqli_query($conn, $ItemID_query);
    $ItemID_data = mysqli_fetch_array($ItemID_query_run);
    $image = $ItemID_data['image'];

    $delete_query = "DELETE FROM item WHERE id='$ItemID'";
    $delete_query_run = mysqli_query($conn, $delete_query);

    if ($delete_query_run){
        if(file_exists(" ./admin/image/".$old_image)){
                unlink(" ./admin/image/".$old_image);
            }
        redirect('item.php', "Item deleted Successfully");
        

    } 
    else 
    {
        redirect('item.php', "Something Went Wrong");
    }
}

?>
