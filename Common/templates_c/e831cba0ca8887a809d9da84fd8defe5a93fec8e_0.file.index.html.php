<?php
/* Smarty version 3.1.30, created on 2017-12-14 21:04:38
  from "D:\WampServer\demo\super\html\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3276e649fdd6_72588129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e831cba0ca8887a809d9da84fd8defe5a93fec8e' => 
    array (
      0 => 'D:\\WampServer\\demo\\super\\html\\index.html',
      1 => 1513256363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3276e649fdd6_72588129 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>首页</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  
  <link rel="alternate icon" type="/super/style/img/logo.png" href="/super/style/img/logo.png">
  <link rel="stylesheet" href="/super/style/css/amazeui.css"/>
  <link rel="stylesheet" href="/super/style/css/style.css"/>
  <link rel="stylesheet" href="/super/style/css/font-awesome.min.css"/>
  <?php echo '<script'; ?>
 src="/super/style/js/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/super/style/js/amazeui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/super/style/js/scroll.js" type="text/javascript"><?php echo '</script'; ?>
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
                    <li class="hw-menu-active"><a  href="">首页</a></li>
                    <li><a href="/super/movie">热门电影</a></li>
                    <li><a href="/super/news">电影资讯 </a></li>
                    <li><a href="/super/about">关于我们</a></li>
                    
                </ul>
            </div>
        </div>
        <div class="search-bar">
            <form class="search-form" action="/super/movie/search">
                <input type="text" value="" class="search" name="wd"/>
                <input type="submit" id="search-btn" value=""/>
            </form>
        	</div>
        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
            <a class="am-btn am-btn-link" href="/super/index/logout" id="load">登出</a>
        <?php } else { ?>
        	<a class="am-btn am-btn-link" href="/super/login" id="load">登录</a>
        <?php }?>
        	
    </div>
</header>
<div class="rollpic">
	 <div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{}' >
	  <ul class="am-slides">
	  	  <li><img src="/super/style/img/movie/10.jpeg"/></li>
	      <li><img src="/super/style/img/movie/11.jpeg"/></li>
	      <li><img src="/super/style/img/movie/coco.jpeg"></li>
	  </ul>
    </div>
</div>
</body>

</html><?php }
}
