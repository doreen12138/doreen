<?php
/**
 * Created by PhpStorm.
 * User: doreen
 * Date: 2019/8/13
 * Time: 19:52
 */
//header("Content-Type: image/jpeg");
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
$sql="select imageUrl from index_data where goodsId=2";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['imageUrl'] ).'"/>';