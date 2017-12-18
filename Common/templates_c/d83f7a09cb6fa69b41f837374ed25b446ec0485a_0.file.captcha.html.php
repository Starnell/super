<?php
/* Smarty version 3.1.30, created on 2017-10-17 16:47:16
  from "D:\WampServer\wamp64\www\design\html\captcha.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e5c394076cc6_93651394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd83f7a09cb6fa69b41f837374ed25b446ec0485a' => 
    array (
      0 => 'D:\\WampServer\\wamp64\\www\\design\\html\\captcha.html',
      1 => 1508230031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e5c394076cc6_93651394 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CAPTCHA</title>
</head>
<body>

<form action="/design/App/index.php" method="post">
    <input type="text" name="code" value="">
    <img src="/design/Common/captcha.php" onclick="this.src='/design/Common/captcha.php?id='+Math.random()"/>
</form>

</body>
</html><?php }
}
