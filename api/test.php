<?php
/**
 * Created by PhpStorm.
 * User: doreen
 * Date: 2019/8/13
 * Time: 16:39
 */
$file_name='http://127.0.0.1:88/PHP/data/index_data.json';
$file=file_get_contents($file_name);
echo $file;