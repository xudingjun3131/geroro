<?php die(); ?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="http://www.geroro.com/xmlrpc.php">

<title>GERORO | 很多事情只是不同，并无是非！</title>

<!-- All in One SEO Pack 2.3.14.2 by Michael Torbert of Semper Fi Web Designob_start_detected [-1,-1] -->
<meta name="description"  content="python3+paramiko实现sftp上传文件和文件夹" />

<meta name="keywords"  content="python3+paramiko实现sftp上传文件和文件夹,paramiko,python,“上了这套密码锁，你就无敌了”已被锁定
上了这套密码锁，你就无敌了,github上php资源汇总大全，php学习的好资料,php,ueditor,9fm，wordpress,wordpress,黑客,linux,bat,diskpart,windows,redhat,linux下的正则表达式,shell,tomcat" />
<link rel='next' href='http://www.geroro.com/page/2' />

<link rel="canonical" href="http://www.geroro.com/" />
<!-- /all in one seo pack -->
<link rel='dns-prefetch' href='//s0.wp.com' />
<link rel='dns-prefetch' href='//s.gravatar.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
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
<link rel='stylesheet' id='mekanews-lite-droid-sans-css'  href='//fonts.geekzu.org/css?family=Droid+Sans%3A400%2C700&#038;ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='http://www.geroro.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='mekanews-lite-style-css'  href='http://www.geroro.com/wp-content/themes/mekanews-lite/style.css?ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-css'  href='http://www.geroro.com/wp-content/themes/mekanews-lite/css/owl.carousel.css?ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='mekanews-lite-responsive-css'  href='http://www.geroro.com/wp-content/themes/mekanews-lite/css/responsive.css?ver=4.8' type='text/css' media='all' />
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
<style type='text/css'>img#wpstats{display:none}</style>		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		
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

<body class="home blog post-layout-small elementor-default">

