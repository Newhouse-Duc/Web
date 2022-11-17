<?php
include '../uploads/connectdb.php';
$sql = "select * from products";
$result = mysqli_query($connect, $sql);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quản lí sản phẩm </title>
</head>
<body>
<a href="add_product.php"> Thêm sản phẩm</a>

<div >

<table border="1">
<tr>
        <td>Mã</td>
        <td>Tên</td>
        <td>ảnh </td>
        <td>giá</td>
        <td>Mô tả</td>
    </tr>
    <tbody>
    <?php if(is_array($result) || is_object($result))
 foreach ($result as $each): ?>
		<tr>
        <td><?php echo $each['id'] ?></td>             
				<td><?php echo $each['name'] ?></td>
			
			<td><img src="../picture/<?php echo $each['img'] ?>" alt=""></td>
			<td><?php echo $each['price'] ?></td>
            
            <td> <?php echo $each['detail'] ?></td>

        </tr>
       
	
        
	<?php endforeach ?>
    </tbody>
</table>

</div>
</body>
</html>