<?php die(); ?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="http://www.geroro.com/xmlrpc.php">

<title>Mysql | GERORO</title>

<!-- All in One SEO Pack 2.3.14.2 by Michael Torbert of Semper Fi Web Designob_start_detected [-1,-1] -->
<meta name="keywords"  content="mysql,mysql优化,myisam,高可用,linux,grant,root密码,my.cnf" />
<meta name="robots" content="noindex,follow" />

<link rel="canonical" href="http://www.geroro.com/mysql" />
<!-- /all in one seo pack -->
<link rel='dns-prefetch' href='//s0.wp.com' />
<link rel='dns-prefetch' href='//s.gravatar.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="GERORO &raquo; Feed" href="http://www.geroro.com/feed" />
<link rel="alternate" type="application/rss+xml" title="GERORO &raquo; 评论Feed" href="http://www.geroro.com/comments/feed" />
<link rel="alternate" type="application/rss+xml" title="GERORO &raquo; MYSQL分类目录Feed" href="http://www.geroro.com/mysql/feed" />
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
#secondary label input[type=search].search-field{border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-right-radius:6px;border-bottom-left-radius:6px;}#secondary .widget input[type=submit].search-submit{border-top-right-radius:8px;border-bottom-right-radius:8px;}#wp-calendar caption{border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-right-radius:6px;border-bottom-left-radius:6px;}.post-wrap .hentry img{border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-right-radius:8px;border-bottom-left-radius:8px;}#secondary .widget h2{border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-right-radius:6px;border-bottom-left-radius:6px;}#site-navigation{border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-right-radius:6px;border-bottom-left-radius:6px;}#page #masthead .menu-container .inner #site-navigation #menu-main-menu > .menu-item > a{border-top-left-radius:7px !important;border-top-right-radius:7px !important;border-bottom-right-radius:7px !important;border-bottom-left-radius:7px !important;}#menu-main-menu .sub-menu a{border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-right-radius:8px;border-bottom-left-radius:8px;}.nav-links .current{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#main .navigation .nav-links .page-numbers a{border-top-left-radius:4px !important;border-top-right-radius:4px !important;border-bottom-right-radius:4px !important;border-bottom-left-radius:4px !important;}.nav-links .next{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#colophon .site-info{border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-right-radius:10px;border-bottom-left-radius:10px;}#wp-calendar tbody .pad{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#wp-calendar tr th{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#prev{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#next{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#wp-calendar tfoot .pad{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}.post-wrap .entry-content span{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#top-menu .menu-item a{border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;}.wc_main_comm_form .wpdiscuz-item .wpd-field{border-top-left-radius:5px !important;border-top-right-radius:5px !important;border-bottom-right-radius:5px !important;border-bottom-left-radius:5px !important;}.wc_main_comm_form .wpdiscuz-item .quicktags-toolbar{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#wpdiscuz_subscription_button{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}.wpdiscuz-subscribe-form-option .wpdiscuz_select{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}.wc_main_comm_form .wpdiscuz-item .wpdiscuz-textarea-wrap{border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;}.wc_main_comm_form .wpd-form-row input[type=submit]{border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;}.wc-comment-bar p{border-top-left-radius:9px;border-top-right-radius:9px;border-bottom-right-radius:9px;border-bottom-left-radius:9px;}.post-wrap .btn-read-more span{position:relative;}.post-wrap .post-item .btn-read-more{position:relative;top:-40px;}.post-wrap .post-item .addtoany_share_save_container{position:relative;top:5px;}
</style></head>

<body class="archive category category-mql category-4 post-layout-small elementor-default">

<div id="page" class="site-container">
	<a class="skip-link screen-reader-text" href="#main">Skip to content</a>

	<header id="masthead" class="site-header" role="banner">
		
		<div class="site-branding">
			<div class="inner clearfix">				
								
				<div class="site-title">			
											<h2 class="title-logo">
							<a itemprop="url" href="http://www.geroro.com/" rel="home" title="很多事情只是不同，并无是非！">
							GERORO							</a>
						</h2>
						<h3 class="title-description">很多事情只是不同，并无是非！</h3>
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
<li id="menu-item-203" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-203"><a href="http://www.geroro.com/blog">博文</a>
<ul  class="sub-menu">
	<li id="menu-item-204" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-204"><a href="http://www.geroro.com/linux">LINUX</a></li>
	<li id="menu-item-205" class="menu-item menu-item-type-taxonomy menu-item-object-category current-menu-item menu-item-205"><a href="http://www.geroro.com/mysql">MYSQL</a></li>
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

					
			<div class="post-wrap clearfix">

				
