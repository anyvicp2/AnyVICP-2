<?php

/*
AnyVICP 2

by DKoTechnology

Install post api.
*/

/*
webn: websitename,
webu: websiteurl,
dbh: dbhost,
dbu: dbun,
dbp: dbpwd,
dbn: dbname,
*/

$webn = $_POST['webn'];
$webu = $_POST['webu'];
$dbh = $_POST['dbh'];
$dbu = $_POST['dbu'];
$dbp = $_POST['dbp'];
$dbn = $_POST['dbn'];

if($webn == "" || $webu == "" || $dbh == "" || $dbu == "" || $dbp == "" || $dbn == ""){
    echo "API调用失败: POST 缺失参数";
    die();
}

if(file_exists("install.lock")){
    echo "API调用失败: 安装锁文件存在";
    die();
}

/*
<?php
$config = array();
$config['db'] = array(
    'host' => 'dbhost',
    'username' => 'dbun',
    'password' => 'dbpwd',
    'dbname' => 'dbn'
);

$config ["info"] = array(
    'name' => 'n',
    'version' => 'ver',
    'url' => 'u'
);
*/

try {
    $config = fread(fopen("../config/config_default.php", "r"), filesize("../config/config_default.php"));

    $config = str_replace("dbhost", $dbh, $config);
    $config = str_replace("dbun", $dbu, $config);
    $config = str_replace("dbpwd", $dbp, $config);
    $config = str_replace("dbn", $dbn, $config);
    $config = str_replace("n", $webn, $config);
    $config = str_replace("u", $webu, $config);

    file_put_contents("../config/config.php", $config);
    file_put_contents("install.lock", "install.lock");
} catch (Exception $e) {
    echo "API调用失败: " . $e->getMessage();
    die();
}

try {
    // 创建表
    /*
    格式:
    Name: 名称
    Domain: 域名
    Author: 创建者
    CreateDate: 创建日期
    ICPNumber: ICP号码
    */
    $sql = "CREATE TABLE IF NOT EXISTS `Websites` (
        `Name` varchar(255) NOT NULL,
        `Domain` varchar(255) NOT NULL,
        `Author` varchar(255) NOT NULL,
        `CreateDate` varchar(255) NOT NULL,
        `ICPNumber` varchar(255) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
    $conn = new mysqli($dbh, $dbu, $dbp, $dbn);
    $conn->query($sql);
    $conn->close();
} catch (Exception $e) {
    echo "API调用失败: " . $e->getMessage();
    die();
}

echo "安装成功";