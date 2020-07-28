<?php
/**
 * Created by PhpStorm.
 * User: ZawXtut
 * Date: 6/10/2020
 * Time: 9:40 PM
 */
session_start();
$name = $_POST['name'];
$password = $_POST['password'];
if($name == "admin" and $password == "123456") {
    $_SESSION['auth'] = true;
    header("location: book-list.php");
} else {
    header("location: index.php");
}
