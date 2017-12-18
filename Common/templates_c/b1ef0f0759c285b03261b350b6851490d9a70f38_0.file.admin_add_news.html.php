<?php
/* Smarty version 3.1.30, created on 2017-12-18 14:57:33
  from "D:\WampServer\demo\super\Html\admin_add_news.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3766dd9fe201_71930179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1ef0f0759c285b03261b350b6851490d9a70f38' => 
    array (
      0 => 'D:\\WampServer\\demo\\super\\Html\\admin_add_news.html',
      1 => 1513303199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3766dd9fe201_71930179 (Smarty_Internal_Template $_smarty_tpl) {
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
 type="text/javascript" src="/super/Style/js/admin_add_news.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="/super/Style/Ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="/super/Style/Ueditor/ueditor.all.min.js"> <?php echo '</script'; ?>
>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="/super/Style/Ueditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <ul class="navbar-list clearfix">
                <li><a class="on" href="">首页</a></li>
                <li><a href="index.html" target="_blank">网站首页</a></li>
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
            <div class="crumb-list"><i class="icon-font"></i><a class="crumb-name" href="/super/admin_news/">资讯管理</a><span class="crumb-step">&gt;</span><span>新增资讯</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form id="newsForm" name="myform" method="post" action="" enctype="multipart/form-data" onsubmit="return deal()">
                    <table class="insert-tab" width="80%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td>
                                    <input class="common-text required" id="title" name="title" size="60" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>作者：</th>
                                <td>
                                    <input class="common-text required" id="author" name="author" size="60" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>来源：</th>
                                <td>
                                		<input type="radio" id="original" name="source0" class="same" value="original">&nbsp;原创
                                		&nbsp;&nbsp;
									<input type="radio" name="source0" id="from" class="same others" value="from" onclick="change()">&nbsp;转载
									<input type="text" id="link" name="txt" class="txt common-text" value="" style="visibility: hidden" type="text" placeholder="请填写转载链接"/>
                                    <input type="text" style="width: 1px;visibility: hidden" id="source" name="source">
                                </td>
                            </tr>
                         	<tr>
                                <th><i class="require-red">*</i>图片：</th>
                                <td><input name="imgSrc" id="imgSrc" type="file"><!--<input type="submit" onclick="submitForm('//super/Style/js/super/Style/css/admin/design/upload')" value="上传图片"/>--></td>
                            </tr>
							<tr>
                                <th><i class="require-red">*</i>摘要：</th>
                                <td><textarea name="abstract" class="common-textarea" id="abstract" cols="30" style="width: 486px;" rows="5"></textarea></td>
                           	</tr>
                           	<tr>
                                <th><i class="require-red">*</i>内容：</th>
                                <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 486px;" rows="10"></textarea></td>
                           	</tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit" id="news-add-btn">
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
<?php echo '<script'; ?>
 type="text/javascript">
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('content',{initialFrameWidth:800,initialFrameHeight:400,});
<?php echo '</script'; ?>
>
</html><?php }
}
