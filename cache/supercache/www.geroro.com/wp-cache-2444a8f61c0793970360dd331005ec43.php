<?php die(); ?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<title>GERORO | 很多事情只是不同，并无是非！</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="http://www.geroro.com/xmlrpc.php" />

<!-- All in One SEO Pack 2.3.14.2 by Michael Torbert of Semper Fi Web Designob_start_detected [-1,-1] -->
<meta name="description"  content="Amber_PXE使用说明书" />

<meta name="keywords"  content="amberpxe,pxe,amberpe,pe,python3+paramiko实现sftp上传文件和文件夹,paramiko,python,“上了这套密码锁，你就无敌了”已被锁定
上了这套密码锁，你就无敌了,github上php资源汇总大全，php学习的好资料,php,ueditor,9fm，wordpress,wordpress,黑客,linux" />
<link rel='next' href='http://www.geroro.com/page/2?p=52' />

<link rel="canonical" href="http://www.geroro.com/" />
<!-- /all in one seo pack -->
<link rel='dns-prefetch' href='//s0.wp.com' />
<link rel='dns-prefetch' href='//s.gravatar.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="GERORO &raquo; Feed" href="http://www.geroro.com/feed" />
<link rel="alternate" type="application/rss+xml" title="GERORO &raquo; 评论Feed" href="http://www.geroro.com/comments/feed" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/www.geroro.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,56826,8203,55356,56819),0,0),c=j.toDataURL(),b===c&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55358,56794,8205,9794,65039),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55358,56794,8203,9794,65039),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='contact-form-7-css'  href='http://www.geroro.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='wsl-widget-css'  href='http://www.geroro.com/wp-content/plugins/wordpress-social-login/assets/css/style.css?ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='wpfla-style-handle-css'  href='http://www.geroro.com/wp-content/plugins/wp-first-letter-avatar/css/style.css?ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='http://www.geroro.com/wp-content/plugins/jetpack/modules/minileven/theme/pub/minileven/style.css?ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack_css-css'  href='http://www.geroro.com/wp-content/plugins/jetpack/css/jetpack.css?ver=5.1' type='text/css' media='all' />
<link rel='stylesheet' id='A2A_SHARE_SAVE-css'  href='http://www.geroro.com/wp-content/plugins/add-to-any/addtoany.min.css?ver=1.14' type='text/css' media='all' />
<script type='text/javascript' src='http://www.geroro.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://www.geroro.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/plugins/add-to-any/addtoany.min.js?ver=1.0'></script>
<link rel='https://api.w.org/' href='http://www.geroro.com/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.geroro.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.geroro.com/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.8" />
<link rel='shortlink' href='http://wp.me/7iM5K' />

<script type="text/javascript">
var a2a_config=a2a_config||{};a2a_config.callbacks=a2a_config.callbacks||[];a2a_config.templates=a2a_config.templates||{};a2a_localize = {
	Share: "分享",
	Save: "收藏",
	Subscribe: "订阅",
	Email: "Email",
	Bookmark: "书签",
	ShowAll: "显示全部服务",
	ShowLess: "显示部分服务",
	FindServices: "查找服务",
	FindAnyServiceToAddTo: "动态查找任何用以添加的服务",
	PoweredBy: "Powered by",
	ShareViaEmail: "Share via email",
	SubscribeViaEmail: "Subscribe via email",
	BookmarkInYourBrowser: "添加为浏览器书签",
	BookmarkInstructions: "Press Ctrl+D or \u2318+D to bookmark this page",
	AddToYourFavorites: "添加至收藏夹",
	SendFromWebOrProgram: "Send from any email address or email program",
	EmailProgram: "Email program",
	More: "More&#8230;"
};

</script>
<script type="text/javascript" src="https://static.addtoany.com/menu/page.js" async="async"></script>
<script type="text/javascript">var IMGDIR = 'http://www.geroro.com/wp-content/plugins/imgshow/sets';var attackevasive = '0';var gid = 0;var fid = parseInt('0');var tid = parseInt('0');</script>
<script type="text/javascript" src="http://www.geroro.com/wp-content/plugins/imgshow/sets/showphoto.js?ver=20120418001700"></script>
<link rel="stylesheet" type="text/css" href="http://www.geroro.com/wp-content/plugins/imgshow/sets/showphotostyle.css" />
<div id="append_parent"></div><div id="ajaxwaitid"></div><style>.nmsingle-container,.nms-list,.nmhotcom{max-width:768px}border-radius: 15px;</style><script type="text/javascript" src="http://www.geroro.com/wp-content/plugins/ueditor/ueditor/third-party/SyntaxHighlighter/shCore.js"></script><link type="text/css" rel="stylesheet" href=" http://www.geroro.com/wp-content/plugins/ueditor/ueditor/third-party/SyntaxHighlighter/shCoreDefault.css" />
<link rel='dns-prefetch' href='//v0.wordpress.com'>
<link rel='dns-prefetch' href='//i0.wp.com'>
<link rel='dns-prefetch' href='//i1.wp.com'>
<link rel='dns-prefetch' href='//i2.wp.com'>
<link rel='dns-prefetch' href='//widgets.wp.com'>
<link rel='dns-prefetch' href='//s0.wp.com'>
<link rel='dns-prefetch' href='//0.gravatar.com'>
<link rel='dns-prefetch' href='//1.gravatar.com'>
<link rel='dns-prefetch' href='//2.gravatar.com'>
<style type='text/css'>img#wpstats{display:none}</style>	<style type="text/css">
				#page,
		#branding {
			margin: 0.6em 0.6em 0.8em;
		}
		#site-generator {
			border: 0;
		}
			/* If The user has set a header text color, use that */
		#site-title,
		#site-title a {
			color: #;
			}
	</style>
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		
<!-- Jetpack Open Graph Tags -->
<meta property="og:type" content="website" />
<meta property="og:title" content="GERORO" />
<meta property="og:description" content="很多事情只是不同，并无是非！" />
<meta property="og:url" content="http://www.geroro.com/" />
<meta property="og:site_name" content="GERORO" />
<meta property="og:image" content="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/10/cropped-geroro.png?fit=200%2C200" />
<meta property="og:image:width" content="200" />
<meta property="og:image:height" content="200" />
<meta property="og:locale" content="zh_CN" />
<style id='mekanews-lite-custom-css' class='siteorigin-custom-css' type='text/css'>
#site-navigation.secondary-navigation {
  margin: 0px;
  z-index: 0;
  font-size: 20px;
  font-variant: small-caps;
  text-transform: uppercase;
  text-indent: 6px;
  letter-spacing: 3px;
  word-spacing: 2px;
}

.menu-container {
  opacity: 1;
}

.attachment-mekanews-lite-banner-thumbnails.size-mekanews-lite-banner-thumbnails.wp-post-image {
  overflow: auto;
  overflow-x: scroll;
  z-index: 1;
}
</style>
<link rel="icon" href="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/10/cropped-geroro.png?fit=32%2C32" sizes="32x32" />
<link rel="icon" href="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/10/cropped-geroro.png?fit=192%2C192" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/10/cropped-geroro.png?fit=180%2C180" />
<meta name="msapplication-TileImage" content="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/10/cropped-geroro.png?fit=270%2C270" />
<style id="yellow-pencil">
/*
	The following CSS generated by Yellow Pencil Plugin.
	http://waspthemes.com/yellow-pencil
*/
#secondary label input[type=search].search-field{border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-right-radius:6px;border-bottom-left-radius:6px;}#secondary .widget input[type=submit].search-submit{border-top-right-radius:8px;border-bottom-right-radius:8px;}#wp-calendar caption{border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-right-radius:6px;border-bottom-left-radius:6px;}.post-wrap .hentry img{border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-right-radius:8px;border-bottom-left-radius:8px;}#secondary .widget h2{border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-right-radius:6px;border-bottom-left-radius:6px;}#site-navigation{border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-right-radius:6px;border-bottom-left-radius:6px;}#page #masthead .menu-container .inner #site-navigation #menu-main-menu > .menu-item > a{border-top-left-radius:7px !important;border-top-right-radius:7px !important;border-bottom-right-radius:7px !important;border-bottom-left-radius:7px !important;}#menu-main-menu .sub-menu a{border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-right-radius:8px;border-bottom-left-radius:8px;}.nav-links .current{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#main .navigation .nav-links .page-numbers a{border-top-left-radius:4px !important;border-top-right-radius:4px !important;border-bottom-right-radius:4px !important;border-bottom-left-radius:4px !important;}.nav-links .next{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#colophon .site-info{border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-right-radius:10px;border-bottom-left-radius:10px;}#wp-calendar tbody .pad{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#wp-calendar tr th{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#prev{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#next{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#wp-calendar tfoot .pad{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}.post-wrap .entry-content span{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#top-menu .menu-item a{border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;}.wc_main_comm_form .wpdiscuz-item .wpd-field{border-top-left-radius:5px !important;border-top-right-radius:5px !important;border-bottom-right-radius:5px !important;border-bottom-left-radius:5px !important;}.wc_main_comm_form .wpdiscuz-item .quicktags-toolbar{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#wpdiscuz_subscription_button{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}.wpdiscuz-subscribe-form-option .wpdiscuz_select{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}.wc_main_comm_form .wpdiscuz-item .wpdiscuz-textarea-wrap{border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;}.wc_main_comm_form .wpd-form-row input[type=submit]{border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;}.wc-comment-bar p{border-top-left-radius:9px;border-top-right-radius:9px;border-bottom-right-radius:9px;border-bottom-left-radius:9px;}.post-wrap .btn-read-more span{position:relative;}.post-wrap .post-item .btn-read-more{position:relative;top:-40px;}.post-wrap .post-item .addtoany_share_save_container{position:relative;top:5px;}.widget ul a{border-top-left-radius:3px;border-top-right-radius:3px;border-bottom-right-radius:3px;border-bottom-left-radius:3px;}#slider .item .wp-post-image{border-top-left-radius:9px;border-top-right-radius:9px;border-bottom-right-radius:9px;border-bottom-left-radius:9px;}#controlNav .item .wp-post-image{border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;}#main .lastest-title{border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-right-radius:6px;border-bottom-left-radius:6px;}#slider .item p{border-top-left-radius:7px;border-top-right-radius:7px;border-bottom-right-radius:7px;border-bottom-left-radius:7px;}#slider .date{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}
</style></head>

<body class="home blog mobile-theme elementor-default">
<div id="wrapper">
			<div class="menu-search">
			<nav id="access" class="site-navigation main-navigation" role="navigation">
				<h3 class="menu-toggle">菜单</h3>

								<div class="skip-link"><a class="assistive-text" href="#content">跳至主内容</a></div>
				<div class="menu-%e9%a6%96%e9%a1%b5%e5%af%bc%e8%88%aa-container"><ul id="menu-%e9%a6%96%e9%a1%b5%e5%af%bc%e8%88%aa" class="nav-menu"><li id="menu-item-194" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-194"><a href="http://www.geroro.com/home">主页</a></li>
<li id="menu-item-203" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-203"><a href="http://www.geroro.com/blog">博文</a>
<ul  class="sub-menu">
	<li id="menu-item-204" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-204"><a href="http://www.geroro.com/linux">LINUX</a></li>
	<li id="menu-item-205" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-205"><a href="http://www.geroro.com/mysql">MYSQL</a></li>
	<li id="menu-item-206" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-206"><a href="http://www.geroro.com/oracle">ORACLE</a></li>
</ul>
</li>
<li id="menu-item-232" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-232"><a href="http://www.geroro.com/feel">心情</a></li>
<li id="menu-item-712" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-712"><a href="http://www.geroro.com/music">音乐</a></li>
<li id="menu-item-645" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-645"><a href="http://www.geroro.com/books">书签页</a></li>
<li id="menu-item-547" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-547"><a href="http://www.geroro.com/message">留言板</a></li>
<li id="menu-item-193" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-193"><a href="http://www.geroro.com/about">关于</a></li>
</ul></div>			</nav><!-- #access -->
			<div class="search-form">
					<form method="get" id="searchform" action="http://www.geroro.com/">
		<label for="s" class="assistive-text">搜索</label>
		<input type="text" class="field" name="s" id="s" placeholder="搜索" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="搜索" />
	</form>
			</div><!-- .search-form-->
		</div><!-- .menu-search-->

	
		<header id="branding" role="banner">
								<div class="site-branding">
						<h1 id="site-title"><span><a href="http://www.geroro.com/" title="GERORO" rel="home">GERORO</a></span></h1>
						<h2 id="site-description">很多事情只是不同，并无是非！</h2>
					</div>
					</header><!-- #branding -->

	<div id="page" class="hfeed">
		<div id="main">

		<div id="primary">
			<div id="content" role="main">

				
				
									
						
	<article id="post-58" class="post-58 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-pxe tag-pxe">
		<header class="entry-header">
										<div class="entry-heading">
					<h2 class="entry-title"><a href="http://www.geroro.com/archives/58" rel="bookmark">Amber_PXE使用说明书</a></h2>
					<h3 class="entry-format">推荐</h3>
				<div>
			
			<div class="entry-meta">
							</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-content">
					<p style="text-align:center"><strong><span style="font-size:37px;font-family:华文新魏">Amber_PXE</span></strong><strong><span style="font-size:37px;font-family:华文新魏">使用说明书</span></strong></p>
