<?php
/**
 * Created by PhpStorm.
 * User: raid
 * Date: 2016/7/8
 * Time: 12:57
 */
//print_r($_SERVER);

if (preg_match('/^\/(\d+)\/(\d+).html/', $_SERVER['PATH_INFO'], $arr)) {
    print_r($arr);
    $type = $arr[1];
    $category = $arr[2];
} else {
    print_r($arr);
}
