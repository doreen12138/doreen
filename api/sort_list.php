<?php
/**
 * Created by PhpStorm.
 * User: doreen
 * Date: 2019/7/24
 * Time: 20:58
 */
$file_name='http://127.0.0.1:88/PHP/data/sort_list_data.json';
$file=file_get_contents($file_name);

echo $file;