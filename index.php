<?php
 session_start();
 include("admin/confs/config.php");
 $cart = 0;
 if(isset($_SESSION['cart'])) {
 foreach($_SESSION['cart'] as $qty) {
 $cart += $qty;
 }
 }
 if(isset($_GET['cat'])) {
 $cat_id = $_GET['cat'];
 $books = mysqli_query($conn, "SELECT * FROM books WHERE category_id =
$cat_id");
 } else {
 $books = mysqli_query($conn, "SELECT * FROM books");
 }
 $cats = mysqli_query($conn, "SELECT * FROM categories");
?>


<!doctype html>
<html   lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Store</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body >
<img src="images/search.png" name="search" class="see">
<input type="text" placeholder="Search.." name="search">
<h1>Book Store</h1>
<div class="info">
    <a href="view-cart.php">
        (<?php echo $cart ?>) books in your cart
    </a>
</div>
<div  class="sidebar">
    <ul class="cats">
        <li>
            <b><a href="index.php">All Categories</a></b>
        </li>
        <?php while($row = mysqli_fetch_assoc($cats)): ?>
            <li>
                <a href="index.php?cat=<?php echo $row['id'] ?>">
                    <?php echo $row['name'] ?>
                </a>
            </li>
        <?php endwhile; ?>
    </ul>
</div>
<div class="main">
    <ul class="books">
        <?php while($row = mysqli_fetch_assoc($books)): ?>
            <li>
                <img src="admin/covers/<?php echo $row['cover'] ?>" height="150">
                <b>
                    <a href="book-detail.php?id=<?php echo $row['id'] ?>">
                        <?php echo $row['title'] ?>
                    </a>
                </b>
                <i>$<?php echo $row['price'] ?></i>

                <a href="add-to-cart.php?id=<?php echo $row['id'] ?>"
                   class="add-to-cart">Add to Cart</a>
            </li>
        <?php endwhile; ?>
    </ul>
</div>
<div class="footer">
    &copy; <?php echo date("Y,m" ) ?>. All right reserved.
</div>

</body>
</html>