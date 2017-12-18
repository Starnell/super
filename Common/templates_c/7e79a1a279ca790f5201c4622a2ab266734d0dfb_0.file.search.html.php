<?php
/* Smarty version 3.1.30, created on 2017-12-14 21:04:22
  from "D:\WampServer\demo\super\html\search.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3276d6b50d92_71780501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e79a1a279ca790f5201c4622a2ab266734d0dfb' => 
    array (
      0 => 'D:\\WampServer\\demo\\super\\html\\search.html',
      1 => 1513256660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3276d6b50d92_71780501 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>热门电影</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  
  <link rel="alternate icon" type="img/logo.png" href="/super/style/img/logo.png">
  <link rel="stylesheet" href="/super/style/css/amazeui.css"/>
  <link rel="stylesheet" href="/super/style/css/style.css"/>
   <link rel="stylesheet" href="/super/style/css/font-awesome.min.css"/>
   <?php echo '<script'; ?>
 src="/super/style/js/jquery.min.js"><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 src="/super/style/js/amazeui.min.js"><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 type="text/javascript" src="/super/style/js/search.js"><?php echo '</script'; ?>
>

</head>
<body>
<header class="am-topbar header">
    <div class="am-container-1">
        <div class="left hw-logo">
            <img class=" logo" src="/super/style/img/logo.png">
        </div>
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
                data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
                class="am-icon-bars"></span>
        </button>

        <div class="am-collapse am-topbar-collapse left" id="doc-topbar-collapse">
            <div class="am-topbar-left am-form-inline am-topbar-left" role="search">
                <ul class="am-nav am-nav-pills am-topbar-nav hw-menu">
                    <li><a  href="/super">首页</a></li>
                    <li><a href="/super/movie">热门电影</a></li>
                    <li><a href="/super/news">电影资讯 </a></li>
                    <li><a href="/super/about">关于我们</a></li>
                    
                </ul>
            </div>
        </div>
        <div class="search-bar">
        		<form class="search-form">
        			<input type="text" value="" class="search" name="wd"/>
        			<button type="button" id="search-btn"><i class="icon-search"></i></button>
        		</form>
        	</div>
        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <a class="am-btn am-btn-link" href="/super/index/logout" id="load">登出</a>
        <?php } else { ?>
        <a class="am-btn am-btn-link" href="/super/login" id="load">登录</a>
        <?php }?>
    </div>
</header>

<div class="am-container-1 despite-header">
	<ul data-am-widget="gallery" class="am-gallery am-avg-sm-1am-avg-md-3 am-avg-lg-4 am-gallery-bordered customer-case-ul moviesList" data-am-gallery="{  }" ></ul>
</div>
</body>

</html><?php }
}
