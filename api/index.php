<?php
/**
 * Created by PhpStorm.
 * User: doreen
 * Date: 2019/7/21
 * Time: 12:20
 */
$file_name='http://127.0.0.1:88/PHP/data/index_data.json';
$file=file_get_contents($file_name);
echo $file;