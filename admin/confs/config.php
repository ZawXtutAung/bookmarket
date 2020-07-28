<?php
/**
 * Created by PhpStorm.
 * User: ZawXtut
 * Date: 6/9/2020
 * Time: 3:57 PM
 */
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "store";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
mysqli_select_db ($conn, $dbname);
