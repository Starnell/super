<?php
session_start();
error_reporting(0);
date_default_timezone_set("Asia/Shanghai");
header("Content-type:text/html;charset=utf8");

/*
 * 项目根路径
 */
define('BASEPATH',__DIR__);
include_once('global.php');

/*
 * 使用路由
 */
include_once('./Configs/router.php');
//开启路由，可直接访问http://localhost/design/index/test







