<?php
/**
 * Created by PhpStorm.
 * User: ZawXtut
 * Date: 6/10/2020
 * Time: 9:25 PM
 */
include("confs/config.php");
$id = $_GET['id'];
$sql = "DELETE FROM books WHERE id = $id";
mysqli_query($conn, $sql);
header("location: book-list.php");
