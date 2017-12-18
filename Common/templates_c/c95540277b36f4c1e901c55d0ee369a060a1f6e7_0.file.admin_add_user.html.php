<?php
/* Smarty version 3.1.30, created on 2017-12-12 22:00:51
  from "D:\WampServer\demo\super\html\admin_add_user.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2fe11312a425_93077740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c95540277b36f4c1e901c55d0ee369a060a1f6e7' => 
    array (
      0 => 'D:\\WampServer\\demo\\super\\html\\admin_add_user.html',
      1 => 1513087245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2fe11312a425_93077740 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
	<link rel="alternate icon" type="img/logo.png" href="/super/style/img/logo.png">
    <link rel="stylesheet" type="text/css" href="/super/style/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/super/style/css/main.css"/>
    <?php echo '<script'; ?>
 src="/super/style/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/super/style/js/admin_add_user.js"><?php echo '</script'; ?>
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
                <li><img src="/super/style/img/user/2.jpg" style="height:45px;width:45px;border-radius:50%;"></li>
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
            <div class="crumb-list"><i class="icon-font"></i><a class="crumb-name" href="http://123.207.255.176/super/admin_user">用户信息</a><span class="crumb-step">&gt;</span><span>新增用户</span></div>
        </div>
    	
        <form id="addUser" action="">
                <div class="config-items">
                    <div class="result-content">
                        <table width="100%" class="insert-tab">
                            <tr>
                                <th width="15%"><i class="require-red">*</i>用户名：</th>
                                <td><input type="text" id="username" value="" size="85" name="username" class="common-text"></td>
                            </tr>
                                <tr>
                                    <th><i class="require-red">*</i>密码：</th>
                                    <td><input type="text" id="password" value="" size="85" name="password" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <input type="button" value="提交" class="btn btn-primary btn6 mr10 user-add">
                                        <input type="button" value="返回" onclick="history.go(-1)" class="btn btn6">
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html><?php }
}
