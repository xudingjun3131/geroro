<?php
/*
	Plugin Name: WP-Cumulus 汉化版
	Plugin URI: https://www.qcgzxw.cn/
	Description: 基于Flash的WordPress的3D标签云，完美支持中文字体，已汉化版！
	Version: 1.4
	Author: zlinet
	Author URI: https://www.qcgzxw.cn/
	
	Copyright 2009, Roy Tanck

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

// check for WP context
if ( !defined('ABSPATH') ){ die(); }

//initially set the options
function wp_cumulus_install () {
	$newoptions = get_option('wpcumulus_options');
	$newoptions['width'] = '550';
	$newoptions['height'] = '375';
	$newoptions['tcolor'] = 'ffffff';
	$newoptions['tcolor2'] = 'ffffff';
	$newoptions['hicolor'] = 'ffffff';
	$newoptions['bgcolor'] = '333333';
	$newoptions['speed'] = '100';
	$newoptions['trans'] = 'false';
	$newoptions['distr'] = 'true';
	$newoptions['args'] = '';
	$newoptions['compmode'] = 'false';
	$newoptions['showwptags'] = 'true';
	$newoptions['mode'] = 'tags';
	add_option('wpcumulus_options', $newoptions);
	// widget options
	$widgetoptions = get_option('wpcumulus_widget');
	$newoptions['width'] = '160';
	$newoptions['height'] = '160';
	$newoptions['tcolor'] = '333333';
	$newoptions['tcolor2'] = '333333';
	$newoptions['hicolor'] = '000000';
	$newoptions['bgcolor'] = 'ffffff';
	$newoptions['speed'] = '100';
	$newoptions['trans'] = 'false';
	$newoptions['distr'] = 'true';
	$newoptions['args'] = '';
	$newoptions['mode'] = 'tags';
	add_option('wpcumulus_widget', $newoptions);
}

// add the admin page
function wp_cumulus_add_pages() {
	add_options_page('WP Cumulus', 'WP Cumulus', 8, __FILE__, 'wp_cumulus_options');
}

// replace tag in content with tag cloud (non-shortcode version for WP 2.3.x)
function wp_cumulus_init($content){
	if( strpos($content, '[WP-CUMULUS]') === false ){
		return $content;
	} else {
		$code = wp_cumulus_createflashcode(false);
		$content = str_replace( '[WP-CUMULUS]', $code, $content );
		return $content;
	}
}

// template function
function wp_cumulus_insert( $atts=NULL ){
	echo wp_cumulus_createflashcode( false, $atts );
}

// shortcode function
function wp_cumulus_shortcode( $atts=NULL ){
	return wp_cumulus_createflashcode( false, $atts );
}

// piece together the flash code
function wp_cumulus_createflashcode( $widget=false, $atts=NULL ){
	// get the options
	if( $widget == true ){
		$options = get_option('wpcumulus_widget');
		$soname = "widget_so";
		$divname = "wpcumuluswidgetcontent";
		// get compatibility mode variable from the main options
		$mainoptions = get_option('wpcumulus_options');
		$options['compmode'] = $mainoptions['compmode'];
		$options['showwptags'] = $mainoptions['showwptags'];
	} else if( $atts != NULL ){
		$options = shortcode_atts( get_option('wpcumulus_options'), $atts );
		$soname = "shortcode_so";
		$divname = "wpcumuluscontent";
	} else {
		$options = get_option('wpcumulus_options');
		$soname = "so";
		$divname = "wpcumuluscontent";
	}
	// get the tag cloud...
	if( $options['mode'] != "cats" ){
		ob_start();	
		wp_tag_cloud( $options['args'] );
		$tagcloud = urlencode( str_replace( "&nbsp;", " ", ob_get_clean() ) );	
	}
	// get categories
	if( $options['mode'] != "tags" ){
		ob_start();
		wp_list_categories('title_li=&show_count=1&hierarchical=0&style=none');
		$cats = urlencode( ob_get_clean() );
	}
	// get some paths
	if( function_exists('plugins_url') ){ 
		// 2.6 or better
		$movie = plugins_url('wp-cumulus/tagcloud.swf');
		$path = plugins_url('wp-cumulus/');
	} else {
		// pre 2.6
		$movie = get_bloginfo('wpurl') . "/wp-content/plugins/wp-cumulus/tagcloud.swf";
		$path = get_bloginfo('wpurl')."/wp-content/plugins/wp-cumulus/";
	}
	// add random seeds to so name and movie url to avoid collisions and force reloading (needed for IE)
	$soname .= rand(0,9999999);
	$movie .= '?r=' . rand(0,9999999);
	$divname .= rand(0,9999999);
	// write flash tag
	if( $options['compmode']!='true' ){
		$flashtag = '<!-- SWFObject embed by Geoff Stearns geoff@deconcept.com http://blog.deconcept.com/swfobject/ -->';	
		$flashtag .= '<script type="text/javascript" src="'.$path.'swfobject.js"></script>';
		$flashtag .= '<div id="'.$divname.'">';
		if( $options['showwptags'] == 'true' ){ $flashtag .= '<p>'; } else { $flashtag .= '<p style="display:none;">'; };
		// alternate content
		if( $options['mode'] != "cats" ){ $flashtag .= urldecode($tagcloud); }
		if( $options['mode'] != "tags" ){ $flashtag .= urldecode($cats); }
		$flashtag .= '</p><p>WP Cumulus Flash tag cloud by <a href="https://www.qcgzxw.cn/" rel="nofollow">https://www.qcgzxw.cn/</a> requires <a href="https://www.qcgzxw.cn/">Flash Player</a> 9 or better.</p></div>';
		$flashtag .= '<script type="text/javascript">';
		$flashtag .= 'var '.$soname.' = new SWFObject("'.$movie.'", "tagcloudflash", "'.$options['width'].'", "'.$options['height'].'", "9", "#'.$options['bgcolor'].'");';
		if( $options['trans'] == 'true' ){
			$flashtag .= $soname.'.addParam("wmode", "transparent");';
		}
		$flashtag .= $soname.'.addParam("allowScriptAccess", "always");';
		$flashtag .= $soname.'.addVariable("tcolor", "0x'.$options['tcolor'].'");';
		$flashtag .= $soname.'.addVariable("tcolor2", "0x' . ($options['tcolor2'] == "" ? $options['tcolor'] : $options['tcolor2']) . '");';
		$flashtag .= $soname.'.addVariable("hicolor", "0x' . ($options['hicolor'] == "" ? $options['tcolor'] : $options['hicolor']) . '");';
		$flashtag .= $soname.'.addVariable("tspeed", "'.$options['speed'].'");';
		$flashtag .= $soname.'.addVariable("distr", "'.$options['distr'].'");';
		$flashtag .= $soname.'.addVariable("mode", "'.$options['mode'].'");';
		// put tags in flashvar
		if( $options['mode'] != "cats" ){
			$flashtag .= $soname.'.addVariable("tagcloud", "'.urlencode('<tags>') . $tagcloud . urlencode('</tags>').'");';
		}
		// put categories in flashvar
		if( $options['mode'] != "tags" ){
			$flashtag .= $soname.'.addVariable("categories", "' . $cats . '");';
		}
		$flashtag .= $soname.'.write("'.$divname.'");';
		$flashtag .= '</script>';
	} else {
		$flashtag = '<object type="application/x-shockwave-flash" data="'.$movie.'" width="'.$options['width'].'" height="'.$options['height'].'">';
		$flashtag .= '<param name="movie" value="'.$movie.'" />';
		$flashtag .= '<param name="bgcolor" value="#'.$options['bgcolor'].'" />';
		$flashtag .= '<param name="AllowScriptAccess" value="always" />';
		if( $options['trans'] == 'true' ){
			$flashtag .= '<param name="wmode" value="transparent" />';
		}
		$flashtag .= '<param name="flashvars" value="';
		$flashtag .= 'tcolor=0x'.$options['tcolor'];
		$flashtag .= '&amp;tcolor2=0x'.$options['tcolor2'];
		$flashtag .= '&amp;hicolor=0x'.$options['hicolor'];
		$flashtag .= '&amp;tspeed='.$options['speed'];
		$flashtag .= '&amp;distr='.$options['distr'];
		$flashtag .= '&amp;mode='.$options['mode'];
		// put tags in flashvar
		if( $options['mode'] != "cats" ){
			$flashtag .= '&amp;tagcloud='.urlencode('<tags>') . $tagcloud . urlencode('</tags>');
		}
		// put categories in flashvar
		if( $options['mode'] != "tags" ){
			$flashtag .= '&amp;categories=' . $cats;
		}
		$flashtag .= '" />';
		// alternate content
		if( $options['mode'] != "cats" ){ $flashtag .= '<p>'.urldecode($tagcloud).'</p>'; }
		if( $options['mode'] != "tags" ){ $flashtag .= '<p>'.urldecode($cats).'</p>'; }
		$flashtag .= '<p>WP-Cumulus by <a href="https://www.qcgzxw.cn/" rel="nofollow">Roy Tanck</a> requires <a href="https://www.qcgzxw.cn/">Flash Player</a> 9 or better.</p>';
		$flashtag .= '</object>';
	}
	return $flashtag;
}

// options page
function wp_cumulus_options() {	
	$options = $newoptions = get_option('wpcumulus_options');
	// if submitted, process results
	if ( $_POST["wpcumulus_submit"] ) {
		$newoptions['width'] = strip_tags(stripslashes($_POST["width"]));
		$newoptions['height'] = strip_tags(stripslashes($_POST["height"]));
		$newoptions['tcolor'] = strip_tags(stripslashes($_POST["tcolor"]));
		$newoptions['tcolor2'] = strip_tags(stripslashes($_POST["tcolor2"]));
		$newoptions['hicolor'] = strip_tags(stripslashes($_POST["hicolor"]));
		$newoptions['bgcolor'] = strip_tags(stripslashes($_POST["bgcolor"]));
		$newoptions['trans'] = strip_tags(stripslashes($_POST["trans"]));
		$newoptions['speed'] = strip_tags(stripslashes($_POST["speed"]));
		$newoptions['distr'] = strip_tags(stripslashes($_POST["distr"]));
		$newoptions['mode'] = strip_tags(stripslashes($_POST["mode"]));
		$newoptions['args'] = strip_tags(stripslashes($_POST["args"]));
		$newoptions['compmode'] = strip_tags(stripslashes($_POST["compmode"]));
		$newoptions['showwptags'] = strip_tags(stripslashes($_POST["showwptags"]));
	}
	// any changes? save!
	if ( $options != $newoptions ) {
		$options = $newoptions;
		update_option('wpcumulus_options', $options);
	}
	// options form
	echo '<form method="post">';
	echo "<div class=\"wrap\"><h2>显示选项</h2>";
	echo '<table class="form-table">';
	// width
	echo '<tr valign="top"><th scope="row">标签宽度</th>';
	echo '<td><input type="text" name="width" value="'.$options['width'].'" size="5"></input><br />宽度在像素（500或以上的建议）</td></tr>';
	// height
	echo '<tr valign="top"><th scope="row">标签高度</th>';
	echo '<td><input type="text" name="height" value="'.$options['height'].'" size="5"></input><br />高度像素（宽度最好3/4左右）</td></tr>';
	// text color
	echo '<tr valign="top"><th scope="row">标签颜色</th>';
	echo '<td><input type="text" name="tcolor" value="'.$options['tcolor'].'" size="8"></input> 可选的第二颜色渐变：<input type="text" name="tcolor2" value="'.$options['tcolor2'].'" size="8"></input>  highlighl颜色可选： <input type="text" name="hicolor" value="'.$options['hicolor'].'" size="8"></input><br />这些应该是6无＃前缀字符十六进制颜色值（000000黑色，FFFFFF白）</td></tr>';
	// background color
	echo '<tr valign="top"><th scope="row">背景颜色</th>';
	echo '<td><input type="text" name="bgcolor" value="'.$options['bgcolor'].'" size="8"></input><br />6 character hex color value</td></tr>';
	// transparent
	echo '<tr valign="top"><th scope="row">使用透明模式</th>';
	echo '<td><input type="checkbox" name="trans" value="true"';
	if( $options['trans'] == "true" ){ echo ' checked="checked"'; }
	echo '></input><br />在Flash的wmode透明设置开关</td></tr>';
	// speed
	echo '<tr valign="top"><th scope="row">旋转速度</th>';
	echo '<td><input type="text" name="speed" value="'.$options['speed'].'" size="8"></input><br />速度（百分比，默认为100）</td></tr>';
	// distribution
	echo '<tr valign="top"><th scope="row">在球体上均匀分布标签</th>';
	echo '<td><input type="checkbox" name="distr" value="true"';
	if( $options['distr'] == "true" ){ echo ' checked="checked"'; }
	echo '></input><br />以相等的间隔，而不是随机的地方标签</td></tr>';
	// end table
	echo '</table>';
	// tags, cats?
	echo '<h3>输出选项</h3>';
	echo '<table class="form-table">';
	echo '<tr valign="top"><th scope="row">显示：</th>';
	echo '<td><input type="radio" name="mode" value="tags"';
	if( $options['mode'] == 'tags' ){ echo ' checked="checked" '; }
	echo '></input> 标签<br /><input type="radio" name="mode" value="cats"';
	if( $options['mode'] == 'cats' ){ echo ' checked="checked" '; }
	echo '></input> 类别<br /><input type="radio" name="mode" value="both"';
	if( $options['mode'] == 'both' ){ echo ' checked="checked" '; }
	echo '></input> 这两个（您可能要考虑降低标签的数量，使用下面的高级选项）';
	// end table
	echo '</table>';
	// advanced options
	echo '<h3>高级选项</h3><p>除非你知道自己在做什么，请保留此设置为空。</p>';
	echo '<table class="form-table">';
	// arguments
	echo '<tr valign="top"><th scope="row">wp_tag_cloud 参数</th>';
	echo '<td><input type="text" name="args" value="'.$options['args'].'" size="60"></input><br />对于wp_tag_cloud参数字符串（详情请参阅抄本）<br /><br /><strong>示例使用</strong><br />number=20 - limit the number of tags to 20<br />smallest=5&largest=50 - specify custom font sizes<br /><br /><strong>已知问题</strong><ul><li>目前，“单位”，“不支持”和“秩序”的参数进行排序。
设置“格式”到任何东西，但“单位”将导致插件失败。</li></ul></td></tr>';	
	// compatibility mode
	echo '<tr valign="top"><th scope="row">使用兼容性模式？</th>';
	echo '<td><input type="checkbox" name="compmode" value="true"';
	if( $options['compmode'] == "true" ){ echo ' checked="checked"'; }
	echo '></input><br />启用此选项将插件切换到不同的嵌入到页面中的方式。如果你的页面有标记错误，或如果你有得到WP-Cumulus正确显示使用这麻烦。这既影响了短版和部件。</td></tr>';
	// show regular tag in alternate content?
	echo '<tr valign="top"><th scope="row">显示常规的HTML标签云？</th>';
	echo '<td><input type="checkbox" name="showwptags" value="true"';
	if( $options['showwptags'] == "true" ){ echo ' checked="checked"'; }
	echo '></input><br />取消隐藏它是由FLASH单取代之前可能出现第二次左右普通的HTML标签云。启用该选项，如果搜索引擎优化和/或非闪存用户是你的主要关注。此选项会同时影响简版和小部件。</td></tr>';
	// close stuff
	echo '<input type="hidden" name="wpcumulus_submit" value="true"></input>';
	echo '</table>';
	echo '<p class="submit"><input type="submit" value="更新保存 &raquo;"></input></p>';
	echo "</div>";
	echo '</form>';
	
}

//uninstall all options
function wp_cumulus_uninstall () {
	delete_option('cumulus_options');
	delete_option('cumulus_widget');
}


// widget
function widget_init_wp_cumulus_widget() {
	// Check for required functions
	if (!function_exists('register_sidebar_widget'))
		return;

	function wp_cumulus_widget($args){
	    extract($args);
		$options = get_option('wpcumulus_widget');
		?>
	        <?php echo $before_widget; ?>
			<?php if( !empty($options['title']) ): ?>
				<?php echo $before_title . $options['title'] . $after_title; ?>
			<?php endif; ?>
			<?php
				if( !stristr( $_SERVER['PHP_SELF'], 'widgets.php' ) ){
					echo wp_cumulus_createflashcode(true);
				}
			?>
	        <?php echo $after_widget; ?>
		<?php
	}
	
	function wp_cumulus_widget_control() {
		$options = $newoptions = get_option('wpcumulus_widget');
		if ( $_POST["wpcumulus_widget_submit"] ) {
			$newoptions['title'] = strip_tags(stripslashes($_POST["wpcumulus_widget_title"]));
			$newoptions['width'] = strip_tags(stripslashes($_POST["wpcumulus_widget_width"]));
			$newoptions['height'] = strip_tags(stripslashes($_POST["wpcumulus_widget_height"]));
			$newoptions['tcolor'] = strip_tags(stripslashes($_POST["wpcumulus_widget_tcolor"]));
			$newoptions['tcolor2'] = strip_tags(stripslashes($_POST["wpcumulus_widget_tcolor2"]));
			$newoptions['hicolor'] = strip_tags(stripslashes($_POST["wpcumulus_widget_hicolor"]));
			$newoptions['bgcolor'] = strip_tags(stripslashes($_POST["wpcumulus_widget_bgcolor"]));
			$newoptions['speed'] = strip_tags(stripslashes($_POST["wpcumulus_widget_speed"]));
			$newoptions['trans'] = strip_tags(stripslashes($_POST["wpcumulus_widget_trans"]));
			$newoptions['distr'] = strip_tags(stripslashes($_POST["wpcumulus_widget_distr"]));
			$newoptions['args'] = strip_tags(stripslashes($_POST["wpcumulus_widget_args"]));
			$newoptions['mode'] = strip_tags(stripslashes($_POST["wpcumulus_widget_mode"]));
		}
		if ( $options != $newoptions ) {
			$options = $newoptions;
			update_option('wpcumulus_widget', $options);
		}
		$title = attribute_escape($options['title']);
		$width = attribute_escape($options['width']);
		$height = attribute_escape($options['height']);
		$tcolor = attribute_escape($options['tcolor']);
		$tcolor2 = attribute_escape($options['tcolor2']);
		$hicolor = attribute_escape($options['hicolor']);
		$bgcolor = attribute_escape($options['bgcolor']);
		$speed = attribute_escape($options['speed']);
		$distr = attribute_escape($options['distr']);
		$trans = attribute_escape($options['trans']);
		$args = attribute_escape($options['args']);
		$mode = attribute_escape($options['mode']);
		?>
			<p><label for="wpcumulus_widget_title"><?php _e('标题:'); ?> <input class="widefat" id="wpcumulus_widget_title" name="wpcumulus_widget_title" type="text" value="<?php echo $title; ?>" /></label></p>
			<p><label for="wpcumulus_widget_width"><?php _e('宽度:'); ?> <input class="widefat" id="wpcumulus_widget_width" name="wpcumulus_widget_width" type="text" value="<?php echo $width; ?>" /></label></p>
			<p><label for="wpcumulus_widget_height"><?php _e('高度:'); ?> <input class="widefat" id="wpcumulus_widget_height" name="wpcumulus_widget_height" type="text" value="<?php echo $height; ?>" /></label></p>
			<p><label for="wpcumulus_widget_tcolor"><?php _e('标签颜色:'); ?> <input class="widefat" id="wpcumulus_widget_tcolor" name="wpcumulus_widget_tcolor" type="text" value="<?php echo $tcolor; ?>" /></label></p>
			<p><label for="wpcumulus_widget_tcolor2"><?php _e('可选的第二颜色渐变:'); ?> <input class="widefat" id="wpcumulus_widget_tcolor2" name="wpcumulus_widget_tcolor2" type="text" value="<?php echo $tcolor2; ?>" /></label></p>
			<p><label for="wpcumulus_widget_hicolor"><?php _e('可选颜色:'); ?> <input class="widefat" id="wpcumulus_widget_hicolor" name="wpcumulus_widget_hicolor" type="text" value="<?php echo $hicolor; ?>" /></label></p>
			<p><label for="wpcumulus_widget_bgcolor"><?php _e('背景颜色:'); ?> <input class="widefat" id="wpcumulus_widget_bgcolor" name="wpcumulus_widget_bgcolor" type="text" value="<?php echo $bgcolor; ?>" /></label></p>
			<p><label for="wpcumulus_widget_trans"><input class="checkbox" id="wpcumulus_widget_trans" name="wpcumulus_widget_trans" type="checkbox" value="true" <?php if( $trans == "true" ){ echo ' checked="checked"'; } ?> > 背景透明度</label></p>
			<p><label for="wpcumulus_widget_speed"><?php _e('速度:'); ?> <input class="widefat" id="wpcumulus_widget_speed" name="wpcumulus_widget_speed" type="text" value="<?php echo $speed; ?>" /></label></p>
			<p><label for="wpcumulus_widget_distr"><input class="checkbox" id="wpcumulus_widget_distr" name="wpcumulus_widget_distr" type="checkbox" value="true" <?php if( $distr == "true" ){ echo ' checked="checked"'; } ?> > 均匀分布在球体上</label></p>
			<p>
				<input class="radio" id="wpcumulus_widget_mode" name="wpcumulus_widget_mode" type="radio" value="tags" <?php if( $mode == "tags" ){ echo ' checked="checked"'; } ?> > 标签<br />
				<input class="radio" id="wpcumulus_widget_mode" name="wpcumulus_widget_mode" type="radio" value="cats" <?php if( $mode == "cats" ){ echo ' checked="checked"'; } ?> > 类别<br />
				<input class="radio" id="wpcumulus_widget_mode" name="wpcumulus_widget_mode" type="radio" value="both" <?php if( $mode == "both" ){ echo ' checked="checked"'; } ?> > 合拼
			</p>
			<p><label for="wpcumulus_widget_args"><?php _e('wp_tag_cloud 参数:'); ?> <input class="widefat" id="wpcumulus_widget_args" name="wpcumulus_widget_args" type="text" value="<?php echo $args; ?>" /></label></p>
			<input type="hidden" id="wpcumulus_widget_submit" name="wpcumulus_widget_submit" value="1" />
		<?php
	}
	
	register_sidebar_widget( "WP-Cumulus", wp_cumulus_widget );
	register_widget_control( "WP-Cumulus", "wp_cumulus_widget_control" );
}

// Delay plugin execution until sidebar is loaded
add_action('widgets_init', 'widget_init_wp_cumulus_widget');

// add the actions
add_action('admin_menu', 'wp_cumulus_add_pages');
register_activation_hook( __FILE__, 'wp_cumulus_install' );
register_deactivation_hook( __FILE__, 'wp_cumulus_uninstall' );
if( function_exists('add_shortcode') ){
	add_shortcode('wp-cumulus', 'wp_cumulus_shortcode');
	add_shortcode('WP-CUMULUS', 'wp_cumulus_shortcode');
} else {
	add_filter('the_content','wp_cumulus_init');
}

?>