<article id="post-470" class="post-item clearfix post-470 post type-post status-publish format-standard has-post-thumbnail hentry category-lix category-mql tag-mysql">

	<div class="post-thumbnail">
		<a href="http://www.geroro.com/archives/470" rel="bookmark" class="featured-thumbnail">
					<img width="220" height="170" src="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/05/977613-20161010191509571-1470515947.jpg?resize=220%2C170" class="attachment-mekanews-lite-post-thumbnails-list size-mekanews-lite-post-thumbnails-list wp-post-image" alt="" srcset="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/05/977613-20161010191509571-1470515947.jpg?resize=220%2C170 220w, https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/05/977613-20161010191509571-1470515947.jpg?zoom=2&amp;resize=220%2C170 440w, https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/05/977613-20161010191509571-1470515947.jpg?zoom=3&amp;resize=220%2C170 660w" sizes="(max-width: 220px) 100vw, 220px" data-attachment-id="471" data-permalink="http://www.geroro.com/archives/470/977613-20161010191509571-1470515947" data-orig-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/05/977613-20161010191509571-1470515947.jpg?fit=847%2C255" data-orig-size="847,255" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="977613-20161010191509571-1470515947" data-image-description="" data-medium-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/05/977613-20161010191509571-1470515947.jpg?fit=300%2C90" data-large-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2017/05/977613-20161010191509571-1470515947.jpg?fit=640%2C193" />				</a>
	</div><!-- .post-thumbnail -->
	<div class="post-content">
		<header class="entry-header">
			<h2 class="entry-title"><a href="http://www.geroro.com/archives/470" rel="bookmark">MySQL 查询结果保存为CSV文件</a></h2>			<div class="entry-meta">
				<span class="byline"><i class="fa fa-user" aria-hidden="true"></i><span class="author vcard"><a class="url fn n" href="http://www.geroro.com/archives/author/admin">琥珀君</a></span></span><span class="posted-on"><i class="fa fa-calendar" aria-hidden="true"></i><a href="http://www.geroro.com/archives/470" rel="bookmark"><time class="entry-date published" datetime="2017年6月14日">2017年6月14日</time></a> </span>				
				<span class="comments-link"><i class="fa fa-comment" aria-hidden="true"></i><a href="http://www.geroro.com/archives/470#comments"><span class="screen-reader-text">MySQL 查询结果保存为CSV文件</span>有1条评论</a></span>			</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

		<div class="entry-content">
			<p>MySQL支持将查询结果直接导出为文本格式,格式如下： into outfile ‘导出的目录和文件名’&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;指定导出的目录和文件名 fields terminated by ‘字段间分隔符’&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#038;nbs&#8230;&#8230;继续阅读 >></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/470" data-a2a-title="MySQL 查询结果保存为CSV文件"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F470&amp;linkname=MySQL%20%E6%9F%A5%E8%AF%A2%E7%BB%93%E6%9E%9C%E4%BF%9D%E5%AD%98%E4%B8%BACSV%E6%96%87%E4%BB%B6" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F470&amp;linkname=MySQL%20%E6%9F%A5%E8%AF%A2%E7%BB%93%E6%9E%9C%E4%BF%9D%E5%AD%98%E4%B8%BACSV%E6%96%87%E4%BB%B6" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F470&amp;linkname=MySQL%20%E6%9F%A5%E8%AF%A2%E7%BB%93%E6%9E%9C%E4%BF%9D%E5%AD%98%E4%B8%BACSV%E6%96%87%E4%BB%B6" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F470&amp;linkname=MySQL%20%E6%9F%A5%E8%AF%A2%E7%BB%93%E6%9E%9C%E4%BF%9D%E5%AD%98%E4%B8%BACSV%E6%96%87%E4%BB%B6" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>
				<a class="btn-read-more" href="http://www.geroro.com/archives/470" rel="bookmark" title="MySQL 查询结果保存为CSV文件"><span>阅读更多</span></a>
		</div><!-- .entry-content -->
	</div><!-- .post-content -->
</article><!-- #post-## -->

<article id="post-215" class="post-item clearfix post-215 post type-post status-publish format-standard has-post-thumbnail hentry category-mql tag-mysql">

	<div class="post-thumbnail">
		<a href="http://www.geroro.com/archives/215" rel="bookmark" class="featured-thumbnail">
					<img width="220" height="170" src="https://i1.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg.jpg?resize=220%2C170" class="attachment-mekanews-lite-post-thumbnails-list size-mekanews-lite-post-thumbnails-list wp-post-image" alt="" srcset="https://i1.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg.jpg?resize=220%2C170 220w, https://i1.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg.jpg?zoom=2&amp;resize=220%2C170 440w" sizes="(max-width: 220px) 100vw, 220px" data-attachment-id="369" data-permalink="http://www.geroro.com/archives/215/timg" data-orig-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg.jpg?fit=600%2C338" data-orig-size="600,338" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="timg" data-image-description="" data-medium-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg.jpg?fit=300%2C169" data-large-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg.jpg?fit=600%2C338" />				</a>
	</div><!-- .post-thumbnail -->
	<div class="post-content">
		<header class="entry-header">
			<h2 class="entry-title"><a href="http://www.geroro.com/archives/215" rel="bookmark">MySQL 可优化的一些参数详解</a></h2>			<div class="entry-meta">
				<span class="byline"><i class="fa fa-user" aria-hidden="true"></i><span class="author vcard"><a class="url fn n" href="http://www.geroro.com/archives/author/admin">琥珀君</a></span></span><span class="posted-on"><i class="fa fa-calendar" aria-hidden="true"></i><a href="http://www.geroro.com/archives/215" rel="bookmark"><time class="entry-date published" datetime="2017年3月12日">2017年3月12日</time></a> </span>				
				<span class="comments-link"><i class="fa fa-comment" aria-hidden="true"></i><a href="http://www.geroro.com/archives/215#respond">评论<span class="screen-reader-text"> on MySQL 可优化的一些参数详解</span></a></span>			</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

		<div class="entry-content">
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mysql里有些变量设置可用于server层面的调优，多是cache和buffer之类，有的是为整个server分配的大小，有些则是为每个session/thread分配的。为每个session/thread分配大小的变量尤其要注意不要设置太大。 sort_buffer_size Each sessio&#8230;&#8230;继续阅读 >></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/215" data-a2a-title="MySQL 可优化的一些参数详解"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F215&amp;linkname=MySQL%20%E5%8F%AF%E4%BC%98%E5%8C%96%E7%9A%84%E4%B8%80%E4%BA%9B%E5%8F%82%E6%95%B0%E8%AF%A6%E8%A7%A3" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F215&amp;linkname=MySQL%20%E5%8F%AF%E4%BC%98%E5%8C%96%E7%9A%84%E4%B8%80%E4%BA%9B%E5%8F%82%E6%95%B0%E8%AF%A6%E8%A7%A3" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F215&amp;linkname=MySQL%20%E5%8F%AF%E4%BC%98%E5%8C%96%E7%9A%84%E4%B8%80%E4%BA%9B%E5%8F%82%E6%95%B0%E8%AF%A6%E8%A7%A3" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F215&amp;linkname=MySQL%20%E5%8F%AF%E4%BC%98%E5%8C%96%E7%9A%84%E4%B8%80%E4%BA%9B%E5%8F%82%E6%95%B0%E8%AF%A6%E8%A7%A3" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>
				<a class="btn-read-more" href="http://www.geroro.com/archives/215" rel="bookmark" title="MySQL 可优化的一些参数详解"><span>阅读更多</span></a>
		</div><!-- .entry-content -->
	</div><!-- .post-content -->
