<?php die(); ?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<title>连接 | GERORO</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="http://www.geroro.com/xmlrpc.php" />

<!-- All in One SEO Pack 2.3.14.2 by Michael Torbert of Semper Fi Web Designob_start_detected [-1,-1] -->
<meta name="description"  content="Linux的硬连接与软连接的区别" />

<meta name="keywords"  content="linux" />

<link rel="canonical" href="http://www.geroro.com/archives/418" />
<!-- /all in one seo pack -->
<link rel='dns-prefetch' href='//s0.wp.com' />
<link rel='dns-prefetch' href='//s.gravatar.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="GERORO &raquo; Feed" href="http://www.geroro.com/feed" />
<link rel="alternate" type="application/rss+xml" title="GERORO &raquo; 评论Feed" href="http://www.geroro.com/comments/feed" />
<link rel="alternate" type="application/rss+xml" title="GERORO &raquo; Linux的硬连接与软连接的区别评论Feed" href="http://www.geroro.com/archives/418/feed" />
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
<link rel='stylesheet' id='wpdiscuz-font-awesome-css'  href='http://www.geroro.com/wp-content/plugins/wpdiscuz/assets/third-party/font-awesome-4.6.3/css/font-awesome.min.css?ver=4.5.0' type='text/css' media='all' />
<link rel='stylesheet' id='wpdiscuz-frontend-css-css'  href='http://www.geroro.com/wp-content/plugins/wpdiscuz/assets/css/wpdiscuz.css?ver=4.0.8' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='http://www.geroro.com/wp-content/plugins/jetpack/modules/minileven/theme/pub/minileven/style.css?ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack_css-css'  href='http://www.geroro.com/wp-content/plugins/jetpack/css/jetpack.css?ver=5.1' type='text/css' media='all' />
<link rel='stylesheet' id='A2A_SHARE_SAVE-css'  href='http://www.geroro.com/wp-content/plugins/add-to-any/addtoany.min.css?ver=1.14' type='text/css' media='all' />
<script type='text/javascript' src='http://www.geroro.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://www.geroro.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/plugins/add-to-any/addtoany.min.js?ver=1.0'></script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/plugins/wpdiscuz/assets/third-party/wpdcookiejs/customcookie.js?ver=4.8'></script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/plugins/wpdiscuz/assets/third-party/autogrow/jquery.autogrowtextarea.min.js?ver=3.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpdiscuzAjaxObj = {"url":"http:\/\/www.geroro.com\/wp-admin\/admin-ajax.php","wpdiscuz_options":{"wc_hide_replies_text":"\u9690\u85cf\u56de\u590d","wc_show_replies_text":"\u663e\u793a\u56de\u590d","wc_msg_required_fields":"\u8bf7\u586b\u5199\u5fc5\u586b\u5b57\u6bb5","wc_invalid_field":"\u4e00\u4e9b\u5b57\u6bb5\u503c\u65e0\u6548","wc_error_empty_text":"\u8bc4\u8bba\u524d\u8bf7\u5148\u586b\u5199\u6b64\u5b57\u6bb5","wc_error_url_text":"URL \u65e0\u6548","wc_error_email_text":"\u65e0\u6548\u7684email\u5730\u5740","wc_invalid_captcha":"\u65e0\u6548\u7684\u9a8c\u8bc1\u7801","wc_login_to_vote":"\u60a8\u987b\u5148\u767b\u5f55\u518d\u6295\u7968","wc_deny_voting_from_same_ip":"\u60a8\u4e0d\u80fd\u7ed9\u6b64\u8bc4\u8bba\u6295\u7968","wc_self_vote":"\u60a8\u4e0d\u80fd\u4e3a\u81ea\u5df1\u7684\u8bc4\u8bba\u6295\u7968","wc_vote_only_one_time":"\u60a8\u5df2\u5bf9\u6b64\u8bc4\u8bba\u6295\u8fc7\u7968\u4e86","wc_voting_error":"\u6295\u7968\u9519\u8bef","wc_held_for_moderate":"\u5f85\u5ba1\u6838\u7684\u8bc4\u8bba","wc_comment_edit_not_possible":"\u5bf9\u4e0d\u8d77\uff0c\u6b64\u8bc4\u8bba\u5df2\u4e0d\u80fd\u7f16\u8f91","wc_comment_not_updated":"\u5bf9\u4e0d\u8d77\uff0c\u8bc4\u8bba\u672a\u66f4\u65b0","wc_comment_not_edited":"\u60a8\u6ca1\u6709\u505a\u51fa\u4efb\u4f55\u66f4\u6539","wc_new_comment_button_text":"\u65b0\u8bc4\u8bba","wc_new_comments_button_text":"\u65b0\u8bc4\u8bba","wc_new_reply_button_text":"\u60a8\u8bc4\u8bba\u7684\u65b0\u56de\u590d","wc_new_replies_button_text":"\u60a8\u8bc4\u8bba\u7684\u65b0\u56de\u590d","wc_msg_input_min_length":"\u8f93\u5165\u592a\u77ed","wc_msg_input_max_length":"\u8f93\u5165\u592a\u957f","is_user_logged_in":false,"commentListLoadType":"0","commentListUpdateType":"0","commentListUpdateTimer":"30","liveUpdateGuests":"1","wc_comment_bg_color":"#FEFEFE","wc_reply_bg_color":"#F8F8F8","wordpress_comment_order":"asc","commentsVoteOrder":false,"wordpressThreadCommentsDepth":"5","wordpressIsPaginate":"","commentTextMaxLength":null,"storeCommenterData":100000,"isCaptchaInSession":false,"isGoodbyeCaptchaActive":false,"facebookAppID":"","version":"4.0.8","wc_post_id":418,"loadLastCommentId":"67","wc_captcha_show_for_guest":"1","wc_captcha_show_for_members":"0","is_email_field_required":"1"}};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/plugins/wpdiscuz/assets/js/wpdiscuz.js?ver=4.0.8'></script>
<link rel='https://api.w.org/' href='http://www.geroro.com/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.geroro.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.geroro.com/wp-includes/wlwmanifest.xml" /> 
<link rel='prev' title='apache工作模式详解' href='http://www.geroro.com/archives/351' />
<link rel='next' title='MySQL 查询结果保存为CSV文件' href='http://www.geroro.com/archives/470' />
<meta name="generator" content="WordPress 4.8" />
<link rel='shortlink' href='http://wp.me/p7iM5K-6K' />
<link rel="alternate" type="application/json+oembed" href="http://www.geroro.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.geroro.com%2Farchives%2F418" />
<link rel="alternate" type="text/xml+oembed" href="http://www.geroro.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.geroro.com%2Farchives%2F418&#038;format=xml" />

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
<div id="append_parent"></div><div id="ajaxwaitid"></div><style>.nmsingle-container,.nms-list,.nmhotcom{max-width:768px}border-radius: 15px;</style><script type="text/javascript" src="http://www.geroro.com/wp-content/plugins/ueditor/ueditor/third-party/SyntaxHighlighter/shCore.js"></script><link type="text/css" rel="stylesheet" href=" http://www.geroro.com/wp-content/plugins/ueditor/ueditor/third-party/SyntaxHighlighter/shCoreDefault.css" /><style type="text/css">#wpcomm .wc_new_comment{background:#00B38F;}#wpcomm .wc_new_reply{background:#00B38F;}#wpcomm .wc-form-wrapper{background:rgba(222, 226, 225, 0.26);}#wpcomm select,#wpcomm input[type="text"],#wpcomm input[type="email"],#wpcomm input[type="url"],#wpcomm input[type="date"],#wpcomm input[type="color"]{border:#D9D9D9 1px solid;}#wpcomm .wc-comment .wc-comment-right{background:#FEFEFE;}#wpcomm .wc-reply .wc-comment-right{background:#F8F8F8;}#wpcomm .wc-comment-text{font-size:14px;color:#555;}#wpcomm .wc-blog-administrator > .wc-comment-right .wc-comment-author,#wpcomm .wc-blog-administrator > .wc-comment-right .wc-comment-author a{color:#00B38F;}#wpcomm .wc-blog-administrator > .wc-comment-left .wc-comment-label{background:#00B38F;}#wpcomm .wc-blog-editor > .wc-comment-right .wc-comment-author,#wpcomm .wc-blog-editor > .wc-comment-right .wc-comment-author a{color:#00B38F;}#wpcomm .wc-blog-editor > .wc-comment-left .wc-comment-label{background:#00B38F;}#wpcomm .wc-blog-author > .wc-comment-right .wc-comment-author,#wpcomm .wc-blog-author > .wc-comment-right .wc-comment-author a{color:#00B38F;}#wpcomm .wc-blog-author > .wc-comment-left .wc-comment-label{background:#00B38F;}#wpcomm .wc-blog-contributor > .wc-comment-right .wc-comment-author,#wpcomm .wc-blog-contributor > .wc-comment-right .wc-comment-author a{color:#00B38F;}#wpcomm .wc-blog-contributor > .wc-comment-left .wc-comment-label{background:#00B38F;}#wpcomm .wc-blog-subscriber > .wc-comment-right .wc-comment-author,#wpcomm .wc-blog-subscriber > .wc-comment-right .wc-comment-author a{color:#00B38F;}#wpcomm .wc-blog-subscriber > .wc-comment-left .wc-comment-label{background:#00B38F;}#wpcomm .wc-blog-translator > .wc-comment-right .wc-comment-author,#wpcomm .wc-blog-translator > .wc-comment-right .wc-comment-author a{color:#00B38F;}#wpcomm .wc-blog-translator > .wc-comment-left .wc-comment-label{background:#00B38F;}#wpcomm .wc-blog-css_js_designer > .wc-comment-right .wc-comment-author,#wpcomm .wc-blog-css_js_designer > .wc-comment-right .wc-comment-author a{color:#00B38F;}#wpcomm .wc-blog-css_js_designer > .wc-comment-left .wc-comment-label{background:#00B38F;}#wpcomm .wc-blog-post_author > .wc-comment-right .wc-comment-author,#wpcomm .wc-blog-post_author > .wc-comment-right .wc-comment-author a{color:#00B38F;}#wpcomm .wc-blog-post_author > .wc-comment-left .wc-comment-label{background:#00B38F;}#wpcomm .wc-blog-guest > .wc-comment-right .wc-comment-author,#wpcomm .wc-blog-guest > .wc-comment-right .wc-comment-author a{color:#00B38F;}#wpcomm .wc-blog-guest > .wc-comment-left .wc-comment-label{background:#00B38F;}.wc-load-more-submit{border:1px solid #D9D9D9;}#wpcomm .wc-new-loaded-comment > .wc-comment-right{background:#FFFAD6;}.comments-area{width:auto;}.wpdiscuz-front-actions{background:rgba(222, 226, 225, 0.26);}.wpdiscuz-subscribe-bar{background:rgba(222, 226, 225, 0.26);}.wpdiscuz-sort-buttons{color:#bbbbbb;}.wpdiscuz-sort-button{color:#bbbbbb; cursor:pointer;}.wpdiscuz-sort-button:hover{color:#00B38F;cursor:pointer;}.wpdiscuz-sort-button-active{color:#00B38F!important;cursor:default!important;}#wpcomm .page-numbers{color:#555;border:#555 1px solid;}#wpcomm span.current{background:#555;}#wpcomm .wpdiscuz-readmore{cursor:pointer;color:#00B38F;} #wpcomm .wpdiscuz-textarea-wrap{border:#D9D9D9 1px solid;} .wpd-custom-field .wcf-pasiv-star, #wpcomm .wpdiscuz-item .wpdiscuz-rating > label {color: #DDDDDD;}#wpcomm .wpdiscuz-item .wpdiscuz-rating:not(:checked) > label:hover,.wpdiscuz-rating:not(:checked) > label:hover ~ label {   }#wpcomm .wpdiscuz-item .wpdiscuz-rating > input ~ label:hover, #wpcomm .wpdiscuz-item .wpdiscuz-rating > input:not(:checked) ~ label:hover ~ label, #wpcomm .wpdiscuz-item .wpdiscuz-rating > input:not(:checked) ~ label:hover ~ label{color: #FFED85;} #wpcomm .wpdiscuz-item .wpdiscuz-rating > input:checked ~ label:hover, #wpcomm .wpdiscuz-item .wpdiscuz-rating > input:checked ~ label:hover, #wpcomm .wpdiscuz-item .wpdiscuz-rating > label:hover ~ input:checked ~ label, #wpcomm .wpdiscuz-item .wpdiscuz-rating > input:checked + label:hover ~ label, #wpcomm .wpdiscuz-item .wpdiscuz-rating > input:checked ~ label:hover ~ label, .wpd-custom-field .wcf-activ-star, #wpcomm .wpdiscuz-item .wpdiscuz-rating > input:checked ~ label{ color:#FFD700;} #wpcomm .wc-cta-button:hover{border: 1px solid #00B38F!important; background:#00B38F!important; color:#fff!important;} #wpcomm .wc-cta-active{border: 1px solid #00B38F!important; background:#00B38F!important; color:#fff!important;}#wpcomm .wpf-cta:hover{color:#fff!important; background:#00B38F!important; border:1px solid #00B38F!important;}
        
