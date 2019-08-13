<?php
/**
 * Created by PhpStorm.
 * User: doreen
 * Date: 2019/8/11
 * Time: 12:40
 */
header("content-Type: text/html; charset=utf-8");//字符编码设置
$serverName = "localhost";
$userName = "root";
$password = "czl14010908";
$dbname = "user_info";
// 创建连接
$conn =new mysqli($serverName, $userName, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$keyword=$_GET['id'];
$sql = "delete from shop_cart where id='".$keyword."'" ;
$result = $conn->query($sql);
echo "ok";
$conn->close();