<h1><span style="text-decoration: none;">&nbsp;</span><a style="font-family: 宋体; text-decoration: none;"><span style="font-family:宋体">一、制作背景</span></a></h1>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-family:宋体">闲来在逛论坛，看到无忧论坛中大神乌啦啦发布了一个</span>wll<span style="font-family:宋体">多功能</span>pxe2.0<span style="font-family:宋体">的帖子。看到大神的帖子中，这个</span>PXE<span style="font-family:宋体">的功能还是蛮强大的。但是看到大神对这个</span>PXE<span style="font-family:宋体">的功能还未全部发挥出来，以及大神的</span>PXE<span style="font-family:宋体">系统里面没有图形界面，对于部分不懂</span>linux<span style="font-family:宋体">的人或者新手还是有些困难去理解，这个</span>PXE<span style="font-family:宋体">是基于</span>Tinycorelinux<span style="font-family:宋体">系统进行扩展的，所以我将这个系统保留官方的图形</span>UI<span style="font-family:宋体">基础上加入了大神</span>wll<span style="font-family:宋体">所有的功能，另外加入了一些定制的功能，为此还专门花了</span>2<span style="font-family:宋体">个礼拜时间去学习了一下</span>Tinycorelinux<span style="font-family:宋体">的知识，收益颇深。</span></p>
<p style="text-indent: 28px"><span style="font-family:宋体">大神的贴子地址如下：</span></p>
<p><a href="http://bbs.wuyou.net/forum.php?mod=viewthread&#038;tid=366703&#038;extra=page%3D1">http://bbs.wuyou.net/forum.php?mod=viewthread&amp;tid=366703&amp;extra=page%3D1</a></p>
<h1><a><span style="font-family:宋体">二、功能介绍</span></a></h1>
<p style="text-indent:28px">Amber_PXE<span style=";font-family:宋体">基于</span>tinycore 6.1<span style=";font-family:宋体">制作，启动后完全加载到内存中，可以瞬间把电脑变成多功能服务器，使局域网中的其它电脑可以通过网络启动</span>.<span style=";font-family:宋体">服务器目录可以放在任意读写分区（</span>U<span style=";font-family:宋体">盘，移动硬盘，电脑本身硬盘），而且可以通过多种方法远程修改。</span><br /> <span style=";font-family:宋体">集成功能：</span><br /> PXE<span style=";font-family:宋体">服务，</span>WWW<span style=";font-family:宋体">服务</span>, SMB<span style=";font-family:宋体">服务，</span>FTP<span style=";font-family:宋体">服务，</span>NFS<span style=";font-family:宋体">服务，</span>SSH<span style=";font-family:宋体">服务，</span>SSH-FS<span style=";font-family:宋体">服务</span>,DHCP<span style=";font-family:宋体">服务</span>(<span style=";font-family:宋体">继承当前局域网的</span>DHCP,<span style=";font-family:宋体">如果无则自动创建新的</span>DHCP)</p>
<h2><a>1</a><span style="font-family:宋体">、部分修改如下</span></h2>
<p style="text-indent:28px"><span style=";font-family:宋体">（</span>1<span style=";font-family:宋体">）、我将</span>www<span style=";font-family:宋体">服务做了一下修改，改用</span>apache2<span style=";font-family:宋体">包，为了实现后面手动和自动安装</span>Redhat<span style=";font-family:宋体">和</span>Centos<span style=";font-family:宋体">用的，在乌啦啦大神的</span>PXE<span style=";font-family:宋体">中无法做到加载</span>Redhat<span style=";font-family:宋体">和</span>Centos<span style=";font-family:宋体">目录，即原先</span>busybox-httpd<span style=";font-family:宋体">中无法实现</span>http<span style=";font-family:宋体">列目录功能。</span></p>
<p style="text-indent:28px"><span style=";font-family:宋体">（</span>2<span style=";font-family:宋体">）、将</span>DHCP<span style=";font-family:宋体">中分配</span>IP<span style=";font-family:宋体">的范围扩展为</span>100-233<span style=";font-family:宋体">也就是</span>134<span style=";font-family:宋体">个。然后周期延长为</span>9999999H<span style=";font-family:宋体">小时。</span></p>
<p style="text-indent:28px"><span style=";font-family:宋体">（</span>3<span style=";font-family:宋体">）、修改系统默认账户</span>tc<span style=";font-family:宋体">的密码为</span>123456<span style=";font-family:宋体">，可以使用</span>securecrt<span style=";font-family: 宋体">等连接工具连接系统，切换到</span>root<span style=";font-family:宋体">账户使用命令</span>sudo su<span style=";font-family:宋体">就可以了。</span></p>
<p style="text-indent:28px"><span style=";font-family:宋体">（</span>4<span style=";font-family:宋体">）、保留了</span>Tinycorelinux<span style=";font-family:宋体">的官方</span>UI<span style=";font-family:宋体">，针对官方的各种其他扩展都可以使用，只替换了一下桌面背景，如下：<br /></span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="759" height="549" title="1479735393137026.png" alt="1.png" src="/upload/image/20161121/1479735393137026.png"/></p>
<p style="text-indent:28px"><span style=";font-family:宋体"></span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="765" height="564" title="1479735314115084.png" alt="1.png" src="/upload/image/20161121/1479735314115084.png"/></p>
<p></p>
<p>&nbsp;</p>
<h2><a>2</a><span style="font-family:宋体">、网启功能介绍</span></h2>
<p><span style="font-family:宋体">（</span>1<span style="font-family:宋体">）网络加载</span>PE<span style="font-family:宋体">系统</span></p>
<p style="text-indent:28px"><span style="font-family:宋体">和普通</span>U<span style="font-family:宋体">盘加载</span>PE<span style="font-family:宋体">一样，只不过方式换成网络加载</span>ISO<span style="font-family:宋体">或者</span>WIM<span style="font-family:宋体">格式，</span><span style=";font-family:宋体">所有文件都是通过局域网加载的</span>,<span style=";font-family:宋体">一台电脑</span>,<span style=";font-family:宋体">只需要插上网线</span>,<span style=";font-family:宋体">然后从启动选项中选择从网卡启动即可</span>,<span style=";font-family:宋体">这就是</span>PXE<span style=";font-family:宋体">功能</span>,<span style=";font-family:宋体">大部分</span>PC<span style=";font-family:宋体">和服务器都有此功能，网络启动的引导文件为</span>grldr,<span style=";font-family:宋体">启动菜单根据情况</span>diy,<span style=";font-family:宋体">为提高网络加载速度</span>,<span style=";font-family:宋体">使用</span>grldr<span style=";font-family:宋体">链式引导</span>ipxe,<span style=";font-family:宋体">借助</span>ipxe<span style=";font-family:宋体">的</span>http<span style=";font-family:宋体">功能</span>,<span style=";font-family:宋体">加载一个</span>200M<span style=";font-family:宋体">的</span>PE<span style=";font-family:宋体">只需要</span>5-10<span style=";font-family:宋体">秒</span>,<span style=";font-family:宋体">而通过</span>tftp<span style=";font-family:宋体">加载则需要</span>2<span style=";font-family:宋体">分钟以上</span>,<span style=";font-family:宋体">但测试发现</span>ipxe<span style=";font-family:宋体">对部分电脑不兼容。（以上借用乌啦啦大神的原话）。进入</span>PE<span style=";font-family:宋体">里面就可以维护系统，安装</span>Windows<span style=";font-family:宋体">操作系统等。有需要可以下载网上许多不错的</span>PE<span style=";font-family:宋体">，然后加载使用就好。</span></p>
<p style="text-indent:28px"><span style=";font-family:宋体">重新编辑了</span>menu.lst<span style=";font-family:宋体">文件，将三种方式加载</span>PE<span style=";font-family:宋体">的放入到网络引导</span>PE<span style=";font-family:宋体">系统条目下，如下图所示：</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="777" height="592" title="1479735616780166.png" alt="3.png" src="/upload/image/20161121/1479735616780166.png"/></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="769" height="670" title="1479735632133183.png" alt="4.png" src="/upload/image/20161121/1479735632133183.png"/></p>
<p><span style="font-family:宋体">（</span>2<span style="font-family:宋体">）大神的</span>linux<span style="font-family:宋体">维护系统。</span></p>
<p style="text-indent:28px"><span style="font-family:宋体">大神的</span>linux<span style="font-family:宋体">是基于</span>mint&nbsp;&nbsp;17.1<span style="font-family: 宋体">修改而成</span>,<span style="font-family: 宋体">网络启动</span>linux<span style="font-family: 宋体">原理是通过挂载多功能服务器的</span>NFS<span style="font-family: 宋体">共享目录实现的</span>,nfs<span style="font-family: 宋体">服务可用于通用的</span>linux<span style="font-family: 宋体">网络安装</span><span style=";font-family:宋体">，此</span>linux<span style="font-family: 宋体">默认用户是</span>wll&nbsp;<span style="font-family: 宋体">，可以通过</span>sudo <span style="font-family: 宋体">来获取管理员权限</span>,wll<span style="font-family: 宋体">与</span>root<span style="font-family: 宋体">用户的密码均为</span>666888<span style=";font-family:宋体">，</span>Linux<span style="font-family: 宋体">启动后</span>,<span style="font-family: 宋体">除了正常的维护工作外</span>,<span style="font-family: 宋体">还可以通过</span>winsetup<span style="font-family: 宋体">命令来安装</span>windows, winsetup<span style="font-family: 宋体">命令是基于</span>ntfsclone<span style="font-family: 宋体">工具编写的镜像恢复脚本</span>,<span style="font-family: 宋体">需要用专用的系统镜像</span>,<span style="font-family: 宋体">比</span>gho<span style="font-family: 宋体">镜像稍小些</span>,<span style="font-family: 宋体">但还原速度比</span>ghost<span style="font-family: 宋体">快。以上内容是大神的创造，我就没有修改。如下图的【</span>2<span style="font-family: 宋体">】、【</span>3<span style="font-family: 宋体">】条目，是两种不同的加载方式。</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="770" height="594" title="1479735663106202.png" alt="5.png" src="/upload/image/20161121/1479735663106202.png"/></p>
<p><span style="font-family:宋体">（</span>3<span style="font-family:宋体">）自动安装</span>linux<span style="font-family:宋体">，包括</span>Redhat<span style="font-family:宋体">和</span>Centos<span style="font-family:宋体">。</span></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-family:宋体">虽说是自动安装，但是还是保留了其中的分区操作需要确认手动安装，因为考虑到不同的硬件环境，可能需要</span>LVM<span style="font-family:宋体">或者不需要</span>LVM<span style="font-family:宋体">，</span>swap<span style="font-family:宋体">等大小不确定等因素，所以自动安装过程中的这一步分区变成手动的，其他过程都是自动完成。自动安装的脚本是</span>redks.cfg<span style="font-family:宋体">和</span>cenks.cfg<span style="font-family:宋体">分别是</span>Redhat<span style="font-family:宋体">和</span>Centos<span style="font-family:宋体">的自动安装脚本。</span>ks.cfg<span style="font-family:宋体">脚本大家可以换成自己定制的即可，我在打包的</span>amberpxe<span style="font-family:宋体">中是个人定制的</span>ks.cfg<span style="font-family:宋体">文件。安装完成的</span>Redhat<span style="font-family:宋体">和</span>Centos<span style="font-family:宋体">是带图形界面，</span>root<span style="font-family:宋体">密码是</span>123456<span style="font-family:宋体">。所有文件见文档最后的附件。如下图的【</span>4<span style="font-family:宋体">】、【</span>5<span style="font-family:宋体">】条目</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="758" height="583" title="1479735685644400.png" alt="6.png" src="/upload/image/20161121/1479735685644400.png"/></p>
<p><span style="font-family:宋体">（</span>4<span style="font-family:宋体">）手动安装</span>linux<span style="font-family:宋体">，包括</span>Redhat<span style="font-family:宋体">和</span>Centos</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-family:宋体">根据不同的需求，需要不同的安装方式。所以将手动安装</span>Redhat<span style="font-family:宋体">和</span>Centos<span style="font-family:宋体">的功能也加入，另外</span>Redhat<span style="font-family:宋体">和</span>Centos<span style="font-family:宋体">的安装包都是和自动安装的同一个安装包目录。后面功能演示中，讲述如何放置这些安装包。如下图的【</span>6<span style="font-family:宋体">】、【</span>7<span style="font-family:宋体">】条目。</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="718" height="559" title="1479735719265807.png" alt="7.png" src="/upload/image/20161121/1479735719265807.png"/></p>
<p><span style="font-family:宋体">（</span>5<span style="font-family:宋体">）安装</span>Vmware<span style="font-family:宋体">的</span>Esxi</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-family:宋体">如下图条目【</span>8<span style="font-family:宋体">】所示，安装</span>Vmware<span style="font-family:宋体">的</span>Esxi<span style="font-family:宋体">系统。使用</span>ISO<span style="font-family:宋体">镜像方式加载。由于</span>Esxi<span style="font-family:宋体">不同版本的安装引导方式有许多差别，另外镜像包里面的都是大写，而</span>linux<span style="font-family:宋体">是大小写区分的。所以改成加载</span>ISO<span style="font-family:宋体">方式来引导安装。</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="726" height="558" title="1479735752778315.png" alt="8.png" src="/upload/image/20161121/1479735752778315.png"/></p>
<p><span style="font-family:宋体">（</span>6<span style="font-family:宋体">）网络加载其他工具包</span></p>
<p><span style="font-family:宋体">此类工具包大家可以去下载自己需要的包，然后编辑菜单即可。本系统中包含了分区工具、密码破解工具，内存检测工具，硬盘检测工具，</span>dos<span style="font-family:宋体">工具箱。如下图条目【</span>9<span style="font-family:宋体">】所示：</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="722" height="541" title="1479735774121594.png" alt="9.png" src="/upload/image/20161121/1479735774121594.png"/></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="726" height="568" title="1479735796258577.png" alt="10.png" src="/upload/image/20161121/1479735796258577.png"/></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="font-size:14px;font-family: &#39;Calibri&#39;,sans-serif"><br /> </span> </p>
<p>&nbsp;</p>
<h1><a><span style="font-family:宋体">三、功能演示</span></a></h1>
<h2><a>1</a><span style="font-family:宋体">、准备工作</span></h2>
<p><span style="font-family:宋体">下载需要的工具包。</span></p>
<p><span style="font-family:宋体">（</span>1<span style="font-family:宋体">）准备好</span>Vmware Workstation<span style="font-family:宋体">并安装，本人用的是</span>12<span style="font-family:宋体">版本的。或者使用</span>VirtualBox</p>
<p><span style="font-family:宋体">（</span>2<span style="font-family:宋体">）下载</span>Amber_PXE1.0.7.iso<span style="font-family:宋体">、</span>amberpxe<span style="font-family:宋体">文件夹</span>.zip<span style="font-family:宋体">和</span>amberpxe<span style="font-family:宋体">虚拟机文件</span>.zip</p>
<h2><a>2</a><span style="font-family:宋体">、部署</span>Amber_PXE</h2>
<p><span style="font-family:宋体">（</span>1<span style="font-family:宋体">）在</span>Vmware<span style="font-family:宋体">中建一个虚拟机，配置如下：</span></p>
<p><span style="font-family:宋体">注意事项：硬盘要选择</span>IDE<span style="font-family:宋体">格式。大小建议超过</span>20G.<span style="font-family:宋体">网络选择桥接模式，</span>NAT<span style="font-family:宋体">模式也可以。最好选在桥接模式，方便局域网。硬盘选择现有的虚拟磁盘文件，选择下载的</span>amberpxe.vmdk(amberpxe<span style="font-family:宋体">虚拟机文件</span>.zip<span style="font-family:宋体">解压出来的文件</span>)</p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="575" height="474" title="1479735824572365.png" alt="11.png" src="/upload/image/20161121/1479735824572365.png"/></p>
<p><span style="font-family:宋体">（</span>2<span style="font-family:宋体">）启动系统，如下界面中选择任意一个都可以，但是有些是没有</span>UI<span style="font-family:宋体">的，这是基于官方的</span>ISO<span style="font-family:宋体">，没有做选择上的修改。进入系统后如下所示（带图形界面）：</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="590" height="360" title="1479735837911111.png" alt="12.png" src="/upload/image/20161121/1479735837911111.png"/></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="592" height="405" title="1479735849124663.png" alt="13.png" src="/upload/image/20161121/1479735849124663.png"/></p>
<p><span style="font-family:宋体">（</span>3<span style="font-family:宋体">）成功进入上图所示，验证系统是否完成功能</span>.</p>
<p><span style="font-family:宋体">在</span>Windows<span style="font-family:宋体">下运行中输入</span><a href="file://amber/amberpxe">\\amber\amberpxe</a><span style="font-family:宋体">然后回车，能出现如下图所示表示基本成功。</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="750" height="457" title="1479735863125626.png" alt="14.png" src="/upload/image/20161121/1479735863125626.png"/></p>
<h2><a>3</a><span style="font-family:宋体">、测试网络</span>PE<span style="font-family:宋体">加载。</span></h2>
<p><span style="font-family:宋体">（</span>1<span style="font-family:宋体">）自己选择一个自己喜欢的</span>PE</p>
<p><span style="font-family:宋体">为了表示具有通用性，在如下论坛中有一个网友发布很多</span>PE<span style="font-family:宋体">，我选其中一个做实验。</span></p>
<p><a href="http://bbs.pcbeta.com/forum.php?mod=viewthread&#038;tid=1444895">http://bbs.pcbeta.com/forum.php?mod=viewthread&amp;tid=1444895</a></p>
<p><span style="font-family:宋体">（</span>2<span style="font-family:宋体">）介绍一下三种启动方式的不同。</span></p>
<p><span style="font-family:宋体">针对</span>ipxe<span style="font-family:宋体">的</span>http<span style="font-family:宋体">加载</span>wim<span style="font-family:宋体">镜像方式，需要将</span>win8pe.iso<span style="font-family:宋体">文件中的</span>bcd,boot.wim,boot.sdi<span style="font-family:宋体">都拷贝至</span><a href="file://amber/amberpxe/wim/boot">\\amber\amberpxe\wim\boot</a><span style="font-family:宋体">目录中。全部要求小写。</span></p>
<p><span style="font-family:宋体">针对</span>ipxe<span style="font-family:宋体">的</span>http<span style="font-family:宋体">加载</span>iso<span style="font-family:宋体">镜像方式，需要将</span>win8pe<span style="font-family:宋体">的</span>iso<span style="font-family:宋体">镜像文件拷贝至</span><a href="file://amber/amberpxe/iso/">\\amber\amberpxe\iso\</a><span style="font-family:宋体">中，并且命名为</span>win8pe.iso<span style="font-family:宋体">。</span></p>
<p><span style="font-family:宋体">针对</span>grub4dos<span style="font-family:宋体">方式加载也是需要将</span>win8pe<span style="font-family:宋体">的</span>iso<span style="font-family:宋体">镜像文件拷贝至</span><a href="file://amber/amberpxe/iso/">\\amber\amberpxe\iso\</a><span style="font-family:宋体">中，并且命名为</span>win8pe.iso <span style="font-family:宋体">。</span></p>
<p><span style="font-family:宋体">说明：针对以上为什么要小写，为什么要命名为</span>win8pe.iso<span style="font-family:宋体">，是因为</span>linux<span style="font-family:宋体">系统做的</span>PXE<span style="font-family:宋体">对大小写有区分，在</span><a href="file://amber/amberpxe/ipxe/">\\amber\amberpxe\ipxe\</a><span style="font-family:宋体">目录中的</span>ipxe<span style="font-family:宋体">文件对这些命名和大小写都固定了。</span></p>
<p><span style="font-family:宋体">（</span>3<span style="font-family:宋体">）用</span>Vmware Workstation<span style="font-family:宋体">新建一个虚拟机，为了测试，先定一个环境，</span>2G<span style="font-family:宋体">内存，</span>20G<span style="font-family:宋体">硬盘，网络方式桥接保证和</span>Amber_PXE<span style="font-family:宋体">能互通就行，处理器</span>1<span style="font-family:宋体">个，其他默认。</span></p>
<p><span style="font-family:宋体">（</span>4<span style="font-family:宋体">）启动新建的虚拟机，默认也会尝试网络加载（因为默认没有系统）。</span></p>
<p><span style="font-family:宋体">到如下界面表示成功启动。</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="614" height="387" title="1479735878310431.png" alt="15.png" src="/upload/image/20161121/1479735878310431.png"/></p>
<p><span style="font-family:宋体">（</span>5<span style="font-family:宋体">）选择【</span>01<span style="font-family:宋体">】网络引导</span>PE<span style="font-family:宋体">系统。</span></p>
<p><span style="font-family:宋体">进入如下图所示界面。分别对三种方式做测试都通过。其中</span>grub4dos<span style="font-family:宋体">加载比较慢。</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="614" height="469" title="1479735895711444.png" alt="16.png" src="/upload/image/20161121/1479735895711444.png"/></p>
<p><span style="font-family:宋体">（</span>6<span style="font-family:宋体">）成功进入到</span>PE<span style="font-family:宋体">系统，如下图所示：</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="710" height="401" title="1479735913321361.png" alt="17.png" src="/upload/image/20161121/1479735913321361.png"/></p>
<p>&nbsp;</p>
<h2><a>4</a><span style="font-family:宋体">、启动乌啦啦的</span>linux</h2>
<p><span style="font-family:宋体">（</span>1<span style="font-family:宋体">）将乌啦啦大神的</span>linux.zip<span style="font-family:宋体">文件夹打开辅助</span>casper<span style="font-family:宋体">文件夹到</span><a href="file://amber/amberpxe/linux/">\\amber\amberpxe\linux\</a><span style="font-family:宋体">目录下。</span></p>
<p><span style="font-family:宋体">（</span>2<span style="font-family:宋体">）测试虚拟机网络启动选择【</span>02<span style="font-family:宋体">】或者【</span>03<span style="font-family:宋体">】</span></p>
<p><span style="font-family:宋体">进入到如下界面表示成功启动。</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="791" height="474" title="1479735931899407.png" alt="18.png" src="/upload/image/20161121/1479735931899407.png"/></p>
<h2><a>5</a><span style="font-family:宋体">、测试自动安装</span>Redhat<span style="font-family:宋体">和</span>Centos</h2>
<p><span style="font-family:宋体">（</span>1<span style="font-family:宋体">）分别将</span>Redhat<span style="font-family:宋体">和</span>Cnetos<span style="font-family:宋体">的镜像包打开，提取里面的所有文件分别到</span><a href="file://amber/amberpxe/redhat/">\\amber\amberpxe\redhat\</a><span style="font-family:宋体">和</span><a href="file://amber/amberpxe/centos/">\\amber\amberpxe\centos\</a> <span style="font-family:宋体">目录中。</span> <span style="font-family:宋体">只测试过</span>Redhat6.x<span style="font-family:宋体">和</span>Centos6.x<span style="font-family:宋体">，其他未测，有兴趣的可以测试一下。</span></p>
<p><span style="font-family:宋体;color:red">这里要特别强调一下：好压和</span><span style="color:red">winrar</span><span style="font-family:宋体;color:red">以及</span><span style="color:red">daemon tools</span><span style="font-family:宋体;color:red">等软件解压文件的时候会因为文件名太长而丢失文件名后面部门内容。所以解压的时候建议用软碟通，英文名</span><strong><span style="color:red">ultraiso</span></strong><strong><span style="font-family:宋体;color:red">。</span></strong></p>
<p><span style="font-family:宋体">（</span>2<span style="font-family:宋体">）选择【</span>04<span style="font-family:宋体">】、【</span>05<span style="font-family:宋体">】测试自动安装</span>Redhat<span style="font-family:宋体">和</span>Centos</p>
<p><span style="font-family:宋体">安装的时候都会有同样一个背景。</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="1479735948360606.png" alt="19.png" src="/upload/image/20161121/1479735948360606.png"/></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="1479735961933660.png" alt="20.png" src="/upload/image/20161121/1479735961933660.png"/></p>
<p><span style="font-family:宋体">安装过程中的一些截图</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="1479735975454286.png" alt="21.png" src="/upload/image/20161121/1479735975454286.png"/></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="1479735985117786.png" alt="22.png" src="/upload/image/20161121/1479735985117786.png"/></p>
<p><span style="font-family:宋体;color:red">注意到这一步是需要手动分区的，正如前面所说的，针对不同的硬件环境，自动调配分区才合适。</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="657" height="528" title="1479735994797508.png" alt="23.png" src="/upload/image/20161121/1479735994797508.png"/></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="638" height="506" title="1479736008107024.png" alt="24.png" src="/upload/image/20161121/1479736008107024.png"/></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="670" height="510" title="1479736021858010.png" alt="25.png" src="/upload/image/20161121/1479736021858010.png"/></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" width="674" height="506" title="1479736035128028.png" alt="26.png" src="/upload/image/20161121/1479736035128028.png"/></p>
<p><span style="font-family:宋体">安装完成是自动重启的，并自动配置</span>yum<span style="font-family:宋体">源为</span>Amber_PXE<span style="font-family:宋体">的源。即</span><a href="http://amber/redhat/">http://amber/redhat/</a></p>
<p><span style="font-family:宋体">这个</span>amber<span style="font-family:宋体">是</span>amber_pxe<span style="font-family:宋体">的</span>ip<span style="font-family:宋体">地址。</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="1479736046807018.png" alt="27.png" src="/upload/image/20161121/1479736046807018.png"/></p>
<h2><a>6</a><span style="font-family:宋体">、测试手动安装</span>Redhat<span style="font-family:宋体">和</span>Centos</h2>
<p><span style="font-family:宋体">（</span>1<span style="font-family:宋体">）在上面</span>5<span style="font-family:宋体">的测试过程中完成了</span>Redhat<span style="font-family:宋体">和</span>Centos<span style="font-family:宋体">文件的拷贝后，</span></p>
<p><span style="font-family:宋体">（</span>2<span style="font-family:宋体">）选择【</span>06<span style="font-family:宋体">】、【</span>07<span style="font-family:宋体">】测试手动安装</span>Redhat<span style="font-family:宋体">和</span>Centos</p>
<p><span style="font-family:宋体">（</span>3<span style="font-family:宋体">）刚开始加载会有点慢。出现我们熟习的安装界面。</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="1479736066183315.png" alt="28.png" src="/upload/image/20161121/1479736066183315.png"/></p>
<p><span style="font-family:宋体">（</span>4<span style="font-family:宋体">）出现下面选择的时候我们要注意选择</span>URL<span style="font-family:宋体">方式</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="1479736072109132.png" alt="29.png" src="/upload/image/20161121/1479736072109132.png"/></p>
<p><span style="font-family:宋体">然后默认点击</span>OK<span style="font-family:宋体">，如下图所示：</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="1479736080816097.png" alt="30.png" src="/upload/image/20161121/1479736080816097.png"/></p>
<p><span style="font-family:宋体">（</span>5<span style="font-family:宋体">）在第一行输入地址，以下是安装</span>Redhat<span style="font-family:宋体">，如果是</span>Centos<span style="font-family:宋体">则将</span>redhat<span style="font-family:宋体">改为</span>centos<span style="font-family:宋体">即可，</span>ip<span style="font-family:宋体">地址填写</span>Amber_PXE<span style="font-family: 宋体">的</span>ip<span style="font-family:宋体">地址。然后点击</span>ok<span style="font-family:宋体">，之后就出现我们平常安装的界面了。</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="1479736099895104.png" alt="31.png" src="/upload/image/20161121/1479736099895104.png"/></p>
<p>&nbsp;</p>
<p><span style="font-size:14px;font-family: &#39;Calibri&#39;,sans-serif"><br /> </span> </p>
<p>&nbsp;</p>
<h1><a><span style="font-family:宋体">四、额外操作说明</span></a></h1>
<h2><a>1</a><span style="font-family:宋体">、安装</span>Amber_PXE<span style="font-family:宋体">到硬盘上。</span></h2>
<p><span style="font-family:宋体">（</span>1<span style="font-family:宋体">）只挂载一个新的硬盘，启动</span>Amber_PXE<span style="font-family:宋体">后，找到</span>tc-install<span style="font-family:宋体">，或者终端中</span>root<span style="font-family:宋体">身份运行</span>tc-install<span style="font-family:宋体">命令。</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="1479736107447487.png" alt="32.png" src="/upload/image/20161121/1479736107447487.png"/></p>
<p><span style="font-family:宋体">（</span>2<span style="font-family:宋体">）打开</span>tc-install<span style="font-family:宋体">界面</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="1479736113117657.png" alt="33.png" src="/upload/image/20161121/1479736113117657.png"/></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="1479736133109898.png" alt="34.png" src="/upload/image/20161121/1479736133109898.png"/></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="1479736141337455.png" alt="35.png" src="/upload/image/20161121/1479736141337455.png"/></p>
<p></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="1479736148135847.png" alt="36.png" src="/upload/image/20161121/1479736148135847.png"/></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="1479736163900138.png" alt="37.png" src="/upload/image/20161121/1479736163900138.png"/></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="1479736172261202.png" alt="38.png" src="/upload/image/20161121/1479736172261202.png"/></p>
<p><span style="font-family:宋体">（</span>3<span style="font-family:宋体">）打开终端，挂载新的磁盘。并创建目录和分配权限。</span></p>
<p style="text-align:center"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="1479736184115092.png" alt="39.png" src="/upload/image/20161121/1479736184115092.png"/></p>
<p><span style="font-family:宋体">（</span>4<span style="font-family:宋体">）重新启动</span>Amber_PXE,<span style="font-family:宋体">会自动挂载刚刚创建的分区。然后在</span>Windows<span style="font-family:宋体">的运行中输入</span></p>
<p><a href="file://amber/amberpxe">\\amber\amberpxe</a> <span style="font-family:宋体">回车，将</span>amberpxe<span style="font-family: 宋体">文件夹</span>.zip<span style="font-family:宋体">中所有文件拷贝到</span><a href="file://amber/amberpxe">\\amber\amberpxe</a><span style="font-family: 宋体">目录中</span></p>
<p><span style="font-family:宋体">（</span>5<span style="font-family:宋体">）事实证明上传完文件后还需要对</span>amberpxe<span style="font-family: 宋体">授权一次。用下面的命令。</span></p>
<p>chmod -R 777 /mnt/sda1/amberpxe</p>
<p><span style="font-family:宋体">（</span>6<span style="font-family:宋体">）关掉虚拟机，将</span>ISO<span style="font-family:宋体">卸载，即去掉</span>ISO<span style="font-family:宋体">加载方式。或者改为硬盘启动。</span></p>
<p><span style="font-family:宋体">（</span>7<span style="font-family:宋体">）实现硬盘安装并启动。</span></p>
<p><strong><span style="font-size:29px;line-height:240%;font-family:&#39;Calibri&#39;,sans-serif"><br /> </span></strong> </p>
<h1><a><span style="font-family:宋体">五、附件</span></a></h1>
<p><span style="font-family:宋体">全文中所提到的下载地址为：</span></p>
<p><span style="font-family:宋体">链接：</span><a href="http://pan.baidu.com/s/1md3Eu">http://pan.baidu.com/s/1md3Eu</a> &nbsp;<span style="font-family:宋体">密码：</span>bm9s</p>
<p></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/58" data-a2a-title="Amber_PXE使用说明书"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F58&amp;linkname=Amber_PXE%E4%BD%BF%E7%94%A8%E8%AF%B4%E6%98%8E%E4%B9%A6" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F58&amp;linkname=Amber_PXE%E4%BD%BF%E7%94%A8%E8%AF%B4%E6%98%8E%E4%B9%A6" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F58&amp;linkname=Amber_PXE%E4%BD%BF%E7%94%A8%E8%AF%B4%E6%98%8E%E4%B9%A6" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F58&amp;linkname=Amber_PXE%E4%BD%BF%E7%94%A8%E8%AF%B4%E6%98%8E%E4%B9%A6" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>							</div><!-- .entry-content -->

		<footer class="entry-meta">
							<span class="entry-date"><a href="http://www.geroro.com/archives/58" title="下午8:20" rel="bookmark"><time datetime="2016-11-03T20:20:22+00:00" pubdate>2016年11月3日</time></a></span>									<span class="comments-link"><a href="http://www.geroro.com/archives/58#comments"><b>1</b> 个回复</a></span>
								</footer><!-- #entry-meta -->
	</article><!-- #post-58 -->

	
	
					
						
	<article id="post-60" class="post-60 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-pxe tag-pxe">
		<header class="entry-header">
										<div class="entry-heading">
					<h2 class="entry-title"><a href="http://www.geroro.com/archives/60" rel="bookmark">AmberPXE2.0更新说明</a></h2>
					<h3 class="entry-format">推荐</h3>
				<div>
			
			<div class="entry-meta">
							</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-content">
					<h3 style="box-sizing: border-box; font-family: &#39;Helvetica Neue&#39;, Helvetica, Arial, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 24px; white-space: normal;"><span style="font-family: sans-serif; font-size: 16px;">近期闲于无事，将AmberPXE更新到2.0，主要增加一些工具。在实现原功能的基础上扩展Web功能。</span><br /></h3>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">增加的工具有PHP和MariaDB，以实现一个简易便携版的web服务器。也就是LAMP(Linux+Apache+Mysql+Php)架构的web式服务器。</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">亮点说明：实现mysql的数据文件在共享目录中</p>
