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
    <title><?php echo $name;?></title>
    <style>
        h1 {
            font-family: "Nimbus Sans";
        }
        .head {
            margin-top: 50px;
            margin-left: 27px;
        }
        form {
            margin-left: 27px;
        }
        .input {
            width: 500px;
            color: skyblue;
        }
    </style>
  </head>
  <body>
    <main>
        <div class="head">
            <h1><?php echo $name;?></h1>
        </div>
        <form method="get" action="./core/result.php">
            <div class="form">
                <mdui-text-field variant="outlined" label="域名" name="domain" class="input" icon="search"></mdui-text-field>
                <mdui-button type="submit"><mdui-icon name="search"></mdui-icon></mdui-button>
            </div>
        </form>
    </main>
  </body>
</html>