#wpcomm .wpf-cta{ border: 1px solid #cccccc; color:#bbbbbb; }
#wpcomm .wc-cta-button{ background:#888888; border:1px solid #888888; color:#ffffff;}
#wpcomm .wc-cta-button-x{ background:#888888; border:1px solid #888888; color:#ffffff;}
#wpcomm .wc-vote-link{border:1px solid #bbbbbb; color:#aaaaaa;}
#wpcomm .wc-vote-result{border-top: 1px solid #bbbbbb; border-bottom: 1px solid #bbbbbb; color:#aaaaaa;}
#wpcomm .wc-vote-result.wc-vote-result-like{border:1px solid #bbbbbb;}
#wpcomm .wc-vote-result.wc-vote-result-dislike{border:1px solid #bbbbbb;}
</style>
			
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
<meta property="og:type" content="article" />
<meta property="og:title" content="Linux的硬连接与软连接的区别" />
<meta property="og:url" content="http://www.geroro.com/archives/418" />
<meta property="og:description" content="1.Linux链接概念Linux链接分两种，一种被称为硬链接（Hard Link），另一种被称为符号链接（Sy&hellip;" />
<meta property="article:published_time" content="2017-03-19T09:09:04+00:00" />
<meta property="article:modified_time" content="2017-03-19T09:09:04+00:00" />
<meta property="og:site_name" content="GERORO" />
<meta property="og:image" content="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/03/timg.jpg?fit=600%2C576" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="576" />
<meta property="og:locale" content="zh_CN" />
<meta name="twitter:image" content="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/03/timg.jpg?fit=600%2C576&#038;w=640" />
<meta name="twitter:card" content="summary_large_image" />
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
#secondary label input[type=search].search-field{border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-right-radius:6px;border-bottom-left-radius:6px;}#secondary .widget input[type=submit].search-submit{border-top-right-radius:8px;border-bottom-right-radius:8px;}#wp-calendar caption{border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-right-radius:6px;border-bottom-left-radius:6px;}.post-wrap .hentry img{border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-right-radius:8px;border-bottom-left-radius:8px;}#secondary .widget h2{border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-right-radius:6px;border-bottom-left-radius:6px;}#site-navigation{border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-right-radius:6px;border-bottom-left-radius:6px;}#page #masthead .menu-container .inner #site-navigation #menu-main-menu > .menu-item > a{border-top-left-radius:7px !important;border-top-right-radius:7px !important;border-bottom-right-radius:7px !important;border-bottom-left-radius:7px !important;}#menu-main-menu .sub-menu a{border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-right-radius:8px;border-bottom-left-radius:8px;}.nav-links .current{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#main .navigation .nav-links .page-numbers a{border-top-left-radius:4px !important;border-top-right-radius:4px !important;border-bottom-right-radius:4px !important;border-bottom-left-radius:4px !important;}.nav-links .next{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#colophon .site-info{border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-right-radius:10px;border-bottom-left-radius:10px;}#wp-calendar tbody .pad{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#wp-calendar tr th{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#prev{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#next{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#wp-calendar tfoot .pad{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}.post-wrap .entry-content span{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#top-menu .menu-item a{border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;}.wc_main_comm_form .wpdiscuz-item .wpd-field{border-top-left-radius:5px !important;border-top-right-radius:5px !important;border-bottom-right-radius:5px !important;border-bottom-left-radius:5px !important;}.wc_main_comm_form .wpdiscuz-item .quicktags-toolbar{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}#wpdiscuz_subscription_button{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}.wpdiscuz-subscribe-form-option .wpdiscuz_select{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}.wc_main_comm_form .wpdiscuz-item .wpdiscuz-textarea-wrap{border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;}.wc_main_comm_form .wpd-form-row input[type=submit]{border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;}.wc-comment-bar p{border-top-left-radius:9px;border-top-right-radius:9px;border-bottom-right-radius:9px;border-bottom-left-radius:9px;}.post-wrap .btn-read-more span{position:relative;}.post-wrap .post-item .btn-read-more{position:relative;top:-40px;}.post-wrap .post-item .addtoany_share_save_container{position:relative;top:5px;}.entry-content p .wp-image-35935{border-top-left-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;border-top-right-radius:5px;}#reply-title{border-top-left-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;border-top-right-radius:6px;}.nav-previous a{border-top-left-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;border-top-right-radius:6px;}#submit{border-top-left-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;border-top-right-radius:6px;}#comment{border-top-left-radius:9px;border-bottom-left-radius:9px;border-bottom-right-radius:9px;border-top-right-radius:9px;}.related-posts h3{border-top-left-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;border-top-right-radius:6px;}.related .thumbnail .wp-post-image{padding-bottom:5px;padding-top:5px;padding-right:5px;padding-left:5px;border-top-left-radius:9px;border-top-right-radius:9px;border-bottom-right-radius:9px;border-bottom-left-radius:9px;}.post-thumbnail img{border-top-left-radius:9px;border-bottom-left-radius:9px;border-bottom-right-radius:9px;border-top-right-radius:9px;}#wp-calendar tbody .pad{border-top-left-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;border-top-right-radius:4px;}#prev{border-top-left-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;border-top-right-radius:4px;}#next{border-top-left-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;border-top-right-radius:4px;}#wp-calendar tfoot .pad{border-top-left-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;border-top-right-radius:4px;}#wp-calendar tr th{border-top-left-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;border-top-right-radius:4px;}#comment_post_ID{border-top-left-radius:4px !important;border-bottom-left-radius:4px !important;border-bottom-right-radius:4px !important;border-top-right-radius:4px !important;}#comment_parent{border-top-left-radius:6px !important;border-bottom-left-radius:6px !important;border-bottom-right-radius:6px !important;border-top-right-radius:6px !important;}#reply-title #cancel-comment-reply-link{border-top-left-radius:6px !important;border-bottom-left-radius:6px !important;border-bottom-right-radius:6px !important;border-top-right-radius:6px !important;}#comments{border-top-left-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;border-top-right-radius:6px;}#commentform{border-top-left-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;border-top-right-radius:6px;}#comments .comments-title{border-top-left-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;border-top-right-radius:6px;}.comment-meta .comment-metadata{border-top-left-radius:3px;border-bottom-left-radius:3px;border-bottom-right-radius:3px;border-top-right-radius:3px;}.nav-next a{border-top-left-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;border-top-right-radius:6px;}.comment-list > .comment{border-top-left-radius:9px;border-bottom-left-radius:9px;border-bottom-right-radius:9px;border-top-right-radius:9px;}.comment-list .children .comment-body{border-top-left-radius:9px;border-bottom-left-radius:9px;border-bottom-right-radius:9px;border-top-right-radius:9px;}#wcThreadWrapper .wc-blog-guest .wc-cta-active{border-top-left-radius:3px;border-bottom-left-radius:3px;border-bottom-right-radius:3px;border-top-right-radius:3px;}#wcThreadWrapper .wc-blog-guest .wc-comment-img-link{border-top-left-radius:3px;border-bottom-left-radius:3px;border-bottom-right-radius:3px;border-top-right-radius:3px;}#wcThreadWrapper .wc_go .fa-google{border-top-left-radius:3px;border-bottom-left-radius:3px;border-bottom-right-radius:3px;border-top-right-radius:3px;}#wcThreadWrapper .wc_tw .fa-twitter{border-top-left-radius:3px;border-bottom-left-radius:3px;border-bottom-right-radius:3px;border-top-right-radius:3px;}#wcThreadWrapper > .wc-blog-guest{border-top-left-radius:9px;border-bottom-left-radius:9px;border-bottom-right-radius:9px;border-top-right-radius:9px;}#wcThreadWrapper .wc-blog-guest .wc-comment-label{border-top-left-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;border-top-right-radius:4px;}#wcThreadWrapper .wc-blog-guest .wc-reply-button{border-top-left-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;border-top-right-radius:4px;}#wcThreadWrapper .wc-blog-guest .wc-cta-button-x{border-top-left-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;border-top-right-radius:4px;}#wcThreadWrapper .wc-blog-guest .wc-vote-result{border-top-left-radius:3px;border-bottom-left-radius:3px;border-bottom-right-radius:3px;border-top-right-radius:3px;}#wcThreadWrapper .wc-blog-guest .wc-vote-link{border-top-left-radius:3px;border-bottom-left-radius:3px;border-bottom-right-radius:3px;border-top-right-radius:3px;}#wcThreadWrapper .wc-reply .wc-comment-right{border-top-left-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;border-top-right-radius:8px;}#wcThreadWrapper .wc-blog-guest:nth-child(7) .wc-cta-button:nth-child(5){border-top-left-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;border-top-right-radius:4px;}#wpdiscuz-edit-form .wc_save_wrap input[type=submit]{border-top-left-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;border-top-right-radius:5px;}#wc-main-form-wrapper-0_0{border-top-left-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;border-top-right-radius:8px;}#wpcomm .wpdiscuz-subscribe-bar{border-top-left-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;border-top-right-radius:6px;}#wcThreadWrapper .wc-blog-guest .fa-pencil{border-top-left-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;border-top-right-radius:4px;}#wpdiscuz-edit-form .wpdiscuz-item{border-top-left-radius:6px !important;border-bottom-left-radius:6px !important;border-bottom-right-radius:6px !important;border-top-right-radius:6px !important;}.wc_main_comm_form .wpdiscuz-item .wpd-field{border-top-left-radius:8px !important;border-bottom-left-radius:8px !important;border-bottom-right-radius:8px !important;border-top-right-radius:8px !important;}#wpdiscuz-edit-form .wpdiscuz-item .wc_edit_comment{border-top-left-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;border-top-right-radius:6px;}#wcThreadWrapper .wc-blog-guest p{border-top-left-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;border-top-right-radius:6px;}#wcThreadWrapper .wc-reply .wc-share-link{border-top-left-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;border-top-right-radius:4px;}#content .inner{border-top-left-radius:4px;left:0px;top:-10px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;border-top-right-radius:4px;}#wcThreadWrapper .wc-blog-guest .wc-share-link{border-top-left-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;border-top-right-radius:4px;}#wcThreadWrapper .wc-blog-guest .wc-cta-button{border-radius: 4px;}#wc-secondary-form-wrapper-36_0 .wpdiscuz-item .wpd-field{border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-right-radius:8px;border-bottom-left-radius:8px;}#wc-secondary-form-wrapper-36_0 .wpdiscuz-item .wpdiscuz-textarea-wrap{border-top-left-radius:9px;border-top-right-radius:9px;border-bottom-right-radius:9px;border-bottom-left-radius:9px;}#wc-secondary-form-wrapper-36_0 .wpd-form-row input[type=submit]{border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;}#wc-secondary-form-wrapper-36_0 .wpdiscuz-item input[type=button]{border-top-left-radius:3px;border-top-right-radius:3px;border-bottom-right-radius:3px;border-bottom-left-radius:3px;}.wc_main_comm_form .wpdiscuz-item input[type=button]{border-top-left-radius:3px;border-top-right-radius:3px;border-bottom-right-radius:3px;border-bottom-left-radius:3px;}#wc-secondary-form-wrapper-112_0{border-top-left-radius:9px;border-top-right-radius:9px;border-bottom-right-radius:9px;border-bottom-left-radius:9px;}#wc-secondary-form-wrapper-112_0 .wpdiscuz-item .wpdiscuz-textarea-wrap{border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-right-radius:8px;border-bottom-left-radius:8px;}#wc-secondary-form-wrapper-112_0 .wpdiscuz-item .wpd-field{border-top-left-radius:7px;border-top-right-radius:7px;border-bottom-right-radius:7px;border-bottom-left-radius:7px;}#wc-secondary-form-wrapper-112_0 .wpdiscuz-item input[type=button]{border-top-left-radius:3px;border-top-right-radius:3px;border-bottom-right-radius:3px;border-bottom-left-radius:3px;}#wc-secondary-form-wrapper-112_0 .wpd-form-row input[type=submit]{border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;}
</style></head>

