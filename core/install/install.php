<?php
/*
Any VICP 2

by DKoTechnology

Install setup.
*/

if (file_exists('install.lock')) {
    die('Already installed.'); // If the install.lock file exists, the script will stop.
}
?>

<head>
    <title>AnyVICP 2 - 安装</title>
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../../src/bs/css/bootstrap.min.css">
    <script src="../../src/bs/js/bootstrap.bundle.js"></script>
</head>
<body>
    <div style="margin-left: 35%; width: 500px;" align="center">
        <br>
        <img src="./logo.png" width="100" height="100" alt="logo">
        <br>
        <br>
        <h1>AnyVICP2 - 安装</h1>
        <br>
        <div class="mb-3">
            <label for="websitename" class="form-label">网站名称</label>
            <input type="text" class="form-control" id="websitename" name="websitename" placeholder="网站名称" style="text-align: center;" required>
        </div>
        <div class="mb-3">
            <label for="websiteurl" class="form-label">网站URL</label>
            <input type="text" class="form-control" id="websiteurl" name="websiteurl" placeholder="网站URL" style="text-align: center;" required>
        </div>
        <div class="mb-3">
            <label for="dbhost" class="form-label">MySQL 数据库主机</label>
            <input type="text" class="form-control" id="dbhost" name="dbhost" placeholder="数据库主机" style="text-align: center;" required>
        </div>
        <div class="mb-3">
            <label for="dbun" class="form-label">MySQL 数据库用户名</label>
            <input type="text" class="form-control" id="dbun" name="dbun" placeholder="数据库用户名" style="text-align: center;" required>
        </div>
        <div class="mb-3">
            <label for="dbpwd" class="form-label">MySQL 数据库密码</label>
            <input type="text" class="form-control" id="dbpwd" name="dbpwd" placeholder="数据库密码" style="text-align: center;" required>
        </div>
        <div class="mb-3">
            <label for="dbname" class="form-label">MySQL 数据库名称</label>
            <input type="text" class="form-control" id="dbname" name="dbname" placeholder="数据库名称" style="text-align: center;" required>
        </div>
        <button type="button" class="btn btn-primary">安装</button>

        <script>

            $('.btn-primary').click(function () {
                var websitename = $('#websitename').val();
                var websiteurl = $('#websiteurl').val();
                var dbhost = $('#dbhost').val();
                var dbun = $('#dbun').val();
                var dbpwd = $('#dbpwd').val();
                var dbname = $('#dbname').val();
                $.post('./installpost.php', {
                    webn: websitename,
                    webu: websiteurl,
                    dbh: dbhost,
                    dbu: dbun,
                    dbp: dbpwd,
                    dbn: dbname,
                }, function (data) {
                    alert(data);
                });
            });
        </script>
    </div>
</body>