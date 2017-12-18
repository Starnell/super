<?php
/* Smarty version 3.1.30, created on 2017-12-18 14:57:18
  from "D:\WampServer\demo\super\Html\admin_users.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3766ce8574b9_95184098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bec2c159e16145ac58153580b2b51d604b9ca3d4' => 
    array (
      0 => 'D:\\WampServer\\demo\\super\\Html\\admin_users.html',
      1 => 1513303200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3766ce8574b9_95184098 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
	<link rel="alternate icon" type="img/logo.png" href="/super/Style/img/logo.png">
    <link rel="stylesheet" type="text/css" href="/super/Style/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/super/Style/css/main.css"/>
    <!--<?php echo '<script'; ?>
 type="text/javascript" src="js/libs/modernizr.min.js"><?php echo '</script'; ?>
>-->
    <?php echo '<script'; ?>
 type="text/javascript" src="/super/Style/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/super/Style/js/admin_users.js"><?php echo '</script'; ?>
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
            <div class="crumb-list"><i class="icon-font"></i><span class="crumb-name">用户信息</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
            		<div class="result-title">
                    <div class="result-list">
                        <a href="/super/admin_user/add"><i class="icon-font"></i>新增用户</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th style="width:20%;">房间id</th>
                            <th style="width:35%;">房间号</th>
                            <th style="width:35%;">登录密码</th>
                            <th style="width:10%;">操作</th>
                        </tr>
                        <!--<tr>
                            <td>001</td>
                            <td>a1</td>
                            <td>a1001</td>
                            <td>
                                <a class="link-del" href="admin_edit_user.html">编辑</a>
                            </td>
                        </tr> -->
                    </table>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html><?php }
}