<div id="page" class="site-container">
	<a class="skip-link screen-reader-text" href="#main">Skip to content</a>

	<header id="masthead" class="site-header" role="banner">
		
		<div class="site-branding">
			<div class="inner clearfix">				
								
				<div class="site-title">			
											<h1 class="title-logo" itemprop="headline" class="site-title">
							<a itemprop="url" href="http://www.geroro.com/" rel="home" title="很多事情只是不同，并无是非！">
								GERORO							</a>
						</h1>
						<h2 class="title-description">很多事情只是不同，并无是非！</h2>
								</div>
																		<div class="ads-728x90 ads-top">
						<div class="textwidget widget-text"><iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=298 height=52 src="//music.163.com/outchain/player?type=0&id=771583653&auto=0&height=32"></iframe></div>					</div>
										
			</div><!-- inner -->
		</div><!-- site-branding -->
		
					
				<div class="menu-container">
					<div class="inner clearfix">
						<nav id="site-navigation" class="secondary-navigation" role="navigation">
							<span class="mobile-only mobile-menu menu-toggle" aria-controls="menu-main-menu" aria-expanded="false">Menu</span>
						
							<ul id="menu-main-menu" class="menu"><li id="menu-item-194" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-194"><a href="http://www.geroro.com/home">主页</a></li>
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
</ul>							
						</nav><!-- #site-navigation -->						
					</div><!-- inner -->
				</div>
				<div id="catcher"></div>
						
		

	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="inner clearfix">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<div class="section-slide loading">
		<div id="slider" class="owl-carousel">
															<div class="item">
									<a href="http://www.geroro.com/archives/58">
										<img width="670" height="300" src="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?resize=670%2C300" class="attachment-mekanews-lite-banner-thumbnails size-mekanews-lite-banner-thumbnails wp-post-image" alt="" data-attachment-id="372" data-permalink="http://www.geroro.com/archives/58/attachment/1479735616780166" data-orig-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?fit=1023%2C762" data-orig-size="1023,762" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="1479735616780166" data-image-description="" data-medium-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?fit=300%2C223" data-large-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?fit=640%2C477" />									</a>
									<!-- modified date when last edited -->
									
									<span class="date">May 25, 2017</span>
									<p class="flex-caption">
										<a href="http://www.geroro.com/archives/58">Amber_PXE使用说明书</a>
									</p>					  
								</div>

														<div class="item">
									<a href="http://www.geroro.com/archives/60">
										<img width="670" height="300" src="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?resize=670%2C300" class="attachment-mekanews-lite-banner-thumbnails size-mekanews-lite-banner-thumbnails wp-post-image" alt="" data-attachment-id="372" data-permalink="http://www.geroro.com/archives/58/attachment/1479735616780166" data-orig-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?fit=1023%2C762" data-orig-size="1023,762" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="1479735616780166" data-image-description="" data-medium-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?fit=300%2C223" data-large-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?fit=640%2C477" />									</a>
									<!-- modified date when last edited -->
									
									<span class="date">May 25, 2017</span>
									<p class="flex-caption">
										<a href="http://www.geroro.com/archives/60">AmberPXE2.0更新说明</a>
									</p>					  
								</div>

														<div class="item">
									<a href="http://www.geroro.com/archives/56">
										<img width="670" height="300" src="https://i0.wp.com/www.geroro.com/wp-content/uploads/2016/11/1478174274307763.jpg?resize=670%2C300" class="attachment-mekanews-lite-banner-thumbnails size-mekanews-lite-banner-thumbnails wp-post-image" alt="" data-attachment-id="373" data-permalink="http://www.geroro.com/archives/56/attachment/1478174274307763" data-orig-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2016/11/1478174274307763.jpg?fit=691%2C519" data-orig-size="691,519" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="1478174274307763" data-image-description="" data-medium-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2016/11/1478174274307763.jpg?fit=300%2C225" data-large-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2016/11/1478174274307763.jpg?fit=640%2C481" />									</a>
									<!-- modified date when last edited -->
									
									<span class="date">March 12, 2017</span>
									<p class="flex-caption">
										<a href="http://www.geroro.com/archives/56">Amber_PE 使用手册</a>
									</p>					  
								</div>

														<div class="item">
									<a href="http://www.geroro.com/archives/1044">
										<img width="670" height="300" src="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/paramiko.jpg?resize=670%2C300" class="attachment-mekanews-lite-banner-thumbnails size-mekanews-lite-banner-thumbnails wp-post-image" alt="" data-attachment-id="1045" data-permalink="http://www.geroro.com/archives/1044/paramiko" data-orig-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/paramiko.jpg?fit=1248%2C714" data-orig-size="1248,714" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="paramiko" data-image-description="" data-medium-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/paramiko.jpg?fit=300%2C172" data-large-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/paramiko.jpg?fit=640%2C366" />									</a>
									<!-- modified date when last edited -->
									
									<span class="date">July 21, 2017</span>
									<p class="flex-caption">
										<a href="http://www.geroro.com/archives/1044">python3+paramiko实现sftp上传文件和文件夹</a>
									</p>					  
								</div>

														<div class="item">
									<a href="http://www.geroro.com/archives/918">
										<img width="670" height="300" src="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/07/4a.jpg?resize=670%2C300" class="attachment-mekanews-lite-banner-thumbnails size-mekanews-lite-banner-thumbnails wp-post-image" alt="" data-attachment-id="921" data-permalink="http://www.geroro.com/archives/918/4a" data-orig-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/07/4a.jpg?fit=800%2C448" data-orig-size="800,448" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="4a" data-image-description="" data-medium-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/07/4a.jpg?fit=300%2C168" data-large-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/07/4a.jpg?fit=640%2C358" />									</a>
									<!-- modified date when last edited -->
									
									<span class="date">July 3, 2017</span>
									<p class="flex-caption">
										<a href="http://www.geroro.com/archives/918">上了这套密码锁，你就无敌了</a>
									</p>					  
								</div>

														<div class="item">
									<a href="http://www.geroro.com/archives/878">
										<img width="670" height="300" src="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/58058483b692e.jpg?resize=670%2C300" class="attachment-mekanews-lite-banner-thumbnails size-mekanews-lite-banner-thumbnails wp-post-image" alt="" data-attachment-id="917" data-permalink="http://www.geroro.com/archives/878/58058483b692e" data-orig-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/58058483b692e.jpg?fit=720%2C405" data-orig-size="720,405" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="58058483b692e" data-image-description="" data-medium-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/58058483b692e.jpg?fit=300%2C169" data-large-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/58058483b692e.jpg?fit=640%2C360" />									</a>
									<!-- modified date when last edited -->
									
									<span class="date">July 2, 2017</span>
									<p class="flex-caption">
										<a href="http://www.geroro.com/archives/878">Github上PHP资源汇总大全，php学习的好资料</a>
									</p>					  
								</div>

														<div class="item">
									<a href="http://www.geroro.com/archives/905">
										<img width="670" height="300" src="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/35774425.jpg?resize=670%2C300" class="attachment-mekanews-lite-banner-thumbnails size-mekanews-lite-banner-thumbnails wp-post-image" alt="" data-attachment-id="907" data-permalink="http://www.geroro.com/archives/905/attachment/35774425" data-orig-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/35774425.jpg?fit=960%2C639" data-orig-size="960,639" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="35774425" data-image-description="" data-medium-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/35774425.jpg?fit=300%2C200" data-large-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/35774425.jpg?fit=640%2C426" />									</a>
									<!-- modified date when last edited -->
									
									<span class="date">June 30, 2017</span>
									<p class="flex-caption">
										<a href="http://www.geroro.com/archives/905">集成9FM的Ueditor1.4.3.3版本for最新WordPress4.8</a>
									</p>					  
								</div>

														<div class="item">
									<a href="http://www.geroro.com/archives/820">
										<img width="670" height="300" src="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/098.jpg?resize=670%2C300" class="attachment-mekanews-lite-banner-thumbnails size-mekanews-lite-banner-thumbnails wp-post-image" alt="" data-attachment-id="821" data-permalink="http://www.geroro.com/archives/820/attachment/098" data-orig-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/098.jpg?fit=1024%2C833" data-orig-size="1024,833" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="098" data-image-description="" data-medium-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/098.jpg?fit=300%2C244" data-large-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/098.jpg?fit=640%2C521" />									</a>
									<!-- modified date when last edited -->
									
									<span class="date">June 24, 2017</span>
									<p class="flex-caption">
										<a href="http://www.geroro.com/archives/820">linux和黑客关系图</a>
									</p>					  
								</div>

														<div class="item">
									<a href="http://www.geroro.com/archives/817">
										<img width="670" height="300" src="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/246547676jpg.jpg?resize=670%2C300" class="attachment-mekanews-lite-banner-thumbnails size-mekanews-lite-banner-thumbnails wp-post-image" alt="" srcset="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/246547676jpg.jpg?resize=670%2C300 670w, https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/246547676jpg.jpg?zoom=2&amp;resize=670%2C300 1340w" sizes="(max-width: 670px) 100vw, 670px" data-attachment-id="818" data-permalink="http://www.geroro.com/archives/817/246547676jpg" data-orig-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/246547676jpg.jpg?fit=1347%2C626" data-orig-size="1347,626" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="246547676jpg" data-image-description="" data-medium-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/246547676jpg.jpg?fit=300%2C139" data-large-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/246547676jpg.jpg?fit=640%2C298" />									</a>
									<!-- modified date when last edited -->
									
									<span class="date">June 24, 2017</span>
									<p class="flex-caption">
										<a href="http://www.geroro.com/archives/817">BAT脚本编写教程(比较易懂和全面)</a>
									</p>					  
								</div>

														<div class="item">
									<a href="http://www.geroro.com/archives/814">
										<img width="670" height="300" src="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/09876543.jpg?resize=670%2C300" class="attachment-mekanews-lite-banner-thumbnails size-mekanews-lite-banner-thumbnails wp-post-image" alt="" data-attachment-id="815" data-permalink="http://www.geroro.com/archives/814/attachment/09876543" data-orig-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/09876543.jpg?fit=1265%2C548" data-orig-size="1265,548" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="09876543" data-image-description="" data-medium-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/09876543.jpg?fit=300%2C130" data-large-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/09876543.jpg?fit=640%2C278" />									</a>
									<!-- modified date when last edited -->
									
									<span class="date">June 24, 2017</span>
									<p class="flex-caption">
										<a href="http://www.geroro.com/archives/814">Diskpart工具简单用法：查看分区信息</a>
									</p>					  
								</div>

														<div class="item">
									<a href="http://www.geroro.com/archives/811">
										<img width="670" height="300" src="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/1235467222.jpg?resize=670%2C300" class="attachment-mekanews-lite-banner-thumbnails size-mekanews-lite-banner-thumbnails wp-post-image" alt="" data-attachment-id="812" data-permalink="http://www.geroro.com/archives/811/attachment/1235467222" data-orig-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/1235467222.jpg?fit=894%2C496" data-orig-size="894,496" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="1235467222" data-image-description="" data-medium-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/1235467222.jpg?fit=300%2C166" data-large-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/1235467222.jpg?fit=640%2C355" />									</a>
									<!-- modified date when last edited -->
									
									<span class="date">June 30, 2017</span>
									<p class="flex-caption">
										<a href="http://www.geroro.com/archives/811">红帽下载地址整理。。。</a>
									</p>					  
								</div>

														<div class="item">
									<a href="http://www.geroro.com/archives/808">
										<img width="670" height="300" src="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/755.jpg?resize=670%2C300" class="attachment-mekanews-lite-banner-thumbnails size-mekanews-lite-banner-thumbnails wp-post-image" alt="" data-attachment-id="809" data-permalink="http://www.geroro.com/archives/808/attachment/755" data-orig-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/755.jpg?fit=1051%2C647" data-orig-size="1051,647" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="755" data-image-description="" data-medium-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/755.jpg?fit=300%2C185" data-large-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/755.jpg?fit=640%2C394" />									</a>
									<!-- modified date when last edited -->
									
									<span class="date">June 24, 2017</span>
									<p class="flex-caption">
										<a href="http://www.geroro.com/archives/808">linux下的正则表达式</a>
									</p>					  
								</div>

														<div class="item">
									<a href="http://www.geroro.com/archives/805">
										<img width="670" height="300" src="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/76532.jpg?resize=670%2C300" class="attachment-mekanews-lite-banner-thumbnails size-mekanews-lite-banner-thumbnails wp-post-image" alt="" data-attachment-id="807" data-permalink="http://www.geroro.com/archives/805/attachment/76532" data-orig-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/76532.jpg?fit=1210%2C825" data-orig-size="1210,825" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="76532" data-image-description="" data-medium-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/76532.jpg?fit=300%2C205" data-large-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/76532.jpg?fit=640%2C436" />									</a>
									<!-- modified date when last edited -->
									
									<span class="date">June 24, 2017</span>
									<p class="flex-caption">
										<a href="http://www.geroro.com/archives/805">Tomcat配置详解</a>
									</p>					  
								</div>

						
				</div>



	<div id="controlNav" class="owl-carousel">
												<div class="item">
							<img width="134" height="100" src="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?resize=134%2C100" class="attachment-mekanews-lite-banner-thumbnails-list size-mekanews-lite-banner-thumbnails-list wp-post-image" alt="" srcset="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?w=1023 1023w, https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?resize=300%2C223 300w, https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?resize=768%2C572 768w, https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?resize=134%2C100 134w" sizes="(max-width: 134px) 100vw, 134px" data-attachment-id="372" data-permalink="http://www.geroro.com/archives/58/attachment/1479735616780166" data-orig-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?fit=1023%2C762" data-orig-size="1023,762" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="1479735616780166" data-image-description="" data-medium-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?fit=300%2C223" data-large-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?fit=640%2C477" />						</div>

												<div class="item">
							<img width="134" height="100" src="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?resize=134%2C100" class="attachment-mekanews-lite-banner-thumbnails-list size-mekanews-lite-banner-thumbnails-list wp-post-image" alt="" srcset="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?w=1023 1023w, https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?resize=300%2C223 300w, https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?resize=768%2C572 768w, https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?resize=134%2C100 134w" sizes="(max-width: 134px) 100vw, 134px" data-attachment-id="372" data-permalink="http://www.geroro.com/archives/58/attachment/1479735616780166" data-orig-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?fit=1023%2C762" data-orig-size="1023,762" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="1479735616780166" data-image-description="" data-medium-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?fit=300%2C223" data-large-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/1479735616780166.png?fit=640%2C477" />						</div>

												<div class="item">
							<img width="134" height="100" src="https://i0.wp.com/www.geroro.com/wp-content/uploads/2016/11/1478174274307763.jpg?resize=134%2C100" class="attachment-mekanews-lite-banner-thumbnails-list size-mekanews-lite-banner-thumbnails-list wp-post-image" alt="" srcset="https://i0.wp.com/www.geroro.com/wp-content/uploads/2016/11/1478174274307763.jpg?w=691 691w, https://i0.wp.com/www.geroro.com/wp-content/uploads/2016/11/1478174274307763.jpg?resize=300%2C225 300w, https://i0.wp.com/www.geroro.com/wp-content/uploads/2016/11/1478174274307763.jpg?resize=134%2C100 134w" sizes="(max-width: 134px) 100vw, 134px" data-attachment-id="373" data-permalink="http://www.geroro.com/archives/56/attachment/1478174274307763" data-orig-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2016/11/1478174274307763.jpg?fit=691%2C519" data-orig-size="691,519" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="1478174274307763" data-image-description="" data-medium-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2016/11/1478174274307763.jpg?fit=300%2C225" data-large-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2016/11/1478174274307763.jpg?fit=640%2C481" />						</div>

												<div class="item">
							<img width="134" height="100" src="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/paramiko.jpg?resize=134%2C100" class="attachment-mekanews-lite-banner-thumbnails-list size-mekanews-lite-banner-thumbnails-list wp-post-image" alt="" srcset="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/paramiko.jpg?resize=134%2C100 134w, https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/paramiko.jpg?zoom=2&amp;resize=134%2C100 268w, https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/paramiko.jpg?zoom=3&amp;resize=134%2C100 402w" sizes="(max-width: 134px) 100vw, 134px" data-attachment-id="1045" data-permalink="http://www.geroro.com/archives/1044/paramiko" data-orig-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/paramiko.jpg?fit=1248%2C714" data-orig-size="1248,714" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="paramiko" data-image-description="" data-medium-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/paramiko.jpg?fit=300%2C172" data-large-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/paramiko.jpg?fit=640%2C366" />						</div>

												<div class="item">
							<img width="134" height="100" src="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/07/4a.jpg?resize=134%2C100" class="attachment-mekanews-lite-banner-thumbnails-list size-mekanews-lite-banner-thumbnails-list wp-post-image" alt="" srcset="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/07/4a.jpg?resize=134%2C100 134w, https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/07/4a.jpg?zoom=2&amp;resize=134%2C100 268w, https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/07/4a.jpg?zoom=3&amp;resize=134%2C100 402w" sizes="(max-width: 134px) 100vw, 134px" data-attachment-id="921" data-permalink="http://www.geroro.com/archives/918/4a" data-orig-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/07/4a.jpg?fit=800%2C448" data-orig-size="800,448" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="4a" data-image-description="" data-medium-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/07/4a.jpg?fit=300%2C168" data-large-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/07/4a.jpg?fit=640%2C358" />						</div>

												<div class="item">
							<img width="134" height="100" src="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/58058483b692e.jpg?resize=134%2C100" class="attachment-mekanews-lite-banner-thumbnails-list size-mekanews-lite-banner-thumbnails-list wp-post-image" alt="" srcset="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/58058483b692e.jpg?resize=134%2C100 134w, https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/58058483b692e.jpg?zoom=2&amp;resize=134%2C100 268w, https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/58058483b692e.jpg?zoom=3&amp;resize=134%2C100 402w" sizes="(max-width: 134px) 100vw, 134px" data-attachment-id="917" data-permalink="http://www.geroro.com/archives/878/58058483b692e" data-orig-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/58058483b692e.jpg?fit=720%2C405" data-orig-size="720,405" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="58058483b692e" data-image-description="" data-medium-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/58058483b692e.jpg?fit=300%2C169" data-large-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/58058483b692e.jpg?fit=640%2C360" />						</div>

												<div class="item">
							<img width="134" height="100" src="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/35774425.jpg?resize=134%2C100" class="attachment-mekanews-lite-banner-thumbnails-list size-mekanews-lite-banner-thumbnails-list wp-post-image" alt="" srcset="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/35774425.jpg?resize=134%2C100 134w, https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/35774425.jpg?zoom=2&amp;resize=134%2C100 268w, https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/35774425.jpg?zoom=3&amp;resize=134%2C100 402w" sizes="(max-width: 134px) 100vw, 134px" data-attachment-id="907" data-permalink="http://www.geroro.com/archives/905/attachment/35774425" data-orig-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/35774425.jpg?fit=960%2C639" data-orig-size="960,639" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="35774425" data-image-description="" data-medium-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/35774425.jpg?fit=300%2C200" data-large-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/35774425.jpg?fit=640%2C426" />						</div>

												<div class="item">
							<img width="134" height="100" src="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/098.jpg?resize=134%2C100" class="attachment-mekanews-lite-banner-thumbnails-list size-mekanews-lite-banner-thumbnails-list wp-post-image" alt="" srcset="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/098.jpg?resize=134%2C100 134w, https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/098.jpg?zoom=2&amp;resize=134%2C100 268w, https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/098.jpg?zoom=3&amp;resize=134%2C100 402w" sizes="(max-width: 134px) 100vw, 134px" data-attachment-id="821" data-permalink="http://www.geroro.com/archives/820/attachment/098" data-orig-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/098.jpg?fit=1024%2C833" data-orig-size="1024,833" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="098" data-image-description="" data-medium-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/098.jpg?fit=300%2C244" data-large-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/098.jpg?fit=640%2C521" />						</div>

												<div class="item">
							<img width="134" height="100" src="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/246547676jpg.jpg?resize=134%2C100" class="attachment-mekanews-lite-banner-thumbnails-list size-mekanews-lite-banner-thumbnails-list wp-post-image" alt="" srcset="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/246547676jpg.jpg?resize=134%2C100 134w, https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/246547676jpg.jpg?zoom=2&amp;resize=134%2C100 268w, https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/246547676jpg.jpg?zoom=3&amp;resize=134%2C100 402w" sizes="(max-width: 134px) 100vw, 134px" data-attachment-id="818" data-permalink="http://www.geroro.com/archives/817/246547676jpg" data-orig-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/246547676jpg.jpg?fit=1347%2C626" data-orig-size="1347,626" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="246547676jpg" data-image-description="" data-medium-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/246547676jpg.jpg?fit=300%2C139" data-large-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/246547676jpg.jpg?fit=640%2C298" />						</div>

												<div class="item">
							<img width="134" height="100" src="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/09876543.jpg?resize=134%2C100" class="attachment-mekanews-lite-banner-thumbnails-list size-mekanews-lite-banner-thumbnails-list wp-post-image" alt="" srcset="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/09876543.jpg?resize=134%2C100 134w, https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/09876543.jpg?zoom=2&amp;resize=134%2C100 268w, https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/09876543.jpg?zoom=3&amp;resize=134%2C100 402w" sizes="(max-width: 134px) 100vw, 134px" data-attachment-id="815" data-permalink="http://www.geroro.com/archives/814/attachment/09876543" data-orig-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/09876543.jpg?fit=1265%2C548" data-orig-size="1265,548" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="09876543" data-image-description="" data-medium-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/09876543.jpg?fit=300%2C130" data-large-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/09876543.jpg?fit=640%2C278" />						</div>

												<div class="item">
							<img width="134" height="100" src="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/1235467222.jpg?resize=134%2C100" class="attachment-mekanews-lite-banner-thumbnails-list size-mekanews-lite-banner-thumbnails-list wp-post-image" alt="" srcset="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/1235467222.jpg?resize=134%2C100 134w, https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/1235467222.jpg?zoom=2&amp;resize=134%2C100 268w, https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/1235467222.jpg?zoom=3&amp;resize=134%2C100 402w" sizes="(max-width: 134px) 100vw, 134px" data-attachment-id="812" data-permalink="http://www.geroro.com/archives/811/attachment/1235467222" data-orig-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/1235467222.jpg?fit=894%2C496" data-orig-size="894,496" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="1235467222" data-image-description="" data-medium-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/1235467222.jpg?fit=300%2C166" data-large-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/1235467222.jpg?fit=640%2C355" />						</div>

												<div class="item">
							<img width="134" height="100" src="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/755.jpg?resize=134%2C100" class="attachment-mekanews-lite-banner-thumbnails-list size-mekanews-lite-banner-thumbnails-list wp-post-image" alt="" srcset="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/755.jpg?resize=134%2C100 134w, https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/755.jpg?zoom=2&amp;resize=134%2C100 268w, https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/755.jpg?zoom=3&amp;resize=134%2C100 402w" sizes="(max-width: 134px) 100vw, 134px" data-attachment-id="809" data-permalink="http://www.geroro.com/archives/808/attachment/755" data-orig-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/755.jpg?fit=1051%2C647" data-orig-size="1051,647" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="755" data-image-description="" data-medium-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/755.jpg?fit=300%2C185" data-large-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/755.jpg?fit=640%2C394" />						</div>

												<div class="item">
							<img width="134" height="100" src="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/76532.jpg?resize=134%2C100" class="attachment-mekanews-lite-banner-thumbnails-list size-mekanews-lite-banner-thumbnails-list wp-post-image" alt="" srcset="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/76532.jpg?resize=134%2C100 134w, https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/76532.jpg?zoom=2&amp;resize=134%2C100 268w, https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/76532.jpg?zoom=3&amp;resize=134%2C100 402w" sizes="(max-width: 134px) 100vw, 134px" data-attachment-id="807" data-permalink="http://www.geroro.com/archives/805/attachment/76532" data-orig-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/76532.jpg?fit=1210%2C825" data-orig-size="1210,825" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="76532" data-image-description="" data-medium-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/76532.jpg?fit=300%2C205" data-large-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/76532.jpg?fit=640%2C436" />						</div>

															
	<!-- items mirrored twice, total of 12 -->
	</div>
