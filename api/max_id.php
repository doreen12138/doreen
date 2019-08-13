<?php
/**
 * Created by PhpStorm.
 * User: doreen
 * Date: 2019/8/12
 * Time: 15:35
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
$sql1="select max(goodsId) from add_goods";
$result1=$conn->query($sql1);
$row = $result1->fetch_assoc();
echo json_encode($row,JSON_UNESCAPED_UNICODE);
$conn->close();