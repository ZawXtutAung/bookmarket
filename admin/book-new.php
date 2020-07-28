<?php
/**
 * Created by PhpStorm.
 * User: ZawXtut
 * Date: 6/10/2020
 * Time: 9:24 PM
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>BookNew</title>
    <style>
        form label {
            display: block;
            margin-top: 8px;
        }

    </style>
</head>
<body>
<h1>BookNew</h1>
<ul class="menu">
    <li><a href="book-list.php">Manage Books</a></li>
    <li><a href="cat-list.php">Manage Categories</a></li>
    <li><a href="orders.php">Manage Orders</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>

<form action="book-add.php"method="post"enctype="multipart/form-data">
    <label for="title">Book Title</label>
    <input type="text" name="title" id="title">
    <label for="author">Author</label>
    <input type="text" name="author" id="author">
    <label for="summary">Summary</label>
    <textarea name="summary" id="summary"></textarea>
    <label for="price">Price</label>
    <input type="text" name="price" id="price">
    <label for="categories">Category</label>
    <select name="category_id" id="categories">
        <option value="0">-- Choose --</option>
        <?php
        include("confs/config.php");
        $result = mysqli_query($conn, "SELECT id, name FROM categories");
        while($row = mysqli_fetch_assoc($result)):
            ?>
            <option value="<?php echo $row['id'] ?>">
                <?php echo $row['name'] ?>
            </option>
        <?php endwhile; ?>
    </select>
    <label for="cover">Cover</label>
    <input type="file" name="cover" id="cover">
    <br><br>
    <input type="submit" value="Add Book">
    <a href="book-list.php" class="back">Back</a>
</form>
</body>
</html>
