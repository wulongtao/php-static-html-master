<?php
/**
 * Created by PhpStorm.
 * User: raid
 * Date: 2016/7/8
 * Time: 10:43
 */

//获取文件修改时间——filemtime
if (is_file('./index.shtml') && (time()-filemtime('./index.shtml')) < 20) {
    require_once './index.shtml';
} else {
    //1、链接数据库、然后从数据库里面获取数据
    $data = array('eee','bbb','ccc');
    //如果php.ini中配置了output_buffering=on，那么ob_start可以开启也可以不开启
    ob_start();
    //2、把获取到的数据填充到模板文件里面
    //引入模板文件
    require_once './template/tmp.php';

    file_put_contents('index.shtml', ob_get_contents());

    //3、需要把动态的页面转化为静态的页面、生成纯静态化文件
    /*if (file_put_contents('index.shtml', ob_get_clean())) {
        echo 'success';
    } else {
        echo 'error';
    }*/
}

