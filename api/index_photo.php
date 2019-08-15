<?php
/**
 * Created by PhpStorm.
 * User: doreen
 * Date: 2019/8/14
 * Time: 14:02
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

$goodsId=$_GET['goodsId'];
$sql = "select imageUrl from index_data where goodsId='".$goodsId."'";
$result = $conn->query($sql);
$arr["data"] = array();
// 输出每行数据
while($row = $result->fetch_assoc()) {
    $count=count($row);//不能在循环语句中，由于每次删除row数组长度都减小
    for($i=0;$i<$count;$i++){
        unset($row[$i]);//删除冗余数据
    }
    array_push($arr["data"],$row);
    echo $row['imageUrl'];
}
//print_r($arr);
//    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['imageUrl'] ).'"/>';
$conn->close();