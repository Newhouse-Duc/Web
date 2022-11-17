

<?php
require '../uploads/connectdb.php';
$category = mysqli_query($connect, "select * from category");
if(isset($_POST['name']))
{
    $name = $_POST['name'];
    $idcategory = $_POST['idcategory'];
    $img = $_FILES['img'];
    $price = $_POST['price'];
    $detail = $_POST['detail'];
    
    $folder= '../picture/';
    $file_extension = explode('.', $img['name']);  
    $file_name = $file_extension;
    $path_file= $folder.$file_name;  
    move_uploaded_file($img ["tmp_name"], $path_file);   
    
        
        $sql = "INSERT INTO products (name, img,  price, detail, idcategory) values ('$name', '$img', '$price', '$detail', '$idcategory')";
        $query = mysqli_query($connect, $sql);

        mysqli_close($connect);
        var_dump($query);
        if($query)
        {
            echo 'thêm thành công';
            
        }
        else
        {
            echo "lỗi rồi ";
        }
    
   
    
   
    

       
    
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
</head>
<body>
    <form action="" method="POST">
        Nhập thông tin 
        <br>
        Tên sản phẩm
        <br>
        <input type='text' name='name' /> 
        <br>
        Danh mục thú cưng
        <br>
        <select  id="input" name="idcategory">

        
        <option value=""> lựa chọn danh mục</option>
        <?php if(is_array($category) || is_object($category)) foreach ($category as $cate){ ?>      
		
			
			<option value="<?php echo $cate['id'] ?>"><?php echo $cate['type'] ?></option>
		
	<?php } ?>
        </select>
        
        <br>
        ảnh
        <br>
        <input type="file" name="img">;
        <br>
        Giá
        <br>
        <input type='text' name='price' /> 
        <br>
        mô tả 
        <br>
        <input type='text' name='detail' /> 
        <button type="submit"> Thêm vào</button>
    </form>

    <a href="ql_product.php"> quản lí sản phẩm</a>
</body>
</html>