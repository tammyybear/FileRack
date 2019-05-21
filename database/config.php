<?php
$servername = "remotemysql.com:3306";
$dbusername = "KeAZYixCNo";
$dbpassword = "oMjToGbt3k";
$dbname = "KeAZYixCNo";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if (!$conn) {
   die("connection failed: ".mysqli_connect_error());
}
?>