</div>

			
						<h2 class="lastest-title">Latest Post</h2>
		
			
			<div class="post-wrap clearfix">
			
<article id="post-1044" class="post-item clearfix post-1044 post type-post status-publish format-standard has-post-thumbnail hentry category-python tag-paramiko tag-python">

	<div class="post-thumbnail">
		<a href="http://www.geroro.com/archives/1044" rel="bookmark" class="featured-thumbnail">
					<img width="220" height="170" src="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/paramiko.jpg?resize=220%2C170" class="attachment-mekanews-lite-post-thumbnails-list size-mekanews-lite-post-thumbnails-list wp-post-image" alt="" srcset="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/paramiko.jpg?resize=220%2C170 220w, https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/paramiko.jpg?zoom=2&amp;resize=220%2C170 440w, https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/paramiko.jpg?zoom=3&amp;resize=220%2C170 660w" sizes="(max-width: 220px) 100vw, 220px" data-attachment-id="1045" data-permalink="http://www.geroro.com/archives/1044/paramiko" data-orig-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/paramiko.jpg?fit=1248%2C714" data-orig-size="1248,714" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="paramiko" data-image-description="" data-medium-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/paramiko.jpg?fit=300%2C172" data-large-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/paramiko.jpg?fit=640%2C366" />				</a>
	</div><!-- .post-thumbnail -->
	<div class="post-content">
		<header class="entry-header">
			<h2 class="entry-title"><a href="http://www.geroro.com/archives/1044" rel="bookmark">python3+paramiko实现sftp上传文件和文件夹</a></h2>			<div class="entry-meta">
				<span class="byline"><i class="fa fa-user" aria-hidden="true"></i><span class="author vcard"><a class="url fn n" href="http://www.geroro.com/archives/author/admin">琥珀君</a></span></span><span class="posted-on"><i class="fa fa-calendar" aria-hidden="true"></i><a href="http://www.geroro.com/archives/1044" rel="bookmark"><time class="entry-date published" datetime="2017年7月21日">2017年7月21日</time></a> </span>				
				<span class="comments-link"><i class="fa fa-comment" aria-hidden="true"></i><a href="http://www.geroro.com/archives/1044#respond">评论<span class="screen-reader-text"> on python3+paramiko实现sftp上传文件和文件夹</span></a></span>			</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

		<div class="entry-content">
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;初学python，又初学paramiko，觉得paramiko的功能实在是太强大了。但是paramiko对于上传文件十分方便，对于上传文件夹却不行。这实在是有点鸡肋了。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;为了解决这个问题，就用python3+p&#8230;&#8230;继续阅读 >></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/1044" data-a2a-title="python3+paramiko实现sftp上传文件和文件夹"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F1044&amp;linkname=python3%2Bparamiko%E5%AE%9E%E7%8E%B0sftp%E4%B8%8A%E4%BC%A0%E6%96%87%E4%BB%B6%E5%92%8C%E6%96%87%E4%BB%B6%E5%A4%B9" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F1044&amp;linkname=python3%2Bparamiko%E5%AE%9E%E7%8E%B0sftp%E4%B8%8A%E4%BC%A0%E6%96%87%E4%BB%B6%E5%92%8C%E6%96%87%E4%BB%B6%E5%A4%B9" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F1044&amp;linkname=python3%2Bparamiko%E5%AE%9E%E7%8E%B0sftp%E4%B8%8A%E4%BC%A0%E6%96%87%E4%BB%B6%E5%92%8C%E6%96%87%E4%BB%B6%E5%A4%B9" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F1044&amp;linkname=python3%2Bparamiko%E5%AE%9E%E7%8E%B0sftp%E4%B8%8A%E4%BC%A0%E6%96%87%E4%BB%B6%E5%92%8C%E6%96%87%E4%BB%B6%E5%A4%B9" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>
				<a class="btn-read-more" href="http://www.geroro.com/archives/1044" rel="bookmark" title="python3+paramiko实现sftp上传文件和文件夹"><span>阅读更多</span></a>
		</div><!-- .entry-content -->
	</div><!-- .post-content -->
</article><!-- #post-## -->

