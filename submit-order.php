<?php
/**
 * Created by PhpStorm.
 * User: ZawXtut
 * Date: 6/11/2020
 * Time: 2:55 AM
 */
session_start();
include("admin/confs/config.php");
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
mysqli_query($conn, "INSERT INTO orders
 (name, email, phone, address, status, created_date, modified_date)
 VALUES ('$name','$email','$phone','$address', 0, now(), now()) ");
$order_id = mysqli_insert_id($conn);
foreach($_SESSION['cart'] as $id => $qty) {
    mysqli_query($conn, "INSERT INTO order_items
 (order_id, book_id, qty) VALUES ($order_id,$id,$qty)
 ");
}
unset($_SESSION['cart']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Submitted</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Order Submitted</h1>

<div class="msg">
    Your order has been submitted. We'll deliver the items soon.
    <a href="index.php" class="done">Book Store Home</a>
</div>
<div class="footer">
    &copy; <?php echo date("Y") ?>. All right reserved.
</div>

</body>
</html>
