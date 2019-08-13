<?php
/**
 * Created by PhpStorm.
 * User: doreen
 * Date: 2019/7/25
 * Time: 16:58
 */
$file_name='http://127.0.0.1:88/PHP/data/sort_content_data_1.json';
$file=file_get_contents($file_name);
echo $file;