<pre class="brush:as3;toolbar:false;" style="box-sizing: border-box; overflow: auto; font-family: Menlo, Monaco, Consolas, &#39;Courier New&#39;, monospace; font-size: 13px; padding: 9.5px; margin-top: 0px; margin-bottom: 10px; line-height: 1.42857; word-break: break-all; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); border-radius: 4px; background-color: rgb(245, 245, 245);">//amber/amberpxe/mysql/data</pre>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">目录下，加强数据的可编辑性和安全性，重启不丢失数据。</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">以下做图文详细说明。</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">1，关于PHP的版本和web测试</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="image.png" alt="image.png" src="/upload/image/20161103/1478174461469605.png"/></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="image.png" alt="image.png" src="/upload/image/20161103/1478174462662689.png"/></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">2、关于MariaDB版本和数据测试</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="image.png" alt="image.png" src="/upload/image/20161103/1478174462115699.png"/></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="image.png" alt="image.png" src="/upload/image/20161103/1478174462168426.png"/></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="image.png" alt="image.png" src="/upload/image/20161103/1478174463997777.png"/></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">3、测试实例wordpres博客安装</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">关于wordpress的安装这里不做说明，可以参考网上的教程。</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">将wordpres放置在目录</p>
<pre class="brush:html;toolbar:false" style="box-sizing: border-box; overflow: auto; font-family: Menlo, Monaco, Consolas, &#39;Courier New&#39;, monospace; font-size: 13px; padding: 9.5px; margin-top: 0px; margin-bottom: 10px; line-height: 1.42857; word-break: break-all; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); border-radius: 4px; background-color: rgb(245, 245, 245);">//amber/amberpxe/web</pre>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">目录下即可。页面访问需要用<a href="http://ip/web/wordpress" target="_self" style="box-sizing: border-box; color: rgb(51, 122, 183); text-decoration: none;">http://ip/web/wordpress</a>&nbsp;或者&nbsp;<a href="http://amber/web/wordpress" style="box-sizing: border-box; color: rgb(51, 122, 183); text-decoration: none;">http://amber/web/wordpress</a>&nbsp;&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" title="image.png" alt="image.png" src="/upload/image/20161103/1478174464120243.png"/></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">其他功能可参考原先的AmberPXE说明<a href="http://itgank.com/Home/Archive/amberpxe" style="box-sizing: border-box; color: rgb(51, 122, 183); text-decoration: none;"></a><a href="http://www.geroro.com/archives/60"></a><a href="http://www.geroro.com/archives/58">http://www.geroro.com/archives/58</a>&nbsp; 。</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">关于本次文件的下载地址为：</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">链接：<a href="http://pan.baidu.com/s/1o7Hwzqi" style="box-sizing: border-box; color: rgb(51, 122, 183); text-decoration: none;">http://pan.baidu.com/s/1o7Hwzqi</a>&nbsp; &nbsp;密码：ut94</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">如有相关问题，请联系QQ：729209820</p>
<p></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/60" data-a2a-title="AmberPXE2.0更新说明"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F60&amp;linkname=AmberPXE2.0%E6%9B%B4%E6%96%B0%E8%AF%B4%E6%98%8E" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F60&amp;linkname=AmberPXE2.0%E6%9B%B4%E6%96%B0%E8%AF%B4%E6%98%8E" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F60&amp;linkname=AmberPXE2.0%E6%9B%B4%E6%96%B0%E8%AF%B4%E6%98%8E" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F60&amp;linkname=AmberPXE2.0%E6%9B%B4%E6%96%B0%E8%AF%B4%E6%98%8E" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>							</div><!-- .entry-content -->

		<footer class="entry-meta">
							<span class="entry-date"><a href="http://www.geroro.com/archives/60" title="下午8:01" rel="bookmark"><time datetime="2016-11-03T20:01:09+00:00" pubdate>2016年11月3日</time></a></span>									<span class="comments-link"><a href="http://www.geroro.com/archives/60#respond"><span class="leave-reply">发表评论</span></a></span>
								</footer><!-- #entry-meta -->
	</article><!-- #post-60 -->

	
	
					
						
	<article id="post-56" class="post-56 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-pe tag-pe">
		<header class="entry-header">
										<div class="entry-heading">
					<h2 class="entry-title"><a href="http://www.geroro.com/archives/56" rel="bookmark">Amber_PE 使用手册</a></h2>
					<h3 class="entry-format">推荐</h3>
				<div>
			
			<div class="entry-meta">
							</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-content">
					<h3 style="box-sizing: border-box; font-family: &#39;Helvetica Neue&#39;, Helvetica, Arial, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 24px; white-space: normal;"><span style="color: inherit; font-family: inherit; font-size: 36px; line-height: 1.1;">一、前言</span><br /></h3>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 制作这个PE纯粹是个人爱好，不出于任何商业目的，网上有很多方便又好用的PE系统，但是总体而言，很难找到一个适合自己的，因为每个人总有那么些独特的需求，当然包括我也是这样的，另外还有针对自己的电脑而做的特别的改动，比如适合自己电脑的驱动等等，其实最重要的还是个人比较喜欢个性化的一些东西，比如美观的因素等等，基于种种原因，个人学习了许多大神的技术，整理大神们中个人认为比较好的工具整合了一个PE，就叫它Amber_PE吧。平常比较喜欢学习的论坛是无忧论坛<a href="http://bbs.wuyou.net/" style="box-sizing: border-box; color: rgb(51, 122, 183); text-decoration: none;">http://bbs.wuyou.net/</a>，里面还是学到了不少知识，另外还有天意的帮助教程<a href="http://www.winpe.cc/list-8-1.html" style="box-sizing: border-box; color: rgb(51, 122, 183); text-decoration: none;">http://www.winpe.cc/list-8-1.html</a>。有兴趣的朋友可以看看。</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">&nbsp;</p>
<h1 style="box-sizing: border-box; margin: 20px 0px 10px; font-size: 36px; font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit;">二、Amber_PE功能介绍</h1>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">1、Amber_PE和其他PE功能类似，在维护传统老机器，以及现在普及的UEFI启动新机器都可以适用，当然包括服务器类的都适用。</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">2、对于常见的维护电脑问题：安装系统，系统引导修复，系统密码破解，硬件诊断工具，磁盘分区工具，其他常见电脑问题。</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">3,、集成一些额外功能的小系统，比如破解WIFI密码的小盘OS。</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">4、集成mini性的办公系统RAM OS，内有office工具，teamviewer远程协助工具，其他自定义工具等等，有了此系统，完成日常的办公也是没有问题了。</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">5、对于绝大多数人比较头疼的电脑故障导致的数据丢失的问题，PE里面有恢复数据的工具，本人认为这是非常好的一个工具。毕竟数据价值大。</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">当然还有其他一些功能，不一一赘述了，下面看图片介绍。</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">&nbsp;</p>
<h1 style="box-sizing: border-box; margin: 20px 0px 10px; font-size: 36px; font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit;">三、图文说明</h1>
<h2 style="box-sizing: border-box; font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 30px;">3.1、启动界面，</h2>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">会根据电脑是BIOS启动还是UEFI启动区分开，</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1、BIOS启动界面：</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">说明，BIOS启动的设定是EASYBOOT制作的，里面有切换到g4d界面的选项。</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">主要放置个人比较喜欢的海贼9成员的logo，分别对应一个功能选项。</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" src="/upload/image/20161103/1478174274307763.jpg" title="clip_image002.jpg"/></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; text-align: center;">Easyboot启动界面</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">在G4D界面中，共有11个条目可以选择操作。</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" src="/upload/image/20161103/1478174275369341.jpg" title="clip_image004.jpg"/></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; text-align: center;">G4D启动界面</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; text-indent: 28px;">2、UEFI启动界面：</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" src="/upload/image/20161103/1478174275114369.jpg" title="clip_image006.jpg"/></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; text-align: center;">UEFI启动界面</p>
<h2 style="box-sizing: border-box; font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 30px;">3.2、功能说明</h2>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">以UEFI方式进入为例：</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" src="/upload/image/20161103/1478174275134960.jpg" title="clip_image008.jpg"/></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" src="/upload/image/20161103/1478174276440430.jpg" title="clip_image010.jpg"/></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" src="/upload/image/20161103/1478174276104321.jpg" title="clip_image012.jpg"/></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" src="/upload/image/20161103/1478174277608125.jpg" title="clip_image014.jpg"/></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" src="/upload/image/20161103/1478174278250401.jpg" title="clip_image016.jpg"/></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">破解wifi的小盘OS系统如下图所示：可自行尝试。</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" src="/upload/image/20161103/1478174278132124.jpg" title="clip_image018.jpg"/></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">老版系统的Win2003 PE界面</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" src="/upload/image/20161103/1478174279202120.jpg" title="clip_image020.jpg"/></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">&nbsp;</p>
<h1 style="box-sizing: border-box; margin: 20px 0px 10px; font-size: 36px; font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit;">四、安装制作教程</h1>
<h2 style="box-sizing: border-box; font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 30px;">4.1、工具</h2>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">ultraiso9.6.5便捷版高端写入1.0</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">常见工具PETOOLS打包</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">amber1.0.7.iso</p>
<h2 style="box-sizing: border-box; font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 30px;">4.2、制作过程</h2>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">（1）、打开ultraiso9.6.5便捷版高端写入1.0.exe，并点击打开amber1.0.7.iso</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" src="/upload/image/20161103/1478174279335604.jpg" title="clip_image022.jpg"/></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">（2）、点击启动，写入硬盘映像（注意先备份U盘资料，丢失不负责），然后选择图中的红色部分，最后点击写入即可。</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" src="/upload/image/20161103/1478174280392751.png" title="clip_image023.png"/></p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">（3）、制作完成后，可在U盘更目录下放入解压后的PETOOLS文件夹，以及再新建一个DIY文件夹，或者在建一个GHO文件夹，这些都是方便PE加载外部工具和ISO镜像文件用的，在安装操作系统的时候比较方便，另外安装完成上面的步骤后，U盘会减少1.5G的空间，因为这个空间安装了PE系统，并且隐藏起来了，这样可以区分日常U盘存储文件的功能，也可以防止PE被病毒入侵。U盘仍然可以正常使用。</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">（4）可以拿自己的电脑进行测试，或者下载vmware workstation和virtualbox等虚拟机软件进行测试。</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">&nbsp;</p>
<h1 style="box-sizing: border-box; margin: 20px 0px 10px; font-size: 36px; font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit;">五、下载链接</h1>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">链接：<a href="http://pan.baidu.com/s/1jIPlwTg" style="box-sizing: border-box; color: rgb(51, 122, 183); text-decoration: none;">http://pan.baidu.com/s/1jIPlwTg</a>&nbsp;&nbsp;密码：yeu2</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">另外需要定制这个个性化的背景等等。可以私我。可能会收取一定费用。</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">QQ：729209820</p>
<p></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/56" data-a2a-title="Amber_PE 使用手册"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F56&amp;linkname=Amber_PE%20%E4%BD%BF%E7%94%A8%E6%89%8B%E5%86%8C" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F56&amp;linkname=Amber_PE%20%E4%BD%BF%E7%94%A8%E6%89%8B%E5%86%8C" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F56&amp;linkname=Amber_PE%20%E4%BD%BF%E7%94%A8%E6%89%8B%E5%86%8C" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F56&amp;linkname=Amber_PE%20%E4%BD%BF%E7%94%A8%E6%89%8B%E5%86%8C" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>							</div><!-- .entry-content -->

		<footer class="entry-meta">
							<span class="entry-date"><a href="http://www.geroro.com/archives/56" title="下午7:58" rel="bookmark"><time datetime="2016-11-03T19:58:05+00:00" pubdate>2016年11月3日</time></a></span>									<span class="comments-link"><a href="http://www.geroro.com/archives/56#respond"><span class="leave-reply">发表评论</span></a></span>
								</footer><!-- #entry-meta -->
	</article><!-- #post-56 -->

	
	
					
						
	<article id="post-1044" class="post-1044 post type-post status-publish format-standard has-post-thumbnail hentry category-python tag-paramiko tag-python">
		<header class="entry-header">
									<h1 class="entry-title"><a href="http://www.geroro.com/archives/1044" rel="bookmark">python3+paramiko实现sftp上传文件和文件夹</a></h1>
			
			<div class="entry-meta">
							</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-content">
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;初学python，又初学paramiko，觉得paramiko的功能实在是太强大了。但是paramiko对于上传文件十分方便，对于上传文件夹却不行。这实在是有点鸡肋了。<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;为了解决这个问题，就用python3+paramiko编写了一个小脚本来实现既可以上传文件又可以上传文件夹的功能。！！<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;脚本内容如下：</p>
<pre class="brush:python;toolbar:false">import&nbsp;paramiko
import&nbsp;os,&nbsp;sys,&nbsp;datetime

port&nbsp;=&nbsp;22
hosts_file&nbsp;=&nbsp;&#39;remote_hosts.txt&#39;