<body class="post-template-default single single-post postid-418 single-format-standard mobile-theme elementor-default">
<div id="wrapper">
			<div class="menu-search">
			<nav id="access" class="site-navigation main-navigation" role="navigation">
				<h3 class="menu-toggle">菜单</h3>

								<div class="skip-link"><a class="assistive-text" href="#content">跳至主内容</a></div>
				<div class="menu-%e9%a6%96%e9%a1%b5%e5%af%bc%e8%88%aa-container"><ul id="menu-%e9%a6%96%e9%a1%b5%e5%af%bc%e8%88%aa" class="nav-menu"><li id="menu-item-194" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-194"><a href="http://www.geroro.com/home">主页</a></li>
<li id="menu-item-203" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-203"><a href="http://www.geroro.com/blog">博文</a>
<ul  class="sub-menu">
	<li id="menu-item-204" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-204"><a href="http://www.geroro.com/linux">LINUX</a></li>
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

				
				
									
						
	<article id="post-418" class="post-418 post type-post status-publish format-standard has-post-thumbnail hentry category-lix tag-linux">
		<header class="entry-header">
									<h1 class="entry-title"><a href="http://www.geroro.com/archives/418" rel="bookmark">Linux的硬连接与软连接的区别</a></h1>
			
			<div class="entry-meta">
									<span class="author-link">
						作者						<a href="http://www.geroro.com/archives/author/admin" title="由琥珀君发布" rel="author">琥珀君</a>					</span><!-- .author-link -->
							</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-content">
					<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:15.0pt;color:#3E3E3E"><span style="font-weight:bold">1.Linux链接概念</span></p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">Linux链接分两种，一种被称为硬链接（Hard<br />
Link），另一种被称为符号链接（Symbolic Link）。默认情况下，ln命令产生硬链接。</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:13.5pt;color:#3E3E3E">硬连接</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">硬连接指通过索引节点来进行连接。在Linux的文件系统中，保存在磁盘分区中的文件不管是什么类型都给它分配一个编号，称为索引节点号(Inode<br />
Index)。在Linux中，多个文件名指向同一索引节点是存在的。一般这种连接就是硬连接。硬连接的作用是允许一个文件拥有多个有效路径名，这样用户就可以建立硬连接到重要文件，以防止“误删”的功能。其原因如上所述，因为对应该目录的索引节点有一个以上的连接。只删除一个连接并不影响索引节点本身和其它的连接，只有当最后一个连接被删除后，文件的数据块及目录的连接才会被释放。也就是说，文件真正删除的条件是与之相关的所有硬连接文件均被删除。</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:13.5pt;color:#3E3E3E">软连接</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">另外一种连接称之为符号连接（Symbolic<br />
Link），也叫软连接。软链接文件有类似于Windows的快捷方式。它实际上是一个特殊的文件。在符号连接中，文件实际上是一个文本文件，其中包含的有另一文件的位置信息。</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:15.0pt;color:#3E3E3E"><span style="font-weight:bold">2.通过实验加深理解</span></p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">[oracle@Linux]$<br />
touch f1 #创建一个测试文件f1</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">[oracle@Linux]$<br />
ln f1 f2 #创建f1的一个硬连接文件f2</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">[oracle@Linux]$<br />
ln -s f1 f3 #创建f1的一个符号连接文件f3</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">[oracle@Linux]$<br />
ls -li # -i参数显示文件的inode节点信息</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">total<br />
0</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">9797648<br />
-rw-r&#8211;r&#8211; 2 oracle oinstall 0 Apr 21 08:11 f1</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">9797648<br />
-rw-r&#8211;r&#8211; 2 oracle oinstall 0 Apr 21 08:11 f2</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">9797649<br />
lrwxrwxrwx 1 oracle oinstall 2 Apr 21 08:11 f3 -&gt; f1</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">从上面的结果中可以看出，硬连接文件f2与原文件f1的inode节点相同，均为9797648，然而符号连接文件的inode节点不同。</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">[oracle@Linux]$<br />
echo &quot;I am f1 file&quot; &gt;&gt;f1</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">[oracle@Linux]$<br />
cat f1</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">I<br />
am f1 file</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">[oracle@Linux]$<br />
cat f2</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">I<br />
am f1 file</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">[oracle@Linux]$<br />
cat f3</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">I<br />
am f1 file</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">[oracle@Linux]$<br />
rm -f f1</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">[oracle@Linux]$<br />
cat f2</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">I<br />
am f1 file</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">[oracle@Linux]$<br />
cat f3</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">cat:<br />
f3: No such file or directory</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">通过上面的测试可以看出：当删除原始文件f1后，硬连接f2不受影响，但是符号连接f1文件无效</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:15.0pt;color:#3E3E3E"><span style="font-weight:bold">3.总结</span></p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">依此您可以做一些相关的测试，可以得到以下全部结论：</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">1).删除符号连接f3,对f1,f2无影响；</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">2).删除硬连接f2，对f1,f3也无影响；</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">3).删除原文件f1，对硬连接f2没有影响，导致符号连接f3失效；</p>
<p style="margin:0in;font-family:&quot;Microsoft YaHei&quot;;font-size:12.0pt;color:#3E3E3E">4).同时删除原文件f1,硬连接f2，整个文件会真正的被删除。</p>
<p></p>
<link rel="stylesheet" type="text/css" media="screen" href="http://www.geroro.com/wp-content/plugins/donate-with-qrcode/css/style.css" />
<a class="wbolt-btn wbolt-btn-simple" id="J_wboltDonateBtn">
    <i class="wbolt-icon-tick"></i>
    <span>去打赏</span>
</a>

<div class="wbolt-donate-popup" id="J_popUpWB">
    <a class="wbolt-btn-close" id="J_closeBtn"><i class="wbolt-icon-close"></i></a>
    <p><strong>您的支持将鼓励我们继续创作！</strong></p>
    <div class="wbolt-tab-box" id="J_tabBox">
        <div class="wbolt-tab-nav">
                <div class="wbolt-tab-item"><a><i class="wbolt-icon-wechat"></i> 微信支付</a></div>
                <div class="wbolt-tab-item"><a><i class="wbolt-icon-alipay"></i> 支付宝</a></div>
                </div>
                <div class="wbolt-tab-cont">
            <img src="https://i2.wp.com/www.geroro.com/wp-content/uploads/2017/06/mm_facetoface_collect_qrcode_1497948144269-1.png?resize=240%2C240"  data-recalc-dims="1">
            <p>用 <span class="wbolt-hl">[微信]</span> 扫描二维码打赏</p>
        </div>
                        <div class="wbolt-tab-cont">
            <img src="https://i0.wp.com/www.geroro.com/wp-content/uploads/2017/06/1497948302633-1.jpg?resize=240%2C240"  data-recalc-dims="1">
            <p>用 <span class="wbolt-hl">[支付宝]</span> 扫描二维码打赏</p>
        </div>
                
            </div>
</div>
<div class="overlay" id="J_maskWB"></div>

<div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_22 addtoany_list" data-a2a-url="http://www.geroro.com/archives/418" data-a2a-title="Linux的硬连接与软连接的区别"><a class="a2a_button_wechat" href="https://www.addtoany.com/add_to/wechat?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F418&amp;linkname=Linux%E7%9A%84%E7%A1%AC%E8%BF%9E%E6%8E%A5%E4%B8%8E%E8%BD%AF%E8%BF%9E%E6%8E%A5%E7%9A%84%E5%8C%BA%E5%88%AB" title="WeChat" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_qzone" href="https://www.addtoany.com/add_to/qzone?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F418&amp;linkname=Linux%E7%9A%84%E7%A1%AC%E8%BF%9E%E6%8E%A5%E4%B8%8E%E8%BD%AF%E8%BF%9E%E6%8E%A5%E7%9A%84%E5%8C%BA%E5%88%AB" title="Qzone" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_sina_weibo" href="https://www.addtoany.com/add_to/sina_weibo?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F418&amp;linkname=Linux%E7%9A%84%E7%A1%AC%E8%BF%9E%E6%8E%A5%E4%B8%8E%E8%BD%AF%E8%BF%9E%E6%8E%A5%E7%9A%84%E5%8C%BA%E5%88%AB" title="Sina Weibo" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_wordpress" href="https://www.addtoany.com/add_to/wordpress?linkurl=http%3A%2F%2Fwww.geroro.com%2Farchives%2F418&amp;linkname=Linux%E7%9A%84%E7%A1%AC%E8%BF%9E%E6%8E%A5%E4%B8%8E%E8%BD%AF%E8%BF%9E%E6%8E%A5%E7%9A%84%E5%8C%BA%E5%88%AB" title="WordPress" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save" href="https://www.addtoany.com/share"></a></div></div>							</div><!-- .entry-content -->

		<footer class="entry-meta">
							<span class="entry-date"><a href="http://www.geroro.com/archives/418" title="下午5:09" rel="bookmark"><time datetime="2017-03-19T17:09:04+00:00" pubdate>2017年3月19日</time></a></span>									<span class="comments-link"><a href="http://www.geroro.com/archives/418#comments"><b>14</b> 个回复</a></span>
								</footer><!-- #entry-meta -->
	</article><!-- #post-418 -->

		<nav id="nav-single">
		<h3 class="assistive-text">文章导航</h3>
		<span class="nav-previous"><a href="http://www.geroro.com/archives/351" rel="prev">&laquo; 上一页</a></span>
		<span class="nav-next"><a href="http://www.geroro.com/archives/470" rel="next">下一页 &raquo;</a></span>
	</nav><!-- #nav-single -->
	
	    <div class="wpdiscuz_top_clearing"></div>
                    <div id="comments" class="comments-area">
                    <div id="respond" style="width: 0;height: 0;clear: both;margin: 0;padding: 0;"></div>
                            <h3 id="wc-comment-header">说点什么</h3>
                <div id="wpcomm" class="wpdiscuz_unauth">
                            <div class="wc-comment-bar">
                    <p class="wc-comment-title">
                        <span class="wc_header_text_count">14</span> 评论 在 "Linux的硬连接与软连接的区别"                    </p>
                    <div class="wpdiscuz_clear"></div>
                </div>
                                    <div class="wc_social_plugin_wrapper">
                
