<?php
/**
 * Created by PhpStorm.
 * User: doreen
 * Date: 2019/8/8
 * Time: 12:46
 */
$goods_id=$_GET['goods_id'];
$file_name='http://127.0.0.1:88/PHP/data/goods_detail_data_'.$goods_id.'.json';
$file=file_get_contents($file_name);
echo $file;