<article id="post-918" class="post-item clearfix post-918 post type-post status-publish format-standard has-post-thumbnail hentry category-feel">

	<div class="post-thumbnail">
		<a href="http://www.geroro.com/archives/918" rel="bookmark" class="featured-thumbnail">
					<img width="220" height="170" src="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/07/4a.jpg?resize=220%2C170" class="attachment-mekanews-lite-post-thumbnails-list size-mekanews-lite-post-thumbnails-list wp-post-image" alt="" srcset="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/07/4a.jpg?resize=220%2C170 220w, https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/07/4a.jpg?zoom=2&amp;resize=220%2C170 440w, https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/07/4a.jpg?zoom=3&amp;resize=220%2C170 660w" sizes="(max-width: 220px) 100vw, 220px" data-attachment-id="921" data-permalink="http://www.geroro.com/archives/918/4a" data-orig-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/07/4a.jpg?fit=800%2C448" data-orig-size="800,448" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="4a" data-image-description="" data-medium-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/07/4a.jpg?fit=300%2C168" data-large-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/07/4a.jpg?fit=640%2C358" />				</a>
	</div><!-- .post-thumbnail -->
	<div class="post-content">
		<header class="entry-header">
			<h2 class="entry-title"><a href="http://www.geroro.com/archives/918" rel="bookmark">上了这套密码锁，你就无敌了</a></h2>			<div class="entry-meta">
				<span class="byline"><i class="fa fa-user" aria-hidden="true"></i><span class="author vcard"><a class="url fn n" href="http://www.geroro.com/archives/author/admin">琥珀君</a></span></span><span class="posted-on"><i class="fa fa-calendar" aria-hidden="true"></i><a href="http://www.geroro.com/archives/918" rel="bookmark"><time class="entry-date published" datetime="2017年7月3日">2017年7月3日</time></a> </span>				
				<span class="comments-link"><i class="fa fa-comment" aria-hidden="true"></i><a href="http://www.geroro.com/archives/918#respond">评论<span class="screen-reader-text"> on 上了这套密码锁，你就无敌了</span></a></span>			</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

		<div class="entry-content">
			<p>上了这套密码锁，你就无敌了 按照重要性不同，我们把密码分成ABC三大类： A类：极客密码，比如银行账户、支付宝、重要邮件密码，以及涉及个人重要隐私的网盘、相册密码等，该类最烧脑，要各个不同。 B类：高频密码，比如QQ、微博、FB等社交工具，以及经常登录的网站密码，该类使用频次高，又涉及个人隐私，建议至少提供3种以上的密码选择。 C类：临时密码，对于一些临时或偶尔使用的网站，又无关利益，不需要特别记&#8230;&#8230;继续阅读 >></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/918" data-a2a-title="上了这套密码锁，你就无敌了"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F918&amp;linkname=%E4%B8%8A%E4%BA%86%E8%BF%99%E5%A5%97%E5%AF%86%E7%A0%81%E9%94%81%EF%BC%8C%E4%BD%A0%E5%B0%B1%E6%97%A0%E6%95%8C%E4%BA%86" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F918&amp;linkname=%E4%B8%8A%E4%BA%86%E8%BF%99%E5%A5%97%E5%AF%86%E7%A0%81%E9%94%81%EF%BC%8C%E4%BD%A0%E5%B0%B1%E6%97%A0%E6%95%8C%E4%BA%86" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F918&amp;linkname=%E4%B8%8A%E4%BA%86%E8%BF%99%E5%A5%97%E5%AF%86%E7%A0%81%E9%94%81%EF%BC%8C%E4%BD%A0%E5%B0%B1%E6%97%A0%E6%95%8C%E4%BA%86" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F918&amp;linkname=%E4%B8%8A%E4%BA%86%E8%BF%99%E5%A5%97%E5%AF%86%E7%A0%81%E9%94%81%EF%BC%8C%E4%BD%A0%E5%B0%B1%E6%97%A0%E6%95%8C%E4%BA%86" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>
				<a class="btn-read-more" href="http://www.geroro.com/archives/918" rel="bookmark" title="上了这套密码锁，你就无敌了"><span>阅读更多</span></a>
		</div><!-- .entry-content -->
	</div><!-- .post-content -->
</article><!-- #post-## -->

<article id="post-878" class="post-item clearfix post-878 post type-post status-publish format-standard has-post-thumbnail hentry category-php tag-php">

	<div class="post-thumbnail">
		<a href="http://www.geroro.com/archives/878" rel="bookmark" class="featured-thumbnail">
					<img width="220" height="170" src="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/58058483b692e.jpg?resize=220%2C170" class="attachment-mekanews-lite-post-thumbnails-list size-mekanews-lite-post-thumbnails-list wp-post-image" alt="" srcset="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/58058483b692e.jpg?resize=220%2C170 220w, https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/58058483b692e.jpg?zoom=2&amp;resize=220%2C170 440w, https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/58058483b692e.jpg?zoom=3&amp;resize=220%2C170 660w" sizes="(max-width: 220px) 100vw, 220px" data-attachment-id="917" data-permalink="http://www.geroro.com/archives/878/58058483b692e" data-orig-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/58058483b692e.jpg?fit=720%2C405" data-orig-size="720,405" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="58058483b692e" data-image-description="" data-medium-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/58058483b692e.jpg?fit=300%2C169" data-large-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/07/58058483b692e.jpg?fit=640%2C360" />				</a>
	</div><!-- .post-thumbnail -->
	<div class="post-content">
		<header class="entry-header">
			<h2 class="entry-title"><a href="http://www.geroro.com/archives/878" rel="bookmark">Github上PHP资源汇总大全，php学习的好资料</a></h2>			<div class="entry-meta">
				<span class="byline"><i class="fa fa-user" aria-hidden="true"></i><span class="author vcard"><a class="url fn n" href="http://www.geroro.com/archives/author/admin">琥珀君</a></span></span><span class="posted-on"><i class="fa fa-calendar" aria-hidden="true"></i><a href="http://www.geroro.com/archives/878" rel="bookmark"><time class="entry-date published" datetime="2017年7月2日">2017年7月2日</time></a> </span>				
				<span class="comments-link"><i class="fa fa-comment" aria-hidden="true"></i><a href="http://www.geroro.com/archives/878#respond">评论<span class="screen-reader-text"> on Github上PHP资源汇总大全，php学习的好资料</span></a></span>			</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

		<div class="entry-content">
			<p>Github上PHP资源汇总大全，php学习的好资料 国外程序员ziadoz 在Github上收集整理了PHP的各种资源，内容包括模板、框架、数据库、安全等方面的库和工具。汇总了各种PHP资源，供各位PHP学习者和程序员参考。英文原文：https://github.com/ziadoz/awesome-php 依赖管理 ——用于依赖管理的包和框架Composer/Packagist&nbsp;:&#038;&#8230;&#8230;继续阅读 >></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/878" data-a2a-title="Github上PHP资源汇总大全，php学习的好资料"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F878&amp;linkname=Github%E4%B8%8APHP%E8%B5%84%E6%BA%90%E6%B1%87%E6%80%BB%E5%A4%A7%E5%85%A8%EF%BC%8Cphp%E5%AD%A6%E4%B9%A0%E7%9A%84%E5%A5%BD%E8%B5%84%E6%96%99" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F878&amp;linkname=Github%E4%B8%8APHP%E8%B5%84%E6%BA%90%E6%B1%87%E6%80%BB%E5%A4%A7%E5%85%A8%EF%BC%8Cphp%E5%AD%A6%E4%B9%A0%E7%9A%84%E5%A5%BD%E8%B5%84%E6%96%99" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F878&amp;linkname=Github%E4%B8%8APHP%E8%B5%84%E6%BA%90%E6%B1%87%E6%80%BB%E5%A4%A7%E5%85%A8%EF%BC%8Cphp%E5%AD%A6%E4%B9%A0%E7%9A%84%E5%A5%BD%E8%B5%84%E6%96%99" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F878&amp;linkname=Github%E4%B8%8APHP%E8%B5%84%E6%BA%90%E6%B1%87%E6%80%BB%E5%A4%A7%E5%85%A8%EF%BC%8Cphp%E5%AD%A6%E4%B9%A0%E7%9A%84%E5%A5%BD%E8%B5%84%E6%96%99" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>
				<a class="btn-read-more" href="http://www.geroro.com/archives/878" rel="bookmark" title="Github上PHP资源汇总大全，php学习的好资料"><span>阅读更多</span></a>
		</div><!-- .entry-content -->
	</div><!-- .post-content -->
</article><!-- #post-## -->

<article id="post-905" class="post-item clearfix post-905 post type-post status-publish format-standard has-post-thumbnail hentry category-php tag-php tag-wordpress">

	<div class="post-thumbnail">
		<a href="http://www.geroro.com/archives/905" rel="bookmark" class="featured-thumbnail">
					<img width="220" height="170" src="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/35774425.jpg?resize=220%2C170" class="attachment-mekanews-lite-post-thumbnails-list size-mekanews-lite-post-thumbnails-list wp-post-image" alt="" srcset="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/35774425.jpg?resize=220%2C170 220w, https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/35774425.jpg?zoom=2&amp;resize=220%2C170 440w, https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/35774425.jpg?zoom=3&amp;resize=220%2C170 660w" sizes="(max-width: 220px) 100vw, 220px" data-attachment-id="907" data-permalink="http://www.geroro.com/archives/905/attachment/35774425" data-orig-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/35774425.jpg?fit=960%2C639" data-orig-size="960,639" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="35774425" data-image-description="" data-medium-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/35774425.jpg?fit=300%2C200" data-large-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/35774425.jpg?fit=640%2C426" />				</a>
	</div><!-- .post-thumbnail -->
	<div class="post-content">
		<header class="entry-header">
			<h2 class="entry-title"><a href="http://www.geroro.com/archives/905" rel="bookmark">集成9FM的Ueditor1.4.3.3版本for最新WordPress4.8</a></h2>			<div class="entry-meta">
				<span class="byline"><i class="fa fa-user" aria-hidden="true"></i><span class="author vcard"><a class="url fn n" href="http://www.geroro.com/archives/author/admin">琥珀君</a></span></span><span class="posted-on"><i class="fa fa-calendar" aria-hidden="true"></i><a href="http://www.geroro.com/archives/905" rel="bookmark"><time class="entry-date published" datetime="2017年6月30日">2017年6月30日</time></a> </span>				
				<span class="comments-link"><i class="fa fa-comment" aria-hidden="true"></i><a href="http://www.geroro.com/archives/905#comments"><span class="screen-reader-text">集成9FM的Ueditor1.4.3.3版本for最新WordPress4.8</span>有5条评论</a></span>			</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

		<div class="entry-content">
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;前言：考虑一款方便排版文章的编辑器是迫在眉睫，好在搜索到一款百度编辑器Ueditor，这款编辑器是由百度WEB前端研发部开发的所见即所得的开源富文本编辑器，具有轻量、可定制、用户体验优秀等特点。开源基于BSD协议，所有源代码在协议允许范围内可自由修改和使用。百度UEditor的推出，可以帮助不少网站开发&#8230;&#8230;继续阅读 >></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/905" data-a2a-title="集成9FM的Ueditor1.4.3.3版本for最新WordPress4.8"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F905&amp;linkname=%E9%9B%86%E6%88%909FM%E7%9A%84Ueditor1.4.3.3%E7%89%88%E6%9C%ACfor%E6%9C%80%E6%96%B0WordPress4.8" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F905&amp;linkname=%E9%9B%86%E6%88%909FM%E7%9A%84Ueditor1.4.3.3%E7%89%88%E6%9C%ACfor%E6%9C%80%E6%96%B0WordPress4.8" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F905&amp;linkname=%E9%9B%86%E6%88%909FM%E7%9A%84Ueditor1.4.3.3%E7%89%88%E6%9C%ACfor%E6%9C%80%E6%96%B0WordPress4.8" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F905&amp;linkname=%E9%9B%86%E6%88%909FM%E7%9A%84Ueditor1.4.3.3%E7%89%88%E6%9C%ACfor%E6%9C%80%E6%96%B0WordPress4.8" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>
				<a class="btn-read-more" href="http://www.geroro.com/archives/905" rel="bookmark" title="集成9FM的Ueditor1.4.3.3版本for最新WordPress4.8"><span>阅读更多</span></a>
		</div><!-- .entry-content -->
	</div><!-- .post-content -->
