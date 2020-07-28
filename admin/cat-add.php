<?php
/**
 * Created by PhpStorm.
 * User: ZawXtut
 * Date: 6/9/2020
 * Time: 3:59 PM
 */
include ("confs/config.php");
$name=$_POST['name'];
$remark = $_POST['remark'];
$sql = "INSERT INTO categories (name, remark, created_date,
 modified_date) VALUES ('$name', '$remark', now(), now())";
mysqli_query($conn, $sql);
header("location: cat-list.php");