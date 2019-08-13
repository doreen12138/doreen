<?php
/**
 * Created by PhpStorm.
 * User: doreen
 * Date: 2019/8/13
 * Time: 14:11
 */
header("content-Type: text/html; charset=utf-8");//字符编码设置
$serverName = "localhost";
$userName = "root";
$password = "czl14010908";
$dbname = "user_info";
$x=-1;
// 创建连接
$conn =new mysqli($serverName, $userName, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$keyData=$_GET['goodsId'];
$first="select MIN(id) from goods_img where goodsId='".$keyData."'";
$firstResult=$conn->query($first);
while ($row = mysqli_fetch_array($firstResult)) {
    $x=$row[0];
    echo $x;
}
//////echo '<img src="data:image/jpeg;base64,'.base64_encode( $row1['img'] ).'"/>';
$sql = "update  index_data set imageUrl= (select img from goods_img where id='".$x."')where goodsId = '".$keyData."'";
$result = $conn->query($sql);
if ($result){
    echo "修改成功";
    echo "受影响的行号: ".mysqli_affected_rows($conn);
}else {
    echo "修改失败";
    echo "错误信息: " . mysqli_error($conn) . ",错误号" . mysqli_errno($conn);
}
$conn->close();