<!--
	wsl_render_auth_widget
	WordPress Social Login 2.3.3.
	http://wordpress.org/plugins/wordpress-social-login/
-->

<style type="text/css">
.wp-social-login-connect-with{}.wp-social-login-provider-list{}.wp-social-login-provider-list a{}.wp-social-login-provider-list img{}.wsl_connect_with_provider{}</style>

<div class="wp-social-login-widget">

	<div class="wp-social-login-connect-with">Connect with:</div>

	<div class="wp-social-login-provider-list">

		<a rel="nofollow" href="http://www.geroro.com/wp-login.php?action=wordpress_social_authenticate&#038;mode=login&#038;provider=WordPress&#038;redirect_to=http%3A%2F%2Fwww.geroro.com%2Farchives%2F418%3Freplytocom%253D47" title="Connect with WordPress" class="wp-social-login-provider wp-social-login-provider-wordpress" data-provider="WordPress">
			<img alt="WordPress" title="Connect with WordPress" src="http://www.geroro.com/wp-content/plugins/wordpress-social-login/assets/img/32x32/wpzoom//wordpress.png" />
		</a>

		<a rel="nofollow" href="http://www.geroro.com/wp-login.php?action=wordpress_social_authenticate&#038;mode=login&#038;provider=LinkedIn&#038;redirect_to=http%3A%2F%2Fwww.geroro.com%2Farchives%2F418%3Freplytocom%253D47" title="Connect with LinkedIn" class="wp-social-login-provider wp-social-login-provider-linkedin" data-provider="LinkedIn">
			<img alt="LinkedIn" title="Connect with LinkedIn" src="http://www.geroro.com/wp-content/plugins/wordpress-social-login/assets/img/32x32/wpzoom//linkedin.png" />
		</a>

		<a rel="nofollow" href="http://www.geroro.com/wp-login.php?action=wordpress_social_authenticate&#038;mode=login&#038;provider=Live&#038;redirect_to=http%3A%2F%2Fwww.geroro.com%2Farchives%2F418%3Freplytocom%253D47" title="Connect with Windows Live" class="wp-social-login-provider wp-social-login-provider-live" data-provider="Live">
			<img alt="Windows Live" title="Connect with Windows Live" src="http://www.geroro.com/wp-content/plugins/wordpress-social-login/assets/img/32x32/wpzoom//live.png" />
		</a>

	</div>

	<div class="wp-social-login-widget-clearing"></div>

</div>

<!-- wsl_render_auth_widget -->

            </div>
                            <div class="wpdiscuz-subscribe-bar">
                                            <form action="http://www.geroro.com/wp-admin/admin-ajax.php?action=addSubscription" method="post" id="wpdiscuz-subscribe-form">
                            <div class="wpdiscuz-subscribe-form-intro">提醒 </div>
                            <div class="wpdiscuz-subscribe-form-option" style="width:40%;">
                                <select class="wpdiscuz_select" name="wpdiscuzSubscriptionType" >
                                                                            <option value="post">新跟进评论</option>
                                                                                                                <option value="all_comment" >我评论的新回复</option>
                                                                    </select>
                            </div>
                                                            <div class="wpdiscuz-item wpdiscuz-subscribe-form-email">
                                    <input  class="email" type="email" name="wpdiscuzSubscriptionEmail" required="required" value="" placeholder="Email"/>
                                </div>
                            							
                            <div class="wpdiscuz-subscribe-form-button">
                                <input id="wpdiscuz_subscription_button" type="submit" value="&rsaquo;" name="wpdiscuz_subscription_button" />
                            </div> 
                            <input type="hidden" id="wpdiscuz_subscribe_form_nonce" name="wpdiscuz_subscribe_form_nonce" value="5dd6a98262" /><input type="hidden" name="_wp_http_referer" value="/archives/418?replytocom%3D47" />                            <input type="hidden" value="418" name="wpdiscuzSubscriptionPostId" />
                        </form>
                                        <div class="wpdiscuz_clear"></div>
                                    </div>
                        <div class="wc-form-wrapper wc-main-form-wrapper"  id='wc-main-form-wrapper-0_0' >
            <div class="wpdiscuz-comment-message" style="display: block;"></div>
                                        <form class="wc_comm_form wc_main_comm_form" method="post"  enctype="multipart/form-data">
                    <div class="wc-field-comment">
                                                                                <div class="wc-field-avatararea">
                                <img src="https://sdn.geekzu.org/avatar/d41d8cd98f00b204e9800998ecf8427e?s=48&r=g&default=http%3A%2F%2Fwww.geroro.com%2Fwp-content%2Fplugins%2Fwp-first-letter-avatar%2Fimages%2Fdefault%2F48%2Fmystery.png" width="48" height="48" alt="avatar" class="avatar avatar-48 wp-user-avatar wp-user-avatar-48 photo avatar-default" />                            </div>
                                                <div class="wpdiscuz-item wc-field-textarea" >
							<div class="wpdiscuz-textarea-wrap wpdiscuz-quicktags-enabled">
								<textarea id="wc-textarea-0_0"   placeholder="加入讨论" required name="wc_comment" class="wc_comment wpd-field"></textarea>
                                								<div class="wpdiscuz-emotion">
									<br />
<b>Warning</b>:  include(C:\web\geroro\wp-content\plugins\jetpack\modules/minileven/theme/pub/minileven/smiley.php): failed to open stream: No such file or directory in <b>C:\web\geroro\wp-content\plugins\wpdiscuz\forms\wpdFormAttr\Form.php</b> on line <b>496</b><br />
<br />
<b>Warning</b>:  include(): Failed opening 'C:\web\geroro\wp-content\plugins\jetpack\modules/minileven/theme/pub/minileven/smiley.php' for inclusion (include_path='.;C:\php\pear') in <b>C:\web\geroro\wp-content\plugins\wpdiscuz\forms\wpdFormAttr\Form.php</b> on line <b>496</b><br />
								</div>
                                                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="wc-form-footer"  style="display: none;"> 
                                <div class="wpd-form-row">
                    <div class="wpd-form-col-left">
                        <div class="wpdiscuz-item wpd-has-icon">
                                <div class="wpd-field-icon"><i class="fa fa-user"></i></div>
                                                <input required="required" class="wc_name wpd-field" type="text" name="wc_name" value="" placeholder="名字" maxlength="50" pattern=".{2,50}" title="">
                            </div>
                        <div class="wpdiscuz-item wpd-has-icon">
                                    <div class="wpd-field-icon"><i class="fa fa-at"></i></div>
                                                <input required="required" class="wc_email wpd-field" type="email" name="wc_email" value="" placeholder="Email">
                            </div>
                            <div class="wpdiscuz-item wpd-has-icon">
                                        <div class="wpd-field-icon"><i class="fa fa-link"></i></div>
                                        <input class="wc_website wpd-field" type="text" name="wc_website" value="" placeholder="Website">
                                    </div>
                        </div>
                <div class="wpd-form-col-right">
                    <div class="wc-field-captcha wpdiscuz-item">
            <div class="wc-captcha-input">
                <input type="text" maxlength="5" value="" autocomplete="off" required="required" name="wc_captcha"  class="wpd-field wc_field_captcha" placeholder="Code" title="Insert the CAPTCHA code">
            </div>
            <div class="wc-label wc-captcha-label">
                                <a class="wpdiscuz-nofollow" href="#" rel="nofollow"><img alt="wpdiscuz_captcha" class="wc_captcha_img" src="http://www.geroro.com/wp-content/plugins/wpdiscuz/utils/temp/MzNis-15009174337406.png"  width="80" height="26"/></a><a class="wpdiscuz-nofollow wc_captcha_refresh_img" href="#" rel="nofollow"><img  alt="refresh" class="" src="http://www.geroro.com/wp-content/plugins/wpdiscuz/assets/img/captcha-loading.png" width="16" height="16"/></a>
                <input type="hidden" id="MzNis71e586ff937ec42b9fe65ccf56d682c32c5089aadc5dcf5f9fd2b8c596d07158" class="wpdiscuz-cnonce" name="cnonce" value="MzNis71e586ff937ec42b9fe65ccf56d682c32c5089aadc5dcf5f9fd2b8c596d07158" />
            </div>
            <div class="clearfix"></div>
        </div>
                <div class="wc-field-submit">
                                                <div class="wc_notification_checkboxes" style="display:block">
                                                    <input id="wc_notification_new_comment-0_0" class="wc_notification_new_comment-0_0" value="comment"  type="checkbox" name="wpdiscuz_notification_type" /> <label class="wc-label-comment-notify" for="wc_notification_new_comment-0_0">有此评论的新回复则提醒我</label><br />
                                                </div>
                                        <input class="wc_comm_submit wc_not_clicked button alt" type="submit" name="submit" value="发表评论">
        </div>
                </div>
                    <div class="clearfix"></div>
        </div>
                            </div>
                    <div class="clearfix"></div>
                    <input type="hidden" class="wpdiscuz_unique_id" value="0_0" name="wpdiscuz_unique_id">
                </form>
                    </div>
                <div id = "wpdiscuz_hidden_secondary_form" style = "display: none;">
                    <div class="wc-form-wrapper wc-secondary-form-wrapper"  id='wc-secondary-form-wrapper-wpdiscuzuniqueid'  style='display: none;' >
            <div class="wpdiscuz-comment-message" style="display: block;"></div>
                            <div class="wc-secondary-forms-social-content"></div>
                                        <form class="wc_comm_form wc-secondary-form-wrapper" method="post"  enctype="multipart/form-data">
                    <div class="wc-field-comment">
                                                                                <div class="wc-field-avatararea">
                                <img src="https://sdn.geekzu.org/avatar/d41d8cd98f00b204e9800998ecf8427e?s=48&r=g&default=http%3A%2F%2Fwww.geroro.com%2Fwp-content%2Fplugins%2Fwp-first-letter-avatar%2Fimages%2Fdefault%2F48%2Fmystery.png" width="48" height="48" alt="avatar" class="avatar avatar-48 wp-user-avatar wp-user-avatar-48 photo avatar-default" />                            </div>
                                                <div class="wpdiscuz-item wc-field-textarea" >
							<div class="wpdiscuz-textarea-wrap wpdiscuz-quicktags-enabled">
								<textarea id="wc-textarea-wpdiscuzuniqueid"   placeholder="加入讨论" required name="wc_comment" class="wc_comment wpd-field"></textarea>
                                								<div class="wpdiscuz-emotion">
									<br />
