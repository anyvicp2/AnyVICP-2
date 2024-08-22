<?php
/*
Any Virtual ICP

by DKoTechnology

Result shower.
*/

include './database.php';
include '../config/config.php';

$domain = $_GET ['domain'];
$notfound = false;

if (isset($domain)) {
    $wrong = array();
    $result = getinfo($domain);
    if ($result == $wrong){
        $notfound = true;
    }
    else {
        /*
        格式:
        Name: 名称
        Domain: 域名
        Author: 创建者
        CreateDate: 创建日期
        ICPNumber: ICP号码
        */
        $webname = $result ['Name'];
        $domain = $result ['Domain'];
        $author = $result ['Author'];
        $createdate = $result ['CreateDate'];
        $icpnumber = $result ['ICPNumber'];
    }
}else{
    $notfound = true;
}

init();
?>

<!doctype html>
<html lang="zh-CN">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"/>
    <meta name="renderer" content="webkit"/>
    <link rel="stylesheet" href="https://unpkg.com/mdui@2/mdui.css">
    <link href="https://fonts.googleapis.cn/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://unpkg.com/mdui@2/mdui.global.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./src/bs/css/bootstrap.min.css">
    <script src="./src/bs/js/bootstrap.bundle.js"></script>
    <title><?php echo $name;?></title>
    <style>
        * {
            /* font-family: "Nimbus Sans"; */
        }
        .head {
            margin-top: 50px;
            margin-left: 27px;
        }
        .form {
            margin-left: 27px;
        }
        .input {
            width: 500px;
            color: skyblue;
        }
        mdui-layout {
            margin-left: 27px;
        }
        .divider {
            color: gray;
            width: 100%;
        }
        .index-navigation-drawer {
            background-color: gray;
            height: 100%;
        }
    </style>
  </head>
  <body>
    <main>
        <mdui-layout>
            <mdui-top-app-bar class="index-top-app-bar">
                <mdui-top-app-bar-title><?php echo $name;?></mdui-top-app-bar-title>
            </mdui-top-app-bar>

            <mdui-navigation-drawer open class="index-navigation-drawer" style="color: gray;">
                <mdui-list>
                    <mdui-list-item>首页</mdui-list-item>
                    <mdui-list-item>查询</mdui-list-item>
                    <mdui-list-item>加入</mdui-list-item>
                    <mdui-list-item>公告</mdui-list-item>
                </mdui-list>
            </mdui-navigation-drawer>

            <mdui-layout-main class="index-layout-main" style="min-height: 300px; margin-left: 27px;">
                <h1><?php echo $name;?></h1>
                <br>
                <?php if ($notfound == true) { ?>
                    <div class="alert alert-danger" role="alert">
                        我们没有找到该网站于数据库中的记录。
                    </div>
                <?php } else { ?>
                    <h2>查询结果</h2>
                    <br>
                    <ul class="list-group">
                        <li class="list-group-item">名称: <?php echo $webname;?></li>
                        <li class="list-group-item">域名: <?php echo $domain;?></li>
                        <li class="list-group-item">创建者: <?php echo $author;?></li>
                        <li class="list-group-item">创建日期: <?php echo $createdate;?></li>
                        <li class="list-group-item">ICP号码: <?php echo $icpnumber;?></li>
                    </ul>
                <?php } ?>
            </mdui-layout-main>
        </mdui-layout>
    </main>
  </body>
</html>
