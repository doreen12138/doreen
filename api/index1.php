<?php
/**
 * Created by PhpStorm.
 * User: doreen
 * Date: 2019/8/14
 * Time: 16:43
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


$sql = "select goodsId,text,spanSize,imageUrl,banners from index_data";
$result = $conn->query($sql);
$x=1;
$arr["code"]=0;
$arr["total"]=100;
$arr["page_size"]=6;
$arr["data"] = array();
$arr["banners"]=array();
// 输出每行数据
while($row = $result->fetch_assoc()) {
    $count=count($row);//不能在循环语句中，由于每次删除row数组长度都减小
    for($i=0;$i<$count;$i++){
        unset($row[$i]);//删除冗余数据
    }
    $row['imageUrl']=base64_encode($row['imageUrl']);
    if($row['banners']!=null){
        $row['banners']=explode(",",$row['banners']);
        array_push($arr["banners"],$row['banners']);
        $arr["banners"]=array();
    }
        if($row['imageUrl']==null){
            unset($row['imageUrl']);
        }
    if($row['banners']==null){
        unset($row['banners']);
    }
    array_push($arr["data"],$row);
        unset($arr['banners']);
}
//print_r($arr);
echo json_encode($arr,JSON_UNESCAPED_UNICODE);//json编码
$conn->close();