</article><!-- #post-## -->

<article id="post-50" class="post-item clearfix post-50 post type-post status-publish format-standard has-post-thumbnail hentry category-mql tag-mysql">

	<div class="post-thumbnail">
		<a href="http://www.geroro.com/archives/50" rel="bookmark" class="featured-thumbnail">
					<img width="220" height="170" src="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-4.jpg?resize=220%2C170" class="attachment-mekanews-lite-post-thumbnails-list size-mekanews-lite-post-thumbnails-list wp-post-image" alt="" srcset="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-4.jpg?resize=220%2C170 220w, https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-4.jpg?zoom=2&amp;resize=220%2C170 440w" sizes="(max-width: 220px) 100vw, 220px" data-attachment-id="376" data-permalink="http://www.geroro.com/archives/50/timg-4" data-orig-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-4.jpg?fit=627%2C563" data-orig-size="627,563" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="timg (4)" data-image-description="" data-medium-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-4.jpg?fit=300%2C269" data-large-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-4.jpg?fit=627%2C563" />				</a>
	</div><!-- .post-thumbnail -->
	<div class="post-content">
		<header class="entry-header">
			<h2 class="entry-title"><a href="http://www.geroro.com/archives/50" rel="bookmark">MyISAM和InnoDB引擎</a></h2>			<div class="entry-meta">
				<span class="byline"><i class="fa fa-user" aria-hidden="true"></i><span class="author vcard"><a class="url fn n" href="http://www.geroro.com/archives/author/admin">琥珀君</a></span></span><span class="posted-on"><i class="fa fa-calendar" aria-hidden="true"></i><a href="http://www.geroro.com/archives/50" rel="bookmark"><time class="entry-date published" datetime="2017年3月12日">2017年3月12日</time></a> </span>				
				<span class="comments-link"><i class="fa fa-comment" aria-hidden="true"></i><a href="http://www.geroro.com/archives/50#respond">评论<span class="screen-reader-text"> on MyISAM和InnoDB引擎</span></a></span>			</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

		<div class="entry-content">
			<p>MyISAM MyISAM引擎是MySQL关系数据库管理系统的默认存储引擎（5.5.xx版本之前），这种MySQL表存储结构从就的ISAM代码扩展出许多有用的功能，在新版的MYSQL中InnoDB引擎由于对事物参照的完整性，已经更高并发性等优点开始逐渐取代MyISAM引擎 InnoDB引擎 InnoDB引擎是MySQL数据库另外一个重要的引擎，正成为目前 MySQL 数据库所发行的新版的标准，被包&#8230;&#8230;继续阅读 >></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/50" data-a2a-title="MyISAM和InnoDB引擎"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F50&amp;linkname=MyISAM%E5%92%8CInnoDB%E5%BC%95%E6%93%8E" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F50&amp;linkname=MyISAM%E5%92%8CInnoDB%E5%BC%95%E6%93%8E" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F50&amp;linkname=MyISAM%E5%92%8CInnoDB%E5%BC%95%E6%93%8E" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F50&amp;linkname=MyISAM%E5%92%8CInnoDB%E5%BC%95%E6%93%8E" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>
				<a class="btn-read-more" href="http://www.geroro.com/archives/50" rel="bookmark" title="MyISAM和InnoDB引擎"><span>阅读更多</span></a>
		</div><!-- .entry-content -->
	</div><!-- .post-content -->
</article><!-- #post-## -->

