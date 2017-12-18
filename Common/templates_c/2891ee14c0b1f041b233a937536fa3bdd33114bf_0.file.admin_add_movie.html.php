<?php
/* Smarty version 3.1.30, created on 2017-12-13 23:56:42
  from "D:\WampServer\demo\super\html\admin_add_movie.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a314dba4677d8_47511759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2891ee14c0b1f041b233a937536fa3bdd33114bf' => 
    array (
      0 => 'D:\\WampServer\\demo\\super\\html\\admin_add_movie.html',
      1 => 1513180601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a314dba4677d8_47511759 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
	<link rel="alternate icon" type="img/logo.png" href="/super/style/img/logo.png">
    <link rel="stylesheet" type="text/css" href="/super/style/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/super/style/css/main.css"/>
    <!--<?php echo '<script'; ?>
 type="text/javascript" src="/super/style/js/libs/modernizr.min.js"><?php echo '</script'; ?>
>-->
    <?php echo '<script'; ?>
 type="text/javascript" src="/super/style/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/super/style/js/admin_add_movie.js"><?php echo '</script'; ?>
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
            <div class="crumb-list"><i class="icon-font"></i><a class="crumb-name" href="/super/admin_movie">电影管理</a><span class="crumb-step">&gt;</span><span>新增电影</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form id="myform" name="myform" action="" method="post" enctype="multipart/form-data" onsubmit="return deal()">
                    <table class="insert-tab" width="80%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>电影名称：</th>
                                <td>
                                    <input class="common-text required" id="movieName" name="movieName" size="60" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>电影类型：</th>
                                <td class="common-text required">
                                    <label><input name="movieType0" type="checkbox" value="drama">剧情&nbsp;</label>
                                    <label><input name="movieType0" type="checkbox" value="romance">爱情&nbsp;</label>
                                    <label><input name="movieType0" type="checkbox" value="comedy">喜剧&nbsp;</label>
                                    <label><input name="movieType0" type="checkbox" value="sci-fi">科幻&nbsp;</label>
                                    <label><input name="movieType0" type="checkbox" value="suspense">悬疑&nbsp;</label>
                                    <label><input name="movieType0" type="checkbox" value="horror">恐怖&nbsp;</label>
                                    <label><input name="movieType0" type="checkbox" value="cheers">励志&nbsp;</label>
                                    <label><input name="movieType0" type="checkbox" value="action">动作&nbsp;</label>
                                    <label><input name="movieType0" type="checkbox" value="adventure">冒险&nbsp;</label>
                                    <label><input name="movieType0" type="checkbox" value="crime">犯罪</label>
                                    <label><input id="movieType" name="movieType" type="text" value="" style="visibility:hidden;width: 1px;"></label>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>发布时间：</th>
                                <td>
                                    <input class="common-text required" id="releaseDate" name="releaseDate" size="60" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>片长：</th>
                                <td>
                                    <input class="common-text required" id="runtime" name="runtime" size="60" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>地区：</th>
                                <td>
                                    <input class="common-text required" id="area" name="area" size="60" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>导演：</th>
                                <td>
                                    <input class="common-text required" id="director" name="director" size="60" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>编剧：</th>
                                <td>
                                    <input class="common-text required" id="screenwriter" name="screenwriter" size="60" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>主演：</th>
                                <td>
                                    <input class="common-text required" id="performer" name="performer" size="60" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>海报：</th>
                                <td>
                                		<input name="imgSrc" id="imgSrc" type="file">
                                </td>
                            </tr>
							<tr>
                                <th><i class="require-red">*</i>剧情简介：</th>
                                <td><textarea name="synopsis" class="common-textarea" id="synopsis" cols="30" style="width: 486px;" rows="10"></textarea></td>
                           </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" id="movie-add-btn" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
</div>
</body>
</html><?php }
}
