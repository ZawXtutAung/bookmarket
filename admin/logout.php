<?php
/**
 * Created by PhpStorm.
 * User: ZawXtut
 * Date: 6/10/2020
 * Time: 9:40 PM
 */
session_start();
unset($_SESSION['auth']);
header("location: index.php");