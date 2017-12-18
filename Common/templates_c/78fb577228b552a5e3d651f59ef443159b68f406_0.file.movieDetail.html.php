<?php
/* Smarty version 3.1.30, created on 2017-12-14 21:25:12
  from "D:\WampServer\demo\super\html\movieDetail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a327bb80194e3_60782561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78fb577228b552a5e3d651f59ef443159b68f406' => 
    array (
      0 => 'D:\\WampServer\\demo\\super\\html\\movieDetail.html',
      1 => 1513256363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a327bb80194e3_60782561 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>热门电影</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  
  <link rel="alternate icon" type="img/logo.png" href="/super/style/img/logo.png">
  <link rel="stylesheet" href="/super/style/css/amazeui.css"/>
  <link rel="stylesheet" href="/super/style/css/style.css"/>
  <link rel="stylesheet" href="/super/style/css/font-awesome.min.css"/>
  <?php echo '<script'; ?>
 type="text/javascript" src="/super/style/js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/super/style/js/amazeui.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/super/style/js/jquery.raty.js" ><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/super/style/js/movieDeatil.js"><?php echo '</script'; ?>
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
                    <li><a  href="/super">首页</a></li>
                    <li  class="hw-menu-active"><a href="/super/movie">热门电影</a></li>
                    <li><a href="/super/news">电影资讯 </a></li>
                    <li><a href="/super/about">关于我们</a></li>
                    
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

<div>
	<div class="product-show-ul">
	   
	    	<div class="product-content">
			    	<div class="left am-u-sm-12 am-u-md-6 am-u-lg-6 product-content-left case-left">
			    		<div class="product-show-title">
			    			<h3 class="movie-title">加勒比海盗5：死无对证 |6.7分</h3>
			    			<div id="stars-rating"></div>
			    		</div>
			    		<div class="product-show-content">	
			    			<h4><i class="icon-book icon"></i>剧情简介</h4>
						<p class="movie-synopsis">杰克船长（约翰尼·德普饰）发现令人闻风丧胆的萨拉查船长 （哈维尔·巴登饰）竟率领着一众夺命亡灵水手逃出了百慕大三角区。他们扬言要杀尽世上所有的海盗，头号目标就是杰克船长。要想改写命运，杰克船长唯一的希望就是找到传说中海神波塞冬的三叉戟，拥有它就能拥有统治整个海洋的力量。为了寻获这件神器，杰克船长被迫和聪明美丽的天文学家卡琳娜·史密斯（卡雅·斯考达里奥饰）以及固执的年轻皇家海军亨利（布兰顿·思怀兹饰）联手出击。航行着他那破破烂烂的“黑珍珠”号，杰克船长不但决心要改变自己的厄运，同时也力求能从史上最狠毒可怕的敌人那里捡回一条命。</p>
						<h4 class="co-title"><i class="icon-time icon"></i>发布时间</h4>
						<p class="movie-release-date">2017年5月26日(中国大陆/美国)</p>
						<h4 class="co-title"><i class="icon-tag icon"></i>片长</h4>
						<p class="movie-runtime">129分钟</p>
						<h4 class="co-title"><i class="icon-map-marker icon"></i>地区</h4>
						<p class="movie-area">美国</p>
						<h4 class="co-title"><i class="icon-group icon"></i>导演</h4>
						<p class="movie-director">乔阿吉姆·罗恩尼、艾斯彭·山德伯格</p>
						<h4 class="co-title"><i class="icon-group icon"></i>编剧</h4>
						<p class="movie-screenwriter">斯图尔特·比蒂、泰德·埃里奥特、杰夫·内桑森、特里</p>
						<h4 class="co-title"><i class="icon-group icon"></i>主演</h4>
						<p class="movie-performers">约翰尼·德普，奥兰多·布鲁姆，杰弗里·拉什，哈维尔·巴登，布兰顿·思怀兹，卡雅·斯考达里奥，凯文·麦克纳利</p>
			    		</div>
			    		
			    	</div>
	
			    	<div class="right am-u-sm-12 am-u-md-6 am-u-lg-6 product-content-right">
			    		<img class="case-img movie-img" src="Uploads/movie/1.jpg" />
			    		<a id="play" href=""><button type="button" class="am-btn am-btn-primary am-round request-movie">点播</button></a>
			    	</div>
			    	<div class="clear"></div>
	    	</div>
	</div>
</div>
<br>
<br>
</body>


</html><?php }
}