<article id="post-48" class="post-item clearfix post-48 post type-post status-publish format-standard has-post-thumbnail hentry category-lix category-mql tag-linux tag-mysql">

	<div class="post-thumbnail">
		<a href="http://www.geroro.com/archives/48" rel="bookmark" class="featured-thumbnail">
					<img width="220" height="170" src="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-5.jpg?resize=220%2C170" class="attachment-mekanews-lite-post-thumbnails-list size-mekanews-lite-post-thumbnails-list wp-post-image" alt="" srcset="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-5.jpg?resize=220%2C170 220w, https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-5.jpg?zoom=2&amp;resize=220%2C170 440w" sizes="(max-width: 220px) 100vw, 220px" data-attachment-id="377" data-permalink="http://www.geroro.com/archives/48/timg-5" data-orig-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-5.jpg?fit=600%2C297" data-orig-size="600,297" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="timg (5)" data-image-description="" data-medium-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-5.jpg?fit=300%2C149" data-large-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-5.jpg?fit=600%2C297" />				</a>
	</div><!-- .post-thumbnail -->
	<div class="post-content">
		<header class="entry-header">
			<h2 class="entry-title"><a href="http://www.geroro.com/archives/48" rel="bookmark">MySQL 高可用性之 Keepalived 双主热备</a></h2>			<div class="entry-meta">
				<span class="byline"><i class="fa fa-user" aria-hidden="true"></i><span class="author vcard"><a class="url fn n" href="http://www.geroro.com/archives/author/admin">琥珀君</a></span></span><span class="posted-on"><i class="fa fa-calendar" aria-hidden="true"></i><a href="http://www.geroro.com/archives/48" rel="bookmark"><time class="entry-date published" datetime="2017年3月12日">2017年3月12日</time></a> </span>				
				<span class="comments-link"><i class="fa fa-comment" aria-hidden="true"></i><a href="http://www.geroro.com/archives/48#comments"><span class="screen-reader-text">MySQL 高可用性之 Keepalived 双主热备</span>有2条评论</a></span>			</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

		<div class="entry-content">
			<p>通常说的「双机热备」是指两台机器都在运行，但并不是两台机器都同时在提供服务。当提供服务的一台出现故障的时候，另外一台会马上自动接管并且提供服务，而且切换的时间非常短。 Keepalived的工作原理是VRRP（Virtual Router Redundancy Protocol）虚拟路由冗余协议。在VRRP中有两组重要的概念：VRRP路由器和虚拟路由器，主控路由器和备份路由器。 VRRP路由器是指&#8230;&#8230;继续阅读 >></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/48" data-a2a-title="MySQL 高可用性之 Keepalived 双主热备"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F48&amp;linkname=MySQL%20%E9%AB%98%E5%8F%AF%E7%94%A8%E6%80%A7%E4%B9%8B%20Keepalived%20%E5%8F%8C%E4%B8%BB%E7%83%AD%E5%A4%87" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F48&amp;linkname=MySQL%20%E9%AB%98%E5%8F%AF%E7%94%A8%E6%80%A7%E4%B9%8B%20Keepalived%20%E5%8F%8C%E4%B8%BB%E7%83%AD%E5%A4%87" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F48&amp;linkname=MySQL%20%E9%AB%98%E5%8F%AF%E7%94%A8%E6%80%A7%E4%B9%8B%20Keepalived%20%E5%8F%8C%E4%B8%BB%E7%83%AD%E5%A4%87" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F48&amp;linkname=MySQL%20%E9%AB%98%E5%8F%AF%E7%94%A8%E6%80%A7%E4%B9%8B%20Keepalived%20%E5%8F%8C%E4%B8%BB%E7%83%AD%E5%A4%87" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>
				<a class="btn-read-more" href="http://www.geroro.com/archives/48" rel="bookmark" title="MySQL 高可用性之 Keepalived 双主热备"><span>阅读更多</span></a>
		</div><!-- .entry-content -->
	</div><!-- .post-content -->
</article><!-- #post-## -->