</article><!-- #post-## -->

<article id="post-820" class="post-item clearfix post-820 post type-post status-publish format-standard has-post-thumbnail hentry category-lix tag-linux">

	<div class="post-thumbnail">
		<a href="http://www.geroro.com/archives/820" rel="bookmark" class="featured-thumbnail">
					<img width="220" height="170" src="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/098.jpg?resize=220%2C170" class="attachment-mekanews-lite-post-thumbnails-list size-mekanews-lite-post-thumbnails-list wp-post-image" alt="" srcset="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/098.jpg?resize=220%2C170 220w, https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/098.jpg?zoom=2&amp;resize=220%2C170 440w, https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/098.jpg?zoom=3&amp;resize=220%2C170 660w" sizes="(max-width: 220px) 100vw, 220px" data-attachment-id="821" data-permalink="http://www.geroro.com/archives/820/attachment/098" data-orig-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/098.jpg?fit=1024%2C833" data-orig-size="1024,833" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="098" data-image-description="" data-medium-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/098.jpg?fit=300%2C244" data-large-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/098.jpg?fit=640%2C521" />				</a>
	</div><!-- .post-thumbnail -->
	<div class="post-content">
		<header class="entry-header">
			<h2 class="entry-title"><a href="http://www.geroro.com/archives/820" rel="bookmark">linux和黑客关系图</a></h2>			<div class="entry-meta">
				<span class="byline"><i class="fa fa-user" aria-hidden="true"></i><span class="author vcard"><a class="url fn n" href="http://www.geroro.com/archives/author/admin">琥珀君</a></span></span><span class="posted-on"><i class="fa fa-calendar" aria-hidden="true"></i><a href="http://www.geroro.com/archives/820" rel="bookmark"><time class="entry-date published" datetime="2017年6月24日">2017年6月24日</time></a> </span>				
				<span class="comments-link"><i class="fa fa-comment" aria-hidden="true"></i><a href="http://www.geroro.com/archives/820#respond">评论<span class="screen-reader-text"> on linux和黑客关系图</span></a></span>			</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

		<div class="entry-content">
			<p>linux和黑客关系图Linux的安全性极高，一般情况下是不用博安装安全类软件，如：杀毒软件。同时，很多高级黑客工具是以Linux为核心代码写出来的。在编程当面，Linux系统自带高级编程语言，其内核使得它本身就是一种编程语言。另外，高级语言编写出来的程序具有移植性强特点，可以运行于WIN里面。</p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/820" data-a2a-title="linux和黑客关系图"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F820&amp;linkname=linux%E5%92%8C%E9%BB%91%E5%AE%A2%E5%85%B3%E7%B3%BB%E5%9B%BE" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F820&amp;linkname=linux%E5%92%8C%E9%BB%91%E5%AE%A2%E5%85%B3%E7%B3%BB%E5%9B%BE" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F820&amp;linkname=linux%E5%92%8C%E9%BB%91%E5%AE%A2%E5%85%B3%E7%B3%BB%E5%9B%BE" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F820&amp;linkname=linux%E5%92%8C%E9%BB%91%E5%AE%A2%E5%85%B3%E7%B3%BB%E5%9B%BE" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>
				<a class="btn-read-more" href="http://www.geroro.com/archives/820" rel="bookmark" title="linux和黑客关系图"><span>阅读更多</span></a>
		</div><!-- .entry-content -->
	</div><!-- .post-content -->
</article><!-- #post-## -->

<article id="post-817" class="post-item clearfix post-817 post type-post status-publish format-standard has-post-thumbnail hentry category-windows tag-bat">

	<div class="post-thumbnail">
		<a href="http://www.geroro.com/archives/817" rel="bookmark" class="featured-thumbnail">
					<img width="220" height="170" src="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/246547676jpg.jpg?resize=220%2C170" class="attachment-mekanews-lite-post-thumbnails-list size-mekanews-lite-post-thumbnails-list wp-post-image" alt="" srcset="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/246547676jpg.jpg?resize=220%2C170 220w, https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/246547676jpg.jpg?zoom=2&amp;resize=220%2C170 440w, https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/246547676jpg.jpg?zoom=3&amp;resize=220%2C170 660w" sizes="(max-width: 220px) 100vw, 220px" data-attachment-id="818" data-permalink="http://www.geroro.com/archives/817/246547676jpg" data-orig-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/246547676jpg.jpg?fit=1347%2C626" data-orig-size="1347,626" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="246547676jpg" data-image-description="" data-medium-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/246547676jpg.jpg?fit=300%2C139" data-large-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/246547676jpg.jpg?fit=640%2C298" />				</a>
	</div><!-- .post-thumbnail -->
	<div class="post-content">
		<header class="entry-header">
			<h2 class="entry-title"><a href="http://www.geroro.com/archives/817" rel="bookmark">BAT脚本编写教程(比较易懂和全面)</a></h2>			<div class="entry-meta">
				<span class="byline"><i class="fa fa-user" aria-hidden="true"></i><span class="author vcard"><a class="url fn n" href="http://www.geroro.com/archives/author/admin">琥珀君</a></span></span><span class="posted-on"><i class="fa fa-calendar" aria-hidden="true"></i><a href="http://www.geroro.com/archives/817" rel="bookmark"><time class="entry-date published updated" datetime="2017-06-24T13:56:21+00:00">2017年6月24日</time></a> </span>				
				<span class="comments-link"><i class="fa fa-comment" aria-hidden="true"></i><a href="http://www.geroro.com/archives/817#respond">评论<span class="screen-reader-text"> on BAT脚本编写教程(比较易懂和全面)</span></a></span>			</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

		<div class="entry-content">
			<p>echo、@、call、pause、rem(小技巧：用::代替rem)是批处理文件最常用的几个命令，我们就从他们开始学起。 echo 表示显示此命令后的字符 echo off 表示在此语句后所有运行的命令都不显示命令行本身 @与echo off相象，但它是加在每个命令行的最前面，表示运行时不显示这一行的命令行（只能影响当前行）。 call 调用另一个批处理文件（如果不用call而直接调用别的批处理&#8230;&#8230;继续阅读 >></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/817" data-a2a-title="BAT脚本编写教程(比较易懂和全面)"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F817&amp;linkname=BAT%E8%84%9A%E6%9C%AC%E7%BC%96%E5%86%99%E6%95%99%E7%A8%8B%28%E6%AF%94%E8%BE%83%E6%98%93%E6%87%82%E5%92%8C%E5%85%A8%E9%9D%A2%29" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F817&amp;linkname=BAT%E8%84%9A%E6%9C%AC%E7%BC%96%E5%86%99%E6%95%99%E7%A8%8B%28%E6%AF%94%E8%BE%83%E6%98%93%E6%87%82%E5%92%8C%E5%85%A8%E9%9D%A2%29" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F817&amp;linkname=BAT%E8%84%9A%E6%9C%AC%E7%BC%96%E5%86%99%E6%95%99%E7%A8%8B%28%E6%AF%94%E8%BE%83%E6%98%93%E6%87%82%E5%92%8C%E5%85%A8%E9%9D%A2%29" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F817&amp;linkname=BAT%E8%84%9A%E6%9C%AC%E7%BC%96%E5%86%99%E6%95%99%E7%A8%8B%28%E6%AF%94%E8%BE%83%E6%98%93%E6%87%82%E5%92%8C%E5%85%A8%E9%9D%A2%29" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>
				<a class="btn-read-more" href="http://www.geroro.com/archives/817" rel="bookmark" title="BAT脚本编写教程(比较易懂和全面)"><span>阅读更多</span></a>
		</div><!-- .entry-content -->
	</div><!-- .post-content -->
</article><!-- #post-## -->

<article id="post-814" class="post-item clearfix post-814 post type-post status-publish format-standard has-post-thumbnail hentry category-windows tag-windows">

	<div class="post-thumbnail">
		<a href="http://www.geroro.com/archives/814" rel="bookmark" class="featured-thumbnail">
					<img width="220" height="170" src="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/09876543.jpg?resize=220%2C170" class="attachment-mekanews-lite-post-thumbnails-list size-mekanews-lite-post-thumbnails-list wp-post-image" alt="" srcset="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/09876543.jpg?resize=220%2C170 220w, https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/09876543.jpg?zoom=2&amp;resize=220%2C170 440w, https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/09876543.jpg?zoom=3&amp;resize=220%2C170 660w" sizes="(max-width: 220px) 100vw, 220px" data-attachment-id="815" data-permalink="http://www.geroro.com/archives/814/attachment/09876543" data-orig-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/09876543.jpg?fit=1265%2C548" data-orig-size="1265,548" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="09876543" data-image-description="" data-medium-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/09876543.jpg?fit=300%2C130" data-large-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/09876543.jpg?fit=640%2C278" />				</a>
	</div><!-- .post-thumbnail -->
	<div class="post-content">
		<header class="entry-header">
			<h2 class="entry-title"><a href="http://www.geroro.com/archives/814" rel="bookmark">Diskpart工具简单用法：查看分区信息</a></h2>			<div class="entry-meta">
				<span class="byline"><i class="fa fa-user" aria-hidden="true"></i><span class="author vcard"><a class="url fn n" href="http://www.geroro.com/archives/author/admin">琥珀君</a></span></span><span class="posted-on"><i class="fa fa-calendar" aria-hidden="true"></i><a href="http://www.geroro.com/archives/814" rel="bookmark"><time class="entry-date published updated" datetime="2017-06-24T13:46:36+00:00">2017年6月24日</time></a> </span>				
				<span class="comments-link"><i class="fa fa-comment" aria-hidden="true"></i><a href="http://www.geroro.com/archives/814#respond">评论<span class="screen-reader-text"> on Diskpart工具简单用法：查看分区信息</span></a></span>			</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

		<div class="entry-content">
			<p>本文并不涉及太多关于Diskpart工具的用法，仅仅是作为一个入门，了解一下打开或退出Diskpart工具，使用Diskpart工具查看硬盘分区信息的一些简单命令。老鸟自觉无视吧。 Diskpart工具简介 Diskpart工具是Windows自带的硬盘分区管理工具，支持查看硬盘分区信息、对硬盘进行创建分区、删除分区、合并扩展分区、在MBR分区结构硬盘中将分区标记为活动分区等操作，实现动态磁盘和基&#8230;&#8230;继续阅读 >></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/814" data-a2a-title="Diskpart工具简单用法：查看分区信息"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F814&amp;linkname=Diskpart%E5%B7%A5%E5%85%B7%E7%AE%80%E5%8D%95%E7%94%A8%E6%B3%95%EF%BC%9A%E6%9F%A5%E7%9C%8B%E5%88%86%E5%8C%BA%E4%BF%A1%E6%81%AF" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F814&amp;linkname=Diskpart%E5%B7%A5%E5%85%B7%E7%AE%80%E5%8D%95%E7%94%A8%E6%B3%95%EF%BC%9A%E6%9F%A5%E7%9C%8B%E5%88%86%E5%8C%BA%E4%BF%A1%E6%81%AF" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F814&amp;linkname=Diskpart%E5%B7%A5%E5%85%B7%E7%AE%80%E5%8D%95%E7%94%A8%E6%B3%95%EF%BC%9A%E6%9F%A5%E7%9C%8B%E5%88%86%E5%8C%BA%E4%BF%A1%E6%81%AF" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F814&amp;linkname=Diskpart%E5%B7%A5%E5%85%B7%E7%AE%80%E5%8D%95%E7%94%A8%E6%B3%95%EF%BC%9A%E6%9F%A5%E7%9C%8B%E5%88%86%E5%8C%BA%E4%BF%A1%E6%81%AF" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>
				<a class="btn-read-more" href="http://www.geroro.com/archives/814" rel="bookmark" title="Diskpart工具简单用法：查看分区信息"><span>阅读更多</span></a>
		</div><!-- .entry-content -->
	</div><!-- .post-content -->
