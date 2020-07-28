<?php
/**
 * Created by PhpStorm.
 * User: ZawXtut
 * Date: 6/11/2020
 * Time: 2:55 AM
 */
session_start();
$id = $_GET['id'];
$_SESSION['cart'][$id]++;
header("location: index.php");
