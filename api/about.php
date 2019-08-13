<?php
/**
 * Created by PhpStorm.
 * User: doreen
 * Date: 2019/7/21
 * Time: 12:2
 */
$file_name='http://127.0.0.1:88/PHP/data/about.json';
$file=file_get_contents($file_name);
echo $file;