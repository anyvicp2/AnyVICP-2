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

// 查询数据库的信息
/*
格式:
Name: 名称
Domain: 域名
Author: 创建者
CreateDate: 创建日期
ICPNumber: ICP号码
*/

function getinfo($domain) {
    // 连接数据库
    /*
    Config 格式:
    $config['db'] = array(
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbname' => ''
    );
    */
    global $config;
    $db = new mysqli($config['db']['host'], $config['db']['username'], $config['db']['password'], $config['db']['dbname']);
    if ($db->connect_error) {
        header("Location: ./install.php");
        exit();
    }
    $sql = "SELECT * FROM `Websites` WHERE `domain` = '$domain'";
    $result = $db->query($sql);
    // 如果结果不为空, 则返回
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $db->close();
        return $row;
    } else {
        $db->close();
        return array();
    }
}