<?php
/**
 * Created by PhpStorm.
 * User: ZawXtut
 * Date: 6/9/2020
 * Time: 3:59 PM
 */
include("confs/auth.php") ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
        form label {
            display: block;
            margin-top: 8px;
        }
    </style>
</head>
<body>
<h1>New Category</h1>
<ul class="menu">
    <li><a href="book-list.php">Manage Books</a></li>
    <li><a href="cat-list.php">Manage Categories</a></li>
    <li><a href="orders.php">Manage Orders</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>
<form action="cat-add.php" method="post">
    <label for="name">Category Name</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="remark">Remark</label>
    <textarea name="remark" id="remark"></textarea>

    <br><br>
    <input type="submit" value="Add Category">
</form>
</body>
</html>
