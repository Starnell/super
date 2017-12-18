<?php
/* Smarty version 3.1.30, created on 2017-12-18 14:56:11
  from "D:\WampServer\demo\super\Html\newsDetail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a37668b8fbf79_70259654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '492fe3a8211b28c961f308cabb19119b8d1a6972' => 
    array (
      0 => 'D:\\WampServer\\demo\\super\\Html\\newsDetail.html',
      1 => 1513303199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37668b8fbf79_70259654 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>电影贴子</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  
    <link rel="alternate icon" type="img/logo.png" href="/super/Style/img/logo.png">
    <link rel="stylesheet" href="/super/Style/css/amazeui.css"/>
    <link rel="stylesheet" href="/super/Style/css/style.css"/>
    <link rel="stylesheet" href="/super/Style/css/font-awesome.min.css" />
    <?php echo '<script'; ?>
 src="/super/Style/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/super/Style/js/paging.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/super/Style/js/amazeui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/super/Style/js/NewsDetail.js"><?php echo '</script'; ?>
>
</head>
<body>
<header class="am-topbar header">
    <div class="am-container-1">
        <div class="left hw-logo">
            <img class=" logo" src="/super/Style/img/logo.png">
        </div>
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
                data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
                class="am-icon-bars"></span>
        </button>

        <div class="am-collapse am-topbar-collapse left" id="doc-topbar-collapse">
            <div class="am-topbar-left am-form-inline am-topbar-left" role="search">
                <ul class="am-nav am-nav-pills am-topbar-nav hw-menu">
                    <li><a  href="/super/">首页</a></li>
                    <li><a href="/super/movie">热门电影</a></li>
                    <li  class="hw-menu-active"><a href="/super/news">电影资讯 </a></li>
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
<article class="am-article news-detail">
	<div class="am-article-hd">
    		<h1 class="am-article-title news-detail-title">永远的蝴蝶</h1>
    		<p class="am-article-meta news-detail-meta">作者：zhengxinxin  发布时间：2017-06-09 23:40:56  编辑：原创</p>
  	</div>

  	<div class="am-article-bd">
    		<p class="am-article-lead news-detail-lead">最佳出价，今天晚上刚看的电影看完心里咋这么难受只能说人生岂能尽得意，我还是推荐这部很好的电影你们可以有时间看一下</p>
    		<div id="news-content"></div>
  	</div>
</article>
</body>
</html><?php }
}
