<?php
/* Smarty version 3.1.30, created on 2017-10-17 17:30:05
  from "D:\WampServer\wamp64\www\design\html\test.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e5cd9d5cbc34_52353276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa05417d7399e283bf10912c07b5db3995ecdf5d' => 
    array (
      0 => 'D:\\WampServer\\wamp64\\www\\design\\html\\test.html',
      1 => 1508232604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e5cd9d5cbc34_52353276 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'vo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
?>
    用户名：<?php echo $_smarty_tpl->tpl_vars['vo']->value['username'];?>
  密码是：<?php echo $_smarty_tpl->tpl_vars['vo']->value['password'];?>
<br/>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</body>
</html><?php }
}
