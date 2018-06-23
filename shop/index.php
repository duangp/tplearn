<?php
header("content-type:text/html,charset=utf-8");
//开启调试模式 走convention文件，false走runtime文件

define('APP_DEBUG', TRUE);
//设置静态资源文件请求路径设置常量
define('CSS_URL' , '/tplearn/shop/Admin/Public/css');
define('IMG_URL' , '/tplearn/shop/Admin/Public/images');
define('JS_URL' , '/shop/Admin/Public/js');
define('hCSS_URL' , '/tplearn/shop/Home/Public/css');
define('hIMG_URL' , '/tplearn/shop/Home/Public/images');
define('hJS_URL' , '/shop/Home/Public/js');
include '../ThinkPHP/ThinkPHP.php';