<article id="post-43" class="post-item clearfix post-43 post type-post status-publish format-standard has-post-thumbnail hentry category-mql tag-mysql">

	<div class="post-thumbnail">
		<a href="http://www.geroro.com/archives/43" rel="bookmark" class="featured-thumbnail">
					<img width="220" height="170" src="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-7.jpg?resize=220%2C170" class="attachment-mekanews-lite-post-thumbnails-list size-mekanews-lite-post-thumbnails-list wp-post-image" alt="" srcset="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-7.jpg?resize=220%2C170 220w, https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-7.jpg?zoom=2&amp;resize=220%2C170 440w, https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-7.jpg?zoom=3&amp;resize=220%2C170 660w" sizes="(max-width: 220px) 100vw, 220px" data-attachment-id="379" data-permalink="http://www.geroro.com/archives/43/timg-7" data-orig-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-7.jpg?fit=690%2C282" data-orig-size="690,282" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="timg (7)" data-image-description="" data-medium-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-7.jpg?fit=300%2C123" data-large-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-7.jpg?fit=640%2C262" />				</a>
	</div><!-- .post-thumbnail -->
	<div class="post-content">
		<header class="entry-header">
			<h2 class="entry-title"><a href="http://www.geroro.com/archives/43" rel="bookmark">MySQL中授权(grant)和撤销授权(revoke)</a></h2>			<div class="entry-meta">
				<span class="byline"><i class="fa fa-user" aria-hidden="true"></i><span class="author vcard"><a class="url fn n" href="http://www.geroro.com/archives/author/admin">琥珀君</a></span></span><span class="posted-on"><i class="fa fa-calendar" aria-hidden="true"></i><a href="http://www.geroro.com/archives/43" rel="bookmark"><time class="entry-date published" datetime="2017年3月12日">2017年3月12日</time></a> </span>				
				<span class="comments-link"><i class="fa fa-comment" aria-hidden="true"></i><a href="http://www.geroro.com/archives/43#respond">评论<span class="screen-reader-text"> on MySQL中授权(grant)和撤销授权(revoke)</span></a></span>			</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

		<div class="entry-content">
			<p>mysql授权表共有5个表：user、db、host、tables_priv和columns_priv。 授权表的内容有如下用途： user表:user表列出可以连接服务器的用户及其口令，并且它指定他们有哪种全局（超级用户）权限。在user表启用的任何权限均是全局权限，并适用于所有数据库。例如，如果你启用了DELETE权限，在这里列出的用户可以从任何表中删除记录，所以在你这样做之前要认真考虑。 d&#8230;&#8230;继续阅读 >></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/43" data-a2a-title="MySQL中授权(grant)和撤销授权(revoke)"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F43&amp;linkname=MySQL%E4%B8%AD%E6%8E%88%E6%9D%83%28grant%29%E5%92%8C%E6%92%A4%E9%94%80%E6%8E%88%E6%9D%83%28revoke%29" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F43&amp;linkname=MySQL%E4%B8%AD%E6%8E%88%E6%9D%83%28grant%29%E5%92%8C%E6%92%A4%E9%94%80%E6%8E%88%E6%9D%83%28revoke%29" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F43&amp;linkname=MySQL%E4%B8%AD%E6%8E%88%E6%9D%83%28grant%29%E5%92%8C%E6%92%A4%E9%94%80%E6%8E%88%E6%9D%83%28revoke%29" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F43&amp;linkname=MySQL%E4%B8%AD%E6%8E%88%E6%9D%83%28grant%29%E5%92%8C%E6%92%A4%E9%94%80%E6%8E%88%E6%9D%83%28revoke%29" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>
				<a class="btn-read-more" href="http://www.geroro.com/archives/43" rel="bookmark" title="MySQL中授权(grant)和撤销授权(revoke)"><span>阅读更多</span></a>
		</div><!-- .entry-content -->
	</div><!-- .post-content -->
</article><!-- #post-## -->

<article id="post-39" class="post-item clearfix post-39 post type-post status-publish format-standard has-post-thumbnail hentry category-mql tag-mysql">

	<div class="post-thumbnail">
		<a href="http://www.geroro.com/archives/39" rel="bookmark" class="featured-thumbnail">
					<img width="220" height="141" src="https://i1.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-8.jpg?resize=220%2C141" class="attachment-mekanews-lite-post-thumbnails-list size-mekanews-lite-post-thumbnails-list wp-post-image" alt="" srcset="https://i1.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-8.jpg?resize=220%2C141 220w, https://i1.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-8.jpg?zoom=2&amp;resize=220%2C141 440w" sizes="(max-width: 220px) 100vw, 220px" data-attachment-id="381" data-permalink="http://www.geroro.com/archives/39/timg-8" data-orig-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-8.jpg?fit=537%2C141" data-orig-size="537,141" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="timg (8)" data-image-description="" data-medium-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-8.jpg?fit=300%2C79" data-large-file="https://i1.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-8.jpg?fit=537%2C141" />				</a>
	</div><!-- .post-thumbnail -->
	<div class="post-content">
		<header class="entry-header">
			<h2 class="entry-title"><a href="http://www.geroro.com/archives/39" rel="bookmark">更改mysql的root账户密码</a></h2>			<div class="entry-meta">
				<span class="byline"><i class="fa fa-user" aria-hidden="true"></i><span class="author vcard"><a class="url fn n" href="http://www.geroro.com/archives/author/admin">琥珀君</a></span></span><span class="posted-on"><i class="fa fa-calendar" aria-hidden="true"></i><a href="http://www.geroro.com/archives/39" rel="bookmark"><time class="entry-date published" datetime="2017年3月12日">2017年3月12日</time></a> </span>				
				<span class="comments-link"><i class="fa fa-comment" aria-hidden="true"></i><a href="http://www.geroro.com/archives/39#respond">评论<span class="screen-reader-text"> on 更改mysql的root账户密码</span></a></span>			</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

		<div class="entry-content">
			<p>你可以用几种方法为root账户指定密码。以下介绍了三种方法： 使用SET PASSWORD语句 使用mysqladmin命令行客户端程序 使用UPDATE语句 要想使用SET PASSWORD指定密码，用root连接服务器并执行两个SET PASSWORD语句。一定要使用PASSWORD()函数来加密密 要想使用mysqladmin为root账户指定密码，执行下面的命令： mysqladmin&#038;n&#8230;&#8230;继续阅读 >></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/39" data-a2a-title="更改mysql的root账户密码"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F39&amp;linkname=%E6%9B%B4%E6%94%B9mysql%E7%9A%84root%E8%B4%A6%E6%88%B7%E5%AF%86%E7%A0%81" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F39&amp;linkname=%E6%9B%B4%E6%94%B9mysql%E7%9A%84root%E8%B4%A6%E6%88%B7%E5%AF%86%E7%A0%81" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F39&amp;linkname=%E6%9B%B4%E6%94%B9mysql%E7%9A%84root%E8%B4%A6%E6%88%B7%E5%AF%86%E7%A0%81" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F39&amp;linkname=%E6%9B%B4%E6%94%B9mysql%E7%9A%84root%E8%B4%A6%E6%88%B7%E5%AF%86%E7%A0%81" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>
				<a class="btn-read-more" href="http://www.geroro.com/archives/39" rel="bookmark" title="更改mysql的root账户密码"><span>阅读更多</span></a>
		</div><!-- .entry-content -->
	</div><!-- .post-content -->
