<?php
/* Smarty version 3.1.30, created on 2017-11-20 23:37:10
  from "D:\WampServer\demo\super\html\add_room.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a12f6a6dbbc89_13968437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '564a4b85bb94cc17153f69fb1c652abca79b9ee0' => 
    array (
      0 => 'D:\\WampServer\\demo\\super\\html\\add_room.html',
      1 => 1511192205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a12f6a6dbbc89_13968437 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加房间</title>
</head>
<body>
<form action="/super/admin_user/add" method="post">
    房间号：<input type="text" name="username" required><br>
    密码：<input type="text" name="password" required><br>
    <input type="submit" value="提交">
</form>
</body>
</html><?php }
}
