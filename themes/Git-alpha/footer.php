</section>
<?php
	/*云落私人邮箱订阅代码，可以直接删除，开始*/
    if (isset($_POST['dingyue_form']) && $_POST['dingyue_form'] == 'send') {
    $tomail = get_bloginfo('admin_email');
    $headers = "Content-Type:text/html;charset=UTF-8\n";
    $email = isset($_POST['dingyue_email']) ? trim(htmlspecialchars($_POST['dingyue_email'], ENT_QUOTES)) : '';
    $mail_content = '<p>邮箱订阅：'.$email.'</p><p>请前往 <a target="_blank" href="https://us16.admin.mailchimp.com/">MailChimp</a> 操作</p>';
	if(empty($email)){
	echo '<script type="text/javascript">alert("邮箱地址不能为空");window.location = document.referrer;</script>';
	}else{
	wp_mail($tomail, '[邮箱订阅]邮箱:'.$email.'', $mail_content, $headers);
	echo '<script type="text/javascript">alert("订阅成功！");window.location = document.referrer;</script>';}
    }
    /*云落私人邮箱订阅代码，可以直接删除，结束*/
?>
<?php
if (git_get_option('git_superfoot_b') && !G_is_mobile()) { ?>
<div id="footbar" style="border-top: 2px solid #8E44AD;"><ul>
<li><p class="first"><?php
    echo git_get_option('git_foottitle1'); ?></p><span><?php
    echo git_get_option('git_footconent1'); ?></span></li>
<li><p class="second"><?php
    echo git_get_option('git_foottitle2'); ?></p><span><?php
    echo git_get_option('git_footconent2'); ?></span></li>
<li><p class="third"><?php
    echo git_get_option('git_foottitle3'); ?></p><span><?php
    echo git_get_option('git_footconent3'); ?></span></li>
<li><p class="fourth"><?php
    echo git_get_option('git_foottitle4'); ?></p><span><?php
    echo git_get_option('git_footconent4'); ?></span></li>
</ul>
</div>
<?php
} ?>
<footer style="border-top: 1px solid ;background-image: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAUAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQAAgICAgICAgICAgMCAgIDBAMCAgMEBQQEBAQEBQYFBQUFBQUGBgcHCAcHBgkJCgoJCQwMDAwMDAwMDAwMDAwMDAEDAwMFBAUJBgYJDQsJCw0PDg4ODg8PDAwMDAwPDwwMDAwMDA8MDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwM/8AAEQgAAgAKAwERAAIRAQMRAf/EAEwAAQEAAAAAAAAAAAAAAAAAAAAJAQEAAAAAAAAAAAAAAAAAAAAAEAEBAAAAAAAAAAAAAAAAAAAAlREBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8Ah7DAhg//2Q=='); background-repeat: repeat;" class="footer">
<div class="footer-inner"><div class="footer-copyright"><?php
if (git_get_option('git_footcode')) echo git_get_option('git_footcode'); ?> 
<!-- 若要删除版权请加乐趣公园(googlo.me)为全站友链，或者赞助乐趣公园(支付宝：sp91@qq.com 20元)，谢谢支持 -->
<span class="trackcode pull-right"><?php
if (git_get_option('git_track')) echo git_get_option('git_track'); ?></span></div></div></footer>
<?php
if (git_get_option('git_copydialog_b') && is_singular()) echo '<script type="text/javascript">document.body.oncopy=function(){alert("复制成功！若要转载请务必保留原文链接，申明来源，谢谢合作！");}</script>'; ?>
<?php
if (git_get_option('git_snow_b')) { ?><script type="text/javascript">(function(a){a.fn.snow=function(d){var g=a('<div id="snowbox" />').css({position:"absolute","z-index":"9999",top:"-50px"}).html("&#10052;"),f=a(document).height(),b=a(document).width(),e={minSize:10,maxSize:20,newOn:1000,flakeColor:"#FFF"},d=a.extend({},e,d);var c=setInterval(function(){var l=Math.random()*b-100,j=0.5+Math.random(),h=d.minSize+Math.random()*d.maxSize,i=f-200,k=l-500+Math.random()*500,m=f*10+Math.random()*5000;g.clone().appendTo("body").css({left:l,opacity:j,"font-size":h,color:d.flakeColor}).animate({top:i,left:k,opacity:0.2},m,"linear",function(){a(this).remove()})},d.newOn)}})(jQuery);$(function(){$.fn.snow({minSize:5,maxSize:50,newOn:300})});
</script><?php
} ?>
<?php
if (git_get_option('git_copy_b') && is_singular()) echo '<script type="text/Javascript">document.oncontextmenu=function(e){return false;};document.onselectstart=function(e){return false;};</script><style>body{ -moz-user-select:none;}</style><SCRIPT LANGUAGE=javascript>if (top.location != self.location)top.location=self.location;</SCRIPT><noscript><iframe src=*.html></iframe></noscript>'; ?>
<?php
if (git_get_option('git_footercode')) echo git_get_option('git_footercode'); ?>
<?php
wp_footer();
global $dHasShare;
if ($dHasShare == true) {
    echo '<script>with(document)0[(getElementsByTagName("head")[0]||body).appendChild(createElement("script")).src="' . get_template_directory_uri() . '/assets/js/share.js?v=89860593.js?cdnversion="+~(-new Date()/36e5)];</script>';
}
?>
<style type="text/css">.nav{display:none;}@media only screen and (max-width:450px){.site-info{padding:15px 0 52px 0;}#advert_widget,.php_text .widget-text,.widget .textwidget{padding:0;}.nav{position:fixed;z-index:999;bottom:0;width:100%;height:52px;display:block;right:0;box-shadow:0px 0px 10px 3px rgba(223,233,247,1.0);-webkit-box-shadow:0px 0px 10px 3px rgba(223,233,247,1.0);-moz-box-shadow:0px 0px 10px 3px rgba(223,233,247,1.0);-o-box-shadow:0px 0px 10px 3px rgba(223,233,247,1.0);-ms-box-shadow:0px 0px 10px 3px rgba(223,233,247,1.0);}.nav{padding-left:0;margin-bottom:0;list-style:none;}.nav img{width:50px !important;height:50px !important;}.nav > ul{position:relative;z-index:1;height:52px;background:rgba(255,255,255,.85);list-style-image:none;list-style-type:none;margin:0px;padding:0px !important;}.nav ul li{position:relative;float:left;width:20%;text-align:center;margin:0px;padding:0px;list-style-image:none;list-style-type:none;top:0px;left:3%;}.nav ul li a{display:block;margin-right:auto;margin-left:auto;}}</style>
<div class="nav">
<ul>
<li> <a href="http://www.itgank.com/"><img src="http://www.itgank.com/wp-content/uploads/2017/10/2017103010031531.png"></a> </li>
<li> <a href="http://www.itgank.com/shuoshuo"><img src="http://www.itgank.com/wp-content/uploads/2017/10/2017103010031983.png"></a> </li>
<li> <a href="http://www.itgank.com/messages"><img src="http://www.itgank.com/wp-content/uploads/2017/10/2017103010031387.png"></a> </li>
<li> <a href="http://www.itgank.com/music/"><img style="animation: blink 1.0s linear infinite;" src="http://www.itgank.com/wp-content/uploads/2017/10/2017103010031610.png"></a> </li>
<li> <a href="http://www.itgank.com/about"><img src="http://www.itgank.com/wp-content/uploads/2017/10/2017103010031296.png"></a> </li>
</ul>
</div>
<script>(function(){
var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?c4a72450a51af519ad0011aa924a09a8":"https://jspassport.ssl.qhimg.com/11.0.1.js?c4a72450a51af519ad0011aa924a09a8";
document.write('<script src="' + src + '" id="sozz"><\/script>');
})();
</script>
</body>
</html>