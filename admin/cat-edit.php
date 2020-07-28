<?php
/**
 * Created by PhpStorm.
 * User: ZawXtut
 * Date: 6/9/2020
 * Time: 3:59 PM
 */
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
<h1>Edit Category</h1>
<?php
include("confs/config.php");
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM categories WHERE id = $id");
$row = mysqli_fetch_assoc($result);
?>
<form action="cat-update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
    <label for="name">Category Name</label>
    <input type="text" name="name" id="name"
           value="<?php echo $row['name'] ?>">
    <label for="remark">Remark</label>
    <textarea name="remark"
              id="remark"><?php echo $row['remark'] ?></textarea>
    <br><br>
    <input type="submit" value="Update Category">
</form>

</body>
</html>
