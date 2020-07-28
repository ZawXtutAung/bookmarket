<?php
/**
 * Created by PhpStorm.
 * User: ZawXtut
 * Date: 6/10/2020
 * Time: 9:41 PM
 */
include("confs/config.php");
$id = $_GET['id'];
$status = $_GET['status'];
mysqli_query($conn, "UPDATE orders SET
 status=$status, modified_date=now() WHERE id=$id
 ");
header("location: orders.php");