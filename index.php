<?php
session_start();
//error_reporting(0);
date_default_timezone_set("Asia/Shanghai");
header("Content-type:text/html;charset=utf8");

//项目根目录
define('APPLICATION_PATH', __DIR__);
include_once('global.php');
include_once('./configs/router.php');