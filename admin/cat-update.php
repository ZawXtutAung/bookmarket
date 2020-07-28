<?php
/**
 * Created by PhpStorm.
 * User: ZawXtut
 * Date: 6/9/2020
 * Time: 4:00 PM
 */
 include("confs/config.php");
 $id = $_POST['id'];
 $name = $_POST['name'];
 $remark = $_POST['remark'];
 $sql = "UPDATE categories SET name='$name', remark='$remark',
 modified_date=now() WHERE id = $id";
 mysqli_query($conn, $sql);
 header("location: cat-list.php");
