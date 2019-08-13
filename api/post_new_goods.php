<?php
/**
 * Created by PhpStorm.
 * User: doreen
 * Date: 2019/8/12
 * Time: 14:08
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
$title=$_GET['title'];
$price=$_GET['price'];
$desc=$_GET['desc'];
$sql = "insert into add_goods(title, price,`desc`) value ($title,$price,$desc)";
$result = $conn->query($sql);
if($result){
    echo "修改成功";
    echo "受影响的行号: ".mysqli_affected_rows($conn);
}else {
    echo "修改失败";
    echo "错误信息: " . mysqli_error($conn) . ",错误号" . mysqli_errno($conn);
}
//echo "ok";
$conn->close();