</article><!-- #post-## -->

<article id="post-811" class="post-item clearfix post-811 post type-post status-publish format-standard has-post-thumbnail hentry category-lix tag-linux">

	<div class="post-thumbnail">
		<a href="http://www.geroro.com/archives/811" rel="bookmark" class="featured-thumbnail">
					<img width="220" height="170" src="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/1235467222.jpg?resize=220%2C170" class="attachment-mekanews-lite-post-thumbnails-list size-mekanews-lite-post-thumbnails-list wp-post-image" alt="" srcset="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/1235467222.jpg?resize=220%2C170 220w, https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/1235467222.jpg?zoom=2&amp;resize=220%2C170 440w, https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/1235467222.jpg?zoom=3&amp;resize=220%2C170 660w" sizes="(max-width: 220px) 100vw, 220px" data-attachment-id="812" data-permalink="http://www.geroro.com/archives/811/attachment/1235467222" data-orig-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/1235467222.jpg?fit=894%2C496" data-orig-size="894,496" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="1235467222" data-image-description="" data-medium-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/1235467222.jpg?fit=300%2C166" data-large-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/1235467222.jpg?fit=640%2C355" />				</a>
	</div><!-- .post-thumbnail -->
	<div class="post-content">
		<header class="entry-header">
			<h2 class="entry-title"><a href="http://www.geroro.com/archives/811" rel="bookmark">红帽下载地址整理。。。</a></h2>			<div class="entry-meta">
				<span class="byline"><i class="fa fa-user" aria-hidden="true"></i><span class="author vcard"><a class="url fn n" href="http://www.geroro.com/archives/author/admin">琥珀君</a></span></span><span class="posted-on"><i class="fa fa-calendar" aria-hidden="true"></i><a href="http://www.geroro.com/archives/811" rel="bookmark"><time class="entry-date published" datetime="2017年6月30日">2017年6月30日</time></a> </span>				
				<span class="comments-link"><i class="fa fa-comment" aria-hidden="true"></i><a href="http://www.geroro.com/archives/811#respond">评论<span class="screen-reader-text"> on 红帽下载地址整理。。。</span></a></span>			</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

		<div class="entry-content">
			<p>RedHat&nbsp;Enterprise Server&nbsp;7.3&nbsp;for&nbsp;x86_64： rhel-server-7.3-x86_64-dvd.iso SHA-256&nbsp;Checksum: 120acbca7b3d55465eb9f8ef53ad7365f2997d42d4f83d7cc285bf5c71e1131f 百度云（密码：zgwg） &nbsp; &#8230;&#8230;继续阅读 >></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/811" data-a2a-title="红帽下载地址整理。。。"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F811&amp;linkname=%E7%BA%A2%E5%B8%BD%E4%B8%8B%E8%BD%BD%E5%9C%B0%E5%9D%80%E6%95%B4%E7%90%86%E3%80%82%E3%80%82%E3%80%82" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F811&amp;linkname=%E7%BA%A2%E5%B8%BD%E4%B8%8B%E8%BD%BD%E5%9C%B0%E5%9D%80%E6%95%B4%E7%90%86%E3%80%82%E3%80%82%E3%80%82" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F811&amp;linkname=%E7%BA%A2%E5%B8%BD%E4%B8%8B%E8%BD%BD%E5%9C%B0%E5%9D%80%E6%95%B4%E7%90%86%E3%80%82%E3%80%82%E3%80%82" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F811&amp;linkname=%E7%BA%A2%E5%B8%BD%E4%B8%8B%E8%BD%BD%E5%9C%B0%E5%9D%80%E6%95%B4%E7%90%86%E3%80%82%E3%80%82%E3%80%82" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>
				<a class="btn-read-more" href="http://www.geroro.com/archives/811" rel="bookmark" title="红帽下载地址整理。。。"><span>阅读更多</span></a>
		</div><!-- .entry-content -->
	</div><!-- .post-content -->
</article><!-- #post-## -->

<article id="post-808" class="post-item clearfix post-808 post type-post status-publish format-standard has-post-thumbnail hentry category-lix tag-shell">

	<div class="post-thumbnail">
		<a href="http://www.geroro.com/archives/808" rel="bookmark" class="featured-thumbnail">
					<img width="220" height="170" src="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/755.jpg?resize=220%2C170" class="attachment-mekanews-lite-post-thumbnails-list size-mekanews-lite-post-thumbnails-list wp-post-image" alt="" srcset="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/755.jpg?resize=220%2C170 220w, https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/755.jpg?zoom=2&amp;resize=220%2C170 440w, https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/755.jpg?zoom=3&amp;resize=220%2C170 660w" sizes="(max-width: 220px) 100vw, 220px" data-attachment-id="809" data-permalink="http://www.geroro.com/archives/808/attachment/755" data-orig-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/755.jpg?fit=1051%2C647" data-orig-size="1051,647" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="755" data-image-description="" data-medium-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/755.jpg?fit=300%2C185" data-large-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/06/755.jpg?fit=640%2C394" />				</a>
	</div><!-- .post-thumbnail -->
	<div class="post-content">
		<header class="entry-header">
			<h2 class="entry-title"><a href="http://www.geroro.com/archives/808" rel="bookmark">linux下的正则表达式</a></h2>			<div class="entry-meta">
				<span class="byline"><i class="fa fa-user" aria-hidden="true"></i><span class="author vcard"><a class="url fn n" href="http://www.geroro.com/archives/author/admin">琥珀君</a></span></span><span class="posted-on"><i class="fa fa-calendar" aria-hidden="true"></i><a href="http://www.geroro.com/archives/808" rel="bookmark"><time class="entry-date published updated" datetime="2017-06-24T13:35:24+00:00">2017年6月24日</time></a> </span>				
				<span class="comments-link"><i class="fa fa-comment" aria-hidden="true"></i><a href="http://www.geroro.com/archives/808#respond">评论<span class="screen-reader-text"> on linux下的正则表达式</span></a></span>			</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

		<div class="entry-content">
			<p>$# 是传给脚本的参数个数 $0&nbsp;是脚本本身的名字 $1&nbsp;是传递给该shell脚本的第一个参数 $2&nbsp;是传递给该shell脚本的第二个参数 $@ 是传给脚本的所有参数的列表 $* 是以一个单字符串显示所有向脚本传递的参数，与位置变量不同，参数可超过9个 $$ 是脚本运行的当前进程ID号 $? 是显示最后命令的退出状态，0表示没有错误，其他表示有错误 &nbsp; 区别&#8230;&#8230;继续阅读 >></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/808" data-a2a-title="linux下的正则表达式"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F808&amp;linkname=linux%E4%B8%8B%E7%9A%84%E6%AD%A3%E5%88%99%E8%A1%A8%E8%BE%BE%E5%BC%8F" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F808&amp;linkname=linux%E4%B8%8B%E7%9A%84%E6%AD%A3%E5%88%99%E8%A1%A8%E8%BE%BE%E5%BC%8F" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F808&amp;linkname=linux%E4%B8%8B%E7%9A%84%E6%AD%A3%E5%88%99%E8%A1%A8%E8%BE%BE%E5%BC%8F" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F808&amp;linkname=linux%E4%B8%8B%E7%9A%84%E6%AD%A3%E5%88%99%E8%A1%A8%E8%BE%BE%E5%BC%8F" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>
				<a class="btn-read-more" href="http://www.geroro.com/archives/808" rel="bookmark" title="linux下的正则表达式"><span>阅读更多</span></a>
		</div><!-- .entry-content -->
	</div><!-- .post-content -->
</article><!-- #post-## -->