</article><!-- #post-## -->

<article id="post-37" class="post-item clearfix post-37 post type-post status-publish format-standard has-post-thumbnail hentry category-lix category-mql tag-mysql">

	<div class="post-thumbnail">
		<a href="http://www.geroro.com/archives/37" rel="bookmark" class="featured-thumbnail">
					<img width="220" height="170" src="https://i0.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-9.jpg?resize=220%2C170" class="attachment-mekanews-lite-post-thumbnails-list size-mekanews-lite-post-thumbnails-list wp-post-image" alt="" srcset="https://i0.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-9.jpg?resize=220%2C170 220w, https://i0.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-9.jpg?zoom=2&amp;resize=220%2C170 440w" sizes="(max-width: 220px) 100vw, 220px" data-attachment-id="382" data-permalink="http://www.geroro.com/archives/37/timg-9" data-orig-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-9.jpg?fit=442%2C179" data-orig-size="442,179" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="timg (9)" data-image-description="" data-medium-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-9.jpg?fit=300%2C121" data-large-file="https://i0.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-9.jpg?fit=442%2C179" />				</a>
	</div><!-- .post-thumbnail -->
	<div class="post-content">
		<header class="entry-header">
			<h2 class="entry-title"><a href="http://www.geroro.com/archives/37" rel="bookmark">linux系统中mysql究竟会读取那些地方的my.cnf配置呢</a></h2>			<div class="entry-meta">
				<span class="byline"><i class="fa fa-user" aria-hidden="true"></i><span class="author vcard"><a class="url fn n" href="http://www.geroro.com/archives/author/admin">琥珀君</a></span></span><span class="posted-on"><i class="fa fa-calendar" aria-hidden="true"></i><a href="http://www.geroro.com/archives/37" rel="bookmark"><time class="entry-date published" datetime="2017年3月12日">2017年3月12日</time></a> </span>				
				<span class="comments-link"><i class="fa fa-comment" aria-hidden="true"></i><a href="http://www.geroro.com/archives/37#respond">评论<span class="screen-reader-text"> on linux系统中mysql究竟会读取那些地方的my.cnf配置呢</span></a></span>			</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

		<div class="entry-content">
			<p>&nbsp; &nbsp; &nbsp; &nbsp;主要了解/etc/my.cnf是全局配置文件，basedir目录下的my.cnf是找不到全局配置文件后的配置文件，可以说是当前mysql的配置文件。其他指定的配置文件需要参数&#8211;defaults-extra-file或者&#8211;defaults-file&nbsp; 根据以上，可以分析为什么你改的my.cnf没有生效了。 mys&#8230;&#8230;继续阅读 >></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/37" data-a2a-title="linux系统中mysql究竟会读取那些地方的my.cnf配置呢"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F37&amp;linkname=linux%E7%B3%BB%E7%BB%9F%E4%B8%ADmysql%E7%A9%B6%E7%AB%9F%E4%BC%9A%E8%AF%BB%E5%8F%96%E9%82%A3%E4%BA%9B%E5%9C%B0%E6%96%B9%E7%9A%84my.cnf%E9%85%8D%E7%BD%AE%E5%91%A2" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F37&amp;linkname=linux%E7%B3%BB%E7%BB%9F%E4%B8%ADmysql%E7%A9%B6%E7%AB%9F%E4%BC%9A%E8%AF%BB%E5%8F%96%E9%82%A3%E4%BA%9B%E5%9C%B0%E6%96%B9%E7%9A%84my.cnf%E9%85%8D%E7%BD%AE%E5%91%A2" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F37&amp;linkname=linux%E7%B3%BB%E7%BB%9F%E4%B8%ADmysql%E7%A9%B6%E7%AB%9F%E4%BC%9A%E8%AF%BB%E5%8F%96%E9%82%A3%E4%BA%9B%E5%9C%B0%E6%96%B9%E7%9A%84my.cnf%E9%85%8D%E7%BD%AE%E5%91%A2" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F37&amp;linkname=linux%E7%B3%BB%E7%BB%9F%E4%B8%ADmysql%E7%A9%B6%E7%AB%9F%E4%BC%9A%E8%AF%BB%E5%8F%96%E9%82%A3%E4%BA%9B%E5%9C%B0%E6%96%B9%E7%9A%84my.cnf%E9%85%8D%E7%BD%AE%E5%91%A2" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>
				<a class="btn-read-more" href="http://www.geroro.com/archives/37" rel="bookmark" title="linux系统中mysql究竟会读取那些地方的my.cnf配置呢"><span>阅读更多</span></a>
		</div><!-- .entry-content -->
	</div><!-- .post-content -->
</article><!-- #post-## -->

