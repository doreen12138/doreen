<?php
/**
 * Created by PhpStorm.
 * User: doreen
 * Date: 2019/8/5
 * Time: 20:21
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
//$username= $_GET['username'];
$keyword=$_GET['id'];
$sql = "delete from user_address where id='".$keyword."'" ;
$result = $conn->query($sql);
$arr['data'] = array();

//// 输出每行数据
//while($row = $result->fetch_assoc()) {
//    $count=count($row);//不能在循环语句中，由于每次删除row数组长度都减小
//    for($i=0;$i<$count;$i++){
//        unset($row[$i]);//删除冗余数据
//    }
//    array_push($arr['data'],$row);
//}
//echo json_encode($arr,JSON_UNESCAPED_UNICODE);//json编码
echo "OK";
$conn->close();