<article id="post-805" class="post-item clearfix post-805 post type-post status-publish format-standard has-post-thumbnail hentry category-lix tag-tomcat">

	<div class="post-thumbnail">
		<a href="http://www.geroro.com/archives/805" rel="bookmark" class="featured-thumbnail">
					<img width="220" height="170" src="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/76532.jpg?resize=220%2C170" class="attachment-mekanews-lite-post-thumbnails-list size-mekanews-lite-post-thumbnails-list wp-post-image" alt="" srcset="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/76532.jpg?resize=220%2C170 220w, https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/76532.jpg?zoom=2&amp;resize=220%2C170 440w, https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/76532.jpg?zoom=3&amp;resize=220%2C170 660w" sizes="(max-width: 220px) 100vw, 220px" data-attachment-id="807" data-permalink="http://www.geroro.com/archives/805/attachment/76532" data-orig-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/76532.jpg?fit=1210%2C825" data-orig-size="1210,825" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="76532" data-image-description="" data-medium-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/76532.jpg?fit=300%2C205" data-large-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/76532.jpg?fit=640%2C436" />				</a>
	</div><!-- .post-thumbnail -->
	<div class="post-content">
		<header class="entry-header">
			<h2 class="entry-title"><a href="http://www.geroro.com/archives/805" rel="bookmark">Tomcat配置详解</a></h2>			<div class="entry-meta">
				<span class="byline"><i class="fa fa-user" aria-hidden="true"></i><span class="author vcard"><a class="url fn n" href="http://www.geroro.com/archives/author/admin">琥珀君</a></span></span><span class="posted-on"><i class="fa fa-calendar" aria-hidden="true"></i><a href="http://www.geroro.com/archives/805" rel="bookmark"><time class="entry-date published" datetime="2017年6月24日">2017年6月24日</time></a> </span>				
				<span class="comments-link"><i class="fa fa-comment" aria-hidden="true"></i><a href="http://www.geroro.com/archives/805#respond">评论<span class="screen-reader-text"> on Tomcat配置详解</span></a></span>			</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

		<div class="entry-content">
			<p>(一):目录结构&nbsp; &nbsp; tomcat的目录结构如下：&nbsp; 目录名: 简介&nbsp; bin : 存放启动和关闭tomcat脚本&nbsp; conf :包含不同的配置文件,server.xml(Tomcat的主要配置文件)和web.xml&nbsp; work :存放jsp编译后产生的class文件&nbsp; webapp:存放应用程序示例，以后你要部署的应用程序也&#8230;&#8230;继续阅读 >></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/805" data-a2a-title="Tomcat配置详解"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F805&amp;linkname=Tomcat%E9%85%8D%E7%BD%AE%E8%AF%A6%E8%A7%A3" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F805&amp;linkname=Tomcat%E9%85%8D%E7%BD%AE%E8%AF%A6%E8%A7%A3" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F805&amp;linkname=Tomcat%E9%85%8D%E7%BD%AE%E8%AF%A6%E8%A7%A3" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F805&amp;linkname=Tomcat%E9%85%8D%E7%BD%AE%E8%AF%A6%E8%A7%A3" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>
				<a class="btn-read-more" href="http://www.geroro.com/archives/805" rel="bookmark" title="Tomcat配置详解"><span>阅读更多</span></a>
		</div><!-- .entry-content -->
	</div><!-- .post-content -->
</article><!-- #post-## -->
			</div>

			
	<nav class="navigation pagination" role="navigation">
		<h2 class="screen-reader-text">文章导航</h2>
		<div class="nav-links"><span class='page-numbers current'><span class="meta-nav screen-reader-text">Page </span>1</span>
<a class='page-numbers' href='http://www.geroro.com/page/2'><span class="meta-nav screen-reader-text">Page </span>2</a>
<span class="page-numbers dots">&hellip;</span>
<a class='page-numbers' href='http://www.geroro.com/page/5'><span class="meta-nav screen-reader-text">Page </span>5</a>
<a class="next page-numbers" href="http://www.geroro.com/page/2"><i class="fa fa-angle-right"></i></a></div>
	</nav>
		</main><!-- #main -->
	</div><!-- #primary -->


<aside id="secondary" class="widget-area" role="complementary">
	<div id="search-2" class="widget widget_search"><form role="search" method="get" class="search-form" action="http://www.geroro.com/">
				<label>
					<span class="screen-reader-text">搜索：</span>
					<input type="search" class="search-field" placeholder="搜索&hellip;" value="" name="s" />
				</label>
				<input type="submit" class="search-submit" value="搜索" />
			</form></div><div id="enhancedtextwidget-4" class="widget widget_text enhanced-text-widget"><div class="textwidget widget-text"><iframe src="http://www.geroro.com/wp-content/themes/mekanews-lite/clock.html" height="300px" width="300px"></iframe></div></div><div id="enhancedtextwidget-5" class="widget widget_text enhanced-text-widget"><div class="textwidget widget-text"><div class="su-box su-box-style-default" style="border-color:#292929;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;"><div class="su-box-title" style="background-color:#333333;color:#FFFFFF;-webkit-border-top-left-radius:2px;-webkit-border-top-right-radius:2px;-moz-border-radius-topleft:2px;-moz-border-radius-topright:2px;border-top-left-radius:2px;border-top-right-radius:2px;">友情链接</div><div class="su-box-content su-clearfix">
  <div class="su-spoiler su-spoiler-style-default su-spoiler-icon-folder-1 su-spoiler-closed"><div class="su-spoiler-title"><span class="su-spoiler-icon"></span>IT敢客</div><div class="su-spoiler-content su-clearfix" style="display:none"> <a href="http://www.itgank.com/" target='_blank'>www.itgank.com</a> </div></div> 
  <div class="su-spoiler su-spoiler-style-default su-spoiler-icon-folder-1 su-spoiler-closed"><div class="su-spoiler-title"><span class="su-spoiler-icon"></span>柚萌</div><div class="su-spoiler-content su-clearfix" style="display:none"> <a href="http://www.uimoe.com" target='_blank'>www.uimoe.com</a> </div></div>
  <div class="su-spoiler su-spoiler-style-default su-spoiler-icon-folder-1 su-spoiler-closed"><div class="su-spoiler-title"><span class="su-spoiler-icon"></span>棱镜</div><div class="su-spoiler-content su-clearfix" style="display:none"> <a href="http://www.llyn23.com" target='_blank'>www.llyn23.com</a> </div></div>
</div></div></div></div>	        <div id="wp-cumulus" class="widget wp_cumulus_widget">							<h2 class="widget-title">标签云</h2>						<object type="application/x-shockwave-flash" data="http://www.geroro.com/wp-content/plugins/wp-cumulus/tagcloud.swf?r=1253967" width="300" height="300"><param name="movie" value="http://www.geroro.com/wp-content/plugins/wp-cumulus/tagcloud.swf?r=1253967" /><param name="bgcolor" value="#ffffff" /><param name="AllowScriptAccess" value="always" /><param name="flashvars" value="tcolor=0x333333&amp;tcolor2=0x333333&amp;hicolor=0x000000&amp;tspeed=100&amp;distr=true&amp;mode=tags&amp;tagcloud=%3Ctags%3E%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fbat%22+class%3D%22tag-cloud-link+tag-link-47+tag-link-position-1%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22Bat+%281+item%29%22%3EBat%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fjava%22+class%3D%22tag-cloud-link+tag-link-27+tag-link-position-2%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22Java+%281+item%29%22%3EJava%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Flinux%22+class%3D%22tag-cloud-link+tag-link-31+tag-link-position-3%22+style%3D%22font-size%3A+22pt%3B%22+aria-label%3D%22Linux+%2810+items%29%22%3ELinux%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fmysql%22+class%3D%22tag-cloud-link+tag-link-28+tag-link-position-4%22+style%3D%22font-size%3A+21.243243243243pt%3B%22+aria-label%3D%22Mysql+%289+items%29%22%3EMysql%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Foracle%22+class%3D%22tag-cloud-link+tag-link-32+tag-link-position-5%22+style%3D%22font-size%3A+13.675675675676pt%3B%22+aria-label%3D%22Oracle+%283+items%29%22%3EOracle%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fparamiko%22+class%3D%22tag-cloud-link+tag-link-48+tag-link-position-6%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22Paramiko+%281+item%29%22%3EParamiko%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fpe%22+class%3D%22tag-cloud-link+tag-link-30+tag-link-position-7%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22PE+%281+item%29%22%3EPE%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fphp%22+class%3D%22tag-cloud-link+tag-link-15+tag-link-position-8%22+style%3D%22font-size%3A+19.351351351351pt%3B%22+aria-label%3D%22PHP+%287+items%29%22%3EPHP%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fpxe%22+class%3D%22tag-cloud-link+tag-link-29+tag-link-position-9%22+style%3D%22font-size%3A+11.405405405405pt%3B%22+aria-label%3D%22PXE+%282+items%29%22%3EPXE%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fpython%22+class%3D%22tag-cloud-link+tag-link-35+tag-link-position-10%22+style%3D%22font-size%3A+11.405405405405pt%3B%22+aria-label%3D%22python+%282+items%29%22%3Epython%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fshell%22+class%3D%22tag-cloud-link+tag-link-33+tag-link-position-11%22+style%3D%22font-size%3A+17.081081081081pt%3B%22+aria-label%3D%22Shell+%285+items%29%22%3EShell%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Ftomcat%22+class%3D%22tag-cloud-link+tag-link-44+tag-link-position-12%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22Tomcat+%281+item%29%22%3ETomcat%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fwindows%22+class%3D%22tag-cloud-link+tag-link-46+tag-link-position-13%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22Windows+%281+item%29%22%3EWindows%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fwordpress%22+class%3D%22tag-cloud-link+tag-link-42+tag-link-position-14%22+style%3D%22font-size%3A+11.405405405405pt%3B%22+aria-label%3D%22Wordpress+%282+items%29%22%3EWordpress%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fserver%22+class%3D%22tag-cloud-link+tag-link-43+tag-link-position-15%22+style%3D%22font-size%3A+11.405405405405pt%3B%22+aria-label%3D%22%E6%9C%8D%E5%8A%A1%E5%99%A8+%282+items%29%22%3E%E6%9C%8D%E5%8A%A1%E5%99%A8%3C%2Fa%3E%3C%2Ftags%3E" /><p><a href="http://www.geroro.com/archives/tag/bat" class="tag-cloud-link tag-link-47 tag-link-position-1" style="font-size: 8pt;" aria-label="Bat (1 item)">Bat</a>
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
<a href="http://www.geroro.com/archives/tag/server" class="tag-cloud-link tag-link-43 tag-link-position-15" style="font-size: 11.405405405405pt;" aria-label="服务器 (2 items)">服务器</a></p><p>WP-Cumulus by <a href="https://www.qcgzxw.cn/" rel="nofollow">Roy Tanck</a> requires <a href="https://www.qcgzxw.cn/">Flash Player</a> 9 or better.</p></object>	        </div>				<div id="recent-posts-2" class="widget widget_recent_entries">		<h2 class="widget-title">近期文章</h2>		<ul>
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
		</div>		<div id="recent-comments-2" class="widget widget_recent_comments"><h2 class="widget-title">近期评论</h2><ul id="recentcomments"><li class="recentcomments"><span class="comment-author-link"><a href='http://www.geroro.com' rel='external nofollow' class='url'>琥珀君</a></span>发表在《<a href="http://www.geroro.com/archives/905#comment-140">集成9FM的Ueditor1.4.3.3版本for最新WordPress4.8</a>》</li><li class="recentcomments"><span class="comment-author-link"><a href='http://www.hbbut.com' rel='external nofollow' class='url'>余乐</a></span>发表在《<a href="http://www.geroro.com/archives/905#comment-139">集成9FM的Ueditor1.4.3.3版本for最新WordPress4.8</a>》</li><li class="recentcomments"><span class="comment-author-link"><a href='http://www.geroro.com' rel='external nofollow' class='url'>琥珀君</a></span>发表在《<a href="http://www.geroro.com/archives/905#comment-138">集成9FM的Ueditor1.4.3.3版本for最新WordPress4.8</a>》</li><li class="recentcomments"><span class="comment-author-link"><a href='http://youzheji.com/' rel='external nofollow' class='url'>游者记</a></span>发表在《<a href="http://www.geroro.com/archives/905#comment-137">集成9FM的Ueditor1.4.3.3版本for最新WordPress4.8</a>》</li><li class="recentcomments"><span class="comment-author-link"><a href='http://youzheji.com/' rel='external nofollow' class='url'>游者记</a></span>发表在《<a href="http://www.geroro.com/archives/905#comment-136">集成9FM的Ueditor1.4.3.3版本for最新WordPress4.8</a>》</li></ul></div><div id="archives-2" class="widget widget_archive"><h2 class="widget-title">归档时间</h2>		<ul>
			<li><a href='http://www.geroro.com/archives/date/2017/07'>2017年七月</a>&nbsp;(3)</li>
	<li><a href='http://www.geroro.com/archives/date/2017/06'>2017年六月</a>&nbsp;(11)</li>
	<li><a href='http://www.geroro.com/archives/date/2017/05'>2017年五月</a>&nbsp;(1)</li>
	<li><a href='http://www.geroro.com/archives/date/2017/03'>2017年三月</a>&nbsp;(1)</li>
	<li><a href='http://www.geroro.com/archives/date/2017/01'>2017年一月</a>&nbsp;(1)</li>
	<li><a href='http://www.geroro.com/archives/date/2016/12'>2016年十二月</a>&nbsp;(2)</li>
	<li><a href='http://www.geroro.com/archives/date/2016/11'>2016年十一月</a>&nbsp;(25)</li>
		</ul>
		</div></aside><!-- #secondary -->

		</div><!-- .inner -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="inner clearfix">
				<div class="copyright">
					<div class="copyright" style="height:32px;line-height:32px;">Copyright &copy; 2017 由 Amber 强力驱动  |<a href="http://www.miitbeian.gov.cn" target="_blank">皖ICP备16001968号-2</a></div>
				</div>			
									<div class="footer-menu-wrapper"><ul id="menu-footer" class="menu-footer"><li id="menu-item-94" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-94"><a href="http://weibo.com/1836411575">新浪微博</a></li>