<article id="post-35" class="post-item clearfix post-35 post type-post status-publish format-standard has-post-thumbnail hentry category-mql tag-mysql">

	<div class="post-thumbnail">
		<a href="http://www.geroro.com/archives/35" rel="bookmark" class="featured-thumbnail">
					<img width="220" height="170" src="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-10.jpg?resize=220%2C170" class="attachment-mekanews-lite-post-thumbnails-list size-mekanews-lite-post-thumbnails-list wp-post-image" alt="" srcset="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-10.jpg?resize=220%2C170 220w, https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-10.jpg?zoom=2&amp;resize=220%2C170 440w" sizes="(max-width: 220px) 100vw, 220px" data-attachment-id="383" data-permalink="http://www.geroro.com/archives/35/timg-10" data-orig-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-10.jpg?fit=451%2C440" data-orig-size="451,440" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="timg (10)" data-image-description="" data-medium-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-10.jpg?fit=300%2C293" data-large-file="https://i2.wp.com/www.geroro.com/wp-content/uploads/2016/11/timg-10.jpg?fit=451%2C440" />				</a>
	</div><!-- .post-thumbnail -->
	<div class="post-content">
		<header class="entry-header">
			<h2 class="entry-title"><a href="http://www.geroro.com/archives/35" rel="bookmark">根据status 对mysql进行性能优化</a></h2>			<div class="entry-meta">
				<span class="byline"><i class="fa fa-user" aria-hidden="true"></i><span class="author vcard"><a class="url fn n" href="http://www.geroro.com/archives/author/admin">琥珀君</a></span></span><span class="posted-on"><i class="fa fa-calendar" aria-hidden="true"></i><a href="http://www.geroro.com/archives/35" rel="bookmark"><time class="entry-date published" datetime="2017年3月12日">2017年3月12日</time></a> </span>				
				<span class="comments-link"><i class="fa fa-comment" aria-hidden="true"></i><a href="http://www.geroro.com/archives/35#respond">评论<span class="screen-reader-text"> on 根据status 对mysql进行性能优化</span></a></span>			</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

		<div class="entry-content">
			<p>前言： mysql同样的设置，在不同的环境下 ，由于内存，访问量，读写频率，数据差异等等情况，可能会出现不同的结果，因此简单地根据某个给出方案来配置mysql是行不通的，最好能使用 status信息对mysql进行具体的优化。 mysql&gt; show global status; 可以列出mysql服务器运行各种状态值，另外，查询mysql服务器配置信息语句： mysql&gt; show &#8230;&#8230;继续阅读 >></p>
<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/35" data-a2a-title="根据status 对mysql进行性能优化"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F35&amp;linkname=%E6%A0%B9%E6%8D%AEstatus%20%E5%AF%B9mysql%E8%BF%9B%E8%A1%8C%E6%80%A7%E8%83%BD%E4%BC%98%E5%8C%96" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F35&amp;linkname=%E6%A0%B9%E6%8D%AEstatus%20%E5%AF%B9mysql%E8%BF%9B%E8%A1%8C%E6%80%A7%E8%83%BD%E4%BC%98%E5%8C%96" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F35&amp;linkname=%E6%A0%B9%E6%8D%AEstatus%20%E5%AF%B9mysql%E8%BF%9B%E8%A1%8C%E6%80%A7%E8%83%BD%E4%BC%98%E5%8C%96" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F35&amp;linkname=%E6%A0%B9%E6%8D%AEstatus%20%E5%AF%B9mysql%E8%BF%9B%E8%A1%8C%E6%80%A7%E8%83%BD%E4%BC%98%E5%8C%96" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>
				<a class="btn-read-more" href="http://www.geroro.com/archives/35" rel="bookmark" title="根据status 对mysql进行性能优化"><span>阅读更多</span></a>
		</div><!-- .entry-content -->
	</div><!-- .post-content -->
