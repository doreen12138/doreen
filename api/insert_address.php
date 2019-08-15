<?php
/**
 * Created by PhpStorm.
 * User: doreen
 * Date: 2019/8/14
 * Time: 21:49
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
$username=$_GET['username'];
$name=$_GET['name'];
$phone=$_GET['phone'];
$address=$_GET['address'];
$sql = "insert into user_address(username,`name`,phone,address) value ($username,$name,$phone,$address)";
$result = $conn->query($sql);
if($result){
    echo "修改成功";
    echo "受影响的行号: ".mysqli_affected_rows($conn);
}else {
    echo "修改失败";
    echo "错误信息: " . mysqli_error($conn) . ",错误号" . mysqli_errno($conn);
}
$conn->close();