<li id="menu-item-95" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-95"><a href="http://t.qq.com/xudingjun">腾讯微博</a></li>
<li id="menu-item-96" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-96"><a href="mailto:xudingjun3131@126.com">网易邮箱</a></li>
</ul></div>								</div>	
			</div><!-- .inner -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script type='text/javascript' color='0,128,64' zIndex='-1' opacity='0.5' count='90' src='//cdn.bootcss.com/canvas-nest.js/1.0.0/canvas-nest.min.js'></script><script type="text/javascript">SyntaxHighlighter.all();</script>	<div style="display:none">
	</div>
<!--[if lte IE 8]>
<link rel='stylesheet' id='jetpack-carousel-ie8fix-css'  href='http://www.geroro.com/wp-content/plugins/jetpack/modules/carousel/jetpack-carousel-ie8fix.css?ver=20121024' type='text/css' media='all' />
<![endif]-->
<link rel='stylesheet' id='su-box-shortcodes-css'  href='http://www.geroro.com/wp-content/plugins/shortcodes-ultimate/assets/css/box-shortcodes.css?ver=4.10.2' type='text/css' media='all' />
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
<script type='text/javascript' src='http://www.geroro.com/wp-content/themes/mekanews-lite/js/navigation.js?ver=20151215'></script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/themes/mekanews-lite/js/skip-link-focus-fix.js?ver=20151215'></script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/themes/mekanews-lite/js/owl.carousel.js?ver=20160720'></script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/themes/mekanews-lite/js/script.js?ver=20160720'></script>
<script type='text/javascript' src='http://www.geroro.com/wp-includes/js/wp-embed.min.js?ver=4.8'></script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/plugins/jetpack/_inc/spin.js?ver=1.3'></script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/plugins/jetpack/_inc/jquery.spin.js?ver=1.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var jetpackCarouselStrings = {"widths":[370,700,1000,1200,1400,2000],"is_logged_in":"","lang":"zh","ajaxurl":"http:\/\/www.geroro.com\/wp-admin\/admin-ajax.php","nonce":"1227fcc1a5","display_exif":"1","display_geo":"1","single_image_gallery":"1","single_image_gallery_media_file":"","background_color":"white","comment":"\u6761\u8bc4\u8bba","post_comment":"\u53d1\u8868\u8bc4\u8bba","write_comment":"\u64b0\u5199\u8bc4\u8bba...","loading_comments":"\u6b63\u5728\u52a0\u8f7d\u8bc4\u8bba...","download_original":"\u67e5\u770b\u5168\u5c3a\u5bf8 <span class=\"photo-size\">{0}<span class=\"photo-size-times\">\u00d7<\/span>{1}<\/span>","no_comment_text":"\u8bf7\u786e\u4fdd\u4e0e\u60a8\u7684\u8bc4\u8bba\u4e00\u8d77\u63d0\u4ea4\u90e8\u5206\u6587\u672c\u3002","no_comment_email":"\u8bf7\u63d0\u4f9b\u7528\u4e8e\u53d1\u8868\u8bc4\u8bba\u7684\u7535\u5b50\u90ae\u4ef6\u5730\u5740\u3002","no_comment_author":"\u8bf7\u63d0\u4f9b\u60a8\u7528\u4e8e\u53d1\u8868\u8bc4\u8bba\u7684\u59d3\u540d\u3002","comment_post_error":"\u62b1\u6b49\uff0c\u53d1\u8868\u60a8\u7684\u8bc4\u8bba\u65f6\u51fa\u9519\u3002\u8bf7\u7a0d\u540e\u91cd\u8bd5\u3002","comment_approved":"\u60a8\u7684\u8bc4\u8bba\u5df2\u83b7\u5f97\u6279\u51c6\u3002","comment_unapproved":"\u6b63\u5728\u5ba1\u6838\u60a8\u7684\u8bc4\u8bba\u3002","camera":"\u7167\u76f8\u673a","aperture":"\u5149\u5708","shutter_speed":"\u5feb\u95e8\u901f\u5ea6","focal_length":"\u7126\u8ddd","copyright":"\u7248\u6743","comment_registration":"1","require_name_email":"1","login_url":"http:\/\/www.geroro.com\/wp-login.php?redirect_to=http%3A%2F%2Fwww.geroro.com%2Farchives%2F918","blog_id":"1","meta_data":["camera","aperture","shutter_speed","focal_length","copyright"],"local_comments_commenting_as":"<p id=\"jp-carousel-commenting-as\">\u60a8\u5fc5\u987b<a href=\"#\" class=\"jp-carousel-comment-login\">\u767b\u5f55<\/a>\u624d\u80fd\u53d1\u8868\u8bc4\u8bba\u3002<\/p>"};
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
<!-- Generated in 2.474 seconds. Made 86 queries to database and 0 cached queries. Memory used - 39.84MB -->
<!-- Cached by DB Cache Reloaded Fix -->


<script type='text/javascript' src='https://dn-staticfile.qbox.me/jquery/2.0.0/jquery.min.js'></script>
<script type="text/javascript" charset="utf-8">
	var bigfa_scroll = {
		drawCircle: function(id, percentage, color) {
			var width = jQuery(id).width();
			var height = jQuery(id).height();
			var radius = parseInt(width / 2.20);
			var position = width;
			var positionBy2 = position / 2;
			var bg = jQuery(id)[0];
			id = id.split("#");
			var ctx = bg.getContext("2d");
			var imd = null;
			var circ = Math.PI * 2;
			var quart = Math.PI / 2;
			ctx.clearRect(0, 0, width, height);
			ctx.beginPath();
			ctx.strokeStyle = color;
			ctx.lineCap = "square";
			ctx.closePath();
			ctx.fill();
			ctx.lineWidth = 3;
			imd = ctx.getImageData(0, 0, position, position);
			var draw = function(current, ctxPass) {
				ctxPass.putImageData(imd, 0, 0);
				ctxPass.beginPath();
				ctxPass.arc(positionBy2, positionBy2, radius, -(quart), ((circ) * current) - quart, false);
				ctxPass.stroke();
			}
			draw(percentage / 100, ctx);
		},
		backToTop: function($this) {
			$this.click(function() {
				jQuery("body,html").animate({
					scrollTop: 0
				},
				800);
				return false;
			});
		},
		scrollHook: function($this, color) {
			color = color ? color: "#000000";
			$this.scroll(function() {
				var docHeight = (jQuery(document).height() - jQuery(window).height()),
				$windowObj = $this,
				$per = jQuery(".per"),
				percentage = 0;
				defaultScroll = $windowObj.scrollTop();
				percentage = parseInt((defaultScroll / docHeight) * 100);
				var backToTop = jQuery("#backtoTop");
				if (backToTop.length > 0) {
					if ($windowObj.scrollTop() > 200) {
						backToTop.addClass("button--show");
					} else {
						backToTop.removeClass("button--show");
					}
					$per.attr("data-percent", percentage);
					bigfa_scroll.drawCircle("#backtoTopCanvas", percentage, color);
				}
	
			});
		}
	}
	
	jQuery(document).ready(function() {
		jQuery("body").append('<div id="backtoTop" data-action="gototop"><canvas id="backtoTopCanvas" width="48" height="48"></canvas><div class="per"></div></div>');
		var T = bigfa_scroll;
		T.backToTop(jQuery("#backtoTop"));
		T.scrollHook(jQuery(window), "#009933");
	});
</script >
<div id="backtoTop" data-action="gototop" ><canvas id="backtoTopCanvas" width="48" height="48"></canvas><div class="per" data-percent="percentage"></div></div>
<!-- <span class="back-to-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></span> -->
</body>
</html>

<!-- Dynamic page generated in 2.489 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2017-07-24 19:21:50 -->

<!-- Super Cache dynamic page detected but late init not set. See the readme.txt for further details. -->
<!-- Dynamic WPCache Super Cache -->