</article><!-- #post-## -->
			</div>

			
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
</div></div></div></div>	        <div id="wp-cumulus" class="widget wp_cumulus_widget">							<h2 class="widget-title">标签云</h2>						<object type="application/x-shockwave-flash" data="http://www.geroro.com/wp-content/plugins/wp-cumulus/tagcloud.swf?r=8000183" width="300" height="300"><param name="movie" value="http://www.geroro.com/wp-content/plugins/wp-cumulus/tagcloud.swf?r=8000183" /><param name="bgcolor" value="#ffffff" /><param name="AllowScriptAccess" value="always" /><param name="flashvars" value="tcolor=0x333333&amp;tcolor2=0x333333&amp;hicolor=0x000000&amp;tspeed=100&amp;distr=true&amp;mode=tags&amp;tagcloud=%3Ctags%3E%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fbat%22+class%3D%22tag-cloud-link+tag-link-47+tag-link-position-1%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22Bat+%281+item%29%22%3EBat%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fjava%22+class%3D%22tag-cloud-link+tag-link-27+tag-link-position-2%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22Java+%281+item%29%22%3EJava%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Flinux%22+class%3D%22tag-cloud-link+tag-link-31+tag-link-position-3%22+style%3D%22font-size%3A+22pt%3B%22+aria-label%3D%22Linux+%2810+items%29%22%3ELinux%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fmysql%22+class%3D%22tag-cloud-link+tag-link-28+tag-link-position-4%22+style%3D%22font-size%3A+21.243243243243pt%3B%22+aria-label%3D%22Mysql+%289+items%29%22%3EMysql%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Foracle%22+class%3D%22tag-cloud-link+tag-link-32+tag-link-position-5%22+style%3D%22font-size%3A+13.675675675676pt%3B%22+aria-label%3D%22Oracle+%283+items%29%22%3EOracle%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fparamiko%22+class%3D%22tag-cloud-link+tag-link-48+tag-link-position-6%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22Paramiko+%281+item%29%22%3EParamiko%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fpe%22+class%3D%22tag-cloud-link+tag-link-30+tag-link-position-7%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22PE+%281+item%29%22%3EPE%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fphp%22+class%3D%22tag-cloud-link+tag-link-15+tag-link-position-8%22+style%3D%22font-size%3A+19.351351351351pt%3B%22+aria-label%3D%22PHP+%287+items%29%22%3EPHP%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fpxe%22+class%3D%22tag-cloud-link+tag-link-29+tag-link-position-9%22+style%3D%22font-size%3A+11.405405405405pt%3B%22+aria-label%3D%22PXE+%282+items%29%22%3EPXE%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fpython%22+class%3D%22tag-cloud-link+tag-link-35+tag-link-position-10%22+style%3D%22font-size%3A+11.405405405405pt%3B%22+aria-label%3D%22python+%282+items%29%22%3Epython%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fshell%22+class%3D%22tag-cloud-link+tag-link-33+tag-link-position-11%22+style%3D%22font-size%3A+17.081081081081pt%3B%22+aria-label%3D%22Shell+%285+items%29%22%3EShell%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Ftomcat%22+class%3D%22tag-cloud-link+tag-link-44+tag-link-position-12%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22Tomcat+%281+item%29%22%3ETomcat%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fwindows%22+class%3D%22tag-cloud-link+tag-link-46+tag-link-position-13%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22Windows+%281+item%29%22%3EWindows%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fwordpress%22+class%3D%22tag-cloud-link+tag-link-42+tag-link-position-14%22+style%3D%22font-size%3A+11.405405405405pt%3B%22+aria-label%3D%22Wordpress+%282+items%29%22%3EWordpress%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fserver%22+class%3D%22tag-cloud-link+tag-link-43+tag-link-position-15%22+style%3D%22font-size%3A+11.405405405405pt%3B%22+aria-label%3D%22%E6%9C%8D%E5%8A%A1%E5%99%A8+%282+items%29%22%3E%E6%9C%8D%E5%8A%A1%E5%99%A8%3C%2Fa%3E%3C%2Ftags%3E" /><p><a href="http://www.geroro.com/archives/tag/bat" class="tag-cloud-link tag-link-47 tag-link-position-1" style="font-size: 8pt;" aria-label="Bat (1 item)">Bat</a>
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
var jetpackCarouselStrings = {"widths":[370,700,1000,1200,1400,2000],"is_logged_in":"","lang":"zh","ajaxurl":"http:\/\/www.geroro.com\/wp-admin\/admin-ajax.php","nonce":"1227fcc1a5","display_exif":"1","display_geo":"1","single_image_gallery":"1","single_image_gallery_media_file":"","background_color":"white","comment":"\u6761\u8bc4\u8bba","post_comment":"\u53d1\u8868\u8bc4\u8bba","write_comment":"\u64b0\u5199\u8bc4\u8bba...","loading_comments":"\u6b63\u5728\u52a0\u8f7d\u8bc4\u8bba...","download_original":"\u67e5\u770b\u5168\u5c3a\u5bf8 <span class=\"photo-size\">{0}<span class=\"photo-size-times\">\u00d7<\/span>{1}<\/span>","no_comment_text":"\u8bf7\u786e\u4fdd\u4e0e\u60a8\u7684\u8bc4\u8bba\u4e00\u8d77\u63d0\u4ea4\u90e8\u5206\u6587\u672c\u3002","no_comment_email":"\u8bf7\u63d0\u4f9b\u7528\u4e8e\u53d1\u8868\u8bc4\u8bba\u7684\u7535\u5b50\u90ae\u4ef6\u5730\u5740\u3002","no_comment_author":"\u8bf7\u63d0\u4f9b\u60a8\u7528\u4e8e\u53d1\u8868\u8bc4\u8bba\u7684\u59d3\u540d\u3002","comment_post_error":"\u62b1\u6b49\uff0c\u53d1\u8868\u60a8\u7684\u8bc4\u8bba\u65f6\u51fa\u9519\u3002\u8bf7\u7a0d\u540e\u91cd\u8bd5\u3002","comment_approved":"\u60a8\u7684\u8bc4\u8bba\u5df2\u83b7\u5f97\u6279\u51c6\u3002","comment_unapproved":"\u6b63\u5728\u5ba1\u6838\u60a8\u7684\u8bc4\u8bba\u3002","camera":"\u7167\u76f8\u673a","aperture":"\u5149\u5708","shutter_speed":"\u5feb\u95e8\u901f\u5ea6","focal_length":"\u7126\u8ddd","copyright":"\u7248\u6743","comment_registration":"1","require_name_email":"1","login_url":"http:\/\/www.geroro.com\/wp-login.php?redirect_to=http%3A%2F%2Fwww.geroro.com%2Farchives%2F470","blog_id":"1","meta_data":["camera","aperture","shutter_speed","focal_length","copyright"],"local_comments_commenting_as":"<p id=\"jp-carousel-commenting-as\">\u60a8\u5fc5\u987b<a href=\"#\" class=\"jp-carousel-comment-login\">\u767b\u5f55<\/a>\u624d\u80fd\u53d1\u8868\u8bc4\u8bba\u3002<\/p>"};
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
<!-- Generated in 1.968 seconds. Made 27 queries to database and 38 cached queries. Memory used - 39.6MB -->
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

<!-- Dynamic page generated in 1.972 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2017-07-24 18:55:31 -->

<!-- Super Cache dynamic page detected but late init not set. See the readme.txt for further details. -->
<!-- Dynamic WPCache Super Cache -->