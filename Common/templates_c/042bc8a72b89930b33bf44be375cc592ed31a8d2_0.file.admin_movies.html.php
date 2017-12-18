<?php
/* Smarty version 3.1.30, created on 2017-12-18 14:57:24
  from "D:\WampServer\demo\super\Html\admin_movies.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3766d4c04065_75265780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '042bc8a72b89930b33bf44be375cc592ed31a8d2' => 
    array (
      0 => 'D:\\WampServer\\demo\\super\\Html\\admin_movies.html',
      1 => 1513303200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3766d4c04065_75265780 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
	<link rel="alternate icon" type="img/logo.png" href="/super/Style/img/logo.png">
    <link rel="stylesheet" type="text/css" href="/super/Style/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/super/Style/css/main.css"/>
    <?php echo '<script'; ?>
 src="/super/Style/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/super/Style/js/paging.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/super/Style/js/admin_movies.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/super/admin_user">首页</a></li>
                <li><a href="/super" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href=""><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a></li>
                <li><img src="/super/Style/img/user/2.jpg" style="height:45px;width:45px;border-radius:50%;"></li>
                <li><a href="/super/index/logout">退出</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#">常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="/super/admin_movie/"><i class="icon-font">&#xe009;</i>电影管理</a></li>
                        <li><a href="/super/admin_news/"><i class="icon-font">&#xe005;</i>资讯管理</a></li>
                        <li><a href="/super/admin_user"><i class="icon-font">&#xe006;</i>用户信息</a></li>
                        <li><a href="/super/admin_user/edit_admin"><i class="icon-font">&#xe001;</i>修改密码</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">
    		<div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><span class="crumb-name">电影管理</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
            		<div class="result-title">
                    <div class="result-list">
                    		<!--链接至admin_add_movie-->
                        <a href="/super/admin_movie/add"><i class="icon-font"></i>新增电影</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                        <th style="width:30%;">电影名称</th>
                        <th style="width:30%;">发布时间</th>
                        <th style="width:25%;">片长</th>
                        <th style="width:10%;">平均评分</th>
                        <th style="width:5%;">操作</th>
                    </tr>

                    </table>
                    <div id="admin-movies-page" class="page_div"><div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html><?php }
}
