<?php
/**
* class-points-shortcodes.php
*/
class Points_Shortcodes {
	/**
	 * Add shortcodes.
	 */
	public static function init() {
		add_shortcode( 'points_users_list', array( __CLASS__, 'points_users_list' ) );
		add_shortcode( 'points_user_points', array( __CLASS__, 'points_user_points' ) );
		add_shortcode( 'pay', array( __CLASS__, 'pay' ) );

	}
	public static function points_users_list ( $atts, $content = null ) {
		$options = shortcode_atts(
				array(
						'limit'  => 10,
						'order_by' => 'points',
						'order' => 'DESC'
				),
				$atts
		);
		extract( $options );
		$output = "";
		$pointsusers = Points::get_users();
		if ( sizeof( $pointsusers )>0 ) {
			foreach ( $pointsusers as $pointsuser ) {
				$total = Points::get_user_total_points( $pointsuser );
				$output .='<div class="points-user">';
				$output .= '<span style="font-weight:bold;width:100%;" class="points-user-username">';
				$output .= get_user_meta ( $pointsuser, 'nickname', true );
				$output .= ':</span>';
				$output .= '<span class="points-user-points">';
				$output .= " ". $total . " " . get_option('points-points_label', POINTS_DEFAULT_POINTS_LABEL);
				$output .= '</span>';
				$output .= '</div>';
			}
		} else {
			$output .= '<p>No users</p>';
		}
		return $output;
	}
	public static function points_user_points ( $atts, $content = null ) {
		$output = "";
		$options = shortcode_atts(
				array(
						'id'  => ""
				),
				$atts
		);
		extract( $options );
		//echo 'ID:' . $id . "-" . $options['id'];
		if ( $id == "" ) {
			$id = get_current_user_id();
		}
		if ( $id !== 0 ) {
			$points = Points::get_user_total_points( $id, POINTS_STATUS_ACCEPTED );
			$output .= $points;
		}
		return $output;
	}
	/*付费可见短代码开始*/
	public static function pay ($atts, $content = null) {
		global $wpdb;
		$user_id = get_current_user_id();
		$description = get_the_ID();
		$result = $wpdb->get_row( "SELECT description FROM " . Points_Database::points_get_table( "users" ) . " WHERE user_id=".$user_id." AND description=" . $description . " AND status='accepted' LIMIT 0, 1;", ARRAY_A )['description'];//验证是否支付，如报错，请升级PHP版本
		if(isset($_POST['buy_content_points'])){//如果点击按钮的话
			Points::set_points( -$_POST['buy_content_points'],
					$user_id,
					array(
						'description' => $description,
						'status' => get_option( 'points-points_status', POINTS_STATUS_ACCEPTED )
					)
			);//扣除金币
			return '<script type="text/javascript">alert("支付成功，等待页面刷新！");window.location=document.referrer;</script>';
		}//endif
		extract(shortcode_atts(array('point'=>"10"), $atts));
			$notice ='';
		if( $result == $description && is_user_logged_in()){
		    $notice .='<div style="background-color: #ffffe0;border:1px solid #993;padding:1em;" class="pay-content">';
		    $notice .= $content;
		    $notice .='</div>';
			return $notice;
		}
		if(!is_user_logged_in()){
			$notice .='<div style="background-color: #ffffe0;border:1px solid #993;padding:1em;" class="pay-content">';
			$notice .='<p style="color:red;">本段内容需要付费查看</p>';
			$notice .='<p style="color:red;">您未登录，请 <a id="showdiv" href="#loginbox" data-original-title="点击登录">点击登录</a>  或者<a target="_blank" href="/wp-login.php?action=register">立即注册</a></p>';
			$notice .='</div>';
			return $notice;
		}else{
			if(!current_user_can( 'administrator' )){
			if( Points::get_user_total_points($user_id, POINTS_STATUS_ACCEPTED ) < $point && $result !== $description){
			$notice .='<div style="background-color: #ffffe0;border: 1px solid #993;padding:1em;" class="pay-content">';
			$notice .='<p style="color:red;">本段内容需要支付 '.$point.''. get_option('points-points_label', POINTS_DEFAULT_POINTS_LABEL).' 查看</p>';
			$notice .='<p style="color:red;">您当前拥有 <em><strong>'.Points::get_user_total_points($user_id, POINTS_STATUS_ACCEPTED ).'</strong></em> 金币，您的金币不足，请充值</p>';
			if (git_get_option('git_pagehtml_b')){
			$notice .='<p><a class="lhb" href="' . home_url() . '/chongzhi.html" target="_blank" rel="nofollow" data-original-title="立即充值" title="">立即充值</a></p>';
			}else{
			$notice .='<p><a class="lhb" href="' . home_url() . '/chongzhi" target="_blank" rel="nofollow" data-original-title="立即充值" title="">立即充值</a></p>';
			}
			$notice .='</div>';
			return $notice;
			}
			}else{return $content;}
			if(!current_user_can( 'administrator' )){
			if(Points::get_user_total_points($user_id, POINTS_STATUS_ACCEPTED ) >= $point && $result !== $description){
			$notice .='<div style="background-color: #ffffe0;border: 1px solid #993;padding:1em;" class="pay-content">';
			$notice .='<p style="color:red;">本段内容需要付费查看，您当前拥有 <em><strong>'.Points::get_user_total_points($user_id, POINTS_STATUS_ACCEPTED ).'</strong></em> 金币</p>';
			$notice .='<form method="post">';
			$notice .='<input type="hidden" id="buy_content_points" name="buy_content_points" value="'.$point.'" />';
			$notice .='<p><input type="submit" value="支付'.$point.''. get_option('points-points_label', POINTS_DEFAULT_POINTS_LABEL).'"/></p>';
			$notice .='</form>';
			$notice .='</div>';
			return $notice;
			}
			}else{return $content;}
		}
	}/*付费可见短代码结束*/
}
Points_Shortcodes::init();