<?php
/**
 * Created by PhpStorm.
 * User: ZawXtut
 * Date: 6/9/2020
 * Time: 4:00 PM
 */
include("confs/config.php");
$id = $_GET['id'];
$sql = "DELETE FROM categories WHERE id = $id";
mysqli_query($conn, $sql);
header("location: cat-list.php");
?>