<b>Warning</b>:  include(C:\web\geroro\wp-content\plugins\jetpack\modules/minileven/theme/pub/minileven/smiley.php): failed to open stream: No such file or directory in <b>C:\web\geroro\wp-content\plugins\wpdiscuz\forms\wpdFormAttr\Form.php</b> on line <b>496</b><br />
<br />
<b>Warning</b>:  include(): Failed opening 'C:\web\geroro\wp-content\plugins\jetpack\modules/minileven/theme/pub/minileven/smiley.php' for inclusion (include_path='.;C:\php\pear') in <b>C:\web\geroro\wp-content\plugins\wpdiscuz\forms\wpdFormAttr\Form.php</b> on line <b>496</b><br />
								</div>
                                                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="wc-form-footer"  style="display: none;"> 
                                <div class="wpd-form-row">
                    <div class="wpd-form-col-left">
                        <div class="wpdiscuz-item wpd-has-icon">
                                <div class="wpd-field-icon"><i class="fa fa-user"></i></div>
                                                <input required="required" class="wc_name wpd-field" type="text" name="wc_name" value="" placeholder="名字" maxlength="50" pattern=".{2,50}" title="">
                            </div>
                        <div class="wpdiscuz-item wpd-has-icon">
                                    <div class="wpd-field-icon"><i class="fa fa-at"></i></div>
                                                <input required="required" class="wc_email wpd-field" type="email" name="wc_email" value="" placeholder="Email">
                            </div>
                            <div class="wpdiscuz-item wpd-has-icon">
                                        <div class="wpd-field-icon"><i class="fa fa-link"></i></div>
                                        <input class="wc_website wpd-field" type="text" name="wc_website" value="" placeholder="Website">
                                    </div>
                        </div>
                <div class="wpd-form-col-right">
                    <div class="wc-field-captcha wpdiscuz-item">
            <div class="wc-captcha-input">
                <input type="text" maxlength="5" value="" autocomplete="off" required="required" name="wc_captcha"  class="wpd-field wc_field_captcha" placeholder="Code" title="Insert the CAPTCHA code">
            </div>
            <div class="wc-label wc-captcha-label">
                                <a class="wpdiscuz-nofollow" href="#" rel="nofollow"><img alt="wpdiscuz_captcha" class="wc_captcha_img" src="http://www.geroro.com/wp-content/plugins/wpdiscuz/utils/temp/zEWS1-15009174337444.png"  width="80" height="26"/></a><a class="wpdiscuz-nofollow wc_captcha_refresh_img" href="#" rel="nofollow"><img  alt="refresh" class="" src="http://www.geroro.com/wp-content/plugins/wpdiscuz/assets/img/captcha-loading.png" width="16" height="16"/></a>
                <input type="hidden" id="zEWS14abaadc41809c93e2e3f2a3b490e40a4292a5fb7fb2c48acc15c37d475745145" class="wpdiscuz-cnonce" name="cnonce" value="zEWS14abaadc41809c93e2e3f2a3b490e40a4292a5fb7fb2c48acc15c37d475745145" />
            </div>
            <div class="clearfix"></div>
        </div>
                <div class="wc-field-submit">
                                                <div class="wc_notification_checkboxes" style="display:block">
                                                    <input id="wc_notification_new_comment-wpdiscuzuniqueid" class="wc_notification_new_comment-wpdiscuzuniqueid" value="comment"  type="checkbox" name="wpdiscuz_notification_type" /> <label class="wc-label-comment-notify" for="wc_notification_new_comment-wpdiscuzuniqueid">有此评论的新回复则提醒我</label><br />
                                                </div>
                                        <input class="wc_comm_submit wc_not_clicked button alt" type="submit" name="submit" value="发表评论">
        </div>
                </div>
                    <div class="clearfix"></div>
        </div>
                            </div>
                    <div class="clearfix"></div>
                    <input type="hidden" class="wpdiscuz_unique_id" value="wpdiscuzuniqueid" name="wpdiscuz_unique_id">
                </form>
                    </div>
                </div>
                    

                        
                                    <div class="wpdiscuz-front-actions">
                        <div class="wpdiscuz-sort-buttons" style="font-size:14px;">排序: &nbsp;
                            <span class="wpdiscuz-sort-button wpdiscuz-date-sort-desc">最新</span> | 
                            <span class="wpdiscuz-sort-button wpdiscuz-date-sort-asc">最旧</span>
                                                            | <span class="wpdiscuz-sort-button wpdiscuz-vote-sort-up">得票最多</span>
                                                    </div>
                    </div>
                
                                <div id="wcThreadWrapper" class="wc-thread-wrapper">
                    <div id="wc-comm-45_0" class="wc-comment wc-blog-guest wc_comment_level-1"><div class="wc-comment-left "><img src="https://sdn.geekzu.org/avatar/5a545f3118290cab3cd41fb3977ba171?s=64&r=g&default=http%3A%2F%2Fwww.geroro.com%2Fwp-content%2Fplugins%2Fwp-first-letter-avatar%2Fimages%2Fdefault%2F96%2Fnumber_3.png" width="64" height="64" alt="" class="avatar avatar-64wp-user-avatar wp-user-avatar-64 alignnone photo avatar-default" /><div class="wc-blog-guest wc-comment-label"><span>游客</span></div></div><div id="comment-45" class="wc-comment-right " ><div class="wc-comment-header"><div class="wc-comment-author "><a rel='nofollow' href='http://www.cxb.zengda.xin/' target='_blank'>增达网QQ-33092290</a></div><div class="wc-comment-link"><span class="wc-comment-img-link-wrap"><i class="fa fa-link wc-comment-img-link wpf-cta" aria-hidden="true"/></i><span><input type="text" class="wc-comment-link-input" value="http://www.geroro.com/archives/418#comment-45" /></span></span></div><div class="wpdiscuz_clear"></div></div><div class="wc-comment-text"><p>真是时光荏苒！</p>
