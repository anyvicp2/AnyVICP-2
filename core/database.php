<?php
/*
AnyVICP 2
by DKoTechnology

非添加功能, 否则原代码勿动

(功能)数据库连接
*/

// 所有文件的加载函数
function init(){
    global $name;
    global $url;
    global $config;
    $name = $config ['info']['name'];
    $url = $config ['info']['url'];
}