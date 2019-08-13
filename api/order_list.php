<?php
/**
 * Created by PhpStorm.
 * User: doreen
 * Date: 2019/7/30
 * Time: 16:40
 */
$file_name='http://127.0.0.1:88/PHP/data/order_list.json';
$file=file_get_contents($file_name);
echo $file;