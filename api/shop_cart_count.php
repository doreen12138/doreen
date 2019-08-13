<?php
/**
 * Created by PhpStorm.
 * User: doreen
 * Date: 2019/7/26
 * Time: 17:06
 */
$file_name='http://127.0.0.1:88/PHP/data/shop_cart_data.json';
$file=file_get_contents($file_name);
echo $file;