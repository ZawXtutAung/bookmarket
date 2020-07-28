<?php
/**
 * Created by PhpStorm.
 * User: ZawXtut
 * Date: 6/9/2020
 * Time: 3:59 PM
 */
include("confs/auth.php")
?>
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
<h1>Category List</h1>
<ul class="menu">
    <li><a href="book-list.php">Manage Books</a></li>
    <li><a href="cat-list.php">Manage Categories</a></li>
    <li><a href="orders.php">Manage Orders</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>

<?php
include("confs/config.php");
$result = mysqli_query($conn, "SELECT * FROM categories");
?>
<ul>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
        <li title="<?php echo $row['remark'] ?>">
            <?php echo $row['name'] ?>
        </li>
    <?php endwhile; ?>
</ul>
<a href="cat-new.php" class="new">New Category</a>

</body>
</html>