#&nbsp;for循环读取所有远程服务器
def&nbsp;for_read_hosts(local_dir,remote_dir):
&nbsp;&nbsp;&nbsp;&nbsp;with&nbsp;open(hosts_file,&nbsp;encoding=&#39;UTF-8&#39;)&nbsp;as&nbsp;file_object:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contents&nbsp;=&nbsp;file_object.readlines()
&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;content&nbsp;in&nbsp;contents:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;line&nbsp;=&nbsp;content.rstrip().lstrip().split(&#39;;&#39;)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostip&nbsp;=&nbsp;line[0]
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;username&nbsp;=&nbsp;line[1]
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;password&nbsp;=&nbsp;line[2]
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostname&nbsp;=&nbsp;line[3]
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ssh&nbsp;=&nbsp;paramiko.SSHClient()
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ssh.set_missing_host_key_policy(paramiko.AutoAddPolicy())
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ssh.connect(hostname=hostip,&nbsp;username=username,&nbsp;password=password)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ftp&nbsp;=&nbsp;paramiko.Transport((hostip,&nbsp;port))
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ftp.connect(username=username,&nbsp;password=password)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sftp&nbsp;=&nbsp;paramiko.SFTPClient.from_transport(ftp)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;remote_dir_if(ssh,remote_dir)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subdir_OR_pardir(hostip,ssh,ftp,sftp,local_dir,&nbsp;remote_dir)

#&nbsp;判断远程目录是否存在
def&nbsp;remote_dir_if(ssh,&nbsp;remote_dir):
&nbsp;&nbsp;&nbsp;&nbsp;remote_dir_if&nbsp;=&nbsp;&#39;ls&nbsp;-d&nbsp;&#39;&nbsp;+&nbsp;remote_dir
&nbsp;&nbsp;&nbsp;&nbsp;stdin,&nbsp;stdout,&nbsp;stderr&nbsp;=&nbsp;ssh.exec_command(remote_dir_if)
&nbsp;&nbsp;&nbsp;&nbsp;result&nbsp;=&nbsp;stderr.read()
&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(len(result)&nbsp;!=0):
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;par_dir_mk&nbsp;=&nbsp;&#39;mkdir&nbsp;-p&nbsp;&#39;&nbsp;+&nbsp;remote_dir
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stdin,&nbsp;stdout,&nbsp;stderr&nbsp;=&nbsp;ssh.exec_command(par_dir_mk)

&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;判断是否需要上传父目录
def&nbsp;subdir_OR_pardir(hostip,ssh,ftp,sftp,local_dir,remote_dir):
&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(local_dir[-1]&nbsp;!=&nbsp;&#39;\\&#39;&nbsp;and&nbsp;local_dir[-1]&nbsp;!=&nbsp;&#39;/&#39;):
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t&nbsp;=&nbsp;upload_file_OR_dir(local_dir)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(&nbsp;t==local_dir&nbsp;):
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;upload_sub(hostip,ssh,ftp,sftp,local_dir,remote_dir)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;remote_only_file&nbsp;=&nbsp;remote_dir&nbsp;+&nbsp;t
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;remote_file_if(ssh,remote_only_file,local_dir,remote_dir)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sftp.put(local_dir,remote_only_file)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ssh.close()
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ftp.close()
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;except&nbsp;Exception&nbsp;as&nbsp;e:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print(e)
&nbsp;&nbsp;&nbsp;&nbsp;else:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;upload_par(hostip,ssh,ftp,sftp,local_dir,remote_dir)

#&nbsp;判断上传的是文件还是目录
def&nbsp;upload_file_OR_dir(local_dir):
&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(os.path.isfile(local_dir)):
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;file_only&nbsp;=&nbsp;os.path.split(local_dir)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;remote_file_only&nbsp;=&nbsp;file_only[1]
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;remote_file_only
&nbsp;&nbsp;&nbsp;&nbsp;else:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;local_dir

#&nbsp;上传父文件夹
def&nbsp;upload_par(hostip,ssh,ftp,sftp,local_dir,remote_dir):
&nbsp;&nbsp;&nbsp;&nbsp;local_dir&nbsp;=&nbsp;local_dir.rstrip(&#39;\\&#39;)
&nbsp;&nbsp;&nbsp;&nbsp;kk&nbsp;=&nbsp;local_dir.split(&#39;\\&#39;)
&nbsp;&nbsp;&nbsp;&nbsp;par_local_dir&nbsp;=&nbsp;kk[-1]
&nbsp;&nbsp;&nbsp;&nbsp;remote_dir&nbsp;=&nbsp;remote_dir&nbsp;+&nbsp;par_local_dir&nbsp;+&nbsp;&#39;/&#39;
&nbsp;&nbsp;&nbsp;&nbsp;print(&quot;!：判断远程目录&quot;&nbsp;+&nbsp;remote_dir&nbsp;+&nbsp;&quot;是否存在，存在则备份为后缀加&nbsp;&#39;_bak_时间&#39;&nbsp;的文件夹&quot;)
&nbsp;&nbsp;&nbsp;&nbsp;remote_dir_if(ssh,&nbsp;remote_dir)
&nbsp;&nbsp;&nbsp;&nbsp;upload_sub(hostip,ssh,ftp,sftp,local_dir,&nbsp;remote_dir)

#&nbsp;上传子文件夹和文件
def&nbsp;upload_sub(hostip,ssh,ftp,sftp,local_dir,remote_dir):
&nbsp;&nbsp;&nbsp;&nbsp;local_dir&nbsp;=&nbsp;local_dir.replace(&#39;\\&#39;,&nbsp;&#39;/&#39;)
&nbsp;&nbsp;&nbsp;&nbsp;remote_dir&nbsp;=&nbsp;remote_dir.replace(&#39;\\&#39;,&nbsp;&#39;/&#39;)
&nbsp;&nbsp;&nbsp;&nbsp;try:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print(&quot;!!：判断远程目录&quot;&nbsp;+&nbsp;remote_dir&nbsp;+&nbsp;&quot;下文件夹和文件是否存在，存在则备份为后缀加&nbsp;&#39;_bak_时间&#39;&nbsp;的文件夹或者文件&quot;)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sub_folders&nbsp;=&nbsp;listonlyDir_FisrtDir(local_dir)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sub_files&nbsp;=&nbsp;listonlyFile_FirstDir(local_dir)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;sub_folder&nbsp;in&nbsp;sub_folders:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sub_dir_if&nbsp;=&nbsp;&#39;ls&nbsp;-d&nbsp;&#39;&nbsp;+&nbsp;remote_dir&nbsp;+&nbsp;sub_folder
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stdin,&nbsp;stdout,&nbsp;stderr&nbsp;=&nbsp;ssh.exec_command(sub_dir_if)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;result1&nbsp;=&nbsp;stderr.read()
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(len(result1)==0):
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shell_dir_bak&nbsp;=&nbsp;&#39;mv&nbsp;&#39;&nbsp;+&nbsp;remote_dir&nbsp;+&nbsp;sub_folder.rstrip(&#39;/&#39;)&nbsp;+&nbsp;&#39;&nbsp;&#39;&nbsp;+&nbsp;remote_dir&nbsp;+&nbsp;sub_folder.rstrip(&#39;/&#39;)&nbsp;+&nbsp;&#39;_bak_`date&nbsp;+%Y%m%d_%H%M%S`&#39;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stdin,&nbsp;stdout,&nbsp;stderr&nbsp;=&nbsp;ssh.exec_command(shell_dir_bak)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print(stderr.read())
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;sub_file&nbsp;in&nbsp;sub_files:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sub_file_if&nbsp;=&nbsp;&#39;ls&nbsp;-f&nbsp;&#39;&nbsp;+&nbsp;remote_dir&nbsp;+&nbsp;sub_file
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stdin,&nbsp;stdout,&nbsp;stderr&nbsp;=&nbsp;ssh.exec_command(sub_file_if)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;result2&nbsp;=&nbsp;stderr.read()
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(len(result2)==0):
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shell_file_bak&nbsp;=&nbsp;&#39;mv&nbsp;&#39;&nbsp;+&nbsp;remote_dir&nbsp;+&nbsp;sub_file&nbsp;+&nbsp;&#39;&nbsp;&#39;&nbsp;+&nbsp;remote_dir&nbsp;+&nbsp;sub_file&nbsp;+&nbsp;&#39;_bak_`date&nbsp;+%Y%m%d_%H%M%S`&#39;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stdin,&nbsp;stdout,&nbsp;stderr&nbsp;=&nbsp;ssh.exec_command(shell_file_bak)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print(stderr.read())
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print(&#39;@主机&#39;&nbsp;+&nbsp;hostip&nbsp;+&nbsp;&#39;在&nbsp;%s&#39;&nbsp;%&nbsp;datetime.datetime.now()&nbsp;+&nbsp;&#39;&nbsp;时刻开始上传文件&#39;)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;root,&nbsp;dirs,&nbsp;files&nbsp;in&nbsp;os.walk(local_dir):
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;file&nbsp;in&nbsp;files:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local_file&nbsp;=&nbsp;os.path.join(root,&nbsp;file)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a&nbsp;=&nbsp;local_file.replace(local_dir,&nbsp;&#39;&#39;)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;remote_file&nbsp;=&nbsp;os.path.join(remote_dir,&nbsp;a.lstrip(&#39;\\&#39;).replace(&#39;\\&#39;,&nbsp;&#39;/&#39;))
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sftp.put(local_file,&nbsp;remote_file)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;except&nbsp;Exception&nbsp;as&nbsp;e:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sftp.mkdir(os.path.split(remote_file)[0])
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sftp.put(local_file,&nbsp;remote_file)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;name&nbsp;in&nbsp;dirs:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local_path&nbsp;=&nbsp;os.path.join(root,&nbsp;name)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a&nbsp;=&nbsp;local_path.replace(local_dir,&nbsp;&#39;&#39;)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;remote_path&nbsp;=&nbsp;os.path.join(remote_dir,&nbsp;a.lstrip(&#39;\\&#39;).replace(&#39;\\&#39;,&nbsp;&#39;/&#39;))
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sftp.mkdir(remote_path)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;except&nbsp;Exception&nbsp;as&nbsp;e:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print(e)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print(&#39;@主机&#39;&nbsp;+&nbsp;hostip&nbsp;+&nbsp;&#39;在&nbsp;%s&#39;&nbsp;%&nbsp;datetime.datetime.now()&nbsp;+&nbsp;&#39;&nbsp;时刻上传文件成功&#39;)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ssh.close()
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ftp.close()
&nbsp;&nbsp;&nbsp;&nbsp;except&nbsp;Exception&nbsp;as&nbsp;e:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print(e)

#&nbsp;判断远程文件是否存在，存在则备份
def&nbsp;remote_file_if(ssh,remote_only_file,local_dir,remote_dir):
&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(upload_file_OR_dir(local_dir)&nbsp;!=&nbsp;local_dir):
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print(&quot;!!：判断远程目录&quot;&nbsp;+&nbsp;remote_dir&nbsp;+&nbsp;&quot;下的文件是否存在，存在则备份为后缀加&nbsp;&#39;_bak_时间&#39;&nbsp;的文件&quot;)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sub_file_if&nbsp;=&nbsp;&#39;ls&nbsp;-f&nbsp;&#39;&nbsp;+&nbsp;remote_only_file
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stdin,&nbsp;stdout,&nbsp;stderr&nbsp;=&nbsp;ssh.exec_command(sub_file_if)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;result&nbsp;=&nbsp;stderr.read()
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(len(result)==0):
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shell_file_bak&nbsp;=&nbsp;&#39;mv&nbsp;&#39;&nbsp;+&nbsp;remote_only_file&nbsp;+&nbsp;&#39;&nbsp;&#39;&nbsp;+&nbsp;remote_only_file&nbsp;+&nbsp;&#39;_bak_`date&nbsp;+%Y%m%d_%H%M%S`&#39;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stdin,&nbsp;stdout,&nbsp;stderr&nbsp;=&nbsp;ssh.exec_command(shell_file_bak)

#&nbsp;获取一级目录下的所有文件夹
def&nbsp;listonlyDir_FisrtDir(local_dir):
&nbsp;&nbsp;&nbsp;&nbsp;dir_list&nbsp;=&nbsp;[]
&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(os.path.exists(local_dir)):
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;files&nbsp;=&nbsp;os.listdir(local_dir)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;file&nbsp;in&nbsp;files:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m&nbsp;=&nbsp;os.path.join(local_dir,&nbsp;file)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(os.path.isdir(m)):
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h&nbsp;=&nbsp;os.path.split(m)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dir_list.append(h[1])
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;dir_list

#&nbsp;获取一级目录下的所有文件
def&nbsp;listonlyFile_FirstDir(local_dir):
&nbsp;&nbsp;&nbsp;&nbsp;file_list&nbsp;=&nbsp;[]
&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(os.path.exists(local_dir)):
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;all_files&nbsp;=&nbsp;os.listdir(local_dir)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;all_file&nbsp;in&nbsp;all_files:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n&nbsp;=&nbsp;os.path.join(local_dir,&nbsp;all_file)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(os.path.isfile(n)):
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j&nbsp;=&nbsp;os.path.split(n)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;file_list.append(j[1])
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;file_list

if&nbsp;__name__&nbsp;==&nbsp;&#39;__main__&#39;:
&nbsp;&nbsp;&nbsp;&nbsp;print(&quot;1：注意，本地的路径最后加‘\’表示上传包括本地的路径；最后不加‘/’表示上传本地目录下的子文件夹和文件；远程的路径最后要加‘/’！！！&quot;)
&nbsp;&nbsp;&nbsp;&nbsp;print(&quot;2：该小脚本实现从Windows或者Linux主机上传文件包括目录到linux服务器上！！！&quot;)
&nbsp;&nbsp;&nbsp;&nbsp;print(&quot;3：请在同级目录下，新建远程主机列表文件remote_hosts.txt,每一列代表一个远程服务器&quot;)
&nbsp;&nbsp;&nbsp;&nbsp;print(&quot;4：每一列中元素以分号&#39;;&#39;分割，每一列的第一个填写ip，第二个填写登录用户名，第三个填写用户密码，第四个写远程主机hostname（可不填）&quot;)
&nbsp;&nbsp;&nbsp;&nbsp;local_dir&nbsp;=&nbsp;input(&quot;☆请输入本地需要上传文件或文件夹的路径：&quot;)
&nbsp;&nbsp;&nbsp;&nbsp;remote_dir&nbsp;=&nbsp;input(&quot;☆请输入远程需要上传的路径：&quot;)
&nbsp;&nbsp;&nbsp;&nbsp;#local_dir&nbsp;=&nbsp;&#39;E:\Python\paramiko\sftp&#39;
&nbsp;&nbsp;&nbsp;&nbsp;#remote_dir&nbsp;=&nbsp;&#39;/home/xudj/test/&#39;
&nbsp;&nbsp;&nbsp;&nbsp;for_read_hosts(local_dir,remote_dir)</pre>
<hr/>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;功能说明：<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1、实现上传文件到远程linux主机上；<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2、实现上传指定文件夹到远程linux主机上，注意本地文件夹路径最后要加&#39;/&#39;或者&#39;&#39;；<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3、实现上传指定文件夹下的子文件夹和文件到远程linux主机上，注意本地文件夹路径最后不要加&#39;/&#39;或者&#39;&#39;；</p>
<hr/>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;软件版本说明：<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1、python3.4.4<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2、paramiko2.2.1</p>
<hr/>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BUG说明：<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1、发现上传文件备份后会偶尔有不上传文件的时候</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其他BUG等待广大网友测试。欢迎留言评论。</p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/1044" data-a2a-title="python3+paramiko实现sftp上传文件和文件夹"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F1044&amp;linkname=python3%2Bparamiko%E5%AE%9E%E7%8E%B0sftp%E4%B8%8A%E4%BC%A0%E6%96%87%E4%BB%B6%E5%92%8C%E6%96%87%E4%BB%B6%E5%A4%B9" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F1044&amp;linkname=python3%2Bparamiko%E5%AE%9E%E7%8E%B0sftp%E4%B8%8A%E4%BC%A0%E6%96%87%E4%BB%B6%E5%92%8C%E6%96%87%E4%BB%B6%E5%A4%B9" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F1044&amp;linkname=python3%2Bparamiko%E5%AE%9E%E7%8E%B0sftp%E4%B8%8A%E4%BC%A0%E6%96%87%E4%BB%B6%E5%92%8C%E6%96%87%E4%BB%B6%E5%A4%B9" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F1044&amp;linkname=python3%2Bparamiko%E5%AE%9E%E7%8E%B0sftp%E4%B8%8A%E4%BC%A0%E6%96%87%E4%BB%B6%E5%92%8C%E6%96%87%E4%BB%B6%E5%A4%B9" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>							</div><!-- .entry-content -->

		<footer class="entry-meta">
							<span class="entry-date"><a href="http://www.geroro.com/archives/1044" title="下午9:28" rel="bookmark"><time datetime="2017-07-21T21:28:07+00:00" pubdate>2017年7月21日</time></a></span>									<span class="comments-link"><a href="http://www.geroro.com/archives/1044#respond"><span class="leave-reply">发表评论</span></a></span>
								</footer><!-- #entry-meta -->
	</article><!-- #post-1044 -->

	
	
					
						
	<article id="post-918" class="post-918 post type-post status-publish format-standard has-post-thumbnail hentry category-feel">
		<header class="entry-header">
									<h1 class="entry-title"><a href="http://www.geroro.com/archives/918" rel="bookmark">上了这套密码锁，你就无敌了</a></h1>
			
			<div class="entry-meta">
							</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-content">
					<p></p>
<h2 class="entry-title" style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 2.1875rem; line-height: 1.3; margin-bottom: 0.5em; word-wrap: break-word; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; text-align: center; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);"><a href="https://xqmblog.wordpress.com/2017/03/01/nb_pwd/" style="box-sizing: inherit; color: rgb(85, 85, 85); outline: 0px; text-decoration-line: none; box-shadow: rgba(83, 115, 117, 0.2) 0px -5px 0px 0px inset; background-color: transparent;">上了这套密码锁，你就无敌了</a></h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">按照重要性不同，我们把密码分成ABC三大类：</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);"><strong style="box-sizing: inherit;">A类</strong>：<strong style="box-sizing: inherit;">极客密码</strong>，比如银行账户、支付宝、重要邮件密码，以及涉及个人重要隐私的网盘、相册密码等，该类最烧脑，要各个不同。</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);"><strong style="box-sizing: inherit;">B类：高频密码</strong>，比如QQ、微博、FB等社交工具，以及经常登录的网站密码，该类使用频次高，又涉及个人隐私，建议至少提供3种以上的密码选择。</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);"><strong style="box-sizing: inherit;">C类：临时密码</strong>，对于一些临时或偶尔使用的网站，又无关利益，不需要特别记忆，统一标准就好。</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">按照个人癖好，我们先挑软的柿子捏。</p>
<h4 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.25rem; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">针对C类，在下的建议是：为了最简化，统一使用一种密码。</h4>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">比如自己所在城市，比如shanghai，beijing，或者母校的名字，如Harvard<a href="http://www.jianshu.com/writer#/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">，</a>Oxford或者偶像名字的全拼，如JJlinjunjie，fanbingbing。</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">关键是要统一，当然必要时可以临时再注册或者忘记密码。</p>
<h4 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.25rem; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">针对B类，一句话就能搞定。</h4>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">比如Gwyb82ndlf（给我一杯82年的拉菲）</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">这句话可以从座右铭、歌词、吐槽、台词、名言等地方寻找，但尽量要长点。</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">比如座右铭：</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">Wwjylhnsgzjlddf（万物皆有裂痕，那是光照进来的地方）</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">Sybrrwyrblsy（岁月不饶人，我亦饶不了岁月）</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">Tcs99%dhsjs1%dlg（天才是99%的汗水，加上1%的灵感）</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">&nbsp;</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">漂亮得不像话的歌词：</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">Wdsdmdmjm（无敌是多么多么寂寞——《无敌》）</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">Chysxttlac（沧海一声笑，滔滔两岸潮——《沧海一声笑》）</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">&nbsp;</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">经典台词：</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">Shjxqklnyybhzdxymhddsm（生活就像巧克力,你永远不会知道下一秒你会得到什么——《阿甘正传》）</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">Nnbwbyhx（念念不忘，必有回响。——《一代宗师》）</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">Fuck and Son of a bitch（各种美剧里）</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">&nbsp;</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">神吐槽：</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">Rqsdgsrfhxwa（人穷啥都干，杀人放火写文案）</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">Yiwsjqrftrjjqswrft（以前，我视金钱如粪土；如今，金钱视我如粪土。）</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">Xshswwynzldsh（性生活是我唯一能自理的生活）</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">&nbsp;</p>
<h4 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.25rem; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">当然，字母+数字才是绝配，否则就像大龄青年找不到对象一样，让人有点小尴尬。</h4>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">数字的话，如果你坚持使用生日，也没有问题，可以把生日放入那一串的前面、后面或中间，如Wdsdmdmjm19900308。</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">当然，除了生日外，还有身高、门牌号、电话号、车牌号、纪念日等数字可供选择。（体重就算了）</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">&nbsp;</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">如想再加密，可以把自己的幸运数字变成特殊符号，“shift+5”=“%”，把其中数字5替换成%。</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">到这里的话，针对B类的基本够用。但是切记一点，不要用自己的口头语做密码，否则不定哪天醉酒，你就当笑话公之于众了。</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);"  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" class="alignnone size-full wp-image-242" src="https://xqmblog.files.wordpress.com/2017/03/wd.jpg?w=584" alt="wd" data-recalc-dims="1"/></p>
<h4 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.25rem; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">针对A类，一般建议“数字+字母+特殊符号”都包括，有的还自带特殊加密，当然，这个主要看专长。</h4>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">&nbsp;</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">学化学的会利用方程式，比如3Cu+8HNO3=3Cu(NO3)2+2NO+4H2O。</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">学音乐的会利用音乐简谱，比如《同桌的你》的简谱：555-576-440-444-432-110</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">学中文的会用诗词，比如ppnn13%<span class="skimlinks-unlinked" style="box-sizing: inherit;">dkstFeb.1st（娉娉袅袅十三余，豆蔻梢头二月初），“停车坐爱枫林晚，霜叶红于二月花”则是一个公式（tcmlflw,syred&gt;Febhua</span></p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">最装逼的是在密码里编入自己的故事，美其名曰：“设计密码最重要的是，让密码体现你作为一个人的独特本体！”。（好吧，我服了。）</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">现身说法：5670754（儿时电话）+Sww（小学暗恋的女孩名字）+<a href="http://www.jianshu.com/writer#/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">499</a>（中考分数）+24（高中名）+history（大学专业）+***（工资是秘密）结果就是5670754Sww49924history***。</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">&nbsp;</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">通过以上方法，如果你还坚持用生日裸奔，在下只能说“施主，你高兴就好”。</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">当然，密码设置好还不算完，别忘了要备份。</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">相信我，别太高估自己的智商。</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">除非你有杨过的记忆力+李寻欢的自控力，才能说说这大话。</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);">否则自己何苦为难自己。</p>
<hr/>
<p></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/918" data-a2a-title="上了这套密码锁，你就无敌了"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F918&amp;linkname=%E4%B8%8A%E4%BA%86%E8%BF%99%E5%A5%97%E5%AF%86%E7%A0%81%E9%94%81%EF%BC%8C%E4%BD%A0%E5%B0%B1%E6%97%A0%E6%95%8C%E4%BA%86" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F918&amp;linkname=%E4%B8%8A%E4%BA%86%E8%BF%99%E5%A5%97%E5%AF%86%E7%A0%81%E9%94%81%EF%BC%8C%E4%BD%A0%E5%B0%B1%E6%97%A0%E6%95%8C%E4%BA%86" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F918&amp;linkname=%E4%B8%8A%E4%BA%86%E8%BF%99%E5%A5%97%E5%AF%86%E7%A0%81%E9%94%81%EF%BC%8C%E4%BD%A0%E5%B0%B1%E6%97%A0%E6%95%8C%E4%BA%86" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F918&amp;linkname=%E4%B8%8A%E4%BA%86%E8%BF%99%E5%A5%97%E5%AF%86%E7%A0%81%E9%94%81%EF%BC%8C%E4%BD%A0%E5%B0%B1%E6%97%A0%E6%95%8C%E4%BA%86" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>							</div><!-- .entry-content -->

		<footer class="entry-meta">
							<span class="entry-date"><a href="http://www.geroro.com/archives/918" title="上午11:03" rel="bookmark"><time datetime="2017-07-02T11:03:39+00:00" pubdate>2017年7月2日</time></a></span>									<span class="comments-link"><a href="http://www.geroro.com/archives/918#respond"><span class="leave-reply">发表评论</span></a></span>
								</footer><!-- #entry-meta -->
	</article><!-- #post-918 -->

	
	
					
						
	<article id="post-878" class="post-878 post type-post status-publish format-standard has-post-thumbnail hentry category-php tag-php">
		<header class="entry-header">
									<h1 class="entry-title"><a href="http://www.geroro.com/archives/878" rel="bookmark">Github上PHP资源汇总大全，php学习的好资料</a></h1>
			
			<div class="entry-meta">
							</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-content">
					<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);"><strong style="box-sizing: inherit;">Github上PHP资源汇总大全，php学习的好资料</strong></p>
<p style="box-sizing: inherit; margin-bottom: 1.5em; margin-top: 0px; padding-top: 0px; color: rgb(119, 119, 119); font-family: Lato, &quot;Helvetica Neue&quot;, helvetica, arial, sans-serif; font-size: 18px; line-height: 25.92px; white-space: normal; widows: 1; background-color: rgba(255, 255, 255, 0.953);"><strong style="box-sizing: inherit;">国外程序员ziadoz 在Github上收集整理了PHP的各种资源，内容包括模板、框架、数据库、安全等方面的库和工具。汇总了各种PHP资源，供各位PHP学习者和程序员参考。</strong><br /><strong style="box-sizing: inherit;">英文原文：<span class="skimlinks-unlinked" style="box-sizing: inherit;">https://github.com/ziadoz/awesome-php</span></strong></p>
<table class="text-content" width="660">
<tbody style="box-sizing: inherit;">
<tr class="firstRow" style="box-sizing: inherit;">
<td valign="top" width="487" style="box-sizing: inherit; padding: 0.5em; font-size: 16.2px;">
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">依赖管理</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——用于依赖管理的包和框架<br /><a href="http://getcomposer.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Composer</a>/<a href="http://packagist.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Packagist</a>&nbsp;:&nbsp;一个包和依赖管理器<br /><a href="https://github.com/composer/installers" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Composer Installers</a>:&nbsp;&nbsp;一个多框架Composer库安装器<br /><a href="https://github.com/FriendsOfPHP/pickle" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Pickle</a>: 可以在任意平台上安装PHP扩展包</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">静态站点生成器</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——生成Web页面内容的预处理工具<br /><a href="http://sculpin.io/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Sculpin</a>: &nbsp;将Markdown和Twig转换为静态HTML的工具<br /><a href="http://phrozn.info/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Phrozn</a>: 另一款将Textile、Markdown和Twig转为HTML的工具</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">框架</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——Web开发框架<br /><a href="http://symfony.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Symfony2</a>&nbsp;:&nbsp;由独立组件构成的框架<br /><a href="http://framework.zend.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Zend Framework 2</a>: 同样是由独立组件构成的框架<br /><a href="http://laravel.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Laravel 4</a>: 简洁优雅的PHP&nbsp;Web开发框架<br /><a href="http://auraphp.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Aura PHP</a>: &nbsp;独立组件的框架<br /><a href="https://github.com/yiisoft/yii2/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Yii2</a>&nbsp;:&nbsp;用于开发大型Web应用的高性能PHP框架<br /><a href="http://nette.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Nette</a>:&nbsp;&nbsp;同样是由独立组件构成的框架<br /><a href="http://www.ppi.io/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PPI Framework 2</a>: 一个交互性的框架<br /><a href="http://phalconphp.com/en/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Phalcon</a>: 一个作为C扩展的框架</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">微型框架</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——微型框架和路由<br /><a href="http://silex.sensiolabs.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Silex</a>: 基于Symphony2组件的微型框架<br /><a href="http://www.slimframework.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Slim</a>:&nbsp;&nbsp;另一个简单的微型框架<br /><a href="http://bulletphp.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Bullet PHP</a>: &nbsp;用于构建REST&nbsp;APIs的微型框架<br /><a href="https://github.com/nikic/FastRoute" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Fast Route</a>: &nbsp;快速路由选择库<br /><a href="https://github.com/c9s/Pux" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Pux</a>: 另一个快速路由选择库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">模板</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——模板和词法分析的库与工具<br /><a href="http://twig.sensiolabs.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Twig</a>: 一种综合的模板语言<br /><a href="https://github.com/asm89/twig-cache-extension" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Twig Cache Extension</a>: 用于Twig的模板片段缓存库<br /><a href="https://github.com/bobthecow/mustache.php" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Mustache</a>: PHP实现的Mustache模板语言<br /><a href="https://github.com/weierophinney/phly_mustache" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Phly Mustache</a>: 另一个PHP实现的Mustache模板语言<br /><a href="https://github.com/arnaud-lb/MtHaml" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">MtHaml</a>&nbsp;:&nbsp;PHP实现的HAML模板语言<br /><a href="http://phptal.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHPTAL</a>: PHP实现的TAL模板语言<br /><a href="http://platesphp.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Plates</a>: 一个原始的PHP模板库<br /><a href="https://github.com/pyrocms/lex" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Lex</a>: 一个轻量级模板解析器</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">持续集成</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——持续集成的库和应用<br /><a href="https://travis-ci.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Travis CI</a>: 一个持续集成的平台<br /><a href="http://www.phptesting.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHPCI</a>: 一个PHP的开源持续集成平台<br /><a href="http://sismo.sensiolabs.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Sismo</a>: 一个持续的测试服务器库<br /><a href="http://jenkins-ci.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Jenkins</a>: PHP支持的持续集成平台<br /><a href="https://github.com/jolicode/JoliCi" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">JoliCi</a>: PHP开发的由Docker支持的持续集成客户端</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">文件</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——关于文件处理和MIME类型检查<br /><a href="https://github.com/KnpLabs/Gaufrette" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Gaufrette</a>:&nbsp;&nbsp;一个文件流的抽象层<br /><a href="https://github.com/FrenkyNet/Flysystem" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Flysystem</a>:&nbsp;&nbsp;另一个文件流的抽象层<br /><a href="https://github.com/dflydev/dflydev-canal" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Canal</a>: 一个检查互联网媒体类型的库<br /><a href="https://github.com/dflydev/dflydev-apache-mime-types" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Apache MIME Types</a>: 一个解析Apache&nbsp;MIME类型的库<br /><a href="https://github.com/versionable/Ferret" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Ferret</a>:&nbsp;&nbsp;一个MIME检测库<br /><a href="https://github.com/hoaproject/Mime" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Hoa Mime</a>: 另一个MIME检测库<br /><a href="https://github.com/henrikbjorn/Lurker" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Lurker</a>: 一个资源跟踪库<br /><a href="https://github.com/herrera-io/php-file-locator" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP File Locator</a>: 一个在大型项目中定位文件的库<br /><a href="https://github.com/alchemy-fr/PHP-FFmpeg/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP FFmpeg</a>:&nbsp;&nbsp;一个用于FFmpeg视频包装的库<br /><a href="https://github.com/nyamsprod/Bakame.csv" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">CSV</a>: 一个CSV数据操作库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;"></h2>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">测试</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——测试代码库和生成测试数据的库<br /><a href="https://github.com/sebastianbergmann/phpunit" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHPUnit</a>: 一个单元测试框架<br /><a href="https://github.com/sebastianbergmann/dbunit" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">DBUnit</a>:&nbsp;&nbsp;PHPUnit的代码测试库<br /><a href="https://github.com/brianium/paratest" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">ParaTest</a>: PHPUnit的并行测试库<br /><a href="https://github.com/phpspec/phpspec" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHPSpec</a>: 根据规范的单元测试库<br /><a href="https://github.com/Codeception/Codeception" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Codeception</a>: 一个全栈测试框架<br /><a href="https://github.com/Codeception/AspectMock" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">AspectMock</a>: PHPUnit/Codeception的模拟框架<br /><a href="https://github.com/atoum/atoum" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Atoum</a>: 一个简单的测试库<br /><a href="https://github.com/padraic/mockery" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Mockery</a>: 一个用于测试的模拟对象库<br /><a href="https://github.com/mlively/Phake" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Phake</a>: 另一个用于测试的模拟对象库<br /><a href="https://github.com/phpspec/prophecy" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Prophecy</a>: 一个强大的模拟框架<br /><a href="https://github.com/fzaninotto/Faker" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Faker</a>: 一个伪数据生成库<br /><a href="https://github.com/mauris/samsui" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Samsui</a>: 另一个伪数据生成库<br /><a href="https://github.com/nelmio/alice" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Alice</a>: 用于生成复杂数据的库<br /><a href="http://behat.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Behat</a>: 一个行为驱动开发（BDD）的测试框架<br /><a href="https://github.com/danielstjules/pho" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Pho</a>: 另一个行为驱动开发的测试框架<br /><a href="http://mink.behat.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Mink</a>: Web验收测试<br /><a href="https://github.com/InterNations/http-mock" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">HTTP Mock</a>: 一个在单元测试中模拟HTTP请求的库<br /><a href="https://github.com/mikey179/vfsStream" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">VFS Stream</a>: 一个用于测试的虚拟文件系统流包装<br /><a href="https://github.com/adlawson/vfs.php" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">VFS</a>: 另一个用于测试的虚拟文件系统<br /><a href="http://locust.io/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Locust</a>: 一个Python开发的现代负载测试库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">密码</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——处理和存储密码的库和工具<br /><a href="https://github.com/ircmaxell/password_compat" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Password Compat</a>: 一个用于新的PHP5.5密码功能的兼容库<br /><a href="http://www.openwall.com/phpass/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">phpass</a>: 一个便携式密码哈希框架<br /><a href="https://github.com/ircmaxell/PHP-PasswordLib" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Password Lib</a>: 一个用于生成和验证密码的库<br /><a href="https://github.com/ircmaxell/password-policy" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Password Policy</a>: 一个PHP和JavaScript的密码规则库<br /><a href="https://github.com/jeremykendall/password-validator" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Password Validator</a>: 验证和升级密码哈希的库<br /><a href="https://github.com/bjeavons/zxcvbn-php" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Zxcvbn PHP</a>: 一个基于Zxcvbn&nbsp;JS的PHP显示密码强度估计库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">代码分析</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——用于分析、解析和操作代码库的工具<br /><a href="https://github.com/nikic/PHP-Parser" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Parser</a>: 一个PHP编写的PHP解析器<br /><a href="https://github.com/ircmaxell/PHPPHP" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHPPHP</a>: 一个PHP实现的PHP虚拟机<br /><a href="https://github.com/fieryprophet/php-sandbox" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHPSandbox</a>: PHP的沙盒环境<br /><a href="https://github.com/jakubledl/dissect" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Dissect</a>: 词法和语法分析的工具集合<br /><a href="http://phpmd.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Mess Detector</a>: 一个扫描代码bug、次佳代码和未使用参数的库<br /><a href="https://github.com/squizlabs/PHP_CodeSniffer" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Code Sniffer</a>: 一个检测PHP、CSS和JS代码标准冲突的库<br /><a href="https://github.com/sebastianbergmann/phpcpd" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHPCPD</a>: 一个检测复制和粘贴代码的库<br /><a href="https://github.com/scrutinizer-ci/php-analyzer" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Analyser</a>: 一个分析PHP代码中错误的库<br /><a href="https://github.com/fabpot/PHP-CS-Fixer" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP CS Fixer</a>: 一个代码标准库<br /><a href="https://github.com/schmittjoh/php-manipulator" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Manipulator</a>: 用于分析和修改PHP源代码的库<br /><a href="https://github.com/Halleck45/PhpMetrics" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Metrics</a>: 一个静态测量库<br /><a href="https://github.com/QafooLabs/php-refactoring-browser" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Refactoring Browser</a>: 一个用于重构PHP代码的命令行工具<br /><a href="https://github.com/devster/ubench" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">UBench</a>: 一个简单的小型基准测试库<br /><a href="https://github.com/polyfractal/athletic" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Athletic</a>: 一个基于标注的基准测试库<br /><a href="https://github.com/Trismegiste/Mondrian" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Mondrian</a>: 使用图论的代码分析工具<br /><a href="https://scrutinizer-ci.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Scrutinizer</a>: 检查PHP代码的Web工具<br /><a href="https://github.com/sebastianbergmann/phploc" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHPLOC</a>: 一个快速评估PHP项目大小的工具<br /><a href="https://github.com/phacility/xhprof" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">xHprof</a>: 另一个PHP性能评测工具<br /><a href="https://github.com/jbrooksuk/phpcheckstyle" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHPCheckstyle</a>: 一个帮助遵守特定代码规则的工具</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">资源管理</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——用于管理、压缩和最小化网站资源的工具<br /><a href="https://github.com/kriswallsmith/assetic" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Assetic</a>: 一个资源管理的管道库<br /><a href="https://github.com/CHH/pipe" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Pipe</a>: 另一个资源管理的管道库<br /><a href="https://github.com/meenie/munee" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Munee</a>: 一个资源优化库<br /><a href="https://github.com/tedivm/JShrink" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">JShrink</a>: 一个JavaScript的最小化库<br /><a href="https://github.com/webmozart/puli" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Puli</a>: 一个检测资源绝对路径的库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">地理定位</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——使用经纬度编码地址的库<br /><a href="http://geocoder-php.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">GeoCoder</a>: 一个地理编码库</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em;"><a href="https://github.com/php-loep/Geotools" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">GeoTools</a>: 一个地理工具相关的库</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em;"><a href="https://github.com/mjaschen/phpgeo" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHPGeo</a>: 一个简单的地理库<br /><a href="https://github.com/jmikola/geojson" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">GeoJSON</a>: 一个GeoJSON的实现</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">日期和时间</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——处理日期和时间的库<br /><a href="https://github.com/briannesbitt/Carbon" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Carbon</a>: 一个简单的日期时间API扩展<br /><a href="https://github.com/jasonlewis/expressive-date" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">ExpressiveDate</a>: 另一个日期时间API扩展<br /><a href="http://yohan.giarel.li/CalendR" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">CalendR</a>: 一个日历管理的库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">事件</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——事件驱动或非阻塞事件循环实现的库<br /><a href="https://github.com/reactphp/react" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">React</a>: 一个事件驱动的非阻塞I/O库<br /><a href="https://github.com/asm89/Rx.PHP" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Rx.PHP</a>: 一个反应扩展库<br /><a href="https://github.com/cboden/Ratchet" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Ratchet</a>: 一个Web套接字库<br /><a href="https://github.com/hoaproject/Websocket" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Hoa WebSocket</a>: 另一个Web套接字库<br /><a href="https://github.com/hoaproject/Eventsource" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Hoa EventSource</a>: 一个事件源库<br /><a href="https://github.com/igorw/evenement" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Evenement</a>: 一个事件调度库<br /><a href="https://github.com/fuelphp/event" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">FuelPHP Event</a>: 另一个事件调度库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">迁移</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——用于管理数据库模式和迁移的库<br /><a href="https://github.com/davedevelopment/phpmig" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHPMig</a>: 一个迁移管理库<br /><a href="https://github.com/robmorgan/phinx" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Phinx</a>: 一个数据库迁移管理库<br /><a href="https://github.com/icomefromthenet/Migrations" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Migrations</a>: 另一个迁移管理库<br /><a href="http://docs.doctrine-project.org/projects/doctrine-migrations/en/latest/toc.html" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Doctrine Migrations</a>: 用于Doctrine的迁移库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">NoSQL</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——处理NoSQL后端的库<br /><a href="https://github.com/alexbilbie/MongoQB" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">MongoQB</a>: 一个MongoDB的查询构建库<br /><a href="https://github.com/thephpleague/monga" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Monga</a>: 一个MongoDB的抽象库<br /><a href="https://github.com/nrk/predis" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Predis</a>: 一个功能完全的Redis库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">队列</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——处理事件和任务队列的库<br /><a href="https://github.com/pda/pheanstalk" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Pheanstalk</a>: 一个Beanstalkd客户端库<br /><a href="https://github.com/videlalvaro/php-amqplib" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP AMQP</a>: 一个纯PHP&nbsp;AMQP库<br /><a href="https://github.com/videlalvaro/Thumper" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Thumper</a>: 一个RabbitMQ模式库<br /><a href="https://github.com/bernardphp/bernard" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Bernard</a>: 一个多后端的抽象库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">搜索</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——在数据中建立索引和执行查询相关的库和软件<br /><a href="https://github.com/elasticsearch/elasticsearch-php" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">ElasticSearch PHP</a>: 用于ElasticSearch的官方客户端库<br /><a href="https://github.com/ruflin/Elastica" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Elastica</a>: 另一个ElasticSearch的客户端库<br /><a href="http://www.solarium-project.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Solarium</a>: Solr的客户端库<br /><a href="http://foolcode.github.io/SphinxQL-Query-Builder/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">SphinxQL query builder</a>: Sphinx搜索引擎的查询库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">命令行</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——构建命令行工具的库<br /><a href="https://github.com/d11wtq/boris" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Boris</a>: 一个微型的PHP&nbsp;REPL<br /><a href="https://github.com/bobthecow/psysh" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PsySH</a>: 另一个PHP&nbsp;REPL<br /><a href="https://github.com/mcrumm/pecan" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Pecan</a>: 一个事件驱动，非阻塞内核<br /><a href="https://github.com/ulrichsg/getopt-php" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">GetOpt</a>: 一个命令行选择解析器<br /><a href="https://github.com/CHH/optparse" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">OptParse</a>: 另一个命令行选择解析器<br /><a href="https://github.com/nategood/commando" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Commando</a>:&nbsp;一个简单的命令行选择解析器<br /><a href="https://github.com/c9s/php-GetOptionKit" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">GetOptionKit</a>: 同样还是一个命令行选择解析器<br /><a href="https://github.com/mtdowling/cron-expression" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Cron Expression</a>: 计算cron运行日期的库<br /><a href="https://github.com/MrRio/shellwrap" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">ShellWrap</a>: 一个简单的命令行包装库<br /><a href="https://github.com/hoaproject/Console" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Hoa Console</a>: 另一个命令行库<br /><a href="https://github.com/php-loep/shunt" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Shunt</a>: 一个在多台远程机器上并行运行的命令行库<br /><a href="https://github.com/Cilex/Cilex" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Cilex</a>: 构建命令行工具的小型框架</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">身份验证</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——实现身份验证模式的库<br /><a href="https://github.com/cartalyst/sentry" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Sentry</a>: 一个身份验证和授权的框架<br /><a href="http://docs.cartalyst.com/sentry-social-2/introduction" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Sentry Social</a>: 一个用于社交网络身份验证的库<br /><a href="https://github.com/opauth/opauth" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Opauth</a>: 一个多供应的身份验证框架<br /><a href="https://github.com/php-loep/oauth2-server" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">OAuth2</a>: 一个OAuth2身份验证服务器、资源服务器和客户端库<br /><a href="http://bshaffer.github.io/oauth2-server-php-docs/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">OAuth2 Server</a>: 一个OAuth2服务器实现<br /><a href="https://github.com/Lusitanian/PHPoAuthLib" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP oAuthLib</a>: 另一个OAuth库<br /><a href="https://github.com/ruudk/twitteroauth" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">TwitterOAuth</a>: 同样是一个OAuth库<br /><a href="https://github.com/lyrixx/twitter-sdk" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">TwitterSDK</a>: 一个经过完全测试的Twitter&nbsp;SDK<br /><a href="https://github.com/dflydev/dflydev-hawk" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Hawk</a>: 一个Hawk&nbsp;HTTP身份验证库<br /><a href="https://github.com/hybridauth/hybridauth" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">HybridAuth</a>: 一个开源的社交登录库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">数据结构和存储</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——实现数据结构和存储技术的库<br /><a href="https://github.com/morrisonlevi/Ardent" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Ardent</a>: 一个数据结构库<br /><a href="https://github.com/schmittjoh/php-collection" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Collections</a>: 一个简单的集合库<br /><a href="https://github.com/schmittjoh/serializer" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Serializer</a>: 用于序列化和反序列化数据的库</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em;"><a href="https://github.com/herrera-io/php-object-storage" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Object Storage</a>: 一个用于对象存储的库</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em;"><a href="https://github.com/php-loep/fractal" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Fractal</a>: 一个将复杂数据结构转换为JSON输出的库</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em;"><a href="http://github.com/Wisembly/Totem" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Totem</a>: 一个管理和创建数据修改集的库</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em;"><a href="https://github.com/TimeToogo/Pinq" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PINQ</a>: PHP实时Linq库<br /><a href="https://github.com/netresearch/jsonmapper" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">JsonMapper</a>: 一个将内嵌JSON结构映射到PHP类上的库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">通知</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——关于通知软件的库<br /><a href="https://github.com/filp/nod" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Nod</a>: 一个通知库<br /><a href="https://github.com/wrep/notificato" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Notificato</a>: 一个处理推送消息的库<br /><a href="https://github.com/Ph3nol/NotificationPusher" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Notification Pusher</a>: 设备推送通知的独立库<br /><a href="https://github.com/namshi/notificator" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Notificator</a>: 一个轻量级通知库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">部署</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——用于项目部署的库<br /><a href="https://github.com/tamagokun/pomander" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Pomander</a>: 一个PHP应用的部署工具<br /><a href="https://github.com/Anahkiasen/rocketeer" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Rocketeer</a>: PHP的快速和简单部署器<br /><a href="https://github.com/laravel/envoy" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Envoy</a>: 使用PHP运行SSH任务的工具<br /><a href="https://github.com/aerialls/Plum" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Plum</a>: 一个部署库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">集成开发环境IDE</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——支持PHP的集成开发环境<br /><a href="https://netbeans.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Netbeans</a>: 支持PHP和HTML5的IDE环境<br /><a href="https://www.eclipse.org/downloads/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Eclipse for PHP Developers</a>&nbsp;: 基于Eclipse平台的PHP&nbsp;IDE<br /><a href="http://www.jetbrains.com/phpstorm/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PhpStorm</a>&nbsp;: 商业PHP&nbsp;IDE</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">Web应用</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——基于Web的应用和工具<br /><a href="http://3v4l.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">3V4L</a>: 一个在线的PHP内核<br /><a href="http://dbv.vizuina.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">DBV</a>: 一个数据库版本控制应用<br /><a href="https://github.com/CoderKungfu/php-queue" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Queue</a>: 一个管理队列后端的应用<br /><a href="http://composer.borreli.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Composer as a Service</a>: 作为一个zip文件下载Composer包的工具<br /><a href="https://github.com/sj26/mailcatcher" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">MailCatcher</a>: 一个抓取和浏览邮件的Web工具</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">开发环境</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;"><a href="http://www.vagrantup.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Vagrant</a>: 一个便携式的开发环境工具<br /><a href="http://www.ansibleworks.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Ansible</a>: 一个非常简单的编制框架<br /><a href="http://puppetlabs.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Puppet</a>: 一个服务器自动化框架和应用<br /><a href="https://puphpet.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PuPHPet</a>: 用于构建PHP开发虚拟机的Web工具<br /><a href="http://getprotobox.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Protobox</a>: 另一个用于构建PHP开发虚拟机的Web工具<br /><a href="http://phansible.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Phansible</a>: 一个用Ansible构建PHP开发开发虚拟机的Web工具</p>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">&nbsp;</p>
</td>
<td valign="top" width="487" style="box-sizing: inherit; padding: 0.5em; font-size: 16.2px;">
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">依赖管理的附加部分</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——其它依赖管理的相关工具<br /><a href="https://github.com/composer/satis" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Satis</a>&nbsp;: 静态的Composer库生成器<br /><a href="https://github.com/bamarni/composition" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Composition</a>: 一个运行时检查Composer环境的库<br /><a href="https://github.com/herrera-io/php-version" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Version</a>&nbsp;: 一个在语义上分析和比较的库<br /><a href="https://github.com/ralphschindler/Namespacer" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">NameSpacer</a>&nbsp;: 将下划线转为命名空间的库<br /><a href="https://github.com/goatherd/patch-installer" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Patch Installer</a>: 使用Composer安装补丁的库<br /><a href="https://github.com/silpion/composer-checker" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Composer Checker</a>: 一个验证Composer配置的工具</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">流</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——处理流的库<br /><a href="https://github.com/fzaninotto/Streamer" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Streamer</a>: 一个简单的面向对象流包装库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">框架的附加部分</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——其它关于Web开发框架的相关工具<br /><a href="https://github.com/symfony-cmf/symfony-cmf" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Symfony CMF</a>: 一个创建自定义CMS的内容管理框架<br /><a href="http://rad.knplabs.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Knp RAD Bundle</a>: Symfony2的快速应用程序包（RAD）</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">框架组件</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——来自Web开发框架的组件<br /><a href="http://symfony.com/doc/master/components/index.html" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Symfony2 Components</a>: 关于Symphony2的组件<br /><a href="https://packages.zendframework.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Zend Framework 2 Components</a>: &nbsp;关于ZF2的组件<br /><a href="http://auraphp.github.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Aura Components</a>: &nbsp;一个PHP5.4的组件包<br /><a href="http://hoa-project.net/En/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Hoa Project</a>:&nbsp;&nbsp;另一个PHP组件包</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">微型框架的附加部分</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——其它相关的微型框架和路由<br /><a href="https://github.com/fabpot/Silex-Skeleton" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Silex Skeleton</a>: 用于Silex的项目框架<br /><a href="https://github.com/silexphp/Silex-WebProfiler" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Silex Web Profiler</a>: &nbsp;用于Silex的Web调试工具条<br /><a href="https://github.com/stackphp" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Stack</a>: 用于Silex/Symphony的可堆叠中间件库<br /><a href="https://github.com/codeguy/Slim-Skeleton" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Slim Skeleton</a>: 用于Slim的框架<br /><a href="https://github.com/codeguy/Slim-Views" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Slim View</a>: Slim的自定义视图集<br /><a href="https://github.com/codeguy/Slim-Middleware" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Slim Middleware</a>: Slim的自定义中间件集合</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">HTTP</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——用于HTTP和抓取网站的库<br /><a href="https://github.com/guzzle/guzzle" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Guzzle</a>: 一个完整的HTTP客户端<br /><a href="https://github.com/kriswallsmith/Buzz" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Buzz</a>: 另一个HTTP客户端<br /><a href="https://github.com/rmccue/Requests" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Requests</a>: 一个简单的HTTP库<br /><a href="https://github.com/nategood/httpful" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">HTTPFul</a>:&nbsp;&nbsp;一个链式HTTP客户端<br /><a href="https://github.com/fabpot/Goutte" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Goutte</a>: 一个简单的Web抓取器<br /><a href="http://php-vcr.github.io/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP VCR</a>: 一个录制和回放HTTP请求的库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">Email</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——用于发送和解析Email的库<br /><a href="http://swiftmailer.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">SwiftMailer</a>: 一个邮件程序的解决方案<br /><a href="https://github.com/PHPMailer/PHPMailer" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHPMailer</a>: 另一个邮件程序的解决方案<br /><a href="https://github.com/tedivm/Fetch" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Fetch</a>: 一个IMAP库<br /><a href="https://github.com/willdurand/EmailReplyParser" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Email Reply Parser</a>: 一个邮件回复解析器库<br /><a href="https://github.com/henrikbjorn/Stampie" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Stampie</a>: 关于邮件服务的库，比如SendGrid、PostMark、MailGun和Mandrill<br /><a href="https://github.com/tijsverkoyen/CssToInlineStyles" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">CssToInlineStyles</a>: 邮件模板中一个内联的CSS库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">依赖注入</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——实现依赖注入设计模式的库<br /><a href="http://pimple.sensiolabs.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Pimple</a>: 一个小的依赖注入容器<br /><a href="https://github.com/rdlowrey/Auryn" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Auryn</a>: 另一个小的依赖注入容器<br /><a href="https://github.com/orno/di" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Orno Di</a>: 一个易扩展的依赖注入容器<br /><a href="http://mnapoli.github.com/PHP-DI/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP DI</a>: 一个使用标注实现的依赖注入<br /><a href="https://github.com/jeremeamia/acclimate" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Acclimate</a>: &nbsp;依赖注入容器和服务定位器的通用接口</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">图像</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——处理图像的库<br /><a href="http://imagine.readthedocs.org/en/latest/index.html" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Imagine</a>: 一个图像处理库<br /><a href="https://github.com/Sybio/ImageWorkshop" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Image Workshop</a>:&nbsp;另一个图像处理库<br /><a href="https://github.com/Intervention/image" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Intervention Image</a>: 同样还是一个图像处理库<br /><a href="https://github.com/Sybio/GifFrameExtractor" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">GIF Frame Extractor</a>: 一个提取GIF动画帧信息的库<br /><a href="https://github.com/Sybio/GifCreator" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">GIF Creator</a>: &nbsp;从多幅图片中创建GIF动画的库<br /><a href="https://github.com/nmcteam/image-with-text" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Image With Text</a>: 在图像中嵌入文本的库<br /><a href="https://github.com/php-loep/color-extractor" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Color Extractor</a>: 从图像中提取颜色的库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">安全性</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——用于生成安全的随机数、加密数据、扫描漏洞的库<br /><a href="https://github.com/ezyang/htmlpurifier" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">HTML Purifier</a>: 一个标准的HTML过滤器<br /><a href="https://github.com/ircmaxell/RandomLib" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">RandomLib</a>: 生成随机数和随机字符串的库<br /><a href="https://github.com/pixeloution/true-random" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">True Random</a>: 使用<a href="http://www.random.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">www.random.org</a>生成随机数的库<br /><a href="https://github.com/padraic/SecurityMultiTool" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">SecurityMultiTool</a>: 一个PHP安全库<br /><a href="http://phpseclib.sourceforge.net/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHPSecLib</a>: 一个纯的PHP安全通信库<br /><a href="https://github.com/timoh6/TCrypto" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">TCrypto</a>: 一个简单的键值加密存储库<br /><a href="https://github.com/PHPIDS/PHPIDS" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP IDS</a>: 一个结构化的PHP安全层<br /><a href="https://github.com/Herzult/php-ssh" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP SSH</a>: 面向对象的SSH包装库<br /><a href="https://github.com/psecio/iniscan" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">IniScan</a>: 一个扫描PHP&nbsp;INI文件安全的工具<br /><a href="https://security.sensiolabs.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">SensioLabs Security Check</a>: 一个根据安全建议检查Composer依赖的Web工具<br /><a href="https://www.owasp.org/index.php/OWASP_Zed_Attack_Proxy_Project" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Zed</a>: 用于Web应用的集成渗透测试工具</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">文档</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——生成项目文档的库<br /><a href="https://github.com/fabpot/Sami" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Sami</a>: 一个API文档生成器<br /><a href="https://github.com/apigen/apigen" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">APIGen</a>: 另一个API文档生成器<br /><a href="https://github.com/phpDocumentor/phpDocumentor2" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Documentor 2</a>: 文档生成器<br /><a href="http://phpdox.de/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">phpDox</a>: 一个PHP项目的文档生成器（不仅仅是API文档）</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">调试</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——调试代码的库和工具<br /><a href="https://github.com/xdebug/xdebug" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">xDebug</a>: 一个PHP的调试和分析工具<br /><a href="http://phpdebugbar.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Debug Bar</a>: 一个调试工具条<br /><a href="https://github.com/Seldaek/php-console" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Console</a>: Web调试控制台<br /><a href="https://github.com/barbushin/php-console" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Barbushin PHP Console</a>: 一个使用Google&nbsp;Chrome的Web调试控制工具<br /><a href="http://phpdbg.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHPDBG</a>: 一个交互性的PHP调试器<br /><a href="https://github.com/nette/tracy" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Tracy</a>: 一个简单的错误检测、日志和时间测量库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">构建工具</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——项目构建和自动化工具<br /><a href="https://github.com/herrera-io/php-go" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Go</a>: 一个简单的PHP构建工具<br /><a href="https://github.com/CHH/bob" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Bob</a>: 一个简单的项目自动化工具<br /><a href="https://github.com/jaz303/phake" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Phake</a>: 一个PHP克隆库<br /><a href="https://github.com/kherge/Box" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Box</a>: 用来构建PHAR文件的工具<br /><a href="http://www.phing.info/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Phing</a>: 依据Apache&nbsp;Ant的PHP项目构建系统</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">任务运行器</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——自动运行任务的库<br /><a href="http://taskphp.github.io/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Task</a>: 依据Grunt和Gulp的纯PHP任务运行器<br /><a href="https://github.com/Codegyre/Robo" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Robo</a>: 面向对象的PHP任务运行器<br /><a href="http://bldr.io/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Bldr</a>: 构建在Symphony组件上的PHP任务运行器</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">导航</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——构建导航结构的工具<br /><a href="https://github.com/KnpLabs/KnpMenu" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">KnpMenu</a>: 一个菜单库<br /><a href="https://github.com/tackk/cartographer" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Cartographer</a>: 一个站点地图生成库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">日志</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——用于生成和处理日志文件的库<br /><a href="https://github.com/Seldaek/monolog" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Monolog</a>: 一个完整的日志工具<br /><a href="https://github.com/katzgrau/KLogger" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">KLogger</a>: 一个易于使用的PSR-3日志类</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">电子商务</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——用于支付和构建在线电子商务商店的库和应用<br /><a href="https://github.com/adrianmacneil/omnipay" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">OmniPay</a>: 一个多网关支付处理的框架<br /><a href="https://github.com/payum/payum" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Payum</a>: 一个用于支付的抽象库<br /><a href="http://www.sylius.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Sylius</a>: 一个开源的电子商务解决方案<br /><a href="http://thelia.net/v2/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Thelia</a>: 另一个开源的电子商务解决方案<br /><a href="https://github.com/mathiasverraes/money" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Money</a>: PHP实现的Fowler金钱模式<br /><a href="https://github.com/sebastianbergmann/money" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Sebastian Money</a>: 一个处理货币价值的库<br /><a href="https://github.com/florianv/swap" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Swap</a>: 一个汇率库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">PDF</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——处理PDF文件的库和软件<br /><a href="https://github.com/KnpLabs/snappy" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Snappy</a>: 一个PDF和图像的生成库<br /><a href="https://github.com/antialize/wkhtmltopdf" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">WKHTMLToPDF</a>: 一个将HTML转换为PDF的工具</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">数据库</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——使用对象关系映射（ORM）或数据映射技术的数据库交互库<br /><a href="http://www.doctrine-project.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Doctrine</a>: 一个完整的DBAL和ORM<br /><a href="https://github.com/l3pp4rd/DoctrineExtensions" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Doctrine Extensions</a>: 一个Doctrine行为的扩展集合<br /><a href="http://www.propelorm.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Propel</a>: 一个快速的ORM，迁移和查询库<br /><a href="https://github.com/illuminate/database" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Eloquent</a>: Laravel&nbsp;4&nbsp;ORM<br /><a href="https://github.com/etrepat/baum" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Baum</a>: 一个Eloquent的嵌套集合<br /><a href="https://github.com/vlucas/spot2" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Spot2</a>: MySQL的ORM映射器<br /><a href="http://redbeanphp.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">RedBean</a>: 一个轻量级、易配置的ORM<br /><a href="https://github.com/chanmix51/Pomm" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Pomm</a>: 用于PostgreSQL的一个对象模型管理器<br /><a href="https://github.com/Ocramius/ProxyManager" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">ProxyManager</a>: 用于数据映射生成代理对象的工具集合</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">标记</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——处理标记的库<br /><a href="http://milesj.me/code/php/decoda" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Decoda</a>: 一个轻量级的标记解析库<br /><a href="https://github.com/michelf/php-markdown" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Markdown</a>: Markdown解析器<br /><a href="https://github.com/thephpleague/commonmark" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">CommonMark PHP</a>:&nbsp;一个支持CommonMark&nbsp;spec的Markdown解析器<br /><a href="https://github.com/dflydev/dflydev-markdown" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Dflydev Markdown</a>: 另一个Markdown解析器<br /><a href="https://github.com/erusev/parsedown" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Parsedown</a>: 同样是一个Markdown解析器<br /><a href="https://github.com/kzykhys/Ciconia" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Ciconia</a>: 一个支持Github风格的Markdown解析器<br /><a href="https://github.com/cebe/markdown" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Cebe Markdown</a>: 一个快速、可扩展的Markdown解析器<br /><a href="https://github.com/Masterminds/html5-php" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">HTML5 PHP</a>: 一个HTML5解析和序列化的库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">字符串</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——解析和操纵字符串的库<br /><a href="https://github.com/sensiolabs/ansi-to-html" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">ANSI to HTML5</a>: 一个将ANSI转换为HTML5的库<br /><a href="https://github.com/nicolas-grekas/Patchwork-UTF8" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Patchwork UTF-8</a>: 处理UTF-8格式字符串的便携库<br /><a href="https://github.com/hoaproject/String" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Hoa String</a>: 另一个UTF-8格式的字符串库<br /><a href="https://github.com/danielstjules/Stringy" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Stringy</a>: 一个多字节支持的字符串操纵库<br /><a href="https://github.com/mikeemoo/ColorJizz-PHP" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Color Jizz</a>: 一个处理和转换颜色的库<br /><a href="https://github.com/ramsey/uuid" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">UUID</a>: 生成UUIDs的库<br /><a href="https://github.com/cocur/slugify" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Slugify</a>: 一个将字符串转换为slug格式的库<br /><a href="https://github.com/jbroadway/urlify" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Urlify</a>: 一个Django&nbsp;<span class="skimlinks-unlinked" style="box-sizing: inherit;">URLify.js的PHP</span>端口<br /><a href="https://github.com/kzykhys/Text" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Text</a>: 一个文本处理库<br /><a href="https://github.com/jdorn/sql-formatter/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">SQL Formatter</a>: 一个用于格式化SQL语句的库<br /><a href="https://github.com/tobie/ua-parser/tree/master/php" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">UA Parser</a>: 一个用于解析用户字符串的库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">数字</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——处理数字的库<br /><a href="https://github.com/powder96/numbers.php" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Numbers PHP</a>: 一个处理数字的库<br /><a href="https://github.com/moontoast/math" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Math</a>: 处理较大数字的库<br /><a href="https://github.com/gabrielelana/byte-units" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">ByteUnits</a>: 一个在二进制和测量系统中解析、格式化和转换字节单位的库<br /><a href="https://github.com/triplepoint/php-units-of-measure" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Units of Measure</a>: 一个测量单位间转换的库<br /><a href="https://github.com/Crisu83/php-conversion" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Conversion</a>: 另一个测量单位间转换的库<br /><a href="https://github.com/giggsey/libphonenumber-for-php" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">LibPhoneNumber for PHP</a>: PHP实现的Google电话号码处理系统库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">过滤和验证</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——用于过滤和验证数据的库<br /><a href="https://github.com/ircmaxell/filterus" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Filterus</a>: 一个简单的PHP过滤库<br /><a href="https://github.com/Respect/Validation" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Respect Validate</a>: 一个简单的验证库<br /><a href="https://github.com/vlucas/valitron" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Valitron</a>: 另一个数据验证库<br /><a href="https://github.com/codeguy/Upload" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Upload</a>: 一个处理文件上传和验证的库<br /><a href="https://github.com/rdohms/DMS-Filter" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">DMS Filter</a>: 一个基于标注的过滤库<br /><a href="https://github.com/romaricdrigon/MetaYaml" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">MetaYaml</a>: 支持YAML、JSON和XML的一个模式验证库<br /><a href="https://github.com/ronanguilloux/IsoCodes" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">ISO-codes</a>: 验证不同ISO和ZIP编码的库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">REST和API</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——用于开发REST-ful&nbsp;APIs的库和Web框架<br /><a href="https://github.com/zfcampus/zf-apigility-skeleton" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Apigility</a>: 一个使用Zend&nbsp;Framework2构建的API构建器<br /><a href="https://github.com/willdurand/Hateoas" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Hateoas</a>: 一个HATEOAS&nbsp;REST的web服务库<br /><a href="https://github.com/blongden/hal" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">HAL</a>: 一个超文本应用语言（HAL）构建库<br /><a href="https://github.com/willdurand/Negotiation" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Negotiation</a>: 一个内容协商库<br /><a href="https://github.com/leedavis81/drest" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Drest</a>: 一个将Doctrine实体展现为REST资源结点的库<br /><a href="https://github.com/Luracast/Restler" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Restler</a>: 一个将PHP方法展现为RESTful&nbsp;web&nbsp;API的轻量级框架</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">缓存</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——缓存数据的库<br /><a href="http://www.php.net/manual/en/book.apc.php" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Alternative PHP Cache (APC)</a>: PHP的开源操作码缓存<br /><a href="https://github.com/doctrine/cache" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Cache</a>: 一个缓存库<br /><a href="https://github.com/tedivm/Stash" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Stash</a>: 另一个缓存库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">第三方API</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——访问第三方API的库<br /><a href="https://github.com/aws/aws-sdk-php" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Amazon Web Service SDK</a>: PHP&nbsp;AWS&nbsp;SDK官方库<br /><a href="https://github.com/gwkunze/S3StreamWrapper" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">S3 Stream Wrapper</a>: Amazon&nbsp;S3的流包装库<br /><a href="https://github.com/stripe/stripe-php" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Stripe</a>: 官方的Stripe&nbsp;PHP库<br /><a href="http://campaignmonitor.github.com/createsend-php/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Campaign Monitor</a>: 官方的Campaign&nbsp;Monitor&nbsp;PHP库<br /><a href="https://github.com/toin0u/DigitalOcean" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Digital Ocean</a>: 一个与Digital&nbsp;Ocean&nbsp;API交互的库<br /><a href="https://github.com/dsyph3r/github-api3-php" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Github</a>: 一个与Github&nbsp;API交互的库<br /><a href="https://github.com/KnpLabs/php-github-api" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Github API</a>: 另一个与Github&nbsp;API交互的库<br /><a href="https://github.com/widop/twitter-oauth" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Twitter OAuth</a>: 一个与Twitter’s&nbsp;OAuth工作流交互的库<br /><a href="https://github.com/widop/twitter-rest" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Twitter REST</a>: 一个与Twitter’s&nbsp;REST&nbsp;API交互的库<br /><a href="https://github.com/dropbox/dropbox-sdk-php" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Dropbox SDK</a>: 官方的PHP&nbsp;Dropbox&nbsp;SDK库<br /><a href="https://github.com/twilio/twilio-php" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Twilio</a>: 官方的Twilio&nbsp;PHP&nbsp;REST&nbsp;API<br /><a href="https://github.com/mailgun/mailgun-php" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Mailgun</a>: 官方的Mailgun&nbsp;PHP&nbsp;API</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">扩展</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——帮助构建PHP扩展的库<br /><a href="https://github.com/phalcon/zephir" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Zephir</a>: 用于开发PHP扩展的一种在PHP和C++间的编译语言<br /><a href="http://www.php-cpp.com/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP CPP</a>: 一个用于开发PHP扩展的C++库</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">PHP安装</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;"><a href="http://mxcl.github.com/homebrew/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">HomeBrew</a>: OSX的包管理器<br /><a href="https://github.com/josegonzalez/homebrew-php" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">HomeBrew PHP</a>:一个HomeBrew的PHP接头<br /><a href="http://php-osx.liip.ch/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP OSX</a>: 用于OSX的PHP安装器<br /><a href="https://github.com/c9s/phpbrew" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Brew</a>: 一个PHP的版本管理和安装器<br /><a href="https://github.com/CHH/phpenv" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Env</a>: 一个PHP的版本管理器<br /><a href="https://github.com/jubianchi/phpswitch" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Switch</a>:&nbsp;另一个PHP的版本管理器<br /><a href="https://github.com/CHH/php-build" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Build</a>: 一个PHP的版本安装器<br /><a href="http://virtphp.org/" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">VirtPHP</a>: 一个用来创建和管理独立PHP开发环境的工具</p>
<h2 style="box-sizing: inherit; clear: both; margin-top: 0px; padding-top: 0px; font-size: 1.75rem;">URL</h2>
<p style="box-sizing: inherit; margin-bottom: 1.5em;">——解析URL的库<br /><a href="https://github.com/jwage/purl" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">Purl</a>:&nbsp;&nbsp;一个URL操作库<br /><a href="https://github.com/jeremykendall/php-domain-parser" target="_blank" style="box-sizing: inherit; color: rgb(83, 115, 117); background-color: transparent;">PHP Domain Parser</a>: &nbsp;一个本地的后缀解析器</p>
</td>
</tr>
</tbody>
</table>
<p></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/878" data-a2a-title="Github上PHP资源汇总大全，php学习的好资料"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F878&amp;linkname=Github%E4%B8%8APHP%E8%B5%84%E6%BA%90%E6%B1%87%E6%80%BB%E5%A4%A7%E5%85%A8%EF%BC%8Cphp%E5%AD%A6%E4%B9%A0%E7%9A%84%E5%A5%BD%E8%B5%84%E6%96%99" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F878&amp;linkname=Github%E4%B8%8APHP%E8%B5%84%E6%BA%90%E6%B1%87%E6%80%BB%E5%A4%A7%E5%85%A8%EF%BC%8Cphp%E5%AD%A6%E4%B9%A0%E7%9A%84%E5%A5%BD%E8%B5%84%E6%96%99" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F878&amp;linkname=Github%E4%B8%8APHP%E8%B5%84%E6%BA%90%E6%B1%87%E6%80%BB%E5%A4%A7%E5%85%A8%EF%BC%8Cphp%E5%AD%A6%E4%B9%A0%E7%9A%84%E5%A5%BD%E8%B5%84%E6%96%99" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F878&amp;linkname=Github%E4%B8%8APHP%E8%B5%84%E6%BA%90%E6%B1%87%E6%80%BB%E5%A4%A7%E5%85%A8%EF%BC%8Cphp%E5%AD%A6%E4%B9%A0%E7%9A%84%E5%A5%BD%E8%B5%84%E6%96%99" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>							</div><!-- .entry-content -->

		<footer class="entry-meta">
							<span class="entry-date"><a href="http://www.geroro.com/archives/878" title="上午10:52" rel="bookmark"><time datetime="2017-07-02T10:52:49+00:00" pubdate>2017年7月2日</time></a></span>									<span class="comments-link"><a href="http://www.geroro.com/archives/878#respond"><span class="leave-reply">发表评论</span></a></span>
								</footer><!-- #entry-meta -->
	</article><!-- #post-878 -->

	
	
					
						
	<article id="post-905" class="post-905 post type-post status-publish format-standard has-post-thumbnail hentry category-php tag-php tag-wordpress">
		<header class="entry-header">
									<h1 class="entry-title"><a href="http://www.geroro.com/archives/905" rel="bookmark">集成9FM的Ueditor1.4.3.3版本for最新WordPress4.8</a></h1>
			
			<div class="entry-meta">
							</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-content">
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;前言：<span style="color: rgb(102, 102, 102); font-family: &#39;Droid Sans&#39;, sans-serif; font-size: 14px; line-height: 24px;">考虑一款方便排版文章的编辑器是迫在眉睫，好在搜索到一款百度编辑器</span><a href="http://ueditor.baidu.com/website/" target="_blank" title="Ueditoer" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: &#39;Droid Sans&#39;, sans-serif; vertical-align: baseline; color: rgb(66, 182, 73); transition: all 0.25s ease; text-decoration: none; white-space: normal;">Ueditor</a><span style="color: rgb(102, 102, 102); font-family: &#39;Droid Sans&#39;, sans-serif; font-size: 14px; line-height: 24px;">，这款编辑器是由百度WEB前端研发部开发的所见即所得的开源富文本编辑器，具有轻量、可定制、用户体验优秀等特点。开源基于BSD协议，所有源代码在协议允许范围内可自由修改和使用。百度UEditor的推出，可以帮助不少网站开发者在开发富文本编辑器所遇到的难题，节约开发者因开发富文本编辑器所需要的大量时间，有效降低了企业的开发成本。如下是百度编辑器的样式界面，在线演示界面为</span><a href="http://ueditor.baidu.com/website/onlinedemo.html" target="_blank" title="demo" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: &#39;Droid Sans&#39;, sans-serif; vertical-align: baseline; color: rgb(66, 182, 73); transition: all 0.25s ease; text-decoration: none; white-space: normal;">demo<img  onclick="zoom(this,false);"   style="cursor:pointer;" src="https://i0.wp.com/www.geroro.com/wp-content/plugins/ueditor/ueditor/dialogs/emotion/images/youa/y_0028.gif?zoom=1.25&#038;w=640" width="60" height="60"/><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></p>
<hr/>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本次更新的功能主要体现在两点上：<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1：在代码语言里面发表的文章前台显示高亮语言；<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2：然后增加滑动条，解决代码语言超长超出显示边界的问题。<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;见下图所展示效果：<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img  onclick="zoom(this,false);"   style="cursor:pointer;" src="/upload/image/20170629/1498738344864508.jpg" title="1498738344864508.jpg" alt="QQ截图20170629200930.jpg"/></p>
<hr/>
<p><span style="font-size: 24px; font-family: 隶书, SimLi;">安装说明</span><br /><span style="color: rgb(102, 102, 102); font-family: &#39;Droid Sans&#39;, sans-serif; font-size: 14px; line-height: 24px;">1、下</span>载地址：链接: <a href="http://pan.baidu.com/s/1kVJY3rD">http://pan.baidu.com/s/1kVJY3rD</a>&nbsp; &nbsp;密码: f2cj&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(102, 102, 102); font-family: &#39;Droid Sans&#39;, sans-serif; font-size: 14px; line-height: 24px;">&nbsp;<br />2、将下载的文件，解压出ueditor(new).zip即可，然后登录Wordpress后台，在插件的地方点击安装插件，选择上传插件，之后找到ueditor(new).zip，点击安装，安装完成后直接启用即可，停用又会恢复到Wordpress默认编辑器。</span><br /><span style="color: rgb(102, 102, 102); font-family: &#39;Droid Sans&#39;, sans-serif; font-size: 14px; line-height: 24px;">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/905" data-a2a-title="集成9FM的Ueditor1.4.3.3版本for最新WordPress4.8"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F905&amp;linkname=%E9%9B%86%E6%88%909FM%E7%9A%84Ueditor1.4.3.3%E7%89%88%E6%9C%ACfor%E6%9C%80%E6%96%B0WordPress4.8" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F905&amp;linkname=%E9%9B%86%E6%88%909FM%E7%9A%84Ueditor1.4.3.3%E7%89%88%E6%9C%ACfor%E6%9C%80%E6%96%B0WordPress4.8" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F905&amp;linkname=%E9%9B%86%E6%88%909FM%E7%9A%84Ueditor1.4.3.3%E7%89%88%E6%9C%ACfor%E6%9C%80%E6%96%B0WordPress4.8" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F905&amp;linkname=%E9%9B%86%E6%88%909FM%E7%9A%84Ueditor1.4.3.3%E7%89%88%E6%9C%ACfor%E6%9C%80%E6%96%B0WordPress4.8" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>							</div><!-- .entry-content -->

		<footer class="entry-meta">
							<span class="entry-date"><a href="http://www.geroro.com/archives/905" title="下午8:22" rel="bookmark"><time datetime="2017-06-29T20:22:56+00:00" pubdate>2017年6月29日</time></a></span>									<span class="comments-link"><a href="http://www.geroro.com/archives/905#comments"><b>5</b> 个回复</a></span>
								</footer><!-- #entry-meta -->
	</article><!-- #post-905 -->

	
	
					
						
	<article id="post-820" class="post-820 post type-post status-publish format-standard has-post-thumbnail hentry category-lix tag-linux">
		<header class="entry-header">
									<h1 class="entry-title"><a href="http://www.geroro.com/archives/820" rel="bookmark">linux和黑客关系图</a></h1>
			
			<div class="entry-meta">
							</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-content">
					<p style=";font-size:27px"><span style="font-family:Calibri">linux</span><span style="font-family:SimSun">和黑客关系图<br /><span style="color: rgb(51, 51, 51); font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Microsoft YaHei&#39;, arial, 宋体, sans-serif, tahoma; font-size: 14px; font-variant-ligatures: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255);">Linux的安全性极高，一般情况下是不用博安装安全类软件，如：杀毒软件。同时，很多高级黑客工具是以Linux为核心代码写出来的。在编程当面，Linux系统自带高级编程语言，其内核使得它本身就是一种编程语言。另外，高级语言编写出来的程序具有移植性强特点，可以运行于WIN里面。</span></span></p>
<p><img  onclick="zoom(this,false);"   style="cursor:pointer;" src="/upload/image/20170624/1498284082707399.jpg" title="1498284082707399.jpg" alt="1234.jpg"/><br/  onclick='return showpotonohref();'  ><img  onclick="zoom(this,false);"   style="cursor:pointer;" src="/upload/image/20170624/1498284114964643.jpg" title="1498284114964643.jpg" alt="098.jpg"/></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/820" data-a2a-title="linux和黑客关系图"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F820&amp;linkname=linux%E5%92%8C%E9%BB%91%E5%AE%A2%E5%85%B3%E7%B3%BB%E5%9B%BE" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F820&amp;linkname=linux%E5%92%8C%E9%BB%91%E5%AE%A2%E5%85%B3%E7%B3%BB%E5%9B%BE" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F820&amp;linkname=linux%E5%92%8C%E9%BB%91%E5%AE%A2%E5%85%B3%E7%B3%BB%E5%9B%BE" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F820&amp;linkname=linux%E5%92%8C%E9%BB%91%E5%AE%A2%E5%85%B3%E7%B3%BB%E5%9B%BE" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>							</div><!-- .entry-content -->

		<footer class="entry-meta">
							<span class="entry-date"><a href="http://www.geroro.com/archives/820" title="下午2:02" rel="bookmark"><time datetime="2017-06-24T14:02:42+00:00" pubdate>2017年6月24日</time></a></span>									<span class="comments-link"><a href="http://www.geroro.com/archives/820#respond"><span class="leave-reply">发表评论</span></a></span>
								</footer><!-- #entry-meta -->
	</article><!-- #post-820 -->

	
	
					
				
			</div><!-- #content -->

					<nav id="nav-below">
			<h3 class="assistive-text">文章导航</h3>
			<div class="nav-previous"><a href="http://www.geroro.com/page/2?p=52" ><span class="meta-nav">«</span> 较旧</a></div>
			<div class="nav-next"></div>
		</nav><!-- #nav-above -->
	
		</div><!-- #primary -->

			<div id="secondary" class="widget-area" role="complementary">
			<aside id="search-2" class="widget widget_search">	<form method="get" id="searchform" action="http://www.geroro.com/">
		<label for="s" class="assistive-text">搜索</label>
		<input type="text" class="field" name="s" id="s" placeholder="搜索" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="搜索" />
	</form>
</aside><aside id="enhancedtextwidget-4" class="widget widget_text enhanced-text-widget"><div class="textwidget widget-text"><iframe src="http://www.geroro.com/wp-content/themes/mekanews-lite/clock.html" height="300px" width="300px"></iframe></div></aside><aside id="enhancedtextwidget-5" class="widget widget_text enhanced-text-widget"><div class="textwidget widget-text"><div class="su-box su-box-style-default" style="border-color:#292929;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;"><div class="su-box-title" style="background-color:#333333;color:#FFFFFF;-webkit-border-top-left-radius:2px;-webkit-border-top-right-radius:2px;-moz-border-radius-topleft:2px;-moz-border-radius-topright:2px;border-top-left-radius:2px;border-top-right-radius:2px;">友情链接</div><div class="su-box-content su-clearfix">
  <div class="su-spoiler su-spoiler-style-default su-spoiler-icon-folder-1 su-spoiler-closed"><div class="su-spoiler-title"><span class="su-spoiler-icon"></span>IT敢客</div><div class="su-spoiler-content su-clearfix" style="display:none"> <a href="http://www.itgank.com/" target='_blank'>www.itgank.com</a> </div></div> 
  <div class="su-spoiler su-spoiler-style-default su-spoiler-icon-folder-1 su-spoiler-closed"><div class="su-spoiler-title"><span class="su-spoiler-icon"></span>柚萌</div><div class="su-spoiler-content su-clearfix" style="display:none"> <a href="http://www.uimoe.com" target='_blank'>www.uimoe.com</a> </div></div>
  <div class="su-spoiler su-spoiler-style-default su-spoiler-icon-folder-1 su-spoiler-closed"><div class="su-spoiler-title"><span class="su-spoiler-icon"></span>棱镜</div><div class="su-spoiler-content su-clearfix" style="display:none"> <a href="http://www.llyn23.com" target='_blank'>www.llyn23.com</a> </div></div>
</div></div></div></aside>	        <aside id="wp-cumulus" class="widget wp_cumulus_widget">							<h3 class="widget-title">标签云</h3>						<object type="application/x-shockwave-flash" data="http://www.geroro.com/wp-content/plugins/wp-cumulus/tagcloud.swf?r=9071655" width="300" height="300"><param name="movie" value="http://www.geroro.com/wp-content/plugins/wp-cumulus/tagcloud.swf?r=9071655" /><param name="bgcolor" value="#ffffff" /><param name="AllowScriptAccess" value="always" /><param name="flashvars" value="tcolor=0x333333&amp;tcolor2=0x333333&amp;hicolor=0x000000&amp;tspeed=100&amp;distr=true&amp;mode=tags&amp;tagcloud=%3Ctags%3E%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fbat%22+class%3D%22tag-cloud-link+tag-link-47+tag-link-position-1%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22Bat+%281+item%29%22%3EBat%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fjava%22+class%3D%22tag-cloud-link+tag-link-27+tag-link-position-2%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22Java+%281+item%29%22%3EJava%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Flinux%22+class%3D%22tag-cloud-link+tag-link-31+tag-link-position-3%22+style%3D%22font-size%3A+22pt%3B%22+aria-label%3D%22Linux+%2810+items%29%22%3ELinux%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fmysql%22+class%3D%22tag-cloud-link+tag-link-28+tag-link-position-4%22+style%3D%22font-size%3A+21.243243243243pt%3B%22+aria-label%3D%22Mysql+%289+items%29%22%3EMysql%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Foracle%22+class%3D%22tag-cloud-link+tag-link-32+tag-link-position-5%22+style%3D%22font-size%3A+13.675675675676pt%3B%22+aria-label%3D%22Oracle+%283+items%29%22%3EOracle%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fparamiko%22+class%3D%22tag-cloud-link+tag-link-48+tag-link-position-6%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22Paramiko+%281+item%29%22%3EParamiko%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fpe%22+class%3D%22tag-cloud-link+tag-link-30+tag-link-position-7%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22PE+%281+item%29%22%3EPE%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fphp%22+class%3D%22tag-cloud-link+tag-link-15+tag-link-position-8%22+style%3D%22font-size%3A+19.351351351351pt%3B%22+aria-label%3D%22PHP+%287+items%29%22%3EPHP%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fpxe%22+class%3D%22tag-cloud-link+tag-link-29+tag-link-position-9%22+style%3D%22font-size%3A+11.405405405405pt%3B%22+aria-label%3D%22PXE+%282+items%29%22%3EPXE%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fpython%22+class%3D%22tag-cloud-link+tag-link-35+tag-link-position-10%22+style%3D%22font-size%3A+11.405405405405pt%3B%22+aria-label%3D%22python+%282+items%29%22%3Epython%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fshell%22+class%3D%22tag-cloud-link+tag-link-33+tag-link-position-11%22+style%3D%22font-size%3A+17.081081081081pt%3B%22+aria-label%3D%22Shell+%285+items%29%22%3EShell%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Ftomcat%22+class%3D%22tag-cloud-link+tag-link-44+tag-link-position-12%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22Tomcat+%281+item%29%22%3ETomcat%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fwindows%22+class%3D%22tag-cloud-link+tag-link-46+tag-link-position-13%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22Windows+%281+item%29%22%3EWindows%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fwordpress%22+class%3D%22tag-cloud-link+tag-link-42+tag-link-position-14%22+style%3D%22font-size%3A+11.405405405405pt%3B%22+aria-label%3D%22Wordpress+%282+items%29%22%3EWordpress%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fserver%22+class%3D%22tag-cloud-link+tag-link-43+tag-link-position-15%22+style%3D%22font-size%3A+11.405405405405pt%3B%22+aria-label%3D%22%E6%9C%8D%E5%8A%A1%E5%99%A8+%282+items%29%22%3E%E6%9C%8D%E5%8A%A1%E5%99%A8%3C%2Fa%3E%3C%2Ftags%3E" /><p><a href="http://www.geroro.com/archives/tag/bat" class="tag-cloud-link tag-link-47 tag-link-position-1" style="font-size: 8pt;" aria-label="Bat (1 item)">Bat</a>
<a href="http://www.geroro.com/archives/tag/java" class="tag-cloud-link tag-link-27 tag-link-position-2" style="font-size: 8pt;" aria-label="Java (1 item)">Java</a>
<a href="http://www.geroro.com/archives/tag/linux" class="tag-cloud-link tag-link-31 tag-link-position-3" style="font-size: 22pt;" aria-label="Linux (10 items)">Linux</a>
<a href="http://www.geroro.com/archives/tag/mysql" class="tag-cloud-link tag-link-28 tag-link-position-4" style="font-size: 21.243243243243pt;" aria-label="Mysql (9 items)">Mysql</a>
<a href="http://www.geroro.com/archives/tag/oracle" class="tag-cloud-link tag-link-32 tag-link-position-5" style="font-size: 13.675675675676pt;" aria-label="Oracle (3 items)">Oracle</a>
<a href="http://www.geroro.com/archives/tag/paramiko" class="tag-cloud-link tag-link-48 tag-link-position-6" style="font-size: 8pt;" aria-label="Paramiko (1 item)">Paramiko</a>
<a href="http://www.geroro.com/archives/tag/pe" class="tag-cloud-link tag-link-30 tag-link-position-7" style="font-size: 8pt;" aria-label="PE (1 item)">PE</a>
<a href="http://www.geroro.com/archives/tag/php" class="tag-cloud-link tag-link-15 tag-link-position-8" style="font-size: 19.351351351351pt;" aria-label="PHP (7 items)">PHP</a>
<a href="http://www.geroro.com/archives/tag/pxe" class="tag-cloud-link tag-link-29 tag-link-position-9" style="font-size: 11.405405405405pt;" aria-label="PXE (2 items)">PXE</a>
<a href="http://www.geroro.com/archives/tag/python" class="tag-cloud-link tag-link-35 tag-link-position-10" style="font-size: 11.405405405405pt;" aria-label="python (2 items)">python</a>
<a href="http://www.geroro.com/archives/tag/shell" class="tag-cloud-link tag-link-33 tag-link-position-11" style="font-size: 17.081081081081pt;" aria-label="Shell (5 items)">Shell</a>
<a href="http://www.geroro.com/archives/tag/tomcat" class="tag-cloud-link tag-link-44 tag-link-position-12" style="font-size: 8pt;" aria-label="Tomcat (1 item)">Tomcat</a>
<a href="http://www.geroro.com/archives/tag/windows" class="tag-cloud-link tag-link-46 tag-link-position-13" style="font-size: 8pt;" aria-label="Windows (1 item)">Windows</a>
<a href="http://www.geroro.com/archives/tag/wordpress" class="tag-cloud-link tag-link-42 tag-link-position-14" style="font-size: 11.405405405405pt;" aria-label="Wordpress (2 items)">Wordpress</a>
<a href="http://www.geroro.com/archives/tag/server" class="tag-cloud-link tag-link-43 tag-link-position-15" style="font-size: 11.405405405405pt;" aria-label="服务器 (2 items)">服务器</a></p><p>WP-Cumulus by <a href="https://www.qcgzxw.cn/" rel="nofollow">Roy Tanck</a> requires <a href="https://www.qcgzxw.cn/">Flash Player</a> 9 or better.</p></object>	        </aside>				<aside id="recent-posts-2" class="widget widget_recent_entries">		<h3 class="widget-title">近期文章</h3>		<ul>
					<li>
				<a href="http://www.geroro.com/archives/1044">python3+paramiko实现sftp上传文件和文件夹</a>
						</li>
					<li>
				<a href="http://www.geroro.com/archives/918">上了这套密码锁，你就无敌了</a>
						</li>
					<li>
				<a href="http://www.geroro.com/archives/878">Github上PHP资源汇总大全，php学习的好资料</a>
						</li>
					<li>
				<a href="http://www.geroro.com/archives/905">集成9FM的Ueditor1.4.3.3版本for最新WordPress4.8</a>
						</li>
					<li>
				<a href="http://www.geroro.com/archives/820">linux和黑客关系图</a>
						</li>
				</ul>
		</aside>		<aside id="recent-comments-2" class="widget widget_recent_comments"><h3 class="widget-title">近期评论</h3><ul id="recentcomments"><li class="recentcomments"><span class="comment-author-link"><a href='http://www.geroro.com' rel='external nofollow' class='url'>琥珀君</a></span>发表在《<a href="http://www.geroro.com/archives/905#comment-140">集成9FM的Ueditor1.4.3.3版本for最新WordPress4.8</a>》</li><li class="recentcomments"><span class="comment-author-link"><a href='http://www.hbbut.com' rel='external nofollow' class='url'>余乐</a></span>发表在《<a href="http://www.geroro.com/archives/905#comment-139">集成9FM的Ueditor1.4.3.3版本for最新WordPress4.8</a>》</li><li class="recentcomments"><span class="comment-author-link"><a href='http://www.geroro.com' rel='external nofollow' class='url'>琥珀君</a></span>发表在《<a href="http://www.geroro.com/archives/905#comment-138">集成9FM的Ueditor1.4.3.3版本for最新WordPress4.8</a>》</li><li class="recentcomments"><span class="comment-author-link"><a href='http://youzheji.com/' rel='external nofollow' class='url'>游者记</a></span>发表在《<a href="http://www.geroro.com/archives/905#comment-137">集成9FM的Ueditor1.4.3.3版本for最新WordPress4.8</a>》</li><li class="recentcomments"><span class="comment-author-link"><a href='http://youzheji.com/' rel='external nofollow' class='url'>游者记</a></span>发表在《<a href="http://www.geroro.com/archives/905#comment-136">集成9FM的Ueditor1.4.3.3版本for最新WordPress4.8</a>》</li></ul></aside><aside id="archives-2" class="widget widget_archive"><h3 class="widget-title">归档时间</h3>		<ul>
			<li><a href='http://www.geroro.com/archives/date/2017/07'>2017年七月</a>&nbsp;(3)</li>
	<li><a href='http://www.geroro.com/archives/date/2017/06'>2017年六月</a>&nbsp;(11)</li>
	<li><a href='http://www.geroro.com/archives/date/2017/05'>2017年五月</a>&nbsp;(1)</li>
	<li><a href='http://www.geroro.com/archives/date/2017/03'>2017年三月</a>&nbsp;(1)</li>
	<li><a href='http://www.geroro.com/archives/date/2017/01'>2017年一月</a>&nbsp;(1)</li>
	<li><a href='http://www.geroro.com/archives/date/2016/12'>2016年十二月</a>&nbsp;(2)</li>
	<li><a href='http://www.geroro.com/archives/date/2016/11'>2016年十一月</a>&nbsp;(25)</li>
		</ul>
		</aside>		</div><!-- #secondary .widget-area -->
	
	</div><!-- #main -->
</div><!-- #page -->

</div><!-- #wrapper -->


<footer id="colophon" role="contentinfo">
	<div id="site-generator">

		<a href="http://www.geroro.com/?ak_action=reject_mobile">查看全部站点</a><br />

			<script type="text/javascript">
		if ( ! navigator.userAgent.match( /wp-(iphone|android|blackberry|nokia|windowsphone)/i ) ) {
			if ( ( navigator.userAgent.match( /iphone/i ) ) || ( navigator.userAgent.match( /ipod/i ) ) )
			   document.write( '<span id="wpcom-mobile-app-promo" style="margin-top: 10px; font-size: 13px;"><strong>Now Available!</strong> <a href="/index.php?app-download=ios">Download WordPress for iOS</a></span><br /><br />' );
			else if ( ( navigator.userAgent.match( /android/i ) ) && ( null == navigator.userAgent.match( /playbook/i ) && null == navigator.userAgent.match( /bb10/i ) ) )
			   document.write( '<span id="wpcom-mobile-app-promo" style="margin-top: 10px; font-size: 13px;"><strong>Now Available!</strong> <a href="/index.php?app-download=android">Download WordPress for Android</a></span><br /><br />' );
			else if ( ( navigator.userAgent.match( /blackberry/i ) ) || ( navigator.userAgent.match( /playbook/i ) ) || ( navigator.userAgent.match( /bb10/i ) ) )
			   document.write( '<span id="wpcom-mobile-app-promo" style="margin-top: 10px; font-size: 13px;"><strong>Now Available!</strong> <a href="/index.php?app-download=blackberry">Download WordPress for BlackBerry</a></span><br /><br />' );
		}
	</script>
	
		<a href="https://wordpress.org/" target="_blank" title="语义个人出版平台" rel="generator">由 WordPress 强力驱动</a>
	</div>
</footer><!-- #colophon -->

<script type='text/javascript' color='0,128,64' zIndex='-1' opacity='0.5' count='90' src='//cdn.bootcss.com/canvas-nest.js/1.0.0/canvas-nest.min.js'></script><script type="text/javascript">SyntaxHighlighter.all();</script>	<div style="display:none">
	</div>
<!--[if lte IE 8]>
<link rel='stylesheet' id='jetpack-carousel-ie8fix-css'  href='http://www.geroro.com/wp-content/plugins/jetpack/modules/carousel/jetpack-carousel-ie8fix.css?ver=20121024' type='text/css' media='all' />
<![endif]-->
<link rel='stylesheet' id='su-box-shortcodes-css'  href='http://www.geroro.com/wp-content/plugins/shortcodes-ultimate/assets/css/box-shortcodes.css?ver=4.10.2' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='http://www.geroro.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='all' />
<script type='text/javascript' src='http://www.geroro.com/wp-content/plugins/jetpack/modules/photon/photon.js?ver=20130122'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/www.geroro.com\/wp-json\/","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"\u8bf7\u9a8c\u8bc1\u60a8\u4e0d\u662f\u4e00\u4e2a\u673a\u5668\u4eba"}},"cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.8'></script>
<script type='text/javascript' src='https://s0.wp.com/wp-content/js/devicepx-jetpack.js?ver=201730'></script>
<script type='text/javascript' src='http://s.gravatar.com/js/gprofiles.js?ver=2017Julaa'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var WPGroHo = {"my_hash":""};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/plugins/jetpack/modules/wpgroho.js?ver=4.8'></script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/plugins/jetpack/modules/minileven/theme/pub/minileven/js/small-menu.js?ver=20120206'></script>
<script type='text/javascript' src='http://www.geroro.com/wp-includes/js/wp-embed.min.js?ver=4.8'></script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/plugins/jetpack/_inc/spin.js?ver=1.3'></script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/plugins/jetpack/_inc/jquery.spin.js?ver=1.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var jetpackCarouselStrings = {"widths":[370,700,1000,1200,1400,2000],"is_logged_in":"","lang":"zh","ajaxurl":"http:\/\/www.geroro.com\/wp-admin\/admin-ajax.php","nonce":"42f208b4f6","display_exif":"1","display_geo":"1","single_image_gallery":"1","single_image_gallery_media_file":"","background_color":"white","comment":"\u6761\u8bc4\u8bba","post_comment":"\u53d1\u8868\u8bc4\u8bba","write_comment":"\u64b0\u5199\u8bc4\u8bba...","loading_comments":"\u6b63\u5728\u52a0\u8f7d\u8bc4\u8bba...","download_original":"\u67e5\u770b\u5168\u5c3a\u5bf8 <span class=\"photo-size\">{0}<span class=\"photo-size-times\">\u00d7<\/span>{1}<\/span>","no_comment_text":"\u8bf7\u786e\u4fdd\u4e0e\u60a8\u7684\u8bc4\u8bba\u4e00\u8d77\u63d0\u4ea4\u90e8\u5206\u6587\u672c\u3002","no_comment_email":"\u8bf7\u63d0\u4f9b\u7528\u4e8e\u53d1\u8868\u8bc4\u8bba\u7684\u7535\u5b50\u90ae\u4ef6\u5730\u5740\u3002","no_comment_author":"\u8bf7\u63d0\u4f9b\u60a8\u7528\u4e8e\u53d1\u8868\u8bc4\u8bba\u7684\u59d3\u540d\u3002","comment_post_error":"\u62b1\u6b49\uff0c\u53d1\u8868\u60a8\u7684\u8bc4\u8bba\u65f6\u51fa\u9519\u3002\u8bf7\u7a0d\u540e\u91cd\u8bd5\u3002","comment_approved":"\u60a8\u7684\u8bc4\u8bba\u5df2\u83b7\u5f97\u6279\u51c6\u3002","comment_unapproved":"\u6b63\u5728\u5ba1\u6838\u60a8\u7684\u8bc4\u8bba\u3002","camera":"\u7167\u76f8\u673a","aperture":"\u5149\u5708","shutter_speed":"\u5feb\u95e8\u901f\u5ea6","focal_length":"\u7126\u8ddd","copyright":"\u7248\u6743","comment_registration":"1","require_name_email":"1","login_url":"http:\/\/www.geroro.com\/wp-login.php?redirect_to=http%3A%2F%2Fwww.geroro.com%2Farchives%2F58","blog_id":"1","meta_data":["camera","aperture","shutter_speed","focal_length","copyright"],"local_comments_commenting_as":"<p id=\"jp-carousel-commenting-as\">\u60a8\u5fc5\u987b<a href=\"#\" class=\"jp-carousel-comment-login\">\u767b\u5f55<\/a>\u624d\u80fd\u53d1\u8868\u8bc4\u8bba\u3002<\/p>"};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/plugins/jetpack/modules/carousel/jetpack-carousel.js?ver=20170209'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var su_other_shortcodes = {"no_preview":"\u7b80\u7801\u4e0d\u80fd\u5728\u5b9e\u65f6\u9884\u89c8\u3002\u8bf7\u628a\u5b83\u63d2\u5165\u5230\u7f16\u8f91\u5668\u7136\u540e\u518d\u7f51\u7ad9\u4e0a\u9884\u89c8\u3002"};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/plugins/shortcodes-ultimate/assets/js/other-shortcodes.js?ver=4.10.2'></script>
<script type="text/javascript" language="javascript" src="http://www.geroro.com/wp-content/plugins/donate-with-qrcode/js/wbolt.js"></script><script type='text/javascript' src='https://stats.wp.com/e-201730.js' async defer></script>
<script type='text/javascript'>
	_stq = window._stq || [];
	_stq.push([ 'view', {v:'ext',j:'1:5.1',blog:'107909124',post:'0',tz:'8',srv:'www.geroro.com'} ]);
	_stq.push([ 'clickTrackerInit', '107909124', '0' ]);
</script>
<!-- Generated in 2.507 seconds. Made 23 queries to database and 37 cached queries. Memory used - 39.5MB -->
<!-- Cached by DB Cache Reloaded Fix -->

</body>
</html>

<!-- Dynamic page generated in 2.521 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2017-07-25 10:14:48 -->

<!-- Super Cache dynamic page detected but late init not set. See the readme.txt for further details. -->
<!-- Dynamic WPCache Super Cache -->