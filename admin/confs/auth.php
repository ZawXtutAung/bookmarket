<?php
/**
 * Created by PhpStorm.
 * User: ZawXtut
 * Date: 6/10/2020
 * Time: 9:39 PM
 */

 session_start();
 if(!isset($_SESSION['auth'])) {
 header("location: index.php");
 exit();
 }
?>
