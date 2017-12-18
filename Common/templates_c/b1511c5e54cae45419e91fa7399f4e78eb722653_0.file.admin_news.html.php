<?php
/* Smarty version 3.1.30, created on 2017-12-18 14:57:22
  from "D:\WampServer\demo\super\Html\admin_news.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3766d2621c67_01766959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1511c5e54cae45419e91fa7399f4e78eb722653' => 
    array (
      0 => 'D:\\WampServer\\demo\\super\\Html\\admin_news.html',
      1 => 1513303199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3766d2621c67_01766959 (Smarty_Internal_Template $_smarty_tpl) {
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
 type="text/javascript" src="/super/Style/js/libs/modernizr.min.js"><?php echo '</script'; ?>
>-->
    <?php echo '<script'; ?>
 type="text/javascript" src="/super/Style/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/super/Style/js/paging.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/super/Style/js/admin_news.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
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
            <div class="crumb-list"><i class="icon-font"></i><span class="crumb-name">资讯管理</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                    		<!--链接到admin_add_news-->
                        <a href="/super/admin_news/add"><i class="icon-font"></i>新增资讯</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th style="width:15%;">资讯标题</th>
                            <th style="width:50%;">资讯摘要</th>
                            <th style="width:15%;">发布时间</th>
                            <th style="width:10%;">发布者</th>
                            <th style="width:5%;">来源</th>
                            <th style="width:5%;">操作</th>
                        </tr>
                        <!--<tr>
                            <td><a href="具体贴子页面.html" target="_blank"> The Best Offer</a></td>
                            <td title="说说加勒比">最佳出价，今天晚上刚看的电影看完心里咋这么难受只能说人生岂能尽得意，我还是推荐这...                            </td>
                            <td>1970-01-01 08:00:00</td>
                            <td>zhengxinxin</td>
                            <td>原创</td>
                            <td style="width:5%;">
                                <a class="link-del" href="/wemovie/index.php/Home/Article/del/id/7" onclick="return confirm('你确定要删除吗？');">删除</a>
                            </td>
                        </tr>-->
                    </table>
                    <div id="admin-news-page" class="page_div"><div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html><?php }
}