</div><div class="wc-comment-footer"><div class="wc-footer-left"><span class="wc-vote-link wc-up  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-up fa-flip-horizontal wc-vote-img-up"></i><span>赞</span></span><span class="wc-vote-result">0</span><span class="wc-vote-link wc-down  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-down wc-vote-img-down"></i><span>踩</span></span>&nbsp;<span class="wc-reply-button wc-cta-button" title="回复"><i class="fa fa-reply" aria-hidden="true"></i> 回复</span></div><div class="wc-footer-right"><div class="wc-comment-date"><i class="fa fa-clock-o" aria-hidden="true"></i>4 月 3 天 之前</div><div class="wc-toggle wpdiscuz-hidden"><i class="fa fa-chevron-up" aria-hidden="true"  title="隐藏回复"></i></div></div><div class="wpdiscuz_clear"></div></div></div><div class="wpdiscuz-comment-message"></div><div id="wpdiscuz_form_anchor-45_0"  style="clear:both"></div></div><div id="wc-comm-47_0" class="wc-comment wc-blog-guest wc_comment_level-1"><div class="wc-comment-left "><img src="https://sdn.geekzu.org/avatar/8eb78e65932515f24cbc9b29971d78a1?s=64&r=g&default=http%3A%2F%2Fwww.geroro.com%2Fwp-content%2Fplugins%2Fwp-first-letter-avatar%2Fimages%2Fdefault%2F96%2Fnumber_4.png" width="64" height="64" alt="" class="avatar avatar-64wp-user-avatar wp-user-avatar-64 alignnone photo avatar-default" /><div class="wc-blog-guest wc-comment-label"><span>游客</span></div></div><div id="comment-47" class="wc-comment-right " ><div class="wc-comment-header"><div class="wc-comment-author "><a rel='nofollow' href='http://www.48492961.zengda.ren/' target='_blank'>增达网QQ-48492961</a></div><div class="wc-comment-link"><span class="wc-comment-img-link-wrap"><i class="fa fa-link wc-comment-img-link wpf-cta" aria-hidden="true"/></i><span><input type="text" class="wc-comment-link-input" value="http://www.geroro.com/archives/418#comment-47" /></span></span></div><div class="wpdiscuz_clear"></div></div><div class="wc-comment-text"><p>感觉不错哦，认真拜读咯！</p>
</div><div class="wc-comment-footer"><div class="wc-footer-left"><span class="wc-vote-link wc-up  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-up fa-flip-horizontal wc-vote-img-up"></i><span>赞</span></span><span class="wc-vote-result">0</span><span class="wc-vote-link wc-down  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-down wc-vote-img-down"></i><span>踩</span></span>&nbsp;<span class="wc-reply-button wc-cta-button" title="回复"><i class="fa fa-reply" aria-hidden="true"></i> 回复</span></div><div class="wc-footer-right"><div class="wc-comment-date"><i class="fa fa-clock-o" aria-hidden="true"></i>3 月 28 天 之前</div><div class="wc-toggle wpdiscuz-hidden"><i class="fa fa-chevron-up" aria-hidden="true"  title="隐藏回复"></i></div></div><div class="wpdiscuz_clear"></div></div></div><div class="wpdiscuz-comment-message"></div><div id="wpdiscuz_form_anchor-47_0"  style="clear:both"></div></div><div id="wc-comm-48_0" class="wc-comment wc-blog-guest wc_comment_level-1"><div class="wc-comment-left "><img src="https://sdn.geekzu.org/avatar/1fd5c426c367a360aae11d4dc5542999?s=64&r=g&default=http%3A%2F%2Fwww.geroro.com%2Fwp-content%2Fplugins%2Fwp-first-letter-avatar%2Fimages%2Fdefault%2F96%2Fnumber_8.png" width="64" height="64" alt="" class="avatar avatar-64wp-user-avatar wp-user-avatar-64 alignnone photo avatar-default" /><div class="wc-blog-guest wc-comment-label"><span>游客</span></div></div><div id="comment-48" class="wc-comment-right " ><div class="wc-comment-header"><div class="wc-comment-author "><a rel='nofollow' href='http://www.897097065.356688.com/' target='_blank'>QQ897097065</a></div><div class="wc-comment-link"><span class="wc-comment-img-link-wrap"><i class="fa fa-link wc-comment-img-link wpf-cta" aria-hidden="true"/></i><span><input type="text" class="wc-comment-link-input" value="http://www.geroro.com/archives/418#comment-48" /></span></span></div><div class="wpdiscuz_clear"></div></div><div class="wc-comment-text"><p>富强、民主、文明、和谐，自由、平等、公正、法治， 爱国、敬业、诚信、友善。</p>
</div><div class="wc-comment-footer"><div class="wc-footer-left"><span class="wc-vote-link wc-up  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-up fa-flip-horizontal wc-vote-img-up"></i><span>赞</span></span><span class="wc-vote-result">0</span><span class="wc-vote-link wc-down  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-down wc-vote-img-down"></i><span>踩</span></span>&nbsp;<span class="wc-reply-button wc-cta-button" title="回复"><i class="fa fa-reply" aria-hidden="true"></i> 回复</span></div><div class="wc-footer-right"><div class="wc-comment-date"><i class="fa fa-clock-o" aria-hidden="true"></i>3 月 26 天 之前</div><div class="wc-toggle wpdiscuz-hidden"><i class="fa fa-chevron-up" aria-hidden="true"  title="隐藏回复"></i></div></div><div class="wpdiscuz_clear"></div></div></div><div class="wpdiscuz-comment-message"></div><div id="wpdiscuz_form_anchor-48_0"  style="clear:both"></div></div><div id="wc-comm-49_0" class="wc-comment wc-blog-guest wc_comment_level-1"><div class="wc-comment-left "><img src="https://sdn.geekzu.org/avatar/d4cb78a341f895df7aad5d7a9037a673?s=64&r=g&default=http%3A%2F%2Fwww.geroro.com%2Fwp-content%2Fplugins%2Fwp-first-letter-avatar%2Fimages%2Fdefault%2F96%2Flatin_y.png" width="64" height="64" alt="" class="avatar avatar-64wp-user-avatar wp-user-avatar-64 alignnone photo avatar-default" /><div class="wc-blog-guest wc-comment-label"><span>游客</span></div></div><div id="comment-49" class="wc-comment-right " ><div class="wc-comment-header"><div class="wc-comment-author "><a rel='nofollow' href='http://www.yihuanghou.com/' target='_blank'>衣皇后</a></div><div class="wc-comment-link"><span class="wc-comment-img-link-wrap"><i class="fa fa-link wc-comment-img-link wpf-cta" aria-hidden="true"/></i><span><input type="text" class="wc-comment-link-input" value="http://www.geroro.com/archives/418#comment-49" /></span></span></div><div class="wpdiscuz_clear"></div></div><div class="wc-comment-text"><p>学习使人进步，到此拜读！</p>
</div><div class="wc-comment-footer"><div class="wc-footer-left"><span class="wc-vote-link wc-up  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-up fa-flip-horizontal wc-vote-img-up"></i><span>赞</span></span><span class="wc-vote-result">0</span><span class="wc-vote-link wc-down  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-down wc-vote-img-down"></i><span>踩</span></span>&nbsp;<span class="wc-reply-button wc-cta-button" title="回复"><i class="fa fa-reply" aria-hidden="true"></i> 回复</span></div><div class="wc-footer-right"><div class="wc-comment-date"><i class="fa fa-clock-o" aria-hidden="true"></i>3 月 23 天 之前</div><div class="wc-toggle wpdiscuz-hidden"><i class="fa fa-chevron-up" aria-hidden="true"  title="隐藏回复"></i></div></div><div class="wpdiscuz_clear"></div></div></div><div class="wpdiscuz-comment-message"></div><div id="wpdiscuz_form_anchor-49_0"  style="clear:both"></div></div><div id="wc-comm-53_0" class="wc-comment wc-blog-guest wc_comment_level-1"><div class="wc-comment-left "><img src="https://sdn.geekzu.org/avatar/6100f76c0965583dca544700fa513cd0?s=64&r=g&default=http%3A%2F%2Fwww.geroro.com%2Fwp-content%2Fplugins%2Fwp-first-letter-avatar%2Fimages%2Fdefault%2F96%2Fnumber_1.png" width="64" height="64" alt="" class="avatar avatar-64wp-user-avatar wp-user-avatar-64 alignnone photo avatar-default" /><div class="wc-blog-guest wc-comment-label"><span>游客</span></div></div><div id="comment-53" class="wc-comment-right " ><div class="wc-comment-header"><div class="wc-comment-author "><a rel='nofollow' href='http://www.yihuanghou.com/?ic=wen' target='_blank'>衣皇后</a></div><div class="wc-comment-link"><span class="wc-comment-img-link-wrap"><i class="fa fa-link wc-comment-img-link wpf-cta" aria-hidden="true"/></i><span><input type="text" class="wc-comment-link-input" value="http://www.geroro.com/archives/418#comment-53" /></span></span></div><div class="wpdiscuz_clear"></div></div><div class="wc-comment-text"><p>从百度进来的，博客不错哦！</p>
</div><div class="wc-comment-footer"><div class="wc-footer-left"><span class="wc-vote-link wc-up  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-up fa-flip-horizontal wc-vote-img-up"></i><span>赞</span></span><span class="wc-vote-result">0</span><span class="wc-vote-link wc-down  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-down wc-vote-img-down"></i><span>踩</span></span>&nbsp;<span class="wc-reply-button wc-cta-button" title="回复"><i class="fa fa-reply" aria-hidden="true"></i> 回复</span></div><div class="wc-footer-right"><div class="wc-comment-date"><i class="fa fa-clock-o" aria-hidden="true"></i>3 月 21 天 之前</div><div class="wc-toggle wpdiscuz-hidden"><i class="fa fa-chevron-up" aria-hidden="true"  title="隐藏回复"></i></div></div><div class="wpdiscuz_clear"></div></div></div><div class="wpdiscuz-comment-message"></div><div id="wpdiscuz_form_anchor-53_0"  style="clear:both"></div></div><div id="wc-comm-54_0" class="wc-comment wc-blog-guest wc_comment_level-1"><div class="wc-comment-left "><img src="https://sdn.geekzu.org/avatar/1c62e327c6c30050647c4fb7898d4314?s=64&r=g&default=http%3A%2F%2Fwww.geroro.com%2Fwp-content%2Fplugins%2Fwp-first-letter-avatar%2Fimages%2Fdefault%2F96%2Fnumber_2.png" width="64" height="64" alt="" class="avatar avatar-64wp-user-avatar wp-user-avatar-64 alignnone photo avatar-default" /><div class="wc-blog-guest wc-comment-label"><span>游客</span></div></div><div id="comment-54" class="wc-comment-right " ><div class="wc-comment-header"><div class="wc-comment-author "><a rel='nofollow' href='http://www.chun.yihuanghou.com/' target='_blank'>衣皇后</a></div><div class="wc-comment-link"><span class="wc-comment-img-link-wrap"><i class="fa fa-link wc-comment-img-link wpf-cta" aria-hidden="true"/></i><span><input type="text" class="wc-comment-link-input" value="http://www.geroro.com/archives/418#comment-54" /></span></span></div><div class="wpdiscuz_clear"></div></div><div class="wc-comment-text"><p>对你爱爱爱不完,我可以天天月月年年看你博客到永远!</p>
</div><div class="wc-comment-footer"><div class="wc-footer-left"><span class="wc-vote-link wc-up  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-up fa-flip-horizontal wc-vote-img-up"></i><span>赞</span></span><span class="wc-vote-result">0</span><span class="wc-vote-link wc-down  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-down wc-vote-img-down"></i><span>踩</span></span>&nbsp;<span class="wc-reply-button wc-cta-button" title="回复"><i class="fa fa-reply" aria-hidden="true"></i> 回复</span></div><div class="wc-footer-right"><div class="wc-comment-date"><i class="fa fa-clock-o" aria-hidden="true"></i>3 月 19 天 之前</div><div class="wc-toggle wpdiscuz-hidden"><i class="fa fa-chevron-up" aria-hidden="true"  title="隐藏回复"></i></div></div><div class="wpdiscuz_clear"></div></div></div><div class="wpdiscuz-comment-message"></div><div id="wpdiscuz_form_anchor-54_0"  style="clear:both"></div></div><div id="wc-comm-55_0" class="wc-comment wc-blog-guest wc_comment_level-1"><div class="wc-comment-left "><img src="https://sdn.geekzu.org/avatar/7130b137ee405747f74e1f6e244e2122?s=64&r=g&default=http%3A%2F%2Fwww.geroro.com%2Fwp-content%2Fplugins%2Fwp-first-letter-avatar%2Fimages%2Fdefault%2F96%2Flatin_s.png" width="64" height="64" alt="" class="avatar avatar-64wp-user-avatar wp-user-avatar-64 alignnone photo avatar-default" /><div class="wc-blog-guest wc-comment-label"><span>游客</span></div></div><div id="comment-55" class="wc-comment-right " ><div class="wc-comment-header"><div class="wc-comment-author "><a rel='nofollow' href='http://www.yihuanghou.com/' target='_blank'>衣皇后</a></div><div class="wc-comment-link"><span class="wc-comment-img-link-wrap"><i class="fa fa-link wc-comment-img-link wpf-cta" aria-hidden="true"/></i><span><input type="text" class="wc-comment-link-input" value="http://www.geroro.com/archives/418#comment-55" /></span></span></div><div class="wpdiscuz_clear"></div></div><div class="wc-comment-text"><p>很荣幸来访您的博客,留言只是证明我来过!</p>
</div><div class="wc-comment-footer"><div class="wc-footer-left"><span class="wc-vote-link wc-up  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-up fa-flip-horizontal wc-vote-img-up"></i><span>赞</span></span><span class="wc-vote-result">0</span><span class="wc-vote-link wc-down  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-down wc-vote-img-down"></i><span>踩</span></span>&nbsp;<span class="wc-reply-button wc-cta-button" title="回复"><i class="fa fa-reply" aria-hidden="true"></i> 回复</span></div><div class="wc-footer-right"><div class="wc-comment-date"><i class="fa fa-clock-o" aria-hidden="true"></i>3 月 11 天 之前</div><div class="wc-toggle wpdiscuz-hidden"><i class="fa fa-chevron-up" aria-hidden="true"  title="隐藏回复"></i></div></div><div class="wpdiscuz_clear"></div></div></div><div class="wpdiscuz-comment-message"></div><div id="wpdiscuz_form_anchor-55_0"  style="clear:both"></div></div><div id="wc-comm-56_0" class="wc-comment wc-blog-guest wc_comment_level-1"><div class="wc-comment-left "><img src="https://sdn.geekzu.org/avatar/d4cb78a341f895df7aad5d7a9037a673?s=64&r=g&default=http%3A%2F%2Fwww.geroro.com%2Fwp-content%2Fplugins%2Fwp-first-letter-avatar%2Fimages%2Fdefault%2F96%2Flatin_y.png" width="64" height="64" alt="" class="avatar avatar-64wp-user-avatar wp-user-avatar-64 alignnone photo avatar-default" /><div class="wc-blog-guest wc-comment-label"><span>游客</span></div></div><div id="comment-56" class="wc-comment-right " ><div class="wc-comment-header"><div class="wc-comment-author "><a rel='nofollow' href='http://www.yihuanghou.com/' target='_blank'>yihuanghou</a></div><div class="wc-comment-link"><span class="wc-comment-img-link-wrap"><i class="fa fa-link wc-comment-img-link wpf-cta" aria-hidden="true"/></i><span><input type="text" class="wc-comment-link-input" value="http://www.geroro.com/archives/418#comment-56" /></span></span></div><div class="wpdiscuz_clear"></div></div><div class="wc-comment-text"><p>世事无常，但这个博客定能永保辉煌！</p>
</div><div class="wc-comment-footer"><div class="wc-footer-left"><span class="wc-vote-link wc-up  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-up fa-flip-horizontal wc-vote-img-up"></i><span>赞</span></span><span class="wc-vote-result">0</span><span class="wc-vote-link wc-down  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-down wc-vote-img-down"></i><span>踩</span></span>&nbsp;<span class="wc-reply-button wc-cta-button" title="回复"><i class="fa fa-reply" aria-hidden="true"></i> 回复</span></div><div class="wc-footer-right"><div class="wc-comment-date"><i class="fa fa-clock-o" aria-hidden="true"></i>3 月 6 天 之前</div><div class="wc-toggle wpdiscuz-hidden"><i class="fa fa-chevron-up" aria-hidden="true"  title="隐藏回复"></i></div></div><div class="wpdiscuz_clear"></div></div></div><div class="wpdiscuz-comment-message"></div><div id="wpdiscuz_form_anchor-56_0"  style="clear:both"></div></div><div id="wc-comm-57_0" class="wc-comment wc-blog-guest wc_comment_level-1"><div class="wc-comment-left "><img src="https://sdn.geekzu.org/avatar/d4cb78a341f895df7aad5d7a9037a673?s=64&r=g&default=http%3A%2F%2Fwww.geroro.com%2Fwp-content%2Fplugins%2Fwp-first-letter-avatar%2Fimages%2Fdefault%2F96%2Flatin_y.png" width="64" height="64" alt="" class="avatar avatar-64wp-user-avatar wp-user-avatar-64 alignnone photo avatar-default" /><div class="wc-blog-guest wc-comment-label"><span>游客</span></div></div><div id="comment-57" class="wc-comment-right " ><div class="wc-comment-header"><div class="wc-comment-author "><a rel='nofollow' href='http://www.yihuanghou.com/' target='_blank'>www.yihuanghou.com</a></div><div class="wc-comment-link"><span class="wc-comment-img-link-wrap"><i class="fa fa-link wc-comment-img-link wpf-cta" aria-hidden="true"/></i><span><input type="text" class="wc-comment-link-input" value="http://www.geroro.com/archives/418#comment-57" /></span></span></div><div class="wpdiscuz_clear"></div></div><div class="wc-comment-text"><p>时间飞快，转眼年中就要到来，祝你天天愉快！</p>
</div><div class="wc-comment-footer"><div class="wc-footer-left"><span class="wc-vote-link wc-up  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-up fa-flip-horizontal wc-vote-img-up"></i><span>赞</span></span><span class="wc-vote-result">0</span><span class="wc-vote-link wc-down  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-down wc-vote-img-down"></i><span>踩</span></span>&nbsp;<span class="wc-reply-button wc-cta-button" title="回复"><i class="fa fa-reply" aria-hidden="true"></i> 回复</span></div><div class="wc-footer-right"><div class="wc-comment-date"><i class="fa fa-clock-o" aria-hidden="true"></i>3 月 2 天 之前</div><div class="wc-toggle wpdiscuz-hidden"><i class="fa fa-chevron-up" aria-hidden="true"  title="隐藏回复"></i></div></div><div class="wpdiscuz_clear"></div></div></div><div class="wpdiscuz-comment-message"></div><div id="wpdiscuz_form_anchor-57_0"  style="clear:both"></div></div><div id="wc-comm-58_0" class="wc-comment wc-blog-guest wc_comment_level-1"><div class="wc-comment-left "><img src="https://sdn.geekzu.org/avatar/5d3a6ed66bcc46f9b2cf09e274f38808?s=64&r=g&default=http%3A%2F%2Fwww.geroro.com%2Fwp-content%2Fplugins%2Fwp-first-letter-avatar%2Fimages%2Fdefault%2F96%2Flatin_s.png" width="64" height="64" alt="" class="avatar avatar-64wp-user-avatar wp-user-avatar-64 alignnone photo avatar-default" /><div class="wc-blog-guest wc-comment-label"><span>游客</span></div></div><div id="comment-58" class="wc-comment-right " ><div class="wc-comment-header"><div class="wc-comment-author "><a rel='nofollow' href='http://www.xuan.yihuanghou.com/' target='_blank'>xuan</a></div><div class="wc-comment-link"><span class="wc-comment-img-link-wrap"><i class="fa fa-link wc-comment-img-link wpf-cta" aria-hidden="true"/></i><span><input type="text" class="wc-comment-link-input" value="http://www.geroro.com/archives/418#comment-58" /></span></span></div><div class="wpdiscuz_clear"></div></div><div class="wc-comment-text"><p>我只想默默的拜读您的博客！</p>
</div><div class="wc-comment-footer"><div class="wc-footer-left"><span class="wc-vote-link wc-up  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-up fa-flip-horizontal wc-vote-img-up"></i><span>赞</span></span><span class="wc-vote-result">0</span><span class="wc-vote-link wc-down  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-down wc-vote-img-down"></i><span>踩</span></span>&nbsp;<span class="wc-reply-button wc-cta-button" title="回复"><i class="fa fa-reply" aria-hidden="true"></i> 回复</span></div><div class="wc-footer-right"><div class="wc-comment-date"><i class="fa fa-clock-o" aria-hidden="true"></i>2 月 28 天 之前</div><div class="wc-toggle wpdiscuz-hidden"><i class="fa fa-chevron-up" aria-hidden="true"  title="隐藏回复"></i></div></div><div class="wpdiscuz_clear"></div></div></div><div class="wpdiscuz-comment-message"></div><div id="wpdiscuz_form_anchor-58_0"  style="clear:both"></div></div><div id="wc-comm-59_0" class="wc-comment wc-blog-guest wc_comment_level-1"><div class="wc-comment-left "><img src="https://sdn.geekzu.org/avatar/1c62e327c6c30050647c4fb7898d4314?s=64&r=g&default=http%3A%2F%2Fwww.geroro.com%2Fwp-content%2Fplugins%2Fwp-first-letter-avatar%2Fimages%2Fdefault%2F96%2Fnumber_2.png" width="64" height="64" alt="" class="avatar avatar-64wp-user-avatar wp-user-avatar-64 alignnone photo avatar-default" /><div class="wc-blog-guest wc-comment-label"><span>游客</span></div></div><div id="comment-59" class="wc-comment-right " ><div class="wc-comment-header"><div class="wc-comment-author "><a rel='nofollow' href='http://www.wozhuan.la/?ic=cool' target='_blank'>我赚啦</a></div><div class="wc-comment-link"><span class="wc-comment-img-link-wrap"><i class="fa fa-link wc-comment-img-link wpf-cta" aria-hidden="true"/></i><span><input type="text" class="wc-comment-link-input" value="http://www.geroro.com/archives/418#comment-59" /></span></span></div><div class="wpdiscuz_clear"></div></div><div class="wc-comment-text"><p>闲着没事，随便逛逛，心静自然凉。</p>
</div><div class="wc-comment-footer"><div class="wc-footer-left"><span class="wc-vote-link wc-up  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-up fa-flip-horizontal wc-vote-img-up"></i><span>赞</span></span><span class="wc-vote-result">0</span><span class="wc-vote-link wc-down  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-down wc-vote-img-down"></i><span>踩</span></span>&nbsp;<span class="wc-reply-button wc-cta-button" title="回复"><i class="fa fa-reply" aria-hidden="true"></i> 回复</span></div><div class="wc-footer-right"><div class="wc-comment-date"><i class="fa fa-clock-o" aria-hidden="true"></i>2 月 24 天 之前</div><div class="wc-toggle wpdiscuz-hidden"><i class="fa fa-chevron-up" aria-hidden="true"  title="隐藏回复"></i></div></div><div class="wpdiscuz_clear"></div></div></div><div class="wpdiscuz-comment-message"></div><div id="wpdiscuz_form_anchor-59_0"  style="clear:both"></div></div><div id="wc-comm-62_0" class="wc-comment wc-blog-guest wc_comment_level-1"><div class="wc-comment-left "><img src="https://sdn.geekzu.org/avatar/1c62e327c6c30050647c4fb7898d4314?s=64&r=g&default=http%3A%2F%2Fwww.geroro.com%2Fwp-content%2Fplugins%2Fwp-first-letter-avatar%2Fimages%2Fdefault%2F96%2Fnumber_2.png" width="64" height="64" alt="" class="avatar avatar-64wp-user-avatar wp-user-avatar-64 alignnone photo avatar-default" /><div class="wc-blog-guest wc-comment-label"><span>游客</span></div></div><div id="comment-62" class="wc-comment-right " ><div class="wc-comment-header"><div class="wc-comment-author "><a rel='nofollow' href='http://www.kk8888kk.zengda.xin/' target='_blank'>增达网</a></div><div class="wc-comment-link"><span class="wc-comment-img-link-wrap"><i class="fa fa-link wc-comment-img-link wpf-cta" aria-hidden="true"/></i><span><input type="text" class="wc-comment-link-input" value="http://www.geroro.com/archives/418#comment-62" /></span></span></div><div class="wpdiscuz_clear"></div></div><div class="wc-comment-text"><p>受教了！呵呵！</p>
</div><div class="wc-comment-footer"><div class="wc-footer-left"><span class="wc-vote-link wc-up  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-up fa-flip-horizontal wc-vote-img-up"></i><span>赞</span></span><span class="wc-vote-result">0</span><span class="wc-vote-link wc-down  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-down wc-vote-img-down"></i><span>踩</span></span>&nbsp;<span class="wc-reply-button wc-cta-button" title="回复"><i class="fa fa-reply" aria-hidden="true"></i> 回复</span></div><div class="wc-footer-right"><div class="wc-comment-date"><i class="fa fa-clock-o" aria-hidden="true"></i>2 月 9 天 之前</div><div class="wc-toggle wpdiscuz-hidden"><i class="fa fa-chevron-up" aria-hidden="true"  title="隐藏回复"></i></div></div><div class="wpdiscuz_clear"></div></div></div><div class="wpdiscuz-comment-message"></div><div id="wpdiscuz_form_anchor-62_0"  style="clear:both"></div></div><div id="wc-comm-64_0" class="wc-comment wc-blog-guest wc_comment_level-1"><div class="wc-comment-left "><img src="https://sdn.geekzu.org/avatar/1c62e327c6c30050647c4fb7898d4314?s=64&r=g&default=http%3A%2F%2Fwww.geroro.com%2Fwp-content%2Fplugins%2Fwp-first-letter-avatar%2Fimages%2Fdefault%2F96%2Fnumber_2.png" width="64" height="64" alt="" class="avatar avatar-64wp-user-avatar wp-user-avatar-64 alignnone photo avatar-default" /><div class="wc-blog-guest wc-comment-label"><span>游客</span></div></div><div id="comment-64" class="wc-comment-right " ><div class="wc-comment-header"><div class="wc-comment-author "><a rel='nofollow' href='http://www.wozhuan.la/?ic=cool' target='_blank'>我赚啦</a></div><div class="wc-comment-link"><span class="wc-comment-img-link-wrap"><i class="fa fa-link wc-comment-img-link wpf-cta" aria-hidden="true"/></i><span><input type="text" class="wc-comment-link-input" value="http://www.geroro.com/archives/418#comment-64" /></span></span></div><div class="wpdiscuz_clear"></div></div><div class="wc-comment-text"><p>古人日三省其身，我从博客里吸收养分！</p>
</div><div class="wc-comment-footer"><div class="wc-footer-left"><span class="wc-vote-link wc-up  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-up fa-flip-horizontal wc-vote-img-up"></i><span>赞</span></span><span class="wc-vote-result">0</span><span class="wc-vote-link wc-down  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-down wc-vote-img-down"></i><span>踩</span></span>&nbsp;<span class="wc-reply-button wc-cta-button" title="回复"><i class="fa fa-reply" aria-hidden="true"></i> 回复</span></div><div class="wc-footer-right"><div class="wc-comment-date"><i class="fa fa-clock-o" aria-hidden="true"></i>2 月 4 天 之前</div><div class="wc-toggle wpdiscuz-hidden"><i class="fa fa-chevron-up" aria-hidden="true"  title="隐藏回复"></i></div></div><div class="wpdiscuz_clear"></div></div></div><div class="wpdiscuz-comment-message"></div><div id="wpdiscuz_form_anchor-64_0"  style="clear:both"></div></div><div id="wc-comm-67_0" class="wc-comment wc-blog-guest wc_comment_level-1"><div class="wc-comment-left "><img src="https://sdn.geekzu.org/avatar/ab6c95cf1ecb639489e43f66171e37c7?s=64&r=g&default=http%3A%2F%2Fwww.geroro.com%2Fwp-content%2Fplugins%2Fwp-first-letter-avatar%2Fimages%2Fdefault%2F96%2Fnumber_2.png" width="64" height="64" alt="" class="avatar avatar-64wp-user-avatar wp-user-avatar-64 alignnone photo avatar-default" /><div class="wc-blog-guest wc-comment-label"><span>游客</span></div></div><div id="comment-67" class="wc-comment-right " ><div class="wc-comment-header"><div class="wc-comment-author "><a rel='nofollow' href='http://www.walker307.yihuanghou.com/' target='_blank'>衣皇后</a></div><div class="wc-comment-link"><span class="wc-comment-img-link-wrap"><i class="fa fa-link wc-comment-img-link wpf-cta" aria-hidden="true"/></i><span><input type="text" class="wc-comment-link-input" value="http://www.geroro.com/archives/418#comment-67" /></span></span></div><div class="wpdiscuz_clear"></div></div><div class="wc-comment-text"><p>很荣幸来到这里参观！</p>
</div><div class="wc-comment-footer"><div class="wc-footer-left"><span class="wc-vote-link wc-up  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-up fa-flip-horizontal wc-vote-img-up"></i><span>赞</span></span><span class="wc-vote-result">0</span><span class="wc-vote-link wc-down  wc_vote wc_not_clicked wc_tooltipster"><i class="fa fa-thumbs-down wc-vote-img-down"></i><span>踩</span></span>&nbsp;<span class="wc-reply-button wc-cta-button" title="回复"><i class="fa fa-reply" aria-hidden="true"></i> 回复</span></div><div class="wc-footer-right"><div class="wc-comment-date"><i class="fa fa-clock-o" aria-hidden="true"></i>1 月 23 天 之前</div><div class="wc-toggle wpdiscuz-hidden"><i class="fa fa-chevron-up" aria-hidden="true"  title="隐藏回复"></i></div></div><div class="wpdiscuz_clear"></div></div></div><div class="wpdiscuz-comment-message"></div><div id="wpdiscuz_form_anchor-67_0"  style="clear:both"></div></div>                
                    <div class="wpdiscuz-comment-pagination">
                                            </div>
                </div>
                <div class="wpdiscuz_clear"></div>
                                                                                </div>
        </div>
        <div class="wpdiscuz-loading-bar wpdiscuz-loading-bar-unauth"><img class="wpdiscuz-loading-bar-img" alt="wpDiscuz" src="http://www.geroro.com/wp-content/plugins/wpdiscuz/assets/img/loading.gif" width="32" height="25" /></div>
        
					
				
			</div><!-- #content -->

			
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
</div></div></div></aside>	        <aside id="wp-cumulus" class="widget wp_cumulus_widget">							<h3 class="widget-title">标签云</h3>						<object type="application/x-shockwave-flash" data="http://www.geroro.com/wp-content/plugins/wp-cumulus/tagcloud.swf?r=6178283" width="300" height="300"><param name="movie" value="http://www.geroro.com/wp-content/plugins/wp-cumulus/tagcloud.swf?r=6178283" /><param name="bgcolor" value="#ffffff" /><param name="AllowScriptAccess" value="always" /><param name="flashvars" value="tcolor=0x333333&amp;tcolor2=0x333333&amp;hicolor=0x000000&amp;tspeed=100&amp;distr=true&amp;mode=tags&amp;tagcloud=%3Ctags%3E%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fbat%22+class%3D%22tag-cloud-link+tag-link-47+tag-link-position-1%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22Bat+%281+item%29%22%3EBat%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fjava%22+class%3D%22tag-cloud-link+tag-link-27+tag-link-position-2%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22Java+%281+item%29%22%3EJava%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Flinux%22+class%3D%22tag-cloud-link+tag-link-31+tag-link-position-3%22+style%3D%22font-size%3A+22pt%3B%22+aria-label%3D%22Linux+%2810+items%29%22%3ELinux%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fmysql%22+class%3D%22tag-cloud-link+tag-link-28+tag-link-position-4%22+style%3D%22font-size%3A+21.243243243243pt%3B%22+aria-label%3D%22Mysql+%289+items%29%22%3EMysql%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Foracle%22+class%3D%22tag-cloud-link+tag-link-32+tag-link-position-5%22+style%3D%22font-size%3A+13.675675675676pt%3B%22+aria-label%3D%22Oracle+%283+items%29%22%3EOracle%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fparamiko%22+class%3D%22tag-cloud-link+tag-link-48+tag-link-position-6%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22Paramiko+%281+item%29%22%3EParamiko%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fpe%22+class%3D%22tag-cloud-link+tag-link-30+tag-link-position-7%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22PE+%281+item%29%22%3EPE%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fphp%22+class%3D%22tag-cloud-link+tag-link-15+tag-link-position-8%22+style%3D%22font-size%3A+19.351351351351pt%3B%22+aria-label%3D%22PHP+%287+items%29%22%3EPHP%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fpxe%22+class%3D%22tag-cloud-link+tag-link-29+tag-link-position-9%22+style%3D%22font-size%3A+11.405405405405pt%3B%22+aria-label%3D%22PXE+%282+items%29%22%3EPXE%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fpython%22+class%3D%22tag-cloud-link+tag-link-35+tag-link-position-10%22+style%3D%22font-size%3A+11.405405405405pt%3B%22+aria-label%3D%22python+%282+items%29%22%3Epython%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fshell%22+class%3D%22tag-cloud-link+tag-link-33+tag-link-position-11%22+style%3D%22font-size%3A+17.081081081081pt%3B%22+aria-label%3D%22Shell+%285+items%29%22%3EShell%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Ftomcat%22+class%3D%22tag-cloud-link+tag-link-44+tag-link-position-12%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22Tomcat+%281+item%29%22%3ETomcat%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fwindows%22+class%3D%22tag-cloud-link+tag-link-46+tag-link-position-13%22+style%3D%22font-size%3A+8pt%3B%22+aria-label%3D%22Windows+%281+item%29%22%3EWindows%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fwordpress%22+class%3D%22tag-cloud-link+tag-link-42+tag-link-position-14%22+style%3D%22font-size%3A+11.405405405405pt%3B%22+aria-label%3D%22Wordpress+%282+items%29%22%3EWordpress%3C%2Fa%3E%0A%3Ca+href%3D%22http%3A%2F%2Fwww.geroro.com%2Farchives%2Ftag%2Fserver%22+class%3D%22tag-cloud-link+tag-link-43+tag-link-position-15%22+style%3D%22font-size%3A+11.405405405405pt%3B%22+aria-label%3D%22%E6%9C%8D%E5%8A%A1%E5%99%A8+%282+items%29%22%3E%E6%9C%8D%E5%8A%A1%E5%99%A8%3C%2Fa%3E%3C%2Ftags%3E" /><p><a href="http://www.geroro.com/archives/tag/bat" class="tag-cloud-link tag-link-47 tag-link-position-1" style="font-size: 8pt;" aria-label="Bat (1 item)">Bat</a>
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

		<a href="http://www.geroro.com/archives/418/?ak_action=reject_mobile">查看全部站点</a><br />

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
	<div class="grofile-hash-map-d41d8cd98f00b204e9800998ecf8427e">
	</div>
	<div class="grofile-hash-map-5a545f3118290cab3cd41fb3977ba171">
	</div>
	<div class="grofile-hash-map-8eb78e65932515f24cbc9b29971d78a1">
	</div>
	<div class="grofile-hash-map-1fd5c426c367a360aae11d4dc5542999">
	</div>
	<div class="grofile-hash-map-d4cb78a341f895df7aad5d7a9037a673">
	</div>
	<div class="grofile-hash-map-6100f76c0965583dca544700fa513cd0">
	</div>
	<div class="grofile-hash-map-1c62e327c6c30050647c4fb7898d4314">
	</div>
	<div class="grofile-hash-map-7130b137ee405747f74e1f6e244e2122">
	</div>
	<div class="grofile-hash-map-5d3a6ed66bcc46f9b2cf09e274f38808">
	</div>
	<div class="grofile-hash-map-ab6c95cf1ecb639489e43f66171e37c7">
	</div>
	</div>
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
<script type='text/javascript' src='http://www.geroro.com/wp-includes/js/jquery/jquery.form.min.js?ver=3.37.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var quicktagsL10n = {"closeAllOpenTags":"\u5173\u95ed\u6240\u6709\u6253\u5f00\u7684\u6807\u7b7e","closeTags":"\u5173\u95ed\u6807\u7b7e","enterURL":"\u8f93\u5165URL","enterImageURL":"\u8f93\u5165\u56fe\u50cfURL","enterImageDescription":"\u4e3a\u56fe\u50cf\u8f93\u5165\u63cf\u8ff0","textdirection":"\u6587\u672c\u65b9\u5411","toggleTextdirection":"\u5207\u6362\u7f16\u8f91\u5668\u6587\u672c\u4e66\u5199\u65b9\u5411","dfw":"\u514d\u6253\u6270\u5199\u4f5c\u6a21\u5f0f","strong":"\u7c97\u4f53","strongClose":"\u5173\u95ed\u7c97\u4f53\u6807\u7b7e","em":"\u659c\u4f53","emClose":"\u5173\u95ed\u659c\u4f53\u6807\u7b7e","link":"\u63d2\u5165\u94fe\u63a5","blockquote":"\u5757\u5f15\u7528","blockquoteClose":"\u5173\u95ed\u5757\u5f15\u7528\u6807\u7b7e","del":"\u5220\u9664\u7684\u6587\u5b57\uff08\u5220\u9664\u7ebf\uff09","delClose":"\u5173\u95ed\u5220\u9664\u7ebf\u6807\u7b7e","ins":"\u63d2\u5165\u7684\u6587\u5b57","insClose":"\u5173\u95ed\u63d2\u5165\u7684\u6587\u5b57\u6807\u7b7e","image":"\u63d2\u5165\u56fe\u50cf","ul":"\u9879\u76ee\u7b26\u53f7\u5217\u8868","ulClose":"\u5173\u95ed\u9879\u76ee\u7b26\u53f7\u5217\u8868\u6807\u7b7e","ol":"\u7f16\u53f7\u5217\u8868","olClose":"\u5173\u95ed\u7f16\u53f7\u5217\u8868\u6807\u7b7e","li":"\u5217\u8868\u9879\u76ee","liClose":"\u5173\u95ed\u5217\u8868\u9879\u76ee\u6807\u7b7e","code":"\u4ee3\u7801","codeClose":"\u5173\u95ed\u4ee3\u7801\u6807\u7b7e","more":"\u63d2\u5165\u201cMore\u201d\u6807\u7b7e"};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.geroro.com/wp-includes/js/quicktags.min.js?ver=4.8'></script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/plugins/wpdiscuz/assets/third-party/quicktags/wpdiscuz-quictags.js?ver=4.0.8'></script>
<script type='text/javascript' src='http://s.gravatar.com/js/gprofiles.js?ver=2017Julaa'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var WPGroHo = {"my_hash":""};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/plugins/jetpack/modules/wpgroho.js?ver=4.8'></script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/plugins/jetpack/modules/minileven/theme/pub/minileven/js/small-menu.js?ver=20120206'></script>
<script type='text/javascript' src='http://www.geroro.com/wp-includes/js/comment-reply.min.js?ver=4.8'></script>
<script type='text/javascript' src='http://www.geroro.com/wp-includes/js/wp-embed.min.js?ver=4.8'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var su_other_shortcodes = {"no_preview":"\u7b80\u7801\u4e0d\u80fd\u5728\u5b9e\u65f6\u9884\u89c8\u3002\u8bf7\u628a\u5b83\u63d2\u5165\u5230\u7f16\u8f91\u5668\u7136\u540e\u518d\u7f51\u7ad9\u4e0a\u9884\u89c8\u3002"};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.geroro.com/wp-content/plugins/shortcodes-ultimate/assets/js/other-shortcodes.js?ver=4.10.2'></script>
<script type="text/javascript" language="javascript" src="http://www.geroro.com/wp-content/plugins/donate-with-qrcode/js/wbolt.js"></script><script type='text/javascript' src='https://stats.wp.com/e-201730.js' async defer></script>
<script type='text/javascript'>
	_stq = window._stq || [];
	_stq.push([ 'view', {v:'ext',j:'1:5.1',blog:'107909124',post:'418',tz:'8',srv:'www.geroro.com'} ]);
	_stq.push([ 'clickTrackerInit', '107909124', '418' ]);
</script>
<!-- Generated in 1.829 seconds. Made 69 queries to database and 99 cached queries. Memory used - 39.63MB -->
<!-- Cached by DB Cache Reloaded Fix -->

</body>
</html>

<!-- Dynamic page generated in 1.836 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2017-07-25 01:30:33 -->

<!-- Super Cache dynamic page detected but late init not set. See the readme.txt for further details. -->
<!-- Dynamic WPCache Super Cache -->