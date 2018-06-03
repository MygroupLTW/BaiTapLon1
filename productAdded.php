<?php
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$productTypeId = $_POST['productTypeId'];
$imageURL = '';

if(!empty($_FILES['image']))
{
    $new_image_name = "image-".time();
    move_uploaded_file($_FILES["image"]["tmp_name"], "./image/".$new_image_name."jpg");                
    $imageURL = "/image/".$new_image_name."jpg";
}

require("database.php");

$con = new database();
$sql = "INSERT INTO mis_products(`name`, `description`, `image`, `price`, `quantity`, `productTypeId`)
         values(";
$sql .= "'".$name."',";
$sql .= "'".$description."',";
$sql .= "'".$imageURL."',";
$sql .= "'".$price."',";
$sql .= "'".$quantity."',";
$sql .= "'".$productTypeId."')";

$insert = $con->execute_query($sql);
if($insert) //Nếu insert thành công, Hiện ra thông báo và load lại trang productList
{
    echo " <meta charset='utf-8' /> <script>alert('Thêm mới thành công')</script>";
    echo "<script>window.location.href='productList.php'</script>";
    
}
else //Nếu insert thất bại, Hiện ra thông báo và load lại trang productList
{
    echo " <meta charset='utf-8' /> <script>alert('Thêm mới không thành công')</script>";
    echo "<script>window.location.href='productList.php'</script>";
}
?>