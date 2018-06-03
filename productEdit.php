<?php require('header.php'); ?>  
        
        
    </div>    
    
        <div class="center">

<?php

if(!empty($_GET["id"])) //Kiểm tra xem trên link có id sản phẩm cần sửa không
{
    $con = new database();
    $sql = "SELECT * FROM mis_products WHERE id= ".$_GET["id"];
    $product = $con->select_query($sql);
    if($product)
    {

?>

<form method="post" action="productEdited.php" enctype="multipart/form-data"> <!-- Bổ sung khi có upload file -->
<table>
    <tr>
        <td>Tên sản phẩm</td>
        <td><input type="text" name="name" value="<?=$product['name']?>" /></td>
    </tr>
    <tr>
        <td>Loại sản phẩm</td>
        <td><select name="productTypeId"> 
                <option value="0">--Loại sản phẩm--</option>  
            <?php foreach($productTypes as $productType)
                 { ?>
                <option value="<?=$productType['id']?>" 
                    <?php  
                        //Kiểm tra xem sản phẩm thuộc productType nào thì gán thuộc tính selected vào type đó
                        if($product["productTypeId"] == $productType["id"])
                        {
                            echo " selected='selected' ";
                        }
                    ?>><?=$productType['name']?></option>            
            <?php } ?>
        
        </select></td>
    </tr>
    <tr>
        <td>Mô tả</td>
        <td><input type="text" name="description" value="<?=$product['description']?>" /></td>
    </tr>
    <tr>
        <td>Hình minh họa</td>
        <td><input type="file" name="image" /></td>
    </tr>
    <tr>
        <td>Giá cả</td>
        <td><input type="text" name="price" value="<?=$product['price']?>" /></td>
    </tr>
    <tr>
        <td>Số lượng</td>
        <td><input type="text" name="quantity" value="<?=$product['quantity']?>" /></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Sửa đổi mới" /></td>
    </tr>
    <input type="hidden" name="productId" value="<?=$_GET["id"]?>" />
</table>
    
</form>
<?php
    } //Đóng ngoặc cho if($product) 
}   // Đóng ngoặc cho if($_GET["id"])
else {
    echo "Không có sản phẩm nào";
}

?>

        </div>
         
    </div>
<?php require('footer.php'); ?>