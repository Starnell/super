<?php
/* Smarty version 3.1.30, created on 2017-12-18 14:56:30
  from "D:\WampServer\demo\super\Html\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a37669eb23cf9_10017847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd939c5d9906ef834c28b2ade783290f395e7201d' => 
    array (
      0 => 'D:\\WampServer\\demo\\super\\Html\\login.html',
      1 => 1513303200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37669eb23cf9_10017847 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>登录</title>
	<link rel="alternate icon" type="img/logo.png" href="/super/Style/img/logo.png">
    <link href="/super/Style/css/admin_login.css" rel="stylesheet" type="text/css" />
    <?php echo '<script'; ?>
 src="/super/Style/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/super/Style/js/load.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="admin_login_wrap">
	<a href="/super"><img src="/super/Style/img/super.png" style="width: 170px;position:relative;left:71px;"/></a>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="" id="userLoad">
                <ul class="admin_items">
                		<li>
                        <span>你的身份是：</span>
                        <input type="radio" name="type" id="type" size="35" value="administrator"/>&nbsp;管理员&nbsp;
                        <input type="radio" name="type" id="type" size="35" value="guest"/>&nbsp;用户
                    </li>
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="username"  id="user" size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="password"  id="pwd" size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <input type="button" tabindex="3" value="登录" class="btn btn-primary load" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
</body>
</html><?php }
}
