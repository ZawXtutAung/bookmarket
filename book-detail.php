<?php
/**
 * Created by PhpStorm.
 * User: ZawXtut
 * Date: 6/11/2020
 * Time: 2:55 AM
 */?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>
<body>
<h1>Book Detail</h1>
<?php
include("admin/confs/config.php");
$id = $_GET['id'];
$books = mysqli_query($conn, "SELECT * FROM books WHERE id = $id");
$row = mysqli_fetch_assoc($books);
?>
<div class="detail">
    <a href="index.php" class="back">&laquo; Go Back</a>
    <img src="admin/covers/<?php echo $row['cover'] ?>">
    <h2><?php echo $row['title'] ?></h2>
    <i>by <?php echo $row['author'] ?></i>,
    <b>$<?php echo $row['price'] ?></b>
    <p><?php echo $row['summary'] ?></p>
    <a href="add-to-cart.php?id=<?php echo $id ?>" class="add-to-cart">
        Add to Cart
    </a>
</div>
<div class="footer">
    &copy; <?php echo date("Y") ?>. All right reserved.
</div>
</body>
</html>
