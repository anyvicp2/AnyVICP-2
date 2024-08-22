<?php
/*
AnyVICP 2
By DKoTechnology

Index page
*/

include './core/database.php';
include './config/config.php';

init(); // 初始化页面
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
                <form action="./core/result.php" method="get" class="">
                    <div class="row g-3 align-items-center" style="width: 600px;">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Search Website" name="domain" style="width: 500px;" required>
                        </div>
                        <div class="col">
                            <button class="btn btn-outline-primary" type="submit">搜索</button>
                        </div>
                    </div>
                </form>
            </mdui-layout-main>
        </mdui-layout>
    </main>
  </body>
</html>
