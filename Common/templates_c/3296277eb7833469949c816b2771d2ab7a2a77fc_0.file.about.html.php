<?php
/* Smarty version 3.1.30, created on 2017-12-14 21:04:39
  from "D:\WampServer\demo\super\html\about.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3276e7032575_16446453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3296277eb7833469949c816b2771d2ab7a2a77fc' => 
    array (
      0 => 'D:\\WampServer\\demo\\super\\html\\about.html',
      1 => 1513256363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3276e7032575_16446453 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>关于我们</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  
  <link rel="alternate icon" type="img/logo.png" href="/super/style/img/logo.png">
  <link rel="stylesheet" href="/super/style/css/amazeui.css"/>
  <link rel="stylesheet" href="/super/style/css/style.css"/>
  <link rel="stylesheet" href="/super/style/css/font-awesome.min.css" />
    <?php echo '<script'; ?>
 src="/super/style/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/super/style/js/amazeui.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<header class="am-topbar header">
    <div class="am-container-1">
        <div class="left hw-logo">
            <img class=" logo" src="/super/style/img/logo.png">
        </div>
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
                data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
                class="am-icon-bars"></span>
        </button>

        <div class="am-collapse am-topbar-collapse left" id="doc-topbar-collapse">
            <div class="am-topbar-left am-form-inline am-topbar-left" role="search">
                <ul class="am-nav am-nav-pills am-topbar-nav hw-menu">
                    <li><a  href="/super/">首页</a></li>
                    <li><a href="/super/movie">热门电影</a></li>
                    <li><a href="/super/news">电影资讯 </a></li>
                    <li  class="hw-menu-active"><a href="/super/about">关于我们</a></li>
                </ul>
            </div>
        </div>
        <div class="search-bar">
			<form class="search-form" action="/super/movie/search">
				<input type="text" value="" class="search" name="wd"/>
				<input type="submit" id="search-btn" value=""/>
			</form>
        	</div>
		<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
		<a class="am-btn am-btn-link" href="/super/index/logout" id="load">登出</a>
		<?php } else { ?>
		<a class="am-btn am-btn-link" href="/super/login" id="load">登录</a>
		<?php }?>
    </div>
</header>

<div class=" am-container-1 despite-header">
	<div class="part-title part-title-mar">
		<a href="/super/">
			<img src="/super/style/img/super.png"/>
		</a>
	</div>
	<div class="company-intro">
		<p>文化借由电影传播的接受与解构与 “物态文化”相关，也与“心态文化”相关，“心态文化”层面最底层的积淀是不同文化得以沟通的基础和前提。信息时代，知识成为生产 力和权力，以传播文化知识为己任的传媒业已经成为一个民族文化生存的表征性的社会构成，传媒业成为民族文化的核心动力，电影作为传媒的一种形式成为当然的核心动力。主流电影只有与社会主流意识形态形成良性互动，才能在商业电影市场上站稳脚跟，才能掌控文化话语权。
		</p>
	</div>
</div>
<div class="gray-li company-thought-all" >
	<div class=" am-container-1">
			<ul class="company-thought">
				<li >
				  <div class="thought-all">
				  	<i class="am-icon-circle-o-notch"></i>
				  	<span>团队理念</span>
				  	<div class="thought-all-none">
				  	    <h5>专注 专业</h5>
				    </div>
				  </div>
				  
				</li>
				<li >
				  <div class="thought-all">
				  	<i class="am-icon-hand-o-right"></i>
				  	<span>服务理念</span>
				  	<div class="thought-all-none">
				  	    <h5>实务 用心</h5>
				    </div>
				  </div>	
				</li>
				<li >
				  <div class="thought-all">
				  	<i class="am-icon-bar-chart"></i>
				  	<span>发展方向</span>
				  	<div class="thought-all-none">
				  	    <h5>精益求精</h5>
				    </div>
				  </div>	
				</li>
				<div class="clear"></div>
			</ul>
		</div>
</div>


</body>
</html><?php }
}
