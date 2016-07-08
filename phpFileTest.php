<?php
/**
 * Created by PhpStorm.
 * User: raid
 * Date: 2016/7/8
 * Time: 10:19
 */

ob_start();
echo 555555;
//拿到缓冲区的内容
//file_put_contents('file.txt', ob_get_contents());
//清空缓冲区
//ob_clean();

//拿到缓冲区的内容并清空缓冲区
file_put_contents('file.txt', ob_get_clean());
