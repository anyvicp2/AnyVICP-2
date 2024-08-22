<?php
/*
AnyVICP 2
by DKoTechnology

Join api
*/

/*
name: 名称
domain: 域名
author: 创建者
createDate: 创建日期
icpNumber: ICP号码
*/

$n = $_GET["name"];
$d = $_GET["domain"];
$a = $_GET["author"];
$c = $_GET["createDate"];
$i = $_GET["icpNumber"];

include './database.php';

create($n, $d, $a, $c, $i);