<?php
include '../uploads/connectdb.php';
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Sugoi</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Shop <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Chó cảnh </a></li>
          <li><a href="#">Mèo cảnh </a></li>
          
        </ul>
      </li>
      <li><a href="../uploads/cart.php">Giỏ hàng </a></li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right  ">
      <?php if(isset($_SESSION['id'] )) {?>
      <li>  <?php echo $_SESSION['username']  ?> </li>
      <li><a href="/web/uploads/logout.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>
    <?php } 
    else {?>
    <li><a href="/web/uploads/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="/web/uploads/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      
    <?php }?>
  </div>
</nav>
  


</body>
</html>