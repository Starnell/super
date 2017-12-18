<?php
/* Smarty version 3.1.30, created on 2017-11-20 19:55:43
  from "D:\WampServer\demo\super\html\add_news.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a12c2bf23be19_35743653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b8a9e8a7d6e52a4315172fba7057101dd697094' => 
    array (
      0 => 'D:\\WampServer\\demo\\super\\html\\add_news.html',
      1 => 1511178931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a12c2bf23be19_35743653 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新增资讯</title>
</head>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="/super/style/Ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="/super/style/Ueditor/ueditor.all.min.js"> <?php echo '</script'; ?>
>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="/super/style/Ueditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
<body>

<form action="" method="post" enctype="multipart/form-data">
    标题：<input type="text" name="title"><br>
    作者：<input type="text" name="author"><br>
    来源：<input type="radio" name="source" value="source">原创
         <input type="radio" name="source" id="others" value="others" onclick="change()">转载
         <input type="text" id="link" style="visibility: hidden" placeholder="请填转载链接" onchange="submit_change()"><br>
    封面：<input type="file" name="imgSrc"><br>
    摘要：<input type="text" name="abstract"><br>
    内容：<textarea name="content" id="content"></textarea><br>
    <input type="submit" value="提交">

</form>

<?php echo '<script'; ?>
 type="text/javascript">
    function change() {
        var linkObj=document.getElementById('link');
        linkObj.style.visibility='visible';
    }
    function submit_change() {
        var othersObj=document.getElementById('others');
        var linkObj=document.getElementById('link');
        var link=linkObj.value;
        if(link!==''){
            othersObj.value=link;
        }
    }

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('content',{initialFrameWidth:1000,initialFrameHeight:400,});
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
