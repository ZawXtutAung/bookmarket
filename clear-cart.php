<?php
/**
 * Created by PhpStorm.
 * User: ZawXtut
 * Date: 6/11/2020
 * Time: 2:55 AM
 */
session_start();
unset($_SESSION['cart']);
header("location: index.php");
